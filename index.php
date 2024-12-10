<?php
session_start(); // Memulai session

// Cek apakah ada pesan kesalahan di session
if (isset($_SESSION['login_error'])) {
    $error_message = $_SESSION['login_error'];
    unset($_SESSION['login_error']); // Hapus pesan kesalahan setelah ditampilkan
}

if (isset($_SESSION['username'])) {
    // Jika sudah login, redirect ke halaman sesuai role mereka
    switch ($_SESSION['role']) {
        case 'mahasiswa':
            header("Location: views/home_mahasiswa.php"); // Halaman untuk mahasiswa
            exit();
        case 'dosen':
            header("Location: views/home_dosen.php"); // Halaman untuk dosen
            exit();
        case 'admin':
            header("Location: views/home_admin.php"); // Halaman untuk admin
            exit();
        default:
            // Jika role tidak dikenali, logout dan redirect ke index
            session_destroy(); // Hapus session
            header("Location: ../index.php");
            exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style data-merge-styles="true"></style>
        <style data-merge-styles="true"></style>
        <style data-merge-styles="true"></style>
        <title>LeADS UPN Veteran Jakarta</title>
        <link rel="shortcut icon" href="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/favicon/1644289115/favicon%20leads.png">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="leads, leads.upnvj">
        <link rel="stylesheet" type="text/css" href="https://leads.upnvj.ac.id/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css">
        
        <script async="" src="https://spada.kemdikbud.go.id/moodle/plugin.js?version=3.4&amp;www=https%3A%2F%2Fleads.upnvj.ac.id&amp;location=https%253A%252F%252Fleads.upnvj.ac.id%252Flogin%252Findex.php&amp;data=3JXWytbU3dzF3NOHrYuDn5LNxdTd3MXc04eti4OfksbRwtLahqmQh5%2BLyteSm5Te&amp;ids=2a4yri&amp;id=6af78322-39b6-3e69-9442-04334b314611"></script>
        
        <script charset="utf-8" id="yui_3_17_2_1_1732981145488_8" src="https://leads.upnvj.ac.id/theme/yui_combo.php?m/1635748127/core/event/event-min.js&amp;m/1635748127/filter_mathjaxloader/loader/loader-min.js" async=""></script>
        
        <script charset="utf-8" id="yui_3_17_2_1_1732981145488_19" src="https://leads.upnvj.ac.id/theme/yui_combo.php?3.17.2/event-mousewheel/event-mousewheel-min.js&amp;3.17.2/event-resize/event-resize-min.js&amp;3.17.2/event-hover/event-hover-min.js&amp;3.17.2/event-touch/event-touch-min.js&amp;3.17.2/event-move/event-move-min.js&amp;3.17.2/event-flick/event-flick-min.js&amp;3.17.2/event-valuechange/event-valuechange-min.js&amp;3.17.2/event-tap/event-tap-min.js" async=""></script>
        
        <script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script>
        
        <link rel="stylesheet" type="text/css" href="https://leads.upnvj.ac.id/theme/styles.php/edumy/1644289115_1629149383/all">
        
        <script>
            //<![CDATA[
            var M = {};
            M.yui = {};
            M.pageloadstarttime = new Date();
            M.cfg = {
                "wwwroot": "https:\/\/leads.upnvj.ac.id",
                "sesskey": "6ycY2xIlwA",
                "sessiontimeout": "28800",
                "sessiontimeoutwarning": 1200,
                "themerev": "1644289115",
                "slasharguments": 1,
                "theme": "edumy",
                "iconsystemmodule": "core\/icon_system_fontawesome",
                "jsrev": "1635748127",
                "admin": "admin",
                "svgicons": true,
                "usertimezone": "Asia\/Jakarta",
                "contextid": 1,
                "langrev": 1635748127,
                "templaterev": "1635748127"
            };
            
            var yui1ConfigFn = function(me) {
                if (/-skin|reset|fonts|grids|base/.test(me.name)) {
                    me.type = 'css';
                    me.path = me.path.replace(/\.js/, '.css');
                    me.path = me.path.replace(/\/yui2-skin/, '/assets/skins/sam/yui2-skin');
                }
            };
            
            var yui2ConfigFn = function(me) {
                var parts = me.name.replace(/^moodle-/, '').split('-'),
                    component = parts.shift(),
                    module = parts[0],
                    min = '-min';
                    
            if (/-skin|core$/.test(me.name)) {
                parts.pop();
                me.type = 'css';
                min = '';
            }
            if (module) {
                var filename = parts.join('-');
                me.path = component + '/' + module + '/' + filename + min + '.' + me.type;
            } else {
                me.path = component + '/' + component + '.' + me.type;
            }
        };
        
        YUI_config = {
            "debug": false,
            "base": "https:\/\/leads.upnvj.ac.id\/lib\/yuilib\/3.17.2\/",
            "comboBase": "https:\/\/leads.upnvj.ac.id\/theme\/yui_combo.php?",
            "combine": true,
            "filter": null,
            "insertBefore": "firstthemesheet",
            "groups": {
                "yui2": {
                    "base": "https:\/\/leads.upnvj.ac.id\/lib\/yuilib\/2in3\/2.9.0\/build\/",
                    "comboBase": "https:\/\/leads.upnvj.ac.id\/theme\/yui_combo.php?",
                    "combine": true,
                    "ext": false,
                    "root": "2in3\/2.9.0\/build\/",
                    "patterns": {
                        "yui2-": {
                            "group": "yui2",
                            "configFn": yui1ConfigFn
                        }
                    }
                },
                "moodle": {
                    "name": "moodle",
                    "base": "https:\/\/leads.upnvj.ac.id\/theme\/yui_combo.php?m\/1635748127\/",
                    "combine": true,
                    "comboBase": "https:\/\/leads.upnvj.ac.id\/theme\/yui_combo.php?",
                    "ext": false,
                    "root": "m\/1635748127\/",
                    "patterns": {
                        "moodle-": {
                            "group": "moodle",
                            "configFn": yui2ConfigFn
                        }
                    },
                    "filter": null,
                    "modules": {
                        "moodle-core-formchangechecker": {
                            "requires": ["base", "event-focus", "moodle-core-event"]
                        },
                        "moodle-core-languninstallconfirm": {
                            "requires": ["base", "node", "moodle-core-notification-confirm", "moodle-core-notification-alert"]
                        },
                        "moodle-core-actionmenu": {
                            "requires": ["base", "event", "node-event-simulate"]
                        },
                        "moodle-core-event": {
                            "requires": ["event-custom"]
                        },
                        "moodle-core-lockscroll": {
                            "requires": ["plugin", "base-build"]
                        },
                        "moodle-core-notification": {
                            "requires": ["moodle-core-notification-dialogue", "moodle-core-notification-alert", "moodle-core-notification-confirm", "moodle-core-notification-exception", "moodle-core-notification-ajaxexception"]
                        },
                        "moodle-core-notification-dialogue": {
                            "requires": ["base", "node", "panel", "escape", "event-key", "dd-plugin", "moodle-core-widget-focusafterclose", "moodle-core-lockscroll"]
                        },
                        "moodle-core-notification-alert": {
                            "requires": ["moodle-core-notification-dialogue"]
                        },
                        "moodle-core-notification-confirm": {
                            "requires": ["moodle-core-notification-dialogue"]
                        },
                        "moodle-core-notification-exception": {
                            "requires": ["moodle-core-notification-dialogue"]
                        },
                        "moodle-core-notification-ajaxexception": {
                            "requires": ["moodle-core-notification-dialogue"]
                        },
                        "moodle-core-popuphelp": {
                            "requires": ["moodle-core-tooltip"]
                        },
                        "moodle-core-blocks": {
                            "requires": ["base", "node", "io", "dom", "dd", "dd-scroll", "moodle-core-dragdrop", "moodle-core-notification"]
                        },
                        "moodle-core-maintenancemodetimer": {
                            "requires": ["base", "node"]
                        },
                        "moodle-core-dragdrop": {
                            "requires": ["base", "node", "io", "dom", "dd", "event-key", "event-focus", "moodle-core-notification"]
                        },
                        "moodle-core-tooltip": {
                            "requires": ["base", "node", "io-base", "moodle-core-notification-dialogue", "json-parse", "widget-position", "widget-position-align", "event-outside", "cache-base"]
                        },
                        "moodle-core-chooserdialogue": {
                            "requires": ["base", "panel", "moodle-core-notification"]
                        },
                        "moodle-core-handlebars": {
                            "condition": {
                                "trigger": "handlebars",
                                "when": "after"
                            }
                        },
                        "moodle-core_availability-form": {
                            "requires": ["base", "node", "event", "event-delegate", "panel", "moodle-core-notification-dialogue", "json"]
                        },
                        "moodle-backup-backupselectall": {
                            "requires": ["node", "event", "node-event-simulate", "anim"]
                        },
                        "moodle-backup-confirmcancel": {
                            "requires": ["node", "node-event-simulate", "moodle-core-notification-confirm"]
                        },
                        "moodle-course-management": {
                            "requires": ["base", "node", "io-base", "moodle-core-notification-exception", "json-parse", "dd-constrain", "dd-proxy", "dd-drop", "dd-delegate", "node-event-delegate"]
                        },
                        "moodle-course-categoryexpander": {
                            "requires": ["node", "event-key"]
                        },
                        "moodle-course-util": {
                            "requires": ["node"],
                            "use": ["moodle-course-util-base"],
                            "submodules": {
                                "moodle-course-util-base": {},
                                "moodle-course-util-section": {
                                    "requires": ["node", "moodle-course-util-base"]
                                },
                                "moodle-course-util-cm": {
                                    "requires": ["node", "moodle-course-util-base"]
                                }
                            }
                        },
                        "moodle-course-formatchooser": {
                            "requires": ["base", "node", "node-event-simulate"]
                        },
                        "moodle-course-dragdrop": {
                            "requires": ["base", "node", "io", "dom", "dd", "dd-scroll", "moodle-core-dragdrop", "moodle-core-notification", "moodle-course-coursebase", "moodle-course-util"]
                        },
                        "moodle-form-shortforms": {
                            "requires": ["node", "base", "selector-css3", "moodle-core-event"]
                        },
                        "moodle-form-passwordunmask": {
                            "requires": []
                        },
                        "moodle-form-dateselector": {
                            "requires": ["base", "node", "overlay", "calendar"]
                        },
                        "moodle-question-chooser": {
                            "requires": ["moodle-core-chooserdialogue"]
                        },
                        "moodle-question-searchform": {
                            "requires": ["base", "node"]
                        },
                        "moodle-question-preview": {
                            "requires": ["base", "dom", "event-delegate", "event-key", "core_question_engine"]
                        },
                        "moodle-availability_completion-form": {
                            "requires": ["base", "node", "event", "moodle-core_availability-form"]
                        },
                        "moodle-availability_date-form": {
                            "requires": ["base", "node", "event", "io", "moodle-core_availability-form"]
                        },
                        "moodle-availability_grade-form": {
                            "requires": ["base", "node", "event", "moodle-core_availability-form"]
                        },
                        "moodle-availability_group-form": {
                            "requires": ["base", "node", "event", "moodle-core_availability-form"]
                        },
                        "moodle-availability_grouping-form": {
                            "requires": ["base", "node", "event", "moodle-core_availability-form"]
                        },
                        "moodle-availability_profile-form": {
                            "requires": ["base", "node", "event", "moodle-core_availability-form"]
                        },
                        "moodle-mod_assign-history": {
                            "requires": ["node", "transition"]
                        },
                        "moodle-mod_attendance-groupfilter": {
                            "requires": ["base", "node"]
                        },
                        "moodle-mod_customcert-rearrange": {
                            "requires": ["dd-delegate", "dd-drag"]
                        },
                        "moodle-mod_quiz-modform": {
                            "requires": ["base", "node", "event"]
                        },
                        "moodle-mod_quiz-quizbase": {
                            "requires": ["base", "node"]
                        },
                        "moodle-mod_quiz-util": {
                            "requires": ["node", "moodle-core-actionmenu"],
                            "use": ["moodle-mod_quiz-util-base"],
                            "submodules": {
                                "moodle-mod_quiz-util-base": {},
                                "moodle-mod_quiz-util-slot": {
                                    "requires": ["node", "moodle-mod_quiz-util-base"]
                                },
                                "moodle-mod_quiz-util-page": {
                                    "requires": ["node", "moodle-mod_quiz-util-base"]
                                }
                            }
                        },
                        "moodle-mod_quiz-dragdrop": {
                            "requires": ["base", "node", "io", "dom", "dd", "dd-scroll", "moodle-core-dragdrop", "moodle-core-notification", "moodle-mod_quiz-quizbase", "moodle-mod_quiz-util-base", "moodle-mod_quiz-util-page", "moodle-mod_quiz-util-slot", "moodle-course-util"]
                        },
                        "moodle-mod_quiz-questionchooser": {
                            "requires": ["moodle-core-chooserdialogue", "moodle-mod_quiz-util", "querystring-parse"]
                        },
                        "moodle-mod_quiz-toolboxes": {
                            "requires": ["base", "node", "event", "event-key", "io", "moodle-mod_quiz-quizbase", "moodle-mod_quiz-util-slot", "moodle-core-notification-ajaxexception"]
                        },
                        "moodle-mod_quiz-autosave": {
                            "requires": ["base", "node", "event", "event-valuechange", "node-event-delegate", "io-form"]
                        },
                        "moodle-message_airnotifier-toolboxes": {
                            "requires": ["base", "node", "io"]
                        },
                        "moodle-block_xp-notification": {
                            "requires": ["base", "node", "handlebars", "button-plugin", "moodle-core-notification-dialogue"]
                        },
                        "moodle-block_xp-filters": {
                            "requires": ["base", "node", "moodle-core-dragdrop", "moodle-core-notification-confirm", "moodle-block_xp-rulepicker"]
                        },
                        "moodle-block_xp-rulepicker": {
                            "requires": ["base", "node", "handlebars", "moodle-core-notification-dialogue"]
                        },
                        "moodle-filter_glossary-autolinker": {
                            "requires": ["base", "node", "io-base", "json-parse", "event-delegate", "overlay", "moodle-core-event", "moodle-core-notification-alert", "moodle-core-notification-exception", "moodle-core-notification-ajaxexception"]
                        },
                        "moodle-filter_mathjaxloader-loader": {
                            "requires": ["moodle-core-event"]
                        },
                        "moodle-editor_atto-rangy": {
                            "requires": []
                        },
                        "moodle-editor_atto-editor": {
                            "requires": ["node", "transition", "io", "overlay", "escape", "event", "event-simulate", "event-custom", "node-event-html5", "node-event-simulate", "yui-throttle", "moodle-core-notification-dialogue", "moodle-core-notification-confirm", "moodle-editor_atto-rangy", "handlebars", "timers", "querystring-stringify"]
                        },
                        "moodle-editor_atto-plugin": {
                            "requires": ["node", "base", "escape", "event", "event-outside", "handlebars", "event-custom", "timers", "moodle-editor_atto-menu"]
                        },
                        "moodle-editor_atto-menu": {
                            "requires": ["moodle-core-notification-dialogue", "node", "event", "event-custom"]
                        },
                        "moodle-report_eventlist-eventfilter": {
                            "requires": ["base", "event", "node", "node-event-delegate", "datatable", "autocomplete", "autocomplete-filters"]
                        },
                        "moodle-report_loglive-fetchlogs": {
                            "requires": ["base", "event", "node", "io", "node-event-delegate"]
                        },
                        "moodle-report_overviewstats-charts": {
                            "requires": ["base", "node", "charts", "charts-legend"]
                        },
                        "moodle-gradereport_grader-gradereporttable": {
                            "requires": ["base", "node", "event", "handlebars", "overlay", "event-hover"]
                        },
                        "moodle-gradereport_history-userselector": {
                            "requires": ["escape", "event-delegate", "event-key", "handlebars", "io-base", "json-parse", "moodle-core-notification-dialogue"]
                        },
                        "moodle-tool_capability-search": {
                            "requires": ["base", "node"]
                        },
                        "moodle-tool_lp-dragdrop-reorder": {
                            "requires": ["moodle-core-dragdrop"]
                        },
                        "moodle-tool_monitor-notification": {
                            "requires": ["base", "node", "event", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-table": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-filter": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-export": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-graph": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-graph-filter": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-graph-export": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-graph-table": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-graph-table-filter": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-graph-table-export": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-graph-table-graph": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-graph-table-graph-filter": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        },
                        "moodle-tool_monitor-logs-graph-table-graph-export": {
                            "requires": ["base", "node", "event", "io", "moodle-core-notification"]
                        }
                    }
                }
            }
        };

        YUI().use('node', 'io', 'event', function(Y) {
            // Your custom code here
            console.log('YUI is ready to use!');
        });
    </script>
</head>

<body id="page-login-index" class="format-site path-login chrome dir-ltr lang-en">
     <header class="ccnHeader9 header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu scroll-to-fixed-fixed slideIn animated" style="z-index: 1000; position: fixed; top: 0px; margin-left: 0px; width: 1365px; left: 0px;">
        <div class="container-fluid">
            <!-- Ace Responsive Menu -->
            <nav>
                <!-- Menu Toggle btn-->
                <div class="menu-toggle" style="display: none;">
                    <img class="nav_logo_img img-fluid" src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="LeADS">
                    <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="#" class="navbar_brand float-left dn-smd">
                    <img class="logo1 img-fluid" src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="LeADS">
                    <img class="logo2 img-fluid" src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo2/1644289115/leads%20poppins%20dark.png" alt="LeADS">
                </a>
                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                    <li class=""><a class="ccn-menu-item" href="#">Home</a></li>
                    <li class=""><a class="ccn-menu-item" href="#">Faculty</a>
                        <ul class="sub-menu">
                            <li class=""><a class="ccn-menu-item" href="#">Economics and Business</a></li>
                            <li class=""><a class="ccn-menu-item" href="#">Medicine</a></li>
                            <li class=""><a class="ccn-menu-item" href="#">Engineering</a></li>
                            <li class=""><a class="ccn-menu-item" href="#">Social and Political Science</a></li>
                            <li class=""><a class="ccn-menu-item" href="#">Computer Science</a></li>
                            <li class=""><a class="ccn-menu-item" href="#">Law</a></li>
                            <li class=""><a class="ccn-menu-item" href="#">Health Science</a></li>
                            <li class=""><a class="ccn-menu-item" href="#">University Courses</a></li>
                            <li class=""><a class="ccn-menu-item" href="#">All Course</a></li>
                        </ul>
                    </li>
                    <li class=""><a class="ccn-menu-item" href="#">Announcements</a></li>
                    <li class=""><a class="ccn-menu-item" href="#">Helpdesk<span class=" "></span></a>
                        <ul class="sub-menu">
                            <li class=""><a class="ccn-menu-item" href="#">Guide for Lecture</a></li>
                            <li class=""><a class="ccn-menu-item" href="#">Guide for Student</a></li>
                            <li class=""><a class="ccn-menu-item" href="#">Guidebook</a></li>
                            <li class=""><a class="ccn-menu-item" href="#">FAQ</a></li>
                        </ul>
                    </li>
                    <li class=""><a class="ccn-menu-item" title="Language" href="#">English ‎(en)‎<span class=" "></span></a>
                        <ul class="sub-menu">
                            <li class=""><a class="ccn-menu-item" title="English ‎(en)‎" href="#">English ‎(en)‎</a></li>
                            <li class=""><a class="ccn-menu-item" title="Indonesian ‎(id)‎" href="#">Indonesian ‎(id)‎</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="sign_up_btn pull-right dn-smd mt20">
                    <li class="list-inline-item list_s">
                        <a href="#" class="btn flaticon-user" data-toggle="modal" data-target="#exampleModalCenter"> 
                            <span class="dn-lg">Login/Register</span>
                        </a>
                    </li>
                    <li class="list-inline-item list_s">
                        <div class="search_overlay">
                            <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                                <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                            </a>
                        </div>
                    </li>
                </ul><!-- Button trigger modal -->
            </nav>
        </div>
    </header>
        <nav id="menu" class="stylehome1 mm-menu mm-menu_offcanvas" aria-hidden="true">
        <div class="mm-panels">
            <div id="mm-1" class="mm-panel mm-panel_opened">
                <div class="mm-navbar mm-navbar_sticky">
                    <a class="mm-navbar__title"><span>Menu</span></a>
                </div>
                <ul class="mm-listview">
                    <li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="#">Home</a></li>
                    <li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="#">Faculty</a></li>
                    <li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="#">Announcements</a></li>
                    <li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" href="#">Helpdesk</a></li>
                    <li class="mm-listitem"><a class="ccn-menu-item mm-listitem__text" title="Language" href="#">English ‎(en)‎</a></li>
                    <li class="mm-listitem"><a href="#" class="mm-listitem__text"><span class="ccn-flaticon-user"></span> Login</a></li>
                    <li class="ccn_mob_menu_iconed mm-listitem"><a href="mailto:leads@upnvj.ac.id" class="mm-listitem__text"><i class="flaticon-paper-plane"></i> leads@upnvj.ac.id</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="inner_page_breadcrumb ccn_breadcrumb_default">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">LeADS UPN Veteran Jakarta</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="https://leads.upnvj.ac.id/">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Log in to the site</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-log bgc-fa">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 offset-lg-3">
                    <div class="login_form inner_page">
                        <div class="heading">
                            <h3 class="text-center">Login to your account</h3>
                        </div>
                        
                        <!-- REI NOTIF -->
                        <?php if (isset($error_message)): ?>
                            <div class="loginerrors mt-3">
                                <a href="#" id="loginerrormessage" class="accesshide"><?php echo $error_message; ?></a>
                                <div class="alert alert-danger" role="alert"><?php echo $error_message; ?></div>
                            </div>
                        <?php endif; ?>

                        <!-- REI LOGIN -->
                        <form action="./proses_login.php" method="post" id="login">
                            <input id="anchor" type="hidden" name="anchor" value="">
                            <input type="hidden" name="logintoken" value="TuMPS6YpeoQuTtOsZGLlRHiMiG2nDaVE">
                            <div class="form-group">
                                <label for="username" class="sr-only">Username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" autocomplete="username">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="current-password">
                            </div>
                            <div class="form-group custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="rememberusername1" id="rememberusername1" value="1">
                                <label class="custom-control-label" for="rememberusername1">Remember username</label>
                                <a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn btn-log btn-block btn-thm2" id="loginbtn">Log in</button>
                        </form>

                        <div class="mt-3">
                            Cookies must be enabled in your browser
                            <a class="btn btn-link p-0" role="button" data-container="body" data-toggle="popover" data-placement="right" data-content="<div class=&quot;no-overflow&quot;><p>Two cookies are used on this site:</p>
                            <p>The essential one is the session cookie, usually called MoodleSession. You must allow this cookie in your browser to provide continuity and to remain logged in when browsing the site. When you log out or close the browser, this cookie is destroyed (in your browser and on the server).</p>
                            <p>The other cookie is purely for convenience, usually called MOODLEID or similar. It just remembers your username in the browser. This means that when you return to this site, the username field on the login page is already filled in for you. It is safe to refuse this cookie - you will just have to retype your username each time you log in.</p>
                            </div>" data-html="true" tabindex="0" data-trigger="focus">
                                <i class="icon fa ccn-flaticon-info text-info fa-fw" title="Help with Cookies must be enabled in your browser" aria-label="Help with Cookies must be enabled in your browser"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <section class="footer_one">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                        <div class="footer_contact_widget">
                            <h4>Contact</h4>
                            <p>Universitas Pembangunan Nasional Veteran Jakarta</p>
                            <p>Jl. RS. Fatmawati, Pondok Labu, Jakarta Selatan, DKI Jakarta. 12450.</p>
                            <p>+6221-765 6971</p>
                            <p>elearning@upnvj.ac.id</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                        <div class="footer_company_widget">
                            <h4>University</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Portal UPNVJ</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                        <div class="footer_program_widget">
                            <h4>Faculty</h4>
                            <ul class="list-unstyled">
                                <li><a href="#" >Economics and Business</a></li>
                                <li><a href="#" >Medicine</a></li>
                                <li><a href="#" >Engineering</a></li>
                                <li><a href="#" >Social and Political Science</a></li>
                                <li><a href="#" >Computer Science</a></li>
                                <li><a href="#" >Law</a></li>
                                <li><a href="#" >Health Science</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                        <div class="footer_support_widget">
                            <h4>Learning Resources</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Library</a></li>
                                <li><a href="#">Journal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="footer_apps_widget">
                            <h4>Get Mobile Moodle</h4>
                            <div class="app_grid">
                                <button class="apple_btn btn-dark">
                                    <span class="icon">
                                        <span class="flaticon-apple"></span>
                                    </span>
                                    <span class="title">App Store</span>
                                    <span class="subtitle">Available now on the</span>
                                </button>
                                <button class="play_store_btn btn-dark">
                                    <span class="icon">
                                        <span class="flaticon-google-play"></span>
                                    </span>
                                    <span class="title">Google Play</span>
                                    <span class="subtitle">Get it on</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer_middle_area p0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3 col-lg-3 col-xl-3 pb15 pt15">
                        <div class="logo-widget">
                            <img class="img-fluid" src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/footerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="LeADS">
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 text-center pb25 pt25">
                        <div class="footer_menu_widget">
                            <ul class="list-unstyled">
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 pb15 pt15">
                        <div class="footer_social_widget mt15">
                            <ul>
                                <!-- Social media links can be added here -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer_bottom_area pt25 pb25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="copyright-widget text-center">
                            <p>Copyright © 2021 UPN Veteran Jakarta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script src="https://leads.upnvj.ac.id/lib/javascript.php/1635748127/lib/babel-polyfill/polyfill.min.js"></script>
    <script src="https://leads.upnvj.ac.id/lib/javascript.php/1635748127/lib/polyfills/polyfill.js"></script>
    <script src="https://leads.upnvj.ac.id/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script>
    <script src="https://leads.upnvj.ac.id/theme/jquery.php/core/jquery-3.5.1.min.js"></script>
    <script src="https://leads.upnvj.ac.id/lib/javascript.php/1635748127/lib/javascript-static.js"></script>
    <script src="https://leads.upnvj.ac.id/theme/javascript.php/edumy/1644289115/head"></script>
    <script>
        document.body.className += ' jsenabled';
    </script>
</body>
</html>