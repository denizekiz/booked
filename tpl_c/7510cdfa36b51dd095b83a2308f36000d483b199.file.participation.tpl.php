<?php /* Smarty version Smarty-3.1.16, created on 2015-07-27 07:23:28
         compiled from "/var/www/html/booked/tpl/Reservation/participation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56706840055b5ce60250290-45084140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7510cdfa36b51dd095b83a2308f36000d483b199' => 
    array (
      0 => '/var/www/html/booked/tpl/Reservation/participation.tpl',
      1 => 1437925002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56706840055b5ce60250290-45084140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AllowParticipantsToJoin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b5ce6026bd90_31589469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b5ce6026bd90_31589469')) {function content_55b5ce6026bd90_31589469($_smarty_tpl) {?>
<div id="reservationParticipation">
	<ul class="no-style">
		<li>
			<label for="participantAutocomplete"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ParticipantList"),$_smarty_tpl);?>
</label><br/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Add'),$_smarty_tpl);?>
 <input type="text" id="participantAutocomplete" class="input" style="width:250px;"/>
				or
				<button id="promptForParticipants" type="button" class="button" style="display:inline">
					<img src="img/user-plus.png"/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SelectUser'),$_smarty_tpl);?>

				</button>
				<button id="promptForGroupParticipants" type="button" class="button" style="display:inline">
					<img src="img/users.png"/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>

				</button>


			<div id="participantList">
				<ul></ul>
			</div>
			<div id="participantDialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddParticipants'),$_smarty_tpl);?>
" class="dialog"></div>
			<div id="participantGroupDialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddParticipants'),$_smarty_tpl);?>
" class="dialog"></div>
		</li>
		<li>
			<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"InvitationList"),$_smarty_tpl);?>
<br/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Add'),$_smarty_tpl);?>
 <input type="text" id="inviteeAutocomplete" class="input" style="width:250px;"/>
				or
				<button id="promptForInvitees" type="button" class="button" style="display:inline">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"user-plus.png"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SelectUser'),$_smarty_tpl);?>

				</button>
				<button id="promptForGroupInvitees" type="button" class="button" style="display:inline">
					<img src="img/users.png"/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>

				</button>
			</label>

			<div id="inviteeList">
				<ul></ul>
			</div>
			<div id="inviteeDialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InviteOthers'),$_smarty_tpl);?>
" class="dialog"></div>
			<div id="inviteeGroupDialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InviteOthers'),$_smarty_tpl);?>
" class="dialog"></div>
		</li>
	</ul>
	<div id="allowParticipation">
		<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['AllowParticipantsToJoin']->value) {?>checked="checked"<?php }?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ALLOW_PARTICIPATION'),$_smarty_tpl);?>
 id="allowParticipationCheckbox"><label for="allowParticipationCheckbox"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllowParticipantsToJoin'),$_smarty_tpl);?>
</label>
	</div>
</div><?php }} ?>
