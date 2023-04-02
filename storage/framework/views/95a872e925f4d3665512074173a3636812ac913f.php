<div>
    
    <?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?>  <?php $__env->stopSection(); ?>
    
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> <?php echo e($department_name); ?>  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row row-cols-xxl-4 row-cols-lg-4 row-cols-sm-2 row-cols-1">
        <div class="col">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="flex-grow-1">
                        <h4>4751</h4>
                        <h6 class="text-muted fs-14 mb-0">Jumlah Ahli</h6>
                    </div>
                    <div class="flex-shrink-0 avatar-sm">
                        <div class="avatar-title bg-soft-primary text-primary fs-22 rounded">
                            <i class="ri-upload-2-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="flex-grow-1">
                        <h4>3423</h4>
                        <h6 class="text-muted fs-14 mb-0">Selesai</h6>
                    </div>
                    <div class="flex-shrink-0 avatar-sm">
                        <div class="avatar-title bg-soft-info text-info fs-22 rounded">
                            <i class="ri-remote-control-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="flex-grow-1">
                        <h4>354</h4>
                        <h6 class="text-muted fs-14 mb-0">Belum</h6>
                    </div>
                    <div class="flex-shrink-0 avatar-sm">
                        <div class="avatar-title bg-soft-primary text-primary fs-22 rounded">
                            <i class="ri-flashlight-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="flex-grow-1">
                        <h4>2762</h4>
                        <h6 class="text-muted fs-14 mb-0">Jumlah Kutipan</h6>
                    </div>
                    <div class="flex-shrink-0 avatar-sm">
                        <div class="avatar-title bg-soft-info text-info fs-22 rounded">
                            <i class="ri-hand-coin-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        
        <!--end col-->
    </div>

    <div class="row" id="contactList">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center border-0">
                    <h5 class="card-title mb-0 flex-grow-1">Rekod Pembayaran</h5>
                    <div class="flex-shrink-0">
                        <div class="flax-shrink-0 hstack gap-2">
                            <button class="btn btn-primary">Today's Orders</button>
                            <button class="btn btn-soft-info">Past Orders</button>
                        </div>
                    </div>
                </div>
                <div class="card-body border border-dashed border-end-0 border-start-0">
                    <div class="row g-2">
                        <div class="col-xl-4 col-md-6">
                            <div class="search-box">
                                <input type="text" class="form-control search" placeholder="Search to orders...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xl-3 col-md-6">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="ri-calendar-2-line"></i></span>
                                <input type="text" class="form-control" data-provider="flatpickr"
                                    data-date-format="d M, Y" data-range-date="true" placeholder="Select date"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xl-2 col-md-4">
                            <select class="form-control" data-choices data-choices-search-false
                                name="choices-single-default" id="choices-single-default">
                                <option value="">Select Type</option>
                                <option value="Buy">Sell</option>
                                <option value="Sell">Buy</option>
                            </select>
                        </div>
                        <!--end col-->
                        <div class="col-xl-2 col-md-4">
                            <select class="form-control" data-choices data-choices-search-false
                                name="choices-single-default2" id="choices-single-default2">
                                <option value="">Select Status</option>
                                <option value="Successful">Successful</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </div>
                        <!--end col-->
                        <div class="col-xl-1 col-md-4">
                            <button class="btn btn-primary w-100">Filters</button>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-nowrap" id="customerTable">
                            <thead class="table-light text-muted">
                                <tr>
                                    <th scope="col">#</th>
                                    <th  scope="col">Nama</th>
                                    <th  scope="col">No KP</th>
                                    <th  scope="col">Email</th>
                                    <th  scope="col">Rekod Terkini</th>
                                    
                                    
                                    <th  scope="col">Status</th>
                                </tr>
                            </thead>
                            <!--end thead-->
                            <tbody class="list form-check-all">
                                <?php $__empty_1 = true; $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="order_date">
                                        <?php echo e($loop->iteration); ?>

                                    </td>
                                    
                                    <td class="name">
                                        <?php echo e($row->name); ?>

                                    </td>
                                    <td class="type">
                                        <?php echo e($row->ic_no); ?>

                                    </td>
                                    <td class="quantity_value"><?php echo e($row->email); ?></td>
                                   
                                    <td class="price">

                                        
                                        <?php if(@$row->latestPayment->year <> ''): ?>
                                            <?php if(@$row->latestPayment->year == $year): ?>
                                            <span
                                                class="badge text-bg-success text-uppercase"> <?php echo e(@$row->latestPayment->year); ?>

                                            </span>

                                            <?php else: ?>
                                            <span
                                            class="badge text-bg-warning text-uppercase"> <?php echo e(@$row->latestPayment->year); ?>

                                            </span>
                                            <?php endif; ?>
                                        <?php endif; ?>


                                    </td>
                                    <td class="status">
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View">
                                                <a href="javascript:void(0);" class="text-primary d-inline-block" >
                                                    <i class="ri-eye-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit">
                                                <a href="javascript:void(0);"  class="text-success d-inline-block edit-item-btn" wire:click="edit('<?php echo e($row->id); ?>')" >
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                        
                                       
                                    </td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ orders We did not find any orders
                                            for you search.</p>
                                    </div>
                                </div>

                                <?php endif; ?>

                                <!--end tr-->
                                
                                <!--end tr-->
                            </tbody>
                        </table>
                        <!--end table-->
                        
                    </div>
                    
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>

    <div wire:ignore.self class="modal fadeInUp" id="edit" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Maklumat Pembayaran Tahun <?php echo e($year); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row mt-1">
                        <div class="col-lg-12 col-sm-12">
                            <div class="p-2 border border-dashed rounded">
                                <div class="d-flex align-items-center">
                                    
                                    <div class="flex-grow-1">
                                        <p class="fw-bold font-size-15 mb-0 text-center"><?php echo e(@$member->name); ?></p>
                                        <p class="fw-bold text-muted mb-0 text-center"><?php echo e(@$member->bahagian->name); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                       
                    </div>

                    <div class="row">
                      
                        
                    </div>

                    

                    <div class="row pt-2">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Jumlah</label>
                                <input type="text"
                                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="value">
                                
                              </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Tarikh Pembayaran</label>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.date-picker','data' => ['id' => 'date','wire:model' => 'payment_date','autocomplete' => 'off','value' => '']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('date-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'date','wire:model' => 'payment_date','autocomplete' => 'off','value' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                
                            </div> 
                           
                        </div>

                    </div>

                    <div class="row">
                        
                        <div class="col-12">
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
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store">Save</button>
                </div>
            </div>
        </div>
    </div>


    
    <?php $__env->startSection('script'); ?>
    

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var modal = new bootstrap.Modal('#edit');
            document.addEventListener('show-edit', () => {
                modal.show();
            });
            document.addEventListener('hide-edit', () => {
                modal.hide();
            });

           
        });
    </script>

    <?php $__env->stopSection(); ?>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/fees/departments/show.blade.php ENDPATH**/ ?>