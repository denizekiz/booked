<?php /* Smarty version Smarty-3.1.16, created on 2015-07-28 22:56:53
         compiled from "/var/www/html/booked/tpl/Reports/common-reports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78276655855b7faa5336805-49020370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1af21f5e6318bf3f34b2aed00d4c5a59ea4f8f86' => 
    array (
      0 => '/var/www/html/booked/tpl/Reports/common-reports.tpl',
      1 => 1438084497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78276655855b7faa5336805-49020370',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b7faa556bd45_94621206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b7faa556bd45_94621206')) {function content_55b7faa556bd45_94621206($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>"css/reports.css,scripts/js/jqplot/jquery.jqplot.min.css"), 0);?>


<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CommonReports'),$_smarty_tpl);?>
</h1>
<div id="report-list">
	<ul>
		<li>
			<span class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservedResources'),$_smarty_tpl);?>
</span>
			<span class="right">
				<a href="#" reportId="<?php echo CannedReport::RESERVATIONS_TODAY;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Today'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::RESERVATIONS_THISWEEK;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::RESERVATIONS_THISMONTH;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
			</span>
		</li>
		<li class="alt">
			<span class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservedAccessories'),$_smarty_tpl);?>
</span>
			<span class="right">
				<a href="#" reportId="<?php echo CannedReport::ACCESSORIES_TODAY;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Today'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::ACCESSORIES_THISWEEK;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::ACCESSORIES_THISMONTH;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
			</span>
		</li>
		<li>
			<span class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceUsageTimeBooked'),$_smarty_tpl);?>
</span>
			<span class="right">
				<a href="#" reportId="<?php echo CannedReport::RESOURCE_TIME_ALLTIME;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllTime'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::RESOURCE_TIME_THISWEEK;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::RESOURCE_TIME_THISMONTH;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
			</span>
		</li>
		<li class="alt">
			<span class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceUsageReservationCount'),$_smarty_tpl);?>
</span>
			<span class="right">
				<a href="#" reportId="<?php echo CannedReport::RESOURCE_COUNT_ALLTIME;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllTime'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::RESOURCE_COUNT_THISWEEK;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::RESOURCE_COUNT_THISMONTH;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
			</span>
		</li>
		<li>
			<span class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Top20UsersTimeBooked'),$_smarty_tpl);?>
</span>
			<span class="right">
				<a href="#" reportId="<?php echo CannedReport::USER_TIME_ALLTIME;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllTime'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::USER_TIME_THISWEEK;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::USER_TIME_THISMONTH;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
			</span>
		</li>
		<li class="alt">
			<span class="report-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Top20UsersReservationCount'),$_smarty_tpl);?>
</span>
			<span class="right">
				<a href="#" reportId="<?php echo CannedReport::USER_COUNT_ALLTIME;?>
"
				   class="report report-action  runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllTime'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::USER_COUNT_THISWEEK;?>
"
				   class="report report-action runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentWeek'),$_smarty_tpl);?>
</a>
				<a href="#" reportId="<?php echo CannedReport::USER_COUNT_THISMONTH;?>
"
				   class="report report-action  runNow"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CurrentMonth'),$_smarty_tpl);?>
</a>
			</span>
		</li>
	</ul>
</div>


<div id="resultsDiv">
</div>

<div id="indicator" style="display:none; text-align: center;">
	<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
</h3>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"admin-ajax-indicator.gif"),$_smarty_tpl);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("Reports/chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reports/canned-reports.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reports/chart.js"),$_smarty_tpl);?>


<script type="text/javascript">
	$(document).ready(function () {
		var reportOptions = {
			generateUrl:"<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Generate;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
			emailUrl:"<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Email;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
			deleteUrl:"<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Delete;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
			printUrl:"<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::PrintReport;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
			csvUrl:"<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Csv;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
="
		};

		var reports = new CannedReports(reportOptions);
		reports.init();
	});
</script>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
