@extends('layouts.master')
@section('title') @lang('translation.starter')  @endsection

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Starter  @endslot
@endcomponent

<div id="fm" style="height: 600px;"></div>

@endsection



@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

@endsection