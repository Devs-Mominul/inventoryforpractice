<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/moltran/layouts/blue-vertical/{{ route('dashboard') }} by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2024 05:43:18 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dashboard | Moltran - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend')}}/assets/images/favicon.ico">

        <!-- Plugins css-->
        <link href="{{asset('backend')}}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('backend')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
        @stack('css')

    </head>

    <body style=' overflow-x: scroll;'>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="float-right mb-0 list-unstyled topnav-menu">

                    <li class="dropdown d-none d-lg-block">
                        <a class="mr-0 nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('backend')}}/assets/images/flags/us.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('backend')}}/assets/images/flags/germany.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('backend')}}/assets/images/flags/italy.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('backend')}}/assets/images/flags/spain.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('backend')}}/assets/images/flags/russia.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list d-none d-md-inline-block">
                        <a href="#" id="btn-fullscreen" class="nav-link waves-effect waves-light">
                            <i class="mdi mdi-crop-free noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0 font-16">
                                    <span class="float-right">
                                        <a href="#" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <i class="fa fa-user-plus text-info"></i>
                                    </div>
                                    <p class="notify-details">New user registered
                                        <small class="noti-time">You have 10 unread messages</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-success">
                                        <i class="far fa-gem text-primary"></i>
                                    </div>
                                    <p class="notify-details">New settings
                                        <small class="noti-time">There are new settings available</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-danger">
                                        <i class="far fa-bell text-danger"></i>
                                    </div>
                                    <p class="notify-details">Updates
                                        <small class="noti-time">There are 2 new updates available</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="text-center dropdown-item notify-item notify-all">
                                    See all notifications
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="mr-0 nav-link dropdown-toggle nav-user waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('backend')}}/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="m-0 text-overflow">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="{{ route('profile.edit') }}" class="dropdown-item notify-item">
                                <i class="mdi mdi-face-profile"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock"></i>
                                <span>Locks Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <a  href="{{ route('logout') }}" class="dropdown-item notify-item"  onclick="event.preventDefault();
                            this.closest('form').submit();" >
                                <i class="mdi mdi-power-settings"></i>
                                <span>Logout</span>
                            </a>
                           </form>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="mdi mdi-settings-outline noti-icon"></i>
                        </a>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                        <a href="{{ route('dashboard') }}" class="text-center logo logo-dark">
                            <span class="logo-lg">
                                <img src="{{asset('backend')}}/assets/images/logo-dark.png" alt="" height="16">
                                <!-- <span class="logo-lg-text-dark">Moltran</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">M</span> -->
                                <img src="{{asset('backend')}}/assets/images/logo-sm.png" alt="" height="25">
                            </span>
                        </a>

                        <a href="{{ route('dashboard') }}" class="text-center logo logo-light">
                            <span class="logo-lg">
                                <img src="{{asset('backend')}}/assets/images/logo-light.png" alt="" height="16">
                                <!-- <span class="logo-lg-text-dark">Moltran</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">M</span> -->
                                <img src="{{asset('backend')}}/assets/images/logo-sm.png" alt="" height="25">
                            </span>
                        </a>
                    </div>

                <!-- LOGO -->


                <ul class="m-0 list-unstyled topnav-menu topnav-menu-left">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>

                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                    <div class="slimscroll-menu">

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">

                            <div class="user-box">

                                <div class="float-left">
                                    <img src="{{asset('backend')}}/assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
                                </div>
                                <div class="user-info">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                John Doe <i class="mdi mdi-chevron-down"></i>
                                                        </a>
                                        <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mr-2 mdi mdi-face-profile"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mr-2 mdi mdi-settings"></i> Settings</a></li>
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mr-2 mdi mdi-lock"></i> Locks screen</a></li>
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="route('logout')" class="dropdown-item notify-item"  onclick="event.preventDefault();
                                                    this.closest('form').submit();" >
                                                        <i class="mdi mdi-power-settings"></i>
                                                        <span>Logout</span>
                                                    </a>
                                                   </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="m-0 font-13 text-muted">Administrator</p>
                                </div>
                            </div>

                            <ul class="metismenu" id="side-menu">

                                <li>
                                    <a href="{{ route('dashboard') }}" class="waves-effect">
                                        <i class="mdi mdi-home"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-email"></i>
                                        <span> Supplyer </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{ route('supplyer') }}">Supplier</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="calendar.html" class="waves-effect">
                                        <i class=" mdi mdi-calendar"></i>
                                        <span> Calendar </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-palette"></i>
                                        <span> Employe </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{ route('employer') }}">Employer</a></li>
                                        <li><a href="{{ route('all.employer') }}">All Employer</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-invert-colors"></i>
                                        <span> Customer </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{ route('customer') }}">Customer</a></li>
                                        <li><a href="{{ route('customer.all') }}">Customer All</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-atom-variant"></i>
                                        <span> Salary(Emp) </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{ route('advance.salary') }}">Advance Salary</a></li>
                                        <li><a href="{{ route('pay.salary') }}">Pay Salary</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-widgets"></i>
                                        <span> Product </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{ route('category') }}">Category</a></li>
                                        <li><a href="{{ route('add.product') }}">Add Product</a></li>
                                        <li><a href="{{ route('import.product') }}">Import Product</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-view-list"></i>
                                        <span> Attendance </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{ route('attendance') }}">attendance</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-poll-box"></i>
                                        <span> Pos </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{ url('/pos') }}">Pos</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-map-marker"></i>
                                        <span> Maps </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="maps-google.html"> Google Map</a></li>
                                        <li><a href="maps-vector.html"> Vector Map</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-table-plus"></i>
                                        <span> Layouts </span>
                                        <span class="float-right badge badge-danger badge-pill">New</span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                        <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                        <li><a href="layouts-small-sidebar.html">Small Sidebar</a></li>
                                        <li><a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a></li>
                                        <li><a href="layouts-unsticky.html">Unsticky Layout</a></li>
                                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-google-pages"></i>
                                        <span> Pages </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="pages-profile.html">Profile</a></li>
                                        <li><a href="pages-timeline.html">Timeline</a></li>
                                        <li><a href="pages-invoice.html">Invoice</a></li>
                                        <li><a href="pages-email-template.html">Email template</a></li>
                                        <li><a href="pages-contact.html">Contact-list</a></li>
                                        <li><a href="pages-login.html">Login</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                        <li><a href="pages-blank.html">Blank Page</a></li>
                                        <li><a href="pages-maintenance.html">Maintenance</a></li>
                                        <li><a href="pages-coming-soon.html">Coming-soon</a></li>
                                        <li><a href="pages-404.html">404 Error</a></li>
                                        <li><a href="pages-404_alt.html">404 alt</a></li>
                                        <li><a href="pages-500.html">500 Error</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-share-variant"></i>
                                        <span> Multi Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        <li>
                                            <a href="javascript: void(0);">Level 1.1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul class="nav-third-level nav" aria-expanded="false">
                                                <li>
                                                    <a href="javascript: void(0);">Level 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Level 2.2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!-- End Sidebar -->

                        <div class="clearfix"></div>

                    </div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container">
                       <div class="row">
                        @yield('content')
                       </div>



                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->



                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2016 - 2020 &copy; Moltran theme by <a href="#">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="float-right right-bar-toggle">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="m-0 text-white font-17">Theme Customizer</h4>
            </div>
            <div class="slimscroll-menu">

                <div class="p-4">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="{{asset('backend')}}/assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="mb-3 custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('backend')}}/assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="mb-3 custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="{{asset('backend')}}/assets/css/bootstrap-dark.min.css"
                            data-appStyle="{{asset('backend')}}/assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('backend')}}/assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="mb-5 custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="{{asset('backend')}}/assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <a href="https://bit.ly/2QMLoUn" class="mt-3 btn btn-danger btn-block" target="_blank"><i class="mr-1 mdi mdi-download"></i> Download Now</a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
            <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
        </a>

        <!-- Vendor js -->
        <script src="{{asset('backend')}}/assets/js/vendor.min.js"></script>

        <script src="{{asset('backend')}}/assets/libs/moment/moment.min.js"></script>
        <script src="{{asset('backend')}}/assets/libs/jquery-scrollto/jquery.scrollTo.min.js"></script>
        <script src="{{asset('backend')}}/assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Chat app -->
        <script src="{{asset('backend')}}/assets/js/pages/jquery.chat.js"></script>

        <!-- Todo app -->
        <script src="{{asset('backend')}}/assets/js/pages/jquery.todo.js"></script>

        <!-- flot chart -->
        <script src="{{asset('backend')}}/assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="{{asset('backend')}}/assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="{{asset('backend')}}/assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="{{asset('backend')}}/assets/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="{{asset('backend')}}/assets/libs/flot-charts/jquery.flot.pie.js"></script>
        <script src="{{asset('backend')}}/assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="{{asset('backend')}}/assets/libs/flot-charts/jquery.flot.stack.js"></script>
        <script src="{{asset('backend')}}/assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- Dashboard init JS -->
        <script src="{{asset('backend')}}/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{asset('backend')}}/assets/js/app.min.js"></script>
        @stack('js')

    </body>


<!-- Mirrored from coderthemes.com/moltran/layouts/blue-vertical/{{ route('dashboard') }} by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2024 05:45:15 GMT -->
</html>
