@props([
    'redirect',
    'redirectTitle'
])

<div class="account-dialog-actions">
    <button type="submit" class="btn btn-primary">{{ $slot }}</button>
    <a class="account-dialog-link" href="{{ $redirect }}">{{ $redirectTitle }}</a>
</div>
