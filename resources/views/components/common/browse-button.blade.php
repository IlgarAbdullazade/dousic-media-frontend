<a {{ $attributes->class(['browse-button']) }}>
    @isset($icon)
        {{ $icon }}
    @endisset
    {{ $slot }}
</a>
