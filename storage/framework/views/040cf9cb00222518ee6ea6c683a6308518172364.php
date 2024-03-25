<div wire:poll>
    
    

    <div class="card">
                                            <div class="card card-animate bg-success">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-white mb-0">JUMLAH PENDAFTARAN</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold text-white"><?php echo e($results->count()); ?></h2>
                                            
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-white bg-opacity-25 rounded-circle fs-2 material-shadow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-white"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>

                          
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped"
        >
            <thead class="table-dark">
                <tr>
                    <th scope="col">Bil</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bahagian</th>
                    <th scope="col">Timestamp</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="">
                    <td scope="row"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e(@$row->member->name); ?></td>
                    <td><?php echo e(@$row->member->bahagian->name); ?></td>
                    <td><?php echo e(@$row->created_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
    </div>
    
</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/meeting/attendance.blade.php ENDPATH**/ ?>