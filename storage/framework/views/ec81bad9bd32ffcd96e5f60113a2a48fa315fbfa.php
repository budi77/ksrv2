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
                                            <a class="nav-link active" data-bs-toggle="tab" href="#bolasepak" role="tab" aria-selected="true">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant"></i></span>
                                                <span class="d-none d-sm-block">BOLA SEPAK</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#bola-jaring" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-account"></i></span>
                                                <span class="d-none d-sm-block">BOLA JARING</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#badminton" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">BADMINTON</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#bola-tampar-lelaki" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">BOLA TAMPAR LELAKI</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#bola-tampar-wanita" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">BOLA TAMPAR WANITA</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#ping-pong" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">PING PONG</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#sepak-takraw" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">SEPAK TAKRAW</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#futsal" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">FUTSAL</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#karom" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">KAROM</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#balapan" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">BALAPAN</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#bowling" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">BOWLING</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="bolasepak" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.bola-sepak.games', [])->html();
} elseif ($_instance->childHasBeenRendered('l4061111595-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l4061111595-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4061111595-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4061111595-0');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.bola-sepak.games', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4061111595-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                        <div class="tab-pane" id="bola-jaring" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.bola-jaring.games', [])->html();
} elseif ($_instance->childHasBeenRendered('l4061111595-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l4061111595-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4061111595-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4061111595-1');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.bola-jaring.games', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4061111595-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                        <div class="tab-pane" id="badminton" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.badminton.games', [])->html();
} elseif ($_instance->childHasBeenRendered('l4061111595-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l4061111595-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4061111595-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4061111595-2');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.badminton.games', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4061111595-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                        <div class="tab-pane" id="bola-tampar-lelaki" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.bola-tampar-lelaki.games', [])->html();
} elseif ($_instance->childHasBeenRendered('l4061111595-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l4061111595-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4061111595-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4061111595-3');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.bola-tampar-lelaki.games', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4061111595-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                        <div class="tab-pane" id="bola-tampar-wanita" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.bola-tampar-wanita.games', [])->html();
} elseif ($_instance->childHasBeenRendered('l4061111595-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l4061111595-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4061111595-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4061111595-4');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.bola-tampar-wanita.games', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4061111595-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                        <div class="tab-pane" id="ping-pong" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.ping-pong.games', [])->html();
} elseif ($_instance->childHasBeenRendered('l4061111595-5')) {
    $componentId = $_instance->getRenderedChildComponentId('l4061111595-5');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4061111595-5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4061111595-5');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.ping-pong.games', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4061111595-5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                        <div class="tab-pane" id="sepak-takraw" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.sepak-takraw.games', [])->html();
} elseif ($_instance->childHasBeenRendered('l4061111595-6')) {
    $componentId = $_instance->getRenderedChildComponentId('l4061111595-6');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4061111595-6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4061111595-6');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.sepak-takraw.games', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4061111595-6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                        <div class="tab-pane" id="futsal" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.futsal.games', [])->html();
} elseif ($_instance->childHasBeenRendered('l4061111595-7')) {
    $componentId = $_instance->getRenderedChildComponentId('l4061111595-7');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4061111595-7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4061111595-7');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.futsal.games', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4061111595-7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                        <div class="tab-pane" id="balapan" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.balapan.games', [])->html();
} elseif ($_instance->childHasBeenRendered('l4061111595-8')) {
    $componentId = $_instance->getRenderedChildComponentId('l4061111595-8');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4061111595-8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4061111595-8');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.balapan.games', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4061111595-8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                        <div class="tab-pane" id="bowling" role="tabpanel">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ksr-games24.bowling.games', [])->html();
} elseif ($_instance->childHasBeenRendered('l4061111595-9')) {
    $componentId = $_instance->getRenderedChildComponentId('l4061111595-9');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4061111595-9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4061111595-9');
} else {
    $response = \Livewire\Livewire::mount('ksr-games24.bowling.games', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4061111595-9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div>


</div>



</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/fixtures.blade.php ENDPATH**/ ?>