@props([
    'error' => null
])

<div
    x-data="{ value: @entangle($attributes->wire('model')) }"
    x-on:change="value = $event.target.value"
    x-init="flatpickr($refs.input, {enableTime: true, noCalendar: true, dateFormat: 'H:i'})"
>

<div class="input-group">  
    <input 
    {{ $attributes->whereDoesntStartWith('wire:model') }} 
    x-ref="input"
    x-bind:value="value" 
    type="text" 
    class="form-control" 
/>
    {{-- <span class="input-group-text"><i class="mdi-calendar-blank"></i></span> --}}
</div>

  

</div>