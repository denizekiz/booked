<?php
/**
 * Created by PhpStorm.
 * User: Burak
 * Date: 10/7/2015
 * Time: 3:00 PM
 */

define('ROOT_DIR', '../');

require_once(ROOT_DIR . 'Pages/PaymentPage.php');

$page = new PaymentPage();
$page->PageLoad();

?>