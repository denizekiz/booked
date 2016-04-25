<?php
/**
 * Copyright 2011-2015 Nick Korbel
 *
 * This file is part of Booked Scheduler.
 *
 * Booked Scheduler is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Booked Scheduler is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */


require_once(ROOT_DIR . 'Pages/ParticipationPage.php');
require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Validation/namespace.php');

class ParticipationPresenter
{
	/**
	 * @var IParticipationPage
	 */
	private $page;

	/**
	 * @var IReservationRepository
	 */
	private $reservationRepository;

	/**
	 * @var IReservationViewRepository
	 */
	private $reservationViewRepository;

	/**
	 * @var IReservationValidationRule[]
	 */
	private $rules;


	public function __construct(IParticipationPage $page,
								IReservationRepository $reservationRepository,
								IReservationViewRepository $reservationViewRepository,
								$rules = array())
	{
		$this->page = $page;
		$this->reservationRepository = $reservationRepository;
		$this->reservationViewRepository = $reservationViewRepository;
		$this->rules = $rules;
	}

	public function PageLoad()
	{
		$invitationAction = $this->page->GetInvitationAction();

		if (!empty($invitationAction))
		{
			$resultString = $this->HandleInvitationAction($invitationAction);

			if ($this->page->GetResponseType() == 'json')
			{
				$this->page->DisplayResult($resultString);
				return;
			}

			$this->page->SetResult($resultString);
		}

		$startDate = Date::Now();
		$endDate = $startDate->AddDays(30);
		$user = ServiceLocator::GetServer()->GetUserSession();
		$userId = $user->UserId;

		$reservations = $this->reservationViewRepository->GetReservationList($startDate, $endDate, $userId, ReservationUserLevel::INVITEE);

		$this->page->SetTimezone($user->Timezone);
		$this->page->BindReservations($reservations);
		$this->page->DisplayParticipation();
	}

	/**
	 * @param $invitationAction
	 * @return string|null
	 */



	private function HandleInvitationAction($invitationAction)
	{
		$referenceNumber = $this->page->GetInvitationReferenceNumber();
		$userId = $this->page->GetUserId();
		$userRepository = new UserRepository();
		$user = $userRepository->LoadById($userId);
		$userCredit = $user->GetAttributeValue(8);

		Log::Debug('Invitation action %s for user %s and reference number %s', $invitationAction, $userId, $referenceNumber);

		$series = $this->reservationRepository->LoadByReferenceNumber($referenceNumber);

		foreach ($this->rules as $rule)
		{
			$ruleResult = $rule->Validate($series);

			if (!$ruleResult->IsValid())
			{
				return Resources::GetInstance()->GetString('ParticipationNotAllowed');
			}
		}

		$error = null;
		$reservationCredit = $series->GetAttributeValue(6);
		if ($invitationAction == InvitationAction::Accept)
		{


			$error = $this->CheckCapacityAndReturnAnyError($series);
			if(!$error && ($userCredit >= $reservationCredit)) {

				$userCredit -= $reservationCredit;
				$user->ChangeCustomAttribute(8, $userCredit);
				$userRepository->Update($user);

				$series->AcceptInvitation($userId);



			}
			else
			{
				$error ="Yeterli kredininiz bulunmamaktadır. Kredi almak için ödeme gerçekleştirebilirsiniz.";

			}
		}
		if ($invitationAction == InvitationAction::Decline)
		{
			$series->DeclineInvitation($userId);
		}
		if ($invitationAction == InvitationAction::CancelInstance)
		{
			$cancelCredit =$user->GetAttributeValue(12); //iptal hakkı
			if($cancelCredit>0) {
				$cancelCredit-=1;

				$reservationCredit = $series->GetAttributeValue(6);
				$userCredit += $reservationCredit;
				$user->ChangeCustomAttribute(8, $userCredit);
				$user->ChangeCustomAttribute(12,$cancelCredit);
/*   first training date optional logic
				$firstTrainingDate= $user->GetAttributeValue(19);
				$reservationDate= $series->CurrentInstance()->StartDate();
				// One more logic should be added to cancel.

				if(strcmp($firstTrainingDate,$reservationDate)==0 ) {

					$user->ChangeCustomAttribute(19,null);
				}
*/

				$userRepository->Update($user);


				$series->CancelInstanceParticipation($userId);

			}else
			{

				$error="You dont have cancel right";
			}
		}
		if ($invitationAction == InvitationAction::CancelAll)
		{
			$series->CancelInstanceParticipation($userId);

			$series->CancelAllParticipation($userId);
		}
		if ($invitationAction == InvitationAction::Join)
		{
			if (!$series->GetAllowParticipation())
			{
				$error = Resources::GetInstance()->GetString('ParticipationNotAllowed');
			}
			else
			{

				$error = $this->CheckCapacityAndReturnAnyError($series);
				$reservationCredit = $series->GetAttributeValue(6);

				if(!$error && ($userCredit >= $reservationCredit))
				{

					$userCredit -=  $reservationCredit;
					$user->ChangeCustomAttribute(8,$userCredit);

					$firstTrainingDate= $user->GetAttributeValue(19);
					$reservationDate= $series->CurrentInstance()->StartDate()->ToTimezone($user->Timezone());
					// One more logic should be added to cancel.

					if($firstTrainingDate == null ||$firstTrainingDate == 0 ) {
					$firstTrainingDate =	$reservationDate;
						$user->ChangeCustomAttribute(19,$firstTrainingDate);
					}

					$userRepository->Update($user);
					$series->JoinReservationSeries($userId);
				}

				else
				{

			   $series->JoinInviteeList($userId);



					$error = "Eğitime katılmak için ödeme yapmanız gerekmektedir. Ödeme yaptıktan sonra eğitiminizi onaylayıp katılabilirsiniz.  ";
				}
			}
		}
		if ($invitationAction == InvitationAction::JoinAll)
		{
			if (!$series->GetAllowParticipation())
			{
				$error = Resources::GetInstance()->GetString('ParticipationNotAllowed');
			}
			else
			{
				$reservationAmount=count($series->Instances());

				$reservationCredit = $reservationAmount*$series->GetAttributeValue(6);


/**  Bugfix added by Deniz. prevention against participation to reservation in occurence of an error * */
				$error = $this->CheckCapacityAndReturnAnyError($series);
				if(!$error && ($userCredit>=$reservationCredit))
				{


					$userCredit -= $reservationCredit;
					$user->ChangeCustomAttribute(8,$userCredit);

					$firstTrainingDate= $user->GetAttributeValue(19);
					$reservationDate= $series->CurrentInstance()->StartDate()->ToTimezone($user->Timezone());

						// One more logic should be added to cancel.

					if($firstTrainingDate == null || $firstTrainingDate == 0 ) {

						$user->ChangeCustomAttribute(19,$reservationDate);
					}

					$userRepository->Update($user);
					//$series->CurrentInstance()->With
					$series->JoinReservationSeries($userId);
				}
				else
				{

					$series->JoinInviteeListSeries($userId);
					$error = "Eğitime katılmak için ödeme yapmanız gerekmektedir. Ödeme yaptıktan sonra eğitiminizi onaylayıp katılabilirsiniz.";
				}
			}
		}


		$this->reservationRepository->Update($series);

		return $error;
	}

	/**
	 * @param ExistingReservationSeries $series
	 * @return mixed|null|string
	 */
	private function CheckCapacityAndReturnAnyError($series)
	{
		foreach ($series->AllResources() as $resource)
		{


			/** checks if Max Participants value is assigned **/
			if (!$resource->HasMaxParticipants())
			{
				continue;
			}

			/** @var $instance Reservation */
			foreach ($series->Instances() as $instance)
			{
				$numberOfParticipants = count($instance->Participants());

				if (($numberOfParticipants +1)  > $resource->GetMaxParticipants() )
				{
					return Resources::GetInstance()->GetString('MaxParticipantsError', array($resource->GetName(), $resource->GetMaxParticipants()));
				}
			}
		}

		return null;
	}

}
