<div>
    <div class="row">
        <div class="col-6">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.edit.members', [])->html();
} elseif ($_instance->childHasBeenRendered('l2783958125-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2783958125-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2783958125-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2783958125-0');
} else {
    $response = \Livewire\Livewire::mount('settings.edit.members', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2783958125-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="col-6">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.edit.payments', [])->html();
} elseif ($_instance->childHasBeenRendered('l2783958125-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2783958125-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2783958125-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2783958125-1');
} else {
    $response = \Livewire\Livewire::mount('settings.edit.payments', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2783958125-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/settings/edit/index.blade.php ENDPATH**/ ?>