<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-bs-theme="light" data-topbar="light">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Rora - Admin & Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/rora.png') }}">
    @include('main.head-css')

</head>

{{-- @section('body') --}}

<body>
    {{-- @show --}}
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('main.topbar')
        @include('main.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('main.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->


    @include('main.customizer')


    <!-- JAVASCRIPT -->
    @include('main.vendor-scripts')
</body>

</html>
