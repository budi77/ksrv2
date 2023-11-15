<div>
    

    <?php $__env->startSection('title'); ?> Pancing <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> PANCING 2023  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">

        <div class="card">
            
            <div class="card-body">

                <div class="card-header align-items-center d-flex">
                    
                        <a class="btn btn-primary btn-sm" href="<?php echo e(route('export.pancing')); ?>"><i class="ri-file-excel-2-line mr-3"></i>Export Excel</a>

                </div>
                <br>

                
                    
                
                
                <div class="table-responsive table-card">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No KP</th>
                                <th scope="col">No Tel</th>
                                <th scope="col">Jantina</th>
                                <th scope="col">Bahagian</th>
                                <th scope="col">Ahli</th>
                                <th scope="col">Saiz</th>
                                <th scope="col">Tarikh Bayaran</th>
                                <th scope="col">Jumlah Bayaran</th>
                                <th scope="col">Resit</th>
                                <th scope="col">Tarikh Daftar</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="">
                                <td scope="row"><?php echo e($loop->iteration); ?></td>
                                
                                <td><?php echo e(@$r->nama); ?></td>
                                <td><?php echo e(@$r->no_kp); ?></td>
                                <td><?php echo e(@$r->ext2); ?></td>
                                <td><?php echo e(@$r->ext1); ?></td>
                                <td><?php echo e(@$r->department->name); ?></td>
                                <td><?php echo e(@$r->ahli); ?></td>
                                <td><?php echo e(@$r->ext1); ?></td>
                                <td><?php echo e(@$r->tarikh_bayaran); ?></td>
                                <td><?php echo e(@$r->jumlah_bayaran); ?></td>
                                
                                <td><a href="<?php echo e(url('storage/' . $r->lampiran_bayaran)); ?>" target="_blank">Lihat</a></td>

                                <td><?php echo e(@$r->created_at); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                        </tbody>
                    </table>
                </div>
                

                
            </div>
        </div>


    </div>


</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/pancing/senarai.blade.php ENDPATH**/ ?>