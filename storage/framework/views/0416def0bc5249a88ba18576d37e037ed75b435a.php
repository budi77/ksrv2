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
                    <td><?php echo e($record->year); ?></td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>No data</p>
                    
               

                <?php endif; ?>
                <?php endif; ?>
               
            </tbody>
        </table>
    </div>
    
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/settings/edit/payments.blade.php ENDPATH**/ ?>