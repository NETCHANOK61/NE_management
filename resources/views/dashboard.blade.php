<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- TITLE -->
    <title>NE Management</title>

    <!-- DASHBOARD CSS -->
    <link href="{{ asset('../assets/css/dashboard.css') }}" rel="stylesheet" />

    <!-- COLOR-THEMES CSS -->
    <link href="{{ asset('../assets/css/color-themes.css') }}" rel="stylesheet" />

    <!-- C3.JS CHARTS PLUGIN -->
    <link href="{{ asset('../assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet" />

    <!-- TABS CSS -->
    <link href="{{ asset('../assets/plugins/tabs/tabs-style2.css') }}" rel="stylesheet" type="text/css">

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="{{ asset('../assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('../assets/css/icons.css') }}" rel="stylesheet" />

    <!-- RIGHT-MENU CSS -->
    <link href="{{ asset('../assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- LEFT-SIDEMENU CSS -->
    <link href="{{ asset('../assets/plugins/jquery-jside-menu-master/css/jside-menu.css') }}" rel="stylesheet" />
    <link href="{{ asset('../assets/plugins/jquery-jside-menu-master/css/jside-skins.css') }}" rel="stylesheet" />

    <!-- Perfect scroll bar css-->
    <link href="{{ asset('../assets/plugins/pscrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!-- Sidemenu css -->
    <link id="side" href="{{ asset('../assets/plugins/side-menu/full-sidemenu.css') }}" rel="stylesheet" />

    <!-- Sidebar Accordions css -->
    <link href="{{ asset('../assets/plugins/sidemenu-responsive-tabs/css/easy-responsive-tabs.css') }}"
        rel="stylesheet">

</head>

<body class="app sidebar-mini rtl">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <div class="page">
        <div class="page-main">

            <!-- Sidebar menu-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar">
                <a class="header-brand left-meu-header-brand left-meu-header-style1 left-meu-header-brand-desktop"
                    href="index.html">
                    <img src="../assets/images/brand/logo2.png" class="header-brand-img desktop-logo" alt="Arox logo">
                    <img src="../assets/images/brand/favicon.png" class="header-brand-img mobile-view-logo"
                        alt="Arox logo">
                </a>
                <div class="input-group p-2  bg-white border-bottom">
                    <input type="text" placeholder="Search..." class="form-control search">
                    <div class="input-group-prepend mr-0">
                        <span class="input-group-text border-right search_btn btn-primary-default"><i
                                class="fa fa-search text-white"></i></span>
                    </div>
                </div>
                <div class="side-tab-body p-0 border-0" id="parentVerticalTab">
                    <div class="first-sidemenu">
                        <ul class="resp-tabs-list hor_1">
                            <li data-toggle="tooltip" data-placement="right" title="Vertical"><i
                                    class="side-menu__icon typcn typcn-document-text"></i>
                                <div class="slider-text">Submenus</div>
                            </li>
                            <li class="resp-tab-active active" data-toggle="tooltip" data-placement="right"
                                title="Home"><i class="side-menu__icon typcn typcn-device-desktop"></i>
                                <div class="slider-text">Home</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Widget"><i
                                    class="side-menu__icon typcn typcn-arrow-move-outline"></i>
                                <div class="slider-text">Widget</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Forms"><i
                                    class="side-menu__icon typcn typcn-document"></i>
                                <div class="slider-text">Forms</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="UI"><i
                                    class="side-menu__icon typcn typcn-briefcase"></i>
                                <div class="slider-text">Elements</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Apps"><i
                                    class="side-menu__icon typcn typcn-th-large-outline"></i>
                                <div class="slider-text">Apps</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Advanced UI"><i
                                    class="side-menu__icon typcn typcn-spanner-outline"></i>
                                <div class="slider-text">Components</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Calendar"><i
                                    class="side-menu__icon typcn typcn-calendar-outline"></i>
                                <div class="slider-text">Calendar</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Pages"><i
                                    class="side-menu__icon typcn typcn-cog-outline"></i>
                                <div class="slider-text">Pages</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Charts"><i
                                    class="side-menu__icon typcn typcn-chart-pie-outline"></i>
                                <div class="slider-text">Charts</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Tables"><i
                                    class="side-menu__icon typcn typcn-clipboard"></i>
                                <div class="slider-text">Tables</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Icons"><i
                                    class="side-menu__icon typcn typcn-point-of-interest-outline"></i>
                                <div class="slider-text">Icons</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Shop"><i
                                    class="side-menu__icon typcn typcn-shopping-cart"></i>
                                <div class="slider-text">Shop</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Custom"><i
                                    class="side-menu__icon typcn typcn-download-outline"></i>
                                <div class="slider-text">Custom</div>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" title="Errors"><i
                                    class="side-menu__icon typcn typcn-info-outline"></i>
                                <div class="slider-text">Errors</div>
                            </li>
                        </ul>
                        <div class="second-sidemenu">
                            <div class="resp-tabs-container hor_1">
                                <div>
                                    <h4>Style 01</h4>
                                    <ul class="side-menu">
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-device-desktop"></i><span
                                                    class="side-menu__label">Dashboard</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li><a class="slide-item" href="index.html">Dashboard 1</a></li>
                                                <li><a class="slide-item" href="index2.html">Dashboard 2</a></li>
                                                <li><a class="slide-item" href="index3.html">Dashboard 3</a></li>
                                                <li><a class="slide-item" href="index4.html">Dashboard 4</a></li>
                                                <li><a class="slide-item" href="index5.html">Dashboard 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-th-large-outline"></i><span
                                                    class="side-menu__label">Apps</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li><a href="cards.html" class="slide-item">Cards design</a></li>
                                                <li><a href="chat.html" class="slide-item">Default Chat</a></li>
                                                <li><a href="notify.html" class="slide-item">Notifications</a></li>
                                                <li><a href="sweetalert.html" class="slide-item">Sweet alerts</a></li>
                                                <li><a href="rangeslider.html" class="slide-item">Range slider</a>
                                                </li>
                                                <li><a href="scroll.html" class="slide-item">Content Scroll bar</a>
                                                </li>
                                                <li><a href="counters.html" class="slide-item">Counters</a></li>
                                                <li><a href="loaders.html" class="slide-item">Loaders</a></li>
                                                <li><a href="timeline.html" class="slide-item">Timeline</a></li>
                                                <li><a href="rating.html" class="slide-item">Rating</a></li>
                                                <li><a href="maps.html" class="slide-item">Maps</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="side-menu__item" href="widgets.html"><i
                                                    class="side-menu__icon typcn typcn-arrow-move-outline"></i><span
                                                    class="side-menu__label">Widget</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-calendar-outline"></i><span
                                                    class="side-menu__label">Calendar</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li>
                                                    <a href="calendar.html" class="slide-item">Default calendar</a>
                                                </li>
                                                <li>
                                                    <a href="calendar2.html" class="slide-item">Full calendar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-chart-pie-outline"></i><span
                                                    class="side-menu__label">Charts</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li><a href="chart-chartist.html" class="slide-item">Chart Js</a></li>
                                                <li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
                                                <li><a href="chart-echart.html" class="slide-item">ECharts</a></li>
                                                <li><a href="chart-high.html" class="slide-item">High Charts</a></li>
                                                <li><a href="chart-morris.html" class="slide-item">Morris Charts</a>
                                                </li>
                                                <li><a href="chart-nvd3.html" class="slide-item">Nvd3 Charts</a></li>
                                                <li><a href="charts.html" class="slide-item">C3 Bar Charts</a></li>
                                                <li><a href="chart-line.html" class="slide-item">C3 Line Charts</a>
                                                </li>
                                                <li><a href="chart-donut.html" class="slide-item">C3 Donut Charts</a>
                                                </li>
                                                <li><a href="chart-pie.html" class="slide-item">C3 Pie charts</a></li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-briefcase"></i><span
                                                    class="side-menu__label"> Elements</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li><a href="alerts.html" class="slide-item">Alerts</a></li>
                                                <li><a href="buttons.html" class="slide-item">Buttons</a></li>
                                                <li><a href="colors.html" class="slide-item">Colors</a></li>
                                                <li><a href="avatarsquare.html" class="slide-item">Avatar-Square</a>
                                                </li>
                                                <li><a href="avatar-round.html" class="slide-item">Avatar-Rounded</a>
                                                </li>
                                                <li><a href="avatar-radius.html" class="slide-item">Avatar-Radius</a>
                                                </li>
                                                <li><a href="dropdown.html" class="slide-item">Drop downs</a></li>
                                                <li><a href="thumbnails.html" class="slide-item">Thumbnails</a></li>
                                                <li><a href="mediaobject.html" class="slide-item">Media object</a>
                                                </li>
                                                <li><a href="list.html" class="slide-item">List</a></li>
                                                <li><a href="tags.html" class="slide-item">Tags</a></li>
                                                <li><a href="pagination.html" class="slide-item">Pagination</a></li>
                                                <li><a href="navigation.html" class="slide-item">Navigation</a></li>
                                                <li><a href="typography.html" class="slide-item">Typography</a></li>
                                                <li><a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a></li>
                                                <li><a href="badge.html" class="slide-item">Badges</a></li>
                                                <li><a href="jumbotron.html" class="slide-item">Jumbotron</a></li>
                                                <li><a href="panels.html" class="slide-item">Panels</a></li>
                                                <li><a href="modal.html" class="slide-item">Modal</a></li>
                                                <li><a href="tooltipandpopover.html" class="slide-item">Tooltip and
                                                        popover</a></li>
                                                <li><a href="progress.html" class="slide-item">Progress</a></li>
                                                <li><a href="chart.html" class="slide-item">Charts</a></li>
                                                <li><a href="carousel.html" class="slide-item">Carousels</a></li>
                                                <li><a href="accordion.html" class="slide-item">Accordions</a></li>
                                                <li><a href="tabs.html" class="slide-item">Tabs</a></li>
                                                <li><a href="headers.html" class="slide-item">Headers</a></li>
                                                <li><a href="footers.html" class="slide-item">Footers</a></li>
                                                <li><a href="crypto-currencies.html"
                                                        class="slide-item">Crypto-currencies</a></li>
                                                <li><a href="users-list.html" class="slide-item">User List</a></li>
                                                <li><a href="search.html" class="slide-item">Search page</a></li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-document"></i><span
                                                    class="side-menu__label">Forms</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li>
                                                    <a href="form-elements.html" class="slide-item">Form Elements</a>
                                                </li>
                                                <li>
                                                    <a href="form-wizard.html" class="slide-item">Form-wizard
                                                        Elements</a>
                                                </li>
                                                <li>
                                                    <a href="wysiwyag.html" class="slide-item">Text Editor</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-clipboard"></i><span
                                                    class="side-menu__label">Tables</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li>
                                                    <a href="tables.html" class="slide-item">Default table</a>
                                                </li>
                                                <li>
                                                    <a href="datatable.html" class="slide-item">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-point-of-interest-outline"></i><span
                                                    class="side-menu__label">Icons</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li>
                                                    <a href="icons.html" class="slide-item">Font Awesome</a>
                                                </li>
                                                <li>
                                                    <a href="icons2.html" class="slide-item">Material Design Icons</a>
                                                </li>
                                                <li>
                                                    <a href="icons3.html" class="slide-item">Simple Line Iocns</a>
                                                </li>
                                                <li>
                                                    <a href="icons4.html" class="slide-item">Feather Icons</a>
                                                </li>
                                                <li>
                                                    <a href="icons5.html" class="slide-item">Ionic Icons</a>
                                                </li>
                                                <li>
                                                    <a href="icons6.html" class="slide-item">Flag Icons</a>
                                                </li>
                                                <li>
                                                    <a href="icons7.html" class="slide-item">pe7 Icons</a>
                                                </li>
                                                <li>
                                                    <a href="icons8.html" class="slide-item">Themify Icons</a>
                                                </li>
                                                <li>
                                                    <a href="icons9.html" class="slide-item">Typicons Icons</a>
                                                </li>
                                                <li>
                                                    <a href="icons10.html" class="slide-item">Weather Icons</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-cog-outline"></i><span
                                                    class="side-menu__label">Pages</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li><a href="profile.html" class="slide-item">Profile</a></li>
                                                <li><a href="editprofile.html" class="slide-item">Edit Profile</a>
                                                </li>
                                                <li><a href="email.html" class="slide-item">Mail-Compose</a></li>
                                                <li><a href="emailservices.html" class="slide-item">Mail-inbox</a>
                                                </li>
                                                <li><a href="gallery.html" class="slide-item">Gallery</a></li>
                                                <li><a href="about.html" class="slide-item">About Company </a></li>
                                                <li><a href="services.html" class="slide-item">Services </a></li>
                                                <li><a href="faq.html" class="slide-item">FAQS</a></li>
                                                <li><a href="terms.html" class="slide-item">Terms & Conditions</a>
                                                </li>
                                                <li><a href="faq.html" class="slide-item">FAQS</a></li>
                                                <li><a href="construction.html" class="slide-item">Under
                                                        Construction</a></li>
                                                <li><a href="blog.html" class="slide-item">Blog</a></li>
                                                <li><a href="invoice.html" class="slide-item">Invoice</a></li>
                                                <li><a href="pricing.html" class="slide-item">Pricing Tables</a></li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-shopping-cart"></i><span
                                                    class="side-menu__label">E-commerce</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li>
                                                    <a href="shop.html" class="slide-item">Products</a>
                                                </li>
                                                <li>
                                                    <a href="shop-description.html" class="slide-item">Product
                                                        Details</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" class="slide-item">Shopping Cart</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-download-outline"></i><span
                                                    class="side-menu__label">Custom Pages</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li>
                                                    <a href="login.html" class="slide-item">Login</a>
                                                </li>
                                                <li>
                                                    <a href="register.html" class="slide-item">Register</a>
                                                </li>
                                                <li>
                                                    <a href="forgot-password.html" class="slide-item">Forgot
                                                        password</a>
                                                </li>
                                                <li>
                                                    <a href="lockscreen.html" class="slide-item">Lock screen</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-info-outline"></i><span
                                                    class="side-menu__label">Error pages</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li>
                                                    <a href="400.html" class="slide-item">400 Error</a>
                                                </li>
                                                <li>
                                                    <a href="401.html" class="slide-item">401 Error</a>
                                                </li>
                                                <li>
                                                    <a href="403.html" class="slide-item">403 Error</a>
                                                </li>
                                                <li>
                                                    <a href="404.html" class="slide-item">404 Error</a>
                                                </li>
                                                <li>
                                                    <a href="500.html" class="slide-item">500 Error</a>
                                                </li>
                                                <li>
                                                    <a href="503.html" class="slide-item">503 Error</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h4 class="font-weight-normal mt-5">Style 02</h4>
                                    <ul class="side-menu">
                                        <li class="slide">
                                            <a class="slide-item" data-toggle="slide" href="#">Side-menu 02</a>
                                            <ul class="slide-menu">
                                                <li><a class="slide-item" href="#">Side-menu 1</a></li>
                                                <li><a class="slide-item" href="#">Side-menu 2</a></li>
                                                <li><a class="slide-item" href="#">Side-menu 3</a></li>
                                                <li><a class="slide-item" href="#">Side-menu 4</a></li>
                                                <li><a class="slide-item" href="#">Side-menu 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="slide-item" data-toggle="slide" href="#">Side-menu 02</a>
                                            <ul class="slide-menu">
                                                <li><a class="slide-item" href="#">Side-menu 1</a></li>
                                                <li><a class="slide-item" href="#">Side-menu 2</a></li>
                                                <li><a class="slide-item" href="#">Side-menu 3</a></li>
                                                <li><a class="slide-item" data-toggle="slide1"
                                                        href="#">Side-menu 4</a>
                                                    <ul class="slide-menu1">
                                                        <li><a class="slide-item" href="#">Side-menu 1</a></li>
                                                        <li><a class="slide-item" href="#">Side-menu 2</a></li>
                                                        <li><a class="slide-item" href="#">Side-menu 3</a></li>
                                                        <li><a class="slide-item" href="#">Side-menu 4</a></li>
                                                        <li><a class="slide-item" href="#">Side-menu 5</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="slide-item" href="#">Side-menu 5</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h4 class="font-weight-normal mt-5">Style 03</h4>
                                    <ul class="side-menu">
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-device-desktop"></i><span
                                                    class="side-menu__label">Side Menu 01</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li><a class="slide-item" href="#">Side Menu 01</a></li>
                                                <li><a class="slide-item" href="#">Side Menu 02</a></li>
                                                <li><a class="slide-item" href="#">Side Menu 03</a></li>
                                                <li><a class="slide-item" href="#">Side Menu 04</a></li>
                                                <li><a class="slide-item" href="#">Side Menu 05</a></li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                                    class="side-menu__icon typcn typcn-th-large-outline"></i><span
                                                    class="side-menu__label">Side Menu 02</span><i
                                                    class="angle fa fa-angle-right"></i></a>
                                            <ul class="slide-menu">
                                                <li><a class="slide-item" href="#">Side Menu 01</a></li>
                                                <li><a class="slide-item" href="#">Side Menu 02</a></li>
                                                <li><a class="slide-item" href="#">Side Menu 03</a></li>
                                                <li><a class="slide-item" href="#">Side Menu 04</a></li>
                                                <li><a class="slide-item" data-toggle="slide1" href="#">Side
                                                        Menu 05</a>
                                                    <ul class="slide-menu1">
                                                        <li><a class="slide-item" href="#">Side Menu 01</a></li>
                                                        <li><a class="slide-item" href="#">Side Menu 02</a></li>
                                                        <li><a class="slide-item" href="#">Side Menu 03</a></li>
                                                        <li><a class="slide-item" href="#">Side Menu 04</a></li>
                                                        <li><a class="slide-item" href="#">Side Menu 05</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="resp-tab-content-active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i class="typcn typcn-device-desktop"></i>
                                                Home</h4>
                                            <a href="index.html" class="slide-item">Entertainment</a>
                                            <a href="index2.html" class="slide-item">Big Data Dashboard</a>
                                            <a href="index3.html" class="slide-item">HR Dashboard</a>
                                            <a href="index4.html" class="slide-item">Crypto Currencies</a>
                                            <a href="index5.html" class="slide-item">Gaming Dashboard</a>
                                            <div class="card mt-5">
                                                <div class="card-body p-3">
                                                    <div class="d-flex">
                                                        <div class="pr-4 pt-1"><i
                                                                class="ti-user fs-40 mt-0 text-primary"></i></div>
                                                        <div class="">
                                                            <span>New Users</span>
                                                            <h3 class="mb-0">65,485</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body p-3">
                                                    <div class="d-flex">
                                                        <div class="pr-4 pt-1"><i
                                                                class="ti-stats-up fs-40 mt-0 text-info"></i></div>
                                                        <div class="">
                                                            <span>Sales</span>
                                                            <h3 class="mb-0">$75,845</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-5">Short Cut</h6>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-comment-alt fs-30 text-secondary"></i>
                                                        <div><small class="mb-0">Messages</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-image fs-30 text-yellow"></i>
                                                        <div><small class="mb-0">Gallery</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-bell fs-30 text-primary"></i>
                                                        <div><small class="mb-0">Alerts</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-settings fs-30 text-danger"></i>
                                                        <div><small class="mb-0">Settings</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-2 mb-4">Browser Statistics</h6>
                                            <div class="progress progress-lg mb-4">
                                                <div class="progress-bar bg-yellow w-20"></div>
                                                <div class="progress-bar bg-pink w-10"></div>
                                                <div class="progress-bar bg-secondary w-30"></div>
                                                <div class="progress-bar bg-primary w-25"></div>
                                                <div class="progress-bar bg-danger w-15"></div>
                                            </div>
                                            <div class="table-responsive">
                                                <table
                                                    class="table card-table table-vcenter text-nowrap table-bordered border-top bg-white">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                <div class="w-3 h-3 brround bg-yellow"></div>
                                                            </th>
                                                            <td>Safari</td>
                                                            <td>20%</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <div class="w-3 h-3 brround bg-pink"></div>
                                                            </th>
                                                            <td>IE</td>
                                                            <td>10%</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <div class="w-3 h-3 brround bg-secondary"></div>
                                                            </th>
                                                            <td>Chrome</td>
                                                            <td>30%</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <div class="w-3 h-3 brround bg-primary"></div>
                                                            </th>
                                                            <td>Firefox</td>
                                                            <td>25%</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <div class="w-3 h-3 brround bg-danger"></div>
                                                            </th>
                                                            <td>Opera</td>
                                                            <td>15%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i
                                                    class="typcn typcn-arrow-move-outline"></i> Widgets</h4>
                                            <a href="widgets.html" class="slide-item">Widgets</a>
                                            <a href="maps.html" class="slide-item">Maps</a>
                                            <div class="card mt-5">
                                                <div class="card-body p-3">
                                                    <div class="d-flex">
                                                        <div class="pr-4 pt-1"><i
                                                                class="ti-user fs-40 mt-0 text-primary"></i></div>
                                                        <div class="">
                                                            <span>New Users</span>
                                                            <h3 class="mb-0">65,485</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body p-3">
                                                    <div class="d-flex">
                                                        <div class="pr-4 pt-1"><i
                                                                class="ti-stats-up fs-40 mt-0 text-info"></i></div>
                                                        <div class="">
                                                            <span>Sales</span>
                                                            <h3 class="mb-0">$75,845</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Contacts</h6>
                                            <div class="card overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush ">
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar  brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/12.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mozelle</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/21.jpg"></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Florinda</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/29.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">lina Bernie</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/2.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mclaughin</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg" alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg" alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i class="typcn typcn-document"></i> Forms
                                            </h4>
                                            <a href="form-elements.html" class="slide-item">Form Elements</a>
                                            <a href="wysiwyag.html" class="slide-item">Form Editor</a>
                                            <a href="form-wizard.html" class="slide-item">Form Wizard</a>
                                            <h6 class="text-uppercase mt-6 mb-5">Short Cut</h6>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-headphone fs-30 text-secondary"></i>
                                                        <div><small class="mb-0">Support</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-bell fs-30 text-yellow"></i>
                                                        <div><small class="mb-0">Notify</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-panel fs-30 text-primary"></i>
                                                        <div><small class="mb-0">Settings</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-layers fs-30 text-danger"></i>
                                                        <div><small class="mb-0">Layouts</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-4 mb-4">Contacts</h6>
                                            <div class="card overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush ">
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar  brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/12.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mozelle</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/21.jpg"></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Florinda</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/29.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">lina Bernie</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/2.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mclaughin</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg" alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg" alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i class="typcn typcn-briefcase"></i>
                                                Elements</h4>
                                            <a href="alerts.html" class="slide-item">Alerts</a>
                                            <a href="buttons.html" class="slide-item">Buttons</a>
                                            <a href="colors.html" class="slide-item">Colors</a>
                                            <a href="avatarsquare.html" class="slide-item">Avatar-Square</a>
                                            <a href="avatar-round.html" class="slide-item">Avatar-Rounded</a>
                                            <a href="avatar-radius.html" class="slide-item">Avatar-Radius</a>
                                            <a href="dropdown.html" class="slide-item">Drop downs</a>
                                            <a href="thumbnails.html" class="slide-item">Thumbnails</a>
                                            <a href="mediaobject.html" class="slide-item">Media object</a>
                                            <a href="list.html" class="slide-item">List</a>
                                            <a href="tags.html" class="slide-item">Tags</a>
                                            <a href="pagination.html" class="slide-item">Pagination</a>
                                            <a href="navigation.html" class="slide-item">Navigation</a>
                                            <a href="typography.html" class="slide-item">Typography</a>
                                            <a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a>
                                            <a href="badge.html" class="slide-item">Badges</a>
                                            <a href="jumbotron.html" class="slide-item">Jumbotron</a>
                                            <a href="panels.html" class="slide-item">Panels</a>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg" alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg" alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i
                                                    class="typcn typcn-th-large-outline"></i> Apps</h4>
                                            <a href="cards.html" class="slide-item">Cards design</a>
                                            <a href="chat.html" class="slide-item">Default Chat</a>
                                            <a href="notify.html" class="slide-item">Notifications</a>
                                            <a href="sweetalert.html" class="slide-item">Sweet alerts</a>
                                            <a href="rangeslider.html" class="slide-item">Range slider</a>
                                            <a href="scroll.html" class="slide-item">Content Scroll bar</a>
                                            <a href="counters.html" class="slide-item">Counters</a>
                                            <a href="loaders.html" class="slide-item">Loaders</a>
                                            <a href="timeline.html" class="slide-item">Timeline</a>
                                            <a href="rating.html" class="slide-item">Rating</a>
                                            <a href="maps.html" class="slide-item">Maps</a>
                                            <div class="card mt-5">
                                                <div class="card-body p-3">
                                                    <div class="d-flex">
                                                        <div class="pr-4 pt-1"><i
                                                                class="ti-user fs-40 mt-0 text-primary"></i></div>
                                                        <div class="">
                                                            <span>New Users</span>
                                                            <h3 class="mb-0">65,485</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body p-3">
                                                    <div class="d-flex">
                                                        <div class="pr-4 pt-1"><i
                                                                class="ti-stats-up fs-40 mt-0 text-info"></i></div>
                                                        <div class="">
                                                            <span>Sales</span>
                                                            <h3 class="mb-0">$75,845</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Contacts</h6>
                                            <div class="card overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush ">
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar  brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/12.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mozelle</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/21.jpg"></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Florinda</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/29.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">lina Bernie</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/2.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mclaughin</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg" alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg" alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i class="typcn typcn-spanner-outline"></i>
                                                Components</h4>
                                            <a href="modal.html" class="slide-item">Modal</a>
                                            <a href="tooltipandpopover.html" class="slide-item">Tooltip and
                                                popover</a>
                                            <a href="progress.html" class="slide-item">Progress</a>
                                            <a href="chart.html" class="slide-item">Charts</a>
                                            <a href="carousel.html" class="slide-item">Carousels</a>
                                            <a href="accordion.html" class="slide-item">Accordions</a>
                                            <a href="tabs.html" class="slide-item">Tabs</a>
                                            <a href="headers.html" class="slide-item">Headers</a>
                                            <a href="footers.html" class="slide-item">Footers</a>
                                            <a href="crypto-currencies.html"
                                                class="slide-item">Crypto-currencies</a>
                                            <a href="users-list.html" class="slide-item">User List</a>
                                            <a href="search.html" class="slide-item">Search page</a>
                                            <div class="card mt-5">
                                                <div class="card-body p-3">
                                                    <div class="d-flex">
                                                        <div class="pr-4 pt-1"><i
                                                                class="ti-user fs-40 mt-0 text-primary"></i></div>
                                                        <div class="">
                                                            <span>New Users</span>
                                                            <h3 class="mb-0">65,485</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body p-3">
                                                    <div class="d-flex">
                                                        <div class="pr-4 pt-1"><i
                                                                class="ti-stats-up fs-40 mt-0 text-info"></i></div>
                                                        <div class="">
                                                            <span>Sales</span>
                                                            <h3 class="mb-0">$75,845</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Contacts</h6>
                                            <div class="card overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush ">
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar  brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/12.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mozelle</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/21.jpg"></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Florinda</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/29.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">lina Bernie</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/2.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mclaughin</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i
                                                    class="typcn typcn-calendar-outline"></i> Calendar</h4>
                                            <a href="calendar.html" class="slide-item">Default calendar</a>
                                            <a href="calendar2.html" class="slide-item">Full calendar</a>
                                            <h6 class="text-uppercase mt-6 mb-5">Short Cut</h6>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-headphone fs-30 text-secondary"></i>
                                                        <div><small class="mb-0">Support</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-bell fs-30 text-yellow"></i>
                                                        <div><small class="mb-0">Notify</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-panel fs-30 text-primary"></i>
                                                        <div><small class="mb-0">Settings</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-layers fs-30 text-danger"></i>
                                                        <div><small class="mb-0">Layouts</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-4 mb-4">Contacts</h6>
                                            <div class="card overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush ">
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar  brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/12.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mozelle</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/21.jpg"></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Florinda</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/29.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">lina Bernie</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/2.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mclaughin</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i class="typcn typcn-cog-outline"></i>
                                                Pages</h4>
                                            <a href="profile.html" class="slide-item">Profile</a>
                                            <a href="editprofile.html" class="slide-item">Edit Profile</a>
                                            <a href="email.html" class="slide-item">Mail-Compose</a>
                                            <a href="emailservices.html" class="slide-item">Mail-inbox</a>
                                            <a href="gallery.html" class="slide-item">Gallery</a>
                                            <a href="about.html" class="slide-item">About Company </a>
                                            <a href="services.html" class="slide-item">Services </a>
                                            <a href="faq.html" class="slide-item">FAQS</a>
                                            <a href="terms.html" class="slide-item">Terms & Conditions</a>
                                            <a href="faq.html" class="slide-item">FAQS</a>
                                            <a href="construction.html" class="slide-item">Under Construction</a>
                                            <a href="blog.html" class="slide-item">Blog</a>
                                            <a href="invoice.html" class="slide-item">Invoice</a>
                                            <a href="pricing.html" class="slide-item">Pricing Tables</a>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i
                                                    class="typcn typcn-chart-pie-outline"></i> Charts</h4>
                                            <a href="chart-chartist.html" class="slide-item">Chart Js</a>
                                            <a href="chart-flot.html" class="slide-item"> Flot Charts</a>
                                            <a href="chart-echart.html" class="slide-item">ECharts</a>
                                            <a href="chart-high.html" class="slide-item">High Charts</a>
                                            <a href="chart-morris.html" class="slide-item">Morris Charts</a>
                                            <a href="chart-nvd3.html" class="slide-item">Nvd3 Charts</a>
                                            <a href="charts.html" class="slide-item">C3 Bar Charts</a>
                                            <a href="chart-line.html" class="slide-item">C3 Line Charts</a>
                                            <a href="chart-donut.html" class="slide-item">C3 Donut Charts</a>
                                            <a href="chart-pie.html" class="slide-item">C3 Pie charts</a>
                                            <div class="card mt-5">
                                                <div class="card-body p-3">
                                                    <div class="d-flex">
                                                        <div class="pr-4 pt-1"><i
                                                                class="ti-user fs-40 mt-0 text-primary"></i></div>
                                                        <div class="">
                                                            <span>New Users</span>
                                                            <h3 class="mb-0">65,485</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body p-3">
                                                    <div class="d-flex">
                                                        <div class="pr-4 pt-1"><i
                                                                class="ti-stats-up fs-40 mt-0 text-info"></i></div>
                                                        <div class="">
                                                            <span>Sales</span>
                                                            <h3 class="mb-0">$75,845</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Contacts</h6>
                                            <div class="card overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush ">
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar  brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/12.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mozelle</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/21.jpg"></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Florinda</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/29.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">lina Bernie</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/2.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mclaughin</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i class="typcn typcn-clipboard"></i>
                                                Tables</h4>
                                            <a href="tables.html" class="slide-item">Default table</a>
                                            <a href="datatable.html" class="slide-item">Data Table</a>
                                            <h6 class="text-uppercase mt-6 mb-5">Short Cut</h6>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-headphone fs-30 text-secondary"></i>
                                                        <div><small class="mb-0">Support</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-bell fs-30 text-yellow"></i>
                                                        <div><small class="mb-0">Notify</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-panel fs-30 text-primary"></i>
                                                        <div><small class="mb-0">Settings</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-layers fs-30 text-danger"></i>
                                                        <div><small class="mb-0">Layouts</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-4 mb-4">Contacts</h6>
                                            <div class="card overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush ">
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar  brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/12.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mozelle</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/21.jpg"></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Florinda</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/29.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">lina Bernie</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/2.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mclaughin</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i
                                                    class="typcn typcn-point-of-interest-outline"></i> Icons</h4>
                                            <a href="icons.html" class="slide-item">Font Awesome</a>
                                            <a href="icons2.html" class="slide-item">Material Design Icons</a>
                                            <a href="icons3.html" class="slide-item">Simple Line Icons</a>
                                            <a href="icons4.html" class="slide-item">Feather Icons</a>
                                            <a href="icons5.html" class="slide-item">Ionic Icons</a>
                                            <a href="icons6.html" class="slide-item">Flag Icons</a>
                                            <a href="icons7.html" class="slide-item">pe7 Icons</a>
                                            <a href="icons8.html" class="slide-item">Themify Icons</a>
                                            <a href="icons9.html" class="slide-item">Typicons Icons</a>
                                            <a href="icons10.html" class="slide-item">Weather Icons</a>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i class="typcn typcn-shopping-cart"></i>
                                                E-commerce</h4>
                                            <a href="shop.html" class="slide-item">Shop</a>
                                            <a href="shop-description.html" class="slide-item">Product Details</a>
                                            <a href="cart.html" class="slide-item">Shopping Cart</a>
                                            <h6 class="text-uppercase mt-6 mb-5">Short Cut</h6>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-headphone fs-30 text-secondary"></i>
                                                        <div><small class="mb-0">Support</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-bell fs-30 text-yellow"></i>
                                                        <div><small class="mb-0">Notify</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-panel fs-30 text-primary"></i>
                                                        <div><small class="mb-0">Settings</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-layers fs-30 text-danger"></i>
                                                        <div><small class="mb-0">Layouts</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-4 mb-4">Contacts</h6>
                                            <div class="card overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush ">
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar  brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/12.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mozelle</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/21.jpg"></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Florinda</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/29.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">lina Bernie</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/2.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mclaughin</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i
                                                    class="typcn typcn-download-outline"></i> Account</h4>
                                            <a href="login.html" class="slide-item">Login</a>
                                            <a href="register.html" class="slide-item">Register</a>
                                            <a href="forgot-password.html" class="slide-item">Forgot password</a>
                                            <a href="lockscreen.html" class="slide-item">Lock screen</a>
                                            <h6 class="text-uppercase mt-6 mb-5">Short Cut</h6>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-headphone fs-30 text-secondary"></i>
                                                        <div><small class="mb-0">Support</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-bell fs-30 text-yellow"></i>
                                                        <div><small class="mb-0">Notify</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-panel fs-30 text-primary"></i>
                                                        <div><small class="mb-0">Settings</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-layers fs-30 text-danger"></i>
                                                        <div><small class="mb-0">Layouts</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-4 mb-4">Contacts</h6>
                                            <div class="card overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush ">
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar  brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/12.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mozelle</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/21.jpg"></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Florinda</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/29.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">lina Bernie</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/2.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mclaughin</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-normal"><i class="typcn typcn-info-outline"></i>
                                                Error pages</h4>
                                            <a href="400.html" class="slide-item">400</a>
                                            <a href="401.html" class="slide-item">401</a>
                                            <a href="403.html" class="slide-item">403</a>
                                            <a href="404.html" class="slide-item">404</a>
                                            <a href="500.html" class="slide-item">500</a>
                                            <a href="503.html" class="slide-item">503</a>
                                            <h6 class="text-uppercase mt-6 mb-5">Short Cut</h6>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-headphone fs-30 text-secondary"></i>
                                                        <div><small class="mb-0">Support</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-bell fs-30 text-yellow"></i>
                                                        <div><small class="mb-0">Notify</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-panel fs-30 text-primary"></i>
                                                        <div><small class="mb-0">Settings</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="border text-center bg-white  mb-5">
                                                        <i class="ti-layers fs-30 text-danger"></i>
                                                        <div><small class="mb-0">Layouts</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-4 mb-4">Contacts</h6>
                                            <div class="card overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush ">
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar  brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/12.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mozelle</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/21.jpg"></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Florinda</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/29.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">lina Bernie</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex  align-items-center">
                                                            <div class="mr-2">
                                                                <span class="avatar brround cover-image"
                                                                    data-image-src="../assets/images/faces/female/2.jpg"><span
                                                                        class="avatar-status bg-green"></span></span>
                                                            </div>
                                                            <div class="">
                                                                <div class="font-weight-semibold">Mclaughin</div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-icon"><i
                                                                        class="fa fa-phone fs-10"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Friends</h6>
                                            <div class="avatar-list">
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/1.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/male/2.jpg"
                                                        alt="img"></span>
                                                <span><img class="avatar brround mr-2"
                                                        src="../assets/images/faces/female/1.jpg"
                                                        alt="img"></span>
                                                <span class="avatar brround bg-primary">+8</span>
                                            </div>
                                            <h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col-4 -->
            </aside>
            <!--sidemenu end-->

            <!-- app-content-->
            <div class="app-content  my-3 my-md-5">

                <!-- HEADER -->
                <div class="header header-fixed ">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <a class="header-brand d-md-none" href="index.html">
                                <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo"
                                    alt="Arox logo">
                                <img src="../assets/images/brand/favicon2.png"
                                    class="header-brand-img mobile-view-logo" alt="Arox logo">
                            </a>
                            <!-- LOGO -->
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-0" data-toggle="sidebar"
                                href="#"></a>
                            <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                                <a href="#" data-toggle="search"
                                    class="nav-link nav-link-lg d-md-none navsearch"><i
                                        class="ion ion-search"></i></a>
                                <div class="">
                                    <form class="form-inline">
                                        <div class="search-element">
                                            <input type="search" class="form-control header-search"
                                                placeholder="Search…" aria-label="Search" tabindex="1">
                                            <button class="btn btn-primary-color search" type="submit"><i
                                                    class="ti-search"></i></button>
                                        </div>
                                    </form>
                                </div><!-- SEARCH -->
                                <div class="dropdown d-sm-flex d-none">
                                    <a class="nav-link icon full-screen-link nav-link-bg">
                                        <i class="ti-arrows-corner" id="fullscreen-button"></i>
                                    </a>
                                </div><!-- FULL-SCREEN -->
                                <div class="dropdown d-sm-flex d-none notifications">
                                    <a class="nav-link icon" data-toggle="dropdown">
                                        <i class="ti-bell"></i>
                                        <span class="nav-unread bg-warning-1 pulse"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right  dropdown-menu-arrow">
                                        <div class="dropdown-item p-4 bg-image-2 text-center">
                                            <h4 class="user-semi-title mb-0 font-weight-bold">3 New <span
                                                    class="font-weight-normal">Notifications</span></h4>

                                        </div>
                                        <a href="#" class="dropdown-item mt-2 d-flex pb-3">
                                            <div class="notifyimg bg-success">
                                                <i class="fa fa-thumbs-o-up"></i>
                                            </div>
                                            <div>
                                                <strong>Someone likes our posts.</strong>
                                                <div class="small">3 hours ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex pb-3">
                                            <div class="notifyimg bg-warning">
                                                <i class="fa fa-commenting-o"></i>
                                            </div>
                                            <div>
                                                <strong> 3 New Comments</strong>
                                                <div class="small">5 hour ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex pb-3">
                                            <div class="notifyimg bg-danger">
                                                <i class="fa fa-cogs"></i>
                                            </div>
                                            <div>
                                                <strong> Server Rebooted.</strong>
                                                <div class="small">45 mintues ago</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center">View all
                                            Notification</a>
                                    </div>
                                </div><!-- NOTIFICATIONS -->
                                <div class="dropdown d-sm-flex d-none message">
                                    <a class="nav-link icon text-center" data-toggle="dropdown">
                                        <i class="ti-email floating"></i>
                                        <span class="nav-unread bg-warning-1 pulse"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <div class="dropdown-item p-4 bg-image-3 text-center">
                                            <h4 class="user-semi-title mb-0 font-weight-bold">4 New <span
                                                    class="font-weight-normal">Messages</span></h4>

                                        </div>
                                        <a href="#" class="dropdown-item d-flex mt-2 pb-3">
                                            <div class="avatar avatar-md brround mr-3 d-block cover-image"
                                                data-image-src="../assets/images/faces/male/41.jpg">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                            <div>
                                                <strong>Madeleine</strong>
                                                <p class="mb-0 fs-13">Hey! there I' am available</p>
                                                <div class="small">3 hours ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex pb-3">
                                            <div class="avatar avatar-md brround mr-3 d-block cover-image"
                                                data-image-src="../assets/images/faces/female/1.jpg">
                                                <span class="avatar-status bg-red"></span>
                                            </div>
                                            <div>
                                                <strong>Anthony</strong>
                                                <p class="mb-0 fs-13 ">New product Launching</p>
                                                <div class="small">5 hour ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex pb-3">
                                            <div class="avatar avatar-md brround mr-3 d-block cover-image"
                                                data-image-src="../assets/images/faces/female/18.jpg">
                                                <span class="avatar-status bg-yellow"></span>
                                            </div>
                                            <div>
                                                <strong>Olivia</strong>
                                                <p class="mb-0 fs-13 ">New Schedule Realease</p>
                                                <div class="small">45 mintues ago</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center">See all Messages</a>
                                    </div>
                                </div><!-- MESSAGE-BOX -->
                                <div class="dropdown text-center selector profile-1 d-sm-flex d-none">
                                    <a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
                                        <span><img src="../assets/images/faces/female/16.jpg" alt="profile-user"
                                                class="avatar brround cover-image mb-1 ml-0"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <div class="text-center bg-image p-4">
                                            <a href="#"
                                                class="dropdown-item text-center font-weight-sembold user pt-0"
                                                data-toggle="dropdown">Joyce Stewart</a>
                                            <span class="text-center user-semi-title ">web designer</span>
                                        </div>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="float-right"><span
                                                    class="badge badge-danger">6</span></span>
                                            <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                                        </a>
                                        <a class="dropdown-item" href="{{route('logout')}}">
                                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                        </a>
                                    </div>
                                </div><!-- PROFILE -->
                                <button class="navbar-toggler navresponsive-toggler d-sm-none" type="button"
                                    data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                    aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                                </button>
                                <div class="dropdown d-md-flex header-settings">
                                    <a href="#" class="nav-link icon " data-toggle="sidebar-right"
                                        data-target=".sidebar-right">
                                        <i class="ti-menu"></i>
                                    </a>
                                </div><!-- SIDE-MENU -->
                            </div>
                            <a href="#" class="header-toggler d-lg-none ml-lg-0" data-toggle="collapse"
                                data-target="#headerMenuCollapse">
                                <span class="header-toggler-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- HEADER END -->

                <!--Resposnisve Navbar-->
                <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-sm-none">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2 ml-auto">

                            <div class="dropdown d-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <i class="ti-arrows-corner" id="fullscreen-button"></i>
                                </a>
                            </div><!-- FULL-SCREEN -->
                            <div class="dropdown d-flex">
                                <a class="nav-link icon" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <span class="nav-unread bg-warning-1 pulse"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right  dropdown-menu-arrow">
                                    <div class="dropdown-item p-4 bg-image-2 text-center">
                                        <h4 class="user-semi-title mb-0 font-weight-bold">3 New <span
                                                class="font-weight-normal">Notifications</span></h4>

                                    </div>
                                    <a href="#" class="dropdown-item mt-2 d-flex pb-3">
                                        <div class="notifyimg bg-success">
                                            <i class="fa fa-thumbs-o-up"></i>
                                        </div>
                                        <div>
                                            <strong>Someone likes our posts.</strong>
                                            <div class="small">3 hours ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg bg-warning">
                                            <i class="fa fa-commenting-o"></i>
                                        </div>
                                        <div>
                                            <strong> 3 New Comments</strong>
                                            <div class="small">5 hour ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg bg-danger">
                                            <i class="fa fa-cogs"></i>
                                        </div>
                                        <div>
                                            <strong> Server Rebooted.</strong>
                                            <div class="small">45 mintues ago</div>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">View all Notification</a>
                                </div>
                            </div><!-- NOTIFICATIONS -->
                            <div class="dropdown d-flex">
                                <a class="nav-link icon text-center" data-toggle="dropdown">
                                    <i class="ti-email floating"></i>
                                    <span class="nav-unread bg-warning-1 pulse"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <div class="dropdown-item p-4 bg-image-3 text-center">
                                        <h4 class="user-semi-title mb-0 font-weight-bold">4 New <span
                                                class="font-weight-normal">Messages</span></h4>

                                    </div>
                                    <a href="#" class="dropdown-item d-flex mt-2 pb-3">
                                        <div class="avatar avatar-md brround mr-3 d-block cover-image"
                                            data-image-src="../assets/images/faces/male/41.jpg">
                                            <span class="avatar-status bg-green"></span>
                                        </div>
                                        <div>
                                            <strong>Madeleine</strong>
                                            <p class="mb-0 fs-13">Hey! there I' am available</p>
                                            <div class="small">3 hours ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="avatar avatar-md brround mr-3 d-block cover-image"
                                            data-image-src="../assets/images/faces/female/1.jpg">
                                            <span class="avatar-status bg-red"></span>
                                        </div>
                                        <div>
                                            <strong>Anthony</strong>
                                            <p class="mb-0 fs-13 ">New product Launching</p>
                                            <div class="small">5 hour ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="avatar avatar-md brround mr-3 d-block cover-image"
                                            data-image-src="../assets/images/faces/female/18.jpg">
                                            <span class="avatar-status bg-yellow"></span>
                                        </div>
                                        <div>
                                            <strong>Olivia</strong>
                                            <p class="mb-0 fs-13 ">New Schedule Realease</p>
                                            <div class="small">45 mintues ago</div>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">See all Messages</a>
                                </div>
                            </div><!-- MESSAGE-BOX -->
                            <div class="dropdown text-center selector profile-1 mt-4">
                                <a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
                                    <span><img src="../assets/images/faces/female/16.jpg" alt="profile-user"
                                            class="avatar brround cover-image mb-1 ml-0"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <div class="text-center bg-image p-4">
                                        <a href="#"
                                            class="dropdown-item text-center font-weight-sembold user pt-0"
                                            data-toggle="dropdown">Joyce Stewart</a>
                                        <span class="text-center user-semi-title ">web designer</span>
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="float-right"><span class="badge badge-danger">6</span></span>
                                        <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                                    </a>
                                    <a class="dropdown-item" href="{{route('logout')}}">
                                        <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                    </a>
                                </div>
                            </div><!-- PROFILE -->
                        </div>
                    </div>
                </div>
                <!--/Resposnisve Navbar-->



                <div class="side-app">

                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                        </ol>
                        <div>
                            <a href="#" class="btn btn-sm btn-primary"><i class="ti-settings"></i> General
                                Settings </a>
                            <a href="#" class="btn btn-sm btn-secondary"><i class="ti-file"></i> Print </a>
                            <a href="#" class="btn btn-sm btn-danger">Buy Now </a>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- ROW-1 OPEN -->
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-header border-bottom-0">
                                    <h3 class="card-title font-weight-normal fs-14">Active Users</h3>
                                    <div class="card-options">
                                        <a class="text-gray" href="javascript:void(0)">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="chart-circle chart-circle-sm ml-0" data-value="0.65"
                                                data-thickness="5" data-color="#30c102"><canvas width="100"
                                                    height="100"></canvas>
                                                <div class="chart-circle-value">
                                                    <div class="">65% </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-auto">
                                            <h6 class="fs-13 text-muted">Active Users</h6>
                                            <h3 class="font-rubik mb-0">45,256</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->

                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-header border-bottom-0">
                                    <h3 class="card-title font-weight-normal fs-14">New Users</h3>
                                    <div class="card-options">
                                        <a class="text-gray" href="javascript:void(0)">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="mb-2">6542</h3>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <p class="mb-2 text-muted">New Users<span
                                                class="float-right badge badge-pill badge-danger">80%</span></p>
                                        <div class="progress h-2">
                                            <div class="progress-bar bg-danger w-80 " role="progressbar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->

                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-header border-bottom-0">
                                    <h3 class="card-title font-weight-normal fs-14">Deactive Users</h3>
                                    <div class="card-options">
                                        <a class="text-gray" href="javascript:void(0)">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="chart-circle chart-circle-sm ml-0" data-value="0.65"
                                                data-thickness="5" data-color="#ead40c"><canvas width="100"
                                                    height="100"></canvas>
                                                <div class="chart-circle-value">
                                                    <div class="">75% </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-auto">
                                            <h6 class="fs-13 text-muted">Deactive Users</h6>
                                            <h3 class="font-rubik mb-0">75,456</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->

                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-header border-bottom-0">
                                    <h3 class="card-title font-weight-normal fs-14">Total Users</h3>
                                    <div class="card-options">
                                        <a class="text-gray" href="javascript:void(0)">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="mb-2">1,84,569</h3>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <p class="mb-2 text-muted">New Users<span
                                                class="float-right badge badge-pill badge-secondary">90%</span></p>
                                        <div class="progress h-2">
                                            <div class="progress-bar bg-secondary w-90 " role="progressbar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->
                    </div>
                    <!-- ROW-1 CLOSED -->

                    <!-- ROW-2 OPEN -->
                    <div class="row row-deck">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="card-header">
                                    <h3 class="card-title">Total Budget</h3>
                                </div>
                                <div class="card-body overflow-hidden pb-0">
                                    <h2 class="mb-0 font-rubik fs-40">$1,87,595</h2>
                                    <small class="text-muted">15% Higher Of Previous Month</small>
                                    <div class="row mt-4">
                                        <div class="col-sm-12">
                                            <div class="mb-0">
                                                <h4 class="mb-2 d-block">
                                                    <span class="fs-16">Total Expences</span>
                                                    <span class="float-right font-rubik fs-30">$1587</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart-wrapper overflow-hidden">
                                    <canvas id="total-budget"
                                        class="areaChart overflow-hidden chart-dropshadow overflow-hidden"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="card-body text-center overflow-hidden">
                                    <div class="mb-4">
                                        <h5 class="card-title fs-40">Expense Trend</h5>
                                    </div>
                                    <h2 class="mb-1 font-rubik fs-40">7,423</h2>
                                    <div class="mb-1">
                                        <small class="text-primary mb-0">+15%</small>
                                        <small class="text-muted ml-2">From Last Month</small>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="expense" class="chart-dropshadow2 overflow-hidden"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="card-header">
                                    <h3 class="card-title">All Expenses By Category</h3>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <p class="mb-0">Rent and Utilities</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
                                                <div class="progress-bar bg-primary-1 w-80"></div>
                                            </div>
                                            <p class="text-muted mt-1 mb-0">80%</p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="mb-0">Equipment</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
                                                <div class="progress-bar bg-secondary-1 w-50"></div>
                                            </div>
                                            <p class="text-muted mt-1 mb-0">50%</p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class=" mb-0">Marketing </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
                                                <div class="progress-bar bg-danger-1 w-65"></div>
                                            </div>
                                            <p class="text-muted mt-1 mb-0">65%</p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class=" mb-0">Freelancers</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
                                                <div class="progress-bar bg-success w-30"></div>
                                            </div>
                                            <p class="text-muted mt-1 mb-0">30%</p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class=" mb-0">Travel</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
                                                <div class="progress-bar bg-warning-1 w-40"></div>
                                            </div>
                                            <p class="text-muted mt-1 mb-0">40%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-2 CLOSED -->

                    <!-- ROW-3 OPEN -->
                    <div class="row row-deck">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                            <div class="card overflow-hidden">
                                <div class="card-header">
                                    <h3 class="card-title">Expenses Vs Budget</h3>
                                </div>
                                <div class="card-body overflow-hidden">
                                    <canvas id="budget" class="chart-dropshadow overflow-hidden"></canvas>
                                </div>
                            </div>
                        </div><!-- COL END -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-7">
                            <div class="card shadow">
                                <div class="card-header bg-transparent">
                                    <h4 class="card-title mb-0">Expenses Vs Budget Table</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="grid-margin">
                                        <div class="">
                                            <div class="table-responsive">
                                                <table
                                                    class="table card-table border table-vcenter text-nowrap align-items-center">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Category</th>
                                                            <th>Expenses</th>
                                                            <th>Budget</th>
                                                            <th>Variance</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="border-top-0">
                                                        <tr>
                                                            <td class="text-sm font-weight-600">Business Best Meals
                                                            </td>
                                                            <td>3,542</td>
                                                            <td>5,000</td>
                                                            <td>1,458</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-weight-600">Lodging</td>
                                                            <td>56,368</td>
                                                            <td>75,000</td>
                                                            <td>18,632</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-weight-600">Meetings/Conferences
                                                            </td>
                                                            <td>0</td>
                                                            <td>2,000</td>
                                                            <td>2,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-weight-600">Association Fee</td>
                                                            <td>0</td>
                                                            <td>1,000</td>
                                                            <td>1,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-weight-600">Personal Meals</td>
                                                            <td>2,850</td>
                                                            <td>5,000</td>
                                                            <td>2,150</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-weight-600">Transportation</td>
                                                            <td>25,000</td>
                                                            <td>55,000</td>
                                                            <td>30,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-weight-600">Vehicle Rental</td>
                                                            <td>30,000</td>
                                                            <td>45,000</td>
                                                            <td>15,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->
                    </div>
                    <!-- ROW-3 CLOSED -->

                    <!-- ROW-3 OPEN -->
                    <div class="row row-deck">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-7">
                            <div class="card overflow-hidden">
                                <div class="card-header">
                                    <h3 class="card-title">All Expenses By Category</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-sm-12 col-md-12 text-center">
                                            <div id="donut" class="h-220 chart-dropshadow2"></div>
                                            <h2 class="mb-2 font-rubik fs-40">$1,87,595</h2>
                                            <small class="text-muted">15% Higher Of Previous Month</small>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-sm-12 col-md-12 mt-4 mt-sm-0">
                                            <div class="">
                                                <p class="mb-0">Rent and Utilities</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
                                                        <div class="progress-bar bg-primary-1 w-80"></div>
                                                    </div>
                                                    <p class="text-muted mt-1 mb-0">80%</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <p class="mb-0">Equipment</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
                                                        <div class="progress-bar bg-secondary-1 w-50"></div>
                                                    </div>
                                                    <p class="text-muted mt-1 mb-0">50%</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <p class=" mb-0">Marketing </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
                                                        <div class="progress-bar bg-danger-1 w-65"></div>
                                                    </div>
                                                    <p class="text-muted mt-1 mb-0">65%</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <p class=" mb-0">Freelancers</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
                                                        <div class="progress-bar bg-success w-30"></div>
                                                    </div>
                                                    <p class="text-muted mt-1 mb-0">30%</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <p class=" mb-0">Travel</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
                                                        <div class="progress-bar bg-warning-1 w-40"></div>
                                                    </div>
                                                    <p class="text-muted mt-1 mb-0">40%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-5">
                            <div class="card overflow-hidden">
                                <div class="card-header">
                                    <h3 class="card-title">Top Website Referral Channels</h3>
                                </div>
                                <div class="card-body overflow-hidden">
                                    <div id="refferal" class="h-320 overflow-hidden"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-4 CLOSED -->

                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>

        <!-- RIGHT-SIDEBAR OPEN -->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class=" close-button float-right">
                <a href="#" data-toggle="sidebar-right" data-target=".sidebar-right"><i
                        class="fe fe-x  text-white"></i></a>
            </div>
            <div class="tab-menu-heading siderbar-tabs border-0 ">
                <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class=""><a href="#tab1" class="active" data-toggle="tab">Friends</a></li>
                        <li><a href="#tab2" data-toggle="tab">Online</a></li>
                        <li><a href="#tab3" data-toggle="tab">Archive</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
                <div class="tab-content border-top">
                    <div class="tab-pane active" id="tab1">
                        <div class="chat">
                            <div class="contacts_card">
                                <div class="input-group mb-0 p-3 border-bottom">
                                    <input type="text" placeholder="Search..." class="form-control search">
                                    <div class="input-group-prepend mr-0">
                                        <span class="input-group-text border-right search_btn btn-primary-light "><i
                                                class="fa fa-search text-white"></i></span>
                                    </div>
                                </div>
                                <div class="contacts mb-0">
                                    <div class="list-group list-group-flush ">
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar  brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/female/1.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Darlena Torian</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/male/2.jpg"></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Richie Verrill</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/female/3.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Cheree Morgan</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/female/4.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Katerine Coit</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar  brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/male/5.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Hai Indelicato</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/female/6.jpg"></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Cecilia Kerfoot</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/male/7.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Ronald Zirbel</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/male/8.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Darren Niemann</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar  brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/female/9.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Sibyl Cogley</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/male/10.jpg"></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Jess Hildebrandt</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/female/11.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Wanita Sheppard</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/female/12.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Deane Dreher</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar  brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/male/13.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Lavern Alverson</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/female/14.jpg"></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Caitlin Canas</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/male/15.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Santos Yadao</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/female/16.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Melodi Krantz</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar  brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/female/17.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Daisey Highfill</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/male/18.jpg"></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Gregg Rossow</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/male/19.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Clint Dejesus</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex  align-items-center">
                                            <div class="mr-2">
                                                <span class="avatar brround avatar-md cover-image"
                                                    data-image-src="../assets/images/faces/female/20.jpg"><span
                                                        class="avatar-status bg-green"></span></span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-semibold">Florida Pearsall</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-phone fs-10"></i></a>
                                                <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                        class="fa fa-comment fs-10"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- TAB-1 END -->
                    <div class="tab-pane" id="tab2">
                        <div class="input-group mb-0 p-3 border-bottom">
                            <input type="text" placeholder="Search..." class="form-control search">
                            <div class="input-group-prepend mr-0">
                                <span class="input-group-text border-right search_btn btn-primary-light "><i
                                        class="fa fa-search text-white"></i></span>
                            </div>
                        </div>
                        <div class="contacts mb-0">
                            <div class="list-group list-group-flush ">
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar  brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/female/1.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Darlena Torian</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/female/3.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Cheree Morgan</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/female/4.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Katerine Coit</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar  brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/male/5.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Hai Indelicato</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/male/7.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Ronald Zirbel</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/male/8.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Darren Niemann</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar  brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/female/9.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Sibyl Cogley</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/female/11.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Wanita Sheppard</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/female/12.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Deane Dreher</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar  brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/male/13.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Lavern Alverson</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/male/15.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Santos Yadao</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/female/16.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Melodi Krantz</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar  brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/female/17.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Daisey Highfill</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/male/19.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Clint Dejesus</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/female/20.jpg"><span
                                                class="avatar-status bg-green"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Florida Pearsall</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- TAB-2 END -->
                    <div class="tab-pane" id="tab3">
                        <div class="input-group mb-0 p-3 border-bottom">
                            <input type="text" placeholder="Search..." class="form-control search">
                            <div class="input-group-prepend mr-0">
                                <span class="input-group-text border-right search_btn btn-primary-light "><i
                                        class="fa fa-search text-white"></i></span>
                            </div>
                        </div>
                        <div class="contacts mb-0">
                            <div class="list-group list-group-flush ">
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/male/2.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Richie Verrill</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/female/6.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Cecilia Kerfoot</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/male/10.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Jess Hildebrandt</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/female/14.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Caitlin Canas</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar brround avatar-md cover-image"
                                            data-image-src="../assets/images/faces/male/18.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold">Gregg Rossow</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-phone fs-10"></i></a>
                                        <a href="#" class="btn btn-sm btn-default-light btn-icon"><i
                                                class="fa fa-comment fs-10"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- TAB-3 END -->
                </div>
            </div>
        </div>
        <!-- RIGHT-SIDEBAR -->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2019 <a href="#">Arox</a>. Designed by <a href="#">Spruko</a> All
                        rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('../assets/js/vendors/jquery-3.2.1.min.js')}}"></script>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('../assets/js/vendors/bootstrap.bundle.min.js')}}"></script>

    <!-- SPARKLINE -->
    <script src="{{asset('../assets/js/vendors/jquery.sparkline.min.js')}}"></script>

    <!-- CHART-CIRCLE -->
    <script src="{{asset('../assets/js/vendors/circle-progress.min.js')}}"></script>

    <!-- RATING STAR -->
    <script src="{{asset('../assets/plugins/rating/jquery.rating-stars.js')}}"></script>

    <!-- INPUT MASK PLUGIN-->
    <script src="{{asset('../assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

    <!-- CHARTJS CHART -->
    <script src="{{asset('../assets/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('../assets/plugins/chart/utils.js')}}"></script>

    <!-- PIETYCHART -->
    <script src="{{asset('../assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('../assets/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- CUSTOM SCROLL BAR JS-->
    <script src="{{asset('../assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- CHARTS PLUGIN -->
    <script src="{{asset('../assets/plugins/highcharts/highcharts.js')}}"></script>

    <!-- RIGHT-MENU JS -->
    <script src="{{asset('../assets/plugins/sidebar/sidebar.js')}}"></script>

    <!-- LEFT-SIDEMENU PLUGIN -->
    <script src="{{asset('../assets/plugins/jquery-jside-menu-master/js/jquery.jside.menu.js')}}"></script>

    <!--Side-menu js-->
    <script src="{{asset('../assets/plugins/side-menu/sidemenu.js')}}"></script>

    <!-- STICKY JS-->
    <script src="{{asset('../assets/js/sticky.js')}}"></script>
    <script src="{{asset('../assets/js/horizontal-sticky.js')}}"></script>

    <!-- Sidebar Accordions js -->
    <script src="{{asset('../assets/plugins/sidemenu-responsive-tabs/js/easyResponsiveTabs.js')}}"></script>

    <!-- Perfect scroll bar js-->
    <script src="{{asset('../assets/plugins/pscrollbar/perfect-scrollbar.js')}}"></script>

    <!-- Left CUSTOM JS-->
    <script src="{{asset('../assets/js/left-custom.js')}}"></script>

    <!-- INDEX-SCRIPTS -->
    <script src="{{asset('../assets/js/index1.js')}}"></script>

    <!-- CUSTOM JS-->
    <script src="{{asset('../assets/js/custom.js')}}"></script>

</body>

</html>
