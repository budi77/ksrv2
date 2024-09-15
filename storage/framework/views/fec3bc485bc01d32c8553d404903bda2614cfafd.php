<div>
    
<?php $__env->startSection('title'); ?>
    STANDING
<?php $__env->stopSection(); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?>
        Dashboard
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?>
        Standing
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="card">
        <div class="card-body">

        <div class="row">

        <h4>STANDING</h4>

        <div class="table-responsive">
                <table class="table table-warning table-bordered table-striped text-center">
                    <thead class="">
                        <tr class="bg-secondary ">
                            <th scope="col" class="bg-warning bg-gradient">#</th>
                            <th scope="col" class="bg-warning bg-gradient">PASUKAN</th>
                            <th scope="col" class="bg-warning bg-gradient">EMAS</th>
                            <th scope="col" class="bg-warning bg-gradient">PERAK</th>
                            <th scope="col" class="bg-warning bg-gradient">GANGSA</th>
                            <th scope="col" class="bg-warning bg-gradient">KE-EMPAT</th>
                            <th scope="col" class="bg-warning bg-gradient">MATA</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $standings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="">
                            <td scope="row"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($data->name); ?></td>
                            <td><?php echo e($data->first); ?></td>
                            <td><?php echo e($data->second); ?></td>
                            <td><?php echo e($data->third); ?></td>
                            <td><?php echo e($data->forth); ?></td>
                            <td><?php echo e($data->standingpoints); ?></td>
                      
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                </table>
            </div>


        



        </div>

        <hr>
        <div class="row">

        <div class="col-4">

        <div class="card bg-light">
            <div class="card-body">
                <!-- <h4 class="card-title">Title</h4> -->

                <div class="mb-3">
                        <label for="" class="form-label text-dark">Sukan</label>
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
                        <label for="" class="form-label text-dark">Rank</label>
                        <select
                            class="form-select"
                            wire:model="rank"
                        >
                            <option selected>-- Sila Pilih --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                        </select>
                </div>

                <div class="mb-3">
                        <label for="" class="form-label text-dark">Kontigen</label>
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


                <button type="button" class="btn btn-primary" wire:click="store">Hantar</button>



                
            </div>
        </div>
        

        </div>
        <div class="col-8">

        <div class="row">

        <?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6">
            
            <h5><?php echo e($sport->name); ?></h5>

            <table
            class="table table-sm table-bordered table-striped"
        >
            <thead>
                <tr class="table-dark text-center">
                    
                    <th scope="col" width="4%">Rank</th>
                    <th scope="col">Kontigen</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if($d->sport->name == $sport->name): ?>
                <tr class="text-center">
                    
                    <td>
                        <a href="javascript:void(0);" wire:click="update_rank('<?php echo e($d->id); ?>')"><?php echo e(@$d->rank); ?></a>
                        
                    
                    </td>
                    <td class="text-primary fw-bold"><?php echo e(@$d->contigent->name); ?></td>
                    
                    <td width="25%">
                    <ul class="list-inline hstack gap-1 mb-0 text-end">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Update Rank">
                                                <a href="javascript:void(0);" class="text-success d-inline-block" wire:click="update_rank('<?php echo e($d->id); ?>')">
                                                    <i class="ri-numbers-line fs-18"></i>
                                                </a>
                                                
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('<?php echo e($d->id); ?>')">
                                                    <i class="ri-edit-box-line fs-18"></i>
                                                </a>
                                                
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete">
                                               
                                                <a href="javascript:void(0);" class="text-danger d-inline-block" wire:click="delete('<?php echo e($d->id); ?>')">
                                                    <i class="ri-delete-bin-line fs-18"></i>
                                                </a>
                                            </li>
                                            
                                           
                                           
                                        </ul>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><tr>No data</tr>
                <?php endif; ?>
               
            </tbody>
        </table>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
        </div>

       


        </div>

        </div>
           
        </div>
    </div>
    
</div>


<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div wire:ignore.self
    class="modal fade"
    id="update"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    
    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    KEMASKINI 
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">

            <h6>SUKAN : <?php echo e(@$name); ?></h6>
            <h6>RANK : <?php echo e(@$rank); ?></h6>

              <div class="mb-3">
                        <label for="" class="form-label text-dark">KONTIGEN :</label>
                        <select
                            class="form-select"
                            wire:model="contigent_id"
                        >
                            <option selected>-- Sila Pilih --</option>
                            <?php if(isset($teams)): ?>
                            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                </div>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Close
                </button>
                <button type="button" class="btn btn-primary" wire:click="store">Save</button>
            </div>
        </div>
    </div>
</div>




<?php $__env->startSection('script'); ?>
       

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                var modal = new bootstrap.Modal('#update');
                document.addEventListener('close-modal', () => {
                    modal.hide();
                });
                document.addEventListener('show-modal', () => {
                    modal.show();
                });

              

            });
        </script>
    <?php $__env->stopSection(); ?>


</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/standings.blade.php ENDPATH**/ ?>