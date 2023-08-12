<div>
    <?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?>  <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> SENARAI BORANG PENYERTAAN <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


  <div class="row">

    <table class="table align-middle table-nowrap mb-0">
        <thead class="table-dark">
            <tr>
            <th></th>
            <th scope="col">Kategori</th>
            <th scope="col" style="width:30%; word-break: break-all;">Nama Kumpulan</th>
            <th scope="col">Bahagian/Negeri</th>
            <th scope="col">PIC</th>
            <th scope="col">Telefon</th>
            <th scope="col">Lagu</th>
            <th scope="col">Video</th>
            <th scope="col">Tarikh Daftar</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="bg-white">
        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="fw-bold">P<?php echo e(sprintf('%02d',$result['id'])); ?></td>
            <td><?php echo e($result->penyertaan); ?></td>
            <td><?php echo e($result->nama); ?></td>
            <td style="word-break:break-all; word-wrap:break-word;"><?php echo e($result->department->name); ?></td>
            <td><?php echo e($result->extra1); ?></td>
            <td><?php echo e($result->telefon); ?></td>
            <td><?php echo e($result->tajuk_lagu); ?></td>
            <td>
                <a href="<?php echo e($result->pautan); ?>" class="link-dark fs-20" target="_blank"><i class="ri-vidicon-line"></i></a>
            </td>
            
            <td><?php echo e(Carbon\Carbon::parse($result->created_at, 'Asia/Kuala_Lumpur' )->format('d-m-Y h:i:s A')); ?></td>
            <td>
                <div class="hstack gap-3 fs-15">
                    <ul class="list-inline hstack gap-2 mb-0">
                                               
                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View">
                            <a href="<?php echo e(route('pdf.patriotik', $result->id)); ?>" class="link-success" target="_blank"><i class="ri-printer-line"></i></a>
                        </li>
                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit">
                            <a href="javascript:void(0);" class="view-item-btn" wire:click="upload('<?php echo e($result->id); ?>')"><i class="ri-upload-line align-bottom text-muted"></i></a>
                        </li>
                        
                      
                    </ul>
                
                </div>
                
                </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
        </tbody>
        </table>
    
    

    
  </div>

   <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        <div wire:ignore.self class="modal fade" id="uploadModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Muatnaik Video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><?php echo e($nama); ?></p>
                        <p><?php echo e($bahagian); ?></p>
                        <p><?php echo e($lagu); ?></p>

                        <div class="mb-3">
                          <label for="" class="form-label">Link Video</label>
                          <input type="text"
                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="video">
                          
                        </div>

                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" wire:click="store_video">Save</button>
                    </div>
                </div>
            </div>
        </div>
        

    <?php $__env->startSection('script'); ?>
  
    <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var modal = new bootstrap.Modal('#uploadModal');
            document.addEventListener('close-upload-modal', () => {
                modal.hide();
            });
            document.addEventListener('show-upload-modal', () => {
                modal.show();
            });

            // var modal2 = new bootstrap.Modal('#list');
            // document.addEventListener('show-list', () => {
            //     modal2.show();
            // });
            // document.addEventListener('hide-list', () => {
            //     modal2.hide();
            // });

        });
    </script>
    <?php $__env->stopSection(); ?>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/patriotik/application.blade.php ENDPATH**/ ?>