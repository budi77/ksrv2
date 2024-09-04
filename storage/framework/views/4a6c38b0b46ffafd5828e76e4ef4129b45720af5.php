<div>
   
<div class="row">
    <div class='fw-bold h3 text-primary'> BOWLING</div>
    <hr>
    <h4><i class="las la-table"></i> KEDUDUKAN PASUKAN</h4>

    <div
        class="table-responsive"
    >
        <table
            class="table table-bordered"
        >
            <thead>
                <tr class="bg-info">
                    <th scope="col" width="5%">RANK</th>
                    <th scope="col">TEAM</th>
                    <th scope="col">POINTS</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="">
                    <td scope="row"><?php echo e($r->rank); ?></td>
                    <td><?php echo e($r->contigent->name); ?></td>
                    <td><?php echo e($r->points); ?></td>
                    <td></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
    </div>
    


</div>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/bowling/games.blade.php ENDPATH**/ ?>