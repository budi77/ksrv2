@extends('layouts.master')
@section('title') @lang('translation.starter')  @endsection



@push('styles')

@endpush

@section('content')

<div class="row">

   
    <div class="col-6">
            <div class="card">
                <div class="card-body p-0">
                    <div class="alert alert-primary border-0 rounded-top rounded-0 m-0 d-flex align-items-center"
                        role="alert">
                        <i data-feather="coffee" class="text-primary me-2 icon-sm"></i>
                        <div class="flex-grow-1 text-truncate fw-bold">
                            SELAMAT DATANG KE SISTEM SISPAKS
                        </div>
                        <div class="flex-shrink-0">
                            {{-- <a href="{{ URL::asset('/pages-pricing') }}"
                                class="text-reset text-decoration-underline"><b>Upgrade</b></a> --}}
                        </div>
                    </div>

                    <div class="row align-items-end">
                        <div class="col-sm-8">
                            <div class="p-3">
                                <p class="fs-20"><span class="fw-bold">{{ auth()->user()->name }}</span> </p>
                                <p class="fs-16"><span class="fw-semibold">{{ auth()->user()->bahagian->name }}</span> </p>
                                {{-- <div class="mt-3">
                                    <a href="{{ URL::asset('/pages-pricing') }}" class="btn btn-info">Upgrade
                                        Account!</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="px-3">
                                <img src="{{ URL::asset('assets/images/user-illustarator-1.png') }}"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div>
    </div>

    <div class="col-3">
    
    </div>
    
    <div class="col-3">
    
    </div>
    
</div>


@endsection



@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

@endsection

@push('scripts')
@endpush