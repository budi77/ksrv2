<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'error' => null
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'error' => null
]); ?>
<?php foreach (array_filter(([
    'error' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    x-data="{ value: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?> }"
    x-on:change="value = $event.target.value"
    x-init="flatpickr($refs.input, {enableTime: false, dateFormat: 'Y-m-d'})"
>

<div class="input-group">  
    <input 
    <?php echo e($attributes->whereDoesntStartWith('wire:model')); ?> 
    x-ref="input"
    x-bind:value="value" 
    type="text" 
    class="form-control" 
/>
    
</div>

  

</div><?php /**PATH C:\laragon\www\ksrv2\resources\views/components/date-picker.blade.php ENDPATH**/ ?>