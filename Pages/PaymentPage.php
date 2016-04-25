<?php

require_once(ROOT_DIR . 'Pages/Page.php');
require_once(ROOT_DIR . 'Pages/ActionPage.php');
require_once(ROOT_DIR . 'Presenters/PaymentPresenter.php');

/**
 * Created by PhpStorm.
 * User: Burak
 * Date: 10/7/2015
 * Time: 3:02 PM
 */
interface IPaymentPage extends IPage, IActionPage{
    public function HandlePaymentResponse();

    public function SetPayUForm($payUForm);


    public function SetUserTrainingType($trainingtype);
    public function SetUserTrainingLevel($tranininglevel);
    public function SetPrice($price);
    public function SetUserName($username);
    public function SetUserCredit($credit);


}

class PaymentPage extends ActionPage implements  IPaymentPage
{
    private $presenter;
    private $PayU;


    public function __construct()
    {
        parent::__construct('Payment');
        $this->presenter = new PaymentPresenter($this, new UserRepository());

    }
    public function HandlePaymentResponse()
    {

    }

    public function PageLoad()
    {
       $this->presenter->PageLoad();
       $this->Display("payment.tpl");
    }

    public function Redirect($url)
    {
        // TODO: Implement Redirect() method.
    }

    public function RedirectToError($errorMessageId = ErrorMessages::UNKNOWN_ERROR, $lastPage = '')
    {
        // TODO: Implement RedirectToError() method.
    }

    public function IsPostBack()
    {
        // TODO: Implement IsPostBack() method.
    }

    public function IsValid()
    {
        // TODO: Implement IsValid() method.
    }

    public function GetLastPage()
    {
        // TODO: Implement GetLastPage() method.
    }

    public function RegisterValidator($validatorId, $validator)
    {
        // TODO: Implement RegisterValidator() method.
    }

    /**
     * @return void
     */
    public function ProcessAction()
    {
        // TODO: Implement ProcessAction() method.
    }

    /**
     * @param $dataRequest string
     * @return void
     */
    public function ProcessDataRequest($dataRequest)
    {
        // TODO: Implement ProcessDataRequest() method.
    }

    /**
     * @return void
     */
    public function ProcessPageLoad()
    {

    }



    public function SetUserTrainingType($trainingtype)
    {
        $this->Set("UserTrainingType", $trainingtype);
    }

    public function SetUserTrainingLevel($traininglevel)
    {
        $this->Set("UserTrainingLevel", $traininglevel);
    }

    public function SetPayUForm($payUForm)
    {
       $this->Set("PayU", $payUForm);
    }

    public function SetPrice($price){
        $this->Set("Price", $price);
    }

    public function SetUserName($username)
    {
        $this->Set("Name", $username);
    }

    public function SetUserCredit($credit)
    {
        $this->Set('TrainingCredit', $credit);
    }
}