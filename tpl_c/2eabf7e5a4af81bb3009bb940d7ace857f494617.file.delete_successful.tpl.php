<?php /* Smarty version Smarty-3.1.16, created on 2015-07-27 07:26:31
         compiled from "/var/www/html/booked/tpl/Ajax/reservation/delete_successful.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68338741855b5cf17a83526-75008945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eabf7e5a4af81bb3009bb940d7ace857f494617' => 
    array (
      0 => '/var/www/html/booked/tpl/Ajax/reservation/delete_successful.tpl',
      1 => 1437925034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68338741855b5cf17a83526-75008945',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b5cf17a90181_54678480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b5cf17a90181_54678480')) {function content_55b5cf17a90181_54678480($_smarty_tpl) {?>
<div>
	<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationRemoved'),$_smarty_tpl);?>
</div>

	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="button" />

</div><?php }} ?>
