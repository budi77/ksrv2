<div>
   
<?php $__env->startSection('title'); ?> Pengguna Sistem <?php $__env->stopSection(); ?>


<div class="d-flex align-items-center">
    <h5 class="card-title mb-0 flex-grow-1"></h5>
    <div class="flex-shrink-0">
        <button class="btn btn-primary add-btn" wire:click="showModal"><i
                class="ri-add-line align-bottom me-1"></i> Tambah</button>
        
    </div>
</div>
<br>
<!-- Table Head -->
<table class="table align-middle table-nowrap mb-0">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">E-mel</th>
            <th scope="col">Bahagian</th>
            <th scope="col">Role</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e(@$user->name); ?></td>
            <td><?php echo e(@$user->email); ?></td>
            <td><?php echo e(@$user->bahagian->name); ?></td>
            <td>
                <span class="badge text-bg-<?php echo e($user->role == 'Admin' ? 'danger' : 'warning'); ?>"><?php echo e(@$user->role); ?></span>
                
            </td>
            
            <td class="text-end">
                <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit">
                        <a href="javascript:void(0);"  class="text-muted d-inline-block edit-item-btn" wire:click="edit('<?php echo e($user->id); ?>')">
                            <i class=" ri-edit-2-line fs-16"></i>
                        </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View">
                        <a href="javascript:void(0);" class="text-muted d-inline-block"  wire:click="editpwd('<?php echo e($user->id); ?>')">
                            <i class="ri-key-fill fs-16"></i>
                        </a>
                    </li>
                   
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Remove">
                        <a class="text-muted d-inline-block remove-item-btn" data-bs-toggle="modal" href="javascript:void(0);" wire:click="delete('<?php echo e($user->id); ?>')">
                            <i class="ri-delete-bin-5-fill fs-16"></i>
                        </a>
                    </li>
                </ul>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
    </tbody>
</table>



<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div wire:ignore.self class="modal zoomIn" id="showModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-soft-info">
                <h5 class="modal-title" id="modalTitleId">Tambah Pengguna Sistem</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                  <label for="" class="form-label">Nama</label>
                  <input type="text"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="name">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Email</label>
                  <input type="email"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Bahagian</label>
                    <select class="form-select"  wire:model.defer="department">
                        <option selected>-- Bahagian --</option>
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </select>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Password</label>
                  <input type="text"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="pwd">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Role</label>
                    <select class="form-select" name="" id="" wire:model="role">
                        <option selected>-- Role --</option>
                        <option value="User">Pengguna</option>
                        <option value="Admin">Pentadbir</option>
                        
                    </select>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="store">Save</button>
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal zoomIn" id="showModal2" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-soft-info">
                <h5 class="modal-title" id="modalTitleId">Tambah Pengguna Sistem</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                  <label for="" class="form-label">Nama</label>
                  <input type="text"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="name">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Email</label>
                  <input type="email"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Bahagian</label>
                    <select class="form-select"  wire:model.defer="department">
                        <option selected>-- Bahagian --</option>
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </select>
                </div>

                

                <div class="mb-3">
                    <label for="" class="form-label">Role</label>
                    <select class="form-select" name="" id="" wire:model="role">
                        <option selected>-- Role --</option>
                        <option value="User">Pengguna</option>
                        <option value="Admin">Pentadbir</option>
                        
                    </select>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" wire:click="update">Update</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div wire:ignore.self class="modal flip" id="modalPwd" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId"><?php echo e($name); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

               <div class="mb-0">
                  <label for="" class="form-label">Kemaskini Password</label>
                  <input type="text"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="pwd">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" wire:click="updatepwd">Update</button>
            </div>
        </div>
    </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

</script>



<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        var modal = new bootstrap.Modal('#showModal');
        document.addEventListener('close-add-modal', () => {
            modal.hide();
        });
        document.addEventListener('show-modal', () => {
            modal.show();
        });

        var modal2 = new bootstrap.Modal('#showModal2');
        document.addEventListener('show-edit', () => {
            modal2.show();
        });
        document.addEventListener('hide-edit', () => {
            modal2.hide();
        });

        var modal3 = new bootstrap.Modal('#modalPwd');
        document.addEventListener('show-pwd', () => {
            modal3.show();
        });
        document.addEventListener('hide-pwd', () => {
            modal3.hide();
        });

    });
</script>
<?php $__env->stopSection(); ?>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/settings/users.blade.php ENDPATH**/ ?>