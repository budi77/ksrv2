<div>
    <?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?>  <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> VIDEO PENYERTAAN <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


  <div class="row">

    <table class="table align-middle table-nowrap mb-0">
        <thead class="table-dark">
            <tr>
            <th></th>
            <th scope="col">Kategori</th>
            <th scope="col" style="width:30%; word-break: break-all;">Video</th>
            
            
            
            
            
            
            
            </tr>
        </thead>
        <tbody class="bg-white">
        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="fw-bold align-top">
                P<?php echo e(sprintf('%02d',$result['id'])); ?>

            </td>
            <td class="align-top">
                
                <p><span class="fw-bold">NAMA KUMPULAN</span> : <?php echo e($result->nama); ?></p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : <?php echo e($result->department->name); ?></p>
                <p><span class="fw-bold">TAJUK LAGU</span> : <?php echo e($result->tajuk_lagu); ?></p>
            </td>
           
            <td>

                <video
                id="my-video"
                class="video-js"
                controls
                preload="auto"
                width="480"
                height="250"
                
                data-setup="{}"
              >
                <source src="<?php echo e($result->extra2); ?>" type="video/mp4" />
                
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a
                  web browser that
                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                    >supports HTML5 video</a
                  >
                </p>
              </video>




            </td>
            
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
        </tbody>
        </table>


        
        
        <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        <div wire:ignore class="modal fade" id="uploadModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Body
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        
        
       

        <?php $__env->startSection('script'); ?>
            
            
            
            
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
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/patriotik/keputusan.blade.php ENDPATH**/ ?>