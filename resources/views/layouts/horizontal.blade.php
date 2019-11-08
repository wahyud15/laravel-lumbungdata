<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>DATA CARE - BPS PROVINSI NTB</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{asset('horizon/images/favicon.ico')}}">
    @section('css')

    @show
    <link href="{{asset('horizon/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('horizon/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('horizon/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('horizon/css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- Sweet Alert -->
    <!-- <link href="{{asset('plugins/sweet-alert2/sweetalert2.css')}}" rel="stylesheet" type="text/css"> -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            @include('layouts.horizontal-header')
            <!-- end topbar-main -->

            <!-- MENU Start -->
            @include('layouts.horizontal-menubar')
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->

    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            @yield('content')
            <!-- END ROW -->

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->

    <!-- Footer -->
    <footer class="footer">
        © 2019  <span class="d-none d-sm-inline-block"> - <a href="https://ntb.bps.go.id" target="_blank">Badan Pusat Statistik Provinsi Nusa Tenggara Barat</a></span>.
    </footer>

    <!-- End Footer -->

    <!-- jQuery  -->
    <script src="{{asset('horizon/js/jquery.min.js')}}"></script>
    <script src="{{asset('horizon/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('horizon/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('horizon/js/waves.min.js')}}"></script>
    @section('js')

    @show
    
    <!-- App js -->
    <script src="{{asset('horizon/js/app.js')}}"></script>

</body>

</html>
