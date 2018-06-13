<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Speeder | Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/mapplic/mapplic/mapplic.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="../assets/layouts/layout7/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/layouts/layout7/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<script type="text/javascript">
    function moveWin()
    {
        window.scroll(0,10000);
        setTimeout('moveWin();',100000);
    }
</script>
<!-- END HEAD -->

<body class="page-container-bg-solid" onload="moveWin();">
<!-- BEGIN HEADER -->
<div class="page-header navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="clearfix">
        <!-- BEGIN BURGER TRIGGER -->
        <div class="burger-trigger">
            <button class="menu-trigger">
                <img src="../assets/layouts/layout7/img/m_toggler.png" alt=""> </button>
            <div class="menu-overlay menu-overlay-bg-transparent">
                <div class="menu-overlay-content">
                    <ul class="menu-overlay-nav text-uppercase">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Reports</a>
                        </li>
                        <li>
                            <a href="#">Templates</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu-bg-overlay">
                <button class="menu-close">&times;</button>
            </div>
            <!-- the overlay element -->
        </div>
        <!-- END NAV TRIGGER -->
        <!-- BEGIN LOGO -->
        <div class="page-logo">
        </div>
        <!-- END LOGO -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge badge-success"> 7 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>
                                <span class="bold">12 pending</span> notifications</h3>
                            <a href="#">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">just now</span>
                                        <span class="details">
                                        <span class="label label-sm label-icon label-success">
                                            <i class="fa fa-plus"></i>
                                        </span> New user registered. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 mins</span>
                                        <span class="details">
                                        <span class="label label-sm label-icon label-danger">
                                            <i class="fa fa-bolt"></i>
                                        </span> Server #12 overloaded. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">10 mins</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Server #2 not responding. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">14 hrs</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span> Application error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">2 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Database overloaded 68%. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> A user IP blocked. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">4 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Storage Server #4 not responding dfdfdfd. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">5 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span> System Error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">9 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Storage server failed. </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-envelope-open"></i>
                        <span class="badge badge-danger"> 4 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>You have
                                <span class="bold">7 New</span> Messages</h3>
                            <a href="#">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Lisa Wong </span>
                                                    <span class="time">Just Now </span>
                                                </span>
                                        <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Richard Doe </span>
                                                    <span class="time">16 mins </span>
                                                </span>
                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="/assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Bob Nilson </span>
                                                    <span class="time">2 hrs </span>
                                                </span>
                                        <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Lisa Wong </span>
                                                    <span class="time">40 mins </span>
                                                </span>
                                        <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Richard Doe </span>
                                                    <span class="time">46 mins </span>
                                                </span>
                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <div class="dropdown-user-inner">
                            <span class="username username-hide-on-mobile"> Nick </span>
                            <img alt="" src="../assets/layouts/layout7/img/avatar1.jpg" /> </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="extra_profile.html">
                                <i class="icon-user"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="page_calendar.html">
                                <i class="icon-calendar"></i> My Calendar </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="icon-envelope-open"></i> My Inbox
                                <span class="badge badge-danger"> 3 </span>
                            </a>
                        </li>
                        <li>
                            <a href="page_todo.html">
                                <i class="icon-rocket"></i> My Tasks
                                <span class="badge badge-success"> 7 </span>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="extra_lock.html">
                                <i class="icon-lock"></i> Lock Screen </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container page-content-inner page-container-bg-solid">
    <!-- BEGIN BREADCRUMBS -->
    {{--<div class="breadcrumbs">
        <div class="container-fluid">
            <h2 class="breadcrumbs-title">Dashboard</h2>
            <ol class="breadcrumbs-list">
                <li>
                    <a class="breadcrumbs-item-link" href="#">Home</a>
                </li>
                <li>
                    <a class="breadcrumbs-item-link" href="#">Features</a>
                </li>
                <li>
                    <a class="breadcrumbs-item-link" href="#">Dashboard</a>
                </li>
            </ol>
        </div>
    </div>--}}
    <!-- END BREADCRUMBS -->
    <!-- BEGIN CONTENT -->
    <div class="container-fluid container-lf-space">
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row widget-row">
            <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20">
                <!-- BEGIN WIDGET GRADIENT -->
                <div class="clearfix"></div>
                <div id="carousel-example-generic-v1" class="carousel slide widget-carousel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic-v1" data-slide-to="0" class="circle active"></li>
                        <li data-target="#carousel-example-generic-v1" data-slide-to="1" class="circle"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="widget-gradient" style="background: url(/assets/layouts/layout7/img/01.jpg)">
                                <div class="widget-gradient-body">
                                    <h3 class="widget-gradient-title">Photo of The Day</h3>
                                    <ul class="widget-gradient-body-actions list-inline">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i> 12 </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comment"></i> 9 </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="widget-gradient" style="background: url(/assets/layouts/layout7/img/02.jpg)">
                                <div class="widget-gradient-body">
                                    <h3 class="widget-gradient-title">500 New Free Photos</h3>
                                    <ul class="widget-gradient-body-actions list-inline">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i> 17 </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comment"></i> 8 </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET GRADIENT -->
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20">
                <!-- BEGIN WIDGET WRAP IMAGE -->
                <div id="carousel-example-generic-v2" class="carousel slide widget-carousel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators carousel-indicators-red">
                        <li data-target="#carousel-example-generic-v2" data-slide-to="0" class="circle active"></li>
                        <li data-target="#carousel-example-generic-v2" data-slide-to="1" class="circle"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="widget-wrap-img widget-bg-color-white">
                                <h3 class="widget-wrap-img-title">New Mobile Layout</h3>
                                <img class="widget-wrap-img-element img-responsive" src="../assets/layouts/layout7/img/iphone.png" alt=""> </div>
                        </div>
                        <div class="item">
                            <div class="widget-wrap-img widget-bg-color-white">
                                <h3 class="widget-wrap-img-title">New Desktop Look</h3>
                                <img class="widget-wrap-img-element img-responsive" src="../assets/layouts/layout7/img/mac.png" alt=""> </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET WRAP IMAGE -->
            </div>
        </div>
        <div class="row widget-bg-color-white no-space margin-bottom-20">
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe widget-subscribe-quote widget-bg-color-purple">
                    <h2 class="widget-subscribe-title widget-title-color-purple-dark text-uppercase">Subscribe
                        <br/> Steps</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-purple-light">Lorem ipsum dolor sit amet diam
                        <a class="widget-subscribe-subtitle-link" href="#">check out</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe">
                    <span class="widget-subscribe-no">1</span>
                    <h2 class="widget-subscribe-title widget-title-color-gray-dark text-uppercase">Important
                        <br/> Step</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-dark-light">Lorem ipsum dolor asqudiete sit amet dolore diam sediate dolor diam
                        <a class="widget-subscribe-subtitle-link" href="#">learn more</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe widget-subscribe-border">
                    <span class="widget-subscribe-no">2</span>
                    <h2 class="widget-subscribe-title widget-title-color-gray-dark text-uppercase">Second
                        <br/> Step</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-dark-light">Lorem ipsum dolor asqudiete sit amet dolore diam sediate psum dolor asqudiete sediat dolor diam
                        <a class="widget-subscribe-subtitle-link" href="#">learn more</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe widget-subscribe-border-top">
                    <span class="widget-subscribe-no">3</span>
                    <h2 class="widget-subscribe-title widget-title-color-gray-dark text-uppercase">Final
                        <br/> Action</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-dark-light">Lorem ipsum dolor asqudiete sit amet dolore diam sediate dolor diam
                        <a class="widget-subscribe-subtitle-link" href="#">learn more</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
        </div>
        <div class="row widget-row">
            <div class="col-md-6 margin-bottom-20">
                <!-- BEGIN WIDGET TAB -->
                <div class="widget-bg-color-white widget-tab">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1_1" data-toggle="tab"> All Posts </a>
                        </li>
                        <li>
                            <a href="#tab_1_2" data-toggle="tab"> Designers </a>
                        </li>
                        <li>
                            <a href="#tab_1_3" data-toggle="tab"> Developers </a>
                        </li>
                        <li>
                            <a href="#tab_1_4" data-toggle="tab"> Others </a>
                        </li>
                    </ul>
                    <div class="tab-content scroller" style="height: 350px;" data-always-visible="1" data-handle-color="#D7DCE2">
                        <div class="tab-pane fade active in" id="tab_1_1">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/04.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/07.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/04.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/05.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_1_2">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/04.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/05.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/07.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_1_3">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/05.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/07.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/04.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_1_4">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/07.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/04.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/05.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET TAB -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet light tasks-widget widget-comments">
                    <div class="portlet-title margin-bottom-20">
                        <div class="caption caption-md font-red-sunglo">
                            <span class="caption-subject theme-font bold uppercase">Quick Email</span>
                        </div>
                    </div>
                    <div class="portlet-body overflow-h">
                        <input type="text" placeholder="To" class="form-control margin-bottom-20">
                        <input type="text" placeholder="Subject" class="form-control margin-bottom-20">
                        <textarea placeholder="Message" class="form-control margin-bottom-20" rows="5"></textarea>
                        <button class="btn red-sunglo pull-right" type="button">Submit</button>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-20">
                <!-- BEGIN WIDGET PROGRESS -->
                <div class="widget-progress">
                    <div class="widget-progress-element widget-bg-color-blue margin-bottom-25">
                                <span class="widget-progress-title">Application deplyoment
                                    <span class="pull-right">77%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"> </div>
                        </div>
                    </div>
                    <div class="widget-progress-element widget-bg-color-green margin-bottom-25">
                                <span class="widget-progress-title">Database migration
                                    <span class="pull-right">23%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"> </div>
                        </div>
                    </div>
                    <div class="widget-progress-element widget-bg-color-red  margin-bottom-25">
                                <span class="widget-progress-title">New UI release
                                    <span class="pull-right">56%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"> </div>
                        </div>
                    </div>
                    <div class="widget-progress-element widget-bg-color-purple">
                                <span class="widget-progress-title">Webserver upgrade
                                    <span class="pull-right">60%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET PROGRESS -->
            </div>
        </div>
        <div class="row widget-row">
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Current Balance</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-green icon-bulb"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Weekly Sales</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-red icon-layers"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,293">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Biggest Purchase</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="815">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Average Monthly</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-blue icon-bar-chart"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 text-center">
                        <span id="result">
                            <h2>Click the textbox, and copy the content on the left.</h2>
                        </span>
            </div>
            <div class="col-md-12 text-center">
                        <span id="timmer">
                            <h3></h3>
                        </span>
            </div>

        </div>
        <div class="row widget-row no-space margin-bottom-20">
            <div class="col-md-3 col-sm-6 col-xs-12 ">
                <div class="form-group ">
                    <label for="comment">The timer starts when a key is pressed.</label>
                    <button type="button" class="resetBtn btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
                </div>
            </div>
            <div class="col-md-9 col-sm-6 col-xs-12 ">

                <div class="row">
                    <!--generated paragraphs-->
                    <div class="lead paragraph col-md-6  blocks border">
                    </div>
                    <!--textarea-->
                    <div class="col-md-6  blocks">
                        <div class="form-group ">
                            <textarea class="form-control" rows="5" id="userInput" onkeypress="CallBoth(event)" onkeydown="BackSpace(event)"></textarea>
                            <!--alert-->
                            <div class="alert alert-danger alert-dismissible text-center" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Warning!</strong> The timer is still running. You must finish typing all of the content!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer ">
        <div class="page-footer-inner container-fluid container-lf-space">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 ">
                    <h2>About</h2>
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs12 ">
                    <h2>Subscribe Email</h2>
                    <div class="subscribe-form">
                        <form action="javascript:;">
                            <div class="input-group">
                                <input type="text" placeholder="mail@email.com" class="form-control">
                                <span class="input-group-btn">
                                <button class="btn" type="submit">Submit</button>
                            </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 ">
                    <h2>Follow Us On</h2>
                    <ul class="social-icons">
                        <li>
                            <a href="javascript:;" data-original-title="rss" class="rss"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 ">
                    <h2>Contacts</h2>
                    <address class="margin-bottom-40"> Phone: 800 123 3456
                        <br> Email:
                        <a href="mailto:info@metronic.com">info@metronic.com</a>
                    </address>
                </div>
            </div>
            <p class="page-footer-copyright">2018 &copy; Arvind Chawdhary.
            </p>
        </div>
        <div class="go2top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>

<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/mapplic/js/hammer.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/mapplic/js/jquery.easing.js" type="text/javascript"></script>
<script src="../assets/global/plugins/mapplic/js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="../assets/global/plugins/mapplic/mapplic/mapplic.js" type="text/javascript"></script>
<script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout7/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<script src="/assets/custom/js/main.js"></script>

</body>

</html>