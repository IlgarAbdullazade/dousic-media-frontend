@php($id = Str::uuid())


<button {{ $attributes->class(['popover-icon']) }} data-popover-target="{{ $id }}"
    data-popover-placement="bottom-end">
    <i class="fa-regular fa-circle-question"></i>
</button>


<div data-popover id="{{ $id }}" role="tooltip" class="popover invisible opacity-0">
    <div class="popover__wrapper">
        <p class="popover__text">
            {{ $slot }}
        </p>
    </div>
    <div data-popper-arrow></div>
</div>
