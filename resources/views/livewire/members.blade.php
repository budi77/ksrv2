<div>
    @section('title')
    KEAHLIAN
    @endsection
    @section('css')
        <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    @endsection
    {{-- @section('content') --}}
        {{-- @component('components.breadcrumb')
            @slot('li_1')
                Dashboard
            @endslot
            @slot('title')
                Keahlian
            @endslot
        @endcomponent --}}

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">KEAHLIAN</h4>
        
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#"><i class="ri-home-5-fill"></i></a></li>
                            {{-- <li class="breadcrumb-item"><a href="#">dashboard</a></li> --}}
                            <li class="breadcrumb-item active" aria-current="page">keahlian</li>
                        </ol>
                    </div>
        
                </div>
            </div>
        </div>

        {{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="ri-home-5-fill"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Base UI</a></li>
                <li class="breadcrumb-item active" aria-current="page">General</li>
            </ol>
        </nav> --}}

      
        <div class="row">
            <div class="col-xl-12">
                <div class="card crm-widget">
                    <div class="card-body p-0">
                        <div class="row row-cols-md-3 row-cols-1">
                            <div class="col col-lg border-end">
                                <div class="py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Jumlah Ahli
                                        
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-space-ship-line display-6 text-muted"></i>
                                            {{-- <lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px"></lord-icon> --}}
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="mb-0"><span class="counter-value" data-target="{{ $jumlah_ahli }}">{{ $jumlah_ahli }}</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col col-lg border-end">
                                <div class="mt-3 mt-md-0 py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Aktif 
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-exchange-dollar-line display-6 text-muted"></i>
                                            {{-- <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px"></lord-icon> --}}
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="mb-0"><span class="counter-value"
                                                    data-target="{{ $aktif }}">{{ $aktif }}</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col col-lg border-end">
                                <div class="mt-3 mt-md-0 py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Tak Aktif
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-pulse-line display-6 text-muted"></i>
                                            {{-- <lord-icon src="https://cdn.lordicon.com/rivoakkk.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px"></lord-icon> --}}
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="mb-0"><span class="counter-value"
                                                    data-target="{{ $non_aktif }}">{{ $non_aktif }}</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col col-lg border-end">
                                <div class="mt-3 mt-lg-0 py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Ahli Kospera 
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-trophy-line display-6 text-muted"></i>
                                            {{-- <lord-icon src="https://cdn.lordicon.com/ajyyzcwv.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px"></lord-icon> --}}
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="mb-0"><span class="counter-value"
                                                    data-target="{{ $kospera }}">{{ $kospera }}</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            {{-- <div class="col col-lg">
                                <div class="mt-3 mt-lg-0 py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Annual Deals <i
                                            class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i>
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-service-line display-6 text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="mb-0"><span class="counter-value"
                                                    data-target="2659">0</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col --> --}}
                        </div><!-- end row -->
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

      

        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="tasksList">
                    <div class="card-header border-0">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title mb-0 flex-grow-1">Senarai Ahli</h5>
                            <div class="flex-shrink-0">
                                <button class="btn btn-primary add-btn" wire:click="showModal"><i
                                        class="ri-add-line align-bottom me-1"></i> Tambah Ahli</button>
                                {{-- <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i
                                        class="ri-delete-bin-2-line"></i></button> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body border border-dashed border-end-0 border-start-0">
                        <form>
                            <div class="row g-3">
                                <div class="col-xxl-3 col-sm-3">
                                    <div class="search-box">
                                        <input type="text" class="form-control search bg-light border-light"
                                            placeholder="Cari ahli" wire:model="search">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <!--end col-->

                                {{-- <div class="col-xxl-3 col-sm-4">
                                    <input type="text" class="form-control bg-light border-light" id="demo-datepicker"
                                        data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true"
                                        placeholder="Select date range">
                                </div> --}}
                                <!--end col-->

                                <div class="col-xxl-5 col-sm-5">
                                    <div class="input-light">
                                        <select class="form-select" wire:model="filter_department">
                                            <option selected value="">Pilih Bahagian</option>
                                            @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-sm-2">
                                    <div class="input-light">
                                        <select class="form-select" wire:model="filter_kospera">
                                            <option selected value="">-- Pilih Kospera --</option>
                                            
                                            <option value="1">Ahli Kospera</option>
                                            <option value="0">Bukan Ahli Kospera</option>
                                           
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-sm-2">
                                    <div class="input-light">
                                        <select class="form-select" wire:model="filter_aktif">
                                            <option selected value="">-- Pilih Aktif --</option>
                                            
                                            <option value="1">Aktif</option>
                                            <option value="0">Tak Aktif</option>
                                           
                                            
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->
                                {{-- <div class="col-xxl-1 col-sm-4">
                                    <button type="button" class="btn btn-info w-100" onclick="SearchData();"> <i
                                            class="ri-equalizer-fill me-1 align-bottom"></i>
                                        Filters
                                    </button>
                                </div> --}}
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <!--end card-body-->
                    <div class="card-body">
                        <div class="table-responsive table-card mb-4">
                            <table class="table align-middle table-nowrap mb-0" id="tasksTable">
                                <thead class="table bg-info text-white">
                                    <tr>
                                        {{-- <th scope="col" style="width: 40px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                            </div>
                                        </th> --}}
                                        <th>#</th>
                                        <th width="20%">Nama</th>
                                        <th>No Kad Pengenalan</th>
                                        <th>E-Mel</th>
                                        <th>Bahagian</th>
                                        <th>Kospera</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach($results as $result)
                                    <tr>
                                        <th scope="row">
                                            

                                            {{ $loop->iteration }}
                                        </th>
                                        <td class="">
                                           
                                                {{  $result->name }}
                                        </td>
                                        <td class="project_name"> 
                                            {{  $result->ic_no }}                                               
                                        </td>
                                        <td>
                                            {{ $result->email }}
                                           
                                        </td>
                                        <td class="">
                                            {{ @$result->bahagian->name }}
                                        </td>
                                        <td class="text-info">
                                            @if($result->kospera == 1)
                                            <span class="badge text-bg-warning text-uppercase">Kospera</span>
                                            @endif
                                        </td>
                                        <td class="">
                                            @if($result->active == 1)
                                            <span class="badge text-bg-success text-uppercase">Aktif</span>
                                            @else
                                            <span class="badge text-bg-danger text-uppercase">Non Aktif</span>

                                            @endif
                                        </td>
                                        <td>
                                            <ul class="list-inline hstack gap-2 mb-0">
                                               
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View">
                                                    <a href="javascript:void(0);" class="view-item-btn" wire:click="list('{{ $result->id }}')"><i class="ri-eye-fill align-bottom text-muted"></i></a>
                                                </li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit">
                                                    <a class="edit-item-btn" href="javascript:void(0);" wire:click="edit('{{ $result->id }}')"><i class="ri-pencil-fill align-bottom text-muted"></i></a>
                                                </li>
                                              
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!--end table-->
                            
                        </div>
                        {{ $results->links() }}

                       
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        
        <!--end delete modal -->

        <div wire:ignore.self class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header p-3 bg-soft-info">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Ahli</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <input type="hidden" id="tasksId" />
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <label for="projectName-field" class="form-label">Nama Penuh</label>
                                    <input type="text" id="projectName-field" class="form-control" placeholder=""
                                         wire:model.defer="name" />
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div>
                                        <label for="tasksTitle-field" class="form-label">No Kad Pengenalan</label>
                                        <input type="text" id="tasksTitle-field" class="form-control" placeholder=""
                                            wire:model.defer="ic_no" />
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <label for="clientName-field" class="form-label">E-mel</label>
                                    <input type="text" id="clientName-field" class="form-control" placeholder=""
                                    wire:model.defer="email" />
                                </div>
                                <!--end col-->
                               
                                <!--end col-->

                                
                               <div class="col-lg-12">
                                    <label for="priority-field" class="form-label">Bahagian</label>
                                    <select class="form-control"  wire:model.defer="department">
                                        <option value="">-- Sila Pilih --</option>
                                        @foreach($departments as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>

                                <div class="col-lg-6 pt-4">
                                    <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="customSwitch1" checked="" wire:model="koperasi">
                                        <label class="form-check-label" for="customSwitch1">Ahli Kospera</label>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6 pt-4">
                                    <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="customSwitch1" checked="" wire:model="active">
                                        <label class="form-check-label" for="customSwitch1">Aktif</label>
                                    </div>
                                </div>
                                <!--end col-->
                                
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" id="close-modal"
                                    data-bs-dismiss="modal">Close</button>
                                {{-- <button type="submit" class="btn btn-success" id="add-btn">Add Task</button> --}}
                                <button type="button" class="btn btn-success" id="edit-btn"  wire:click="store">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div wire:ignore.self class="modal fade" id="list" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Sejarah Pembayaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
    
                        <div class="row">
                          {{-- {{ $member_list }} --}}
                            <div class="col-12">
                                <p class="fw-bold h4 mb-0 text-center">{{ @$member_list->name }}</p>
                                <p class="fw-bold text-muted mb-0 text-center">{{ @$member_list->bahagian->name}}</p>
                            </div>
                        </div>
    
                        {{-- <hr> --}}
                        @isset($member_list->payments)
    
                        <div class="table-responsive mt-2">
                            <table class="table">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Tarikh</th>
                                        <th scope="col">Bahagian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($member_list->payments as $data)
                                    <tr class="">
                                        <td scope="row">{{ @$data->year }}</td>
                                        <td>{{ @$data->payment_date }}</td>
                                        <td>{{ @$data->department->name }}</td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
    
                        @endisset
                        
    
    
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <!--end modal-->
    {{-- @endsection --}}

    @section('script')
        {{-- <script src="{{ URL::asset('assets/libs/list.js/list.js.min.js') }}"></script> --}}
        <script src="{{ URL::asset('assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/tasks-list.init.js') }}"></script>
        {{-- <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script> --}}
        {{-- <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script> --}}

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                var modal = new bootstrap.Modal('#showModal');
                document.addEventListener('close-add-modal', () => {
                    modal.hide();
                });
                document.addEventListener('show-modal', () => {
                    modal.show();
                });

                var modal2 = new bootstrap.Modal('#list');
                document.addEventListener('show-list', () => {
                    modal2.show();
                });
                document.addEventListener('hide-list', () => {
                    modal2.hide();
                });

            });
        </script>
    @endsection

</div>
