<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Ministere de Tourisme </title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('evisa/admin/assets/img/favicon.ico')); ?>" />
    <link href="<?php echo e(asset('evisa/admin/assets/css/loader.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo e(asset('evisa/admin/assets/js/loader.js')); ?>"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('evisa/admin/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('evisa/admin/assets/css/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo e(asset('evsia/admin/plugins/apex/apexcharts.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('evisa/admin/assets/css/dashboard/dash_1.css')); ?>" rel="stylesheet" type="text/css" />
    <style class="dark-theme">
        #chart-2 path {
            stroke: #0e1726;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="index.html"><img alt="logo" src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>"> <span class="navbar-brand-name">E-VISA</span></a>
            </div>

            <ul class="navbar-item topbar-navigation">

                <!--  BEGIN TOPBAR  -->
                <div class="topbar-nav header navbar" role="banner">
                    <nav id="topbar">
                        <ul class="navbar-nav theme-brand flex-row  text-center">
                            <li class="nav-item theme-logo">
                                <a href="index.html">
                                    <img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" class="navbar-logo" alt="logo">
                                </a>
                            </li>
                            <li class="nav-item theme-text">
                                <a href="index.html" class="nav-link"> CORK </a>
                            </li>
                        </ul>

                        <ul class="list-unstyled menu-categories" id="topAccordion">

                            <li class="menu single-menu active">
                                <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>

                                        <span>Tableau de Board</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </a>
                            </li>
                            <li class="menu single-menu">
                                <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>

                                        <span>Historiques</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </a>

                            </li>

                            <li class="menu">
                                <a href="<?php echo e(route('demande.index')); ?>">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>

                                        <span>Liste des Demandes</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </a>
                                <ul class="collapse submenu list-unstyled animated fadeInUp" id="tables" data-parent="#topAccordion">

                                    <!--
                                    <li class="sub-sub-submenu-list">
                                        <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                        <ul class="collapse list-unstyled sub-submenu animated fadeInUp" id="datatable" data-parent="#datatable">
                                            <li>
                                                <a href="table_dt_basic.html"> Basic </a>
                                            </li>
                                            <li>
                                                <a href="table_dt_striped_table.html"> Striped Table </a>
                                            </li>
                                            <li>
                                                <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                            </li>
                                            <li>
                                                <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                            </li>
                                            <li>
                                                <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                            </li>
                                            <li>
                                                <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                                            </li>
                                            <li>
                                                <a href="table_dt_custom.html"> Custom </a>
                                            </li>
                                            <li>
                                                <a href="table_dt_range_search.html"> Range Search </a>
                                            </li>
                                            <li>
                                                <a href="table_dt_html5.html"> HTML5 Export </a>
                                            </li>
                                            <li>
                                                <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                            </li>
                                            <li>
                                                <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                            </li>
                                        </ul>
                                    </li>
                                    -->
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
                <!--  END TOPBAR  -->

            </ul>

            <ul class="navbar-item flex-row ml-auto">
                <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                </li>
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo e(asset('evisa/admin/assets/img/ca.png')); ?>" class="flag-width" alt="flag">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <div class="search-dropdown">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <a class="dropdown-item" data-img-value="de" data-value="de" href="javascript:void(0);"><img src="<?php echo e(asset('evisa/admin/assets/img/de.png')); ?>" class="flag-width" alt="flag"> German</a>
                            <a class="dropdown-item" data-img-value="jp" data-value="jp" href="javascript:void(0);"><img src="<?php echo e(asset('evisa/admin/assets/img/jp.png')); ?>" class="flag-width" alt="flag"> Japanese</a>
                            <a class="dropdown-item" data-img-value="fr" data-value="fr" href="javascript:void(0);"><img src="<?php echo e(asset('evisa/admin/assets/img/fr.png')); ?>" class="flag-width" alt="flag"> French</a>
                            <a class="dropdown-item" data-img-value="ca" data-value="en" href="javascript:void(0);"><img src="<?php echo e(asset('evisa/admin/assets/img/ca.png')); ?>" class="flag-width" alt="flag"> English</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown">
                        <div class="dropdown-menu-title">
                            <h5>Messages</h5>
                        </div>
                        <div class="">
                            <a class="dropdown-item unseen-msg">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="admin-profile">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Kara Young</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">
                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">DA</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Daisy Anderson</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item unseen-msg">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="admin-profile">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Oscar Garner</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                        <span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" class="img-fluid" alt="admin-profile">
                        </div>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="media-body">
                                    <h5>Shaun Park</h5>
                                    <p>Project Leader</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="user_profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>                                <span>Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="apps_mailbox.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg>                                <span>Inbox</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>                                <span>Lock Screen</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>

                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="page-header">
                    <div class="page-title">
                        <h3>Sales Dashboard</h3>
                    </div>

                    <div class="toggle-switch">
                        <label class="switch s-icons s-outline  s-outline-secondary">
                            <input type="checkbox" checked="" class="theme-shifter">
                            <span class="slider round">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                            </span>
                        </label>
                    </div>
                </div>

                <div class="row layout-top-spacing">

                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Revenue</h5>
                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">
                                <div id="revenueMonthly"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-two">
                            <div class="widget-heading">
                                <h5 class="">Sales by Category</h5>
                            </div>
                            <div class="widget-content">
                                <div id="chart-2" class=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget-two">
                            <div class="widget-content">
                                <div class="w-numeric-value">
                                    <div class="w-content">
                                        <span class="w-value">Daily sales</span>
                                        <span class="w-numeric-title">Go to columns for details.</span>
                                    </div>
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                    </div>
                                </div>
                                <div class="w-chart">
                                    <div id="daily-sales"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-three">
                            <div class="widget-heading">
                                <h5 class="">Summary</h5>

                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">View Report</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit Report</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="widget-content">

                                <div class="order-summary">

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                        </div>
                                        <div class="w-summary-details">

                                            <div class="w-summary-info">
                                                <h6>Income</h6>
                                                <p class="summary-count">$92,600</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                        </div>
                                        <div class="w-summary-details">

                                            <div class="w-summary-info">
                                                <h6>Profit</h6>
                                                <p class="summary-count">$37,515</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                        </div>
                                        <div class="w-summary-details">

                                            <div class="w-summary-info">
                                                <h6>Expenses</h6>
                                                <p class="summary-count">$55,085</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget-one widget">
                            <div class="widget-content">
                                <div class="w-numeric-value">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                    </div>
                                    <div class="w-content">
                                        <span class="w-value">3,192</span>
                                        <span class="w-numeric-title">Total Orders</span>
                                    </div>
                                </div>
                                <div class="w-chart">
                                    <div id="total-orders"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                        <div class="widget widget-activity-four">

                            <div class="widget-heading">
                                <h5 class="">Recent Activities</h5>
                            </div>

                            <div class="widget-content">

                                <div class="mt-container mx-auto">
                                    <div class="timeline-line">

                                        <div class="item-timeline timeline-primary">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p><span>Updated</span> Server Logs</p>
                                                <span class="badge">Pending</span>
                                                <p class="t-time">Just Now</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-success">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                                <span class="badge">Completed</span>
                                                <p class="t-time">2 min ago</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-danger">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Backup <span>Files EOD</span></p>
                                                <span class="badge">Pending</span>
                                                <p class="t-time">14:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-dark">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                                <span class="badge">Completed</span>
                                                <p class="t-time">16:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-warning">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                                <span class="badge">In progress</span>
                                                <p class="t-time">17:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-secondary">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Rebooted Server</p>
                                                <span class="badge">Completed</span>
                                                <p class="t-time">17:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-warning">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Send contract details to Freelancer</p>
                                                <span class="badge">Pending</span>
                                                <p class="t-time">18:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-dark">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Kelly want to increase the time of the project.</p>
                                                <span class="badge">In Progress</span>
                                                <p class="t-time">19:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-success">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Server down for maintanence</p>
                                                <span class="badge">Completed</span>
                                                <p class="t-time">19:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-secondary">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Malicious link detected</p>
                                                <span class="badge">Block</span>
                                                <p class="t-time">20:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-warning">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Rebooted Server</p>
                                                <span class="badge">Completed</span>
                                                <p class="t-time">23:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-primary">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p><span>Updated</span> Server Logs</p>
                                                <span class="badge">Pending</span>
                                                <p class="t-time">Just Now</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-success">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                                <span class="badge">Completed</span>
                                                <p class="t-time">2 min ago</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-danger">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Backup <span>Files EOD</span></p>
                                                <span class="badge">Pending</span>
                                                <p class="t-time">14:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-dark">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                                <span class="badge">Completed</span>
                                                <p class="t-time">16:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-warning">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                                <span class="badge">In progress</span>
                                                <p class="t-time">17:00</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tm-action-btn">
                                    <button class="btn"><span>View All</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-one">
                            <div class="widget-heading">
                                <h5 class="">Transactions</h5>
                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">View Report</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit Report</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">

                                <div class="transactions-list t-info">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="avatar avatar-xl">
                                                    <span class="avatar-title">SP</span>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Shaun Park</h4>
                                                <p class="meta-date">10 Jan 1:00PM</p>
                                            </div>
                                        </div>
                                        <div class="t-rate rate-inc">
                                            <p><span>+$36.11</span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Electricity Bill</h4>
                                                <p class="meta-date">04 Jan 1:00PM</p>
                                            </div>

                                        </div>
                                        <div class="t-rate rate-dec">
                                            <p><span>-$16.44</span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="avatar avatar-xl">
                                                    <span class="avatar-title">AD</span>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Amy Diaz</h4>
                                                <p class="meta-date">31 Jan 1:00PM</p>
                                            </div>

                                        </div>
                                        <div class="t-rate rate-inc">
                                            <p><span>+$66.44</span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="transactions-list t-secondary">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Netflix</h4>
                                                <p class="meta-date">02 Feb 1:00PM</p>
                                            </div>

                                        </div>
                                        <div class="t-rate rate-dec">
                                            <p><span>-$32.00</span></p>
                                        </div>
                                    </div>
                                </div>


                                <div class="transactions-list t-info">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="avatar avatar-xl">
                                                    <span class="avatar-title">DA</span>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Daisy Anderson</h4>
                                                <p class="meta-date">15 Feb 1:00PM</p>
                                            </div>
                                        </div>
                                        <div class="t-rate rate-inc">
                                            <p><span>+$10.08</span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="avatar avatar-xl">
                                                    <span class="avatar-title">OG</span>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Oscar Garner</h4>
                                                <p class="meta-date">20 Feb 1:00PM</p>
                                            </div>

                                        </div>
                                        <div class="t-rate rate-dec">
                                            <p><span>-$22.00</span></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                        <div class="widget widget-account-invoice-three">

                            <div class="widget-heading">
                                <div class="wallet-usr-info">
                                    <div class="usr-name">
                                        <span><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="admin-profile" class="img-fluid"> Alan Green</span>
                                    </div>
                                    <div class="add">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
                                    </div>
                                </div>
                                <div class="wallet-balance">
                                    <p>Wallet Balance</p>
                                    <h5 class=""><span class="w-currency">$</span>2953</h5>
                                </div>
                            </div>

                            <div class="widget-amount">

                                <div class="w-a-info funds-received">
                                    <span>Received <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span>
                                    <p>$97.99</p>
                                </div>

                                <div class="w-a-info funds-spent">
                                    <span>Spent <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                                    <p>$53.00</p>
                                </div>
                            </div>

                            <div class="widget-content">

                                <div class="bills-stats">
                                    <span>Pending</span>
                                </div>

                                <div class="invoice-list">

                                    <div class="inv-detail">
                                        <div class="info-detail-1">
                                            <p>Netflix</p>
                                            <p><span class="w-currency">$</span> <span class="bill-amount">13.85</span></p>
                                        </div>
                                        <div class="info-detail-2">
                                            <p>BlueHost VPN</p>
                                            <p><span class="w-currency">$</span> <span class="bill-amount">15.66</span></p>
                                        </div>
                                    </div>

                                    <div class="inv-action">
                                        <a href="javascript:void(0);" class="btn btn-outline-primary view-details">View Details</a>
                                        <a href="javascript:void(0);" class="btn btn-outline-primary pay-now">Pay Now $29.51</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>





                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-two">

                            <div class="widget-heading">
                                <h5 class="">Recent Orders</h5>
                            </div>

                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="th-content">Customer</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Product</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Invoice</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Price</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Status</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="td-content customer-name"><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="avatar"><span>Luke Ivory</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-brand text-primary">Headphone</div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-invoice">#46894</div>
                                                </td>
                                                <td>
                                                    <div class="td-content pricing"><span class="">$56.07</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="badge badge-success">Paid</span></div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="td-content customer-name"><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="avatar"><span>Andy King</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-brand text-warning">Nike Sport</div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-invoice">#76894</div>
                                                </td>
                                                <td>
                                                    <div class="td-content pricing"><span class="">$88.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="badge badge-primary">Shipped</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content customer-name"><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="avatar"><span>Laurie Fox</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-brand text-danger">Sunglasses</div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-invoice">#66894</div>
                                                </td>
                                                <td>
                                                    <div class="td-content pricing"><span class="">$126.04</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="badge badge-success">Paid</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content customer-name"><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="avatar"><span>Ryan Collins</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-brand text-warning">Sport</div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-invoice">#89891</div>
                                                </td>
                                                <td>
                                                    <div class="td-content pricing"><span class="">$108.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="badge badge-primary">Shipped</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content customer-name"><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="avatar"><span>Irene Collins</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-brand text-primary">Speakers</div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-invoice">#75844</div>
                                                </td>
                                                <td>
                                                    <div class="td-content pricing"><span class="">$84.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="badge badge-danger">Pending</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content customer-name"><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="avatar"><span>Sonia Shaw</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-brand text-danger">Watch</div>
                                                </td>
                                                <td>
                                                    <div class="td-content product-invoice">#76844</div>
                                                </td>
                                                <td>
                                                    <div class="td-content pricing"><span class="">$110.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="badge badge-success">Paid</span></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-three">

                            <div class="widget-heading">
                                <h5 class="">Top Selling Product</h5>
                            </div>

                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table table-scroll">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="th-content">Product</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Price</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Discount</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Sold</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Source</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Headphone</p>
                                                            <p class="prd-category text-primary">Digital</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$168.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$60.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">170</div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><a href="javascript:void(0);" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Direct</a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Shoes</p>
                                                            <p class="prd-category text-warning">Faishon</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$108.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$47.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">130</div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><a href="javascript:void(0);" class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Google</a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Watch</p>
                                                            <p class="prd-category text-danger">Accessories</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$88.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$20.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">66</div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><a href="javascript:void(0);" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Ads</a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Laptop</p>
                                                            <p class="prd-category text-primary">Digital</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$110.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$33.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">35</div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><a href="javascript:void(0);" class="text-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Email</a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="<?php echo e(asset('evisa/admin/assets/img/90x90.jpg')); ?>" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Camera</p>
                                                            <p class="prd-category text-primary">Digital</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$126.04</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$26.04</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">30</div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><a href="javascript:void(0);" class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Referral</a></div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(asset('evisa/admin/assets/js/libs/jquery-3.1.1.min.js')); ?>"></script>
    <script src="bootstrap/js/popper.min.js')}}"></script>
    <script src="bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="<?php echo e(asset('evisa/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('evisa/admin/assets/js/app.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo e(asset('evisa/admin/assets/js/custom.js')); ?>"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo e(asset('evisa/admin/plugins/apex/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('evisa/admin/assets/js/dashboard/dash_1.js')); ?>"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>