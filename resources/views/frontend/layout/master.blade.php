<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Voting System</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="{{url('public/css/styles.css')}}" media="all"> -->

    <link rel="stylesheet" href="front/css/styles.css" media="all">

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />


    <style>
        navbar{
            background-color: #0a58ca;
        }
        </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
-->
    @include('frontend.partials.header')


    <div class="content-wrapper pt-3">
        <!-- Content Wrapper. Contains page content -->
    @yield('frontContent')
    <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    @include('frontend.partials.footer')
</div>
<!-- ./wrapper -->

<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>r
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{URL::asset('assets/dist/js/adminlte.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{URL::asset('assets/dist/js/demo.js')}}"></script>
<script src="{{URL::asset('assets/dist/js/pages/dashboard2.js')}}"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

