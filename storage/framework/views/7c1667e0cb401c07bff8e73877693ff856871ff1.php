<div>
    

    <div class="row g-3">
        <div class="col-xxl-6 col-sm-6">
            <div class="search-box">
                <input type="text" class="form-control search bg-light border-light"
                    placeholder="Cari ahli" wire:model="search">
                <i class="ri-search-line search-icon"></i>
            </div>
        </div>
    </div>


    <div class="table-responsive pt-3">
        <table class="table table-sm ">
            <thead class='bg-dark text-white'>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bahagian</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="">
                    <td scope="row"><?php echo e($loop->iteration); ?></td>
                    <td>
                        <a href="javascript:void(0)" wire:click="show('<?php echo e($result->id); ?>')" >
                            <?php echo e($result->name); ?>

                        </a>
                       
                    </td>
                    <td><?php echo e($result->bahagian->name); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
    </div>
    <?php echo e($results->links()); ?>


    
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/settings/edit/members.blade.php ENDPATH**/ ?>