<div>

<?php $__env->startSection('title'); ?>
Tetapan Sistem
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">

    

    <div class="col-xxl-12">
        <h5 class="mb-3">Tetapan Sistem</h5>
        <div class="card">
            <div class="card-body">
                
                <ul class="nav nav-pills arrow-navtabs nav-info bg-light mb-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#arrow-overview" role="tab" aria-selected="true">
                            <span class="d-block d-sm-none"><i class="mdi mdi-home-variant"></i></span>
                            <span class="d-none d-sm-block">Pengguna Sistem</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#arrow-profile" role="tab" aria-selected="false" tabindex="-1">
                            <span class="d-block d-sm-none"><i class="mdi mdi-account"></i></span>
                            <span class="d-none d-sm-block">Bahagian / Gabungan</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#arrow-contact" role="tab" aria-selected="false" tabindex="-1">
                            <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                            <span class="d-none d-sm-block">Ubah Rekod Pembayaran</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active show" id="arrow-overview" role="tabpanel">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.users', [])->html();
} elseif ($_instance->childHasBeenRendered('l338543171-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l338543171-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338543171-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338543171-0');
} else {
    $response = \Livewire\Livewire::mount('settings.users', []);
    $html = $response->html();
    $_instance->logRenderedChild('l338543171-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                    <div class="tab-pane" id="arrow-profile" role="tabpanel">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.departments', [])->html();
} elseif ($_instance->childHasBeenRendered('l338543171-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l338543171-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338543171-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338543171-1');
} else {
    $response = \Livewire\Livewire::mount('settings.departments', []);
    $html = $response->html();
    $_instance->logRenderedChild('l338543171-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                    <div class="tab-pane" id="arrow-contact" role="tabpanel">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.edit.index', [])->html();
} elseif ($_instance->childHasBeenRendered('l338543171-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l338543171-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338543171-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338543171-2');
} else {
    $response = \Livewire\Livewire::mount('settings.edit.index', []);
    $html = $response->html();
    $_instance->logRenderedChild('l338543171-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!--end col-->
</div>


   
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/js/pages/project-overview.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/settings/index.blade.php ENDPATH**/ ?>