<div>
    

    
    <h5>REKOD PEMBAYARAN :</h5>
    <div class="table-responsive pt-4">
        <table class="table table-sm table-striped">
            <thead class="bg-warning">
                <tr>
                    <th scope="col">Nama/Bahagian</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tarikh Bayaran</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($records)): ?>
                <?php $__empty_1 = true; $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="">
                    <td scope="row">
                        <div><?php echo e($record->member->name); ?></div>
                        <div class="text-muted"><?php echo e($record->member->bahagian->name); ?></div>
                    </td>
                    <td><?php echo e($record->year); ?></td>
                    <td><?php echo e($record->value); ?></td>
                    <td><?php echo e($record->payment_date); ?></td>
                    <td>
                        <ul class="list-inline hstack gap-2 mb-0">
                            
                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                    <i class="ri-pencil-fill fs-16"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Remove" data-bs-original-title="Remove">
                                <a class="text-danger d-inline-block remove-item-btn" onclick="return confirm('Are you sure?')" href="javascript:void(0)" wire:click="delete('<?php echo e($record->id); ?>')">
                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>No data</p>
                    
               

                <?php endif; ?>
                <?php endif; ?>
               
            </tbody>
        </table>
    </div>


    <?php $__env->startSection('script'); ?>
  
    <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <?php $__env->stopSection(); ?>
    
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/settings/edit/payments.blade.php ENDPATH**/ ?>