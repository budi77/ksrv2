<div>

@section('title')
Tetapan Sistem
@endsection


@section('content')

<div class="row">

    

    <div class="col-xxl-12">
        <h5 class="mb-3">Tetapan Sistem</h5>
        <div class="card">
            <div class="card-body">
                {{-- <p class="text-muted">Use <code>arrow-navtabs </code>class to create arrow nav tabs.</p> --}}
                <ul class="nav nav-pills arrow-navtabs nav-info bg-light mb-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#arrow-overview" role="tab" aria-selected="true">
                            <span class="d-block d-sm-none"><i class="mdi mdi-home-variant"></i></span>
                            <span class="d-none d-sm-block">Pengguna Sistem</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#arrow-profile" role="tab" aria-selected="false" tabindex="-1">
                            <span class="d-block d-sm-none"><i class="mdi mdi-account"></i></span>
                            <span class="d-none d-sm-block">Bahagian / Gabungan</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#arrow-contact" role="tab" aria-selected="false" tabindex="-1">
                            <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                            <span class="d-none d-sm-block">Ubah Rekod Pembayaran</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active show" id="arrow-overview" role="tabpanel">
                        <livewire:settings.users />
                    </div>
                    <div class="tab-pane" id="arrow-profile" role="tabpanel">
                        <livewire:settings.departments />
                    </div>
                    <div class="tab-pane" id="arrow-contact" role="tabpanel">
                        <livewire:settings.edit.index />
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!--end col-->
</div>


   
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/pages/project-overview.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
</div>
