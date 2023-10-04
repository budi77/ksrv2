@extends('layouts.master-without-nav')

@section('title')
    ANGSI 2023
@endsection

@section('body')
<body>
@endsection
@section('content')
       <!-- auth-page wrapper -->
       <div class="auth-page-wrapper py-5 d-flex justify-content-center align-items-center min-vh-100">

        <!-- auth-page content -->
        {{-- <div class="auth-page-content overflow-hidden p-0"> --}}
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 text-center">
                        <h4 class="font-danger fw-bold">PENDAFTARAN TELAH DITUTUP!</h4>

                        <div class="position-relative">
                            <img src="{{ URL::asset('assets/images/angsi.png') }}" alt="" class="img-fluid " />
                            {{-- <h1 class="title text-muted">PEDAFTARAN TELAH DITUTUP</h1> --}}
                        </div>
                        <div>
                            {{-- <p class="text-muted w-75 mx-auto">Server Error 500. We're not exactly sure what happened, but our servers say something is wrong.</p> --}}
                            {{-- <a href="index" class="btn btn-success"><i class="mdi mdi-home me-1"></i>Back to home</a> --}}
                        </div>
                    </div><!-- end col-->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        {{-- </div> --}}
        <!-- end auth-page content -->
    </div>
    <!-- end