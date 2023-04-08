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
                                    
                                    <button type="button" class="btn btn-success add-btn" wire:click="showModal"><i class="ri-add-line align-bottom me-1"></i> Cipta
                                        Serahan</button>
                                   
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
                                <table class="table align-middle" id="">
                                    <thead class="table-light text-muted">
                                        <tr>
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
                                    <tbody class="">
                                       @foreach($results as $result)
                                        <tr>
                                           {{-- {{ $result }} --}}
                                            <td class="">{{ $loop->iteration }}</td>
                                            <td class="">{{ @$result->department->name }}</td>
                                            <td class="">{{ @$result->user->name }}</td>
                                            <td class="">{{ @$result->total}}</td>
                                            <td class="">{{ @$result->mode }}</td>
                                            <td class="">{{ @$result->year }}</td>
                                            <td class="">
                                                @if($result->approver_id == '')
                                                <span class="badge badge-soft-warning text-uppercase">Belum disahkan</span>
                                                @else
                                                <span class="badge badge-soft-success text-uppercase">telah disahkan</span>

                                                @endif
                                            </td>

                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Lihat Data">
                                                        <a href="javascript:void(0);" class="text-primary d-inline-block edit-item-btn" wire:click="show('{{ $result->id }}')">
                                                            <i class=" ri-eye-line fs-16"></i>
                                                        </a>
                                                    </li>
                                                    @isset($result->approved_at)
                                                        @if($result->approved_at <> '')
                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title="Pengesahan">
                                                            <a href="javascript:void(0);" class="text-success d-inline-block edit-item-btn" wire:click="approve('{{ $result->id }}')">
                                                                <i class="ri-checkbox-circle-line fs-16"></i>
                                                            </a>
                                                        </li>
                                                        @endif
                                                    @endisset
                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Padam">
                                                        <a class="text-danger d-inline-block remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteRecordModal" >
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

       

         <div wire:ignore.self class="modal fade show" id="showApprove" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center p-5">
                        <lord-icon src="https://cdn.lordicon.com/rfbqeber.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                        </lord-icon>

                        <div class="mt-4">
                            <h4 class="mb-3">Pengesahan Penerimaan Yuran!</h4>
                            <p class="text-muted mb-4"> Saya telah menerima bayaran yuran sebanyak <span class='fw-bold'>RM{{ @$approve->total }}</span> daripada <span class="fw-bold">{{ @$approve->user->name }}</span> sebagai bayaran yuran KSR  {{ @$approve->department->name }} untuk tahun {{ @$approve->year }}
                                </p>
                            <div class="hstack gap-2 justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                                <a href="javascript:void(0);" class="btn btn-success" wire:click="confirm_approve">Sahkan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <select class="form-select"  wire:model.defer="department">
                                    <option >-- Sila Pilih --</option>
                                    @foreach($departments as $data)
                                    <option value="{{ $data->id }}" @selected($department_id == $data->id)>{{ $data->name }}</option>
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
                                        <option value="Sebahagian" @selected($type == 'Sebahagian')>Sebahagian</option>
                                        <option value="Selesai" @selected($type == 'Selesai')>Selesai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label for="choices-status-input" class="form-label">Tahun</label>
                                    <select class="form-select"
                                        id="choices-status-input" wire:model.defer="year">
                                        <option selected >-- Sila Pilih --</option>
                                        <option value="2023" @selected($year == '2023')>2023</option>
                                        <option value="2024" @selected($year == '2024')>2024</option>
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
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Tunai" checked wire:model="mode" @checked($mode == 'Tunai')>
                                <label class="form-check-label font-size-14 fw-bold" for="">Tunai</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Bank-In" wire:model="mode" @checked($mode == 'Bank-In')>
                                <label class="form-check-label font-size-14 fw-bold" for="">Bank-In</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Kospera" wire:model="mode" @checked($mode == 'Kospera')>
                                <label class="form-check-label font-size-14 fw-bold" for="">Kospera</label>
                              </div>
                             
                            </div>
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
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div wire:ignore.self class="modal fade" id="viewModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Lihat Maklumat Serahan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                        <div class="modal-body">
                        @if($showdata)    
                        @if(@$showdata->approver_id <> '')
                        <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                            <i class="ri-check-double-line label-icon"></i><strong>Telah disahkan oleh {{ @$showdata->approver->name  }} pada {{ @$showdata->approved_at }}</strong>
                        </div>
                        @else

                        <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                            <i class="ri-error-warning-line label-icon"></i><strong>Belum disahkan</strong>
                        </div>
                        @endif
                        @endif


                            <div class="mb-3">
                              <label for="" class="form-label">Bahagian</label>
                              <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="" value="{{ @$showdata->department->name }}">
                            </div>

                            

                        <div class="row">
                       
                       
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div>
                                    <label for="datepicker-deadline-input" class="form-label">Status</label>
                                    <input type="text" class="form-control" 
                                        placeholder="Jumlah" value={{ @$showdata->type }}>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <label for="datepicker-deadline-input" class="form-label">Tahun</label>
                                    <input type="text" class="form-control" 
                                        placeholder="Jumlah" value={{ @$showdata->year }}>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <label for="datepicker-deadline-input" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" 
                                        placeholder="Jumlah" value={{ @$showdata->total }}>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <p class="mb-1"><label for="" class="form-label">Cara Serahan</label></p>
                                    <input type="text" class="form-control" placeholder="Jumlah" value={{ @$showdata->mode }}>
                                </div>
                                <div class="col-6">

                                    <p class="mb-1"><label for="" class="form-label">PIC</label></p>
                            <input type="text" class="form-control" placeholder="" value={{ @$showdata->user->name }}>
                                </div>
                            </div>
                            
                        </div>


                        <div class="mb-3">
                          <label for="" class="form-label">Catatan</label>
                          <textarea class="form-control" name="" id="" rows="3" >{{ @$showdata->remarks }}</textarea>
                        </div>

                       

                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>

      

        
     
      
 
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
                var modal3 = new bootstrap.Modal('#viewModal');
                document.addEventListener('hide-viewmodal', () => {
                    modal3.hide();
                });
                document.addEventListener('show-viewmodal', () => {
                    modal3.show();
                });

                var modal2 = new bootstrap.Modal('#showApprove');
                document.addEventListener('show-approve', () => {
                    modal2.show();
                });
                document.addEventListener('hide-approve', () => {
                    modal2.hide();
                });

            });
        </script>

    @endsection  
</div>
