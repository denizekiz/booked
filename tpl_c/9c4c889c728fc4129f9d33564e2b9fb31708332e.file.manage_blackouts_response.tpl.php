<?php /* Smarty version Smarty-3.1.16, created on 2015-07-28 19:23:36
         compiled from "/var/www/html/booked/tpl/Admin/Blackouts/manage_blackouts_response.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118824658255b7c8a82cea18-75411123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c4c889c728fc4129f9d33564e2b9fb31708332e' => 
    array (
      0 => '/var/www/html/booked/tpl/Admin/Blackouts/manage_blackouts_response.tpl',
      1 => 1438084519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118824658255b7c8a82cea18-75411123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Successful' => 0,
    'SuccessKey' => 0,
    'FailKey' => 0,
    'Message' => 0,
    'Blackouts' => 0,
    'blackout' => 0,
    'Timezone' => 0,
    'Reservations' => 0,
    'rowCss' => 0,
    'reservation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b7c8a8420859_10562140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b7c8a8420859_10562140')) {function content_55b7c8a8420859_10562140($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/html/booked/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>
<div>
	<?php if ($_smarty_tpl->tpl_vars['Successful']->value) {?>
		<h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['SuccessKey']->value),$_smarty_tpl);?>
</h2>
		<button class="reload button"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"OK"),$_smarty_tpl);?>
</button>
	<?php } else { ?>
		<h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['FailKey']->value),$_smarty_tpl);?>
</h2>
		<button class="close button"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"OK"),$_smarty_tpl);?>
</button>
	<?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['Message']->value)) {?>
		<h5><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</h5>
	<?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['Blackouts']->value)) {?>
		<h5><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutConflicts'),$_smarty_tpl);?>
</h5>
		<?php  $_smarty_tpl->tpl_vars['blackout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blackout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Blackouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blackout']->key => $_smarty_tpl->tpl_vars['blackout']->value) {
$_smarty_tpl->tpl_vars['blackout']->_loop = true;
?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['blackout']->value->StartDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value),$_smarty_tpl);?>

		<?php } ?>
	<?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['Reservations']->value)) {?>
		<h5><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationConflicts'),$_smarty_tpl);?>
</h5>
        <table class="list" id="reservationTable" style="margin-left: auto; margin-right: auto;">
        	<tr>
        		<th class="id">&nbsp;</th>
        		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
</th>
        		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</th>
        		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</th>
        		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</th>
        		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
</th>
        	</tr>
        	<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Reservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
        	<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

        	<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 editable">
        		<td class="id"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReservationId;?>
</td>
        		<td><?php echo $_smarty_tpl->tpl_vars['reservation']->value->FirstName;?>
 <?php echo $_smarty_tpl->tpl_vars['reservation']->value->LastName;?>
</td>
        		<td><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceName;?>
</td>
        		<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl);?>
</td>
        		<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl);?>
</td>
        		<td class="referenceNumber"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
</td>
        	</tr>
        	<?php } ?>
        </table>
	<?php }?>
</div><?php }} ?>
