<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Hogo– Creative Admin Multipurpose Responsive Bootstrap4 Dashboard HTML Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="html admin template, bootstrap admin template premium, premium responsive admin template, admin dashboard template bootstrap, bootstrap simple admin template premium, web admin template, bootstrap admin template, premium admin template html5, best bootstrap admin template, premium admin panel template, admin template"/>

    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- Title -->
    <title>@yield('title')</title>

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Dashboard css -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!-- Horizontal-menu css -->
    <link href="../assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
    <link href="../assets/plugins/horizontal-menu/horizontalmenu.css" rel="stylesheet">

    <!--Daterangepicker css-->
    <link href="../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

    <!-- Sidebar Accordions css -->
    <link href="../assets/plugins/accordion1/css/easy-responsive-tabs.css" rel="stylesheet">

    <!-- Rightsidebar css -->
    <link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!---Font icons css-->
    <link href="../assets/plugins/iconfonts/plugin.css" rel="stylesheet" />
    <link href="../assets/plugins/iconfonts/icons.css" rel="stylesheet" />
    <link  href="../assets/fonts/fonts/font-awesome.min.css" rel="stylesheet">
</head>



<body class = "@yield('body-class')">
<div id="global-loader">
    <img src="{{asset('assets/images/icons/loader.svg')}}" alt="loader">
</div>
    @include('layouts.nav')
<div class="page">
    <div class="page-main">
    <!-- app-content-->
    <div class="container content-area">
        <div class="side-app">
            <!-- page-header -->
            <div class="page-header">
                <ol class="breadcrumb"><!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Navigation</li>
                </ol><!-- End breadcrumb -->
                <div class="ml-auto">
                    <div class="input-group">
                        <a  class="btn btn-primary text-white mr-2"  id="daterange-btn">
                            <span>
                                <i class="fa fa-calendar"></i> Events Settings
                            </span>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <a href="#" class="btn btn-secondary text-white" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Rating">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End page-header -->
        @yield('main-content')
        <!--footer-->
        <footer class="footer" style=" margin-left: 20px;">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-12 col-sm-12   text-center">
                        Copyright © 2022 <a href="https://www.dailywebsolutions.com/" target="_blank">Daily Web Solutions</a>. Designed by <a href="#">Asfand Afridi</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->
    </div>
    <!-- End app-content-->
    </div>
    <!-- End Page Main-->
    </div>
    <!-- End Page -->

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

</body>



<!-- Jquery js-->
<script src="../assets/js/vendors/jquery-3.2.1.min.js"></script>

<!--Bootstrap.min js-->
<script src="../assets/plugins/bootstrap/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!--Jquery Sparkline js-->
<script src="../assets/js/vendors/jquery.sparkline.min.js"></script>

<!-- Chart Circle js-->
<script src="../assets/js/vendors/circle-progress.min.js"></script>

<!-- Star Rating js-->
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

<!--Moment js-->
<script src="../assets/plugins/moment/moment.min.js"></script>

<!-- Daterangepicker js-->
<script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Horizontal-menu js -->
<script src="../assets/plugins/horizontal-menu/horizontalmenu.js"></script>

<!--Time Counter js-->
<script src="../assets/plugins/counters/jquery.missofis-countdown.js"></script>
<script src="../assets/plugins/counters/counter.js"></script>

<!-- Sidebar Accordions js -->
<script src="../assets/plugins/accordion1/js/easyResponsiveTabs.js"></script>

<!-- Custom scroll bar js-->
<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Rightsidebar js -->
<script src="../assets/plugins/sidebar/sidebar.js"></script>

<!-- Custom js-->
<script src="../assets/js/custom.js"></script>
</html>
