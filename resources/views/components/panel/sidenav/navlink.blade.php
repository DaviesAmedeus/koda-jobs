@props([
    'active' => false
])


<a  {{ $attributes->merge([
    'class' => ($active
                ? 'text-primary'
                : 'text-light'
              ) . ' dash-nav-item text-primary'
  ]) }} >
{{ $slot }}
</a>
