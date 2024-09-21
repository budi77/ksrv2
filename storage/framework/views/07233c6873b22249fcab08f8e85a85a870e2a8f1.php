<div>
    <div class="container">

        <div class='fw-bold h3 ff-secondary text-center pt-2 cfs-22'> MENEMBAK</div>
        <div class='fw-bold h ff-secondary text-center '> <?php echo e(@$sport_id->venue); ?></div>
        <div class="text-center h5"><a href="https://maps.app.goo.gl/w5ufv6ddr3yGAX5L6"><i class="las la-map-marker-alt"></i> Google Maps</a></div>

        <hr>

<div class="row">




<?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-12>
    
    <div class="text-center h6"><?php echo e($sport->name); ?></div>

    <table
    class="table table-sm  table-striped"
>
    <thead>
        <tr class="table-dark text-center">
           
            <th scope="col" width="4%">Rank</th>
            <th scope="col">Kontigen</th>
        </tr>
    </thead>
    <tbody class="bg-white">
        <?php $__empty_1 = true; $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php if($d->sport->name == $sport->name): ?>
        <tr class="text-center">
           
            <td>
                <?php echo e(@$d->rank); ?>

                
            
            </td>
            <td class="text-primary"><?php echo e(@$d->contigent->name); ?></td>
            
            
        </tr>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><td>No data</td>
        <?php endif; ?>
       
    </tbody>
</table>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
</div>

<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/portal/mk.blade.php ENDPATH**/ ?>