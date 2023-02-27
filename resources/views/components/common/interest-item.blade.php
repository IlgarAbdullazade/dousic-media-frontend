<div {{ $attributes->class(['interest-item']) }}>
    <div class="interest-item__icon">
        {{ $icon }}
    </div>
    <div class="interest-item__name">
        {{ $slot }}
    </div>
</div>
