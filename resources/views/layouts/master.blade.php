<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="horizontal" data-layout-style="" data-layout-width="fluid" data-layout-position="fixed"  data-topbar="dark" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title> SISPAKS - KSR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">

    @include('layouts.head-css')
    @livewireStyles

</head>
<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <!-- Start content -->
                <div class="container-fluid">
                    @yield('content')
                </div> <!-- content -->
            </div>
            @include('layouts.footer')
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    {{-- @include('layouts.customizer') --}}
    <!-- END Right Sidebar -->

    <livewire:modals/>
    @livewireScripts
    <x-livewire-alert::scripts />
    @include('layouts.vendor-scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 
</body>

</html>

