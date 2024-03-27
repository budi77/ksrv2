<div>
    <?php $__env->startSection('title'); ?> KSR ARENA <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> MESYUARAT AGUNG KSR 2023  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="row">

    
  <div class="flex-shrink-0 pb-2">
                                            <a href="<?php echo e(route('pdf.generatePDF')); ?>" class="btn btn-secondary btn-sm" ><i class="ri-download-2-fill align-middle me-1"></i> Muat Turun Kehadiran</a>
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
} elseif ($_instance->childHasBeenRendered('l335083050-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l335083050-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l335083050-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l335083050-0');
} else {
    $response = \Livewire\Livewire::mount('meeting.register', []);
    $html = $response->html();
    $_instance->logRenderedChild('l335083050-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                                            
                                        </div>
                                        <div class="tab-pane" id="product1" role="tabpanel">
                                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('meeting.attendance', [])->html();
} elseif ($_instance->childHasBeenRendered('l335083050-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l335083050-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l335083050-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l335083050-1');
} else {
    $response = \Livewire\Livewire::mount('meeting.attendance', []);
    $html = $response->html();
    $_instance->logRenderedChild('l335083050-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                                        </div>
                                        
                                    </div>
                                </div><!-- end card-body -->
                            </div>








    
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/meeting/index.blade.php ENDPATH**/ ?>