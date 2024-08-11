<div>

    <div class="row">
        <div class="col-4">
            <div class="card card-dark">
                <div class="card-body">
                    <h4 class="card-title">MAKLUMAT KONTIGEN</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                            <label for="" class="form-label">Kumpulan</label>
                            <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="name">
                            </div>
                        </div>
                        <div class="col-6">
                                <div class="mb-3">
                            <label for="" class="form-label">Order</label>
                            <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="order">
                            </div>

                        </div>
                    </div>

                    <!-- <?php echo e($sports); ?> -->

                    <div class="mb-3">
                        <label for="" class="form-label">Sukan</label>
                        <select
                            class="form-select"
                            wire:model="sport_id"
                        >
                            <option selected>-- Sila Pilih --</option>
                            <?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Kontigen</label>
                        <select
                            class="form-select"
                            wire:model="contigent_id"
                        >
                            <option selected>-- Sila Pilih --</option>
                            <?php $__currentLoopData = $contigents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    
                    
                   
                    <!-- <div class="mb-3">
                      <label for="" class="form-label">Ahli</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="members">
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="" wire:model="vip"/>
                        <label class="form-check-label" for=""> VIP </label>
                      </div>
                     
                      
                  
                    </div> -->
                    
                   
                   
                    <button type="button" class="btn btn-info btn-block" wire:click="store">Hantar</button>
                </div>

            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SENARAI KUMPULAN MENGIKUT SUKAN</h4>
                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Sukan</th>
                                    <th scope="col">Kumpulan</th>
                                    <th scope="col">Kedudukan</th>
                                    <th scope="col">Nama Pasukan</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = @$results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr class="">
                                    <td><?php echo e(@$data->sport->name); ?></td>
                                    <td><?php echo e($data->name); ?></td>
                                    <td><?php echo e($data->order); ?></td>
                                    <td><?php echo e(@$data->contigent->code); ?></td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('<?php echo e($data->id); ?>')">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                           
                                           
                                        </ul>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <td>No data</td>
                                <?php endif; ?>
                               
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

          
        </div>

    </div>
</div>



<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/grouping.blade.php ENDPATH**/ ?>