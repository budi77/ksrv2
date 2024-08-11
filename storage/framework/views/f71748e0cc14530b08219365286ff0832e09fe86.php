<div>

    <div class="row">
        <div class="col-4">
            <div class="card">
                
                <div class="card-body">
                    <h4 class="card-title">MAKLUMAT KONTIGEN</h4>
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="name">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Kod</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="code">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Ahli</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="members">
                    </div>
                    <div class="mb-3">
                      <!-- <label for="" class="form-label">VIP</label> -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="" wire:model="vip"/>
                        <label class="form-check-label" for=""> VIP </label>
                      </div>
                     
                      
                  
                    </div>
                    
                   
                   
                    <button type="button" class="btn btn-info" wire:click="store">Hantar</button>
                </div>

            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SENARAI KONTIGEN</h4>
                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kod</th>
                                    <th scope="col">Ahli</th>
                                    <th scope="col">VIP</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = @$results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr class="">
                                    <td><?php echo e($data->name); ?></td>
                                    <td><?php echo e(@$data->code); ?></td>
                                    <td><?php echo e(@$data->ext1); ?></td>
                                    <td><?php echo e(@$data->vip); ?></td>
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


<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/contigent.blade.php ENDPATH**/ ?>