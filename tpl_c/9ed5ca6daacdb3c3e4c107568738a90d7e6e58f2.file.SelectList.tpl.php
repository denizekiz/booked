<?php /* Smarty version Smarty-3.1.16, created on 2015-07-28 22:53:10
         compiled from "/var/www/html/booked/tpl/Controls/Attributes/SelectList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16200570355b7f9c636e7a4-63405227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ed5ca6daacdb3c3e4c107568738a90d7e6e58f2' => 
    array (
      0 => '/var/www/html/booked/tpl/Controls/Attributes/SelectList.tpl',
      1 => 1438084520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16200570355b7f9c636e7a4-63405227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attributeName' => 0,
    'attribute' => 0,
    'align' => 0,
    'readonly' => 0,
    'class' => 0,
    'searchmode' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b7f9c63a4d73_81289061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b7f9c63a4d73_81289061')) {function content_55b7f9c63a4d73_81289061($_smarty_tpl) {?>
<label class="customAttribute" for="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Label(), ENT_QUOTES, 'UTF-8', true);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['align']->value=='vertical') {?>
<br/>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
<span class="attributeValue <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php } else { ?>
<select id="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" class="customAttribute textbox <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<?php if (!$_smarty_tpl->tpl_vars['attribute']->value->Required()||$_smarty_tpl->tpl_vars['searchmode']->value) {?>
	<option value="">--</option>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attribute']->value->PossibleValueList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
	<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['attribute']->value->Value()==$_smarty_tpl->tpl_vars['value']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
	<?php } ?>
</select>
<?php }?>
<?php }} ?>
