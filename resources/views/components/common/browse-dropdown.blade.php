<div class="browse-dropdown" @click.away="open = false" x-data="{ open: false }">
    <button @click="open = !open" type="button" class="browse-dropdown__button browse-button">
        @isset($icon)
            {{ $icon }}
        @endisset
        {{ $name }}
        <i :class="{ 'rotate-180': open, 'rotate-0': !open }" class="browse-dropdown__icon fa-solid fa-angle-down"></i>
    </button>
    <div x-show="open" style="display: none" x-transition:enter="transition"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95" class="browse-dropdown__menu">
        {{ $menu }}
    </div>
</div>
