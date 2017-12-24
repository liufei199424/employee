<html class="no-focus"><!--<![endif]--><head>
    <meta charset="utf-8">

    <title>剑君十二恨</title>
    <?php $staticPath = "static/js/oneui"; ?>
    <?php $cssPath = "static/css"; ?>

    <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?=$staticPath?>/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="<?=$staticPath?>/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?=$staticPath?>/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?=$staticPath?>/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?=$staticPath?>/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="<?=$staticPath?>/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="<?=$staticPath?>/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=$staticPath?>/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$staticPath?>/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$staticPath?>/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$staticPath?>/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=$staticPath?>/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=$staticPath?>/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$staticPath?>/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$staticPath?>/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"> -->
    <link rel="stylesheet" id="css-main" href="<?=$cssPath?>/base.css">

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"> -->
    <link rel="stylesheet" id="css-main" href="<?=$staticPath?>/css/oneui.css">
    <link rel="stylesheet" href="<?=$staticPath?>/js/plugins/slick/slick.min.css">
    <link rel="stylesheet" href="<?=$staticPath?>/js/plugins/slick/slick-theme.min.css">

    <script src="<?=$staticPath?>/js/core/jquery.min.js"></script>
    <script src="<?=$staticPath?>/js/core/bootstrap.min.js"></script>
    <script src="<?=$staticPath?>/js/core/jquery.slimscroll.min.js"></script>
    <script src="<?=$staticPath?>/js/core/jquery.scrollLock.min.js"></script>
    <script src="<?=$staticPath?>/js/core/jquery.appear.min.js"></script>
    <script src="<?=$staticPath?>/js/core/jquery.countTo.min.js"></script>
    <script src="<?=$staticPath?>/js/core/jquery.placeholder.min.js"></script>
    <script src="<?=$staticPath?>/js/core/js.cookie.min.js"></script>
    <script src="<?=$staticPath?>/js/app.js"></script>

<!--    <style type="text/css">-->
<!--        .jqstooltip {-->
<!--            position: absolute;-->
<!--            left: 0px;-->
<!--            top: 0px;-->
<!--            visibility: hidden;-->
<!--            background: rgb(0, 0, 0) transparent;-->
<!--            background-color: rgba(0,0,0,0.6);-->
<!--            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-->
<!--            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";-->
<!--            color: white;-->
<!--            font: 10px arial, san serif;-->
<!--            text-align: left;-->
<!--            white-space: nowrap;-->
<!--            padding: 5px;-->
<!--            border: 1px solid white;z-index: 10000;-->
<!--        }-->
<!--        .jqsfield {-->
<!--            color: white;-->
<!--            font: 10px arial, san serif;-->
<!--            text-align: left;-->
<!--        }-->
<!--    </style>-->
</head>
<body>
    <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
        <aside id="side-overlay">
            <!-- Side Overlay Scroll Container -->
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 392px;"><div id="side-overlay-scroll" style="overflow: hidden; width: auto; height: 392px;">
                <!-- Side Header -->
                <div class="side-header side-content">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-times"></i>
                    </button>
                    <span>
                        <img class="img-avatar img-avatar32" src="<?=$staticPath?>/img/avatars/avatar10.jpg" alt="">
                        <span class="font-w600 push-10-l">Dennis Ross</span>
                    </span>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="side-content remove-padding-t">
                    <!-- Notifications -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Recent Activity</h3>
                        </div>
                        <div class="block-content">
                            <!-- Activity List -->
                            <ul class="list list-activity">
                                <li>
                                    <i class="si si-wallet text-success"></i>
                                    <div class="font-w600">New sale ($15)</div>
                                    <div><a href="javascript:void(0)">Admin Template</a></div>
                                    <div><small class="text-muted">3 min ago</small></div>
                                </li>
                                <li>
                                    <i class="si si-pencil text-info"></i>
                                    <div class="font-w600">You edited the file</div>
                                    <div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Documentation.doc</a></div>
                                    <div><small class="text-muted">15 min ago</small></div>
                                </li>
                                <li>
                                    <i class="si si-close text-danger"></i>
                                    <div class="font-w600">Project deleted</div>
                                    <div><a href="javascript:void(0)">Line Icon Set</a></div>
                                    <div><small class="text-muted">4 hours ago</small></div>
                                </li>
                                <li>
                                    <i class="si si-wrench text-warning"></i>
                                    <div class="font-w600">Core v2.5 is available</div>
                                    <div><a href="javascript:void(0)">Update now</a></div>
                                    <div><small class="text-muted">6 hours ago</small></div>
                                </li>
                            </ul>
                            <div class="text-center">
                                <small><a href="javascript:void(0)">Load More..</a></small>
                            </div>
                            <!-- END Activity List -->
                        </div>
                    </div>
                    <!-- END Notifications -->

                    <!-- Online Friends -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Online Friends</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- Users Navigation -->
                            <ul class="nav-users">
                                <li>
                                    <a href="base_pages_profile.html">
                                        <img class="img-avatar" src="<?=$staticPath?>/img/avatars/avatar1.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Linda Moore
                                        <div class="font-w400 text-muted"><small>Copywriter</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="base_pages_profile.html">
                                        <img class="img-avatar" src="<?=$staticPath?>/img/avatars/avatar9.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Eric Lawson
                                        <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="base_pages_profile.html">
                                        <img class="img-avatar" src="<?=$staticPath?>/img/avatars/avatar8.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Ashley Welch
                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="base_pages_profile.html">
                                        <img class="img-avatar" src="<?=$staticPath?>/img/avatars/avatar5.jpg" alt="">
                                        <i class="fa fa-circle text-warning"></i> Amy Hunter
                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="base_pages_profile.html">
                                        <img class="img-avatar" src="<?=$staticPath?>/img/avatars/avatar15.jpg" alt="">
                                        <i class="fa fa-circle text-warning"></i> Adam Hall
                                        <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                    </a>
                                </li>
                            </ul>
                            <!-- END Users Navigation -->
                        </div>
                    </div>
                    <!-- END Online Friends -->

                    <!-- Quick Settings -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Quick Settings</h3>
                        </div>
                        <div class="block-content">
                            <!-- Quick Settings Form -->
                            <form class="form-bordered" action="index.html" method="post" onsubmit="return false;">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="font-s13 font-w600">Online Status</div>
                                            <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                <input type="checkbox"><span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="font-s13 font-w600">Auto Updates</div>
                                            <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                <input type="checkbox"><span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="font-s13 font-w600">Notifications</div>
                                            <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                <input type="checkbox" checked=""><span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="font-s13 font-w600">API Access</div>
                                            <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                <input type="checkbox" checked=""><span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END Quick Settings Form -->
                        </div>
                    </div>
                    <!-- END Quick Settings -->
                </div>
                <!-- END Side Content -->
            </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.35; display: block; border-radius: 7px; z-index: 99; right: 2px; height: 134.322px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 1; z-index: 90; right: 2px;"></div></div>
            <!-- END Side Overlay Scroll Container -->
        </aside>

        <nav id="sidebar">
            <!-- Sidebar Scroll Container -->
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 367px;"><div id="sidebar-scroll" style="overflow: hidden; width: auto; height: 311px;">
                <!-- Sidebar Content -->
                <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="side-header side-content bg-white-op">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times"></i>
                        </button>
                        <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                        <div class="btn-group pull-right">
                            <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                                <i class="si si-drop"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                                <li class="active">
                                    <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="<?=$staticPath?>/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="<?=$staticPath?>/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="<?=$staticPath?>/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="<?=$staticPath?>/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="<?=$staticPath?>/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a class="h5 text-white" href="index.html">
                            <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">ne</span>
                        </a>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="side-content">
                        <?php include_once('_menu.php') ?>
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- Sidebar Content -->
            </div><div class="slimScrollBar" style="background: rgb(255, 255, 255); width: 5px; position: absolute; top: 0px; opacity: 0.35; display: none; border-radius: 7px; z-index: 99; right: 2px; height: 30px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 1; z-index: 90; right: 2px;"></div></div>
            <!-- END Sidebar Scroll Container -->
        </nav>

        <header id="header-navbar" class="content-mini content-mini-full">
            <!-- Header Navigation Right -->
            <ul class="nav-header pull-right">
                <li>
                    <div class="btn-group">
                        <button class="btn btn-default btn-image dropdown-toggle headheight" data-toggle="dropdown" type="button">
                            <img src="<?=$staticPath?>/img/avatars/avatar10.jpg" alt="Avatar">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">Profile</li>
                            <li>
                                <a tabindex="-1" href="base_pages_inbox.html">
                                    <i class="si si-envelope-open pull-right"></i>
                                    <span class="badge badge-primary pull-right">3</span>Inbox
                                </a>
                            </li>
                            <li>
                                <a tabindex="-1" href="base_pages_profile.html">
                                    <i class="si si-user pull-right"></i>
                                    <span class="badge badge-success pull-right">1</span>Profile
                                </a>
                            </li>
                            <li>
                                <a tabindex="-1" href="javascript:void(0)">
                                    <i class="si si-settings pull-right"></i>Settings
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Actions</li>
                            <li>
                                <a tabindex="-1" href="base_pages_lock.html">
                                    <i class="si si-lock pull-right"></i>Lock Account
                                </a>
                            </li>
                            <li>
                                <a tabindex="-1" href="base_pages_login.html">
                                    <i class="si si-logout pull-right"></i>Log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-default headheight" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                        <i class="fa fa-tasks"></i>
                    </button>
                </li>
            </ul>
            <!-- END Header Navigation Right -->

            <!-- Header Navigation Left -->
            <ul class="nav-header pull-left">
                <li class="hidden-md hidden-lg">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                        <i class="fa fa-navicon"></i>
                    </button>
                </li>
                <li class="hidden-xs hidden-sm">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-default headheight" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                </li>
                <li>
                    <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                    <button class="btn btn-default pull-right headheight" data-toggle="modal" data-target="#apps-modal" type="button">
                        <i class="si si-grid"></i>
                    </button>
                </li>
                <li class="visible-xs">
                    <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                    <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </li>
                <li class="js-header-search header-search">
                    <form class="form-horizontal" action="base_pages_search.html" method="post">
                        <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                            <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                            <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                        </div>
                    </form>
                </li>
            </ul>
            <!-- END Header Navigation Left -->
        </header>

        <main id="main-container" style="min-height: 349px;">
