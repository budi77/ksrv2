<div>
   
<div class="row">
    <div class='fw-bold h3 text-primary'> BALAPAN</div>
    <hr>


    <h4>STANDING</h4>

<div class="table-responsive">
        <table class="table table-primary table-bordered table-striped text-center">
            <thead class="">
                <tr class="bg-secondary ">
                    <th scope="col" class="bg-warning bg-gradient">#</th>
                    <th scope="col" class="bg-warning bg-gradient">Team</th>
                    <th scope="col" class="bg-warning bg-gradient">E</th>
                    <th scope="col" class="bg-warning bg-gradient">P</th>
                    <th scope="col" class="bg-warning bg-gradient">G</th>
                    <th scope="col" class="bg-warning bg-gradient">4</th>
                    <!-- <th scope="col" class="bg-warning bg-gradient">P</th> -->
                
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $standings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="">
                    <td scope="row"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->blfirst); ?></td>
                    <td><?php echo e($data->blsecond); ?></td>
                    <td><?php echo e($data->blthird); ?></td>
                    <td><?php echo e($data->blforth); ?></td>
                    <!-- <td><?php echo e($data->standingpoints); ?></td> -->
              
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </tbody>
        </table>
</div>


</div>

<div class="row">

<?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-6">
    
    <h6><?php echo e($sport->name); ?></h6>

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
                <?php echo e(@$d->rank); ?>

                
            </td>
            <td class="text-primary"><?php echo e(@$d->contigent->name); ?></td>

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

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><td>No data</td>
        <?php endif; ?>
       
    </tbody>
</table>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
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
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/balapan/games.blade.php ENDPATH**/ ?>