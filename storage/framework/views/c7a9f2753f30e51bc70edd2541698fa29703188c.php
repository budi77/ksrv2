<div>

    <div class="row">
        <div class="col-4">
            <div class="card card-light">
                
                <div class="card-body">
                    <h4 class="card-title text-dark">MAKLUMAT ACARA SUKAN</h4>
                    <div class="mb-3">
                      <label for="" class="form-label text-dark">Nama</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="name">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label text-dark">Venue</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="venue">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label text-dark">Icon</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="icon">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label text-dark">PIC 1</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="pic1">
                    </div>
                    
                   
                   
                    <button type="button" class="btn btn-primary" wire:click="store">Hantar</button>
                </div>

            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SUKAN</h4>
                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">Nama Sukan</th>
                                    <th scope="col">Venue</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">PIC 1</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = @$results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr class="">
                                    <td><?php echo e($data->name); ?></td>
                                    <td><?php echo e(@$data->venue); ?></td>
                                    <td><?php echo e(@$data->icon); ?></td>
                                    <td><?php echo e(@$data->pic1); ?></td>
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


<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/sports.blade.php ENDPATH**/ ?>