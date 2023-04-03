<div>
   
<?php $__env->startSection('title'); ?> Pengguna Sistem <?php $__env->stopSection(); ?>


<div class="d-flex align-items-center">
    <h5 class="card-title mb-0 flex-grow-1"></h5>
    <div class="flex-shrink-0">
        <button class="btn btn-primary add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i
                class="ri-add-line align-bottom me-1"></i> Tambah</button>
        
    </div>
</div>
<br>
<!-- Table Head -->
<table class="table align-middle table-nowrap mb-0">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">E-mel</th>
            <th scope="col">Bahagian</th>
            <th scope="col">Process</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->role); ?></td>
            
            <td><a href="javascript:void(0);" class="link-success">Confirmed</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
    </tbody>
</table>


<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/settings/users.blade.php ENDPATH**/ ?>