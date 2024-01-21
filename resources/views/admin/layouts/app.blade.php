<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Management System - Admin</title>
    <meta name="Description" content="">
    <meta name="Author" content="">
	<meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Choices JS -->
    <script src="{{ asset('libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Main Theme Js -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="{{ asset('libs/node-waves/waves.min.css') }}" rel="stylesheet" >

    <!-- Simplebar Css -->
    <link href="{{ asset('libs/simplebar/simplebar.min.css') }}" rel="stylesheet" >

    <!-- Color Picker Css -->
    <link href="{{ asset('libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('libs/@simonwep/pickr/themes/nano.min.css') }}" rel="stylesheet" >

    <!-- Choices Css -->
    <link href="{{ asset('libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet" >

    <!-- Jsvector Maps -->
    <link href="{{ asset('libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" >

    <!-- Datatable Css -->
    @yield('datatable-css')
</head>

<body>
    <!-- Start Switcher -->
    @include('admin.layouts.switcher')
    <!-- End Switcher -->

    <!-- Loader -->
    @include('admin.layouts.loader')
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        @include('admin.layouts.header')
        <!-- /app-header -->

        <!-- Start::Off-canvas sidebar-->
        @include('admin.layouts.offcanvas')
        <!-- End::Off-canvas sidebar-->

        <!-- Start::app-sidebar -->
        @include('admin.layouts.sidebar')
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        @yield('content')
        <!-- End::app-content -->

        <!-- Footer Start -->
        @include('admin.layouts.footer')
        <!-- Footer End -->
    </div>

    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="las la-angle-double-up"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Jquery Cdn -->
    @yield('jquery-js')

    <!-- Popper JS -->
    <script src="{{ asset('libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Defaultmenu JS -->
    <script src="{{ asset('js/defaultmenu.min.js') }}"></script>

    <!-- Node Waves JS-->
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>

    <!-- Sticky JS -->
    <script src="{{ asset('js/sticky.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>


    <!-- Apex Charts JS -->
    <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- JSVector Maps JS -->
    <script src="{{ asset('libs/jsvectormap/js/jsvectormap.min.js') }}"></script>

    <!-- JSVector Maps MapsJS -->
    <script src="{{ asset('libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('js/us-merc-en.js') }}"></script>

    <!-- Chartjs Chart JS -->
    <script src="{{ asset('js/index.js') }}"></script>


    <!-- Custom-Switcher JS -->
    <script src="{{ asset('js/custom-switcher.min.js') }}"></script>

    <!-- Datatables Cdn -->
    @yield('datatable-js')

    <!-- Custom JS -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
