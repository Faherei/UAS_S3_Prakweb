<head>
  <style data-merge-styles="true"></style>
    <style data-merge-styles="true"></style><style data-merge-styles="true"></style><title>Dashboard</title>
    <link rel="shortcut icon" href="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/favicon/1644289115/favicon%20leads.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="leads, leads.upnvj">
<link rel="stylesheet" type="text/css" href="https://leads.upnvj.ac.id/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css"><script async="" src="https://spada.kemdikbud.go.id/moodle/plugin.js?version=3.4&amp;www=https%3A%2F%2Fleads.upnvj.ac.id&amp;location=https%253A%252F%252Fleads.upnvj.ac.id%252Fmy%252F&amp;data=3JXWytbU3dzF3NOHrYuTpqGRmZKbn5iikJGV1cLm5M%2FFzs6QnpG0pru7qpO9tqyisrutvZCRlc7O1NnNhpuL1MXX4M7g3snU2c7Nz5qhlq%2FV0tTSzaHT0NGDlZDN05CflZuRqaeZht4%3D&amp;ids=lco3o&amp;id=6af78322-39b6-3e69-9442-04334b314611"></script><script charset="utf-8" id="yui_3_17_2_1_1733206864992_8" src="https://leads.upnvj.ac.id/theme/yui_combo.php?m/1635748127/core/event/event-min.js&amp;m/1635748127/filter_mathjaxloader/loader/loader-min.js" async=""></script><script charset="utf-8" id="yui_3_17_2_1_1733206864992_19" src="https://leads.upnvj.ac.id/theme/yui_combo.php?3.17.2/event-mousewheel/event-mousewheel-min.js&amp;3.17.2/event-resize/event-resize-min.js&amp;3.17.2/event-hover/event-hover-min.js&amp;3.17.2/event-touch/event-touch-min.js&amp;3.17.2/event-move/event-move-min.js&amp;3.17.2/event-flick/event-flick-min.js&amp;3.17.2/event-valuechange/event-valuechange-min.js&amp;3.17.2/event-tap/event-tap-min.js" async=""></script><script charset="utf-8" id="yui_3_17_2_1_1733206864992_33" src="https://cdn.jsdelivr.net/npm/mathjax@2.7.9/MathJax.js?delayStartupUntil=configured" async=""></script><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://leads.upnvj.ac.id/theme/styles.php/edumy/1644289115_1629149383/all">

<!-- REI ADD -->
<?php 
// Memulai session
session_start();
include '../api/koneksi.php';
include '../api/verif_dosen.php';
?>

<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/leads.upnvj.ac.id","sesskey":"em5zuSbfN0","sessiontimeout":"28800","sessiontimeoutwarning":1200,"themerev":"1644289115","slasharguments":1,"theme":"edumy","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1635748127","admin":"admin","svgicons":true,"usertimezone":"Asia\/Jakarta","contextid":526865,"langrev":1635748127,"templaterev":"1635748127"};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/leads.upnvj.ac.id\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/leads.upnvj.ac.id\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/leads.upnvj.ac.id\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/leads.upnvj.ac.id\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/leads.upnvj.ac.id\/theme\/yui_combo.php?m\/1635748127\/","combine":true,"comboBase":"https:\/\/leads.upnvj.ac.id\/theme\/yui_combo.php?","ext":false,"root":"m\/1635748127\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_attendance-groupfilter":{"requires":["base","node"]},"moodle-mod_customcert-rearrange":{"requires":["dd-delegate","dd-drag"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-block_xp-notification":{"requires":["base","node","handlebars","button-plugin","moodle-core-notification-dialogue"]},"moodle-block_xp-filters":{"requires":["base","node","moodle-core-dragdrop","moodle-core-notification-confirm","moodle-block_xp-rulepicker"]},"moodle-block_xp-rulepicker":{"requires":["base","node","handlebars","moodle-core-notification-dialogue"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-report_overviewstats-charts":{"requires":["base","node","charts","charts-legend"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-beautify":{},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_teamsmeeting-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/leads.upnvj.ac.id\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/leads.upnvj.ac.id\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1635748127\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/leads.upnvj.ac.id\/lib\/javascript.php\/1635748127\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/leads.upnvj.ac.id\/lib\/javascript.php\/1635748127\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdn.jsdelivr.net\/npm\/mathjax@2.7.9\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>


<meta name="spadacourse" id="spadacourse" content="">
<meta name="spadadata" id="spadadata" content="3JXWytbU3dzF3NOHrYuTpqGRmZKbn5iikJGV1cLm5M/Fzs6QnpG0pru7qpO9tqyisrutvZCRlc7O1NnNhpuL1MXX4M7g3snU2c7Nz5qhlq/V0tTSzaHT0NGDlZDN05CflZuRqaeZht4=">
<meta name="spada_cek_wwwroot" id="spada_cek_wwwroot" content="https%3A%2F%2Fleads.upnvj.ac.id">
<!-- SPADA INDONESIA 1 START -->
<script async="" defer="">(function(w,d,s,l,i){var dtspada=document.querySelector('meta[name="spadadata"]').content; var wwwroot=document.querySelector('meta[name="spada_cek_wwwroot"]').content; w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://spada.kemdikbud.go.id/moodle/plugin.js?version=3.4&www='+wwwroot+'&location='+encodeURIComponent(encodeURIComponent(String(window.location)))+'&data='+encodeURIComponent(dtspada)+'&ids='+Math.random().toString(36).substring(7)+'&id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','6af78322-39b6-3e69-9442-04334b314611');
</script>
<!-- SPADA INDONESIA 1 END -->
<meta name="abstract" content="Learning Activities Through digital System (LeADS) UPNVJ merupakan sistem pengelolaan belajar daring di lingkungan Universitas Pembangunan Nasional Veteran Jakarta.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="core/first" src="https://leads.upnvj.ac.id/lib/requirejs.php/1635748127/core/first.js"></script><script type="text/x-mathjax-config;executed=true">
MathJax.Hub.Config({
    config: ["Accessible.js", "Safe.js"],
    errorSettings: { message: ["!"] },
    skipStartupTypeset: true,
    messageStyle: "none"
});
</script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" src="https://leads.upnvj.ac.id/lib/javascript.php/1635748127/lib/jquery/jquery-3.5.1.min.js"></script><style type="text/css" id="ccnStyle"></style><script src="https://spada.kemdikbud.go.id/js/plugin2b.js" async=""></script><style type="text/css">.MathJax_Hover_Frame {border-radius: .25em; -webkit-border-radius: .25em; -moz-border-radius: .25em; -khtml-border-radius: .25em; box-shadow: 0px 0px 15px #83A; -webkit-box-shadow: 0px 0px 15px #83A; -moz-box-shadow: 0px 0px 15px #83A; -khtml-box-shadow: 0px 0px 15px #83A; border: 1px solid #A6D ! important; display: inline-block; position: absolute}
.MathJax_Menu_Button .MathJax_Hover_Arrow {position: absolute; cursor: pointer; display: inline-block; border: 2px solid #AAA; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; font-family: 'Courier New',Courier; font-size: 9px; color: #F0F0F0}
.MathJax_Menu_Button .MathJax_Hover_Arrow span {display: block; background-color: #AAA; border: 1px solid; border-radius: 3px; line-height: 0; padding: 4px}
.MathJax_Hover_Arrow:hover {color: white!important; border: 2px solid #CCC!important}
.MathJax_Hover_Arrow:hover span {background-color: #CCC!important}
</style><style type="text/css">#MathJax_About {position: fixed; left: 50%; width: auto; text-align: center; border: 3px outset; padding: 1em 2em; background-color: #DDDDDD; color: black; cursor: default; font-family: message-box; font-size: 120%; font-style: normal; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; z-index: 201; border-radius: 15px; -webkit-border-radius: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; box-shadow: 0px 10px 20px #808080; -webkit-box-shadow: 0px 10px 20px #808080; -moz-box-shadow: 0px 10px 20px #808080; -khtml-box-shadow: 0px 10px 20px #808080; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
#MathJax_About.MathJax_MousePost {outline: none}
.MathJax_Menu {position: absolute; background-color: white; color: black; width: auto; padding: 2px; border: 1px solid #CCCCCC; margin: 0; cursor: default; font: menu; text-align: left; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; z-index: 201; box-shadow: 0px 10px 20px #808080; -webkit-box-shadow: 0px 10px 20px #808080; -moz-box-shadow: 0px 10px 20px #808080; -khtml-box-shadow: 0px 10px 20px #808080; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
.MathJax_MenuItem {padding: 2px 2em; background: transparent}
.MathJax_MenuArrow {position: absolute; right: .5em; padding-top: .25em; color: #666666; font-size: .75em}
.MathJax_MenuActive .MathJax_MenuArrow {color: white}
.MathJax_MenuArrow.RTL {left: .5em; right: auto}
.MathJax_MenuCheck {position: absolute; left: .7em}
.MathJax_MenuCheck.RTL {right: .7em; left: auto}
.MathJax_MenuRadioCheck {position: absolute; left: 1em}
.MathJax_MenuRadioCheck.RTL {right: 1em; left: auto}
.MathJax_MenuLabel {padding: 2px 2em 4px 1.33em; font-style: italic}
.MathJax_MenuRule {border-top: 1px solid #CCCCCC; margin: 4px 1px 0px}
.MathJax_MenuDisabled {color: GrayText}
.MathJax_MenuActive {background-color: Highlight; color: HighlightText}
.MathJax_MenuDisabled:focus, .MathJax_MenuLabel:focus {background-color: #E8E8E8}
.MathJax_ContextMenu:focus {outline: none}
.MathJax_ContextMenu .MathJax_MenuItem:focus {outline: none}
#MathJax_AboutClose {top: .2em; right: .2em}
.MathJax_Menu .MathJax_MenuClose {top: -10px; left: -10px}
.MathJax_MenuClose {position: absolute; cursor: pointer; display: inline-block; border: 2px solid #AAA; border-radius: 18px; -webkit-border-radius: 18px; -moz-border-radius: 18px; -khtml-border-radius: 18px; font-family: 'Courier New',Courier; font-size: 24px; color: #F0F0F0}
.MathJax_MenuClose span {display: block; background-color: #AAA; border: 1.5px solid; border-radius: 18px; -webkit-border-radius: 18px; -moz-border-radius: 18px; -khtml-border-radius: 18px; line-height: 0; padding: 8px 0 6px}
.MathJax_MenuClose:hover {color: white!important; border: 2px solid #CCC!important}
.MathJax_MenuClose:hover span {background-color: #CCC!important}
.MathJax_MenuClose:hover:focus {outline: none}
</style><style type="text/css">.MathJax_Preview .MJXf-math {color: inherit!important}
</style><style type="text/css">.MJX_Assistive_MathML {position: absolute!important; top: 0; left: 0; clip: rect(1px, 1px, 1px, 1px); padding: 1px 0 0 0!important; border: 0!important; height: 1px!important; width: 1px!important; overflow: hidden!important; display: block!important; -webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none}
.MJX_Assistive_MathML.MJX_Assistive_MathML_Block {width: 100%!important}
</style><style type="text/css">#MathJax_Zoom {position: absolute; background-color: #F0F0F0; overflow: auto; display: block; z-index: 301; padding: .5em; border: 1px solid black; margin: 0; font-weight: normal; font-style: normal; text-align: left; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; -webkit-box-sizing: content-box; -moz-box-sizing: content-box; box-sizing: content-box; box-shadow: 5px 5px 15px #AAAAAA; -webkit-box-shadow: 5px 5px 15px #AAAAAA; -moz-box-shadow: 5px 5px 15px #AAAAAA; -khtml-box-shadow: 5px 5px 15px #AAAAAA; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
#MathJax_ZoomOverlay {position: absolute; left: 0; top: 0; z-index: 300; display: inline-block; width: 100%; height: 100%; border: 0; padding: 0; margin: 0; background-color: white; opacity: 0; filter: alpha(opacity=0)}
#MathJax_ZoomFrame {position: relative; display: inline-block; height: 0; width: 0}
#MathJax_ZoomEventTrap {position: absolute; left: 0; top: 0; z-index: 302; display: inline-block; border: 0; padding: 0; margin: 0; background-color: white; opacity: 0; filter: alpha(opacity=0)}
</style><style type="text/css">.MathJax_Preview {color: #888; display: contents}
#MathJax_Message {position: fixed; left: 1em; bottom: 1.5em; background-color: #E6E6E6; border: 1px solid #959595; margin: 0px; padding: 2px 8px; z-index: 102; color: black; font-size: 80%; width: auto; white-space: nowrap}
#MathJax_MSIE_Frame {position: absolute; top: 0; left: 0; width: 0px; z-index: 101; border: 0px; margin: 0px; padding: 0px}
.MathJax_Error {color: #CC0000; font-style: italic}
</style><style type="text/css">.MJXp-script {font-size: .8em}
.MJXp-right {-webkit-transform-origin: right; -moz-transform-origin: right; -ms-transform-origin: right; -o-transform-origin: right; transform-origin: right}
.MJXp-bold {font-weight: bold}
.MJXp-italic {font-style: italic}
.MJXp-scr {font-family: MathJax_Script,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-frak {font-family: MathJax_Fraktur,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-sf {font-family: MathJax_SansSerif,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-cal {font-family: MathJax_Caligraphic,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-mono {font-family: MathJax_Typewriter,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-largeop {font-size: 150%}
.MJXp-largeop.MJXp-int {vertical-align: -.2em}
.MJXp-math {display: inline-block; line-height: 1.2; text-indent: 0; font-family: 'Times New Roman',Times,STIXGeneral,serif; white-space: nowrap; border-collapse: collapse}
.MJXp-display {display: block; text-align: center; margin: 1em 0}
.MJXp-math span {display: inline-block}
.MJXp-box {display: block!important; text-align: center}
.MJXp-box:after {content: " "}
.MJXp-rule {display: block!important; margin-top: .1em}
.MJXp-char {display: block!important}
.MJXp-mo {margin: 0 .15em}
.MJXp-mfrac {margin: 0 .125em; vertical-align: .25em}
.MJXp-denom {display: inline-table!important; width: 100%}
.MJXp-denom > * {display: table-row!important}
.MJXp-surd {vertical-align: top}
.MJXp-surd > * {display: block!important}
.MJXp-script-box > *  {display: table!important; height: 50%}
.MJXp-script-box > * > * {display: table-cell!important; vertical-align: top}
.MJXp-script-box > *:last-child > * {vertical-align: bottom}
.MJXp-script-box > * > * > * {display: block!important}
.MJXp-mphantom {visibility: hidden}
.MJXp-munderover, .MJXp-munder {display: inline-table!important}
.MJXp-over {display: inline-block!important; text-align: center}
.MJXp-over > * {display: block!important}
.MJXp-munderover > *, .MJXp-munder > * {display: table-row!important}
.MJXp-mtable {vertical-align: .25em; margin: 0 .125em}
.MJXp-mtable > * {display: inline-table!important; vertical-align: middle}
.MJXp-mtr {display: table-row!important}
.MJXp-mtd {display: table-cell!important; text-align: center; padding: .5em 0 0 .5em}
.MJXp-mtr > .MJXp-mtd:first-child {padding-left: 0}
.MJXp-mtr:first-child > .MJXp-mtd {padding-top: 0}
.MJXp-mlabeledtr {display: table-row!important}
.MJXp-mlabeledtr > .MJXp-mtd:first-child {padding-left: 0}
.MJXp-mlabeledtr:first-child > .MJXp-mtd {padding-top: 0}
.MJXp-merror {background-color: #FFFF88; color: #CC0000; border: 1px solid #CC0000; padding: 1px 3px; font-style: normal; font-size: 90%}
.MJXp-scale0 {-webkit-transform: scaleX(.0); -moz-transform: scaleX(.0); -ms-transform: scaleX(.0); -o-transform: scaleX(.0); transform: scaleX(.0)}
.MJXp-scale1 {-webkit-transform: scaleX(.1); -moz-transform: scaleX(.1); -ms-transform: scaleX(.1); -o-transform: scaleX(.1); transform: scaleX(.1)}
.MJXp-scale2 {-webkit-transform: scaleX(.2); -moz-transform: scaleX(.2); -ms-transform: scaleX(.2); -o-transform: scaleX(.2); transform: scaleX(.2)}
.MJXp-scale3 {-webkit-transform: scaleX(.3); -moz-transform: scaleX(.3); -ms-transform: scaleX(.3); -o-transform: scaleX(.3); transform: scaleX(.3)}
.MJXp-scale4 {-webkit-transform: scaleX(.4); -moz-transform: scaleX(.4); -ms-transform: scaleX(.4); -o-transform: scaleX(.4); transform: scaleX(.4)}
.MJXp-scale5 {-webkit-transform: scaleX(.5); -moz-transform: scaleX(.5); -ms-transform: scaleX(.5); -o-transform: scaleX(.5); transform: scaleX(.5)}
.MJXp-scale6 {-webkit-transform: scaleX(.6); -moz-transform: scaleX(.6); -ms-transform: scaleX(.6); -o-transform: scaleX(.6); transform: scaleX(.6)}
.MJXp-scale7 {-webkit-transform: scaleX(.7); -moz-transform: scaleX(.7); -ms-transform: scaleX(.7); -o-transform: scaleX(.7); transform: scaleX(.7)}
.MJXp-scale8 {-webkit-transform: scaleX(.8); -moz-transform: scaleX(.8); -ms-transform: scaleX(.8); -o-transform: scaleX(.8); transform: scaleX(.8)}
.MJXp-scale9 {-webkit-transform: scaleX(.9); -moz-transform: scaleX(.9); -ms-transform: scaleX(.9); -o-transform: scaleX(.9); transform: scaleX(.9)}
.MathJax_PHTML .noError {vertical-align: ; font-size: 90%; text-align: left; color: black; padding: 1px 3px; border: 1px solid}
</style><script type="text/javascript">
require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2024-335-5");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2024-337-5");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2024-339-5");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2024-350-5");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2024-351-5");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require([
    'jquery',
    'core_calendar/selectors',
    'core_calendar/events',
], function(
    $,
    CalendarSelectors,
    CalendarEvents
) {

    $('body').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-mini-5-filterChanged");
        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        $("#month-mini-2024-12-5")
            .find(CalendarSelectors.popoverType[data.type])
            .toggleClass('hidden', !!data.hidden);
        M.util.js_complete("month-mini-5-filterChanged");
    });
});
</script>
</head>

<body id="page-my-index" class="format-site path-my chrome dir-ltr lang-en yui-skin-sam yui3-skin-sam leads-upnvj-ac-id pagelayout-mydashboard course-1 context-526865 ccn_no_hero ccn_header_style_9 ccn_footer_style_9 ccn_blog_style_2 ccn_course_list_style_2 ccn_breadcrumb_style_0 role-standard ccn-not-front ccn_header_applies-all ccn_dashboard_header_sticky ccn_dashboard_header_gradient ccn_course_single_v1 ccnUA ccn_context_dashboard mm-wrapper jsenabled ccnDarkMode" data-new-gr-c-s-check-loaded="14.1090.0" data-gr-ext-installed=""><div id="MathJax_Message" style="display: none;"></div><nav id="menu" class="stylehome1 mm-menu mm-menu_offcanvas" aria-hidden="true">
        
      <div class="mm-panels"><div id="mm-1" class="mm-panel mm-panel_opened"><div class="mm-navbar mm-navbar_sticky"><a class="mm-navbar__title"><span>Menu</span></a></div><ul class="mm-listview">
          <li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/?redirect=0">Home</a></li>
          <li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="#">Faculty</a>
          <a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-2"><span class="mm-sronly">Open submenu</span></a></li>
          <li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/mod/forum/view.php?id=1">Announcements</a></li>
          <li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="#">Helpdesk</a>
            <a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-3"><span class="mm-sronly">Open submenu</span></a></li>
          <li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" title="Language" href="#">English ‎(en)‎</a>
          <a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-4"><span class="mm-sronly">Open submenu</span></a></li>
            <li class="mm-listitem">
              <a href="#" class="mm-listitem__text">Navigation</a>
              
            <a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-5"><span class="mm-sronly">Open submenu</span></a></li>
            <li class="mm-listitem">
              <a href="#" class="mm-listitem__text">2310512143 <img class="rounded-circle" src="https://leads.upnvj.ac.id/user/pix.php/20678/f1.jpg" alt="2310512143"></a>
              
            <a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-7"><span class="mm-sronly">Open submenu</span></a></li>
        </ul></div><div id="mm-2" class="mm-panel mm-hidden" aria-hidden="true"><div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1" aria-haspopup="true" aria-owns="mm-1"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title" href="#mm-1" aria-hidden="true"><span>Faculty</span></a></div><ul class="mm-listview"><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/course/index.php?categoryid=1">Economics and Business</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/course/index.php?categoryid=3">Medicine</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/course/index.php?categoryid=4">Engineering</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/course/index.php?categoryid=5">Social and Political Science</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/course/index.php?categoryid=2">Computer Science</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/course/index.php?categoryid=6">Law</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/course/index.php?categoryid=7">Health Science</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/course/index.php?categoryid=24">University Courses</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/course/">All Course</a></li></ul></div><div id="mm-3" class="mm-panel mm-hidden" aria-hidden="true"><div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1" aria-haspopup="true" aria-owns="mm-1"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title" href="#mm-1" aria-hidden="true"><span>Helpdesk</span></a></div><ul class="mm-listview"><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/mod/forum/discuss.php?d=1">Guide for Lecture</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/mod/forum/discuss.php?d=2">Guide for Student</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="https://leads.upnvj.ac.id/mod/forum/discuss.php?d=18078">Guidebook</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="#">FAQ</a></li></ul></div><div id="mm-4" class="mm-panel mm-hidden" aria-hidden="true"><div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1" aria-haspopup="true" aria-owns="mm-1"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title" href="#mm-1" aria-hidden="true"><span>English ‎(en)‎</span></a></div><ul class="mm-listview"><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" title="English ‎(en)‎" href="https://leads.upnvj.ac.id/my/index.php?lang=en">English ‎(en)‎</a></li><li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" title="Indonesian ‎(id)‎" href="https://leads.upnvj.ac.id/my/index.php?lang=id">Indonesian ‎(id)‎</a></li></ul></div><div id="mm-5" class="mm-panel mm-hidden" aria-hidden="true"><div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1" aria-haspopup="true" aria-owns="mm-1"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title" href="#mm-1" aria-hidden="true"><span>Navigation</span></a></div><ul class="mm-listview">
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/my/" data-key="myhome" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0">

        <i class="icon fa flaticon-puzzle-1 fa-fw " aria-hidden="true"></i>
      Dashboard

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/?redirect=0" data-key="home" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">

        <i class="icon fa ccn-flaticon-home fa-fw " aria-hidden="true"></i>
      Site home

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/calendar/view.php?view=month" data-key="calendar" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">

        <i class="icon fa flaticon-calendar-1 fa-fw " aria-hidden="true"></i>
      Calendar

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/user/files.php" data-key="privatefiles" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">

        <i class="icon fa ccn-flaticon-document fa-fw " aria-hidden="true"></i>
      Private files

    </a></li>
    
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/course/view.php?id=5651" data-key="5651" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">

        <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
      Dasar Pemrograman-SIM123102-#29226-512.2023-FIK-20231

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/course/view.php?id=5649" data-key="5649" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">

        <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
      Konsep Basis Data-SIM123104-#29228-512.2023-FIK-20231

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/course/view.php?id=5381" data-key="5381" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">

        <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
      Konsep Sistem Informasi-SIM123107-#29231-512.2023-FIK-20231

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/course/view.php?id=5647" data-key="5647" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">

        <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
      Matematika Diskrit-SIM123106-#29230-512.2023-FIK-20231

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/course/view.php?id=5653" data-key="5653" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">

        <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
      Pancasila &amp; Pendidikan Kewarganegaraan-MKU123102-#29224-512.2023-FIK-20231

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/course/view.php?id=5654" data-key="5654" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">

        <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
      Pendidikan Agama-MKU123101-#29223-512.2023-FIK-20231

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/course/view.php?id=5652" data-key="5652" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">

        <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
      Pengantar Teknologi Informasi-SIM123101-#29225-512.2023-FIK-20231

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/course/view.php?id=5650" data-key="5650" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">

        <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
      Praktikum Dasar Pemrograman-SIM123103-#29227-512.2023-FIK-20231

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/course/view.php?id=5648" data-key="5648" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">

        <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
      Praktikum Konsep Basis Data-SIM123105-#29229-512.2023-FIK-20231

    </a></li>
    <li class="mm-listitem"><a class="mm-listitem__text" href="https://leads.upnvj.ac.id/course/view.php?id=5380" data-key="5380" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">

        <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
      Transformasi Digital-SIM123108-#29232-512.2023-FIK-20231

    </a></li>
    <li class="mm-listitem"><a class="active mm-listitem__text" href="https://leads.upnvj.ac.id/my/" data-key="courseindexpage" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">

        <i class="icon fa fa-fw fa-fw " aria-hidden="true"></i>
      More...

    </a></li>

</ul></div><div id="mm-7" class="mm-panel mm-hidden" aria-hidden="true"><div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1" aria-haspopup="true" aria-owns="mm-1"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title" href="#mm-1" aria-hidden="true"><span>2310512143 </span></a></div><ul class="mm-listview"><li class="mm-listitem"><a class="mm-listitem mm-listitem__text" href="https://leads.upnvj.ac.id/my/"> <i class="icon fa fa-fw flaticon-puzzle-1"></i>Dashboard</a></li><li class="mm-listitem"><a class="mm-listitem mm-listitem__text" href="https://leads.upnvj.ac.id/user/profile.php?id=20678"> <i class="icon fa fa-fw flaticon-student"></i>Profile</a></li><li class="mm-listitem"><a class="mm-listitem mm-listitem__text" href="https://leads.upnvj.ac.id/grade/report/overview/index.php"> <i class="icon fa fa-fw flaticon-rating"></i>Grades</a></li><li class="mm-listitem"><a class="mm-listitem mm-listitem__text" href="https://leads.upnvj.ac.id/message/index.php"> <i class="icon fa fa-fw flaticon-speech-bubble"></i>Messages</a></li><li class="mm-listitem"><a class="mm-listitem mm-listitem__text" href="https://leads.upnvj.ac.id/user/preferences.php"> <i class="icon fa fa-fw flaticon-settings"></i>Preferences</a></li><li class="mm-listitem"><a class="mm-listitem mm-listitem__text" href="../logout.php"> <i class="icon fa fa-fw flaticon-logout"></i>Log out</a></li></ul></div></div></nav>
    <div class="mm-page mm-slideout" id="mm-0"><div class="preloader
      
       ccn_preloader_ready 
      
      
      
      
    " style="display: none;"></div><div class="wrapper">
    
    <header class="header-nav menu_style_home_one dashbord_pages navbar-scrolltofixed stricky main-menu scroll-to-fixed-fixed" style="z-index: 1000; position: fixed; top: 0px; margin-left: 0px; width: 1365px; left: 0px;">
      <div class="container-fluid">
        <nav>
          <div class="menu-toggle" style="display: none;">
            <img class="nav_logo_img img-fluid" src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="LeADS">
            <button type="button" id="menu-btn">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
            <a href="https://leads.upnvj.ac.id" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="LeADS">
                <img class="logo2 img-fluid" src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="LeADS">
              
            </a>
          <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
            <li class=""><a class="ccn-menu-item" href="#">Home</a></li>
            <li><a class="ccn-menu-item" href="#">Faculty<span class="arrow "></span></a>
              <ul class="sub-menu"><li class=""><a class="ccn-menu-item" href="#">Economics and Business</a></li>
            <li class=""><a class="ccn-menu-item" href="#">Medicine</a></li>
            <li class=""><a class="ccn-menu-item" href="#">Engineering</a></li>
            <li class=""><a class="ccn-menu-item" href="#">Social and Political Science</a></li>
            <li class=""><a class="ccn-menu-item" href="#">Computer Science</a></li>
            <li class=""><a class="ccn-menu-item" href="#">Law</a></li>
            <li class=""><a class="ccn-menu-item" href="#">Health Science</a></li>
            <li class=""><a class="ccn-menu-item" href="#">University Courses</a></li>
            <li class=""><a class="ccn-menu-item" href="#">All Course</a></li></ul></li>
            <li class=""><a class="ccn-menu-item" href="#">Announcements</a></li>
            <!-- REI ADD -->
            <li class=""><a class="ccn-menu-item" href="home_dosen.php">Bimbingan Skripsi</a></li>
            <li><a class="ccn-menu-item" href="#">Helpdesk<span class="arrow "></span></a>
              <ul class="sub-menu"><li class=""><a class="ccn-menu-item" href="#">Guide for Lecture</a></li>
            <li class=""><a class="ccn-menu-item" href="#">Guide for Student</a></li>
            <li class=""><a class="ccn-menu-item" href="#">Guidebook</a></li>
            <li class=""><a class="ccn-menu-item" href="#">FAQ</a></li></ul></li><li><a class="ccn-menu-item" title="Language" href="#">English ‎(en)‎<span class="arrow "></span></a>
                <ul class="sub-menu"><li class=""><a class="ccn-menu-item" title="English ‎(en)‎" href="#">English ‎(en)‎</a></li>
            <li class=""><a class="ccn-menu-item" title="Indonesian ‎(id)‎" href="#">Indonesian ‎(id)‎</a></li></ul></li>
          </ul>
            <ul class="header_user_notif ccn-frontend-header_user_notif pull-right dn-smd">
                <li class="user_setting ccn-settings-nav ccn-settings-nav-darkMode">
                  <div class="dropdown">
                    <a class="notification_icon active" id="ccnToggleDarkMode"><span class="ccn-flaticon-hide"></span></a>
                  </div>
                </li>
              <li class="user_notif ccn-settings-nav ccn-settings-nav-notif">
  <div class="dropdown">
    <div class="popover-region collapsed popover-region-notifications" id="nav-notification-popover-container" data-userid="20678" data-region="popover-region">
      <div class="popover-region-toggle nav-link" data-region="popover-region-toggle" role="button" aria-controls="popover-region-container-674ea35027ab1674ea34e3623513" aria-haspopup="true" aria-label="Show notification window with no new notifications" tabindex="0">
        <div class="notification_icon">        <i class="icon fa flaticon-alarm fa-fw " title="Toggle notifications menu" aria-label="Toggle notifications menu"></i>
        <div class="count-container " data-region="count-container" aria-label="There are 155 unread notifications">155</div>
</div>
      </div>
      <div id="popover-region-container-674ea35027ab1674ea34e3623513" class="popover-region-container" data-region="popover-region-container" aria-expanded="false" aria-hidden="true" aria-label="Notification window" role="region">
        <div class="--popover-region-header-container so_heading">
          <p class="--popover-region-header-text" data-region="popover-region-header-text">Notifications</p>
          <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button" href="#" title="Mark all as read" data-action="mark-all-read" role="button" aria-label="Mark all as read">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true"></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
        </a>
        <a href="#" title="Notification preferences" aria-label="Notification preferences">
            <i class="icon fa flaticon-settings fa-fw " aria-hidden="true"></i>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
          <div class="popover-region-content" data-region="popover-region-content">
                    <div class="all-notifications" data-region="all-notifications" role="log" aria-busy="false" aria-atomic="false" aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">You have no notifications</div>

          </div>
          <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
        </div>
          <a class="see-all-link view_all_noti text-thm" href="#">
            <div class="ccn--popover-region-footer-container">
              <div class="popover-region-seeall-text">See all</div>
            </div>
          </a>
      </div>
    </div>
  </div>
</li><li class="user_notif ccn-settings-nav ccn-settings-nav-msg">
  <div class="dropdown">
  <div class="float-right popover-region collapsed">
    <a id="message-drawer-toggle-674ea35029e56674ea34e3623514" class="nav-link d-inline-block popover-region-toggle position-relative" href="#" role="button">
      <div class="notification_icon"><i class="icon fa flaticon-speech-bubble fa-fw " title="Toggle messaging drawer" aria-label="Toggle messaging drawer"></i></div>
      <div class="count-container hidden" data-region="count-container" aria-label="There are 0 unread conversations">0</div>
    </a>
  </div>
</div>
</li>
                <li class="user_setting ccn-settings-nav">
                  <div class="dropdown">
                    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-settings"></span></a>
                    <div class="dropdown-menu notification_dropdown_content">
                      <div class="so_heading">
                        <p>Navigation</p>
                      </div>
                      <div class="user_setting_content">
                        <div class="so_content" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content" style="padding: 0px; height: auto; overflow: hidden;">
                          <nav class="list-group" aria-label="Site">
                              <a class=" " href="#" data-key="myhome" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0">
                          
                                  <i class="icon fa flaticon-puzzle-1 fa-fw " aria-hidden="true"></i>
                                Dashboard
                          
                              </a>
                              <a class=" " href="#" data-key="home" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                          
                                  <i class="icon fa ccn-flaticon-home fa-fw " aria-hidden="true"></i>
                                Site home
                          
                              </a>
                              <a class=" " href="#" data-key="calendar" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                          
                                  <i class="icon fa flaticon-calendar-1 fa-fw " aria-hidden="true"></i>
                                Calendar
                          
                              </a>
                              <a class=" " href="#" data-key="privatefiles" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                          
                                  <i class="icon fa ccn-flaticon-document fa-fw " aria-hidden="true"></i>
                                Private files
                          
                              </a>
                              <div class="no-action" data-key="mycourses" data-isexpandable="1" data-indent="0" data-showdivider="0" data-type="0" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                          
                          
                                  <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
                                My courses
                          
                              </div>
                              <a class=" " href="#" data-key="5651" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                          
                                  <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
                                Dasar Pemrograman-SIM123102-#29226-512.2023-FIK-20231
                          
                              </a>
                              <a class=" " href="#" data-key="5649" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                          
                                  <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
                                Konsep Basis Data-SIM123104-#29228-512.2023-FIK-20231
                          
                              </a>
                              <a class=" " href="#" data-key="5381" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                          
                                  <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
                                Konsep Sistem Informasi-SIM123107-#29231-512.2023-FIK-20231
                          
                              </a>
                              <a class=" " href="#" data-key="5647" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                          
                                  <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
                                Matematika Diskrit-SIM123106-#29230-512.2023-FIK-20231
                          
                              </a>
                              <a class=" " href="#" data-key="5653" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                          
                                  <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
                                Pancasila &amp; Pendidikan Kewarganegaraan-MKU123102-#29224-512.2023-FIK-20231
                          
                              </a>
                              <a class=" " href="#" data-key="5654" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                          
                                  <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
                                Pendidikan Agama-MKU123101-#29223-512.2023-FIK-20231
                          
                              </a>
                              <a class=" " href="#" data-key="5652" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                          
                                  <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
                                Pengantar Teknologi Informasi-SIM123101-#29225-512.2023-FIK-20231
                          
                              </a>
                              <a class=" " href="#" data-key="5650" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                          
                                  <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
                                Praktikum Dasar Pemrograman-SIM123103-#29227-512.2023-FIK-20231
                          
                              </a>
                              <a class=" " href="#" data-key="5648" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                          
                                  <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
                                Praktikum Konsep Basis Data-SIM123105-#29229-512.2023-FIK-20231
                          
                              </a>
                              <a class=" " href="#" data-key="5380" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                          
                                  <i class="icon fa flaticon-graduation-cap fa-fw " aria-hidden="true"></i>
                                Transformasi Digital-SIM123108-#29232-512.2023-FIK-20231
                          
                              </a>
                              <a class=" active" href="#" data-key="courseindexpage" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                          
                                  <i class="icon fa fa-fw fa-fw " aria-hidden="true"></i>
                                More...
                          
                              </a>
                          </nav>
                        </div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); visibility: hidden;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); visibility: hidden;"></div></div></div>
                      </div>
                    </div>
                  </div>
                </li>
              <li class="user_setting">
                <div class="dropdown">
                  <!-- PROFILE -->
                  <a class="btn dropdown-toggle ccn-profile-menu" href="#" data-toggle="dropdown" aria-expanded="false">
                  <?php
                  $dsn = $_SESSION['nama'];
                  $select = mysqli_query($conn, "SELECT * FROM `dosen` WHERE nama = '$dsn'");
                  if(mysqli_num_rows($select) > 0){
                      $fetch = mysqli_fetch_assoc($select);
                  }
                  if($fetch['profile'] == ''){
                      echo '<img src="../assets/uploads/default-profile.jpeg">';
                  }else{
                      echo '<img src="../assets/uploads/'.$fetch['profile'].'">';
                  }
                  ?>
                  </a>
                  <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(-9px, -5px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="user_set_header">
                    <?php
                    $mhs = $_SESSION['nama'];
                    $select = mysqli_query($conn, "SELECT * FROM `mahasiswa` WHERE nama = '$mhs'");
                    if(mysqli_num_rows($select) > 0){
                        $fetch = mysqli_fetch_assoc($select);
                    }
                    if($fetch['profile'] == ''){
                        echo '<img class="float-left rounded-circle" src="../assets/uploads/default-profile.jpeg">';
                    }else{
                        echo '<img class="float-left rounded-circle" src="../assets/uploads/'.$fetch['profile'].'">';
                    }
                    ?>
                      <!-- REI ADD - NIM Username Email -->
                      <p><?php echo $_SESSION['nid']; ?> <?php echo $_SESSION['nama']; ?> <br><span class="address"><?php echo $_SESSION['email']; ?></span></p>
                    </div>
                    <!-- REI ADD - User Setting -->
                    <div class="user_setting_content">
                      <a class="dropdown-item" href="#">
                        <i class="icon fa fa-fw flaticon-puzzle-1"></i>Dashboard</a>
                        <!-- REI ADD - Home User Settings -->
                        <a class="dropdown-item" href="profile_dosen.php"> <i class="icon fa fa-fw flaticon-student"></i>Profile</a>
                        <a class="dropdown-item" href="#"> <i class="icon fa fa-fw flaticon-rating"></i>Grades</a>
                        <a class="dropdown-item" href="#"> <i class="icon fa fa-fw flaticon-speech-bubble"></i>Messages</a>
                        <a class="dropdown-item" href="#"> <i class="icon fa fa-fw flaticon-settings"></i>Preferences</a>
                        <!-- REI ADD - Logout -->
                        <a class="dropdown-item" href="../logout.php"> <i class="icon fa fa-fw flaticon-logout"></i>Log out</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
        </nav>
      </div>
    </header><div style="display: none;"></div>
    <div id="page" class="stylehome1 h0">
      <div class="mobile-menu">
        <div class="header stylehome1 dashbord_mobile_logo dashbord_pages">
          <div class="main_logo_home2">
            <a href="https://leads.upnvj.ac.id" class="mobileBrand">
                  <img class="nav_logo_img img-fluid float-left mt20" src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo_mobile/1644289115/leadsmobile%20%282%29.png" alt="LeADS">
              
            </a>
          </div>
          <ul class="menu_bar_home2">
            <li class="list-inline-item"></li>
            <li class="list-inline-item"><a href="#menu"><span></span></a></li>
          </ul>
        </div>
      </div><!-- /.mobile-menu -->
      
    </div>
      <section class="dashboard_sidebar dn-1199 ">
        <div class="dashboard_sidebars">
          <div class="user_board">
              <div class="user_profile">
                <div class="media">
                  <div class="media-body">
                    <h4 class="mt-0">Start</h4>
                  </div>
                </div>
              </div>
              <!-- REI Add - User Setting -->
              <div class="dashbord_nav_list">
                <ul><li><a class="" href="#"> <i class="icon fa fa-fw flaticon-puzzle-1"></i>Dashboard</a>
                <!-- REI ADD - Profile -->
              </li><li><a class="" href="REI REI REI"> <i class="icon fa fa-fw flaticon-student"></i>Profile</a></li>
              <li><a class="" href="#"> <i class="icon fa fa-fw flaticon-rating"></i>Grades</a></li>
              <li><a class="" href="#"> <i class="icon fa fa-fw flaticon-speech-bubble"></i>Messages</a></li>
              <li><a class="" href="#"> <i class="icon fa fa-fw flaticon-settings"></i>Preferences</a></li>
              <li><a class="" href="../logout.php"> <i class="icon fa fa-fw flaticon-logout"></i>Log out</a></li></ul>
              </div>
            <div class="pl30 pr30">
              <aside id="block-region-left" class="block-region" data-blockregion="left" data-droptarget="1"></aside>
            </div>
          </div>
        </div>
      </section>
    <div class="our-dashbord dashbord ">
      <div class="dashboard_main_content">
        <div class="container-fluid">
          <div class="main_content_container">
            <div class="row">
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-lg-12">
                    <nav class="breadcrumb_widgets ccn-clip-lx2" aria-label="breadcrumb mb30">
                      <h4 class="title float-left">LeADS: Dashboard</h4>
                      <ol class="breadcrumb float-right">
                        <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active ">My courses</li>
      <li class="breadcrumb-item">
        <a href="#" aria-current="page">More...</a>
      </li>
</ol>
                      </ol>
                    </nav>
                  </div>
                </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                          <a href="#" class="ff_one">
                            <div class="detais">
                              <p>Communicate</p>
                              Messages
                            </div>
                            <div class="ff_icon"><span class="flaticon-speech-bubble"></span></div>
                          </a>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                          <a href="#" class="ff_one style2">
                            <div class="detais">
                              <p>Your Profile</p>
                              Profile
                            </div>
                            <div class="ff_icon"><span class="flaticon-cap"></span></div>
                          </a>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                          <a href="#" class="ff_one style3">
                            <div class="detais">
                              <p>Preferences</p>
                              Settings
                            </div>
                            <div class="ff_icon"><span class="flaticon-settings"></span></div>
                          </a>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                          <a href="#" class="ff_one style4">
                            <div class="detais">
                              <p>Performance</p>
                              Grades
                            </div>
                            <div class="ff_icon"><span class="flaticon-rating"></span></div>
                          </a>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                      <aside id="block-region-fullwidth-top" class="block-region" data-blockregion="fullwidth-top" data-droptarget="1"></aside>
                    </div>
                    <div class="col-lg-8 col-xl-8 ">
                  <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script src="https://leads.upnvj.ac.id/lib/javascript.php/1635748127/lib/babel-polyfill/polyfill.min.js"></script>
<script src="https://leads.upnvj.ac.id/lib/javascript.php/1635748127/lib/polyfills/polyfill.js"></script>
<script src="https://leads.upnvj.ac.id/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script src="https://leads.upnvj.ac.id/theme/jquery.php/core/jquery-3.5.1.min.js"></script>
<script src="https://leads.upnvj.ac.id/lib/javascript.php/1635748127/lib/javascript-static.js"></script>
<script src="https://leads.upnvj.ac.id/theme/javascript.php/edumy/1644289115/head"></script>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



<meta name="spadacourse" id="spadacourse" content="">
<meta name="spadadata" id="spadadata" content="3JXWytbU3dzF3NOHrYuTpqGRmZKbn5iikJGV1cLm5M/Fzs6QnpG0pru7qpO9tqyisrutvZCRlc7O1NnNhpuL1MXX4M7g3snU2c7Nz5qhlq/V0tTSzaHT0NGDlZDN05CflZuRqaeZht4=">
<meta name="spada_cek_wwwroot" id="spada_cek_wwwroot" content="https%3A%2F%2Fleads.upnvj.ac.id">
<!-- SPADA INDONESIA 1 START -->

<!-- SPADA INDONESIA 1 END -->

                  <div class="container ccn_breadcrumb_widgets clearfix">
    <div id="page-heading-button">
      <div class="singlebutton">
    <form method="post" action="https://leads.upnvj.ac.id/my/index.php">
            <input type="hidden" name="edit" value="1">
            <input type="hidden" name="sesskey" value="em5zuSbfN0">
        <button type="submit" class="btn btn-secondary" id="single_button674ea34e362351" title="">Customise this page</button>
    </form>
</div>
      <div class="sr-only"></div>
    </div>
</div>

                  
                    <aside id="block-region-above-content" class="block-region" data-blockregion="above-content" data-droptarget="1"></aside>
                  <span class="notifications" id="user-notifications"><div class="cta alert alert-primary alert-block fade in " data-region="core/userfeedback">
    <div class="media">
        <div class="mr-2 icon-size-5">
            <i class="icon fa fa-bullhorn fa-fw " aria-hidden="true"></i>
        </div>
        <div class="media-body align-self-center">
            The creators of this software would like your feedback.<br>
                <a href="#" class="link-underline aalink" data-action="give" data-record="1" data-hide="1">Give feedback about this software</a>
                <a href="#" class="link-underline aalink" data-action="remind" data-record="1" data-hide="1">Remind me later</a>
        </div>
    </div>
</div></span>
                  <span id="maincontent"></span><script>
//<![CDATA[
(function() {var notificationHolder = document.getElementById('user-notifications');if (!notificationHolder) { return; }var thisNotification = document.getElementById('674ea3503457d');if (!thisNotification) { return; }notificationHolder.insertBefore(thisNotification.firstChild, notificationHolder.firstChild);thisNotification.remove();})();
//]]>
</script>
<aside id="block-region-content" class="block-region" data-blockregion="content" data-droptarget="1"><div id="inst318891" class="
    block_recentlyaccessedcourses block
    
    
    " style="" role="complementary" data-block="recentlyaccessedcourses">

    <a href="#sb-7" class="sr-only sr-only-focusable">Skip Recently accessed courses</a>



  <div class="ccnBlockContent ">
    <div id="block-recentlyaccessedcourses-674ea350210c9674ea34e362358" class="my_course_content_container block-recentlyaccessedcourses block-cards" data-region="recentlyaccessedcourses" data-userid="20678" data-displaycoursecategory="1">
  <div class="my_course_content mb30">
    <div class="my_course_content_header">
      <div class="col-xl-8">
        <div class="instructor_search_result style2">
          <h4>Recently accessed courses</h4>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="candidate_revew_select style2 text-right">
          <ul class="mb0">
              <div class="d-flex paging-bar-container" data-region="paging-bar-container">
                <div data-region="paging-control-container" class="d-flex ccn-pagination">
                
                    <nav role="navigation" id="paging-bar-674ea350210c9674ea34e362358" class="" data-region="paging-bar" data-ignore-control-while-loading="" data-hide-control-on-single-page="" data-active-page-number="1" data-items-per-page="" aria-label="Pagination navigation" data-aria-label-components-pagination-item="pagedcontentnavigationitem, core" data-aria-label-components-pagination-active-item="pagedcontentnavigationactiveitem, core" style="opacity: 1; visibility: visible;">
                
                        <ul class="pagination mb-0">
                                                <li class="page-item disabled" data-region="page-item" data-control="previous" aria-disabled="true">
                
                    <a href="#" class="page-link" data-region="page-link" aria-label="Page ">
                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                    </a>
                </li>
                                <li class="page-item" data-region="page-item" data-control="next">
                
                    <a href="#" class="page-link" data-region="page-link" aria-label="Page ">
                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                    </a>
                </li>
        </ul>
                    </nav>
                </div>
              </div>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid p-0">
      <div id="recentlyaccessedcourses-view-674ea350210c9674ea34e362358" data-region="recentlyaccessedcourses-view">
          <div data-region="loading-placeholder" class="hidden">
              <div class="card-deck dashboard-card-deck one-row overflow-hidden" style="height: 13.05rem">
                  <div class="card dashboard-card border-0">
                      <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
                      </div>
                      <div class="card-body pr-1 course-info-container">
                          <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
                      </div>
                  </div>
                  <div class="card dashboard-card border-0">
                      <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
                      </div>
                      <div class="card-body pr-1 course-info-container">
                          <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
                      </div>
                  </div>
                  <div class="card dashboard-card border-0">
                      <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
                      </div>
                      <div class="card-body pr-1 course-info-container">
                          <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
                      </div>
                  </div>
                  <div class="card dashboard-card border-0">
                      <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
                      </div>
                      <div class="card-body pr-1 course-info-container">
                          <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="" data-region="view-content">
                    
      <div class="my_course_content_list justify-content-center" data-region="card-deck" role="list"><div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="8162">
  <div class="thumb">
    <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OTUiIGhlaWdodD0iNDk1Ij48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTYyLCAxNTUsIDI1NCkiIC8+PHJlY3QgeD0iMCIgeT0iNyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTMiIG9wYWNpdHk9IjAuMDg5MzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9IjAiIHk9IjM1IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxOSIgb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSIwIiB5PSI3MSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iNSIgb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSIwIiB5PSI4OSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iOCIgb3BhY2l0eT0iMC4wNDYiIGZpbGw9IiMyMjIiIC8+PHJlY3QgeD0iMCIgeT0iMTA3IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxNiIgb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIwIiB5PSIxNDAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjExIiBvcGFjaXR5PSIwLjA3MiIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSIwIiB5PSIxNjMiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjE2IiBvcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjAiIHk9IjE5OCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTgiIG9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjciIGZpbGw9IiMyMjIiIC8+PHJlY3QgeD0iMCIgeT0iMjI3IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSI4IiBvcGFjaXR5PSIwLjA0NiIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIwIiB5PSIyNTMiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjgiIG9wYWNpdHk9IjAuMDQ2IiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjAiIHk9IjI3MyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTkiIG9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iMCIgeT0iMjk3IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIyMCIgb3BhY2l0eT0iMC4xNSIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIwIiB5PSIzMzEiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjE5IiBvcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9IjAiIHk9IjM1NSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTkiIG9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iMCIgeT0iMzg0IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxNiIgb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIwIiB5PSI0MjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjE1IiBvcGFjaXR5PSIwLjEwNjY2NjY2NjY2NjY3IiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9IjAiIHk9IjQ0MiIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTgiIG9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjciIGZpbGw9IiMyMjIiIC8+PHJlY3QgeD0iMCIgeT0iNDY2IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxNyIgb3BhY2l0eT0iMC4xMjQiIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iMCIgeT0iNDg5IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSI2IiBvcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSI3IiB5PSIwIiB3aWR0aD0iMTMiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iMzUiIHk9IjAiIHdpZHRoPSIxOSIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9IjcxIiB5PSIwIiB3aWR0aD0iNSIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9Ijg5IiB5PSIwIiB3aWR0aD0iOCIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjA0NiIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIxMDciIHk9IjAiIHdpZHRoPSIxNiIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjE0MCIgeT0iMCIgd2lkdGg9IjExIiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMDcyIiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9IjE2MyIgeT0iMCIgd2lkdGg9IjE2IiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIC8+PHJlY3QgeD0iMTk4IiB5PSIwIiB3aWR0aD0iMTgiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIyMjciIHk9IjAiIHdpZHRoPSI4IiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMDQ2IiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjI1MyIgeT0iMCIgd2lkdGg9IjgiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4wNDYiIGZpbGw9IiMyMjIiIC8+PHJlY3QgeD0iMjczIiB5PSIwIiB3aWR0aD0iMTkiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSIyOTciIHk9IjAiIHdpZHRoPSIyMCIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjE1IiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjMzMSIgeT0iMCIgd2lkdGg9IjE5IiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iMzU1IiB5PSIwIiB3aWR0aD0iMTkiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSIzODQiIHk9IjAiIHdpZHRoPSIxNiIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjQyMCIgeT0iMCIgd2lkdGg9IjE1IiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjciIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iNDQyIiB5PSIwIiB3aWR0aD0iMTgiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSI0NjYiIHk9IjAiIHdpZHRoPSIxNyIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSI0ODkiIHk9IjAiIHdpZHRoPSI2IiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiAvPjwvc3ZnPg==" alt=""><span class="sr-only">Course image</span>
    <div class="overlay">
      <ul class="mb0">
        <li class="list-inline-item">
          <a class="mcc_view" href="#">View</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="details">
    <div class="mc_content" id="course-info-container-8162-10">
      <div class="ccn_mc_content_header">
        <div class="ccn_mc_content_header_details">

            <span class="sr-only">
                Course category
            </span>
            <span class="text-truncate">S1 Sistem Informasi</span>
    
          <h5 class="title">2024 Ganjil | Etika Profesi Teknologi Informasi </h5>
          <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


          <div class="ccn_fav_icon">
            <span id="favorite-icon-8162-10" data-region="favourite-icon" data-course-id="8162">
              <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                <span class="sr-only">Course is starred</span>
              </span>
            </span>
          </div>
            <div class="ccn_mc_progress">



              <div class="progress bg-white">
                  <div class="progress-bar bar" role="progressbar" aria-valuenow="51" style="width: 51%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="small">
                  <span class="sr-only">Course progress:</span>
                  <strong>51</strong>% complete
              </div>
            </div>
          <span class="sr-only">
            Course name
          </span>
        </div>
        <div class="ccn_mc_content_header_actions">
        </div>
      </div>
      Mata Kuliah Etika Profesi Teknologi Informasi Kurikulum 512.2024
    </div>
  </div>
</div></div>
    </div>
          <div class="hidden text-xs-center text-center mt-3" data-region="empty-message">
              <img class="empty-placeholder-image-lg mt-1" src="https://leads.upnvj.ac.id/theme/image.php/edumy/block_recentlyaccessedcourses/1644289115/courses" alt="No recent courses" role="presentation">
              <p class="text-muted mt-3">No recent courses</p>
          </div>
      </div>
    </div>
  </div>
</div>
    
    
  </div>

    <span id="sb-7"></span>

</div><div id="inst318892" class="
    block_myoverview block
    
    
    " style="" role="complementary" data-block="myoverview">

    <a href="#sb-8" class="sr-only sr-only-focusable">Skip Course overview</a>



  <div class="ccnBlockContent ">
    <div id="block-myoverview-674ea35022fc5674ea34e362359" class="my_course_content_container block-myoverview block-cards" data-region="myoverview" role="navigation" data-init="true">
  <div class="my_course_content mb30">
    <div class="my_course_content_header">
      <div class="col-xl-4">
        <div class="instructor_search_result style2">
          <h4 class="mt10">Courses</h4>
        </div>
      </div>
      <div class="col-xl-8">
        <div class="candidate_revew_select style2 text-right" data-region="filter" aria-label="Course overview controls">
          <ul class="mb0">
            <li class="list-inline-item">
              <div class="dropdown bootstrap-select show-tick dropup w-auto">
                <button id="groupingdropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Grouping drop-down menu">
                  <span class="d-sm-inline-block" data-active-item-text="">
                    All (except hidden)
                    
                    
                    
                    
                    
                  </span>
                </button>
                <ul class="dropdown-menu" data-show-active-item="" data-active-item-text="" aria-labelledby="groupingdropdown">
                  <li>
                    <a class="dropdown-item active" href="#" data-filter="grouping" data-value="all" data-pref="all" aria-label="All (except hidden)" aria-controls="courses-view-674ea35022fc5674ea34e362359">
                      All (except hidden)
                    </a>
                  </li>
                  <li class="dropdown-divider" role="presentation">
                    <span class="filler">&nbsp;</span>
                  </li>
                  <li>
                    <a class="dropdown-item " href="#" data-filter="grouping" data-value="inprogress" data-pref="inprogress" aria-label="Show courses in progress" aria-controls="courses-view-674ea35022fc5674ea34e362359">
                      In progress
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="#" data-filter="grouping" data-value="future" data-pref="future" aria-label="Show future courses" aria-controls="courses-view-674ea35022fc5674ea34e362359">
                      Future
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="#" data-filter="grouping" data-value="past" data-pref="past" aria-label="Show past courses" aria-controls="courses-view-674ea35022fc5674ea34e362359">
                      Past
                    </a>
                  </li>
                  <li class="dropdown-divider" role="presentation">
                    <span class="filler">&nbsp;</span>
                  </li>
                  <li>
                    <a class="dropdown-item " href="#" data-filter="grouping" data-value="favourites" data-pref="favourites" aria-label="Show starred courses" aria-controls="courses-view-674ea35022fc5674ea34e362359">
                      Starred
                    </a>
                  </li>
                  <li class="dropdown-divider" role="presentation">
                    <span class="filler">&nbsp;</span>
                  </li>
                  <li>
                    <a class="dropdown-item " href="#" data-filter="grouping" data-value="hidden" data-pref="hidden" aria-label="Show courses removed from view" aria-controls="courses-view-674ea35022fc5674ea34e362359">
                      Removed from view
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="list-inline-item">
                <div class="dropdown bootstrap-select show-tick dropup w-auto">
                    <button id="sortingdropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Sorting drop-down menu">
                        <span class="d-sm-inline-block" data-active-item-text="">
                            Course name
                            
                        </span>
                    </button>
                    <ul class="dropdown-menu" data-show-active-item="" aria-labelledby="sortingdropdown">
                        <li>
                            <a class="dropdown-item active" href="#" data-filter="sort" data-pref="title" data-value="fullname" aria-label="Sort courses by course name" aria-controls="courses-view-674ea35022fc5674ea34e362359">
                                Course name
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#" data-filter="sort" data-pref="lastaccessed" data-value="ul.timeaccess desc" aria-label="Sort courses by last accessed date" aria-controls="courses-view-674ea35022fc5674ea34e362359">
                                Last accessed
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid p-0">
      <div id="courses-view-674ea35022fc5674ea34e362359" data-region="courses-view" data-display="card" data-grouping="all" data-sort="fullname" data-prev-display="card" data-paging="12" data-nocoursesimg="https://leads.upnvj.ac.id/theme/image.php/edumy/block_myoverview/1644289115/courses" data-displaycategories="on"><div id="paged-content-container-1" data-region="paged-content-container">


    <div id="page-container-1" data-region="page-container" class="paged-content-page-container ccn-pagination-page" aria-live="polite" style="">
    <div data-region="paged-content-page" data-page="1" class="">
        <div class="my_course_content_list" role="list">
    <div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="8157">
      <div class="thumb">
        <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5NiIgaGVpZ2h0PSIxNjgiPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InJnYigyNTMsIDIwMywgMTEwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA1NDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE2LjE2NjY2NjY2NjY2NywgMCkgcm90YXRlKDE4MCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4MC44MzMzMzMzMzMzMzMsIDApIHJvdGF0ZSgxODAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgMCkgcm90YXRlKDAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjEwNjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4xNjY2NjY2NjY2NjcsIDApIHJvdGF0ZSgxODAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAzNzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzIuMzMzMzMzMzMzMzMzLCAwKSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0OC41LCAwKSByb3RhdGUoMTgwLCAxNi4xNjY2NjY2NjY2NjcsIDE0LjAwMDc0NDAyNzg0OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTYuMTY2NjY2NjY2NjY3LCAwLCAzMi4zMzMzMzMzMzMzMzMsIDI4LjAwMTQ4ODA1NTY5NywgMCwgMjguMDAxNDg4MDU1Njk3LCAxNi4xNjY2NjY2NjY2NjcsIDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjQuNjY2NjY2NjY2NjY3LCAwKSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTYuMTY2NjY2NjY2NjY3LCAyOC4wMDE0ODgwNTU2OTcpIHJvdGF0ZSgwLCAxNi4xNjY2NjY2NjY2NjcsIDE0LjAwMDc0NDAyNzg0OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTYuMTY2NjY2NjY2NjY3LCAwLCAzMi4zMzMzMzMzMzMzMzMsIDI4LjAwMTQ4ODA1NTY5NywgMCwgMjguMDAxNDg4MDU1Njk3LCAxNi4xNjY2NjY2NjY2NjcsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDgwLjgzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3KSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDI4LjAwMTQ4ODA1NTY5Nykgcm90YXRlKDE4MCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4xNjY2NjY2NjY2NjcsIDI4LjAwMTQ4ODA1NTY5Nykgcm90YXRlKDAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcpIHJvdGF0ZSgxODAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA4MDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDguNSwgMjguMDAxNDg4MDU1Njk3KSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY0LjY2NjY2NjY2NjY2NywgMjguMDAxNDg4MDU1Njk3KSByb3RhdGUoMTgwLCAxNi4xNjY2NjY2NjY2NjcsIDE0LjAwMDc0NDAyNzg0OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTYuMTY2NjY2NjY2NjY3LCAwLCAzMi4zMzMzMzMzMzMzMzMsIDI4LjAwMTQ4ODA1NTY5NywgMCwgMjguMDAxNDg4MDU1Njk3LCAxNi4xNjY2NjY2NjY2NjcsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE2LjE2NjY2NjY2NjY2NywgNTYuMDAyOTc2MTExMzk0KSByb3RhdGUoMTgwLCAxNi4xNjY2NjY2NjY2NjcsIDE0LjAwMDc0NDAyNzg0OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTYuMTY2NjY2NjY2NjY3LCAwLCAzMi4zMzMzMzMzMzMzMzMsIDI4LjAwMTQ4ODA1NTY5NywgMCwgMjguMDAxNDg4MDU1Njk3LCAxNi4xNjY2NjY2NjY2NjcsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODAuODMzMzMzMzMzMzMzLCA1Ni4wMDI5NzYxMTEzOTQpIHJvdGF0ZSgxODAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA0NiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgNTYuMDAyOTc2MTExMzk0KSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4xNjY2NjY2NjY2NjcsIDU2LjAwMjk3NjExMTM5NCkgcm90YXRlKDE4MCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMyLjMzMzMzMzMzMzMzMywgNTYuMDAyOTc2MTExMzk0KSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ4LjUsIDU2LjAwMjk3NjExMTM5NCkgcm90YXRlKDE4MCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2NC42NjY2NjY2NjY2NjcsIDU2LjAwMjk3NjExMTM5NCkgcm90YXRlKDAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA1NDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE2LjE2NjY2NjY2NjY2NywgODQuMDA0NDY0MTY3MDkxKSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4MC44MzMzMzMzMzMzMzMsIDg0LjAwNDQ2NDE2NzA5MSkgcm90YXRlKDAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjEzMjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLCA4NC4wMDQ0NjQxNjcwOTEpIHJvdGF0ZSgxODAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA4OTMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYuMTY2NjY2NjY2NjY3LCA4NC4wMDQ0NjQxNjcwOTEpIHJvdGF0ZSgwLCAxNi4xNjY2NjY2NjY2NjcsIDE0LjAwMDc0NDAyNzg0OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTYuMTY2NjY2NjY2NjY3LCAwLCAzMi4zMzMzMzMzMzMzMzMsIDI4LjAwMTQ4ODA1NTY5NywgMCwgMjguMDAxNDg4MDU1Njk3LCAxNi4xNjY2NjY2NjY2NjcsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzIuMzMzMzMzMzMzMzMzLCA4NC4wMDQ0NjQxNjcwOTEpIHJvdGF0ZSgxODAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA1NDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDguNSwgODQuMDA0NDY0MTY3MDkxKSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2NC42NjY2NjY2NjY2NjcsIDg0LjAwNDQ2NDE2NzA5MSkgcm90YXRlKDE4MCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDg5MzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTYuMTY2NjY2NjY2NjY3LCAxMTIuMDA1OTUyMjIyNzkpIHJvdGF0ZSgxODAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA4OTMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODAuODMzMzMzMzMzMzMzLCAxMTIuMDA1OTUyMjIyNzkpIHJvdGF0ZSgxODAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAzNzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgMTEyLjAwNTk1MjIyMjc5KSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4xNjY2NjY2NjY2NjcsIDExMi4wMDU5NTIyMjI3OSkgcm90YXRlKDE4MCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMi4zMzMzMzMzMzMzMzMsIDExMi4wMDU5NTIyMjI3OSkgcm90YXRlKDAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDguNSwgMTEyLjAwNTk1MjIyMjc5KSByb3RhdGUoMTgwLCAxNi4xNjY2NjY2NjY2NjcsIDE0LjAwMDc0NDAyNzg0OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTYuMTY2NjY2NjY2NjY3LCAwLCAzMi4zMzMzMzMzMzMzMzMsIDI4LjAwMTQ4ODA1NTY5NywgMCwgMjguMDAxNDg4MDU1Njk3LCAxNi4xNjY2NjY2NjY2NjcsIDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY0LjY2NjY2NjY2NjY2NywgMTEyLjAwNTk1MjIyMjc5KSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDcyIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTYuMTY2NjY2NjY2NjY3LCAxNDAuMDA3NDQwMjc4NDgpIHJvdGF0ZSgwLCAxNi4xNjY2NjY2NjY2NjcsIDE0LjAwMDc0NDAyNzg0OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTYuMTY2NjY2NjY2NjY3LCAwLCAzMi4zMzMzMzMzMzMzMzMsIDI4LjAwMTQ4ODA1NTY5NywgMCwgMjguMDAxNDg4MDU1Njk3LCAxNi4xNjY2NjY2NjY2NjcsIDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDgwLjgzMzMzMzMzMzMzMywgMTQwLjAwNzQ0MDI3ODQ4KSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDE0MC4wMDc0NDAyNzg0OCkgcm90YXRlKDE4MCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2LjE2NjY2NjY2NjY2NywgMTQwLjAwNzQ0MDI3ODQ4KSByb3RhdGUoMCwgMTYuMTY2NjY2NjY2NjY3LCAxNC4wMDA3NDQwMjc4NDgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE2LjE2NjY2NjY2NjY2NywgMCwgMzIuMzMzMzMzMzMzMzMzLCAyOC4wMDE0ODgwNTU2OTcsIDAsIDI4LjAwMTQ4ODA1NTY5NywgMTYuMTY2NjY2NjY2NjY3LCAwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMyLjMzMzMzMzMzMzMzMywgMTQwLjAwNzQ0MDI3ODQ4KSByb3RhdGUoMTgwLCAxNi4xNjY2NjY2NjY2NjcsIDE0LjAwMDc0NDAyNzg0OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTYuMTY2NjY2NjY2NjY3LCAwLCAzMi4zMzMzMzMzMzMzMzMsIDI4LjAwMTQ4ODA1NTY5NywgMCwgMjguMDAxNDg4MDU1Njk3LCAxNi4xNjY2NjY2NjY2NjcsIDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ4LjUsIDE0MC4wMDc0NDAyNzg0OCkgcm90YXRlKDAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNi4xNjY2NjY2NjY2NjcsIDAsIDMyLjMzMzMzMzMzMzMzMywgMjguMDAxNDg4MDU1Njk3LCAwLCAyOC4wMDE0ODgwNTU2OTcsIDE2LjE2NjY2NjY2NjY2NywgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA0NiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjQuNjY2NjY2NjY2NjY3LCAxNDAuMDA3NDQwMjc4NDgpIHJvdGF0ZSgxODAsIDE2LjE2NjY2NjY2NjY2NywgMTQuMDAwNzQ0MDI3ODQ4KSIgLz48L3N2Zz4=" alt=""><span class="sr-only">Course image</span>
        <div class="overlay">
          <ul class="mb0">
            <li class="list-inline-item">
              <a class="mcc_view" href="#">View</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="details">
        <div class="mc_content">
          <div class="ccn_mc_content_header">
            <div class="ccn_mc_content_header_details">
              <p class="subtitle">S1 Sistem Informasi</p><span class="sr-only">Course image</span>
              <h5 class="title">2024 Ganjil | Audit Sistem Informasi </h5>
              <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


              <div class="ccn_fav_icon">
                <span id="favorite-icon-8157-7" data-region="favourite-icon" data-course-id="8157">
                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                    <span class="sr-only">Course is starred</span>
                  </span>
                </span>
              </div>
                <div class="ccn_mc_progress">



                  <div class="progress bg-white">
                      <div class="progress-bar bar" role="progressbar" aria-valuenow="38" style="width: 38%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="small">
                      <span class="sr-only">Course progress:</span>
                      <strong>38</strong>% complete
                  </div>
                </div>
              <span class="sr-only">
                Course name
              </span>
            </div>
            <div class="ccn_mc_content_header_actions">


              <div class="ml-auto dropdown">
                  <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                          <span class="sr-only">
                              Actions for current course 2024 Ganjil | Audit Sistem Informasi
                          </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="8157" aria-controls="favorite-icon-8157-7">
                          <span class="text-primary"><i class="icon fa fa-star fa-fw " title="Starred" aria-label="Starred"></i></span>
                          Star this course
                          <div class="sr-only">
                              Star for 2024 Ganjil | Audit Sistem Informasi
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="8157" aria-controls="favorite-icon-8157-7">
                          Unstar this course
                          <div class="sr-only">
                              Remove star for 2024 Ganjil | Audit Sistem Informasi
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="8157" aria-controls="favorite-icon-8157-7">
                          <i class="icon fa fa-eye-slash fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Restore to view
                          <div class="sr-only">
                              Restore 2024 Ganjil | Audit Sistem Informasi to view
                          </div>
                      </a>
                      <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="8157" aria-controls="favorite-icon-8157-7">
                          <i class="icon fa fa-eye fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Remove from view
                          <div class="sr-only">
                              Remove 2024 Ganjil | Audit Sistem Informasi from view
                          </div>
                      </a>
                  </div>
              </div>            </div>
          </div>
          <span class="sr-only">Course summary text:</span>Mata Kuliah Audit Sistem Informasi Kurikulum 512.2024
        </div>
      </div>
    </div>
    <div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="7850">
      <div class="thumb">
        <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4NCIgaGVpZ2h0PSI4NCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0icmdiKDEyOSwgMjM2LCAyMzYpIiAvPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDI7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTQuMTQ1LCAtMTQuMTQ1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDcwLjcyNSwgLTE0LjE0NSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDI7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTQuMTQ1LCA3MC43MjUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNzAuNzI1LCA3MC43MjUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDk4OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgLTcuMDcyNSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDk4OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgNzcuNzk3NSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDYzMzMzMzMzMzMzMzMzOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTQuMTQ1LCAtMTQuMTQ1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNjMzMzMzMzMzMzMzMzM7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNC4xNDUsIDcwLjcyNSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyOC4yOSwgLTcuMDcyNSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyOC4yOSwgNzcuNzk3NSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTQxMzMzMzMzMzMzMzM7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0Mi40MzUsIC0xNC4xNDUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjE0MTMzMzMzMzMzMzMzOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDIuNDM1LCA3MC43MjUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEyNDsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDU2LjU4LCAtNy4wNzI1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMjQ7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1Ni41OCwgNzcuNzk3NSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY3OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE0LjE0NSwgMCkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY3OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNzAuNzI1LCAwKSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wMjg2NjY2NjY2NjY2Njc7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLCA3LjA3MjUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA3MjsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE0LjE0NSwgMCkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDQ2OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjguMjksIDcuMDcyNSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDIuNDM1LCAwKSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1Ni41OCwgNy4wNzI1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wODA2NjY2NjY2NjY2Njc7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTQuMTQ1LCAxNC4xNDUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA4MDY2NjY2NjY2NjY2NzsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDcwLjcyNSwgMTQuMTQ1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMDY2NjY2NjY2NjY2NzsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDIxLjIxNzUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEyNDsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE0LjE0NSwgMTQuMTQ1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wODkzMzMzMzMzMzMzMzM7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyOC4yOSwgMjEuMjE3NSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDcyOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDIuNDM1LCAxNC4xNDUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjE0MTMzMzMzMzMzMzMzOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTYuNTgsIDIxLjIxNzUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA0NjsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xNC4xNDUsIDI4LjI5KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNDY7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg3MC43MjUsIDI4LjI5KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLCAzNS4zNjI1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNDY7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNC4xNDUsIDI4LjI5KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xNTsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI4LjI5LCAzNS4zNjI1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMDY2NjY2NjY2NjY2NzsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQyLjQzNSwgMjguMjkpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjAyODY2NjY2NjY2NjY2NzsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDU2LjU4LCAzNS4zNjI1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTQuMTQ1LCA0Mi40MzUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA3MjsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDcwLjcyNSwgNDIuNDM1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMzI2NjY2NjY2NjY2NzsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDQ5LjUwNzUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA3MjsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE0LjE0NSwgNDIuNDM1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMDY2NjY2NjY2NjY2NzsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI4LjI5LCA0OS41MDc1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xNDEzMzMzMzMzMzMzMzsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQyLjQzNSwgNDIuNDM1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMzczMzMzMzMzMzMzMzM7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1Ni41OCwgNDkuNTA3NSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTI0OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE0LjE0NSwgNTYuNTgpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEyNDsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDcwLjcyNSwgNTYuNTgpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEyNDsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xNC4xNDUsIC0yOC4yOSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDM3MzMzMzMzMzMzMzMzOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgNjMuNjUyNSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDM3MzMzMzMzMzMzMzMzOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgLTIxLjIxNzUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTQuMTQ1LCA1Ni41OCkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTU7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNC4xNDUsIC0yOC4yOSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTI0OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjguMjksIDYzLjY1MjUpIHJvdGF0ZSg0NSwgMTQuMTQ1LCAxNC4xNDUpIiA+PHJlY3QgeD0iMTAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIzMCIgLz48cmVjdCB4PSIwIiB5PSIxMCIgd2lkdGg9IjMwIiBoZWlnaHQ9IjEwIiAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEyNDsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI4LjI5LCAtMjEuMjE3NSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTQxMzMzMzMzMzMzMzM7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0Mi40MzUsIDU2LjU4KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xNDEzMzMzMzMzMzMzMzsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQyLjQzNSwgLTI4LjI5KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMzczMzMzMzMzMzMzMzM7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1Ni41OCwgNjMuNjUyNSkgcm90YXRlKDQ1LCAxNC4xNDUsIDE0LjE0NSkiID48cmVjdCB4PSIxMCIgeT0iMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjMwIiAvPjxyZWN0IHg9IjAiIHk9IjEwIiB3aWR0aD0iMzAiIGhlaWdodD0iMTAiIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDM3MzMzMzMzMzMzMzMzOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTYuNTgsIC0yMS4yMTc1KSByb3RhdGUoNDUsIDE0LjE0NSwgMTQuMTQ1KSIgPjxyZWN0IHg9IjEwIiB5PSIwIiB3aWR0aD0iMTAiIGhlaWdodD0iMzAiIC8+PHJlY3QgeD0iMCIgeT0iMTAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIxMCIgLz48L2c+PC9zdmc+" alt=""><span class="sr-only">Course image</span>
        <div class="overlay">
          <ul class="mb0">
            <li class="list-inline-item">
              <a class="mcc_view" href="#">View</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="details">
        <div class="mc_content">
          <div class="ccn_mc_content_header">
            <div class="ccn_mc_content_header_details">
              <p class="subtitle">S1 Sistem Informasi</p><span class="sr-only">Course image</span>
              <h5 class="title">2024 Ganjil | Computational Thinking </h5>
              <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


              <div class="ccn_fav_icon">
                <span id="favorite-icon-7850-7" data-region="favourite-icon" data-course-id="7850">
                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                    <span class="sr-only">Course is starred</span>
                  </span>
                </span>
              </div>
                <div class="ccn_mc_progress">



                  <div class="progress bg-white">
                      <div class="progress-bar bar" role="progressbar" aria-valuenow="5" style="width: 5%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="small">
                      <span class="sr-only">Course progress:</span>
                      <strong>5</strong>% complete
                  </div>
                </div>
              <span class="sr-only">
                Course name
              </span>
            </div>
            <div class="ccn_mc_content_header_actions">


              <div class="ml-auto dropdown">
                  <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                          <span class="sr-only">
                              Actions for current course 2024 Ganjil | Computational Thinking
                          </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="7850" aria-controls="favorite-icon-7850-7">
                          <span class="text-primary"><i class="icon fa fa-star fa-fw " title="Starred" aria-label="Starred"></i></span>
                          Star this course
                          <div class="sr-only">
                              Star for 2024 Ganjil | Computational Thinking
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="7850" aria-controls="favorite-icon-7850-7">
                          Unstar this course
                          <div class="sr-only">
                              Remove star for 2024 Ganjil | Computational Thinking
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="7850" aria-controls="favorite-icon-7850-7">
                          <i class="icon fa fa-eye-slash fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Restore to view
                          <div class="sr-only">
                              Restore 2024 Ganjil | Computational Thinking to view
                          </div>
                      </a>
                      <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="7850" aria-controls="favorite-icon-7850-7">
                          <i class="icon fa fa-eye fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Remove from view
                          <div class="sr-only">
                              Remove 2024 Ganjil | Computational Thinking from view
                          </div>
                      </a>
                  </div>
              </div>            </div>
          </div>
          <span class="sr-only">Course summary text:</span>Mata Kuliah Computational Thinking Kurikulum 512.2024
        </div>
      </div>
    </div>
    <div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="8162">
      <div class="thumb">
        <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OTUiIGhlaWdodD0iNDk1Ij48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTYyLCAxNTUsIDI1NCkiIC8+PHJlY3QgeD0iMCIgeT0iNyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTMiIG9wYWNpdHk9IjAuMDg5MzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9IjAiIHk9IjM1IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxOSIgb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSIwIiB5PSI3MSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iNSIgb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSIwIiB5PSI4OSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iOCIgb3BhY2l0eT0iMC4wNDYiIGZpbGw9IiMyMjIiIC8+PHJlY3QgeD0iMCIgeT0iMTA3IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxNiIgb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIwIiB5PSIxNDAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjExIiBvcGFjaXR5PSIwLjA3MiIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSIwIiB5PSIxNjMiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjE2IiBvcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjAiIHk9IjE5OCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTgiIG9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjciIGZpbGw9IiMyMjIiIC8+PHJlY3QgeD0iMCIgeT0iMjI3IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSI4IiBvcGFjaXR5PSIwLjA0NiIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIwIiB5PSIyNTMiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjgiIG9wYWNpdHk9IjAuMDQ2IiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjAiIHk9IjI3MyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTkiIG9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iMCIgeT0iMjk3IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIyMCIgb3BhY2l0eT0iMC4xNSIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIwIiB5PSIzMzEiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjE5IiBvcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9IjAiIHk9IjM1NSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTkiIG9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iMCIgeT0iMzg0IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxNiIgb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIwIiB5PSI0MjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjE1IiBvcGFjaXR5PSIwLjEwNjY2NjY2NjY2NjY3IiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9IjAiIHk9IjQ0MiIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTgiIG9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjciIGZpbGw9IiMyMjIiIC8+PHJlY3QgeD0iMCIgeT0iNDY2IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxNyIgb3BhY2l0eT0iMC4xMjQiIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iMCIgeT0iNDg5IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSI2IiBvcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSI3IiB5PSIwIiB3aWR0aD0iMTMiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iMzUiIHk9IjAiIHdpZHRoPSIxOSIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9IjcxIiB5PSIwIiB3aWR0aD0iNSIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9Ijg5IiB5PSIwIiB3aWR0aD0iOCIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjA0NiIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIxMDciIHk9IjAiIHdpZHRoPSIxNiIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjE0MCIgeT0iMCIgd2lkdGg9IjExIiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMDcyIiBmaWxsPSIjZGRkIiAvPjxyZWN0IHg9IjE2MyIgeT0iMCIgd2lkdGg9IjE2IiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIC8+PHJlY3QgeD0iMTk4IiB5PSIwIiB3aWR0aD0iMTgiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSIyMjciIHk9IjAiIHdpZHRoPSI4IiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMDQ2IiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjI1MyIgeT0iMCIgd2lkdGg9IjgiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4wNDYiIGZpbGw9IiMyMjIiIC8+PHJlY3QgeD0iMjczIiB5PSIwIiB3aWR0aD0iMTkiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSIyOTciIHk9IjAiIHdpZHRoPSIyMCIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjE1IiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjMzMSIgeT0iMCIgd2lkdGg9IjE5IiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iMzU1IiB5PSIwIiB3aWR0aD0iMTkiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSIzODQiIHk9IjAiIHdpZHRoPSIxNiIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiAvPjxyZWN0IHg9IjQyMCIgeT0iMCIgd2lkdGg9IjE1IiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjciIGZpbGw9IiNkZGQiIC8+PHJlY3QgeD0iNDQyIiB5PSIwIiB3aWR0aD0iMTgiIGhlaWdodD0iMTAwJSIgb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgLz48cmVjdCB4PSI0NjYiIHk9IjAiIHdpZHRoPSIxNyIgaGVpZ2h0PSIxMDAlIiBvcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgLz48cmVjdCB4PSI0ODkiIHk9IjAiIHdpZHRoPSI2IiBoZWlnaHQ9IjEwMCUiIG9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiAvPjwvc3ZnPg==" alt=""><span class="sr-only">Course image</span>
        <div class="overlay">
          <ul class="mb0">
            <li class="list-inline-item">
              <a class="mcc_view" href="#">View</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="details">
        <div class="mc_content">
          <div class="ccn_mc_content_header">
            <div class="ccn_mc_content_header_details">
              <p class="subtitle">S1 Sistem Informasi</p><span class="sr-only">Course image</span>
              <h5 class="title">2024 Ganjil | Etika Profesi Teknologi Informasi </h5>
              <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


              <div class="ccn_fav_icon">
                <span id="favorite-icon-8162-7" data-region="favourite-icon" data-course-id="8162">
                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                    <span class="sr-only">Course is starred</span>
                  </span>
                </span>
              </div>
                <div class="ccn_mc_progress">



                  <div class="progress bg-white">
                      <div class="progress-bar bar" role="progressbar" aria-valuenow="51" style="width: 51%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="small">
                      <span class="sr-only">Course progress:</span>
                      <strong>51</strong>% complete
                  </div>
                </div>
              <span class="sr-only">
                Course name
              </span>
            </div>
            <div class="ccn_mc_content_header_actions">


              <div class="ml-auto dropdown">
                  <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                          <span class="sr-only">
                              Actions for current course 2024 Ganjil | Etika Profesi Teknologi Informasi
                          </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="8162" aria-controls="favorite-icon-8162-7">
                          <span class="text-primary"><i class="icon fa fa-star fa-fw " title="Starred" aria-label="Starred"></i></span>
                          Star this course
                          <div class="sr-only">
                              Star for 2024 Ganjil | Etika Profesi Teknologi Informasi
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="8162" aria-controls="favorite-icon-8162-7">
                          Unstar this course
                          <div class="sr-only">
                              Remove star for 2024 Ganjil | Etika Profesi Teknologi Informasi
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="8162" aria-controls="favorite-icon-8162-7">
                          <i class="icon fa fa-eye-slash fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Restore to view
                          <div class="sr-only">
                              Restore 2024 Ganjil | Etika Profesi Teknologi Informasi to view
                          </div>
                      </a>
                      <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="8162" aria-controls="favorite-icon-8162-7">
                          <i class="icon fa fa-eye fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Remove from view
                          <div class="sr-only">
                              Remove 2024 Ganjil | Etika Profesi Teknologi Informasi from view
                          </div>
                      </a>
                  </div>
              </div>            </div>
          </div>
          <span class="sr-only">Course summary text:</span>Mata Kuliah Etika Profesi Teknologi Informasi Kurikulum 512.2024
        </div>
      </div>
    </div>
    <div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="8185">
      <div class="thumb">
        <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMjAiIGhlaWdodD0iMzIwIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoOSwgMTMyLCAyMjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjEzMjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLCAwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNy42LDAsMzUuNzMzMzMzMzMzMzMzLDAsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDAsMzUuNzMzMzMzMzMzMzMzLDAsMTcuNiwxNy42LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMzczMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUzLjMzMzMzMzMzMzMzMywgMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTcuNiwwLDM1LjczMzMzMzMzMzMzMywwLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywwLDM1LjczMzMzMzMzMzMzMywwLDE3LjYsMTcuNiwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMDYuNjY2NjY2NjY2NjcsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjAsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjEzMjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMTMuMzMzMzMzMzMzMzMsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAyIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNjYuNjY2NjY2NjY2NjcsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLCA1My4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjE1IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1My4zMzMzMzMzMzMzMzMsIDUzLjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTcuNiwwLDM1LjczMzMzMzMzMzMzMywwLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywwLDM1LjczMzMzMzMzMzMzMywwLDE3LjYsMTcuNiwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMDYuNjY2NjY2NjY2NjcsIDUzLjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTcuNiwwLDM1LjczMzMzMzMzMzMzMywwLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywwLDM1LjczMzMzMzMzMzMzMywwLDE3LjYsMTcuNiwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MCwgNTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNy42LDAsMzUuNzMzMzMzMzMzMzMzLDAsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDAsMzUuNzMzMzMzMzMzMzMzLDAsMTcuNiwxNy42LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIxMy4zMzMzMzMzMzMzMywgNTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNy42LDAsMzUuNzMzMzMzMzMzMzMzLDAsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDAsMzUuNzMzMzMzMzMzMzMzLDAsMTcuNiwxNy42LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMzczMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2Ni42NjY2NjY2NjY2NywgNTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNy42LDAsMzUuNzMzMzMzMzMzMzMzLDAsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDAsMzUuNzMzMzMzMzMzMzMzLDAsMTcuNiwxNy42LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDEwNi42NjY2NjY2NjY2NykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTcuNiwwLDM1LjczMzMzMzMzMzMzMywwLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywwLDM1LjczMzMzMzMzMzMzMywwLDE3LjYsMTcuNiwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDM3MzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1My4zMzMzMzMzMzMzMzMsIDEwNi42NjY2NjY2NjY2NykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTcuNiwwLDM1LjczMzMzMzMzMzMzMywwLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywwLDM1LjczMzMzMzMzMzMzMywwLDE3LjYsMTcuNiwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEwNi42NjY2NjY2NjY2NywgMTA2LjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNy42LDAsMzUuNzMzMzMzMzMzMzMzLDAsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDAsMzUuNzMzMzMzMzMzMzMzLDAsMTcuNiwxNy42LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYwLCAxMDYuNjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA2MzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjEzLjMzMzMzMzMzMzMzLCAxMDYuNjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjY2LjY2NjY2NjY2NjY3LCAxMDYuNjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgMTYwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNy42LDAsMzUuNzMzMzMzMzMzMzMzLDAsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDAsMzUuNzMzMzMzMzMzMzMzLDAsMTcuNiwxNy42LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNDYiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUzLjMzMzMzMzMzMzMzMywgMTYwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNy42LDAsMzUuNzMzMzMzMzMzMzMzLDAsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDAsMzUuNzMzMzMzMzMzMzMzLDAsMTcuNiwxNy42LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTA2LjY2NjY2NjY2NjY3LCAxNjApIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjEzMjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjAsIDE2MCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTcuNiwwLDM1LjczMzMzMzMzMzMzMywwLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywwLDM1LjczMzMzMzMzMzMzMywwLDE3LjYsMTcuNiwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMTMuMzMzMzMzMzMzMzMsIDE2MCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTcuNiwwLDM1LjczMzMzMzMzMzMzMywwLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywwLDM1LjczMzMzMzMzMzMzMywwLDE3LjYsMTcuNiwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2Ni42NjY2NjY2NjY2NywgMTYwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNy42LDAsMzUuNzMzMzMzMzMzMzMzLDAsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDAsMzUuNzMzMzMzMzMzMzMzLDAsMTcuNiwxNy42LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMzczMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDIxMy4zMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMTcuNiwwLDM1LjczMzMzMzMzMzMzMywwLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDUzLjMzMzMzMzMzMzMzMywxNy42LDUzLjMzMzMzMzMzMzMzMywwLDM1LjczMzMzMzMzMzMzMywwLDE3LjYsMTcuNiwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUzLjMzMzMzMzMzMzMzMywgMjEzLjMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNy42LDAsMzUuNzMzMzMzMzMzMzMzLDAsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDAsMzUuNzMzMzMzMzMzMzMzLDAsMTcuNiwxNy42LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wOTgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEwNi42NjY2NjY2NjY2NywgMjEzLjMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNy42LDAsMzUuNzMzMzMzMzMzMzMzLDAsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDAsMzUuNzMzMzMzMzMzMzMzLDAsMTcuNiwxNy42LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYwLCAyMTMuMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA1NDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjEzLjMzMzMzMzMzMzMzLCAyMTMuMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA4MDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjY2LjY2NjY2NjY2NjY3LCAyMTMuMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgMjY2LjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSIxNy42LDAsMzUuNzMzMzMzMzMzMzMzLDAsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMywzNS43MzMzMzMzMzMzMzMsNTMuMzMzMzMzMzMzMzMzLDE3LjYsNTMuMzMzMzMzMzMzMzMzLDAsMzUuNzMzMzMzMzMzMzMzLDAsMTcuNiwxNy42LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTMuMzMzMzMzMzMzMzMzLCAyNjYuNjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTA2LjY2NjY2NjY2NjY3LCAyNjYuNjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA4MDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYwLCAyNjYuNjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjEzLjMzMzMzMzMzMzMzLCAyNjYuNjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjE3LjYsMCwzNS43MzMzMzMzMzMzMzMsMCw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMzUuNzMzMzMzMzMzMzMzLDM1LjczMzMzMzMzMzMzMyw1My4zMzMzMzMzMzMzMzMsMTcuNiw1My4zMzMzMzMzMzMzMzMsMCwzNS43MzMzMzMzMzMzMzMsMCwxNy42LDE3LjYsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNjYuNjY2NjY2NjY2NjcsIDI2Ni42NjY2NjY2NjY2NykiIC8+PC9zdmc+" alt=""><span class="sr-only">Course image</span>
        <div class="overlay">
          <ul class="mb0">
            <li class="list-inline-item">
              <a class="mcc_view" href="#">View</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="details">
        <div class="mc_content">
          <div class="ccn_mc_content_header">
            <div class="ccn_mc_content_header_details">
              <p class="subtitle">S1 Sistem Informasi</p><span class="sr-only">Course image</span>
              <h5 class="title">2024 Ganjil | Pemrograman Web </h5>
              <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


              <div class="ccn_fav_icon">
                <span id="favorite-icon-8185-7" data-region="favourite-icon" data-course-id="8185">
                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                    <span class="sr-only">Course is starred</span>
                  </span>
                </span>
              </div>
                <div class="ccn_mc_progress">



                  <div class="progress bg-white">
                      <div class="progress-bar bar" role="progressbar" aria-valuenow="9" style="width: 9%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="small">
                      <span class="sr-only">Course progress:</span>
                      <strong>9</strong>% complete
                  </div>
                </div>
              <span class="sr-only">
                Course name
              </span>
            </div>
            <div class="ccn_mc_content_header_actions">


              <div class="ml-auto dropdown">
                  <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                          <span class="sr-only">
                              Actions for current course 2024 Ganjil | Pemrograman Web
                          </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="8185" aria-controls="favorite-icon-8185-7">
                          <span class="text-primary"><i class="icon fa fa-star fa-fw " title="Starred" aria-label="Starred"></i></span>
                          Star this course
                          <div class="sr-only">
                              Star for 2024 Ganjil | Pemrograman Web
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="8185" aria-controls="favorite-icon-8185-7">
                          Unstar this course
                          <div class="sr-only">
                              Remove star for 2024 Ganjil | Pemrograman Web
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="8185" aria-controls="favorite-icon-8185-7">
                          <i class="icon fa fa-eye-slash fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Restore to view
                          <div class="sr-only">
                              Restore 2024 Ganjil | Pemrograman Web to view
                          </div>
                      </a>
                      <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="8185" aria-controls="favorite-icon-8185-7">
                          <i class="icon fa fa-eye fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Remove from view
                          <div class="sr-only">
                              Remove 2024 Ganjil | Pemrograman Web from view
                          </div>
                      </a>
                  </div>
              </div>            </div>
          </div>
          <span class="sr-only">Course summary text:</span>Mata Kuliah Pemrograman Web Kurikulum 512.2024
        </div>
      </div>
    </div>
    <div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="8200">
      <div class="thumb">
        <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNDQiIGhlaWdodD0iMzQ0Ij48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTI5LCAyMzYsIDIzNikiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgNDMpIHNjYWxlKDEsIC0xKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4NiwgNDMpIHNjYWxlKC0xLCAtMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgNDMpIHNjYWxlKDEsIDEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDg2LCA0Mykgc2NhbGUoLTEsIDEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyOSwgMCkgc2NhbGUoLTEsIDEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyOSwgODYpIHNjYWxlKDEsIC0xKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMjksIDg2KSBzY2FsZSgtMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wMjg2NjY2NjY2NjY2NjciIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyOSwgMCkgc2NhbGUoMSwgMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTcyLCA0Mykgc2NhbGUoMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wMjg2NjY2NjY2NjY2NjciIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI1OCwgNDMpIHNjYWxlKC0xLCAtMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTcyLCA0Mykgc2NhbGUoMSwgMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjU4LCA0Mykgc2NhbGUoLTEsIDEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMwMSwgMCkgc2NhbGUoLTEsIDEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMwMSwgODYpIHNjYWxlKDEsIC0xKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMDEsIDg2KSBzY2FsZSgtMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMwMSwgMCkgc2NhbGUoMSwgMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDMsIDg2KSBzY2FsZSgtMSwgMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDMsIDE3Mikgc2NhbGUoMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQzLCAxNzIpIHNjYWxlKC0xLCAtMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDMsIDg2KSBzY2FsZSgxLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4NiwgMTI5KSBzY2FsZSgxLCAtMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTcyLCAxMjkpIHNjYWxlKC0xLCAtMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODYsIDEyOSkgc2NhbGUoMSwgMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTcyLCAxMjkpIHNjYWxlKC0xLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIxNSwgODYpIHNjYWxlKC0xLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIxNSwgMTcyKSBzY2FsZSgxLCAtMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA2MzMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjE1LCAxNzIpIHNjYWxlKC0xLCAtMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA2MzMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjE1LCA4Nikgc2NhbGUoMSwgMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA2MzMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjU4LCAxMjkpIHNjYWxlKDEsIC0xKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzNDQsIDEyOSkgc2NhbGUoLTEsIC0xKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTgsIDEyOSkgc2NhbGUoMSwgMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA2MzMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzQ0LCAxMjkpIHNjYWxlKC0xLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDIxNSkgc2NhbGUoMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODYsIDIxNSkgc2NhbGUoLTEsIC0xKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDIxNSkgc2NhbGUoMSwgMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4NiwgMjE1KSBzY2FsZSgtMSwgMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA2MzMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI5LCAxNzIpIHNjYWxlKC0xLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMjksIDI1OCkgc2NhbGUoMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wMzczMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyOSwgMjU4KSBzY2FsZSgtMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wMzczMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyOSwgMTcyKSBzY2FsZSgxLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDM3MzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNzIsIDIxNSkgc2NhbGUoMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wMzczMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI1OCwgMjE1KSBzY2FsZSgtMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wMzczMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3MiwgMjE1KSBzY2FsZSgxLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDM3MzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTgsIDIxNSkgc2NhbGUoLTEsIDEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xNSIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzAxLCAxNzIpIHNjYWxlKC0xLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMwMSwgMjU4KSBzY2FsZSgxLCAtMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA0NiIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzAxLCAyNTgpIHNjYWxlKC0xLCAtMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA0NiIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzAxLCAxNzIpIHNjYWxlKDEsIDEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wNDYiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQzLCAyNTgpIHNjYWxlKC0xLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDQ2IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0MywgMzQ0KSBzY2FsZSgxLCAtMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0MywgMzQ0KSBzY2FsZSgtMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDMsIDI1OCkgc2NhbGUoMSwgMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4NiwgMzAxKSBzY2FsZSgxLCAtMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNzIsIDMwMSkgc2NhbGUoLTEsIC0xKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDg2LCAzMDEpIHNjYWxlKDEsIDEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTcyLCAzMDEpIHNjYWxlKC0xLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjciIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIxNSwgMjU4KSBzY2FsZSgtMSwgMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgNDMsIDQzLCAwLCA0MywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEzMjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMTUsIDM0NCkgc2NhbGUoMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIxNSwgMzQ0KSBzY2FsZSgtMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIxNSwgMjU4KSBzY2FsZSgxLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDg5MzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTgsIDMwMSkgc2NhbGUoMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDM0NCwgMzAxKSBzY2FsZSgtMSwgLTEpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDQzLCA0MywgMCwgNDMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI1OCwgMzAxKSBzY2FsZSgxLCAxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCA0MywgNDMsIDAsIDQzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDg5MzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzNDQsIDMwMSkgc2NhbGUoLTEsIDEpIiAvPjwvc3ZnPg==" alt=""><span class="sr-only">Course image</span>
        <div class="overlay">
          <ul class="mb0">
            <li class="list-inline-item">
              <a class="mcc_view" href="#">View</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="details">
        <div class="mc_content">
          <div class="ccn_mc_content_header">
            <div class="ccn_mc_content_header_details">
              <p class="subtitle">S1 Sistem Informasi</p><span class="sr-only">Course image</span>
              <h5 class="title">2024 Ganjil | Praktikum Pemrograman Web </h5>
              <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


              <div class="ccn_fav_icon">
                <span id="favorite-icon-8200-7" data-region="favourite-icon" data-course-id="8200">
                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                    <span class="sr-only">Course is starred</span>
                  </span>
                </span>
              </div>
                <div class="ccn_mc_progress">



                  <div class="progress bg-white">
                      <div class="progress-bar bar" role="progressbar" aria-valuenow="26" style="width: 26%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="small">
                      <span class="sr-only">Course progress:</span>
                      <strong>26</strong>% complete
                  </div>
                </div>
              <span class="sr-only">
                Course name
              </span>
            </div>
            <div class="ccn_mc_content_header_actions">


              <div class="ml-auto dropdown">
                  <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                          <span class="sr-only">
                              Actions for current course 2024 Ganjil | Praktikum Pemrograman Web
                          </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="8200" aria-controls="favorite-icon-8200-7">
                          <span class="text-primary"><i class="icon fa fa-star fa-fw " title="Starred" aria-label="Starred"></i></span>
                          Star this course
                          <div class="sr-only">
                              Star for 2024 Ganjil | Praktikum Pemrograman Web
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="8200" aria-controls="favorite-icon-8200-7">
                          Unstar this course
                          <div class="sr-only">
                              Remove star for 2024 Ganjil | Praktikum Pemrograman Web
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="8200" aria-controls="favorite-icon-8200-7">
                          <i class="icon fa fa-eye-slash fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Restore to view
                          <div class="sr-only">
                              Restore 2024 Ganjil | Praktikum Pemrograman Web to view
                          </div>
                      </a>
                      <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="8200" aria-controls="favorite-icon-8200-7">
                          <i class="icon fa fa-eye fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Remove from view
                          <div class="sr-only">
                              Remove 2024 Ganjil | Praktikum Pemrograman Web from view
                          </div>
                      </a>
                  </div>
              </div>            </div>
          </div>
          <span class="sr-only">Course summary text:</span>Mata Kuliah Praktikum Pemrograman Web Kurikulum 512.2024
        </div>
      </div>
    </div>
    <div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="8176">
      <div class="thumb">
        <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0icmdiKDE3OCwgMTkwLCAxOTUpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wMjg2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTMuMzMzMzMzMzMzMzMzLCAwKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNi42NjY2NjY2NjY2NjcsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQwLCAwKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUzLjMzMzMzMzMzMzMzMywgMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjE1IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Ni42NjY2NjY2NjY2NjcsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xNSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgMTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMy4zMzMzMzMzMzMzMzMsIDEzLjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA4MDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjYuNjY2NjY2NjY2NjY3LCAxMy4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wMjg2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQwLCAxMy4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUzLjMzMzMzMzMzMzMzMywgMTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDgwNjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Ni42NjY2NjY2NjY2NjcsIDEzLjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA4OTMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgMjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEzLjMzMzMzMzMzMzMzMywgMjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2LjY2NjY2NjY2NjY2NywgMjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDQ2IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0MCwgMjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1My4zMzMzMzMzMzMzMzMsIDI2LjY2NjY2NjY2NjY2NykiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAzNzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjYuNjY2NjY2NjY2NjY3LCAyNi42NjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDQwKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMy4zMzMzMzMzMzMzMzMsIDQwKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2LjY2NjY2NjY2NjY2NywgNDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDAsIDQwKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1My4zMzMzMzMzMzMzMzMsIDQwKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY2LjY2NjY2NjY2NjY2NywgNDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDUzLjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMy4zMzMzMzMzMzMzMzMsIDUzLjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA4MDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjYuNjY2NjY2NjY2NjY3LCA1My4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wODA2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQwLCA1My4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUzLjMzMzMzMzMzMzMzMywgNTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY2LjY2NjY2NjY2NjY2NywgNTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLCA2Ni42NjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEzLjMzMzMzMzMzMzMzMywgNjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2LjY2NjY2NjY2NjY2NywgNjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQwLCA2Ni42NjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTMuMzMzMzMzMzMzMzMzLCA2Ni42NjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNDYiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY2LjY2NjY2NjY2NjY2NywgNjYuNjY2NjY2NjY2NjY3KSIgLz48L3N2Zz4=" alt=""><span class="sr-only">Course image</span>
        <div class="overlay">
          <ul class="mb0">
            <li class="list-inline-item">
              <a class="mcc_view" href="#">View</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="details">
        <div class="mc_content">
          <div class="ccn_mc_content_header">
            <div class="ccn_mc_content_header_details">
              <p class="subtitle">S1 Sistem Informasi</p><span class="sr-only">Course image</span>
              <h5 class="title">2024 Ganjil | Praktikum Sistem Operasi </h5>
              <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


              <div class="ccn_fav_icon">
                <span id="favorite-icon-8176-7" data-region="favourite-icon" data-course-id="8176">
                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                    <span class="sr-only">Course is starred</span>
                  </span>
                </span>
              </div>
                <div class="ccn_mc_progress">



                  <div class="progress bg-white">
                      <div class="progress-bar bar" role="progressbar" aria-valuenow="26" style="width: 26%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="small">
                      <span class="sr-only">Course progress:</span>
                      <strong>26</strong>% complete
                  </div>
                </div>
              <span class="sr-only">
                Course name
              </span>
            </div>
            <div class="ccn_mc_content_header_actions">


              <div class="ml-auto dropdown">
                  <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                          <span class="sr-only">
                              Actions for current course 2024 Ganjil | Praktikum Sistem Operasi
                          </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="8176" aria-controls="favorite-icon-8176-7">
                          <span class="text-primary"><i class="icon fa fa-star fa-fw " title="Starred" aria-label="Starred"></i></span>
                          Star this course
                          <div class="sr-only">
                              Star for 2024 Ganjil | Praktikum Sistem Operasi
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="8176" aria-controls="favorite-icon-8176-7">
                          Unstar this course
                          <div class="sr-only">
                              Remove star for 2024 Ganjil | Praktikum Sistem Operasi
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="8176" aria-controls="favorite-icon-8176-7">
                          <i class="icon fa fa-eye-slash fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Restore to view
                          <div class="sr-only">
                              Restore 2024 Ganjil | Praktikum Sistem Operasi to view
                          </div>
                      </a>
                      <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="8176" aria-controls="favorite-icon-8176-7">
                          <i class="icon fa fa-eye fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Remove from view
                          <div class="sr-only">
                              Remove 2024 Ganjil | Praktikum Sistem Operasi from view
                          </div>
                      </a>
                  </div>
              </div>            </div>
          </div>
          <span class="sr-only">Course summary text:</span>Mata Kuliah Praktikum Sistem Operasi Kurikulum 512.2024
        </div>
      </div>
    </div>
    <div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="8172">
      <div class="thumb">
        <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0icmdiKDE2MiwgMTU1LCAyNTQpIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAyIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLCAwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIzLjMsMCw2LjcsMCwxMCwzLjMsMTAsNi43LDYuNywxMCwzLjMsMTAsMCw2LjcsMCwzLjMsMy4zLDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wMjg2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEwLCAwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIzLjMsMCw2LjcsMCwxMCwzLjMsMTAsNi43LDYuNywxMCwzLjMsMTAsMCw2LjcsMCwzLjMsMy4zLDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjAsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAzNzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzAsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAyIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0MCwgMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1MCwgMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLCAxMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDcyIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMCwgMTApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA2MzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjAsIDEwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIzLjMsMCw2LjcsMCwxMCwzLjMsMTAsNi43LDYuNywxMCwzLjMsMTAsMCw2LjcsMCwzLjMsMy4zLDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMwLCAxMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDQ2IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0MCwgMTApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTAsIDEwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIzLjMsMCw2LjcsMCwxMCwzLjMsMTAsNi43LDYuNywxMCwzLjMsMTAsMCw2LjcsMCwzLjMsMy4zLDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDIwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIzLjMsMCw2LjcsMCwxMCwzLjMsMTAsNi43LDYuNywxMCwzLjMsMTAsMCw2LjcsMCwzLjMsMy4zLDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEwLCAyMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMCwgMjApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAzNzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzAsIDIwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIzLjMsMCw2LjcsMCwxMCwzLjMsMTAsNi43LDYuNywxMCwzLjMsMTAsMCw2LjcsMCwzLjMsMy4zLDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNDYiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQwLCAyMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1MCwgMjApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgMzApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTAsIDMwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIzLjMsMCw2LjcsMCwxMCwzLjMsMTAsNi43LDYuNywxMCwzLjMsMTAsMCw2LjcsMCwzLjMsMy4zLDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjAsIDMwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIzLjMsMCw2LjcsMCwxMCwzLjMsMTAsNi43LDYuNywxMCwzLjMsMTAsMCw2LjcsMCwzLjMsMy4zLDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzAsIDMwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIzLjMsMCw2LjcsMCwxMCwzLjMsMTAsNi43LDYuNywxMCwzLjMsMTAsMCw2LjcsMCwzLjMsMy4zLDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQwLCAzMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1MCwgMzApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgNDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA3MiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTAsIDQwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIzLjMsMCw2LjcsMCwxMCwzLjMsMTAsNi43LDYuNywxMCwzLjMsMTAsMCw2LjcsMCwzLjMsMy4zLDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wODA2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIwLCA0MCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMwLCA0MCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQwLCA0MCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUwLCA0MCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDUwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIzLjMsMCw2LjcsMCwxMCwzLjMsMTAsNi43LDYuNywxMCwzLjMsMTAsMCw2LjcsMCwzLjMsMy4zLDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEwLCA1MCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMy4zLDAsNi43LDAsMTAsMy4zLDEwLDYuNyw2LjcsMTAsMy4zLDEwLDAsNi43LDAsMy4zLDMuMywwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMCwgNTApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjE1IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMCwgNTApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAyIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0MCwgNTApIiAvPjxwb2x5bGluZSBwb2ludHM9IjMuMywwLDYuNywwLDEwLDMuMywxMCw2LjcsNi43LDEwLDMuMywxMCwwLDYuNywwLDMuMywzLjMsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjE1IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1MCwgNTApIiAvPjwvc3ZnPg==" alt=""><span class="sr-only">Course image</span>
        <div class="overlay">
          <ul class="mb0">
            <li class="list-inline-item">
              <a class="mcc_view" href="#">View</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="details">
        <div class="mc_content">
          <div class="ccn_mc_content_header">
            <div class="ccn_mc_content_header_details">
              <p class="subtitle">S1 Sistem Informasi</p><span class="sr-only">Course image</span>
              <h5 class="title">2024 Ganjil | Sistem Informasi Manajemen </h5>
              <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


              <div class="ccn_fav_icon">
                <span id="favorite-icon-8172-7" data-region="favourite-icon" data-course-id="8172">
                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                    <span class="sr-only">Course is starred</span>
                  </span>
                </span>
              </div>
                <div class="ccn_mc_progress">



                  <div class="progress bg-white">
                      <div class="progress-bar bar" role="progressbar" aria-valuenow="11" style="width: 11%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="small">
                      <span class="sr-only">Course progress:</span>
                      <strong>11</strong>% complete
                  </div>
                </div>
              <span class="sr-only">
                Course name
              </span>
            </div>
            <div class="ccn_mc_content_header_actions">


              <div class="ml-auto dropdown">
                  <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                          <span class="sr-only">
                              Actions for current course 2024 Ganjil | Sistem Informasi Manajemen
                          </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="8172" aria-controls="favorite-icon-8172-7">
                          <span class="text-primary"><i class="icon fa fa-star fa-fw " title="Starred" aria-label="Starred"></i></span>
                          Star this course
                          <div class="sr-only">
                              Star for 2024 Ganjil | Sistem Informasi Manajemen
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="8172" aria-controls="favorite-icon-8172-7">
                          Unstar this course
                          <div class="sr-only">
                              Remove star for 2024 Ganjil | Sistem Informasi Manajemen
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="8172" aria-controls="favorite-icon-8172-7">
                          <i class="icon fa fa-eye-slash fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Restore to view
                          <div class="sr-only">
                              Restore 2024 Ganjil | Sistem Informasi Manajemen to view
                          </div>
                      </a>
                      <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="8172" aria-controls="favorite-icon-8172-7">
                          <i class="icon fa fa-eye fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Remove from view
                          <div class="sr-only">
                              Remove 2024 Ganjil | Sistem Informasi Manajemen from view
                          </div>
                      </a>
                  </div>
              </div>            </div>
          </div>
          <span class="sr-only">Course summary text:</span>Mata Kuliah Sistem Informasi Manajemen Kurikulum 512.2024
        </div>
      </div>
    </div>
    <div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="8171">
      <div class="thumb">
        <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0icmdiKDExNiwgMTg1LCAyNTUpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wMjg2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xMDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTMuMzMzMzMzMzMzMzMzLCAwKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNi42NjY2NjY2NjY2NjcsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQwLCAwKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1My4zMzMzMzMzMzMzMzMsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wOTgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY2LjY2NjY2NjY2NjY2NywgMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA1NDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgMTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMy4zMzMzMzMzMzMzMzMsIDEzLjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA1NDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjYuNjY2NjY2NjY2NjY3LCAxMy4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQwLCAxMy4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUzLjMzMzMzMzMzMzMzMywgMTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY2LjY2NjY2NjY2NjY2NywgMTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDI2LjY2NjY2NjY2NjY2NykiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTMuMzMzMzMzMzMzMzMzLCAyNi42NjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2LjY2NjY2NjY2NjY2NywgMjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0MCwgMjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUzLjMzMzMzMzMzMzMzMywgMjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY2LjY2NjY2NjY2NjY2NywgMjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDQwKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEzLjMzMzMzMzMzMzMzMywgNDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjYuNjY2NjY2NjY2NjY3LCA0MCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0MCwgNDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xNSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTMuMzMzMzMzMzMzMzMzLCA0MCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAyIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Ni42NjY2NjY2NjY2NjcsIDQwKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLCA1My4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTMuMzMzMzMzMzMzMzMzLCA1My4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wMjg2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2LjY2NjY2NjY2NjY2NywgNTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQwLCA1My4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUzLjMzMzMzMzMzMzMzMywgNTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY2LjY2NjY2NjY2NjY2NywgNTMuMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDY2LjY2NjY2NjY2NjY2NykiIC8+PHBvbHlsaW5lIHBvaW50cz0iNC40LDAsOC45MzMzMzMzMzMzMzMzLDAsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMywxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMywwLDguOTMzMzMzMzMzMzMzMywwLDQuNCw0LjQsMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA4OTMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTMuMzMzMzMzMzMzMzMzLCA2Ni42NjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNDYiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2LjY2NjY2NjY2NjY2NywgNjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQwLCA2Ni42NjY2NjY2NjY2NjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjQuNCwwLDguOTMzMzMzMzMzMzMzMywwLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDguOTMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsMTMuMzMzMzMzMzMzMzMzLDQuNCwxMy4zMzMzMzMzMzMzMzMsMCw4LjkzMzMzMzMzMzMzMzMsMCw0LjQsNC40LDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUzLjMzMzMzMzMzMzMzMywgNjYuNjY2NjY2NjY2NjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSI0LjQsMCw4LjkzMzMzMzMzMzMzMzMsMCwxMy4zMzMzMzMzMzMzMzMsNC40LDEzLjMzMzMzMzMzMzMzMyw4LjkzMzMzMzMzMzMzMzMsOC45MzMzMzMzMzMzMzMzLDEzLjMzMzMzMzMzMzMzMyw0LjQsMTMuMzMzMzMzMzMzMzMzLDAsOC45MzMzMzMzMzMzMzMzLDAsNC40LDQuNCwwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Ni42NjY2NjY2NjY2NjcsIDY2LjY2NjY2NjY2NjY2NykiIC8+PC9zdmc+" alt=""><span class="sr-only">Course image</span>
        <div class="overlay">
          <ul class="mb0">
            <li class="list-inline-item">
              <a class="mcc_view" href="#">View</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="details">
        <div class="mc_content">
          <div class="ccn_mc_content_header">
            <div class="ccn_mc_content_header_details">
              <p class="subtitle">S1 Sistem Informasi</p><span class="sr-only">Course image</span>
              <h5 class="title">2024 Ganjil | Sistem Operasi </h5>
              <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


              <div class="ccn_fav_icon">
                <span id="favorite-icon-8171-7" data-region="favourite-icon" data-course-id="8171">
                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                    <span class="sr-only">Course is starred</span>
                  </span>
                </span>
              </div>
                <div class="ccn_mc_progress">



                  <div class="progress bg-white">
                      <div class="progress-bar bar" role="progressbar" aria-valuenow="19" style="width: 19%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="small">
                      <span class="sr-only">Course progress:</span>
                      <strong>19</strong>% complete
                  </div>
                </div>
              <span class="sr-only">
                Course name
              </span>
            </div>
            <div class="ccn_mc_content_header_actions">


              <div class="ml-auto dropdown">
                  <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                          <span class="sr-only">
                              Actions for current course 2024 Ganjil | Sistem Operasi
                          </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="8171" aria-controls="favorite-icon-8171-7">
                          <span class="text-primary"><i class="icon fa fa-star fa-fw " title="Starred" aria-label="Starred"></i></span>
                          Star this course
                          <div class="sr-only">
                              Star for 2024 Ganjil | Sistem Operasi
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="8171" aria-controls="favorite-icon-8171-7">
                          Unstar this course
                          <div class="sr-only">
                              Remove star for 2024 Ganjil | Sistem Operasi
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="8171" aria-controls="favorite-icon-8171-7">
                          <i class="icon fa fa-eye-slash fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Restore to view
                          <div class="sr-only">
                              Restore 2024 Ganjil | Sistem Operasi to view
                          </div>
                      </a>
                      <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="8171" aria-controls="favorite-icon-8171-7">
                          <i class="icon fa fa-eye fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Remove from view
                          <div class="sr-only">
                              Remove 2024 Ganjil | Sistem Operasi from view
                          </div>
                      </a>
                  </div>
              </div>            </div>
          </div>
          <span class="sr-only">Course summary text:</span>Mata Kuliah Sistem Operasi Kurikulum 512.2024
        </div>
      </div>
    </div>
    <div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="8255">
      <div class="thumb">
        <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNDAiIGhlaWdodD0iMjQwIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoOSwgMTMyLCAyMjcpIiAvPjxjaXJjbGUgY3g9IjAiIGN5PSIwIiByPSIzNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA5ODtzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMjQwIiBjeT0iMCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSIyNDAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDk4O3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSIyNDAiIGN5PSIyNDAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDk4O3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSI0MCIgY3k9IjAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjQwIiBjeT0iMjQwIiByPSIzNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjExNTMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSI4MCIgY3k9IjAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSI4MCIgY3k9IjI0MCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wMjg2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjEyMCIgY3k9IjAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTU7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjEyMCIgY3k9IjI0MCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xNTtzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMTYwIiBjeT0iMCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMTYwIiBjeT0iMjQwIiByPSIzNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIwIiByPSIzNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1O3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIyNDAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTU7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSI0MCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMzI2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMjQwIiBjeT0iNDAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTMyNjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjQwIiBjeT0iNDAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSI4MCIgY3k9IjQwIiByPSIzNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA1NDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMTIwIiBjeT0iNDAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjE2MCIgY3k9IjQwIiByPSIzNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjAyODY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMjAwIiBjeT0iNDAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDcyO3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSIwIiBjeT0iODAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDU0NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSIyNDAiIGN5PSI4MCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNTQ2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjQwIiBjeT0iODAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDQ2O3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSI4MCIgY3k9IjgwIiByPSIzNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA0NjtzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMTIwIiBjeT0iODAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDQ2O3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSIxNjAiIGN5PSI4MCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMTUzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMjAwIiBjeT0iODAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTU7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSIxMjAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSIyNDAiIGN5PSIxMjAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSI0MCIgY3k9IjEyMCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMzI2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iODAiIGN5PSIxMjAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDcyO3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSIxMjAiIGN5PSIxMjAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDI7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjE2MCIgY3k9IjEyMCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMjAwIiBjeT0iMTIwIiByPSIzNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjAyODY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMCIgY3k9IjE2MCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMjQwIiBjeT0iMTYwIiByPSIzNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSI0MCIgY3k9IjE2MCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xNDEzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iODAiIGN5PSIxNjAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDI7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjEyMCIgY3k9IjE2MCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iMTYwIiBjeT0iMTYwIiByPSIzNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1O3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxNjAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTMyNjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSIyMDAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDYzMzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSIyNDAiIGN5PSIyMDAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDYzMzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSI0MCIgY3k9IjIwMCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMzI2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTBweDsiIC8+PGNpcmNsZSBjeD0iODAiIGN5PSIyMDAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTI0O3N0cm9rZS13aWR0aDoxMHB4OyIgLz48Y2lyY2xlIGN4PSIxMjAiIGN5PSIyMDAiIHI9IjM1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTA2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjE2MCIgY3k9IjIwMCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNDY7c3Ryb2tlLXdpZHRoOjEwcHg7IiAvPjxjaXJjbGUgY3g9IjIwMCIgY3k9IjIwMCIgcj0iMzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTBweDsiIC8+PC9zdmc+" alt=""><span class="sr-only">Course image</span>
        <div class="overlay">
          <ul class="mb0">
            <li class="list-inline-item">
              <a class="mcc_view" href="#">View</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="details">
        <div class="mc_content">
          <div class="ccn_mc_content_header">
            <div class="ccn_mc_content_header_details">
              <p class="subtitle">S1 Sistem Informasi</p><span class="sr-only">Course image</span>
              <h5 class="title">2024 Ganjil | Supply Chain Management (Es.1) </h5>
              <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


              <div class="ccn_fav_icon">
                <span id="favorite-icon-8255-7" data-region="favourite-icon" data-course-id="8255">
                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                    <span class="sr-only">Course is starred</span>
                  </span>
                </span>
              </div>
                <div class="ccn_mc_progress">



                  <div class="progress bg-white">
                      <div class="progress-bar bar" role="progressbar" aria-valuenow="9" style="width: 9%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="small">
                      <span class="sr-only">Course progress:</span>
                      <strong>9</strong>% complete
                  </div>
                </div>
              <span class="sr-only">
                Course name
              </span>
            </div>
            <div class="ccn_mc_content_header_actions">


              <div class="ml-auto dropdown">
                  <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                          <span class="sr-only">
                              Actions for current course 2024 Ganjil | Supply Chain Management (Es.1)
                          </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="8255" aria-controls="favorite-icon-8255-7">
                          <span class="text-primary"><i class="icon fa fa-star fa-fw " title="Starred" aria-label="Starred"></i></span>
                          Star this course
                          <div class="sr-only">
                              Star for 2024 Ganjil | Supply Chain Management (Es.1)
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="8255" aria-controls="favorite-icon-8255-7">
                          Unstar this course
                          <div class="sr-only">
                              Remove star for 2024 Ganjil | Supply Chain Management (Es.1)
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="8255" aria-controls="favorite-icon-8255-7">
                          <i class="icon fa fa-eye-slash fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Restore to view
                          <div class="sr-only">
                              Restore 2024 Ganjil | Supply Chain Management (Es.1) to view
                          </div>
                      </a>
                      <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="8255" aria-controls="favorite-icon-8255-7">
                          <i class="icon fa fa-eye fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Remove from view
                          <div class="sr-only">
                              Remove 2024 Ganjil | Supply Chain Management (Es.1) from view
                          </div>
                      </a>
                  </div>
              </div>            </div>
          </div>
          <span class="sr-only">Course summary text:</span>Mata Kuliah Supply Chain Management (Sa.1) Kurikulum 512.2024
        </div>
      </div>
    </div>
    <div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="8152">
      <div class="thumb">
        <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOTAiIGhlaWdodD0iMTEwIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTYyLCAxNTUsIDI1NCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA2MzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgLTE4LjMzMzMzMzMzMzMzMykgcm90YXRlKDE4MCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDkxLjY2NjY2NjY2NjY2Nykgcm90YXRlKDE4MCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMxLjc1NDI2NDgwNTQyOSwgLTE4LjMzMzMzMzMzMzMzMykgcm90YXRlKDAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMS43NTQyNjQ4MDU0MjksIDkxLjY2NjY2NjY2NjY2Nykgcm90YXRlKDAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2My41MDg1Mjk2MTA4NTksIC0xOC4zMzMzMzMzMzMzMzMpIHJvdGF0ZSgxODAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2My41MDg1Mjk2MTA4NTksIDkxLjY2NjY2NjY2NjY2Nykgcm90YXRlKDE4MCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOTUuMjYyNzk0NDE2Mjg4LCAtMTguMzMzMzMzMzMzMzMzKSByb3RhdGUoMCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOTUuMjYyNzk0NDE2Mjg4LCA5MS42NjY2NjY2NjY2NjcpIHJvdGF0ZSgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA0NiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI3LjAxNzA1OTIyMTcyLCAtMTguMzMzMzMzMzMzMzMzKSByb3RhdGUoMTgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA0NiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI3LjAxNzA1OTIyMTcyLCA5MS42NjY2NjY2NjY2NjcpIHJvdGF0ZSgxODAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDg5MzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNTguNzcxMzI0MDI3MTUsIC0xOC4zMzMzMzMzMzMzMzMpIHJvdGF0ZSgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA4OTMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTU4Ljc3MTMyNDAyNzE1LCA5MS42NjY2NjY2NjY2NjcpIHJvdGF0ZSgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjE1IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLCAwKSByb3RhdGUoMCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xNSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzEuNzU0MjY0ODA1NDI5LCAwKSByb3RhdGUoMTgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA1NDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjMuNTA4NTI5NjEwODU5LCAwKSByb3RhdGUoMCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xNSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOTUuMjYyNzk0NDE2Mjg4LCAwKSByb3RhdGUoMTgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI3LjAxNzA1OTIyMTcyLCAwKSByb3RhdGUoMCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTU4Ljc3MTMyNDAyNzE1LCAwKSByb3RhdGUoMTgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgMTguMzMzMzMzMzMzMzMzKSByb3RhdGUoMTgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMpIHJvdGF0ZSgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjMuNTA4NTI5NjEwODU5LCAxOC4zMzMzMzMzMzMzMzMpIHJvdGF0ZSgxODAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDcyIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg5NS4yNjI3OTQ0MTYyODgsIDE4LjMzMzMzMzMzMzMzMykgcm90YXRlKDAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyNy4wMTcwNTkyMjE3MiwgMTguMzMzMzMzMzMzMzMzKSByb3RhdGUoMTgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA1NDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTU4Ljc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIHJvdGF0ZSgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA1NDY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCwgMzYuNjY2NjY2NjY2NjY3KSByb3RhdGUoMCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wOTgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMxLjc1NDI2NDgwNTQyOSwgMzYuNjY2NjY2NjY2NjY3KSByb3RhdGUoMTgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjE1IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2My41MDg1Mjk2MTA4NTksIDM2LjY2NjY2NjY2NjY2Nykgcm90YXRlKDAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDcyIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg5NS4yNjI3OTQ0MTYyODgsIDM2LjY2NjY2NjY2NjY2Nykgcm90YXRlKDE4MCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyNy4wMTcwNTkyMjE3MiwgMzYuNjY2NjY2NjY2NjY3KSByb3RhdGUoMCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTU4Ljc3MTMyNDAyNzE1LCAzNi42NjY2NjY2NjY2NjcpIHJvdGF0ZSgxODAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsIDU1KSByb3RhdGUoMTgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjEwNjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMS43NTQyNjQ4MDU0MjksIDU1KSByb3RhdGUoMCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMzczMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDYzLjUwODUyOTYxMDg1OSwgNTUpIHJvdGF0ZSgxODAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg5NS4yNjI3OTQ0MTYyODgsIDU1KSByb3RhdGUoMCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyNy4wMTcwNTkyMjE3MiwgNTUpIHJvdGF0ZSgxODAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE1OC43NzEzMjQwMjcxNSwgNTUpIHJvdGF0ZSgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjEzMjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLCA3My4zMzMzMzMzMzMzMzMpIHJvdGF0ZSgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzEuNzU0MjY0ODA1NDI5LCAxOC4zMzMzMzMzMzMzMzMsIDAsIDM2LjY2NjY2NjY2NjY2NywgMCwgMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA2MzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzEuNzU0MjY0ODA1NDI5LCA3My4zMzMzMzMzMzMzMzMpIHJvdGF0ZSgxODAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDcyIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2My41MDg1Mjk2MTA4NTksIDczLjMzMzMzMzMzMzMzMykgcm90YXRlKDAsIDE1Ljg3NzEzMjQwMjcxNSwgMTguMzMzMzMzMzMzMzMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMS43NTQyNjQ4MDU0MjksIDE4LjMzMzMzMzMzMzMzMywgMCwgMzYuNjY2NjY2NjY2NjY3LCAwLCAwIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg5NS4yNjI3OTQ0MTYyODgsIDczLjMzMzMzMzMzMzMzMykgcm90YXRlKDE4MCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyNy4wMTcwNTkyMjE3MiwgNzMuMzMzMzMzMzMzMzMzKSByb3RhdGUoMCwgMTUuODc3MTMyNDAyNzE1LCAxOC4zMzMzMzMzMzMzMzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMxLjc1NDI2NDgwNTQyOSwgMTguMzMzMzMzMzMzMzMzLCAwLCAzNi42NjY2NjY2NjY2NjcsIDAsIDAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wODA2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE1OC43NzEzMjQwMjcxNSwgNzMuMzMzMzMzMzMzMzMzKSByb3RhdGUoMTgwLCAxNS44NzcxMzI0MDI3MTUsIDE4LjMzMzMzMzMzMzMzMykiIC8+PC9zdmc+" alt=""><span class="sr-only">Course image</span>
        <div class="overlay">
          <ul class="mb0">
            <li class="list-inline-item">
              <a class="mcc_view" href="#">View</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="details">
        <div class="mc_content">
          <div class="ccn_mc_content_header">
            <div class="ccn_mc_content_header_details">
              <p class="subtitle">S1 Sistem Informasi</p><span class="sr-only">Course image</span>
              <h5 class="title">2024 Ganjil | Tata Kelola TI </h5>
              <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


              <div class="ccn_fav_icon">
                <span id="favorite-icon-8152-7" data-region="favourite-icon" data-course-id="8152">
                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                    <span class="sr-only">Course is starred</span>
                  </span>
                </span>
              </div>
                <div class="ccn_mc_progress">



                  <div class="progress bg-white">
                      <div class="progress-bar bar" role="progressbar" aria-valuenow="8" style="width: 8%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="small">
                      <span class="sr-only">Course progress:</span>
                      <strong>8</strong>% complete
                  </div>
                </div>
              <span class="sr-only">
                Course name
              </span>
            </div>
            <div class="ccn_mc_content_header_actions">


              <div class="ml-auto dropdown">
                  <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                          <span class="sr-only">
                              Actions for current course 2024 Ganjil | Tata Kelola TI
                          </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="8152" aria-controls="favorite-icon-8152-7">
                          <span class="text-primary"><i class="icon fa fa-star fa-fw " title="Starred" aria-label="Starred"></i></span>
                          Star this course
                          <div class="sr-only">
                              Star for 2024 Ganjil | Tata Kelola TI
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="8152" aria-controls="favorite-icon-8152-7">
                          Unstar this course
                          <div class="sr-only">
                              Remove star for 2024 Ganjil | Tata Kelola TI
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="8152" aria-controls="favorite-icon-8152-7">
                          <i class="icon fa fa-eye-slash fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Restore to view
                          <div class="sr-only">
                              Restore 2024 Ganjil | Tata Kelola TI to view
                          </div>
                      </a>
                      <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="8152" aria-controls="favorite-icon-8152-7">
                          <i class="icon fa fa-eye fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Remove from view
                          <div class="sr-only">
                              Remove 2024 Ganjil | Tata Kelola TI from view
                          </div>
                      </a>
                  </div>
              </div>            </div>
          </div>
          <span class="sr-only">Course summary text:</span>Mata Kuliah <a class="autolink" title="Tata Kelola" href="https://leads.upnvj.ac.id/mod/resource/view.php?id=280761">Tata Kelola</a> TI Kurikulum 512.2024
        </div>
      </div>
    </div>
    <div class="mc_content_list" role="listitem" data-region="course-content" data-course-id="7852">
      <div class="thumb">
        <img class="img-whp" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTYyLCAxNTUsIDI1NCkiIC8+PGNpcmNsZSBjeD0iMCIgY3k9IjAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTI0O3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjMwMCIgY3k9IjAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTI0O3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSIzMDAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTI0O3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjMwMCIgY3k9IjMwMCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMjQ7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iNTAiIGN5PSIwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjE0MTMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjUwIiBjeT0iMzAwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjE0MTMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjEwMCIgY3k9IjAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTU7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMTAwIiBjeT0iMzAwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1O3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjE1MCIgY3k9IjAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDI7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMTUwIiBjeT0iMzAwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjIwMCIgY3k9IjAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDk4O3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjIwMCIgY3k9IjMwMCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMjUwIiBjeT0iMCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xNTtzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSIyNTAiIGN5PSIzMDAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTU7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMCIgY3k9IjUwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA5ODtzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSIzMDAiIGN5PSI1MCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iNTAiIGN5PSI1MCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSIxMDAiIGN5PSI1MCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMTUwIiBjeT0iNTAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDM3MzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjIwMCIgY3k9IjUwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEyNDtzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSIyNTAiIGN5PSI1MCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNTQ2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMCIgY3k9IjEwMCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMjQ7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMzAwIiBjeT0iMTAwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEyNDtzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSI1MCIgY3k9IjEwMCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNjMzMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMTAwIiBjeT0iMTAwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA5ODtzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSIxNTAiIGN5PSIxMDAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjIwMCIgY3k9IjEwMCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wMjg2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMjUwIiBjeT0iMTAwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSIxNTAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDI7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMzAwIiBjeT0iMTUwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjUwIiBjeT0iMTUwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjEzMjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjEwMCIgY3k9IjE1MCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMTUwIiBjeT0iMTUwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxNTAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDM3MzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjI1MCIgY3k9IjE1MCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wMjg2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMCIgY3k9IjIwMCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNDY7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMzAwIiBjeT0iMjAwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA0NjtzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSI1MCIgY3k9IjIwMCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMzczMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMTAwIiBjeT0iMjAwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjE0MTMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjE1MCIgY3k9IjIwMCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xNDEzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIyMDAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTA2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMjUwIiBjeT0iMjAwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSIwIiBjeT0iMjUwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA4MDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSIzMDAiIGN5PSIyNTAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDgwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjUwIiBjeT0iMjUwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjEwMCIgY3k9IjI1MCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PGNpcmNsZSBjeD0iMTUwIiBjeT0iMjUwIiByPSI0My43NSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA5ODtzdHJva2Utd2lkdGg6MTIuNXB4OyIgLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIyNTAiIHI9IjQzLjc1IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDgwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMi41cHg7IiAvPjxjaXJjbGUgY3g9IjI1MCIgY3k9IjI1MCIgcj0iNDMuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNTQ2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjEyLjVweDsiIC8+PC9zdmc+" alt=""><span class="sr-only">Course image</span>
        <div class="overlay">
          <ul class="mb0">
            <li class="list-inline-item">
              <a class="mcc_view" href="#">View</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="details">
        <div class="mc_content">
          <div class="ccn_mc_content_header">
            <div class="ccn_mc_content_header_details">
              <p class="subtitle">S1 Sistem Informasi</p><span class="sr-only">Course image</span>
              <h5 class="title">2024 Ganjil | Technopreneurship </h5>
              <div class="ccn_mc_content_header_status"><small class="tag">Published</small></div>


              <div class="ccn_fav_icon">
                <span id="favorite-icon-7852-7" data-region="favourite-icon" data-course-id="7852">
                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                    <span class="sr-only">Course is starred</span>
                  </span>
                </span>
              </div>
                <div class="ccn_mc_progress">



                  <div class="progress bg-white">
                      <div class="progress-bar bar" role="progressbar" aria-valuenow="27" style="width: 27%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="small">
                      <span class="sr-only">Course progress:</span>
                      <strong>27</strong>% complete
                  </div>
                </div>
              <span class="sr-only">
                Course name
              </span>
            </div>
            <div class="ccn_mc_content_header_actions">


              <div class="ml-auto dropdown">
                  <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                          <span class="sr-only">
                              Actions for current course 2024 Ganjil | Technopreneurship
                          </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="7852" aria-controls="favorite-icon-7852-7">
                          <span class="text-primary"><i class="icon fa fa-star fa-fw " title="Starred" aria-label="Starred"></i></span>
                          Star this course
                          <div class="sr-only">
                              Star for 2024 Ganjil | Technopreneurship
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="7852" aria-controls="favorite-icon-7852-7">
                          Unstar this course
                          <div class="sr-only">
                              Remove star for 2024 Ganjil | Technopreneurship
                          </div>
                      </a>
                      <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="7852" aria-controls="favorite-icon-7852-7">
                          <i class="icon fa fa-eye-slash fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Restore to view
                          <div class="sr-only">
                              Restore 2024 Ganjil | Technopreneurship to view
                          </div>
                      </a>
                      <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="7852" aria-controls="favorite-icon-7852-7">
                          <i class="icon fa fa-eye fa-fw " title="Courses removed from view" aria-label="Courses removed from view"></i>
                          Remove from view
                          <div class="sr-only">
                              Remove 2024 Ganjil | Technopreneurship from view
                          </div>
                      </a>
                  </div>
              </div>            </div>
          </div>
          <span class="sr-only">Course summary text:</span>Mata Kuliah Technopreneurship Kurikulum 512.2024
        </div>
      </div>
    </div>
</div>
</div></div>
        <div class="mt-1">


                <div data-region="paging-control-container" class="d-flex ccn-pagination">

                    <nav role="navigation" id="paging-bar-1" class="hidden" data-region="paging-bar" data-ignore-control-while-loading="true" data-hide-control-on-single-page="true" data-active-page-number="1" data-items-per-page="[object Object]" aria-label="Pagination navigation" data-aria-label-components-pagination-item="pagedcontentnavigationitem, core" data-aria-label-components-pagination-active-item="pagedcontentnavigationactiveitem, core" data-last-page-number="1">

                        <ul class="pagination mb-0">


<li class="page-item disabled" data-region="page-item" data-control="previous" aria-disabled="true">

    <a href="#" class="page-link" data-region="page-link" aria-label="Page ">

                                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                        </a>
</li>


<li class="page-item disabled" data-region="page-item" data-control="next" aria-disabled="true">

    <a href="#" class="page-link" data-region="page-link" aria-label="Page ">

                                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                        </a>
</li>
                        </ul>
                    </nav>
                </div>
        </div>
</div></div>
    </div>
  </div>
</div>
    
    
  </div>

    <span id="sb-8"></span>

</div></aside>
                  
                  
                    <aside id="block-region-below-content" class="block-region" data-blockregion="below-content" data-droptarget="1"></aside>
                </div>
                  <div class=" col-lg-4 col-xl-4 ">
                    <div class="ccn-sidebar-region" aria-label="Blocks">
                      <aside id="block-region-side-pre" class="block-region" data-blockregion="side-pre" data-droptarget="1"><div id="inst318893" class="
    block_news_items block
    
    
     ccnDashBl mb30 " style="" role="complementary" data-block="news_items">

    <a href="#sb-1" class="sr-only sr-only-focusable">Skip Latest announcements</a>

    <h4 id="instance-318893-header" class="title ccnDashBlHd">Latest announcements</h4>


  <div class="ccnBlockContent  ccnDashBlCt ">
    
<ul class="unlist">
<li class="post"><div class="head clearfix"><div class="date">9 Feb, 14:17</div><div class="name">Kapus Elearning</div></div><div class="info"><a href="#">Kuesioner Umpan Langsung (UBL) TA Genap 2022/2023</a></div></li>
<li class="post"><div class="head clearfix"><div class="date">24 Nov, 10:28</div><div class="name">Kapus Elearning</div></div><div class="info"><a href="#">Kuesioner Penilaian LeADS UPNVJ 2022</a></div></li>
<li class="post"><div class="head clearfix"><div class="date">19 Aug, 16:20</div><div class="name">Kapus Elearning</div></div><div class="info"><a href="#">Kuesioner Umpan Langsung (UBL) TA Ganjil 2022/2023</a></div></li>
</ul>

    <a href="#">Older topics</a> ...
    
  </div>

    <span id="sb-1"></span>

</div><div id="inst318886" class="
    block_timeline block
    
    
     ccnDashBl mb30 " style="" role="complementary" data-block="timeline">

    <a href="#sb-2" class="sr-only sr-only-focusable">Skip Timeline</a>

    <h4 id="instance-318886-header" class="title ccnDashBlHd">Timeline</h4>


  <div class="ccnBlockContent  ccnDashBlCt ">
    <div id="block-timeline-674ea34eb1c4e674ea34e362352" class="block-timeline" data-region="timeline">
    <div class="container p-0 pb-3 border-bottom">
        <div class="row no-gutters">
            <div class="col-sm d-flex justify-content-start">
                <div data-region="day-filter" class="dropdown">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle icon-no-margin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Filter timeline items" aria-controls="menudayfilter">
                        <i class="icon fa fa-clock-o fa-fw " aria-hidden="true"></i>
                        <span class="sr-only" data-active-item-text="">
                            
                             Overdue 
                            
                            
                            
                            
                        </span>
                    </button>
                    <div id="menudayfilter" role="menu" class="dropdown-menu" data-show-active-item="" data-skip-active-class="true">
                        <a class="dropdown-item" href="#" data-from="-14" data-filtername="all" aria-label="All filter option" role="menuitem">
                            All
                        </a>
                        <a class="dropdown-item" href="#" data-from="-14" data-to="0" data-filtername="overdue" aria-current="true" aria-label="Overdue filter option" role="menuitem">
                            Overdue
                        </a>
                        <div class="dropdown-divider" role="separator"></div>
                        <h6 class="dropdown-header">Due date</h6>
                        <a class="dropdown-item" href="#" data-from="0" data-to="7" data-filtername="next7days" aria-label="Next 7 days filter option" role="menuitem">
                            Next 7 days
                        </a>
                        <a class="dropdown-item" href="#" data-from="0" data-to="30" data-filtername="next30days" aria-label="Next 30 days filter option" role="menuitem">
                            Next 30 days
                        </a>
                        <a class="dropdown-item" href="#" data-from="0" data-to="90" data-filtername="next3months" aria-label="Next 3 months filter option" role="menuitem">
                            Next 3 months
                        </a>
                        <a class="dropdown-item " href="#" data-from="0" data-to="180" data-filtername="next6months" aria-label="Next 6 months filter option" role="menuitem">
                            Next 6 months
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-end">
                <div data-region="view-selector" class="btn-group">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle icon-no-margin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Sort timeline items" aria-controls="menusortby">
                        <i class="icon fa fa-sort-amount-asc fa-fw " aria-hidden="true"></i>
                        <span class="sr-only" data-active-item-text="">
                            
                            Sort by dates
                        </span>
                    </button>
                    <div id="menusortby" role="menu" class="dropdown-menu dropdown-menu-right list-group hidden" data-show-active-item="" data-skip-active-class="true">
                        <a class="dropdown-item" href="#view_dates_674ea34eb1c4e674ea34e362352" data-toggle="tab" data-filtername="sortbydates" aria-current="true" aria-label="Sort by dates sort option" role="menuitem">
                            Sort by dates
                        </a>
                        <a class="dropdown-item" href="#view_courses_674ea34eb1c4e674ea34e362352" data-toggle="tab" data-filtername="sortbycourses" aria-label="Sort by courses sort option" role="menuitem">
                            Sort by courses
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-0">
        <div data-region="timeline-view">
            <div class="tab-content">
                <div class="tab-pane active show fade" data-limit="25" data-region="view-dates" id="view_dates_674ea34eb1c4e674ea34e362352">
                    <div data-region="timeline-view-dates">
                        <div data-region="event-list-container" data-days-offset="-14" data-days-limit="0" data-course-id="" data-midnight="1733158800">
                            <div data-region="event-list-loading-placeholder" class="hidden">
                                <ul class="pl-0 list-group list-group-flush">
                                    <li class="list-group-item pl-0 pr-0">
                                        <div class="row">
                                            <div class="col-8 pr-0">
                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                    <div style="flex: 1" class="pl-2">
                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 pr-3">
                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item pl-0 pr-0">
                                        <div class="row">
                                            <div class="col-8 pr-0">
                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                    <div style="flex: 1" class="pl-2">
                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 pr-3">
                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item pl-0 pr-0">
                                        <div class="row">
                                            <div class="col-8 pr-0">
                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                    <div style="flex: 1" class="pl-2">
                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 pr-3">
                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item pl-0 pr-0">
                                        <div class="row">
                                            <div class="col-8 pr-0">
                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                    <div style="flex: 1" class="pl-2">
                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 pr-3">
                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item pl-0 pr-0">
                                        <div class="row">
                                            <div class="col-8 pr-0">
                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                    <div style="flex: 1" class="pl-2">
                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 pr-3">
                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="pt-3 d-flex justify-content-between">
                                    <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                    <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                </div>
                            </div>
                            <div data-region="event-list-content"><div id="paged-content-container-2" data-region="paged-content-container" class="">


    <div id="page-container-2" data-region="page-container" class="paged-content-page-container ccn-pagination-page" aria-live="polite" style="">
    <div data-region="paged-content-page" data-page="1" class="">
        <div class="border-bottom pb-2">
        <h5 class="h6 mt-3 mb-0 text-danger">Thursday, 21 November 2024</h5>


        <div class="pl-0 list-group list-group-flush">


            <div class="list-group-item flex-column py-2 pl-0 pr-0 border-0" data-region="event-list-item">
                <div class="d-flex">
                    <div class="icon-size-4 d-flex align-self-top">
                        <img class="icon " src="https://leads.upnvj.ac.id/theme/image.php/edumy/assign/1644289115/icon" alt="Activity event" title="Activity event">
                    </div>
                    <div class="w-100 event-name-container text-truncate line-height-3">
                        <a href="#" title="Tugas 14 Kelas D is due" aria-label="Tugas 14 Kelas D is due activity in 2024 Ganjil | Sistem Operasi is due on 21 November 2024, 3:00 PM"><h6 class="event-name text-truncate mb-0">Tugas 14 Kelas D is due</h6></a>
                        <small class="text-muted text-truncate mb-0">2024 Ganjil | Sistem Operasi</small>
                        <h6 class="mb-0 pt-2">
                            <a href="#" aria-label="Add submission" title="Add submission" class="list-group-item-action">Add submission</a>
                        </h6>
                    </div>
                    <small class="text-right text-nowrap ml-1">
                        15:00
                    </small>

                </div>
            </div>
        </div>
        <h5 class="h6 mt-3 mb-0 text-danger">Sunday, 24 November 2024</h5>


        <div class="pl-0 list-group list-group-flush">


            <div class="list-group-item flex-column py-2 pl-0 pr-0 border-0" data-region="event-list-item">
                <div class="d-flex">
                    <div class="icon-size-4 d-flex align-self-top">
                        <img class="icon " src="https://leads.upnvj.ac.id/theme/image.php/edumy/assign/1644289115/icon" alt="Activity event" title="Activity event">
                    </div>
                    <div class="w-100 event-name-container text-truncate line-height-3">
                        <a href="#" title="TUGAS KELAS G is due" aria-label="TUGAS KELAS G is due activity in 2024 Ganjil | Tata Kelola TI is due on 24 November 2024, 11:59 PM"><h6 class="event-name text-truncate mb-0">TUGAS KELAS G is due</h6></a>
                        <small class="text-muted text-truncate mb-0">2024 Ganjil | Tata Kelola TI</small>
                        <h6 class="mb-0 pt-2">
                            <a href="#" aria-label="Add submission" title="Add submission" class="list-group-item-action">Add submission</a>
                        </h6>
                    </div>
                    <small class="text-right text-nowrap ml-1">
                        23:59
                    </small>

                </div>
            </div>
        </div>
        <h5 class="h6 mt-3 mb-0 text-danger">Sunday, 1 December 2024</h5>


        <div class="pl-0 list-group list-group-flush">


            <div class="list-group-item flex-column py-2 pl-0 pr-0 border-0" data-region="event-list-item">
                <div class="d-flex">
                    <div class="icon-size-4 d-flex align-self-top">
                        <img class="icon " src="https://leads.upnvj.ac.id/theme/image.php/edumy/assign/1644289115/icon" alt="Activity event" title="Activity event">
                    </div>
                    <div class="w-100 event-name-container text-truncate line-height-3">
                        <a href="#" title="Tugas kelas D &amp; E (Dosen Octav) is due" aria-label="Tugas kelas D &amp; E (Dosen Octav) is due activity in 2024 Ganjil | Technopreneurship is due on 1 December 2024, 12:00 AM"><h6 class="event-name text-truncate mb-0">Tugas kelas D &amp; E (Dosen Octav) is due</h6></a>
                        <small class="text-muted text-truncate mb-0">2024 Ganjil | Technopreneurship</small>
                        <h6 class="mb-0 pt-2">
                            <a href="#" aria-label="Add submission" title="Add submission" class="list-group-item-action">Add submission</a>
                        </h6>
                    </div>
                    <small class="text-right text-nowrap ml-1">
                        00:00
                    </small>

                </div>
            </div>
        </div>
</div>
</div></div>
        <div class="mt-1">


                <div data-region="paging-control-container" class="d-flex ccn-pagination">
                        <div id="paging-control-limit-container-2" data-region="paging-control-limit-container" class="d-inline-flex align-items-center">
                            <span class="mr-1">Show</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-action="limit-toggle" aria-label="Show 5 activities per page">
                                            25
                                </button>
                                <div role="menu" class="dropdown-menu" data-show-active-item="" data-active-item-button-aria-label-components="ariaeventlistpagelimit, block_timeline">
                                        <a class="dropdown-item " href="#" data-limit="5">
                                            5
                                            
                                        </a>
                                        <a class="dropdown-item " href="#" data-limit="10">
                                            10
                                            
                                        </a>
                                        <a class="dropdown-item active" href="#" data-limit="25" aria-current="true">
                                            25
                                            
                                        </a>
                                </div>
                            </div>
                        </div>

                    <nav role="navigation" id="paging-bar-2" class="ml-auto hidden" data-region="paging-bar" data-ignore-control-while-loading="true" data-hide-control-on-single-page="true" data-active-page-number="1" data-items-per-page="25" aria-label="Timeline activities pagination" data-aria-label-components-pagination-item="pagedcontentnavigationitem, core" data-aria-label-components-pagination-active-item="pagedcontentnavigationactiveitem, core" data-last-page-number="1">

                        <ul class="pagination mb-0">


<li class="page-item disabled" data-region="page-item" data-control="previous" aria-disabled="true">

    <a href="#" class="page-link" data-region="page-link" aria-label="Page ">

                                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                        </a>
</li>


<li class="page-item disabled" data-region="page-item" data-control="next" aria-disabled="true">

    <a href="#" class="page-link" data-region="page-link" aria-label="Page ">

                                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                        </a>
</li>
                        </ul>
                    </nav>
                </div>
        </div>
</div></div>
                            <div class="hidden text-xs-center text-center mt-3" data-region="empty-message">
                                <img src="https://leads.upnvj.ac.id/theme/image.php/edumy/block_timeline/1644289115/activities" alt="" style="height: 70px; width: 70px">
                                <p class="text-muted mt-1">No upcoming activities due</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade" data-region="view-courses" data-midnight="1733158800" data-limit="2" data-offset="0" data-days-limit="0" data-days-offset="0" data-no-events-url="https://leads.upnvj.ac.id/theme/image.php/edumy/block_timeline/1644289115/activities" id="view_courses_674ea34eb1c4e674ea34e362352">
                    <div data-region="course-items-loading-placeholder">
                        <ul class="list-group unstyled">
                            <li class="list-group-item mt-3 p-0 border-0">
                                <div class="w-50 bg-pulse-grey mb-2" style="height: 20px"></div>
                                <div>
                                    <ul class="pl-0 list-group list-group-flush">
                                        <li class="list-group-item pl-0 pr-0">
                                            <div class="row">
                                                <div class="col-8 pr-0">
                                                    <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                        <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                        <div style="flex: 1" class="pl-2">
                                                            <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                            <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 pr-3">
                                                    <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                        <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item pl-0 pr-0">
                                            <div class="row">
                                                <div class="col-8 pr-0">
                                                    <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                        <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                        <div style="flex: 1" class="pl-2">
                                                            <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                            <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 pr-3">
                                                    <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                        <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item pl-0 pr-0">
                                            <div class="row">
                                                <div class="col-8 pr-0">
                                                    <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                        <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                        <div style="flex: 1" class="pl-2">
                                                            <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                            <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 pr-3">
                                                    <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                        <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item pl-0 pr-0">
                                            <div class="row">
                                                <div class="col-8 pr-0">
                                                    <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                        <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                        <div style="flex: 1" class="pl-2">
                                                            <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                            <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 pr-3">
                                                    <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                        <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item pl-0 pr-0">
                                            <div class="row">
                                                <div class="col-8 pr-0">
                                                    <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                        <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                        <div style="flex: 1" class="pl-2">
                                                            <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                            <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 pr-3">
                                                    <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                        <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="pt-3 d-flex justify-content-between">
                                        <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                        <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item mt-3 p-0 border-0">
                                <div class="w-50 bg-pulse-grey mb-2" style="height: 20px"></div>
                                <div>
                                    <ul class="pl-0 list-group list-group-flush">
                                        <li class="list-group-item pl-0 pr-0">
                                            <div class="row">
                                                <div class="col-8 pr-0">
                                                    <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                        <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                        <div style="flex: 1" class="pl-2">
                                                            <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                            <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 pr-3">
                                                    <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                        <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item pl-0 pr-0">
                                            <div class="row">
                                                <div class="col-8 pr-0">
                                                    <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                        <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                        <div style="flex: 1" class="pl-2">
                                                            <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                            <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 pr-3">
                                                    <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                        <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item pl-0 pr-0">
                                            <div class="row">
                                                <div class="col-8 pr-0">
                                                    <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                        <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                        <div style="flex: 1" class="pl-2">
                                                            <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                            <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 pr-3">
                                                    <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                        <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item pl-0 pr-0">
                                            <div class="row">
                                                <div class="col-8 pr-0">
                                                    <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                        <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                        <div style="flex: 1" class="pl-2">
                                                            <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                            <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 pr-3">
                                                    <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                        <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item pl-0 pr-0">
                                            <div class="row">
                                                <div class="col-8 pr-0">
                                                    <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                        <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                        <div style="flex: 1" class="pl-2">
                                                            <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                            <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 pr-3">
                                                    <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                        <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="pt-3 d-flex justify-content-between">
                                        <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                        <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="bg-pulse-grey mt-1" style="width: 100px; height: 30px; margin-left: auto; margin-right: auto"></div>
                    </div>
                    <ul class="list-group unstyled" data-region="courses-list"></ul>
                    <div class="hidden text-xs-center text-center pt-3" data-region="more-courses-button-container">
                        <button type="button" class="btn btn-secondary" data-action="more-courses">
                            More courses
                            <span class="hidden" data-region="loading-icon-container">
                                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                            </span>
                        </button>
                    </div>
                    <div class="hidden text-xs-center text-center mt-3" data-region="no-courses-empty-message">
                        <img src="https://leads.upnvj.ac.id/theme/image.php/edumy/block_timeline/1644289115/activities" alt="" style="height: 70px; width: 70px">
                        <p class="text-muted mt-1">No in-progress courses</p>
                    </div>
                </div>
            </div>
        </div>    </div>
</div>
    
    
  </div>

    <span id="sb-2"></span>

</div><div id="inst318887" class="
    block_private_files block
    
    
     ccnDashBl mb30 " style="" role="complementary" data-block="private_files">

    <a href="#sb-3" class="sr-only sr-only-focusable">Skip Private files</a>

    <h4 id="instance-318887-header" class="title ccnDashBlHd">Private files</h4>


  <div class="ccnBlockContent  ccnDashBlCt ">
    <div class="box py-3 generalbox">No files available</div>
    <a data-action="manageprivatefiles" href="#">Manage private files...</a>
    
  </div>

    <span id="sb-3"></span>

</div><div id="inst318888" class="
    block_online_users block
    
    
     ccnDashBl mb30 " style="" role="complementary" data-block="online_users">

    <a href="#sb-4" class="sr-only sr-only-focusable">Skip Online users</a>

    <h4 id="instance-318888-header" class="title ccnDashBlHd">Online users</h4>


  <div class="ccnBlockContent  ccnDashBlCt ">
    <div class="info">63 online users (last 5 minutes)</div><ul class="list">
<li class="listentry"><div class="user"><a href="#" title="1 sec"><img src="https://leads.upnvj.ac.id/theme/image.php/edumy/core/1644289115/u/f2" class="userpicture defaultuserpic" width="16" height="16" alt="">2310512143 FAHRI MUHAIMIN</a></div><div class="uservisibility"><a title="Hide my online status from other users" data-action="hide" data-userid="20678" id="change-user-visibility" href=""><i class="icon fa fa-eye fa-fw " title="Hide my online status from other users" aria-label="Hide my online status from other users"></i></a></div></li>
<li class="listentry"><div class="otherusers"><span>Other users (48)</span></div></li>
</ul><div class="clearer"><!-- --></div>
    
    
  </div>

    <span id="sb-4"></span>

</div><div id="inst318889" class="
    block_calendar_month block
    
    
     ccnDashBl mb30 " style="" role="complementary" data-block="calendar_month">

    <a href="#sb-5" class="sr-only sr-only-focusable">Skip Calendar</a>

    <h4 id="instance-318889-header" class="title ccnDashBlHd">Calendar</h4>


  <div class="ccnBlockContent  ccnDashBlCt ">
    <div id="calendar-month-2024-12-674ea34f36ea9674ea34e362353" data-template="core_calendar/month_mini" data-includenavigation="true" data-mini="true">
    <div id="month-mini-2024-12-5" class="calendarwrapper" data-courseid="1" data-categoryid="0" data-month="12" data-year="2024" data-day="3" data-view="month">


    <span class="overlay-icon-container hidden" data-region="overlay-icon-container">


        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
    </span>
    <table class="minicalendar calendartable">
        <caption class="calendar-controls">
                <a href="#" class="arrow_link previous" title="Previous month" data-year="2024" data-month="11">
                    <span class="arrow">◄</span>
                </a>
                <span class="hide"> | </span>
                <span class="current">
                    <a href="https://leads.upnvj.ac.id/calendar/view.php?view=month&amp;time=1733158800" title="This month">December 2024</a>
                </span>
                <span class="hide"> | </span>
                <a href="#" class="arrow_link next" title="Next month" data-year="2025" data-month="1">
                    <span class="arrow">►</span>
                </a>
        </caption>
        <thead>
          <tr>
                <th class="header text-xs-center">
                    <span class="sr-only">Monday</span>
                    <span aria-hidden="true">Mon</span>
                </th>
                <th class="header text-xs-center">
                    <span class="sr-only">Tuesday</span>
                    <span aria-hidden="true">Tue</span>
                </th>
                <th class="header text-xs-center">
                    <span class="sr-only">Wednesday</span>
                    <span aria-hidden="true">Wed</span>
                </th>
                <th class="header text-xs-center">
                    <span class="sr-only">Thursday</span>
                    <span aria-hidden="true">Thu</span>
                </th>
                <th class="header text-xs-center">
                    <span class="sr-only">Friday</span>
                    <span aria-hidden="true">Fri</span>
                </th>
                <th class="header text-xs-center">
                    <span class="sr-only">Saturday</span>
                    <span aria-hidden="true">Sat</span>
                </th>
                <th class="header text-xs-center">
                    <span class="sr-only">Sunday</span>
                    <span aria-hidden="true">Sun</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr data-region="month-view-week">
                    <td class="dayblank">&nbsp;</td>
                    <td class="dayblank">&nbsp;</td>
                    <td class="dayblank">&nbsp;</td>
                    <td class="dayblank">&nbsp;</td>
                    <td class="dayblank">&nbsp;</td>
                    <td class="dayblank">&nbsp;</td>
                    <td class="day text-center weekend hasevent calendar_event_course duration_finish" data-eventtype-course="1" data-day-timestamp="1732986000"><span class="sr-only">1 event, Sunday, 1 December</span>


<a id="calendar-day-popover-link-1-2024-335-5" href="https://leads.upnvj.ac.id/calendar/view.php?view=day&amp;time=1732986000" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2024" data-month="12" data-courseid="1" data-categoryid="0" data-title="Sunday, 1 December events" data-alternate="No events" aria-label="Sunday, 1 December events" data-original-title="" title="">1</a>
<div class="hidden">

                                        <div data-popover-eventtype-course="1">


                                                <img class="icon " src="https://leads.upnvj.ac.id/theme/image.php/edumy/assign/1644289115/icon" alt="" title="">
                                            Technopreneurship-SIM124501-#32050-512.2024-FIK-20241: Tugas kelas D &amp; E (Dosen Octav) is due
                                        </div>
                                </div>
</td>
            </tr>
            <tr data-region="month-view-week">
                    <td class="day text-center" data-day-timestamp="1733072400"><span class="sr-only">No events, Monday, 2 December</span>
                            <span aria-hidden="true">2</span>
                        </td>
                    <td class="day text-center today" data-day-timestamp="1733158800"><span class="sr-only">No events, Tuesday, 3 December</span>


<a id="calendar-day-popover-link-1-2024-337-5" href="https://leads.upnvj.ac.id/calendar/view.php?view=day&amp;time=1733158800" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2024" data-month="12" data-courseid="1" data-categoryid="0" data-title="Today Tuesday, 3 December" data-alternate="No events" aria-label="Today Tuesday, 3 December" data-original-title="" title="">3</a>
<div class="hidden">

                                </div>
</td>
                    <td class="day text-center" data-day-timestamp="1733245200"><span class="sr-only">No events, Wednesday, 4 December</span>
                            <span aria-hidden="true">4</span>
                        </td>
                    <td class="day text-center hasevent calendar_event_course duration_finish" data-eventtype-course="1" data-day-timestamp="1733331600"><span class="sr-only">1 event, Thursday, 5 December</span>


<a id="calendar-day-popover-link-1-2024-339-5" href="https://leads.upnvj.ac.id/calendar/view.php?view=day&amp;time=1733331600" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2024" data-month="12" data-courseid="1" data-categoryid="0" data-title="Thursday, 5 December events" data-alternate="No events" aria-label="Thursday, 5 December events" data-original-title="" title="">5</a>
<div class="hidden">

                                        <div data-popover-eventtype-course="1">


                                                <img class="icon " src="https://leads.upnvj.ac.id/theme/image.php/edumy/assign/1644289115/icon" alt="" title="">
                                            Sistem Informasi Manajemen-SIM124304-#32023-512.2024-FIK-20241: Progress Report kelas A bu Erly Krisnanik is due
                                        </div>
                                </div>
</td>
                    <td class="day text-center" data-day-timestamp="1733418000"><span class="sr-only">No events, Friday, 6 December</span>
                            <span aria-hidden="true">6</span>
                        </td>
                    <td class="day text-center weekend" data-day-timestamp="1733504400"><span class="sr-only">No events, Saturday, 7 December</span>
                            <span aria-hidden="true">7</span>
                        </td>
                    <td class="day text-center weekend" data-day-timestamp="1733590800"><span class="sr-only">No events, Sunday, 8 December</span>
                            <span aria-hidden="true">8</span>
                        </td>
            </tr>
            <tr data-region="month-view-week">
                    <td class="day text-center" data-day-timestamp="1733677200"><span class="sr-only">No events, Monday, 9 December</span>
                            <span aria-hidden="true">9</span>
                        </td>
                    <td class="day text-center" data-day-timestamp="1733763600"><span class="sr-only">No events, Tuesday, 10 December</span>
                            <span aria-hidden="true">10</span>
                        </td>
                    <td class="day text-center" data-day-timestamp="1733850000"><span class="sr-only">No events, Wednesday, 11 December</span>
                            <span aria-hidden="true">11</span>
                        </td>
                    <td class="day text-center" data-day-timestamp="1733936400"><span class="sr-only">No events, Thursday, 12 December</span>
                            <span aria-hidden="true">12</span>
                        </td>
                    <td class="day text-center" data-day-timestamp="1734022800"><span class="sr-only">No events, Friday, 13 December</span>
                            <span aria-hidden="true">13</span>
                        </td>
                    <td class="day text-center weekend" data-day-timestamp="1734109200"><span class="sr-only">No events, Saturday, 14 December</span>
                            <span aria-hidden="true">14</span>
                        </td>
                    <td class="day text-center weekend" data-day-timestamp="1734195600"><span class="sr-only">No events, Sunday, 15 December</span>
                            <span aria-hidden="true">15</span>
                        </td>
            </tr>
            <tr data-region="month-view-week">
                    <td class="day text-center hasevent calendar_event_course duration_finish" data-eventtype-course="1" data-day-timestamp="1734282000"><span class="sr-only">1 event, Monday, 16 December</span>


<a id="calendar-day-popover-link-1-2024-350-5" href="https://leads.upnvj.ac.id/calendar/view.php?view=day&amp;time=1734282000" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2024" data-month="12" data-courseid="1" data-categoryid="0" data-title="Monday, 16 December events" data-alternate="No events" aria-label="Monday, 16 December events" data-original-title="" title="">16</a>
<div class="hidden">

                                        <div data-popover-eventtype-course="1">


                                                <img class="icon " src="https://leads.upnvj.ac.id/theme/image.php/edumy/assign/1644289115/icon" alt="" title="">
                                            Technopreneurship-SIM124501-#32050-512.2024-FIK-20241: Enroll kelas Mandiri (Kelas D &amp; E) is due
                                        </div>
                                </div>
</td>
                    <td class="day text-center hasevent calendar_event_course duration_finish" data-eventtype-course="1" data-day-timestamp="1734368400"><span class="sr-only">1 event, Tuesday, 17 December</span>


<a id="calendar-day-popover-link-1-2024-351-5" href="https://leads.upnvj.ac.id/calendar/view.php?view=day&amp;time=1734368400" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2024" data-month="12" data-courseid="1" data-categoryid="0" data-title="Tuesday, 17 December events" data-alternate="No events" aria-label="Tuesday, 17 December events" data-original-title="" title="">17</a>
<div class="hidden">

                                        <div data-popover-eventtype-course="1">


                                                <img class="icon " src="https://leads.upnvj.ac.id/theme/image.php/edumy/assign/1644289115/icon" alt="" title="">
                                            Computational Thinking-SIM124704-#32067-512.2024-FIK-20241: Kelas A (Dosen Octav) is due
                                        </div>
                                </div>
</td>
                    <td class="day text-center" data-day-timestamp="1734454800"><span class="sr-only">No events, Wednesday, 18 December</span>
                            <span aria-hidden="true">18</span>
                        </td>
                    <td class="day text-center" data-day-timestamp="1734541200"><span class="sr-only">No events, Thursday, 19 December</span>
                            <span aria-hidden="true">19</span>
                        </td>
                    <td class="day text-center" data-day-timestamp="1734627600"><span class="sr-only">No events, Friday, 20 December</span>
                            <span aria-hidden="true">20</span>
                        </td>
                    <td class="day text-center weekend" data-day-timestamp="1734714000"><span class="sr-only">No events, Saturday, 21 December</span>
                            <span aria-hidden="true">21</span>
                        </td>
                    <td class="day text-center weekend" data-day-timestamp="1734800400"><span class="sr-only">No events, Sunday, 22 December</span>
                            <span aria-hidden="true">22</span>
                        </td>
            </tr>
            <tr data-region="month-view-week">
                    <td class="day text-center" data-day-timestamp="1734886800"><span class="sr-only">No events, Monday, 23 December</span>
                            <span aria-hidden="true">23</span>
                        </td>
                    <td class="day text-center" data-day-timestamp="1734973200"><span class="sr-only">No events, Tuesday, 24 December</span>
                            <span aria-hidden="true">24</span>
                        </td>
                    <td class="day text-center" data-day-timestamp="1735059600"><span class="sr-only">No events, Wednesday, 25 December</span>
                            <span aria-hidden="true">25</span>
                        </td>
                    <td class="day text-center" data-day-timestamp="1735146000"><span class="sr-only">No events, Thursday, 26 December</span>
                            <span aria-hidden="true">26</span>
                        </td>
                    <td class="day text-center" data-day-timestamp="1735232400"><span class="sr-only">No events, Friday, 27 December</span>
                            <span aria-hidden="true">27</span>
                        </td>
                    <td class="day text-center weekend" data-day-timestamp="1735318800"><span class="sr-only">No events, Saturday, 28 December</span>
                            <span aria-hidden="true">28</span>
                        </td>
                    <td class="day text-center weekend" data-day-timestamp="1735405200"><span class="sr-only">No events, Sunday, 29 December</span>
                            <span aria-hidden="true">29</span>
                        </td>
            </tr>
            <tr data-region="month-view-week">
                    <td class="day text-center" data-day-timestamp="1735491600"><span class="sr-only">No events, Monday, 30 December</span>
                            <span aria-hidden="true">30</span>
                        </td>
                    <td class="day text-center" data-day-timestamp="1735578000"><span class="sr-only">No events, Tuesday, 31 December</span>
                            <span aria-hidden="true">31</span>
                        </td>
                    <td class="dayblank">&nbsp;</td>
                    <td class="dayblank">&nbsp;</td>
                    <td class="dayblank">&nbsp;</td>
                    <td class="dayblank">&nbsp;</td>
                    <td class="dayblank">&nbsp;</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
    
    
  </div>

    <span id="sb-5"></span>

</div><div id="inst318890" class="
    block_calendar_upcoming block
    
    
     ccnDashBl mb30 " style="" role="complementary" data-block="calendar_upcoming">

    <a href="#sb-6" class="sr-only sr-only-focusable">Skip Upcoming events</a>

    <h4 id="instance-318890-header" class="title ccnDashBlHd">Upcoming events</h4>


  <div class="ccnBlockContent  ccnDashBlCt ">
    <div id="calendar-upcoming-block-674ea34fedb87674ea34e362354" data-template="core_calendar/upcoming_mini">
    <div class="card-text content calendarwrapper" id="month-upcoming-mini-674ea34fedb87674ea34e362354" data-context-id="2" data-courseid="1" data-categoryid="0">
        <span class="overlay-icon-container hidden" data-region="overlay-icon-container">
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
        </span>
            <div class="event" data-eventtype-course="1" data-region="event-item">
                <span><img class="icon " alt="Activity event" title="Activity event" src="https://leads.upnvj.ac.id/theme/image.php/edumy/assign/1644289115/icon"></span>
                <a data-type="event" data-action="view-event" data-event-id="255291" href="#">Progress Report kelas A bu Erly Krisnanik is due</a>
                <div class="date"><a href="#">Thursday, 5 December</a>, 12:00 AM</div>
                <hr>
            </div>
            <div class="event" data-eventtype-course="1" data-region="event-item">
                <span><img class="icon " alt="Activity event" title="Activity event" src="https://leads.upnvj.ac.id/theme/image.php/edumy/assign/1644289115/icon"></span>
                <a data-type="event" data-action="view-event" data-event-id="252086" href="#">Enroll kelas Mandiri (Kelas D &amp; E) is due</a>
                <div class="date"><a href="#">Monday, 16 December</a>, 12:00 AM</div>
                <hr>
            </div>
            <div class="event" data-eventtype-course="1" data-region="event-item">
                <span><img class="icon " alt="Activity event" title="Activity event" src="https://leads.upnvj.ac.id/theme/image.php/edumy/assign/1644289115/icon"></span>
                <a data-type="event" data-action="view-event" data-event-id="252133" href="#">Kelas A (Dosen Octav) is due</a>
                <div class="date"><a href="#">Tuesday, 17 December</a>, 12:00 AM</div>
                <hr>
            </div>
    </div>
</div>
    <div class="gotocal"><a href="#">Go to calendar...</a></div>
    
  </div>

    <span id="sb-6"></span>

</div></aside>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <aside id="block-region-fullwidth-bottom" class="block-region" data-blockregion="fullwidth-bottom" data-droptarget="1"></aside>
                  </div>
              </div>
            </div>
          </div>
          <div class="row mt10 pb50">
            <div class="col-lg-12">
              <div class="copyright-widget text-center">
                <p class="color-black2">Copyright © 2021 UPN Veteran Jakarta.</p>
                <div class="tool_usertours-resettourcontainer"></div>
              </div>
            </div>
          </div>
          <script>$( document ).ready(function() {
	jQuery(".header-nav nav a.navbar_brand").find("span").remove();
    jQuery(".mobile-menu .header a.mobileBrand").find("span").remove();
    jQuery(".footer_middle_area .logo-widget").find("span").remove();
});</script>
          
<style>

@media only screen and (max-width: 1380px) {
	.navbar_brand img, 
  	.ccn_header_style_2 .logo-widget img {
      max-height: 52px !important;
      max-width: none;
      width: auto;
  }
}

@media only screen and (max-width: 1355px) {
	.navbar_brand img, 
  	.ccn_header_style_2 .logo-widget img {
      max-height: 40px !important;
      max-width: none;
      width: auto;
  }
}
 
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XSN5XCFMJ0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XSN5XCFMJ0');
</script><script>
//<![CDATA[
var require = {
    baseUrl : 'https://leads.upnvj.ac.id/lib/requirejs.php/1635748127/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://leads.upnvj.ac.id/lib/javascript.php/1635748127/lib/jquery/jquery-3.5.1.min',
        jqueryui: 'https://leads.upnvj.ac.id/lib/javascript.php/1635748127/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://leads.upnvj.ac.id/lib/javascript.php/1635748127/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script src="https://leads.upnvj.ac.id/lib/javascript.php/1635748127/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");
require(['core/first'], function() {
require(['core/prefetch'])
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp('en');
});;

require(
[
    'jquery',
    'block_timeline/main',
],
function(
    $,
    Main
) {
    var root = $('#block-timeline-674ea34eb1c4e674ea34e362352');
    Main.init(root);
});
;
M.util.js_pending('core_user/private_files'); require(['core_user/private_files'], function(amd) {amd.initModal("[data-action=manageprivatefiles]", "core_user\\form\\private_files"); M.util.js_complete('core_user/private_files');});;
M.util.js_pending('block_online_users/change_user_visibility'); require(['block_online_users/change_user_visibility'], function(amd) {amd.init(); M.util.js_complete('block_online_users/change_user_visibility');});;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2024-337-674ea34f36ea9674ea34e362353");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require([
    'jquery',
    'core_calendar/selectors',
    'core_calendar/events',
], function(
    $,
    CalendarSelectors,
    CalendarEvents
) {

    $('body').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-mini-674ea34f36ea9674ea34e362353-filterChanged");
        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        $("#month-mini-2024-12-674ea34f36ea9674ea34e362353")
            .find(CalendarSelectors.popoverType[data.type])
            .toggleClass('hidden', !!data.hidden);
        M.util.js_complete("month-mini-674ea34f36ea9674ea34e362353-filterChanged");
    });
});
;

require(['jquery', 'core_calendar/calendar_mini'], function($, CalendarMini) {
    CalendarMini.init($("#calendar-month-2024-12-674ea34f36ea9674ea34e362353"), !0);
});
;

require([
    'jquery',
    'core_calendar/selectors',
    'core_calendar/events',
], function(
    $,
    CalendarSelectors,
    CalendarEvents
) {
    var root = $('#month-upcoming-mini-674ea34fedb87674ea34e362354');

    $('body').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-upcoming-mini-674ea34fedb87674ea34e362354-filterChanged");

        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        var target = $("#month-upcoming-mini-674ea34fedb87674ea34e362354").find(CalendarSelectors.eventType[data.type]);

        var transitionPromise = $.Deferred();
        if (data.hidden) {
            transitionPromise.then(function() {
                return target.slideUp('fast').promise();
            });
        } else {
            transitionPromise.then(function() {
                return target.slideDown('fast').promise();
            });
        }

        transitionPromise.then(function() {
            M.util.js_complete("month-upcoming-mini-674ea34fedb87674ea34e362354-filterChanged");

            return;
        });

        transitionPromise.resolve();
    });
});
;

require(['jquery', 'core_calendar/calendar_view'], function($, CalendarView) {
    CalendarView.init($("#calendar-upcoming-block-674ea34fedb87674ea34e362354"), 'upcoming');
});
;
M.util.js_pending('local_intelliboard/tracking'); require(['local_intelliboard/tracking'], function(amd) {amd.trackActivityLabelClicks("https:\/\/leads.upnvj.ac.id\/local\/intelliboard\/ajax.php"); M.util.js_complete('local_intelliboard/tracking');});;

  require(
  [
  'jquery',
  'block_recentlyaccessedcourses/main'
  ],
  function(
  $,
  Main
  ) {
  var root = $('#block-recentlyaccessedcourses-674ea350210c9674ea34e362358');
  var userid = root.attr('data-userid');

  Main.init(userid, root);
  });
;

  require(
  [
  'jquery',
  'block_myoverview/main',
  ],
  function(
  $,
  Main
  ) {
  var root = $('#block-myoverview-674ea35022fc5674ea34e362359');
  Main.init(root);
  });
;

require(['jquery'], function($) {
    $('#single_select674ea34e3623512').change(function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f674ea34e3623511').submit();
        }
    });
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

  require(
  [
  'jquery',
  'core_message/message_popover'
  ],
  function(
  $,
  Popover
  ) {
  var toggle = $('#message-drawer-toggle-674ea35029e56674ea34e3623514');
  Popover.init(toggle);
  });
;

require(['jquery'], function($) {
    $('#single_select674ea34e3623516').change(function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f674ea34e3623515').submit();
        }
    });
});
;

  require(['jquery', 'core_message/message_drawer'], function($, MessageDrawer) {
  var root = $('#message-drawer-674ea35030999674ea34e3623517');
  MessageDrawer.init(root, '674ea35030999674ea34e3623517', false);
  });
;

  M.util.js_pending('theme_boost/loader');
  require(['theme_boost/loader'], function() {
  M.util.js_complete('theme_boost/loader');
  });
  M.util.js_pending('theme_boost/drawer');
  require(['theme_boost/drawer'], function(mod) {
  mod.init();
  M.util.js_complete('theme_boost/drawer');
  });
;
M.util.js_pending('core/userfeedback'); require(['core/userfeedback'], function(amd) {amd.registerEventListeners(); M.util.js_complete('core/userfeedback');});;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(526865, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});
    M.util.js_complete("core/first");
});
//]]>
</script>
<script src="https://leads.upnvj.ac.id/lib/javascript.php/1635748127/local/intelliboard/module.js"></script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","cancel":"Cancel","changesmadereallygoaway":"You have made changes. Are you sure you want to navigate away and lose your changes?","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error","file":"File","url":"URL","collapseall":"Collapse all","expandall":"Expand all"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} links to this file","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"},"debug":{"debuginfo":"Debug info","line":"Line","stacktrace":"Stack trace"},"langconfig":{"labelsep":": "}};
//]]>
</script>
<script>
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"en"});
});
intelliboardInit(Y, {"intelliboardAjax":30,"intelliboardAjaxUrl":"https:\/\/leads.upnvj.ac.id\/local\/intelliboard\/ajax.php","intelliboardInactivity":60,"intelliboardPeriod":1000,"intelliboardPage":"site","intelliboardParam":1,"intelliboardMediaTrack":"","intelliboardTime":0,"intelliboardSSOLink":false});
ccnCommentHandler(Y, "Add a Comment & Review");
ccnControl(Y, "https:\/\/leads.upnvj.ac.id\/theme\/edumy\/ccn\/visualize\/ccn_block\/jpeg\/large\/", "https:\/\/leads.upnvj.ac.id\/theme\/edumy\/ccn\/visualize\/ccn_block\/jpeg\/thumb\/", ["cocoon_about_1","cocoon_about_2","cocoon_accordion","cocoon_action_panels","cocoon_boxes","cocoon_blog_recent_slider","cocoon_faqs","cocoon_event_list","cocoon_event_list_2","cocoon_featured_teacher","cocoon_featured_posts","cocoon_featured_video","cocoon_features","cocoon_gallery_video","cocoon_parallax","cocoon_parallax_apps","cocoon_parallax_counters","cocoon_parallax_features","cocoon_parallax_testimonials","cocoon_parallax_subscribe","cocoon_parallax_subscribe_2","cocoon_partners","cocoon_parallax_white","cocoon_pills","cocoon_price_tables","cocoon_price_tables_dark","cocoon_services","cocoon_services_dark","cocoon_simple_counters","cocoon_hero_1","cocoon_hero_2","cocoon_hero_3","cocoon_hero_4","cocoon_hero_5","cocoon_hero_6","cocoon_hero_7","cocoon_slider_1","cocoon_slider_1_v","cocoon_slider_2","cocoon_slider_3","cocoon_slider_4","cocoon_slider_5","cocoon_slider_6","cocoon_slider_7","cocoon_slider_8","cocoon_steps","cocoon_steps_dark","cocoon_subscribe","cocoon_tablets","cocoon_tabs","cocoon_tstmnls","cocoon_tstmnls_2","cocoon_tstmnls_3","cocoon_tstmnls_4","cocoon_tstmnls_5","cocoon_tstmnls_6","cocoon_contact_form","cocoon_course_categories","cocoon_course_categories_2","cocoon_course_categories_3","cocoon_course_categories_4","cocoon_course_categories_5","cocoon_course_overview","cocoon_course_instructor","cocoon_course_rating","cocoon_course_grid","cocoon_course_grid_2","cocoon_course_grid_3","cocoon_course_grid_4","cocoon_course_grid_5","cocoon_course_grid_6","cocoon_course_grid_7","cocoon_course_grid_8","cocoon_featuredcourses","cocoon_courses_slider","cocoon_more_courses","cocoon_users_slider","cocoon_users_slider_2","cocoon_users_slider_2_dark","cocoon_users_slider_round"], "311");
M.util.help_popups.setup(Y);
 M.util.js_pending('random674ea34e3623518'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random674ea34e3623518'); });
})();
//]]>
</script>

        </div>
      </div>
    </div>
  </div>
  </div><div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important" class=""></div></div>
  <div class="mm-wrapper__blocker mm-slideout"><a href="#mm-0"><span class="mm-sronly">Close menu</span></a></div>
  <div id="drawer-674ea35030999674ea34e3623517" class=" drawer bg-white hidden" aria-expanded="false" aria-hidden="true" data-region="right-hand-drawer" role="region" tabindex="0">
    <div id="message-drawer-674ea35030999674ea34e3623517" class="--message-app --row message_container message_container_drawer" data-region="message-drawer" role="region">

  <div class="ui_kit_button">
    <button id="ccn-messagedrawer-close" type="button" class="btn btn-md btn-thm rounded"><i class="fa fa-times"></i></button>
    <button data-route="view-settings" data-route-param="20678" aria-label="Settings" role="button" class="btn btn-md btn-thm pull-right">
      <i class="fa fa-cog" aria-hidden="true"></i>
    </button>

    <button data-route="view-contacts" role="button" class="btn btn-md btn-thm pull-right">
      <i class="fa fa-user" aria-hidden="true"></i>
      Contacts
      <span class="badge bg-primary ml-2 hidden" data-region="contact-request-count" aria-label="There are 0 pending contact requests">
        0
      </span>
    </button>
  </div>


  <div class="inbox_user_list">
    <div class="panel-header-container" data-region="panel-header-container">
      
      
      
      
      
      
      <div class="" aria-hidden="false" data-region="view-overview">
      
      
        <div class="iu_heading">
          <div class="candidate_revew_search_box">
            <div class="">
              <div class="form-inline my-2 my-lg-0">
      
                <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search" data-region="view-overview-search-input" spellcheck="false" data-ms-editor="true">
                <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
              </div>
             
            </div>
          </div>
        </div>
      
      
      
      </div>
      <div class=" view-search" aria-hidden="true" data-region="view-search">
        <div class="iu_heading">
          <div class="candidate_revew_search_box">
            <a class="ccn-msg-cog" href="#" data-route-back="" data-action="cancel-search" role="button">
              <div class="icon-back-in-drawer">
                  <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                  <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
              </div>
              <div class="icon-back-in-app">
                  <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"></i></span>
              </div>
            </a>
            <div class="form-inline my-2 my-lg-0">
              <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search" data-region="search-input" spellcheck="false" data-ms-editor="true">
              <button class="btn my-2 my-sm-0" type="button" data-action="search" aria-label="Search">
                <span class="flaticon-magnifying-glass"></span>
                <span class="hidden" data-region="loading-icon-container">
                  <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel-body-container" data-region="panel-body-container">
      <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview" data-user-id="20678">
          <div id="message-drawer-view-overview-container-674ea35030999674ea34e3623517" class="d-flex flex-column h-100" style="overflow-y: auto">
                  
                  
                  <div class="section border-0 card" data-region="view-overview-favourites">
                      <div id="view-overview-favourites-toggle" class="card-header p-0" data-region="toggle">
                          <button class="btn w-100 text-left p-3 d-flex align-items-center overview-section-toggle collapsed" data-toggle="collapse" data-target="#view-overview-favourites-target-674ea35030999674ea34e3623517" aria-expanded="false" aria-controls="view-overview-favourites-target-674ea35030999674ea34e3623517">
                              <span class="collapsed-icon-container">
                                  <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"></i>
                              </span>
                              <span class="expanded-icon-container">
                                  <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"></i>
                              </span>
                              <span class="">Starred</span>
                              <small class="hidden ml-1" data-region="section-total-count-container" aria-label=" total conversations">
                                  (<span data-region="section-total-count"></span>)
                              </small>
                              <span class="hidden ml-2" data-region="loading-icon-container">
                                  <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                              </span>
                              <span class="hidden badge badge-pill badge-primary ml-auto bg-primary" data-region="section-unread-count">
                                  
                              </span>
                          </button>
                      </div>
                                        <div class="collapse  lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="20678" id="view-overview-favourites-target-674ea35030999674ea34e3623517" aria-labelledby="view-overview-favourites-toggle" data-parent="#message-drawer-view-overview-container-674ea35030999674ea34e3623517">
                      
                      <div class="hidden text-center p-2" data-region="empty-message-container">
                                  <p class="text-muted mt-2">No starred conversations</p>

                      </div>
                      <div class="hidden list-group" data-region="content-container">
                          
                      </div>
                      <div class="list-group" data-region="placeholder-container">
                                  <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</div>

                      </div>
                      <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                          <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                      </div>
                  </div>
                  </div>
                  
                  
                  <div class="section border-0 card" data-region="view-overview-group-messages">
                      <div id="view-overview-group-messages-toggle" class="card-header p-0" data-region="toggle">
                          <button class="btn w-100 text-left p-3 d-flex align-items-center overview-section-toggle collapsed" data-toggle="collapse" data-target="#view-overview-group-messages-target-674ea35030999674ea34e3623517" aria-expanded="false" aria-controls="view-overview-group-messages-target-674ea35030999674ea34e3623517">
                              <span class="collapsed-icon-container">
                                  <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"></i>
                              </span>
                              <span class="expanded-icon-container">
                                  <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"></i>
                              </span>
                              <span class="">Group</span>
                              <small class="hidden ml-1" data-region="section-total-count-container" aria-label=" total conversations">
                                  (<span data-region="section-total-count"></span>)
                              </small>
                              <span class="hidden ml-2" data-region="loading-icon-container">
                                  <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                              </span>
                              <span class="hidden badge badge-pill badge-primary ml-auto bg-primary" data-region="section-unread-count">
                                  
                              </span>
                          </button>
                      </div>
                                        <div class="collapse  lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="20678" id="view-overview-group-messages-target-674ea35030999674ea34e3623517" aria-labelledby="view-overview-group-messages-toggle" data-parent="#message-drawer-view-overview-container-674ea35030999674ea34e3623517">
                      
                      <div class="hidden text-center p-2" data-region="empty-message-container">
                                  <p class="text-muted mt-2">No group conversations</p>

                      </div>
                      <div class="hidden list-group" data-region="content-container">
                          
                      </div>
                      <div class="list-group" data-region="placeholder-container">
                                  <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</div>

                      </div>
                      <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                          <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                      </div>
                  </div>
                  </div>
                  
                  
                  <div class="section border-0 card" data-region="view-overview-messages">
                      <div id="view-overview-messages-toggle" class="card-header p-0" data-region="toggle">
                          <button class="btn w-100 text-left p-3 d-flex align-items-center overview-section-toggle collapsed" data-toggle="collapse" data-target="#view-overview-messages-target-674ea35030999674ea34e3623517" aria-expanded="false" aria-controls="view-overview-messages-target-674ea35030999674ea34e3623517">
                              <span class="collapsed-icon-container">
                                  <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"></i>
                              </span>
                              <span class="expanded-icon-container">
                                  <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"></i>
                              </span>
                              <span class="">Private</span>
                              <small class="hidden ml-1" data-region="section-total-count-container" aria-label=" total conversations">
                                  (<span data-region="section-total-count"></span>)
                              </small>
                              <span class="hidden ml-2" data-region="loading-icon-container">
                                  <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                              </span>
                              <span class="hidden badge badge-pill badge-primary ml-auto bg-primary" data-region="section-unread-count">
                                  
                              </span>
                          </button>
                      </div>
                                        <div class="collapse  lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="20678" id="view-overview-messages-target-674ea35030999674ea34e3623517" aria-labelledby="view-overview-messages-toggle" data-parent="#message-drawer-view-overview-container-674ea35030999674ea34e3623517">
                      
                      <div class="hidden text-center p-2" data-region="empty-message-container">
                                  <p class="text-muted mt-2">No private conversations</p>

                      </div>
                      <div class="hidden list-group" data-region="content-container">
                          
                      </div>
                      <div class="list-group" data-region="placeholder-container">
                                  <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</div>

                      </div>
                      <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                          <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                      </div>
                  </div>
                  </div>
          </div>
      </div>
      
      <div data-region="view-search" aria-hidden="true" class="h-100 hidden" data-user-id="20678" data-users-offset="0" data-messages-offset="0" style="overflow-y: auto">
          <div class="hidden" data-region="search-results-container" style="overflow-y: auto">
              
              <div class="d-flex flex-column">
                  <div class="mb-3 bg-white" data-region="all-contacts-container">
                      <div data-region="contacts-container" class="pt-2">
                          <h4 class="h6 px-2">Contacts</h4>
                          <div class="list-group" data-region="list"></div>
                      </div>
                      <div data-region="non-contacts-container" class="pt-2 border-top">
                          <h4 class="h6 px-2">Non-contacts</h4>
                          <div class="list-group" data-region="list"></div>
                      </div>
                      <div class="text-right">
                          <button class="btn btn-link text-primary" data-action="load-more-users">
                              <span data-region="button-text">Load more</span>
                              <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                          </button>
                      </div>
                  </div>
                  <div class="bg-white" data-region="messages-container">
                      <h4 class="h6 px-2 pt-2">Messages</h4>
                      <div class="list-group" data-region="list"></div>
                      <div class="text-right">
                          <button class="btn btn-link text-primary" data-action="load-more-messages">
                              <span data-region="button-text">Load more</span>
                              <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                          </button>
                      </div>
                  </div>
                  <p class="hidden p-3 text-center" data-region="no-results-container">No results</p>
              </div>          </div>
          <div class="hidden" data-region="loading-placeholder">
              <div class="text-center pt-3 icon-size-4"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</div>
          </div>
          <div class="p-3 text-center" data-region="empty-message-container">
              <p>Search people and messages</p>
          </div>
      </div>    </div>
  </div>


  <div class="user_heading">
    <div class="wrap" data-region="header-container">
      
      <div class="hidden bg-white position-relative" aria-hidden="true" data-region="view-conversation">
          <div class="hidden" data-region="header-content"></div>
          <div class="hidden" data-region="header-edit-mode">
              
              <div class="d-flex p-2 align-items-center">
                  Messages selected:
                  <span class="ml-1" data-region="message-selected-court">1</span>
                  <button type="button" class="ml-auto close" aria-label="Cancel message selection" data-action="cancel-edit-mode">
                          <span aria-hidden="true">×</span>
                  </button>
              </div>
          </div>
          <div data-region="header-placeholder">
              <div class="d-flex">
                  <div class="ml-2 rounded-circle bg-pulse-grey align-self-center" style="height: 38px; width: 38px">
                  </div>
                  <div class="ml-2 " style="flex: 1">
                      <div class="mt-1 bg-pulse-grey w-75" style="height: 16px;">
                      </div>
                  </div>
                  <div class="ml-2 bg-pulse-grey align-self-center" style="height: 16px; width: 20px">
                  </div>
              </div>
          </div>
          <!--<div
              class="hidden position-absolute"
              data-region="confirm-dialogue-container"
              style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"
          ></div>-->
      </div>
      <div class="hidden px-2 py-3" aria-hidden="true" data-region="view-contacts">
          <div class="d-flex align-items-center">
              <div class="align-self-stretch">
                  <a class="h-100 d-flex align-items-center mr-2" href="#" data-route-back="" role="button">
                      <div class="icon-back-in-drawer">
                          <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                          <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                      </div>
                      <div class="icon-back-in-app">
                          <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"></i></span>
                      </div>
                  </a>
              </div>
              <div>
                  Contacts
              </div>
              <div class="ml-auto">
                  <a href="#" data-route="view-search" role="button" aria-label="Search">
                      <i class="icon fa fa-search fa-fw " aria-hidden="true"></i>
                  </a>
              </div>
          </div>
      </div>
      
      <div class="hidden px-2 py-3" aria-hidden="true" data-region="view-settings">
          <div class="d-flex align-items-center">
              <div class="align-self-stretch">
                  <a class="h-100 d-flex mr-2 align-items-center" href="#" data-route-back="" role="button">
                      <div class="icon-back-in-drawer">
                          <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                          <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                      </div>
                      <div class="icon-back-in-app">
                          <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"></i></span>
                      </div>
                  </a>
              </div>
              <div>
                  Settings
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="inbox_chatting_box">
    <div class="body-container position-relative" data-region="body-container" data-ccnheight="0">
      
      <div class="hidden" data-region="view-contact" aria-hidden="true">
          <div class="p-2 pt-3" data-region="content-container"></div>
      </div>      <div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="20678">
          <div class="d-flex flex-column h-100">
              <div class="mb10 ui_kit_tab">
                  <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                          <a id="contacts-tab-674ea35030999674ea34e3623517" class="nav-link active" href="#contacts-tab-panel-674ea35030999674ea34e3623517" data-toggle="tab" data-action="show-contacts-section" role="tab" aria-controls="contacts-tab-panel-674ea35030999674ea34e3623517" aria-selected="true">
                              Contacts
                          </a>
                      </li>
                      <li class="nav-item">
                          <a id="requests-tab-674ea35030999674ea34e3623517" class="nav-link" href="#requests-tab-panel-674ea35030999674ea34e3623517" data-toggle="tab" data-action="show-requests-section" role="tab" aria-controls="requests-tab-panel-674ea35030999674ea34e3623517" aria-selected="false">
                              Requests
                              <span class="badge bg-primary ml-2 hidden" data-region="contact-request-count" aria-label="There are 0 pending contact requests">
                                  0
                              </span>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="tab-content d-flex flex-column h-100">
                        <div class="tab-pane fade show active h-100 lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="20678" id="contacts-tab-panel-674ea35030999674ea34e3623517" data-section="contacts" role="tabpanel" aria-labelledby="contacts-tab-674ea35030999674ea34e3623517">
          
          <div class="hidden text-center p-2" data-region="empty-message-container">
              No contacts
          </div>
          <div class="hidden list-group" data-region="content-container">
              
          </div>
          <div class="list-group" data-region="placeholder-container">
              
          </div>
          <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
              <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
          </div>
      </div>
      
                        <div class="tab-pane fade h-100 lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="20678" id="requests-tab-panel-674ea35030999674ea34e3623517" data-section="requests" role="tabpanel" aria-labelledby="requests-tab-674ea35030999674ea34e3623517">
          
          <div class="hidden text-center p-2" data-region="empty-message-container">
              No contact requests
          </div>
          <div class="hidden list-group" data-region="content-container">
              
          </div>
          <div class="list-group" data-region="placeholder-container">
              
          </div>
          <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
              <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
          </div>
      </div>
              </div>
          </div>
      </div>
      
      <div class="view-conversation hidden h-100" aria-hidden="true" data-region="view-conversation" data-user-id="20678" data-midnight="1733158800" data-message-poll-min="10" data-message-poll-max="120" data-message-poll-after-max="300" style="overflow-y: auto; overflow-x: hidden">
          <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
              <div class="content-message-container hidden" data-region="content-message-container" role="log">
                  <div class="py-3 bg-light sticky-top z-index-1 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
                      <p class="m-0">Contact request sent</p>
                      <p class="font-italic font-weight-light" data-region="text"></p>
                  </div>
                  <div class="p-3 bg-light text-center hidden" data-region="self-conversation-message-container">
                      <p class="m-0">Personal space</p>
                      <p class="font-italic font-weight-light" data-region="text">Save draft messages, links, notes etc. to access later.</p>
                 </div>
                  <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</div>
              </div>
              <div class="p-4 w-100 h-100 hidden position-absolute ccn-message-drawer--confirm-dialog" data-region="confirm-dialogue-container">
                  
                  <div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
                      <h3 class="h6 hidden" data-region="dialogue-header"></h3>
                      <p class="text-muted" data-region="dialogue-text"></p>
                      <div class="mb-2 hidden" data-region="delete-messages-for-all-users-toggle-container">
                          <label class="custom-control-label ml-2 text-muted">
                              <input type="checkbox" data-region="delete-messages-for-all-users-toggle">
                              Delete for me and for everyone else
                          </label>
                      </div>
                      <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-block">
                          <span data-region="dialogue-button-text">Block</span>
                          <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                      </button>
                      <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-unblock">
                          <span data-region="dialogue-button-text">Unblock</span>
                          <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                      </button>
                      <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-remove-contact">
                          <span data-region="dialogue-button-text">Remove</span>
                          <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                      </button>
                      <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-add-contact">
                          <span data-region="dialogue-button-text">Add</span>
                          <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                      </button>
                      <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-selected-messages">
                          <span data-region="dialogue-button-text">Delete</span>
                          <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                      </button>
                      <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-conversation">
                          <span data-region="dialogue-button-text">Delete</span>
                          <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                      </button>
                      <button type="button" class="btn btn-primary btn-block hidden" data-action="request-add-contact">
                          <span data-region="dialogue-button-text">Send contact request</span>
                          <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                      </button>
                      <button type="button" class="btn btn-primary btn-block hidden" data-action="accept-contact-request">
                          <span data-region="dialogue-button-text">Accept and add to contacts</span>
                          <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                      </button>
                      <button type="button" class="btn btn-secondary btn-block hidden" data-action="decline-contact-request">
                          <span data-region="dialogue-button-text">Decline</span>
                          <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                      </button>
                      <button type="button" class="btn btn-secondary btn-block" data-action="cancel-confirm">Cancel</button>
                  </div>
              </div>
              <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
                  <div class="h-100 d-flex flex-column">
                      <div class="px-2 pb-2 pt-0 bg-light h-100" style="overflow-y: auto">
                          <div class="mt-4">
                              <div class="mb-4">
                                  <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                          </div>                          <div class="mt-4">
                              <div class="mb-4">
                                  <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                          </div>                          <div class="mt-4">
                              <div class="mb-4">
                                  <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                          </div>                          <div class="mt-4">
                              <div class="mb-4">
                                  <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                          </div>                          <div class="mt-4">
                              <div class="mb-4">
                                  <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                              <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                  <div class="d-flex align-items-center mb-2">
                                      <div class="mr-2">
                                          <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                      </div>
                                      <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                      <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                  </div>
                                  <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                  <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                              </div>
                          </div>                      </div>
                  </div>              </div>
          </div>
      </div>
      
      <div class="hidden" aria-hidden="true" data-region="view-group-info">
          <div class="pt-3 h-100 d-flex flex-column" data-region="group-info-content-container" style="overflow-y: auto"></div>
      </div>      
      <div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
          <div class="hidden" data-region="content-container">
              
              <div data-region="settings" class="p-3">
                  <h3 class="h6 font-weight-bold">Privacy</h3>
                  <p>You can restrict who can message you</p>
                  <div data-preference="blocknoncontacts" class="mb-3">
                          <div class="custom-control custom-radio mb-2">
                              <input type="radio" name="message_blocknoncontacts" class="custom-control-input" id="block-noncontacts-674ea35030999674ea34e3623517-1" value="1">
                              <label class="custom-control-label ml-2" for="block-noncontacts-674ea35030999674ea34e3623517-1">
                                  My contacts only
                              </label>
                          </div>
                          <div class="custom-control custom-radio mb-2">
                              <input type="radio" name="message_blocknoncontacts" class="custom-control-input" id="block-noncontacts-674ea35030999674ea34e3623517-0" value="0">
                              <label class="custom-control-label ml-2" for="block-noncontacts-674ea35030999674ea34e3623517-0">
                                  My contacts and anyone in my courses
                              </label>
                          </div>
                          <div class="custom-control custom-radio mb-2">
                              <input type="radio" name="message_blocknoncontacts" class="custom-control-input" id="block-noncontacts-674ea35030999674ea34e3623517-2" value="2">
                              <label class="custom-control-label ml-2" for="block-noncontacts-674ea35030999674ea34e3623517-2">
                                  Anyone on the site
                              </label>
                          </div>
                  </div>
              
                  <div class="hidden" data-region="notification-preference-container">
                      <h3 class="mb-2 mt-4 h6 font-weight-bold">Notification preferences</h3>
                  </div>
              
                  <h3 class="mb-2 mt-4 h6 font-weight-bold">General</h3>
                  <div data-preference="entertosend">
                      <span class="switch">
                          <input type="checkbox" id="enter-to-send-674ea35030999674ea34e3623517" checked="">
                          <label for="enter-to-send-674ea35030999674ea34e3623517">
                              Use enter to send
                          </label>
                      </span>
                  </div>
              </div>
          </div>
          <div data-region="placeholder-container">
              
              <div class="d-flex flex-column p-3">
                  <div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
                  <div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
                  <div class="mb-3">
                      <div class="w-100 d-flex mb-3">
                          <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                          <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                      </div>
                      <div class="w-100 d-flex mb-3">
                          <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                          <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                      </div>
                      <div class="w-100 d-flex mb-3">
                          <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                          <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                      </div>
                  </div>
                  <div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                  <div class="mb-4">
                      <div class="w-100 d-flex mb-2 align-items-center">
                          <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                          <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                      </div>
                      <div class="w-100 d-flex mb-2 align-items-center">
                          <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                          <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                      </div>
                  </div>
                  <div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                  <div class="mb-3">
                      <div class="w-100 d-flex mb-2 align-items-center">
                          <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                          <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                      </div>
                  </div>
              </div>          </div>
      </div>    </div>
  </div>
  <div class="footer-container" data-region="footer-container">
    
    <div class="message_input">
    <div class="hidden position-relative" aria-hidden="true" data-region="view-conversation" data-enter-to-send="1">
        <div class="hidden " data-region="content-messages-footer-container">
            
            
              <div class="form-inline">
                <textarea dir="auto" data-region="send-message-txt" class="form-control" rows="3" data-auto-rows="" data-min-rows="3" data-max-rows="5" role="textbox" aria-label="Write a message..." placeholder="Write a message..." style="resize: none" spellcheck="false" data-ms-editor="true"></textarea>
            
                <button class="btn" aria-label="Send message" data-action="send-message">
                  <span data-region="send-icon-container"><span class="flaticon-paper-plane"></span></span>
                  <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                </button>
              </div>
        </div>
        <div class="hidden " data-region="content-messages-footer-edit-mode-container">
            
            <div class="d-flex p-3 justify-content-end">
                <button class="btn btn-link btn-icon my-1 icon-size-4" data-action="delete-selected-messages" data-toggle="tooltip" data-placement="top" title="Delete selected messages">
                    <span data-region="icon-container"><i class="icon fa ccn-flaticon-trash fa-fw " aria-hidden="true"></i></span>
                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                    <span class="sr-only">Delete selected messages</span>
                </button>
            </div>        </div>
        <div class="hidden " data-region="content-messages-footer-require-contact-container">
            
            <div class="p-3 bg-white">
                <p data-region="title"></p>
                <p class="text-muted" data-region="text"></p>
                <button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
                    <span data-region="dialogue-button-text">Send contact request</span>
                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                </button>
            </div>
        </div>
        <div class="hidden " data-region="content-messages-footer-require-unblock-container">
            
            <div class="p-3 bg-white">
                <p class="text-muted" data-region="text">You have blocked this user.</p>
                <button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
                    <span data-region="dialogue-button-text">Unblock user</span>
                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
                </button>
            </div>
        </div>
        <div class="hidden " data-region="content-messages-footer-unable-to-message">
            
            <div class="p-3 bg-white">
                <p class="text-muted" data-region="text">You are unable to message this user</p>
            </div>
        </div>
        <div class="" data-region="placeholder-container">
            <div class="d-flex">
                <div class="bg-pulse-grey w-100" style="height: 80px"></div>
                <div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
            </div>        </div>
        <!--<div
            class="hidden position-absolute"
            data-region="confirm-dialogue-container"
            style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"
        ></div>-->
    </div>
    </div>
        <div data-region="view-overview" class="text-center">
            <a class="btn dbxshad btn-md btn-thm3 rounded btn-block" href="https://leads.upnvj.ac.id/message/index.php">
                See all
            </a>
        </div>
  </div>

</div>

</div>
<div></div>
</body>