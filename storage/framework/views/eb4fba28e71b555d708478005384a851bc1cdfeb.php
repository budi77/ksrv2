<div>
    

    <?php $__env->startSection('title'); ?> Angsi 2023 <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> ANGSI 2023  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">

        <div class="card">
            
            <div class="card-body">

                <div class="card-header align-items-center d-flex">
                    
    
                </div>
                
                <div class="table-responsive table-card">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tel</th>
                                <th scope="col">Emel</th>
                                <th scope="col">Bahagian</th>
                                <th scope="col">Saiz Baju</th>
                                <th scope="col">Pengangkutan</th>
                                <th scope="col">Penyakit</th>
                                <th scope="col">Jenis Sakit</th>
                                <th scope="col">Nama Waris</th>
                                <th scope="col">Tel kecemasan</th>
                                <th scope="col">Tarikh Daftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="">
                                <td scope="row"><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e(@$r->nama); ?></td>
                                <td><?php echo e(@$r->tel); ?></td>
                                <td><?php echo e(@$r->emel); ?></td>
                                <td><?php echo e(@$r->department->name); ?></td>
                                <td><?php echo e(@$r->department->saiz); ?></td>
                                <td><?php echo e(@$r->pengangkutan); ?></td>
                                <td><?php echo e(@$r->penyakit); ?></td>
                                <td><?php echo e(@$r->sakit); ?></td>
                                <td><?php echo e(@$r->waris); ?></td>
                                <td><?php echo e(@$r->kecemasan); ?></td>
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
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/angsi/permohonan.blade.php ENDPATH**/ ?>