<div>
    @section('title') @lang('translation.starter')  @endsection
    @component('components.breadcrumb')
    @slot('li_1') Pages @endslot
    @slot('title') Yuran  @endslot
    @endcomponent


    <div class="row">
        <div class="col-xxl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="flex-grow-1">
                            <lord-icon src="https://cdn.lordicon.com/fhtaantg.json" trigger="loop"
                                colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px">
                            </lord-icon>
                        </div>
                        {{-- <div class="flex-shrink-0">
                            <a href="javascript:void(0);" class="badge badge-soft-warning badge-border">BTC</a>
                            <a href="javascript:void(0);" class="badge badge-soft-info badge-border">ETH</a>
                            <a href="javascript:void(0);" class="badge badge-soft-primary badge-border">USD</a>
                            <a href="javascript:void(0);" class="badge badge-soft-danger badge-border">EUR</a>
                        </div> --}}
                    </div>
                    <h3 class="mb-2"><span class="counter-value" data-target="{{ $tot_members }}">0</span></h3>
                    <h6 class="text-muted mb-0">Jumlah Ahli Aktif</h6>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body bg-soft-primary">
                    <div class="d-flex mb-3">
                        <div class="flex-grow-1">
                            <lord-icon src="https://cdn.lordicon.com/vaeagfzc.json" trigger="loop"
                                colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px"></lord-icon>
                        </div>
                        {{-- <div class="flex-shrink-0">
                            <a href="javascript:void(0);" class="badge badge-soft-warning badge-border">BTC</a>
                            <a href="javascript:void(0);" class="badge badge-soft-info badge-border">ETH</a>
                            <a href="javascript:void(0);" class="badge badge-soft-primary badge-border">USD</a>
                            <a href="javascript:void(0);" class="badge badge-soft-danger badge-border">EUR</a>
                        </div> --}}
                    </div>
                    <h3 class="mb-2"><span class="counter-value" data-target="{{ $tot_paid }}">0</span></h3>
                    <h6 class="text-muted mb-0">Selesai Bayar Yuran</h6>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body bg-soft-warning">
                    <div class="d-flex mb-3">
                        <div class="flex-grow-1">
                            <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop"
                                colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px">
                            </lord-icon>
                        </div>
                        {{-- <div class="flex-shrink-0">
                            <a href="javascript:void(0);" class="badge badge-soft-warning badge-border">BTC</a>
                            <a href="javascript:void(0);" class="badge badge-soft-info badge-border">ETH</a>
                            <a href="javascript:void(0);" class="badge badge-soft-primary badge-border">USD</a>
                            <a href="javascript:void(0);" class="badge badge-soft-danger badge-border">EUR</a>
                        </div> --}}
                    </div>
                    <h3 class="mb-2"><span class="counter-value" data-target="{{ $tot_members - $tot_paid }}">0</span></h3>
                    <h6 class="text-muted mb-0">Belum Bayar Yuran</h6>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-md-6">
            <div class="swiper default-swiper rounded">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card card-animate">
                            <div class="card-body bg-soft-info">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1">
                                        <lord-icon src="https://cdn.lordicon.com/qhviklyi.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px">
                                        </lord-icon>
                                    </div>
                                    {{-- <div class="flex-shrink-0">
                                        <a href="javascript:void(0);" class="fw-semibold">Bitcoin (BTC)</a>
                                    </div> --}}
                                </div>
                                <h3 class="mb-2">RM<span class="counter-value" data-target="{{ $tot_sum }}">0</span></h3>
                                <h6 class="text-muted mb-0">Jumlah Kutipan</h6>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    {{-- <div class="swiper-slide">
                        <div class="card card-animate">
                            <div class="card-body bg-soft-info">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1">
                                        <lord-icon src="https://cdn.lordicon.com/vaeagfzc.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px">
                                        </lord-icon>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a href="javascript:void(0);" class="fw-semibold">Ethereum (ETH)</a>
                                    </div>
                                </div>
                                <h3 class="mb-2">$24<small class="text-muted fs-14">.74k</small></h3>
                                <h6 class="text-muted mb-0">Send - Receive (Previous Month)</h6>
                            </div>
                        </div>
                        <!--end card-->
                    </div> --}}
                    {{-- <div class="swiper-slide">
                        <div class="card card-animate">
                            <div class="card-body bg-soft-info">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1">
                                        <lord-icon src="https://cdn.lordicon.com/vaeagfzc.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px">
                                        </lord-icon>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a href="javascript:void(0);" class="fw-semibold">Monero (XMR)</a>
                                    </div>
                                </div>
                                <h3 class="mb-2">$124<small class="text-muted fs-14">.36k</small></h3>
                                <h6 class="text-muted mb-0">Send - Receive (Previous Month)</h6>
                            </div>
                        </div>
                        <!--end card-->
                    </div> --}}
                </div>
            </div>
            <!--end swiper-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->



    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">IBU PEJABAT</h4>
    
                </div><!-- end card header -->
    
                <div class="card-body">
                    {{-- <p class="text-muted mb-4">Use <code>table-card</code> class to show card-based table within a
                        &lt;tbody&gt;.</p> --}}
    
                        <div class="table-responsive table-card">
                            <table class="table table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        {{-- <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cardtableCheck">
                                                <label class="form-check-label" for="cardtableCheck"></label>
                                            </div>
                                        </th> --}}
                                        <th scope="col">#</th>
                                        <th scope="col">Bahagian</th>
                                        <th scope="col" class="text-center">Jumlah Ahli</th>
                                        <th scope="col" class="text-center"># Ahli Selesai Bayar Yuran Tahun Semasa</th>
                                        {{-- <th scope="col">Status</th> --}}
                                        <th scope="col"></th>   
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($results as $row)
                                    <tr>
                                        
                                        <td><a href="#" class="fw-semibold">{{ $loop->iteration }}</a></td>
                                        <td>{{ $row->name }}</td>
                                        <td class="text-center">{{ $row->active_members_count }}</td>
                                        {{-- <td>$24.05</td> --}}
                                        <td class="text-center"><span class="badge bg-success">{{ $row->totalpaidmemberforcurrentyear_count }}</span></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('fees.departments.show' , $row->id) }}" role="button">Pilih</a>
                                            {{-- <button type="button" class="btn btn-sm btn-light">Details</button> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>

    @section('script')
    {{-- <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('/assets/libs/list.js/list.js.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('/assets/js/pages/crypto-transactions.init.js') }}"></script> --}}

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    @endsection
</div>
