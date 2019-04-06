<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/publics/images/icon.png') }}">
    <title>@yield('title') | Admin {{ config('app.name', 'Medline') }} </title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('public/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/bootstrap-extension.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('public/admin/css/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('public/admin/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset('public/admin/css/morris.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('public/admin/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('public/admin/css/custom.css') }}" rel="stylesheet">
    @yield('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    @yield('preloader')

    <div id="wrapper">
        <!-- Navigation -->
        @include('admin.layouts.header')
        <!-- Left navbar-header -->
        @include('admin.layouts.sidebar')

        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
            @include('admin.layouts.footer')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('public/admin/js/tether.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/bootstrap-extension.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('public/admin/js/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('public/admin/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('public/admin/js/waves.js') }}"></script>

    <!--Counter js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.1.1/jquery.waypoints.min.js"></script>
    <script src="{{ asset('public/admin/js/jquery.counterup.min.js') }}"></script>
    <!--Morris JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('public/admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/dashboard1.js') }}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
    <script src="{{ asset('public/admin/js/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('public/admin/js/jquery.toast.js') }}"></script>
    <!--Style Switcher -->
    <script src="{{ asset('public/admin/js/jQuery.style.switcher.js') }}"></script>
    @yield('js')
    <script src="{{ asset('public/admin/js/custom.js') }}"></script>
</body>

</html>
