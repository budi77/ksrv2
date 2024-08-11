<div>
<?php $__env->startSection('title'); ?> KSR GAMES 24 <?php $__env->stopSection(); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> KSR GAMES 2024  <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>


<div class="row">

<div class="card">
                                <div class="card-body">
                                    <!-- <p class="text-muted">Use <code>arrow-navtabs </code>class to create arrow nav tabs.</p> -->
                                    <ul class="nav nav-pills arrow-navtabs nav-success bg-light mb-3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#arrow-overview" role="tab" aria-selected="true">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant"></i></span>
                                                <span class="d-none d-sm-block">Acara Sukan</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#arrow-profile" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-account"></i></span>
                                                <span class="d-none d-sm-block">Kontigen</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#arrow-contact" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">Kumpulan</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="arrow-overview" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.sports', [])->html();
} elseif ($_instance->childHasBeenRendered('l3014318435-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3014318435-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3014318435-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3014318435-0');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.sports', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3014318435-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                        <div class="tab-pane" id="arrow-profile" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.contigent', [])->html();
} elseif ($_instance->childHasBeenRendered('l3014318435-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3014318435-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3014318435-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3014318435-1');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.contigent', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3014318435-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                        <div class="tab-pane" id="arrow-contact" role="tabpanel">
                                            <h6>Contact</h6>
                                            <p class="mb-0">
                                                Consistency is the one thing that can take all of the different elements in your design, and tie them all together and make them work. In an awareness campaign, it is vital for people to begin put 2 and 2 together and begin to recognize your cause. Consistency piques people’s interest is that it has become more and more popular over the years, which is excellent news to the beginner and advanced <a href="javascript:void(0);" class="text-decoration-underline"><b>Contact Designer</b></a>.
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div>


</div>



</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/parameter.blade.php ENDPATH**/ ?>