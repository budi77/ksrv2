<div>
    <div class="container">
    <div class="row">

<h4>STANDING</h4>

<div class="table-responsive">
        <table class="table table-warning table-bordered table-striped text-center">
            <thead class="">
                <tr class="bg-secondary ">
                    <th scope="col" class="bg-warning bg-gradient">#</th>
                    <th scope="col" class="bg-warning bg-gradient">Team</th>
                    <th scope="col" class="bg-warning bg-gradient">1</th>
                    <th scope="col" class="bg-warning bg-gradient">2</th>
                    <th scope="col" class="bg-warning bg-gradient">3</th>
                    <th scope="col" class="bg-warning bg-gradient">4</th>
                    <th scope="col" class="bg-warning bg-gradient">P</th>
                
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $standings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="">
                    <td scope="row"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->first); ?></td>
                    <td><?php echo e($data->second); ?></td>
                    <td><?php echo e($data->third); ?></td>
                    <td><?php echo e($data->forth); ?></td>
                    <td><?php echo e($data->standingpoints); ?></td>
              
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </tbody>
        </table>
    </div>






</div>







    <div class="row">

<?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-6">
    
    <h6><?php echo e($sport->name); ?></h6>

    <table
    class="table table-sm table-bordered table-striped"
>
    <thead>
        <tr class="table-dark text-center">
            <!-- <th scope="col">#</th> -->
            <!-- <th scope="col">Sukan</th> -->
            <th scope="col" width="4%">Rank</th>
            <th scope="col">Kontigen</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php if($d->sport->name == $sport->name): ?>
        <tr class="text-center">
            <!-- <td><?php echo e($loop->iteration); ?></td> -->
            <!-- <td><?php echo e(@$d->sport->name); ?></td> -->
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




</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/portal/rangking.blade.php ENDPATH**/ ?>