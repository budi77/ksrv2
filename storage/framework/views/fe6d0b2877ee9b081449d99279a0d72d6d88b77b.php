<div>
    <div class="container">

        <div class='fw-bold h3 ff-secondary text-center pt-2 cfs-22'> BALAPAN</div>
        <div class='fw-bold h ff-secondary text-center '> <?php echo e(@$sport_id->venue); ?></div>
        <hr>

<div class="row">


<div class="table-responsive">
        <table class="table table-primary table-striped text-center">
            <thead class="">
                <tr class="bg-secondary ">
                    <th scope="col" class="bg-warning bg-gradient">#</th>
                    <th scope="col" class="bg-warning bg-gradient text-start">KONTIGEN</th>
                    <th scope="col" class="bg-warning bg-gradient">E</th>
                    <th scope="col" class="bg-warning bg-gradient">P</th>
                    <th scope="col" class="bg-warning bg-gradient">G</th>
                    <th scope="col" class="bg-warning bg-gradient">4</th>
                    <!-- <th scope="col" class="bg-warning bg-gradient">P</th> -->
                
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $standings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="">
                    <td scope="row"><?php echo e($loop->iteration); ?></td>
                    <td class="text-start"><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->blfirst); ?></td>
                    <td><?php echo e($data->blsecond); ?></td>
                    <td><?php echo e($data->blthird); ?></td>
                    <td><?php echo e($data->blforth); ?></td>
                    <!-- <td><?php echo e($data->standingpoints); ?></td> -->
              
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </tbody>
        </table>
</div>

<hr>

<?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-6">
    
    <div class="text-center h6"><?php echo e($sport->name); ?></div>

    <table
    class="table table-sm  table-striped table-success"
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
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/portal/bl.blade.php ENDPATH**/ ?>