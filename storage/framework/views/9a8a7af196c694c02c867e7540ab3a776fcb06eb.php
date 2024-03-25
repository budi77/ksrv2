<div>
    <?php $__env->startSection('title'); ?> KSR ARENA <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> MESYUARAT AGUNG KSR 2023  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="row">

    
  <div class="flex-shrink-0 pb-2">
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm" wire:click="generatePDF"><i class="ri-download-2-fill align-middle me-1"></i> Muat Turun Kehadiran</a>
                            </div>



<div class="card">
                                <div class="card-body">
                                    
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-tabs mb-3" role="tablist">
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">
                                                Pendaftaran
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#product1" role="tab" aria-selected="false" tabindex="-1">
                                                Senarai Kehadiran
                                            </a>
                                        </li>
                                      
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content  text-muted">
                                        <div class="tab-pane active show" id="home" role="tabpanel">
                                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('meeting.register', [])->html();
} elseif ($_instance->childHasBeenRendered('l1433504157-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1433504157-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1433504157-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1433504157-0');
} else {
    $response = \Livewire\Livewire::mount('meeting.register', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1433504157-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                                            
                                        </div>
                                        <div class="tab-pane" id="product1" role="tabpanel">
                                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('meeting.attendance', [])->html();
} elseif ($_instance->childHasBeenRendered('l1433504157-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1433504157-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1433504157-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1433504157-1');
} else {
    $response = \Livewire\Livewire::mount('meeting.attendance', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1433504157-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                                        </div>
                                        
                                    </div>
                                </div><!-- end card-body -->
                            </div>








    
</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/meeting/index.blade.php ENDPATH**/ ?>