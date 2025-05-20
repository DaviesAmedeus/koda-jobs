@props(['label', 'name'])

<div class="form-group">
    <label for="logo">{{ $label }}</label>
    <input type="file" class="form-control-file" id="logo" name="{{ $name }}">
</div>
