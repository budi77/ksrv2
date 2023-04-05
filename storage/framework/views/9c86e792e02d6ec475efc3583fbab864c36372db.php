<div>
    
    <?php $__env->startSection('title'); ?>
        Serahan
    <?php $__env->stopSection(); ?>
  
        <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('li_1'); ?>
               Dashboard
            <?php $__env->endSlot(); ?>
            <?php $__env->slot('title'); ?>
               Serahan Yuran
            <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="customerList">
                    <div class="card-header border-bottom-dashed">
    
                        <div class="row g-4 align-items-center">
                            <div class="col-sm">
                                <div>
                                    <h5 class="card-title mb-0">Customer List</h5>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div>
                                    
                                    <button type="button" class="btn btn-success add-btn" wire:click="showModal"><i class="ri-add-line align-bottom me-1"></i> Cipta
                                        Serahan</button>
                                    <button type="button" class="btn btn-info"><i
                                            class="ri-file-download-line align-bottom me-1"></i>
                                        Import
                                    </button>
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
                                            <div>
                                                <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i
                                                        class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                            </div>
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
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                        value="option">
                                                </div>
                                            </th>
    
                                            <th class="sort" data-sort="customer_name">Customer</th>
                                            <th class="sort" data-sort="email">Email</th>
                                            <th class="sort" data-sort="phone">Phone</th>
                                            <th class="sort" data-sort="date">Joining Date</th>
                                            <th class="sort" data-sort="status">Status</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id" style="display:none;"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#VZ2101</a></td>
                                            <td class="customer_name">Mary Cousar</td>
                                            <td class="email">marycousar@velzon.com</td>
                                            <td class="phone">580-464-4694</td>
                                            <td class="date">06 Apr, 2021</td>
                                            <td class="status"><span
                                                    class="badge badge-soft-success text-uppercase">Active</span>
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
                                                            data-bs-toggle="modal" href="#deleteRecordModal">
                                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
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
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                            </div>

                              <div class="row">
                       
                       
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label for="choices-priority-input" class="form-label">Priority</label>
                                    <select class="form-select" data-choices data-choices-search-false
                                        id="choices-priority-input">
                                        <option value="High" selected>High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label for="choices-status-input" class="form-label">Status</label>
                                    <select class="form-select" data-choices data-choices-search-false
                                        id="choices-status-input">
                                        <option value="Inprogress" selected>Inprogress</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <label for="datepicker-deadline-input" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" 
                                        placeholder="Jumlah" >
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <p class="mb-1"><label for="" class="form-label">Cara Pembayaran</label></p>

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
                          <input type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId">
                          
                        </div>

                        <div class="mb-3">
                          <label for="" class="form-label">Catatan</label>
                          <textarea class="form-control" name="" id="" rows="5"></textarea>
                        </div>

                           

                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn">Hantar</button>
                                
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
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
    <?php $__env->startSection('script'); ?>
       
    
        <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>

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

    <?php $__env->stopSection(); ?>  
</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/fees/submission/index.blade.php ENDPATH**/ ?>