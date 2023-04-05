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
                                       <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                           
                                            <td class=""><?php echo e($loop->iteration); ?></td>
                                            <td class=""><?php echo e(@$result->department->name); ?></td>
                                            <td class=""><?php echo e(@$result->user->name); ?></td>
                                            <td class=""><?php echo e(@$result->total); ?></td>
                                            <td class=""><?php echo e(@$result->mode); ?></td>
                                            <td class=""><?php echo e(@$result->year); ?></td>
                                            <td class="">
                                                <?php if($result->approver_id == ''): ?>
                                                <span class="badge badge-soft-warning text-uppercase">Belum disahkan</span>
                                                <?php else: ?>
                                                <span class="badge badge-soft-success text-uppercase">telah disahkan</span>

                                                <?php endif; ?>
                                            </td>

                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="javascript:void(0);" class="text-primary d-inline-block edit-item-btn" wire:click="edit('<?php echo e($result->id); ?>')">
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
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <select class="form-select"  wire:model.defer="department">
                                    <option >-- Sila Pilih --</option>
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>" <?php if($department_id == $data->id): echo 'selected'; endif; ?>><?php echo e($data->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
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
                                        <option value="Sebahagian" <?php if($type == 'Sebahagian'): echo 'selected'; endif; ?>>Sebahagian</option>
                                        <option value="Selesai" <?php if($type == 'Selesai'): echo 'selected'; endif; ?>>Selesai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label for="choices-status-input" class="form-label">Tahun</label>
                                    <select class="form-select"
                                        id="choices-status-input" wire:model.defer="year">
                                        <option selected >-- Sila Pilih --</option>
                                        <option value="2023" <?php if($year == '2023'): echo 'selected'; endif; ?>>2023</option>
                                        <option value="2024" <?php if($year == '2024'): echo 'selected'; endif; ?>>2024</option>
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
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Tunai" checked wire:model="mode" <?php if($mode == 'Tunai'): echo 'checked'; endif; ?>>
                                <label class="form-check-label font-size-14 fw-bold" for="">Tunai</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Bank-In" wire:model="mode" <?php if($mode == 'Bank-In'): echo 'checked'; endif; ?>>
                                <label class="form-check-label font-size-14 fw-bold" for="">Bank-In</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Kospera" wire:model="mode" <?php if($mode == 'Kospera'): echo 'checked'; endif; ?>>
                                <label class="form-check-label font-size-14 fw-bold" for="">Kospera</label>
                              </div>
                             
                            </div>
                        </div>


                        <div class="mb-3">
                          <label for="" class="form-label">Muat Naik Dokumen (jika ada)</label>
                          <input type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId" wire:model.defer="document">
                          
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

    <?php $__env->stopSection(); ?>  
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/fees/submission/index.blade.php ENDPATH**/ ?>