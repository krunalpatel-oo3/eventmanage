<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/index by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jun 2020 17:08:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        
        <!-- Favicon -->
        <link rel="icon" href="assets/img/brand/favicon.ico" type="image/x-icon"/>

        <!-- Title -->
        <title>Dashlead -  Admin Panel HTML Dashboard Template</title>

        <!---Fontawesome css-->
        <link href="{{ URL::asset('assets/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

        <!---Ionicons css-->
        <link href="{{ URL::asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

        <!---Typicons css-->
        <link href="{{ URL::asset('assets/plugins/typicons.font/typicons.css') }}" rel="stylesheet">

        <!---Feather css-->
        <link href="{{ URL::asset('assets/plugins/feather/feather.css') }}" rel="stylesheet">

        <!---Falg-icons css-->
        <link href="{{ URL::asset('assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
        
        <!---Style css-->
        <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/custom-style.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/skins.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/dark-style.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/custom-dark-style.css') }}" rel="stylesheet">
        <script type="text/javascript">
            var base_url =  {!! json_encode(url('/')) !!}
        </script>



        <!---Select2 css-->
        <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
        <!--Mutipleselect css-->
        <link rel="stylesheet" href="{{ URL::asset('assets/plugins/multipleselect/multiple-select.css') }}">
        <!---Jquery.mCustomScrollbar css-->
        <link href="{{ URL::asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet">

        <!---Sidebar css-->
        <link href="{{ URL::asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

        <!---Sidemenu css-->
        <link href="{{ URL::asset('assets/plugins/sidemenu/sidemenu.css') }}" rel="stylesheet">
        
        <!---Switcher css-->
        <link href="{{ URL::asset('assets/switcher/css/switcher.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/switcher/demo.css') }}" rel="stylesheet"> 
        <link href="{{ URL::asset('assets/css/admin/custom_style.css') }}" rel="stylesheet">

</head>

    <body class="main-body dark-theme">
    
        <!-- Start Switcher -->
        <div class="switcher-wrapper">
            <div class="demo_changer">
                <div class="demo-icon bg_dark"><i class="fa fa-cog fa-spin  text_primary"></i></div>
                <div class="form_holder sidebar-right1">
                    <div class="row">
                        <div class="predefined_styles">
                            <div class="swichermainleft border-bottom text-center">
                                <div class="p-3">
                                    <a href="https://laravel.spruko.com/dashlead/" class="btn btn-primary btn-block mt-0">View Demo</a>
                                    <a href="https://themeforest.net/item/dashlead-laravel-admin-template/26207818" class="btn btn-secondary btn-block">Buy Now</a>
                                    <a href="https://themeforest.net/user/sprukosoft/portfolio" class="btn btn-info btn-block">Our Portfolio</a>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Navigation Style</h4>
                                <div class="pl-3 pr-3">
                                    <a class="btn btn-primary btn-block" href="https://laravel.spruko.com/dashlead/Horizontal-Light/index">
                                        Horizontal
                                    </a>
                                    <a class="btn btn-secondary btn-block" href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/index">
                                        Left-menu
                                    </a>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Theme Layout</h4>
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="mr-auto">Light Theme</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="mr-auto">Dark Theme</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="swichermainleft">
                                <h4>Header Styles Mode</h4>
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="mr-auto">Color Header</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="mr-auto">Graident Header</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="mr-auto">Reset Header</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Leftmenu Styles Mode</h4>
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="mr-auto">Color Menu</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex dark-switch">
                                        <span class="mr-auto">Dark Menu</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch11" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                    <div class="light-switch">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto">Light Menu</span>
                                            <div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch9" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="mr-auto">Gradient-Color Menu</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Switcher -->
        
        <!-- Loader -->
        <div id="global-loader">
            <img src="{{ URL::asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
        </div>
        <!-- End Loader -->

        <!-- Page -->
        <div class="page">
            <!-- Sidemenu -->
            <div class="main-sidebar main-sidebar-sticky side-menu">
                <div class="sidemenu-logo">
                    <a class="main-logo" href="index.html">
                        <img src="{{ URL::asset('assets/img/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                        <img src="assets/img/brand/icon.png" class="header-brand-img icon-logo" alt="logo">
                        <img src="{{ URL::asset('assets/img/brand/logo-light.png') }}" class="header-brand-img desktop-logo theme-logo" alt="logo">
                        <img src="{{ URL::asset('assets/img/brand/icon-light.png') }}" class="header-brand-img icon-logo theme-logo" alt="logo">
                    </a>
                </div>
                <div class="main-sidebar-body">
                    <ul class="nav">
                        <li class="nav-label">Dashboard</li>
                        <li class="nav-item show">
                            <a class="nav-link" href="index.html"><i class="fe fe-airplay"></i><span class="sidemenu-label">Dashboard</span></a>
                        </li>
                        <li class="nav-label">Applications</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::route('admin.users') }}"><i class="fe fe-database"></i><span class="sidemenu-label">Users</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="#"><i class="fe fe-mail"></i><span class="sidemenu-label">Mail</span><span class="badge badge-primary side-badge">2</span></a>
                            <ul class="nav-sub">
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="mail.html">Mail-Inbox</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="viewmail.html">View-Mail</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="#"><i class="fe fe-box"></i><span class="sidemenu-label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
                            <ul class="nav-sub">
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="chat.html">Chat</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="cards.html">Cards</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="calendar.html">Calendar</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="contacts.html">Contacts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons.html"><i class="fe fe-award"></i><span class="sidemenu-label">Icons</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="#"><i class="fe fe-map-pin"></i><span class="sidemenu-label">Maps</span><span class="badge badge-secondary side-badge">2</span></a>
                            <ul class="nav-sub">
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="map-mapel.html">Mapel Maps</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="map-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="#"><i class="fe fe-layout"></i><span class="sidemenu-label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
                            <ul class="nav-sub">
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="table-basic.html">Basic Tables</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="table-data.html">Data Tables</a>
                                </li>
                            </ul>
                        </li>
                       
                        
                        <li class="nav-label">Other Pages</li>
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="#"><i class="fe fe-compass"></i><span class="sidemenu-label">Pages</span><i class="angle fe fe-chevron-right"></i></a>
                            <ul class="nav-sub">
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="profile.html">Profile</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="invoice.html">Invoice</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="pricing.html">Pricing</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="faq.html">Faqs</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="empty.html">Empty Page</a>
                                </li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <!-- End Sidemenu -->
            <!-- Main Content-->
            <div class="main-content side-content pt-0">
                <!-- Main Header-->
                <div class="main-header side-header sticky">
                    <div class="container-fluid">
                        <div class="main-header-left">
                            <a class="main-logo d-lg-none" href="index.html">
                                <img src="assets/img/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                                <img src="assets/img/brand/icon.png" class="header-brand-img icon-logo" alt="logo">
                                <img src="assets/img/brand/logo-light.png" class="header-brand-img desktop-logo theme-logo" alt="logo">
                                <img src="assets/img/brand/icon-light.png" class="header-brand-img icon-logo theme-logo" alt="logo">
                            </a>
                            <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
                        </div>
                        <div class="main-header-right">
                            <div class="dropdown d-md-flex header-search">
                                <a class="nav-link icon header-search">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="main-form-search p-2">
                                        <input class="form-control" placeholder="Search" type="search">
                                        <button class="btn"><i class="fe fe-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown d-md-flex">
                                <a class="nav-link icon full-screen-link">
                                    <i class="fe fe-maximize fullscreen-button"></i>
                                </a>
                            </div>
                            <div class="dropdown main-header-notification">
                                <a class="nav-link icon" href="#">
                                    <i class="fe fe-bell"></i>
                                    <span class="pulse bg-danger"></span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="header-navheading">
                                        <p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">View all</span></p>
                                    </div>
                                    <div class="main-notification-list">
                                        <div class="media new">
                                            <div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
                                            <div class="media-body">
                                                <p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="main-img-user"><img alt="avatar" src="assets/img/users/2.jpg"></div>
                                            <div class="media-body">
                                                <p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="dropdown-footer">
                                        <a href="#">View All Notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown main-profile-menu">
                                <a class="main-img-user" href="#"><img alt="avatar" src="{{URL::asset('assets/img/users/1.jpg') }}"></a>
                                <div class="dropdown-menu">
                                    <div class="header-navheading">
                                        <h6 class="main-notification-title">Sonia Taylor</h6>
                                        <p class="main-notification-text">Web Designer</p>
                                    </div>
                                    <a class="dropdown-item border-top" href="{{ URL::route('admin.myprofile') }}">
                                        <i class="fe fe-user"></i> My Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ URL::route('admin.change_password') }}">
                                        <i class="fe fe-edit"></i> Change Password
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-settings"></i> Account Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-settings"></i> Support
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-compass"></i> Activity
                                    </a>
                                    <a class="dropdown-item" href="{{ URL::route('admin.logout') }}">
                                        <i class="fe fe-power"></i> Sign Out
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown d-md-flex header-settings">
                                <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                                    <i class="fe fe-align-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main Header-->
                <div class="container-fluid">
                                        <!-- Page Header -->
                   @yield('content')

                </div>
            </div>
            <!-- End Main Content-->
                    <!-- Sidebar -->
            <!-- <div class="sidebar sidebar-right sidebar-animate">
                <div class="sidebar-icon">
                    <a href="#" class="text-right float-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
                </div>
                <div class="sidebar-body">
                    <h5>Todo</h5>
                    <div class="d-flex p-2">
                        <label class="ckbox"><input checked  type="checkbox"><span>Hangout With friends</span></label>
                        <span class="ml-auto">
                            <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class="d-flex p-2 border-top">
                        <label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
                        <span class="ml-auto">
                            <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class="d-flex p-2 border-top">
                        <label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
                        <span class="ml-auto">
                            <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class="d-flex p-2 border-top">
                        <label class="ckbox"><input checked type="checkbox"><span>System Updated</span></label>
                        <span class="ml-auto">
                            <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class="d-flex p-2 border-top">
                        <label class="ckbox"><input type="checkbox"><span>Do something more</span></label>
                        <span class="ml-auto">
                            <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class="d-flex p-2 border-top">
                        <label class="ckbox"><input  type="checkbox"><span>System Updated</span></label>
                        <span class="ml-auto">
                            <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class="d-flex p-2 border-top">
                        <label class="ckbox"><input  type="checkbox"><span>Find an Idea</span></label>
                        <span class="ml-auto">
                            <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class="d-flex p-2 border-top mb-4 border-bottom">
                        <label class="ckbox"><input  type="checkbox"><span>Project review</span></label>
                        <span class="ml-auto">
                            <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                        </span>
                    </div>
                    <h5>Overview</h5>
                    <div class="p-2">
                        <div class="main-traffic-detail-item">
                            <div>
                                <span>Founder &amp; CEO</span> <span>24</span>
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="main-traffic-detail-item">
                            <div>
                                <span>UX Designer</span> <span>1</span>
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="main-traffic-detail-item">
                            <div>
                                <span>Recruitment</span> <span>87</span>
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="main-traffic-detail-item">
                            <div>
                                <span>Software Engineer</span> <span>32</span>
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="main-traffic-detail-item">
                            <div>
                                <span>Project Manager</span> <span>32</span>
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Sidebar -->
                    <!-- Main Footer-->
            <div class="main-footer text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span>Copyright © 2019 <a href="#">Dashlead</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer-->
        </div>
        <!-- End Page -->
        <!-- Back-to-top -->
        <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- Jquery js-->
    <script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Ionicons js-->
    <script src="{{ URL::asset('assets/plugins/ionicons/ionicons.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ URL::asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!-- Flot Chart js-->
    <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ URL::asset('assets/js/chart.flot.sampledata.js') }}"></script>
    <!-- Chart.Bundle js-->
    <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Peity js-->
    <script src="{{ URL::asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
    <!-- Jquery-Ui js-->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--MutipleSelect js-->
    <script src="{{ URL::asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/multipleselect/multi-select.js') }}"></script>
    <!-- Jquery.mCustomScrollbar js-->
    <script src="{{ URL::asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- index -->
    <script src="{{ URL::asset('assets/js/index.js') }}"></script>
            
    <!-- Perfect-scrollbar js-->
    <script src="{{ URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- Sidemenu js-->
    <script src="{{ URL::asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- Sidebar js-->
    <script src="{{ URL::asset('assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Sticky js-->
    <script src="{{ URL::asset('assets/js/sticky.js') }}"></script>

    <!-- Switcher js-->
    <script src="{{ URL::asset('assets/switcher/js/switcher.js') }}"></script>

    <!-- Custom js-->
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>
    <!-- Toastr -->
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/toaster/jquery.toaster.js') }}"></script>

    @yield('extra-script')
    @yield('extra-style')
    
</body>

<!-- Mirrored from laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/index by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jun 2020 17:09:37 GMT -->
</html>