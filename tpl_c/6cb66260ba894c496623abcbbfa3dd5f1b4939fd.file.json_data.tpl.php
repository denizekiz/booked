<?php /* Smarty version Smarty-3.1.16, created on 2015-07-27 07:23:04
         compiled from "/var/www/html/booked/tpl/json_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37314095955b5ce488174b9-92966302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cb66260ba894c496623abcbbfa3dd5f1b4939fd' => 
    array (
      0 => '/var/www/html/booked/tpl/json_data.tpl',
      1 => 1437924974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37314095955b5ce488174b9-92966302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b5ce488256f0_06940888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b5ce488256f0_06940888')) {function content_55b5ce488256f0_06940888($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?><?php }} ?>
