<?php /* Smarty version Smarty-3.1.16, created on 2015-07-28 15:36:50
         compiled from "/var/www/html/booked/tpl/Admin/Configuration/change_theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126609065355b79382f05356-76875205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab54cebe5f30748602994af995543de03d02fb10' => 
    array (
      0 => '/var/www/html/booked/tpl/Admin/Configuration/change_theme.tpl',
      1 => 1438084519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126609065355b79382f05356-76875205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ScriptUrl' => 0,
    'LogoUrl' => 0,
    'CssUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b793830930f0_67571316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b793830930f0_67571316')) {function content_55b793830930f0_67571316($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>'css/admin.css,scripts/css/colorbox.css'), 0);?>


<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LookAndFeel'),$_smarty_tpl);?>
</h1>

<div id="successMessage" style="display:none;" class="success">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThemeUploadSuccess'),$_smarty_tpl);?>

</div>

<div class="validationSummary error" id="validationErrors">
	<ul>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"logoFileExt"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"cssFileExt"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"logoFile"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"cssFile"),$_smarty_tpl);?>

	</ul>
</div>

<form id="elementForm" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" ajaxAction="update" method="post">
    <h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Logo"),$_smarty_tpl);?>
 (*.png, *.gif, *.jpg)</h4>
	<div>
		<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
</a>
		<a href="#" id="removeLogo"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Remove'),$_smarty_tpl);?>
</a></div>
    <input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'LOGO_FILE'),$_smarty_tpl);?>
 size="100"/>
	<a href="#" class="clearInput"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
</a>

	<br/><br/>

    <h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"CssFile"),$_smarty_tpl);?>
 (*.css)</h4>
	<div>
		<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
</a>
	</div>
    <input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CSS_FILE'),$_smarty_tpl);?>
 size="100"/> <a href="#" class="clearInput"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
</a><br/><br/>
    <button type="button" class="button update" name="<?php echo Actions::SAVE;?>
" id="saveButton">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

    </button>
</form>

<div id="modalDiv" style="display:none;text-align:center; top:15%;position:relative;">
    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
</h3>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/edit.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/ajaxfileupload.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.colorbox-min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-form-submit.js"),$_smarty_tpl);?>


<script type="text/javascript">
	$('document').ready(function(){
		$('#elementForm').bindAjaxSubmit($('#saveButton'), $('#successMessage'), $('#modalDiv'));

		$('.clearInput').click(function(e){
			e.preventDefault();
			$(this).prev('input').val('');
		});

		$('#removeLogo').click(function(e) {
			e.preventDefault();

			PerformAsyncAction($(this), function(){
				return '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=removeLogo';
			});
		});
    });

</script>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
