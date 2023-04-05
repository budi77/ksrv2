<div>
    {{-- @extends('layouts.master') --}}
    @section('title')
        Serahan
    @endsection
  
        @component('components.breadcrumb')
            @slot('li_1')
               Dashboard
            @endslot
            @slot('title')
               Serahan Yuran
            @endslot
        @endcomponent

        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="customerList">
                    <div class="card-header border-bottom-dashed">
    
                        <div class="row g-4 align-items-center">
                            <div class="col-sm">
                                <div>
                                    <h5 class="card-title mb-0">Maklumat Serahan</h5>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div>
                                    {{-- <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i
                                            class="ri-delete-bin-2-line"></i></button> --}}
                                    <button type="button" class="btn btn-success add-btn" wire:click="showModal"><i class="ri-add-line align-bottom me-1"></i> Cipta
                                        Serahan</button>
                                    {{-- <button type="button" class="btn btn-info"><i
                                            class="ri-file-download-line align-bottom me-1"></i>
                                        Import
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-bottom-dashed border-bottom">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-6">
                                    <div class="search-box">
                                        <input type="text" class="form-control search"
                                            placeholder="Search for customer, email, phone, status or something...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xl-6">
                                    <div class="row g-3">
                                        <div class="col-sm-4">
                                            <div class="">
                                                <input type="text" class="form-control" id="datepicker-range"
                                                    data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true"
                                                    placeholder="Select date">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-sm-4">
                                            <div>
                                                <select class="form-control" data-plugin="choices" data-choices
                                                    data-choices-search-false name="choices-single-default" id="idStatus">
                                                    <option value="">Status</option>
                                                    <option value="all" selected>All</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Block">Block</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
    
                                        <div class="col-sm-4">
                                            {{-- <div>
                                                <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i
                                                        class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                            </div> --}}
                                        </div>
                                        <!--end col-->
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="table-responsive table-card mb-1">
                                <table class="table align-middle" id="customerTable">
                                    <thead class="table-light text-muted">
                                        <tr>
                                            {{-- <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                        value="option">
                                                </div>
                                            </th> --}}
    
                                            <th>#</th>
                                            <th>Bahagian</th>
                                            <th>Diserah oleh</th>
                                            <th>Jumlah</th>
                                            <th>Cara Bayaran</th>
                                            <th>Tahun</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                       @foreach($results as $data)
                                        <tr>
                                           
                                            <td class="">{{ $loop->iteration }}</td>
                                            <td class="">{{ $data->department->name }}</td>
                                            <td class="">{{ $data->user->name }}</td>
                                            <td class="">{{ $data->total}}</td>
                                            <td class="">{{ $data->mode }}</td>
                                            <td class="">{{ $data->year }}</td>
                                            <td class="">
                                                @if($data->approver_id == '')
                                                <span class="badge badge-soft-warning text-uppercase">Belum disahkan</span>
                                                @else
                                                <span class="badge badge-soft-success text-uppercase">telah disahkan</span>

                                                @endif
                                            </td>

                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal"
                                                            class="text-primary d-inline-block edit-item-btn">
                                                            <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteRecordModal" wire:click="$set('data_id', '{{ $data->id }}')">
                                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              
                            </div>
                            
                        </div>

                              
                        
                        <!--end modal -->
                    </div>
                </div>
    
            </div>
            <!--end col-->
        </div>

        <div wire:ignore.self class="modal fade" id="showModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Cipta Serahan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                        <div class="modal-body">

                            <div class="col-lg-12 mb-3">
                                <label for="priority-field" class="form-label">Bahagian</label>
                                <select class="form-control form-select"  wire:model.defer="department">
                                    <option value="">-- Sila Pilih --</option>
                                    @foreach($departments as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>

                              <div class="row">
                       
                       
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label for="choices-priority-input" class="form-label">Status</label>
                                    <select class="form-select" 
                                        id="choices-priority-input" wire:model.defer="type">
                                        <option selected>-- Sila Pilih --</option>
                                        <option value="Sebahagian">Sebahagian</option>
                                        <option value="Selesai">Selesai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label for="choices-status-input" class="form-label">Tahun</label>
                                    <select class="form-select"
                                        id="choices-status-input" wire:model.defer="year">
                                        <option selected >-- Sila Pilih --</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <label for="datepicker-deadline-input" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" 
                                        placeholder="Jumlah" wire:model.defer="total">
                                </div>
                            </div>
                        </div>


                        <div class="col-12 mb-3">
                            <p class="mb-1"><label for="" class="form-label">Cara Serahan</label></p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Tunai" checked wire:model="mode">
                                <label class="form-check-label font-size-14 fw-bold" for="">Tunai</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Bank-In" wire:model="mode">
                                <label class="form-check-label font-size-14 fw-bold" for="">Bank-In</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Kospera" wire:model="mode">
                                <label class="form-check-label font-size-14 fw-bold" for="">Kospera</label>
                              </div>
                             
                            </div>
                        </div>


                        <div class="mb-3">
                          <label for="" class="form-label">Muat Naik Dokumen (jika ada)</label>
                          <input type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId" wire:model.defer="document">
                          {{-- <div id="fileHelpId" class="form-text">Help text</div> --}}
                        </div>

                        <div class="mb-3">
                          <label for="" class="form-label">Catatan</label>
                          <textarea class="form-control" name="" id="" rows="5" wire:model.defer="remarks"></textarea>
                        </div>

                           

                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn" wire:click="store">Hantar</button>
                                {{-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> --}}
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div wire:ignore.self class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close"
                            id="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px">
                            </lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to
                                    remove this record ?</p>
                                    {{-- {{ $data_id }} --}}
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete
                                It!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

           
                   

        <!--end row-->
    @section('script')
       
    
        <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                var modal = new bootstrap.Modal('#showModal');
                document.addEventListener('hide-modal', () => {
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
