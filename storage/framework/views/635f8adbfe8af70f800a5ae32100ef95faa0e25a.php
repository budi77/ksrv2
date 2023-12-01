<div wire:poll.visible>
    
    <div class="container-fluid pt-4">
        <div class="card">

            <div class="card-body">
                <div class="text-center">
                    <div class="mx-auto avatar-md mb-3">
                                    <img src="https://ksr.sprm.gov.my/assets/images/KSR.png" alt="" class="img-fluid rounded-circle">
                    </div>
                        <h2 class=" mb-1">KSR ARENA 2023</h2>
                        
                        <p class=" mb-0 text-muted">TAMAN PANCARONA, PRESINT 18, PUTRAJAYA</p>
                </div>

                <hr>
                    <div class='fw-bold h3 text-center'> BOLA JARING</div>


                <div class="text-center">KEDUDUKAN KUMPULAN</div>

                <div class="table-fluid">
                <table class="table table-bordered table-striped text-center table-sm">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Team</th>
                            <th scope="col">W</th>
                            <th scope="col">D</th>
                            <th scope="col">L</th>
                            <th scope="col">GF</th>
                            <th scope="col">GA</th>
                            <th scope="col">GD</th>
                            <th scope="col">P</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $standings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="">
                            <td scope="row"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($data->name); ?></td>
                            <td><?php echo e($data->won); ?></td>
                            <td><?php echo e($data->tied); ?></td>
                            <td><?php echo e($data->lost); ?></td>
                            <td><?php echo e($data->goal); ?></td>
                            <td><?php echo e($data->against); ?></td>
                            <td><?php echo e($data->goal - $data->against); ?> </td>
                            <td><?php echo e($data->points); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                </table>

<hr>

                <div class="text-center">KEPUTUSAN PERLAWANAN</div>

                <div class="table-fluid">
                    <table class="table table-bordered table-striped text-center table-sm">
                        <thead class="bg-info">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Team</th>
                                <th scope="col">Keputusan</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="">
                                <td scope="row"><?php echo e($data->match); ?></td>
                                <td><?php echo e($data->team1->name); ?> vs <?php echo e($data->team2->name); ?></td>
                                <td><?php echo e($data->result1); ?> : <?php echo e($data->result2); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </tbody>
                    </table>
                </div>

                
                <div class="text-center">SEPARUH AKHIR</div>

                <div class="table-fluid">
                    <table class="table table-bordered table-striped text-center table-sm">
                        <thead class="bg-info">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Team</th>
                                <th scope="col">Keputusan</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $semis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="">
                                <td scope="row"><?php echo e($data->match); ?></td>
                                <td><?php echo e($data->team1->name); ?> vs <?php echo e($data->team2->name); ?></td>
                                <td><?php echo e($data->result1); ?> : <?php echo e($data->result2); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </tbody>
                    </table>
                </div>

                <div class="text-center">AKHIR</div>

                <div class="table-fluid">
                    <table class="table table-bordered table-striped text-center table-sm">
                        <thead class="bg-info">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Team</th>
                                <th scope="col">Keputusan</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $final; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="">
                                <td scope="row"><?php echo e($data->match); ?></td>
                                <td><?php echo e($data->team1->name); ?> vs <?php echo e($data->team2->name); ?></td>
                                <td><?php echo e($data->result1); ?> : <?php echo e($data->result2); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/k-s-r-arena/netball/index.blade.php ENDPATH**/ ?>