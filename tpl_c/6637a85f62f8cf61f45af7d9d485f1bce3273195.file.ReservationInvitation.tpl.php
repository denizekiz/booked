<?php /* Smarty version Smarty-3.1.16, created on 2015-07-27 07:38:17
         compiled from "/var/www/html/booked/lang/en_us/ReservationInvitation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123269825755b5d1d9330232-04705848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6637a85f62f8cf61f45af7d9d485f1bce3273195' => 
    array (
      0 => '/var/www/html/booked/lang/en_us/ReservationInvitation.tpl',
      1 => 1437924983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123269825755b5d1d9330232-04705848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'StartDate' => 0,
    'EndDate' => 0,
    'ResourceNames' => 0,
    'resourceName' => 0,
    'ResourceName' => 0,
    'ResourceImage' => 0,
    'ScriptUrl' => 0,
    'Title' => 0,
    'Description' => 0,
    'RepeatDates' => 0,
    'date' => 0,
    'Accessories' => 0,
    'accessory' => 0,
    'RequiresApproval' => 0,
    'AcceptUrl' => 0,
    'DeclineUrl' => 0,
    'ReservationUrl' => 0,
    'ICalUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b5d1d94230e9_93408969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b5d1d94230e9_93408969')) {function content_55b5d1d94230e9_93408969($_smarty_tpl) {?>
	Reservation Details:
	<br/>
	<br/>

	Starting: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	Ending: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	<?php if (count($_smarty_tpl->tpl_vars['ResourceNames']->value)>1) {?>
		Resources:<br/>
		<?php  $_smarty_tpl->tpl_vars['resourceName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ResourceNames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceName']->key => $_smarty_tpl->tpl_vars['resourceName']->value) {
$_smarty_tpl->tpl_vars['resourceName']->_loop = true;
?>
			<?php echo $_smarty_tpl->tpl_vars['resourceName']->value;?>
<br/>
		<?php } ?>
		<?php } else { ?>
		Resource: <?php echo $_smarty_tpl->tpl_vars['ResourceName']->value;?>
<br/>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['ResourceImage']->value) {?>
		<div class="resource-image"><img src="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ResourceImage']->value;?>
"/></div>
	<?php }?>

	Title: <?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
<br/>
	Description: <?php echo nl2br($_smarty_tpl->tpl_vars['Description']->value);?>
<br/>

	<?php if (count($_smarty_tpl->tpl_vars['RepeatDates']->value)>0) {?>
		<br/>
		The reservation occurs on the following dates:
		<br/>
	<?php }?>

	<?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RepeatDates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value),$_smarty_tpl);?>
<br/>
	<?php } ?>

	<?php if (count($_smarty_tpl->tpl_vars['Accessories']->value)>0) {?>
		<br/>Accessories:<br/>
		<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?>
			(<?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityReserved;?>
) <?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
<br/>
		<?php } ?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['RequiresApproval']->value) {?>
		<br/>
		One or more of the resources reserved require approval before usage.  This reservation will be pending until it is approved.
	<?php }?>

	<br/>
	Attending? <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['AcceptUrl']->value;?>
">Yes</a> <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['DeclineUrl']->value;?>
">No</a>
	<br/>
	<br/>

	<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ReservationUrl']->value;?>
">View this reservation</a> |
	<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ICalUrl']->value;?>
">Add to Calendar</a> |
	<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">Log in to Booked Scheduler</a><?php }} ?>
