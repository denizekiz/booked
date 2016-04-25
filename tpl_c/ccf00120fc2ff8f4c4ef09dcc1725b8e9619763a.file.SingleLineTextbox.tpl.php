<?php /* Smarty version Smarty-3.1.16, created on 2015-07-26 20:42:03
         compiled from "/var/www/html/booked/tpl/Controls/Attributes/SingleLineTextbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46278948855b5380b8aae66-05213054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccf00120fc2ff8f4c4ef09dcc1725b8e9619763a' => 
    array (
      0 => '/var/www/html/booked/tpl/Controls/Attributes/SingleLineTextbox.tpl',
      1 => 1437925035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46278948855b5380b8aae66-05213054',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b5380b8f5391_16515072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b5380b8f5391_16515072')) {function content_55b5380b8f5391_16515072($_smarty_tpl) {?>
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
<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
" class="customAttribute textbox <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" />
<?php }?><?php }} ?>
