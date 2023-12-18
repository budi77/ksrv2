<div>
    @section('title') @lang('translation.starter')  @endsection
    @component('components.breadcrumb')
    @slot('li_1') Pages @endslot
    @slot('title') Yuran  @endslot
    @endcomponent


    {{-- <div class="row">
        <div class="col-xxl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="flex-grow-1">
                            <lord-icon src="https://cdn.lordicon.com/fhtaantg.json" trigger="loop"
                                colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px">
                            </lord-icon>
                        </div>
                       
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
                                  
                                </div>
                                <h3 class="mb-2">RM<span class="counter-value" data-target="{{ $tot_sum }}">0</span></h3>
                                <h6 class="text-muted mb-0">Jumlah Kutipan</h6>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                   
                </div>
            </div>
            <!--end swiper-->
        </div>
        <!--end col-->
    </div> --}}
    <!--end row-->



    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">IBU PEJABAT</h4>
    
                </div><!-- end card header -->
    
                <div class="card-body">
              
    
                        <div class="table-responsive table-card">
                            <table class="table table-nowrap mb-0 table-striped">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        
                                        <th scope="col">#</th>
                                        <th scope="col">Bahagian</th>
                                        <th scope="col" class="text-center">Jumlah Ahli</th>
                                        {{-- <th scope="col" class="text-center"># Ahli Selesai Bayar Yuran Tahun Semasa</th> --}}
                                        {{-- <th scope="col" class="text-center">% bayar</th> --}}
                                        <th scope="col"></th>   
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($results as $row)
                                    <tr>
                                        
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td class="text-center">{{ $row->active_members_count }}</td>
                                        {{-- <td class="text-center">
                                            <span class="badge bg-secondary">{{ $row->totalpaidmemberforcurrentyear_count }}
                                            </span>
                                        </td> --}}
                                        {{-- <td>
                                        <div class="progress progress-xl animated-progress">
                                            @if($row->active_members_count != 0)
                                                @if((($row->totalpaidmemberforcurrentyear_count /  $row->active_members_count) * 100) >= 0 && (($row->totalpaidmemberforcurrentyear_count /  $row->active_members_count) * 100) <= 50 )

                                            
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{ number_format((($row->totalpaidmemberforcurrentyear_count /  $row->active_members_count) * 100),0) }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ number_format((($row->totalpaidmemberforcurrentyear_count /  $row->active_members_count) * 100),0) }}%</div>
                                                
                                                @elseif((($row->totalpaidmemberforcurrentyear_count /  $row->active_members_count) * 100) >= 51 && (($row->totalpaidmemberforcurrentyear_count /  $row->active_members_count) * 100) <= 99 )
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ number_format((($row->totalpaidmemberforcurrentyear_count /  $row->active_members_count) * 100),0) }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ number_format((($row->totalpaidmemberforcurrentyear_count /  $row->active_members_count) * 100),0) }}%</div>
                                                @else
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                
                                                @endif
                                            @endif
                                        </div>
                                    </td> --}}
                                        <td class="text-end">
                                            <a class="btn btn-primary btn-sm" href="{{ route('fees.departments.show' , $row->id) }}" role="button">Pilih</a>
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
  
    <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    @endsection
</div>
