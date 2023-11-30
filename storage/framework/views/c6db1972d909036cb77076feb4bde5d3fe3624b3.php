<div>
    <?php $__env->startSection('title'); ?> KSR ARENA <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> KSR ARENA 2023  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-4">
            <div class="card">
                
                <div class="card-body">
                    <h4 class="card-title">MAKLUMAT KUMPULAN</h4>
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="name">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Susunan</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="order">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Sukan</label>
                        <select class="form-select" wire:model="sport">
                            <option selected>--Sila Pilih--</option>
                            <option value="Bola Jaring">Bola Jaring</option>
                            <option value="Bola Tampar">Bola Tampar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pasukan</label>
                        <select class="form-select" wire:model="team_id">
                            <option selected>-- Sila Pilih -</option>
                            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?> - <?php echo e($data->sport); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                   
                    <button type="button" class="btn btn-primary" wire:click="store">Hantar</button>
                </div>

            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BOLA JARING</h4>

                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Kod Pasukan</th>
                                    <th scope="col">Nama Pasukan</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $netball; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="">
                                    <td><?php echo e($data->name); ?> <?php echo e($data->order); ?></td>
                                    <td><?php echo e(@$data->team->name); ?></td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('<?php echo e(@$data->id); ?>')">
                                                    <i class="ri-pencil-fill fs-16"></i>
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
                    <h4 class="card-title">BOLA TAMPAR</h4>

                    <div class="row">
                        <div class="col-6">

                            <div class="table-responsive table-striped">
                                <table class="table table-sm table-striped">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th scope="col">Kod Pasukan</th>
                                            <th scope="col">Nama Pasukan</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $A; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="">
                                            <td><?php echo e($data->name); ?> <?php echo e($data->order); ?></td>
                                            <td><?php echo e(@$data->team->name); ?></td>
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('<?php echo e(@$data->id); ?>')">
                                                            <i class="ri-pencil-fill fs-16"></i>
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
                        <div class="col-6">

                            <div class="table-responsive table-striped">
                                <table class="table table-sm table-striped">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th scope="col">Kod Pasukan</th>
                                            <th scope="col">Nama Pasukan</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $B; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="">
                                            <td><?php echo e($data->name); ?> <?php echo e($data->order); ?></td>
                                            <td><?php echo e(@$data->team->name); ?></td>
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('<?php echo e(@$data->id); ?>')">
                                                            <i class="ri-pencil-fill fs-16"></i>
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

                    <div class="row">
                        <div class="col-6">

                            <div class="table-responsive table-striped">
                                <table class="table table-sm table-striped">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th scope="col">Kod Pasukan</th>
                                            <th scope="col">Nama Pasukan</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $C; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="">
                                            <td><?php echo e($data->name); ?> <?php echo e($data->order); ?></td>
                                            <td><?php echo e(@$data->team->name); ?></td>
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('<?php echo e(@$data->id); ?>')">
                                                            <i class="ri-pencil-fill fs-16"></i>
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
                        <div class="col-6">

                            <div class="table-responsive table-striped">
                                <table class="table table-sm table-striped">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th scope="col">Kod Pasukan</th>
                                            <th scope="col">Nama Pasukan</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $D; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="">
                                            <td><?php echo e($data->name); ?> <?php echo e($data->order); ?></td>
                                            <td><?php echo e(@$data->team->name); ?></td>
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('<?php echo e(@$data->id); ?>')">
                                                            <i class="ri-pencil-fill fs-16"></i>
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

    </div>
</div>

<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/k-s-r-arena/groups.blade.php ENDPATH**/ ?>