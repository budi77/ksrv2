<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar="light">

    <head>
    <meta charset="utf-8" />
    <title>SISPAKS - KSR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
        @include('layouts.head-css')
        @livewireStyles

  </head>

    @yield('body')

    @yield('content')

    @include('layouts.vendor-scripts')

    @livewireScripts
    <x-livewire-alert::scripts />
    </body>
</html>
