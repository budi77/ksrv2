@extends('layouts.master')
@section('title') @lang('translation.starter')  @endsection

{{-- @section('css')

<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">

@endsection --}}
@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
@endpush

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">DOKUMEN</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/"><i class="ri-home-5-fill"></i></a></li>
                    {{-- <li class="breadcrumb-item"><a href="#">dashboard</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">dokumen</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div id="fm" style="height: 600px;"></div>

@endsection



@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

@endsection

@push('scripts')
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endpush