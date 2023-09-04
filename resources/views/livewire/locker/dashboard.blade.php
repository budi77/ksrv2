<div>
@section('title')
    LOKER
@endsection

@component('components.breadcrumb')
    @slot('li_1')
        Dashboard
    @endslot
    @slot('title')
        Loker
    @endslot
@endcomponent

    <div class="row">
    @foreach($lockers as $locker)
        <div class="col-xxl-4 col-sm-6 project-card">
            <div class="card">
                <div class="card-body">
                    <div class="p-3 mt-n3 mx-n3 bg-{{ $locker->tenant <> '' ? 'danger' : 'info' }} bg-gradient rounded-top">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fs-16"><a href="apps-projects-overview" class="text-body">{{ $locker->gender . $locker->locker_no }}</a></h5>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="d-flex gap-1 align-items-center my-n2">
                                    <button type="button" class="btn avatar-xs p-0 favourite-btn shadow-none active">
                                        <span class="avatar-title bg-transparent fs-15">
                                            <i class="ri-star-fill"></i>
                                        </span>
                                    </button>
                                    <div class="dropdown">
                                        <button class="btn btn-link text-muted p-1 mt-n1 py-0 text-decoration-none fs-15 shadow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-sm"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0);" wire:click="add('{{ @$locker->id }}')" ><i class="ri-eye-fill align-bottom me-2 text-muted"></i> Tempah</a>
                                            <a class="dropdown-item" href="apps-projects-create"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#removeProjectModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-3">
                        <div class="row gy-3">
                        <div>
                            <p class="text-muted mb-1">Nama Penyewa</p>
                            <div class="fs-16">
                                {{ $locker->tenant ? $locker->tenant->name : '-' }}
                            </div>
                        </div>
                        <div>
                            <p class="text-muted mb-1">Bahagian</p>
                            <div class="fs-16">
                                {{ $locker->tenant ? $locker->tenant->bahagian->name : '-' }}
                            </div>
                        </div>
                            <div class="col-6">
                                <div>
                                    <p class="text-muted mb-1">Status</p>
                                    <div class="badge bg-info text-white fs-12">Available</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <p class="text-muted mb-1">Tarikh tamat</p>
                                    <h5 class="fs-14">{{ @$locker->tenant->end }}</h5>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="d-flex align-items-center mt-3">
                            <p class="text-muted mb-0 me-2">Team :</p>
                            <div class="avatar-group">
                                <a href="javascript: void(0);" class="avatar-group-item shadow" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="Donna Kline">
                                    <div class="avatar-xxs">
                                        <div class="avatar-title rounded-circle bg-danger">
                                            D
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript: void(0);" class="avatar-group-item shadow" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Lee Winton" data-bs-original-title="Lee Winton">
                                    <div class="avatar-xxs">
                                        <img src="http://velzon.laravel-material.themesbrand.com/build/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid">
                                    </div>
                                </a>
                                <a href="javascript: void(0);" class="avatar-group-item shadow" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Johnny Shorter" data-bs-original-title="Johnny Shorter">
                                    <div class="avatar-xxs">
                                        <img src="http://velzon.laravel-material.themesbrand.com/build/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid">
                                    </div>
                                </a>
                                <a href="javascript: void(0);" class="avatar-group-item shadow" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="Add Members">
                                    <div class="avatar-xxs">
                                        <div class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                            +
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div>
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <div>Progress</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div>50%</div>
                            </div>
                        </div>
                        <div class="progress progress-sm animated-progress bg-success-subtle">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </div> --}}

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

      
       

    @endforeach
    </div>


    <!-- Modal -->
    <div wire:ignore.self class="modal fade zoomIn" id="add" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Maklumat Penyewa Loker : {{ @$locker_info->gender . @$locker_info->locker_no  }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="name">
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                              <label for="" class="form-label">No Telefon</label>
                              <input type="email"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="tel_no">
                              {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                            </div>

                        </div>
                        <div class="col-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Emel</label>
                              <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="email">
                              {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Bahagian</label>
                        <select class="form-select" wire:model.defer="department_id">
                        @if(!empty($departments))

                            <option selected>--Pilih--</option>
                            @foreach ($departments as $item)
                                <option value="{{ $item->id }}" @selected($department_id == $item->id)>{{ $item->name }}</option>

                            @endforeach
                        @endif
                            
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                              {{-- <label for="" class="form-label">No Telefon</label> --}}
                              <label for="" class="form-label">Tarikh Mula</label>
                                <x-date-picker id="date" wire:model="start" autocomplete="off" value="" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Tempoh</label>
                                <select class="form-select" name="" id="" wire:model="period" wire:change="countFee">
                                    <option selected>--Pilih--</option>
                                    <option value="1">1 Bulan</option>
                                    <option value="2">2 Bulan</option>
                                    <option value="3">3 Bulan</option>
                                    <option value="4">4 Bulan</option>
                                    <option value="5">5 Bulan</option>
                                    <option value="6">6 Bulan</option>
                                    <option value="7">7 Bulan</option>
                                    <option value="8">8 Bulan</option>
                                    <option value="9">9 Bulan</option>
                                    <option value="10">10 Bulan</option>
                                    <option value="11">11 Bulan</option>
                                    <option value="12">12 Bulan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                              <label for="" class="form-label">Jumlah Yuran (RM)</label>
                              <input type="text"
                              class="form-control" readonly name="" id="" aria-describedby="helpId" placeholder="" wire:model="fees">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store">Simpan</button>
                </div>
            </div>
        </div>
    </div>


    @section('script')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var modal = new bootstrap.Modal('#add');
            document.addEventListener('show-add', () => {
                modal.show();
            });
            document.addEventListener('hide-add', () => {
                modal.hide();
            });

            var modal2 = new bootstrap.Modal('#edit');
            document.addEventListener('show-edit', () => {
                modal2.show();
            });
            document.addEventListener('hide-edit', () => {
                modal2.hide();
            });

           
        });
    </script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    @endsection




</div>
