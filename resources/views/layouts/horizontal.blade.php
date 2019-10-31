<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>LumbungData - Profer Pak Suntono - Horizontal</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{asset('horizon/images/favicon.ico')}}">
    @section('css')

    @show
    <link href="{{asset('horizon/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('horizon/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('horizon/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('horizon/css/style.css')}}" rel="stylesheet" type="text/css">
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
        © 2019 Stexo <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</span>.
    </footer>

    <!-- End Footer -->

    <!-- jQuery  -->
    <script src="{{asset('horizon/js/jquery.min.js')}}"></script>
    <script src="{{asset('horizon/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('horizon/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('horizon/js/waves.min.js')}}"></script>
    @section('js')

    @show
    <script src="{{asset('horizon/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('horizon/js/app.js')}}"></script>

</body>

</html>
