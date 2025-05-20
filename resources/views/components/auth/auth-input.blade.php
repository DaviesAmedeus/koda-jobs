@props(['name', 'textarea'=> false])

@php
    $defaults = [
    'name'=> $name,
    'type'=>'text',
    'class'=>'form-control',
    ]
@endphp



@if (!$textarea)
<div class="form-group">
    <input {{ $attributes($defaults) }}>
</div>
@endif

@if ($textarea)
<div class="form-group">
    <textarea {{ $attributes($defaults) }} rows="4"></textarea>
</div>
@endif

