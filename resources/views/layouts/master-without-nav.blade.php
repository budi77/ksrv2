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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @include('layouts.head-css')
        @livewireStyles

        <style>
            body {
            background-color: #fef9e7;
            }

            .mobile-container {
            max-width: 100%;
            margin: auto;
            background-color: #555;
            height: 500px;
            color: white;
            border-radius: 10px;
            }

            .topnav {
            overflow: hidden;
            background-color: black;
            position: relative;
            }

            .topnav #myLinks {
            display: none;
            }

            .topnav a {
            color: white;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            display: block;
            }

            .topnav a.icon {
            background: black;
            display: block;
            position: absolute;
            right: 0;
            top: 0;
            }

            .topnav a:hover {
            background-color: #ddd;
            color: black;
            }

            .active {
            background-color: #f1c40f;
            color: white;
            }
        </style>

  </head>

    <body>
 

  <!-- Top Navigation Menu -->
    <div class="topnav">
<!--     <a href="/maccgames24" class="active">MACC GAMES 24</a>
    <div id="myLinks">
        
        <a href=/maccgames24>Home</a>
        <a href=/maccgames24/program>Program Pengukuhan Jati Diri</a>
        <a href=/maccgames24/program/ranking>Kedudukan Pingat</a>
        <a href=/maccgames24/program/bs><i class="las la-volleyball-ball"></i> Bola Sepak</a>
        <a href=/maccgames24/program/bd><i class="las la-volleyball-ball"></i> Badminton</a>
        <a href=/maccgames24/program/bj><i class="las la-volleyball-ball"></i> Bola Jaring</a>
        <a href=/maccgames24/program/btl><i class="las la-volleyball-ball"></i> Bola Tampar (L)</a>
        <a href=/maccgames24/program/btw><i class="las la-volleyball-ball"></i> Bola Tampar (W)</a>
        <a href=/maccgames24/program/kr><i class="las la-volleyball-ball"></i> Karom</a>
        <a href=/maccgames24/program/st><i class="las la-volleyball-ball"></i> Sepak Takraw</a>
        <a href=/maccgames24/program/pp><i class="las la-volleyball-ball"></i> Ping Pong</a>
        <a href=/maccgames24/program/fs><i class="las la-volleyball-ball"></i> Futsal</a>
        <a href=/maccgames24/program/bl><i class="las la-volleyball-ball"></i> Balapan</a>
        <a href=/maccgames24/program/ttl><i class="las la-volleyball-ball"></i> Tarik Tali (L)</a>
        <a href=/maccgames24/program/ttw><i class="las la-volleyball-ball"></i> Tarik Tali (W)</a>
        <a href=/maccgames24/program/bw><i class="las la-volleyball-ball"></i> Bowling</a>
        <a href=/maccgames24/program/mk><i class="las la-volleyball-ball"></i> Menembak</a>
        <a href=/maccgames24/program/pbn><i class="las la-volleyball-ball"></i> Perbarisan</a>
    </div> -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
    </div>

    @yield('content')

  

    @include('layouts.vendor-scripts')

    @livewireScripts
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    
    <script>
    function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
    }
    </script>

    </body>
</html>
