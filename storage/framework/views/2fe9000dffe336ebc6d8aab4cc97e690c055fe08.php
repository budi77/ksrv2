<div>
<?php $__env->startSection('title'); ?>
    LOKER
<?php $__env->stopSection(); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?>
        Dashboard
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?>
        Loker
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

    <div class="row">
    <?php $__currentLoopData = $lockers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xxl-4 col-sm-6 project-card">
            <div class="card">
                <div class="card-body">
                    <div class="p-3 mt-n3 mx-n3 bg-<?php echo e($locker->tenant <> '' ? 'danger' : 'info'); ?> bg-gradient rounded-top">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fs-16"><a href="apps-projects-overview" class="text-body"><?php echo e($locker->gender . $locker->locker_no); ?></a></h5>
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
                                            <a class="dropdown-item" href="javascript:void(0);" wire:click="add('<?php echo e(@$locker->id); ?>')" ><i class="ri-eye-fill align-bottom me-2 text-muted"></i> Tempah</a>
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
                                <?php echo e($locker->tenant ? $locker->tenant->name : '-'); ?>

                            </div>
                        </div>
                        <div>
                            <p class="text-muted mb-1">Bahagian</p>
                            <div class="fs-16">
                                <?php echo e($locker->tenant ? $locker->tenant->bahagian->name : '-'); ?>

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
                                    <h5 class="fs-14"><?php echo e(@$locker->tenant->end); ?></h5>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

      
       

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    <!-- Modal -->
    <div wire:ignore.self class="modal fade zoomIn" id="add" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Maklumat Penyewa Loker : <?php echo e(@$locker_info->gender . @$locker_info->locker_no); ?></h5>
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
                              
                            </div>

                        </div>
                        <div class="col-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Emel</label>
                              <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="email">
                              
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Bahagian</label>
                        <select class="form-select" wire:model.defer="department_id">
                        <?php if(!empty($departments)): ?>

                            <option selected>--Pilih--</option>
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>" <?php if($department_id == $item->id): echo 'selected'; endif; ?>><?php echo e($item->name); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                            
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                              
                              <label for="" class="form-label">Tarikh Mula</label>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.date-picker','data' => ['id' => 'date','wire:model' => 'start','autocomplete' => 'off','value' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('date-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'date','wire:model' => 'start','autocomplete' => 'off','value' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
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


    <?php $__env->startSection('script'); ?>

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
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    <?php $__env->stopSection(); ?>




</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/locker/dashboard.blade.php ENDPATH**/ ?>