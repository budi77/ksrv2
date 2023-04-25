<div id="livewire-bootstrap-modal" tabindex="-1"
    data-bs-backdrop="static" data-bs-keyboard="false"
    wire:ignore.self class="modal modal-blur fade">

    <?php if($alias): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($alias, $params)->html();
} elseif ($_instance->childHasBeenRendered($alias)) {
    $componentId = $_instance->getRenderedChildComponentId($alias);
    $componentTag = $_instance->getRenderedChildComponentTagName($alias);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($alias);
} else {
    $response = \Livewire\Livewire::mount($alias, $params);
    $html = $response->html();
    $_instance->logRenderedChild($alias, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>

</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/vendor/livewire-bootstrap-modal/modals.blade.php ENDPATH**/ ?>