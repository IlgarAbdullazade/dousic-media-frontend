@props(['password' => false])


<div class="form-group">
    @isset($label)
        <div class="form-group__header">
            {{ $label }}
        </div>
    @endisset
    <div class="form-group__row">
        <input {{ $attributes }} />
        <div class="form-group__actions">
            @if ($password)
                <button type="button" class="form-group__button">
                    <i class="form-group__icon fa-solid fa-eye"></i>
                    {{-- <i class="form-group__icon fa-solid fa-eye-slash"></i> --}}
                </button>
            @endif

            @isset($popover)
                <div class="form-group__button">
                    {{ $popover }}
                </div>
            @endisset

        </div>
    </div>
</div>
