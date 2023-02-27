<div class="form-group">
    @isset($label)
        <div class="form-group__header">
            {{ $label }}
        </div>
    @endisset
    <div class="form-group__row">
        <textarea {{ $attributes }}></textarea>
    </div>
</div>
