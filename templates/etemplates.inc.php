<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="de-bd" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>EGroupware [eTemplates - Anzeigen]</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="EGroupware" />
		<meta name="description" content="EGroupware" />
		<meta name="keywords" content="EGroupware" />
		<meta name="copyright" content="Stylite AG 2013, see http://www.stylite.de/EPL" />
		<meta name="language" content="de-bd" />
		<meta name="author" content="Stylite AG www.stylite.de" />
		
		<meta name="robots" content="none" />
		<link rel="icon" href="/egroupware/phpgwapi/templates/default/images/favicon.ico" type="image/x-ico" />
		<link rel="shortcut icon" href="/egroupware/phpgwapi/templates/default/images/favicon.ico" />
		<link href="/egroupware/phpgwapi/inc/min/?b=egroupware&f=phpgwapi/js/jquery/chosen/chosen.css,phpgwapi/js/jquery/jquery-ui/redmond/jquery-ui.css,phpgwapi/js/jquery/magicsuggest/magicsuggest.css,phpgwapi/js/jquery/blueimp/css/blueimp-gallery.min.css,etemplate/templates/default/etemplate2.css,phpgwapi/templates/default/def_tutorials.css,phpgwapi/templates/idots/css/traditional.css,jdots/egw_fw.css,jdots/css/jdots.css,phpgwapi/templates/idots/print.css,jdots/print.css&1448969430" type="text/css" rel="StyleSheet" />
<link href="/egroupware/etemplate/templates/default/app.css?1448969419" type="text/css" rel="StyleSheet" />

		<style type="text/css">
			
/**
 * theme changes to color jdots for color: #B0C4DE
 */
.egw_fw_ui_sidemenu_entry_header_active, .egw_fw_ui_sidemenu_entry_content, .egw_fw_ui_sidemenu_entry_header:hover {
	background-color: #B0C4DE;
	border-color: #B0C4DE;
}
.egw_fw_ui_sidemenu_entry_header_active, .egw_fw_ui_sidemenu_entry_header:hover {
	background-image: url(jdots/images/gradient30transparent.png);
}
.egw_fw_ui_sidemenu_entry_content {
	background-image: url(jdots/images/gradient10transparent.png);
}
div .egw_fw_ui_sidemenu_entry_content > div {
	background-color: #ffffff;
}
.egw_fw_ui_tabs_header {
	background-image: url(jdots/images/gradient22transparent.png);
	background-color: #B0C4DE;
}
		</style>
		<script type="text/javascript" src="/egroupware/phpgwapi/js/labjs/LAB.src.js?1448969416"></script>
<script type="text/javascript" src="/egroupware/phpgwapi/js/jsapi/egw.js?1448969412" id="egw_script_id" data-check-framework="1" data-app-header="eTemplates - Anzeigen" data-url="/egroupware" data-include="[&quot;phpgwapi\/inc\/min\/?b=egroupware&amp;f=phpgwapi\/js\/jquery\/jquery.js,phpgwapi\/js\/jquery\/jquery-ui.js,phpgwapi\/js\/jsapi\/jsapi.js,phpgwapi\/js\/egw_json.js,phpgwapi\/js\/jsapi\/egw_core.js,phpgwapi\/js\/jsapi\/egw_debug.js,phpgwapi\/js\/jsapi\/egw_preferences.js,phpgwapi\/js\/jsapi\/egw_utils.js,phpgwapi\/js\/jsapi\/egw_ready.js,phpgwapi\/js\/jsapi\/egw_files.js,phpgwapi\/js\/jsapi\/egw_lang.js,phpgwapi\/js\/jsapi\/egw_links.js,phpgwapi\/js\/jsapi\/egw_open.js,phpgwapi\/js\/jsapi\/egw_user.js,phpgwapi\/js\/jsapi\/egw_config.js,phpgwapi\/js\/jsapi\/egw_images.js,phpgwapi\/js\/jsapi\/egw_jsonq.js,phpgwapi\/js\/jsapi\/egw_json.js,phpgwapi\/js\/jsapi\/egw_store.js,phpgwapi\/js\/jsapi\/egw_tooltip.js,phpgwapi\/js\/jsapi\/egw_css.js,phpgwapi\/js\/jquery\/jquery-ui-timepicker-addon.js,phpgwapi\/js\/jsapi\/egw_calendar.js,phpgwapi\/js\/jsapi\/egw_data.js,phpgwapi\/js\/jsapi\/egw_tail.js,phpgwapi\/js\/jsapi\/egw_inheritance.js,phpgwapi\/js\/jsapi\/egw_message.js,phpgwapi\/js\/es6-promise.min.js,phpgwapi\/js\/jsapi\/app_base.js,phpgwapi\/js\/dhtmlxtree\/codebase\/dhtmlxcommon.js,phpgwapi\/js\/dhtmlxtree\/sources\/dhtmlxtree.js,phpgwapi\/js\/dhtmlxtree\/sources\/ext\/dhtmlxtree_json.js,phpgwapi\/js\/egw_action\/egw_action_common.js,phpgwapi\/js\/egw_action\/egw_action.js,phpgwapi\/js\/egw_action\/egw_keymanager.js,phpgwapi\/js\/egw_action\/egw_menu.js,phpgwapi\/js\/jquery\/jquery-tap-and-hold\/jquery.tapandhold.js,phpgwapi\/js\/egw_action\/egw_action_popup.js,phpgwapi\/js\/egw_action\/egw_action_dragdrop.js,phpgwapi\/js\/egw_action\/egw_dragdrop_dhtmlx_tree.js,phpgwapi\/js\/dhtmlxMenu\/sources\/dhtmlxmenu.js,phpgwapi\/js\/dhtmlxMenu\/sources\/ext\/dhtmlxmenu_ext.js,phpgwapi\/js\/egw_action\/egw_menu_dhtmlx.js,phpgwapi\/js\/jquery\/chosen\/chosen.jquery.js&amp;1448969416&quot;,&quot;phpgwapi\/js\/ckeditor\/ckeditor.js?1448969416&quot;,&quot;phpgwapi\/js\/ckeditor\/config.js?1448969416&quot;,&quot;etemplate\/js\/etemplate.js?1448969418&quot;]" data-app="etemplate" data-framework-reload="1"></script>

	</head>
	<body >
		
		<div id="divAppboxHeader" class="onlyPrint"></div><?php
/**
 * EGroupware - eTemplates for Application attendance
 * http://www.egroupware.org
 * generated by soetemplate::dump4setup() 2015-12-09 11:57.
 *
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 *
 * @version $Id$
 */
$templ_version = 1;

$templ_data[] = ['name' => 'attendance.tracker.index', 'template' => '', 'lang' => '', 'group' => '0', 'version' => '14.1.001', 'data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:14:"Ansicht Tablet";}}i:2;a:1:{s:1:"A";a:3:{s:4:"type";s:8:"template";s:4:"size";s:2:"nm";s:4:"name";s:4:"rows";}}}s:4:"rows";i:2;s:4:"cols";i:1;}}', 'size' => '', 'style' => '', 'modified' => '1449657940'];

$templ_data[] = ['name' => 'attendance.tracker.index.rows', 'template' => '', 'lang' => '', 'group' => '0', 'version' => '14.1.001', 'data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:2:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:4:"name";s:19:"${row}[account_lid]";}}}s:4:"rows";i:1;s:4:"cols";i:1;}}', 'size' => '', 'style' => '', 'modified' => '1449658049'];
?>

<form method="POST" name="eTemplate" action="/egroupware/etemplate/process_exec.php?menuaction=etemplate.editor.edit"  enctype="multipart/form-data" onsubmit="set_element2(this,'exec[file_path]','exec[file]')" onsubmit="this.innerWidth.value=window.innerWidth ? window.innerWidth : document.body.clientWidth;">
<input type="hidden" name="etemplate_exec_id" value="etemplate_agroviva_566808fca6e549.61899117"  id="etemplate_exec_id" />


<!-- BEGIN eTemplate etemplate.editor.new -->
<div id="etemplate.editor.new">





<!-- BEGIN grid  -->
<table >
	<tr >
		<td  colspan="2" align="left" class="redItalic">2 eTemplate(s) für die Anwendung 'attendance' nach 'php://output' geschrieben</td>
	</tr>
	<tr >
		<td  colspan="2" align="left">

<!-- BEGIN hbox -->

<table >
	<tr >
		<td >

<!-- BEGIN eTemplate etemplate.editor.keys -->
<div id="etemplate.editor.keys">





<!-- BEGIN grid  -->
<table >
	<tr >
		<td  align="left"><label for="exec[name]" >Name</label> <input  name="exec[name]" value="attendance.tracker.index.rows"  id="exec[name]"  onFocus="self.status='Name des eTemplate, in der Form anwendung.funktion[.subTemplate]'; return true;" onBlur="self.status=''; return true;" size="25" maxlength="80" />
</td>
		<td  align="left"><label for="exec[template]" >Template</label> <input  name="exec[template]" value=""  id="exec[template]"  onFocus="self.status='Name des eGW layouts (zb. verdilak): \'\' = Standard (ließt das bevorzugte Layout, benutze \'default\' um das Standard Layout \'\' zu lesen)'; return true;" onBlur="self.status=''; return true;" size="8" maxlength="20" />
</td>
		<td  align="left"><label for="exec[lang]" >Sprache</label> <input  name="exec[lang]" value=""  id="exec[lang]"  onFocus="self.status='Kürzel der Sprache (zb. \'en\' für Englisch) für sprachabhängige Templates (\'\' ließt die bevorzugte Sprache, benutze \'default\' für das Standard Template \'\')'; return true;" onBlur="self.status=''; return true;" size="5" maxlength="5" />
</td>
		<td  align="left"><label for="exec[version]" >Version</label> <input  name="exec[version]" value="14.1.001"  id="exec[version]"  onFocus="self.status='Versionsnummer, in der Form major.minor.revision.number (zB. 0.9.15.001 alle Zahlen mit Nullen aufgefüllt)'; return true;" onBlur="self.status=''; return true;" size="9" maxlength="20" />
</td>
	</tr>
</table>
<!-- END grid  -->


</div>
<!-- END eTemplate etemplate.editor.keys -->

</td>
		<td ><button type="submit" name="exec[read]" value="Lesen"  id="exec[read]"  onMouseOver="self.status='ließt ein eTemplate aus der Datenbank (für die Schlüssel darüber)'; return true;" onMouseOut="self.status=''; return true;" onFocus="self.status='ließt ein eTemplate aus der Datenbank (für die Schlüssel darüber)'; return true;" onBlur="self.status=''; return true;" class="et2_button et_button_text">Lesen</button></td>
		<td ><button type="submit" name="exec[save]" value="Speichern"  id="exec[save]"  onMouseOver="self.status='Speichert das eTemplate unter den obigen Schlüsseln (name, ...), ändern für ein Speichern unter'; return true;" onMouseOut="self.status=''; return true;" onFocus="self.status='Speichert das eTemplate unter den obigen Schlüsseln (name, ...), ändern für ein Speichern unter'; return true;" onBlur="self.status=''; return true;" style="background-image: url(/egroupware/phpgwapi/templates/default/images/save.png);" class="et2_button et_button_text et2_button_with_image">Speichern</button></td>
		<td ><button type="submit" name="exec[delete]" value="Löschen"  id="exec[delete]"  onMouseOver="self.status='löscht das angegebene eTemplate'; return true;" onMouseOut="self.status=''; return true;" onFocus="self.status='löscht das angegebene eTemplate'; return true;" onBlur="self.status=''; return true;" onclick="return confirm('löscht das angegebene eTemplate?');" style="background-image: url(/egroupware/phpgwapi/templates/idots/images/delete.png);" class="et2_button et_button_text et2_button_with_image et2_button_delete">Löschen</button></td>
	</tr>
</table>


<!-- END hbox -->

</td>
	</tr>
	<tr >
		<td  colspan="2" align="left">

<!-- BEGIN hbox -->

<table >
	<tr >
		<td ><button type="submit" name="exec[styles]" value="CSS Stile"  id="exec[styles]"  onMouseOver="self.status='bearbeitet die eingebetteten CSS Stile oder die app.css Datei der Anwendung'; return true;" onMouseOut="self.status=''; return true;" onFocus="self.status='bearbeitet die eingebetteten CSS Stile oder die app.css Datei der Anwendung'; return true;" onBlur="self.status=''; return true;" onclick="egw(window).openPopup('/egroupware/index.php?menuaction=etemplate.editor.styles&name=attendance.tracker.index.rows&template=&lang=&version=14.1.001', 600, 450, 'etemplate_editor_styles', false, false, 'yes'); return false;" class="et2_button et_button_text">CSS Stile</button></td>
		<td ><button type="submit" name="exec[values]" value="Werte anzeigen"  id="exec[values]"  onMouseOver="self.status='zeigt den Inhalt / Werte an und erlaubt welche zum Testen des eTemplates einzugeben'; return true;" onMouseOut="self.status=''; return true;" onFocus="self.status='zeigt den Inhalt / Werte an und erlaubt welche zum Testen des eTemplates einzugeben'; return true;" onBlur="self.status=''; return true;" class="et2_button et_button_text">Werte anzeigen</button></td>
		<td ><button type="submit" name="exec[dump]" value="Dump4Setup"  id="exec[dump]"  onMouseOver="self.status='schreibt ein Distributionsfile \'etemplates.inc.php\' (für die Anwendung in Name) in das Setup Verzeichnis der Anwendung'; return true;" onMouseOut="self.status=''; return true;" onFocus="self.status='schreibt ein Distributionsfile \'etemplates.inc.php\' (für die Anwendung in Name) in das Setup Verzeichnis der Anwendung'; return true;" onBlur="self.status=''; return true;" class="et2_button et_button_text">Dump4Setup</button></td>
		<td ><button type="submit" name="exec[langfile]" value="Sprachdatei"  id="exec[langfile]"  onMouseOver="self.status='erzeugt eine englische (\'en\') Sprachdatei aus den Beschriftungen und Hilfetexten (für die Anwendung in Name)'; return true;" onMouseOut="self.status=''; return true;" onFocus="self.status='erzeugt eine englische (\'en\') Sprachdatei aus den Beschriftungen und Hilfetexten (für die Anwendung in Name)'; return true;" onBlur="self.status=''; return true;" class="et2_button et_button_text">Sprachdatei</button></td>
		<td ><button type="submit" name="exec[export_xml]" value="XML Export"  id="exec[export_xml]"  onMouseOver="self.status='das geladene eTemplate als XML Datei (.xet) exportieren'; return true;" onMouseOut="self.status=''; return true;" onFocus="self.status='das geladene eTemplate als XML Datei (.xet) exportieren'; return true;" onBlur="self.status=''; return true;" class="et2_button et_button_text">XML Export</button></td>
		<td ><input type="hidden" name="exec[file_path]" value="." />
<input type="file" name="exec[file]" value=""  id="exec[file]"  onMouseOver="self.status='XML Datei zum Importieren'; return true;" onMouseOut="self.status=''; return true;" onFocus="self.status='XML Datei zum Importieren'; return true;" onBlur="self.status=''; return true;" />
</td>
		<td ><button type="submit" name="exec[import_xml]" value="XML Import"  id="exec[import_xml]"  onMouseOver="self.status='Importiert ein eTemplate aus einer XML Datei'; return true;" onMouseOut="self.status=''; return true;" onFocus="self.status='Importiert ein eTemplate aus einer XML Datei'; return true;" onBlur="self.status=''; return true;" class="et2_button et_button_text">XML Import</button></td>
		<td ><button type="submit" name="exec[restore]" value="Alle wiederherstellen"  id="exec[restore]"  onMouseOver="self.status='Alle eTemplates der Anwendung wiederherstellen, durch Überschreiben der existierenden mit gleicher Versionsnummer'; return true;" onMouseOut="self.status=''; return true;" onFocus="self.status='Alle eTemplates der Anwendung wiederherstellen, durch Überschreiben der existierenden mit gleicher Versionsnummer'; return true;" onBlur="self.status=''; return true;" onclick="return confirm('Alle eTemplates der Anwendung wiederherstellen, durch Überschreiben der existierenden mit gleicher Versionsnummer?');" class="et2_button et_button_text">Alle wiederherstellen</button></td>
	</tr>
</table>


<!-- END hbox -->

</td>
	</tr>
	<tr >
		<td  colspan="2" align="left"><hr  />
</td>
	</tr>
	<tr >
		<td  colspan="2" align="left">
			<script language="javascript">
				function edit_widget(path)
				{
					var url = "/egroupware/index.php?name=attendance.tracker.index.rows&template=&lang=&group=0&version=14.1.001&menuaction=etemplate.editor.widget";
					url = url.replace(/index.php\?/,"index.php?path="+path+"&");
					window.open(url,"etemplate_editor_widget","dependent=yes,width=640,height=480,location=no,menubar=no,toolbar=no,scrollbars=yes,status=yes");
				}
			</script></td>
	</tr>
	<tr >
		<td  align="left">

<!-- BEGIN eTemplate attendance.tracker.index.rows -->
<div id="attendance.tracker.index.rows">





<!-- BEGIN grid  -->
<table >
	<tr >
		<td  align="left"><div  ondblclick="edit_widget('attendance.tracker.index.rows:14.1.001:/0/1A');" class="clickWidgetToEdit">
<span id="0[account_lid]"></span>&nbsp;</div>
</td>
	</tr>
</table>
<!-- END grid  -->


</div>
<!-- END eTemplate attendance.tracker.index.rows -->

</td>
		<td  align="left">&nbsp;</td>
	</tr>
</table>
<!-- END grid  -->


</div>
<!-- END eTemplate etemplate.editor.new -->

<input type="hidden" name="submit_button" value="" />
<input type="hidden" name="innerWidth" value="" />
</form>

</body>
</html>
