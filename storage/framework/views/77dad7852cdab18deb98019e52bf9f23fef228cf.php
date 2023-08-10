<div>
    <?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?>  <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> SENARAI BORANG PENYERTAAN <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


  <div class="row">

    <table class="table align-middle table-nowrap mb-0">
        <thead class="table-dark">
            <tr>
            <th></th>
            <th scope="col">Kategori</th>
            <th scope="col">Nama Kumpulan</th>
            <th scope="col">Bahagian/Negeri</th>
            <th scope="col">PIC</th>
            <th scope="col">Telefon</th>
            <th scope="col">Lagu</th>
            <th scope="col">Video</th>
            <th scope="col">Tarikh Daftar</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="bg-white">
        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="fw-bold">P<?php echo e(sprintf('%02d',$result['id'])); ?></td>
            <td><?php echo e($result->penyertaan); ?></td>
            <td><?php echo e($result->nama); ?></td>
            <td><?php echo e($result->department->name); ?></td>
            <td><?php echo e($result->extra1); ?></td>
            <td><?php echo e($result->telefon); ?></td>
            <td><?php echo e($result->tajuk_lagu); ?></td>
            <td>
                <a href="<?php echo e($result->pautan); ?>" class="link-dark fs-20" target="_blank"><i class="ri-vidicon-line"></i></a>
    
                
            </td>
            
            <td><?php echo e(Carbon\Carbon::parse($result->created_at, 'Asia/Kuala_Lumpur' )->format('d-m-Y h:i:s A')); ?></td>
            <td>
                <div class="hstack gap-3 fs-15">
                
                <a href="<?php echo e(route('pdf.patriotik', $result->id)); ?>" class="link-success" target="_blank"><i class="ri-printer-line"></i></a>
                
                </div>
                </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
        </tbody>
        </table>
    
    

    
  </div>

    <?php $__env->startSection('script'); ?>
  
    <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <?php $__env->stopSection(); ?>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/patriotik/application.blade.php ENDPATH**/ ?>