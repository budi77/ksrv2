<div>
    @section('title')
    KEAHLIAN
    @endsection
    @section('css')
        <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    @endsection
    {{-- @section('content') --}}
        @component('components.breadcrumb')
            @slot('li_1')
                Dashboard
            @endslot
            @slot('title')
                Keahlian
            @endslot
        @endcomponent

      
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
                                            {{-- <i class="ri-space-ship-line display-6 text-muted"></i> --}}
                                            <lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px"></lord-icon>
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
                                            {{-- <i class="ri-exchange-dollar-line display-6 text-muted"></i> --}}
                                            <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px"></lord-icon>
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
                                            {{-- <i class="ri-pulse-line display-6 text-muted"></i> --}}
                                            <lord-icon src="https://cdn.lordicon.com/rivoakkk.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px"></lord-icon>
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
                                            {{-- <i class="ri-trophy-line display-6 text-muted"></i> --}}
                                            <lord-icon src="https://cdn.lordicon.com/ajyyzcwv.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px"></lord-icon>
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
                                        <select class="form-select" wire:model="filter_department">
                                            <option selected value="">Pilih Bahagian</option>
                                            @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endforeach
                                            
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
                                <thead class="table-light text-muted">
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
                                            {{-- <div class="d-flex">
                                                <div class="flex-grow-1 tasks_name">Profile Page Satructure</div>
                                                <div class="flex-shrink-0 ms-4">
                                                    <ul class="list-inline tasks-list-menu mb-0">
                                                        <li class="list-inline-item"><a
                                                                href="{{ URL::asset('/apps-tasks-details') }}"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a class="edit-item-btn"
                                                                href="#showModal" data-bs-toggle="modal"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a class="remove-item-btn" data-bs-toggle="modal"
                                                                href="#deleteOrder">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> --}}
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
                                                {{-- <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Call">
                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                        <i class="ri-phone-line fs-16"></i>
                                                    </a>
                                                </li> --}}
                                                {{-- <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Message">
                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                        <i class="ri-question-answer-line fs-16"></i>
                                                    </a>
                                                </li> --}}
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View">
                                                    <a href="javascript:void(0);" class="view-item-btn"><i class="ri-eye-fill align-bottom text-muted"></i></a>
                                                </li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit">
                                                    <a class="edit-item-btn" href="javascript:void(0);" wire:click="edit('{{ $result->id }}')"><i class="ri-pencil-fill align-bottom text-muted"></i></a>
                                                </li>
                                                {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Delete">
                                                    <a class="remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                        <i class="ri-delete-bin-fill align-bottom text-muted"></i>
                                                    </a>
                                                </li> --}}
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!--end table-->
                            {{-- <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 200k+ tasks We did not find any tasks
                                        for you search.</p>
                                </div>
                            </div> --}}
                        </div>
                        {{ $results->links() }}

                        {{-- <div class="d-flex justify-content-end mt-2">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="#">
                                    Next
                                </a>
                            </div>
                        </div> --}}
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        {{-- <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-5 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                        <div class="mt-4 text-center">
                            <h4>You are about to delete a task ?</h4>
                            <p class="text-muted fs-14 mb-4">Deleting your task will remove all of
                                your information from our database.</p>
                            <div class="hstack gap-2 justify-content-center remove">
                                <button class="btn btn-link btn-ghost-primary fw-medium text-decoration-none" id="deleteRecord-close" 
                                    data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                <button class="btn btn-info" id="delete-record">Yes, Delete It</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--end delete modal -->

        <div wire:ignore.self class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
