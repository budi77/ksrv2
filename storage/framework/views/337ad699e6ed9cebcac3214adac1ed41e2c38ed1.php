
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?>  <?php $__env->stopSection(); ?>



<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

   
    <div class="col-6">
            <div class="card">
                <div class="card-body p-0">
                    <div class="alert alert-primary border-0 rounded-top rounded-0 m-0 d-flex align-items-center"
                        role="alert">
                        <i data-feather="coffee" class="text-primary me-2 icon-sm"></i>
                        <div class="flex-grow-1 text-truncate fw-bold">
                            SELAMAT DATANG KE SISTEM SISPAKS
                        </div>
                        <div class="flex-shrink-0">
                            
                        </div>
                    </div>

                    <div class="row align-items-end">
                        <div class="col-sm-8">
                            <div class="p-3">
                                <p class="fs-20"><span class="fw-bold"><?php echo e(auth()->user()->name); ?></span> </p>
                                <p class="fs-16"><span class="fw-semibold"><?php echo e(auth()->user()->bahagian->name); ?></span> </p>
                                
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="px-3">
                                <img src="<?php echo e(URL::asset('assets/images/user-illustarator-1.png')); ?>"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div>
    </div>

    <div class="col-4">

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.stat', [])->html();
} elseif ($_instance->childHasBeenRendered('q0EZ8RJ')) {
    $componentId = $_instance->getRenderedChildComponentId('q0EZ8RJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('q0EZ8RJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('q0EZ8RJ');
} else {
    $response = \Livewire\Livewire::mount('dashboard.stat', []);
    $html = $response->html();
    $_instance->logRenderedChild('q0EZ8RJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
    </div>
    
    <div class="col-2">
    
    </div>
    
</div>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\ksrv2\resources\views/dashboard.blade.php ENDPATH**/ ?>