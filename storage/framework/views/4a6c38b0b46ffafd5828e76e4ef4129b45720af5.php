<div>
   
<div class="row">
    <div class='fw-bold h3 text-primary'> BOWLING</div>
    <hr>
    <h6><i class="las la-table"></i> KEPUTUSAN</h6>

    <div class="row">
        <div class="col-4">

       <div class="card card-light">
            <!-- <div class="card-header bg-light">
                <h6 class="card-title mb-0 ">KEPUTUSAN</h6>
            </div> -->
        <div class="card-body">

        <div class="mb-3">
            <label for="" class="form-label text-dark">Rank</label>
            <input
                type="text"
                class="form-control"
                name=""
                id=""
                aria-describedby="helpId"
                placeholder=""
                wire:model="rank"
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label text-dark">Kontijen</label>
                <select
                        class="form-select"
                        name=""
                        id=""
                        wire:model="contigent_id"
                    >
                        <option selected>-- Pilih --</option>
                        <?php $__currentLoopData = $contigents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label text-dark">Points</label>
            <input
                type="text"
                class="form-control"
                name=""
                id=""
                aria-describedby="helpId"
                placeholder=""
                wire:model="points"
            />
        </div>

        
        
            
        </div>
       </div>
       
       <button type="button" class="btn btn-primary" wire:click="store">Hantar</button>

            
        </div>
        <div class="col-8">

        <div
        class="table-responsive"
    >
        <table
            class="table table-bordered table-sm table-striped p-2"
        >
            <thead>
                <tr class="bg-dark text-white">
                    <th scope="col" width="5%">RANK</th>
                    <th scope="col">TEAM</th>
                    <th scope="col" class="text-center">POINTS</th>
                    <th scope="col" width="5%"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="">
                    <td scope="row" class="text-center"><?php echo e(@$r->rank); ?></td>
                    <td><?php echo e(@$r->contigent->name); ?></td>
                    <td class="text-center"><?php echo e(@$r->points); ?></td>
                    <td class="text-center">
                    <ul class="list-inline hstack gap-1 mb-0 text-end">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Update Rank">
                        <a href="javascript:void(0);" class="text-secondary d-inline-block" wire:click="edit('<?php echo e($r->id); ?>')">
                            <i class="ri-edit-box-line fs-18"></i>
                        </a>
                                                
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Update Rank">
                        <a href="javascript:void(0);" class="text-danger d-inline-block" wire:click="delete('<?php echo e($r->id); ?>')">
                        <i class="ri-delete-bin-line fs-18"></i>
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
                
                    <label for="" class="form-label">Rank</label>
                    <input
                        type="text"
                        class="form-control"
                        name=""
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        wire:model="rank"
                    />
                </div>
                <div class="mb-3">
                        <label for="" class="form-label text-dark">KONTIJEN :</label>
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

                <div class="mb-3">
                    <label for="" class="form-label">Points</label>
                    <input
                        type="text"
                        class="form-control"
                        name=""
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        wire:model="points"
                    />
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
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/bowling/games.blade.php ENDPATH**/ ?>