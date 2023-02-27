<button {{ $attributes->class(['button']) }}>
    @isset($iconBefore)
        {{ $iconBefore }}
    @endisset
    {{ $slot }}
    @isset($iconAfter)
        {{ $iconAfter }}
    @endisset
</button>
