<div>

    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tambah Bahagian</h5>
                </div>
                <div class="card-body">
                    
                    <div class="mb-3">
                      <label for="" class="form-label ">Nama Bahagian</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="name">
                      
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Singkatan</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="short">
                      
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kategori</label>
                        <select class="form-select " name="" id="" wire:model="category">
                            <option>-- Pilih --</option>
                            <option value="Ibu Pejabat" <?php echo e($category == 'Ibu Pejabat' ? 'selected' : ''); ?>>Ibu Pejabat</option>
                            <option value="Gabungan" <?php echo e($category == 'Gabungan' ? 'selected' : ''); ?>>Gabungan</option>
                            
                        </select>
                    </div>
                </div>
            </div>

            <div class="text-end mb-4">
                <button type="submit" class="btn btn-danger w-sm" wire:click="cancel">Cancel</button>
                
                <button type="submit" class="btn btn-success w-sm" wire:click="store">Create</button>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Senarai Bahagian</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Singkatan</th>
                                    <th scope="col">Kategori</th>
                                    
                                    
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    
                                    <td><a href="#" class="fw-semibold"><?php echo e($loop->iteration); ?></a></td>
                                    <td><?php echo e($row->name); ?></td>
                                    <td class="text-primary"><?php echo e($row->short); ?></td>
                                    
                                    <td><?php echo e($row->extra); ?></td>
                                    <td>
                                        <div class="hstack gap-3 fs-15">
                                            <a href="javascript:void(0);" class="link-warning" wire:click="edit('<?php echo e($row->id); ?>')"><i class="ri-settings-4-line"></i></a>
                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </tbody>
                            
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end table responsive -->
                </div>
               </div>
        </div>
    </div>

    <?php $__env->startSection('script'); ?>
    
    
    
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

    
</div>

   <?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/settings/departments.blade.php ENDPATH**/ ?>