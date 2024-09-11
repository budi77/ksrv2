<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar="light">

    <head>
    <meta charset="utf-8" />
    <title>KSR GAMES 24</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
    <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />

        @include('layouts.head-css')
        @livewireStyles

        <style>
            body {
            background-color: #fce5cd;
            }
        </style>

  </head>

    @yield('body')

    @yield('content')

    @include('layouts.vendor-scripts')

    @livewireScripts
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />

    </body>
</html>
