<div>
    <?php $__env->startSection('title'); ?> KSR ARENA <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> KSR ARENA 2023  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">

    <div class='fw-bold h3'><i class=" ri-basketball-line"></i> BOLA JARING</div>

    <div class="card">
        <div class="card-header fw-bold">
            KEDUDUKAN PASUKAN
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="bg-success">
                        <tr>
                            <th scope="col">Kedudukan</th>
                            <th scope="col">Nama Pasukan</th>
                            <th scope="col">Menang</th>
                            <th scope="col">Seri</th>
                            <th scope="col">Kalah</th>
                            <th scope="col">Gol</th>
                            <th scope="col">Bolos</th>
                            <th scope="col">GD</th>
                            
                            <th scope="col">Mata</th>
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
                            <td><?php echo e($data->goaldifference); ?> </td>
                            <td><?php echo e($data->points); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                </table>
            </div>
            
        </div>
        
    </div>

          <div class="col-4">
            <div class="card bg-info">
            <div class="card-header bg-info">
                            <h6 class="card-title mb-0 ">MAKLUMAT PERLAWANAN</h6>
            </div>
                <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">NO PERLAWANAN</label>
                        <input type="text"
                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="match">
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                            <label for="" class="form-label">PERINGKAT</label>
                            <select class="form-select" wire:model="ext1">
                                <option selected>--Sila Pilih--</option>
                                <option value="Kumpulan">Kumpulan</option>
                                <option value="Suku Akhir">Suku Akhir</option>
                                <option value="Separuh Akhir">Separuh Akhir</option>
                                <option value="Akhir">Akhir</option>
                            </select>
                        </div>
                    </div>

                    
                </div>

                  <div class="row">

                    <div class="col-md-6">
                      
                    <div class="mb-3">
                        <label for="" class="form-label">PASUKAN 1</label>
                        <select class="form-select" wire:model="team1">
                            <option selected>-- Sila Pilih -</option>
                            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-6">
                     <div class="mb-3">
                        <label for="" class="form-label">PASUKAN 2</label>
                        <select class="form-select" wire:model="team2">
                            <option selected>-- Sila Pilih -</option>
                            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    </div>

                    
                </div>

                 <div class="row">

                    <div class="col-md-6">
                      
                    <div class="mb-3">
                      <label for="" class="form-label">SKOR PASUKAN 1</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="result1">
                    </div>
                    </div>
                    <div class="col-md-6">
                    
                    <div class="mb-3">
                      <label for="" class="form-label">SKOR PASUKAN 2</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="result2">
                    </div>
                    </div>

                    
                </div>
                    
                    
                    
                
                   
                   
                   
                    <button type="button" class="btn btn-primary" wire:click="store">Hantar</button>
                </div>


            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">PERINGKAT KUMPULAN</h4>

                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Peringkat</th>
                                    <th scope="col">Pasukan 1</th>
                                    <th scope="col">Skor 1</th>
                                    <th scope="col">Skor 2</th>
                                    <th scope="col">Pasukan 2</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="">
                                    <td><?php echo e($data->match); ?> </td>
                                    <td><?php echo e($data->ext1); ?> </td>
                                    <td><?php echo e(@$data->team1->name); ?></td>
                                    <td><?php echo e(@$data->result1); ?></td>
                                    <td><?php echo e(@$data->result2); ?></td>
                                    <td><?php echo e(@$data->team2->name); ?></td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-danger d-inline-block" wire:click="edit('<?php echo e(@$data->id); ?>')">
                                                    <i class="ri-edit-box-line fs-18"></i>
                                                </a>
                                            </li>
                                           
                                           
                                        </ul>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SEPARUH AKHIR</h4>

                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Peringkat</th>
                                    <th scope="col">Pasukan 1</th>
                                    <th scope="col">Skor 1</th>
                                    <th scope="col">Skor 2</th>
                                    <th scope="col">Pasukan 2</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $semis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="">
                                    <td><?php echo e($data->match); ?> </td>
                                    <td><?php echo e($data->ext1); ?> </td>
                                    <td><?php echo e(@$data->team1->name); ?></td>
                                    <td><?php echo e(@$data->result1); ?></td>
                                    <td><?php echo e(@$data->result2); ?></td>
                                    <td><?php echo e(@$data->team2->name); ?></td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-danger d-inline-block" wire:click="edit('<?php echo e(@$data->id); ?>')">
                                                    <i class="ri-edit-box-line fs-18"></i>
                                                </a>
                                            </li>
                                           
                                           
                                        </ul>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">AKHIR</h4>

                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Peringkat</th>
                                    <th scope="col">Pasukan 1</th>
                                    <th scope="col">Skor 1</th>
                                    <th scope="col">Skor 2</th>
                                    <th scope="col">Pasukan 2</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $final; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="">
                                    <td><?php echo e($data->match); ?> </td>
                                    <td><?php echo e($data->ext1); ?> </td>
                                    <td><?php echo e(@$data->team1->name); ?></td>
                                    <td><?php echo e(@$data->result1); ?></td>
                                    <td><?php echo e(@$data->result2); ?></td>
                                    <td><?php echo e(@$data->team2->name); ?></td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-danger d-inline-block" wire:click="edit('<?php echo e(@$data->id); ?>')">
                                                    <i class="ri-edit-box-line fs-18"></i>
                                                </a>
                                            </li>
                                           
                                           
                                        </ul>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

          
        </div>

    </div>
</div>


<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/k-s-r-arena/netball/games.blade.php ENDPATH**/ ?>