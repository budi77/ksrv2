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
    @stack('styles')
    @include('layouts.head-css')
    @livewireStyles
    {{-- @laraflashStyles() --}}

    <style>
      
      table {
        /* border-spacing: 0px; */
        /* table-layout: fixed; */
        /* margin-left: auto; */
        /* margin-right: auto; */
        /* width: 310px; */
      }
      td {
        /* border: 1px solid #666; */
        word-break: break-all;
      }
      </style>


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
                {{-- <livewire:laraflash.container /> --}}
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
    @stack('scripts')
    @include('layouts.vendor-scripts')
    {{-- <livewire:modals/> --}}
    @livewireScripts
    <x-livewire-alert::scripts />
   


 
</body>

</html>

