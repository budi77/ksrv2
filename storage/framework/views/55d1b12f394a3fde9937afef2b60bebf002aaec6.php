<div>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?>
    Resit
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?>
    Resit
    <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="orderList">
                <div class="card-header border-0">
                    <div class="row align-items-center gy-3">
                        <div class="col-sm">
                            <h5 class="card-title mb-0">RESIT PEMBAYARAN</h5>
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex gap-1 flex-wrap">
                                <a href="<?php echo e(route('resit.cipta')); ?>" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Jana Resit</a>
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-body border border-dashed border-end-0 border-start-0 ">

                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-striped"
                        >
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">No Resit</th>
                                    <th scope="col">Tarikh Resit</th>
                                    <th scope="col">Bahagian</th>
                                    <th scope="col">Tarikh Mula</th>
                                    <th scope="col">Tarikh Akhir</th>
                                    <th scope="col" ></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="">
                                    <td scope="row"><?php echo e($loop->iteration); ?></td>
                                    <td scope="row"><?php echo e($data->receipt_no); ?></td>
                                    <td scope="row"><?php echo e($data->receipt_date); ?></td>
                                    <td><?php echo e($data->department->name); ?></td>
                                    <td><?php echo e($data->date_start); ?></td>
                                    <td ><?php echo e($data->date_end); ?></td>
                                    <td class="text-end">
                                        <a href="<?php echo e(route('resit.cetak', $data->id)); ?>" class="text-primary d-inline-block">
                                            <i class="ri-printer-line fs-18"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </tbody>
                        </table>
                    </div>
                    
                   
                    
                    <!-- Modal -->
                  
                    <!--end modal -->
                </div>
            </div>
    
        </div>
        <!--end col-->
    </div>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/receipt/index.blade.php ENDPATH**/ ?>