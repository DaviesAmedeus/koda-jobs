@props(['name', 'textarea'=> false])

@php
    $defaults = [
    'name'=> $name,
    'type'=>'text',
    'class'=>'form-control',
    'value'=> old($name)
    ]
@endphp



@if (!$textarea)
<div class="form-group">
    <input {{ $attributes($defaults) }}>
    @error($name)
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>

@endif

@if ($textarea)
<div class="form-group">
    <textarea {{ $attributes($defaults) }} rows="4"></textarea>
    @error($name)
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>
@endif

