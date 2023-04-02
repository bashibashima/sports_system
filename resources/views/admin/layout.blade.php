<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <script src="{{asset('theme_admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('theme_admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('theme_admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme_admin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('theme_admin/js/main.js')}}"></script>

    <link href="{{asset('theme_admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('theme_admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('theme_admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('theme_admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('theme_admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('theme_admin/css/theme.css')}}" rel="stylesheet" media="all">

    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

   
    <!-- Vendor CSS-->
    <link href="{{asset('theme_admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('theme_admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('theme_admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('theme_admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('theme_admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('theme_admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('theme_admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('theme_admin/images/icon/logo.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="">
                                <i class="fas fa-tachometer-alt"></i>Add New course</a>
                        </li>

                        <li>
                            <a href="">
                                <i class="fas fa-tachometer-alt"></i>Student Details</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('theme_admin/images/icon/logo1.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                
                        </style>
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{route('Dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="{{route('team')}}">
                                <i class="fas fa-tachometer-alt"></i>Teams</a>
                        </li>

                        <li>
                            <a href="{{route('players')}}">
                                <i class="fas fa-tachometer-alt"></i>Players</a>
                        </li>

                        <li>
                            <a href="{{route('practices')}}">
                                <i class="fas fa-tachometer-alt"></i>Schedule Practices</a>
                        </li>

                        <li>
                            <a href="{{route('matches')}}">
                                <i class="fas fa-tachometer-alt"></i>Schedule Matches</a>
                        </li>

                        <li>
                            <a href="{{route('attendence_status')}}">
                                <i class="fas fa-tachometer-alt"></i>Attendance</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                              
                            </form>
                            <div class="header-button">
                                <!-- <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Bashima</a>

                                        </div>
                                        
                                        <div class="account-dropdown js-dropdown">
                                           
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                






                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset('theme_admin/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('theme_admin/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Reset password</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        
                                    </div>
                                </div>







                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @section('container')
                        @show
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

  
   
</body>
</html>