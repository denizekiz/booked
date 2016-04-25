<?php /* Smarty version Smarty-3.1.16, created on 2015-07-27 07:37:15
         compiled from "/var/www/html/booked/tpl/Email/emailheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21540683155b5d19bef7129-80893956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21badbd8afadb3f9060201095b3f575be21d1a32' => 
    array (
      0 => '/var/www/html/booked/tpl/Email/emailheader.tpl',
      1 => 1437925000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21540683155b5d19bef7129-80893956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Charset' => 0,
    'ScriptUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b5d19bf2fc64_10837304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b5d19bf2fc64_10837304')) {function content_55b5d19bf2fc64_10837304($_smarty_tpl) {?>
<?php echo '<?xml';?> version="1.0" encoding="<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
"<?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
" />
		<style type="text/css">
			@import url(<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/email.css);
		</style>
	</head>
	<body><?php }} ?>
