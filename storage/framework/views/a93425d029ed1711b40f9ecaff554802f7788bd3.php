<div>
    <?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?>  <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> Yuran  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ibu Pejabat</h4>
    
                    
                </div><!-- end card header -->
    
                <div class="card-body">
                    
    
                        <div class="table-responsive table-card">
                            <table class="table table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        
                                        <th scope="col">Id</th>
                                        <th scope="col">Bahagian</th>
                                        <th scope="col" class="text-center">Jumlah Ahli</th>
                                        <th scope="col" class="text-center"># Ahli Selesai Bayar Yuran Tahun Semasa</th>
                                        
                                        <th scope="col">Action</th>   
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        
                                        <td><a href="#" class="fw-semibold"><?php echo e($loop->iteration); ?></a></td>
                                        <td><?php echo e($row->name); ?></td>
                                        <td class="text-center"><?php echo e($row->members_count); ?></td>
                                        
                                        <td class="text-center"><span class="badge bg-success">Paid</span></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-light">Details</button>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                </tbody>
                            </table>
                        </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>

    <?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <?php $__env->stopSection(); ?>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/fees/departments.blade.php ENDPATH**/ ?>