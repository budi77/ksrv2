<div>
    <?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?>  <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> Yuran Bahagian  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="text-center h3 pb-2">
        <?php echo e($department_name); ?>

    </div>

    <div class="row">
        <div class="col-xxl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body bg-soft-warning">
                    <div class="d-flex mb-3">
                        <div class="flex-grow-1">
                            <lord-icon src="https://cdn.lordicon.com/fhtaantg.json" trigger="loop"
                                colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px">
                            </lord-icon>
                        </div>
                       
                    </div>
                    <h3 class="mb-2"><span class="counter-value" data-target="<?php echo e($tot_members); ?>"><?php echo e($tot_members); ?></span></h3>
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
                    <h3 class="mb-2"><span class="counter-value" data-target="<?php echo e($tot_paid); ?>"><?php echo e($tot_paid); ?></span></h3>
                    <h6 class="text-muted mb-0">Selesai Bayar Yuran</h6>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body bg-soft-danger">
                    <div class="d-flex mb-3">
                        <div class="flex-grow-1">
                            <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop"
                                colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px">
                            </lord-icon>
                        </div>
                       
                    </div>
                    <h3 class="mb-2"><span class="counter-value" data-target="<?php echo e($tot_members - $tot_paid); ?>"><?php echo e($tot_members - $tot_paid); ?></span></h3>
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
                            <div class="card-body bg-soft-success">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1">
                                        <lord-icon src="https://cdn.lordicon.com/qhviklyi.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:55px;height:55px">
                                        </lord-icon>
                                    </div>
                                    
                                </div>
                                <h3 class="mb-2">RM<span class="counter-value" data-target="<?php echo e($tot_sum); ?>"><?php echo e($tot_sum); ?></span></h3>
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
    </div>

    

    <div class="row" id="contactList">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center border-0">
                    <h5 class="card-title mb-0 flex-grow-1">Rekod Pembayaran</h5>
                 
                </div>
                <div class="card-body border border-dashed border-end-0 border-start-0">
                    <div class="row g-2">
                        <div class="col-xl-4 col-md-6">
                            <div class="search-box">
                                <input type="text" class="form-control search" placeholder="Carian Ahli..." wire:model="search_member">
                                <i class="ri-search-line search-icon"></i>
                            </div>

                            
                        </div>

                        <div class="col-xl-4 col-md-4">
                            <select
                                class="form-select form-select"
                                name=""
                                id=""
                                wire:model="year"
                            >
                                <option selected>-- Pilih Tahun --</option>
                                <option value="2023" <?php if($year == '2023'): echo 'selected'; endif; ?>>2023</option>
                                <option value="2024" <?php if($year == '2024'): echo 'selected'; endif; ?>>2024</option>
                                <option value="2025" <?php if($year == '2025'): echo 'selected'; endif; ?>>2025</option>
                                <option value="2026" <?php if($year == '2026'): echo 'selected'; endif; ?>>2026</option>
                            </select>
                        </div>

                        <div class="col-xl-4 col-md-2 text-end">
                            <a href="<?php echo e(route('export.yuran', [$department_id, $year])); ?>" class="text-muted d-inline-block">
                                <i class="ri-printer-line fs-22"></i>
                            </a>
                        </div>

                       

                        
                        <!--end col-->
                        
                    </div>
                    <!--end row-->
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-nowrap table-striped" id="customerTable">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th  scope="col">Nama</th>
                                    
                                    <th  scope="col" class="text-center">Email</th>
                                    <th  scope="col" class="text-center">Tahun</th>
                                    <th  scope="col" class="text-center">Jumlah Bayaran</th>
                                    
                                    <th  scope="col" class="text-center">Baki</th>
                                    <th  scope="col" class="text-end"></th>
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
                                    
                                    <td class="text-center"><?php echo e($row->email); ?></td>
                                    <td class="text-center">

                                        <?php echo e($year); ?>



                                    </td>
                                   
                                    <td class="text-center">

                                        <?php echo e(@$row->payments_sum_value ?? '0'); ?>



                                    </td>
                                    
                                    <td class="text-center">
                                        
                                          <?php if(@$value - @$row->payments_sum_value == 0): ?>
                                            
                                                <span
                                                    class="badge text-bg-success text-uppercase"> <?php echo e(@$value - @$row->payments_sum_value); ?>

                                                </span>

                                            <?php elseif((@$value - @$row->payments_sum_value) > 0 and (@$value - @$row->payments_sum_value) < @$value): ?>
                                                <span
                                                    class="badge text-bg-warning text-uppercase"> <?php echo e(@$value - @$row->payments_sum_value); ?>

                                                </span>
                                            <?php else: ?>
                                                <span
                                                    class="badge text-bg-danger text-uppercase"> <?php echo e(@$value - @$row->payments_sum_value); ?>

                                                </span>
                                            
                                            <?php endif; ?>
                                    </td>
                                    
                                    <td class="d-flex justify-content-end">
                                        <ul class="list-inline hstack gap-2 mb-0 text-end">
                                            
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit">
                                                <a href="javascript:void(0);"  class="text-muted d-inline-block edit-item-btn" wire:click="edit('<?php echo e($row->id); ?>')" >
                                                    <i class="ri-money-dollar-box-fill fs-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View">
                                                <a href="javascript:void(0);" class="text-muted d-inline-block" wire:click="list('<?php echo e($row->id); ?>')" >
                                                    <i class="ri-eye-fill fs-18"></i>
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

    <div wire:ignore.self class="modal fade flip" id="edit" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-soft-info">
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

                        <div data-simplebar style="max-height: 215px;">
                            <ul class="list-group">
                            <li class="list-group-item bg-light">
                            <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                            <div class="d-flex">
                                
                                <div class="flex-shrink-0 ms-2">
                                    <h6 class="fs-14 mb-0">Baki Tunggakan Tahun Semasa</h6>
                                    
                                </div>
                            </div>
                            </div>
                            <div class="flex-shrink-0">
                            <span class="text-danger fw-bold">RM<?php echo e(@$value- $balance); ?></span>
                            </div>
                            </div>
                            </li>
                            
                           
                           
                            </ul>
                            </div>

                           

                        <div class="col-12 pt-2">

                         <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            
                            <div class="mb-3">
                                <label for="" class="form-label">Jumlah</label>
                                <input type="text"
                                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="value">
                              </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Tarikh Pembayaran</label>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.date-picker','data' => ['id' => 'date','wire:model' => 'payment_date','autocomplete' => 'off','value' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('date-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
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

                        <div class="col-12">

                         <div class="col-12">
                            <div class="mb-0">
                                <label for="" class="form-label">Cara Pembayaran</label>
                            </div> 
                           
                        </div>

                           <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="mode"
                                id=""
                                value="TUNAI"
                                wire:model="mode"
                                
                            />
                            <label class="form-check-label" for="">TUNAI</label>
                           </div>
                           <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="model"
                                id=""
                                value="KOSPERA"
                                wire:model="mode"
                            />
                            <label class="form-check-label" for="">KOSPERA</label>
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

    <div wire:ignore.self class="modal fade flip" id="list" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="modalTitleId"><?php echo e(@$member_list->name); ?>   -  [<?php echo e(@$member_list->bahagian->name); ?>]</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row pb-2">
                        <div class="col-12">
                            
                            <p class="fw-bold h6 text-muted mb-0 text-center">Rekod Pembayaran</p>
                        </div>
                    </div>

                    <?php if(isset($member_list->payments)): ?>

                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Tarikh Bayaran</th>
                                    <th scope="col">Jumlah Bayaran</th>
                                    <th scope="col">Cara Bayaran</th>
                                    <th scope="col">Bahagian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $member_list->payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="">
                                    <td scope="row"><?php echo e(@$data->year); ?></td>
                                    <td><?php echo e(Carbon\Carbon::parse(@$data->payment_date)->format('d/m/Y')); ?></td>
                                    <td><?php echo e(@$data->value); ?></td>
                                    <td><?php echo e(@$data->mode); ?></td>
                                    <td><?php echo e(@$data->department->name); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </tbody>
                        </table>
                    </div>

                    <?php endif; ?>
                    


                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    
    <?php $__env->startSection('script'); ?>

    <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var modal = new bootstrap.Modal('#edit');
            document.addEventListener('show-edit', () => {
                modal.show();
            });
            document.addEventListener('hide-edit', () => {
                modal.hide();
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
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/fees/departments/show.blade.php ENDPATH**/ ?>