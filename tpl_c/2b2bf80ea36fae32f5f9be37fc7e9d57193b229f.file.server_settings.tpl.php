<?php /* Smarty version Smarty-3.1.16, created on 2015-07-26 20:37:39
         compiled from "/var/www/html/booked/tpl/Admin/server_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208043583355b53703bc87d3-30535768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b2bf80ea36fae32f5f9be37fc7e9d57193b229f' => 
    array (
      0 => '/var/www/html/booked/tpl/Admin/server_settings.tpl',
      1 => 1437924999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208043583355b53703bc87d3-30535768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentTime' => 0,
    'imageUploadDirectory' => 0,
    'imageUploadDirPermissions' => 0,
    'tempalteCacheDirectory' => 0,
    'plugins' => 0,
    'category' => 0,
    'items' => 0,
    'pluginName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b53703bf2865_53292299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b53703bf2865_53292299')) {function content_55b53703bf2865_53292299($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ServerSettings'),$_smarty_tpl);?>
</h1>

<ul class="indented">
	<li>Current Time: <?php echo $_smarty_tpl->tpl_vars['currentTime']->value;?>
</li>
	<li>Image Upload Physical Directory: <?php echo $_smarty_tpl->tpl_vars['imageUploadDirectory']->value;?>
 (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Permissions'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['imageUploadDirPermissions']->value;?>
) <a href="<?php echo $_SERVER['SCRIPT_URL'];?>
?<?php echo QueryStringKeys::ACTION;?>
=changePermissions">Try to apply correct permissions</a></li>
	<li>Template Cache Directory: <?php echo $_smarty_tpl->tpl_vars['tempalteCacheDirectory']->value;?>
 <a href="<?php echo $_SERVER['SCRIPT_URL'];?>
?<?php echo QueryStringKeys::ACTION;?>
=flush">Try to flush cached files</a></li>
</ul>

<h3 style="margin-top: 20px;">Plugins</h3>
<ul class="indented">
<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['category']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['category']->value;?>

		<ul>
		<?php  $_smarty_tpl->tpl_vars['pluginName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pluginName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pluginName']->key => $_smarty_tpl->tpl_vars['pluginName']->value) {
$_smarty_tpl->tpl_vars['pluginName']->_loop = true;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['pluginName']->value;?>
</li>
		<?php } ?>
		</ul>
	</li>
<?php } ?>
</ul>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
