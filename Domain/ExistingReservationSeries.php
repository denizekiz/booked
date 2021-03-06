<?php
/**
Copyright 2011-2015 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'lib/Common/namespace.php');
require_once(ROOT_DIR . 'Domain/Events/ReservationEvents.php');

class ExistingReservationSeries extends ReservationSeries
{
	/**
	 * @var ISeriesUpdateScope
	 */
	protected $seriesUpdateStrategy;

	/**
	 * @var array|SeriesEvent[]
	 */
	protected $events = array();

	/**
	 * @var array|int[]
	 */
	private $_deleteRequestIds = array();

	/**
	 * @var array|int[]
	 */
	private $_updateRequestIds = array();

	/**
	 * @var array|int[]
	 */
	private $_removedAttachmentIds = array();

	/**
	 * @var array|int[]
	 */
	protected $attachmentIds = array();

	public function __construct()
	{
		parent::__construct();
		$this->ApplyChangesTo(SeriesUpdateScope::FullSeries);
	}

	public function SeriesUpdateScope()
	{
		return $this->seriesUpdateStrategy->GetScope();
	}

	/**
	 * @internal
	 */
	public function WithId($seriesId)
	{
		$this->SetSeriesId($seriesId);
	}

	/**
	 * @internal
	 */
	public function WithOwner($userId)
	{
		$this->_userId = $userId;
	}

	/**
	 * @internal
	 */
	public function WithPrimaryResource(BookableResource $resource)
	{
		$this->_resource = $resource;
	}

	/**
	 * @internal
	 */
	public function WithTitle($title)
	{
		$this->_title = $title;
	}

	/**
	 * @internal
	 */
	public function WithDescription($description)
	{
		$this->_description = $description;
	}

	/**
	 * @internal
	 */
	public function WithResource(BookableResource $resource)
	{
		$this->AddResource($resource);
	}

	/**
	 * @var IRepeatOptions
	 * @internal
	 */
	private $_originalRepeatOptions;

	/**
	 * @internal
	 */
	public function WithRepeatOptions(IRepeatOptions $repeatOptions)
	{
		$this->_originalRepeatOptions = $repeatOptions;
		$this->_repeatOptions = $repeatOptions;
	}

	/**
	 * @internal
	 */
	public function WithCurrentInstance(Reservation $reservation)
	{
		$this->AddInstance($reservation);
		$this->SetCurrentInstance($reservation);
	}

	/**
	 * @internal
	 */
	public function WithInstance(Reservation $reservation)
	{
		$this->AddInstance($reservation);
	}

	/**
	 * @param $statusId int|ReservationStatus
	 * @return void
	 */
	public function WithStatus($statusId)
	{
		$this->statusId = $statusId;
	}

	/**
	 * @param ReservationAccessory $accessory
	 * @return void
	 */
	public function WithAccessory(ReservationAccessory $accessory)
	{
		$this->_accessories[] = $accessory;
	}

	/**
	 * @param AttributeValue $attributeValue
	 */
	public function WithAttribute(AttributeValue $attributeValue)
	{
		$this->AddAttributeValue($attributeValue);
	}

	/**
	 * @param $fileId int
	 * @param $extension string
	 */
	public function WithAttachment($fileId, $extension)
	{
		$this->attachmentIds[$fileId] = $extension;
	}

	/**
	 * @internal
	 */
	public function RemoveInstance(Reservation $reservation)
	{
		if ($reservation == $this->CurrentInstance())
		{
			return; // never remove the current instance
		}

		$instanceKey = $this->GetNewKey($reservation);
		unset($this->instances[$instanceKey]);

		$this->AddEvent(new InstanceRemovedEvent($reservation, $this));
		$this->_deleteRequestIds[] = $reservation->ReservationId();
	}

	public function RequiresNewSeries()
	{
		return $this->seriesUpdateStrategy->RequiresNewSeries();
	}

	/**
	 * @return int|ReservationStatus
	 */
	public function StatusId()
	{
		return $this->statusId;
	}

	/**
	 * @param int $userId
	 * @param BookableResource $resource
	 * @param string $title
	 * @param string $description
	 * @param UserSession $updatedBy
	 */
	public function Update($userId, BookableResource $resource, $title, $description, UserSession $updatedBy)
	{
		$this->_bookedBy = $updatedBy;

		if ($this->seriesUpdateStrategy->RequiresNewSeries())
		{
			$this->AddEvent(new SeriesBranchedEvent($this));
			$this->Repeats($this->seriesUpdateStrategy->GetRepeatOptions($this));
		}

		if ($this->_resource->GetId() != $resource->GetId())
		{
			$this->AddEvent(new ResourceRemovedEvent($this->_resource, $this));
			$this->AddEvent(new ResourceAddedEvent($resource, ResourceLevel::Primary, $this));
		}

		if ($this->UserId() != $userId)
		{
			$this->AddEvent(new OwnerChangedEvent($this, $this->UserId(), $userId));
		}

		$this->_userId = $userId;
		$this->_resource = $resource;
		$this->_title = $title;
		$this->_description = $description;
	}

	/**
	 * @param DateRange $reservationDate
	 */
	public function UpdateDuration(DateRange $reservationDate)
	{
		$currentDuration = $this->CurrentInstance()->Duration();

		if ($currentDuration->Equals($reservationDate))
		{
			return;
		}

		$currentBegin = $currentDuration->GetBegin();
		$currentEnd = $currentDuration->GetEnd();

		$startTimeAdjustment = $currentBegin->GetDifference($reservationDate->GetBegin());
		$endTimeAdjustment = $currentEnd->GetDifference($reservationDate->GetEnd());

		Log::Debug('Updating duration for series %s', $this->SeriesId());

		foreach ($this->Instances() as $instance)
		{
			$newStart = $instance->StartDate()->ApplyDifference($startTimeAdjustment);
			$newEnd = $instance->EndDate()->ApplyDifference($endTimeAdjustment);

			$this->UpdateInstance($instance, new DateRange($newStart, $newEnd));
		}
	}

	/**
	 * @param SeriesUpdateScope|string $seriesUpdateScope
	 */
	public function ApplyChangesTo($seriesUpdateScope)
	{
		$this->seriesUpdateStrategy = SeriesUpdateScope::CreateStrategy($seriesUpdateScope);
	}

	/**
	 * @param IRepeatOptions $repeatOptions
	 */
	public function Repeats(IRepeatOptions $repeatOptions)
	{
		if ($this->seriesUpdateStrategy->CanChangeRepeatTo($this, $repeatOptions))
		{
			Log::Debug('Updating recurrence for series %s', $this->SeriesId());

			$this->_repeatOptions = $repeatOptions;

			foreach ($this->instances as $instance)
			{
				// delete all reservation instances which will be replaced
				if ($this->seriesUpdateStrategy->ShouldInstanceBeRemoved($this, $instance))
				{
					$this->RemoveInstance($instance);
				}
			}

			// create all future instances
			parent::Repeats($repeatOptions);
		}
	}

	/**
	 * @param $resources array|BookableResource([]
	 * @return void
	 */
	public function ChangeResources($resources)
	{
		$diff = new ArrayDiff($this->_additionalResources, $resources);

		$added = $diff->GetAddedToArray1();
		$removed = $diff->GetRemovedFromArray1();

		/** @var $resource BookableResource */
		foreach ($added as $resource)
		{
			$this->AddEvent(new ResourceAddedEvent($resource, ResourceLevel::Additional, $this));
		}

		/** @var $resource BookableResource */
		foreach ($removed as $resource)
		{
			$this->AddEvent(new ResourceRemovedEvent($resource, $this));
		}

		$this->_additionalResources = $resources;
	}

	/**
	 * @param UserSession $deletedBy
	 * @return void
	 */
	public function Delete(UserSession $deletedBy)
	{
		$this->_bookedBy = $deletedBy;

		if (!$this->AppliesToAllInstances())
		{
			$instances = $this->Instances();
			Log::Debug('Removing %s instances of series %s', count($instances), $this->SeriesId());

			foreach ($instances as $instance)
			{
				Log::Debug("Removing instance %s from series %s", $instance->ReferenceNumber(), $this->SeriesId());

				$this->AddEvent(new InstanceRemovedEvent($instance, $this));
			}
		}
		else
		{
			Log::Debug("Removing series %s", $this->SeriesId());

			$this->AddEvent(new SeriesDeletedEvent($this));
		}
	}

	/**
	 * @param UserSession $approvedBy
	 * @return void
	 */
	public function Approve(UserSession $approvedBy)
	{
		$this->_bookedBy = $approvedBy;

		$this->statusId = ReservationStatus::Created;

		Log::Debug("Approving series %s", $this->SeriesId());

		$this->AddEvent(new SeriesApprovedEvent($this));
	}

	/**
	 * @return bool
	 */
	private function AppliesToAllInstances()
	{
		return count($this->instances) == count($this->Instances());
	}

	public function UpdateBookedBy(UserSession $bookedBy)
	{
		$this->_bookedBy = $bookedBy;
	}

	protected function AddNewInstance(DateRange $reservationDate)
	{
		if (!$this->InstanceStartsOnDate($reservationDate))
		{
			Log::Debug('Adding instance for series %s on %s', $this->SeriesId(), $reservationDate);

			$newInstance = parent::AddNewInstance($reservationDate);
			$this->AddEvent(new InstanceAddedEvent($newInstance, $this));
		}
	}

	/**
	 * @internal
	 */
	public function UpdateInstance(Reservation $instance, DateRange $newDate)
	{
		unset($this->instances[$this->CreateInstanceKey($instance)]);

		$instance->SetReservationDate($newDate);
		$this->AddInstance($instance);

		$this->RaiseInstanceUpdatedEvent($instance);

	}

	private function RaiseInstanceUpdatedEvent(Reservation $instance)
	{
		if (!$instance->IsNew())
		{
			$this->AddEvent(new InstanceUpdatedEvent($instance, $this));
			$this->_updateRequestIds[] = $instance->ReservationId();
		}
	}

	/**
	 * @return array|SeriesEvent[]
	 */
	public function GetEvents()
	{
		$uniqueEvents = array_unique($this->events);
		usort($uniqueEvents, array('SeriesEvent', 'Compare'));

		return $uniqueEvents;
	}

	public function Instances()
	{
		return $this->seriesUpdateStrategy->Instances($this);
	}

	/**
	 * @internal
	 */
	public function _Instances()
	{
		return $this->instances;
	}

	public function AddEvent(SeriesEvent $event)
	{
		$this->events[] = $event;
	}

	public function IsMarkedForDelete($reservationId)
	{
		return in_array($reservationId, $this->_deleteRequestIds);
	}

	public function IsMarkedForUpdate($reservationId)
	{
		return in_array($reservationId, $this->_updateRequestIds);
	}

	/**
	 * @param int[] $participantIds
	 * @return void
	 */
	public function ChangeParticipants($participantIds)
	{
		/** @var Reservation $instance */
		foreach ($this->Instances() as $instance)
		{
			$numberChanged = $instance->ChangeParticipants($participantIds);
			if ($numberChanged != 0)
			{
				$this->RaiseInstanceUpdatedEvent($instance);
			}
		}
	}

	/**
	 * @param int[] $inviteeIds
	 * @return void
	 */
	public function ChangeInvitees($inviteeIds)
	{
		/** @var Reservation $instance */
		foreach ($this->Instances() as $instance)
		{
			$numberChanged = $instance->ChangeInvitees($inviteeIds);
			if ($numberChanged != 0)
			{
				$this->RaiseInstanceUpdatedEvent($instance);
			}
		}
	}

	/**
	 * @param int $inviteeId
	 */
	public function AcceptInvitation($inviteeId)
	{
		// Accept only Single Instance Fix by Burak C.
		$instance = $this->CurrentInstance();
		$wasAccepted = $instance->AcceptInvitation($inviteeId);
		if ($wasAccepted)
		{
			$this->RaiseInstanceUpdatedEvent($instance);
		}

		/** @var Reservation $instance */
		/*
		foreach ($this->Instances() as $instance)
		{
			$wasAccepted = $instance->AcceptInvitation($inviteeId);
			if ($wasAccepted)
			{
				$this->RaiseInstanceUpdatedEvent($instance);
			}
		}*/

	}

	/**
	 * @param int $inviteeId
	 */
	public function DeclineInvitation($inviteeId)
	{
		// Decline Instance Fix by Burak C.

		$instance = $this->CurrentInstance();
		$wasAccepted = $instance->DeclineInvitation($inviteeId);
		if ($wasAccepted)
		{
			$this->RaiseInstanceUpdatedEvent($instance);
		}
		/** @var Reservation $instance */
		/*foreach ($this->Instances() as $instance)
		{
			$wasAccepted = $instance->DeclineInvitation($inviteeId);
			if ($wasAccepted)
			{
				$this->RaiseInstanceUpdatedEvent($instance);
			}
		}*/
	}

	/**
	 * @param int $participantId
	 */
	public function CancelAllParticipation($participantId)
	{
		/** @var Reservation $instance */
		foreach ($this->Instances() as $instance)
		{
			$wasCancelled = $instance->CancelParticipation($participantId);
			if ($wasCancelled)
			{
				$this->RaiseInstanceUpdatedEvent($instance);
			}
		}
	}

	/**
	 * @param int $participantId
	 */
	public function CancelInstanceParticipation($participantId)
	{
		if ($this->CurrentInstance()->CancelParticipation($participantId))
		{
			$this->RaiseInstanceUpdatedEvent($this->CurrentInstance());
		}
	}

	/**
	 * @param int $participantId
	 */
	public function JoinReservationSeries($participantId)
	{
		if (!$this->GetAllowParticipation())
		{
			return;
		}

		/** @var Reservation $instance */
		foreach ($this->Instances() as $instance)
		{

			$joined = $instance->JoinReservation($participantId);
			if ($joined)
			{
				$this->RaiseInstanceUpdatedEvent($instance);
			}
		}
	}

	public function JoinInviteeList($participantId)
	{
		if (!$this->GetAllowParticipation())
		{
			return;
		}

		$invitees =$this->CurrentInstance()->AddedInvitees();
		$invitees[]=$participantId;
		$joined=$this->ChangeInvitees($invitees);

		if ($joined)
		{
			$this->RaiseInstanceUpdatedEvent($this->CurrentInstance());
		}
	}

	public function JoinInviteeListSeries($participantId)
	{
		if (!$this->GetAllowParticipation())
		{
			return;
		}

		/** @var Reservation $instance */
		foreach ($this->Instances() as $instance)
		{

			$invitees =$instance->AddedInvitees();
			$invitees[]=$participantId;
			$joined= $instance->ChangeInvitees($invitees);
			if ($joined)
			{
				$this->RaiseInstanceUpdatedEvent($instance);
			}
		}
	}


	/**
	 * @param int $participantId
	 */
	public function JoinReservation($participantId)
	{
		if (!$this->GetAllowParticipation())
		{
			return;
		}

		$joined = $this->CurrentInstance()->JoinReservation($participantId);
		if ($joined)
		{
			$this->RaiseInstanceUpdatedEvent($this->CurrentInstance());
		}
	}

	/**
	 * @param array|ReservationAccessory[] $accessories
	 * @return void
	 */
	public function ChangeAccessories($accessories)
	{
		$diff = new ArrayDiff($this->_accessories, $accessories);

		$added = $diff->GetAddedToArray1();
		$removed = $diff->GetRemovedFromArray1();

		/** @var $accessory ReservationAccessory */
		foreach ($added as $accessory)
		{
			$this->AddEvent(new AccessoryAddedEvent($accessory, $this));
		}

		/** @var $accessory ReservationAccessory */
		foreach ($removed as $accessory)
		{
			$this->AddEvent(new AccessoryRemovedEvent($accessory, $this));
		}

		$this->_accessories = $accessories;
	}

	/**
	 * @param $attribute AttributeValue
	 */
	public function ChangeAttribute($attribute)
	{
		$this->AddEvent(new AttributeAddedEvent($attribute, $this));
		$this->AddEvent(new AttributeRemovedEvent($attribute, $this));
		$this->AddAttributeValue($attribute);
	}

	/**
	 * @param $attributes AttributeValue[]|array
	 */
	public function ChangeAttributes($attributes)
	{
		$diff = new ArrayDiff($this->_attributeValues, $attributes);

		$added = $diff->GetAddedToArray1();
		$removed = $diff->GetRemovedFromArray1();

		/** @var $attribute AttributeValue */
		foreach ($added as $attribute)
		{
			$this->AddEvent(new AttributeAddedEvent($attribute, $this));
		}

		/** @var $accessory ReservationAccessory */
		foreach ($removed as $attribute)
		{
			$this->AddEvent(new AttributeRemovedEvent($attribute, $this));
		}

		$this->_attributeValues = array();
		foreach ($attributes as $attribute)
		{
			$this->AddAttributeValue($attribute);
		}
	}

	/**
	 * @param $fileId int
	 */
	public function RemoveAttachment($fileId)
	{
		$this->AddEvent(new AttachmentRemovedEvent($this, $fileId, $this->attachmentIds[$fileId]));
		$this->_removedAttachmentIds[] = $fileId;
	}

	/**
	 * @return array|int[]
	 */
	public function RemovedAttachmentIds()
	{
		return $this->_removedAttachmentIds;
	}

	public function AddStartReminder(ReservationReminder $reminder)
	{
		if ($reminder->MinutesPrior() != $this->startReminder->MinutesPrior())
		{
			$this->AddEvent(new ReminderAddedEvent($this, $reminder->MinutesPrior(), ReservationReminderType::Start));
			parent::AddStartReminder($reminder);
		}
	}

	public function AddEndReminder(ReservationReminder $reminder)
	{
		if ($reminder->MinutesPrior() != $this->endReminder->MinutesPrior())
		{
			$this->AddEvent(new ReminderAddedEvent($this, $reminder->MinutesPrior(), ReservationReminderType::End));
			parent::AddEndReminder($reminder);
		}
	}

	public function RemoveStartReminder()
	{
		if ($this->startReminder->Enabled())
		{
			$this->startReminder = ReservationReminder::None();
			$this->AddEvent(new ReminderRemovedEvent($this, ReservationReminderType::Start));
		}
	}

	public function RemoveEndReminder()
	{
		if ($this->endReminder->Enabled())
		{
			$this->endReminder = ReservationReminder::None();
			$this->AddEvent(new ReminderRemovedEvent($this, ReservationReminderType::End));
		}
	}

	public function WithStartReminder(ReservationReminder $reminder)
	{
		$this->startReminder = $reminder;
	}

	public function WithEndReminder(ReservationReminder $reminder)
	{
		$this->endReminder = $reminder;
	}
}