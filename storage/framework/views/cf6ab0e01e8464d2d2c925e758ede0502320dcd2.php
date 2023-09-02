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

        

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Card Tables</h4>
        
                      
                    </div><!-- end card header -->
        
                    <div class="card-body">
        
                        <div class="live-preview">
                            <div class="table-responsive table-card">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            
                                            <th scope="col">#</th>
                                            <th scope="col">No Loker</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col" style="width: 150px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $lockers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            
                                            <td><a href="#" class="fw-medium"><?php echo e($loop->iteration); ?></a></td>
                                            <td><?php echo e($locker->locker_no . $locker->gender); ?></td>
                                            <td><?php echo e($locker->gender); ?></td>
                                            <td><?php echo e($locker->status); ?></td>
                                            <td><span class="badge bg-success"><?php echo e($locker->rate); ?></span></td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-light">Details</button>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>

    </div>

</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/locker/index.blade.php ENDPATH**/ ?>