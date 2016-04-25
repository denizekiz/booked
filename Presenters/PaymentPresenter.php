<?php


require_once(ROOT_DIR . 'Pages/PaymentPage.php');
require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'lib/Config/namespace.php');
require_once(ROOT_DIR . 'lib/Common/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Attributes/namespace.php');
require_once(ROOT_DIR . 'lib/external/PayU/PayuLiveUpdate.class.php');
/**
 * Created by PhpStorm.
 * User: Burak
 * Date: 10/8/2015
 * Time: 4:07 PM
 */
class PaymentPresenter
{
    private $page = null;

    private $user;
    private $userRepository;
    private $_priceconf;

    private $_trainingLevel;
    private $_trainingType;
    private $_sailingclub;
    private $_price;

    public function __construct(IPaymentPage $page, IUserRepository $userRepository){
        $this->userRepository = $userRepository;
        $this->user = $this->userRepository->LoadById(ServiceLocator::GetServer()->GetUserSession()->UserId);
        $this->page = $page;

    }

    public function PageLoad(){
        $this->_sailingclub = $this->user->GetAttributeValue(7);
        $this->_trainingLevel = $this->user->GetAttributeValue(17);
        $this->_trainingType = $this->user->GetAttributeValue(15);
        $this->SetPriceTable();
        $this->_price = $this->GetPrice($this->_trainingLevel, $this->_trainingType, $this->_sailingclub);



        $this->page->SetUserName($this->user->FullName());
        $this->page->SetUserCredit($this->user->GetAttributeValue(8));
        $this->page->SetPrice($this->_price);
        $this->page->SetUserTrainingLevel($this->_trainingLevel);
        $this->page->SetUserTrainingType($this->_trainingType);
        $payUForm = $this->GeneratePayUForm($this->_trainingLevel, $this->_trainingType, $this->user);
        $this->page->SetPayUForm($payUForm);

    }

    private function GeneratePayUForm($trainingLevel, $trainingType, User $user){

        //$liveUpdate = new PayuLu('PAYUDEMO','P5@F8*3!m0+?^9s3&u8(');
        $liveUpdate = new PayuLu('OPU_TEST','SECRET_KEY');

        //Show all errors
        $liveUpdate->setDebug(PayuLu::DEBUG_ALL);

        //pname,pcode,pinfo,price,priceType,quantity,tax

        $pname = $trainingLevel ." Yelkencilik Egitimi";
        $pcode = "1112000112";
        $pinfo = "Yelkencilik Egitimi";
        $price = $this->_price;
        $priceType = "NET";
        $quantity = "1";
        $tax = "18";
        $product = new PayuProduct($pname,$pcode,$pinfo,$price,$priceType,$quantity,$tax);

        $liveUpdate->setOrderRef($this->user->GetPublicId());
        $liveUpdate->addProduct($product);


        //Billing adresi hash stringe dahil olmaz. Dolay?s?yla hash de?erinin
        //hesab?na bir etkisi yoktur.
        //Fakat billing bilgisinin gönderilmesi zorunludur.
        //Bundan dolay? billing için first name, last name ve email gönderilmelidir

        $billing = new PayuAddress();
        $billing->setFirstName($user->FirstName());
        $billing->setLastName($user->LastName());
        $billing->setEmail($user->EmailAddress());
        //$billing->setCity("Ka??thane"); //Ilce/Semt
        //$billing->setState("Istanbul"); //Sehir
        $billing->setCountryCode("TR");
        $liveUpdate->setBillingAddress($billing);

        $liveUpdate->setPaymentCurrency("TRY");
        $liveUpdate->setInstalments("3,4");
        $liveUpdate->setOrderShipping("");
        $liveUpdate->setBackRef("");

        $liveUpdate->setButtonName('Şimdi Öde');

        $t = $liveUpdate->renderPaymentForm();
        return $t;
    }

    private function GetPrice($traininglevel, $trainingtype, $sailingclub)
    {
        if(($trainingtype == 'Özel') || ($sailingclub == 'Diğer'))
        {
            return $this->_priceconf[$traininglevel][$trainingtype];
        }
        else if($sailingclub == 'İTÜ Yelken')
        {
            return $this->_priceconf[$traininglevel][$sailingclub];
        }
        else
        {
            return $this->_priceconf[$traininglevel]['Bilgi Yelken'];
        }
    }

    private function SetPriceTable(){
        $priceconf['1 Yıldız']['Bireysel'] = '550';
        $priceconf['1 Yıldız']['Özel'] = '2200';
        $priceconf['2 Yıldız']['Bireysel'] = '550';
        $priceconf['2 Yıldız']['Özel'] = '2200';
        $priceconf['2 Yıldız Yarışçılık']['Bireysel'] = '600';
        $priceconf['2 Yıldız Yarışçılık']['Özel'] = '2400';
        $priceconf['3 Yıldız']['Bireysel'] = '650';
        $priceconf['3 Yıldız']['Özel'] = '3600';
        $priceconf['1 Yıldız']['İTÜ Yelken'] = '375';
        $priceconf['2 Yıldız']['İTÜ Yelken'] = '400';
        $priceconf['2 Yıldız Yarışçılık']['İTÜ Yelken'] = '575';
        $priceconf['3 Yıldız']['İTÜ Yelken'] = '575';
        $priceconf['1 Yıldız']['Bilgi Yelken'] = '400';
        $priceconf['2 Yıldız']['Bilgi Yelken'] = '400';
        $priceconf['2 Yıldız Yarışçılık']['Bilgi Yelken'] = '500';
        $priceconf['3 Yıldız']['Bilgi Yelken'] = '600';

        $this->_priceconf = $priceconf;
    }


}