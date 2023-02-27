@php($id = Str::uuid())


<div class="settings-dropdown">
    <div class="settings-dropdown__wrapper">
        <div class="settings-dropdown__label info-line">
            <span class="info-line__text">Genres</span>
            <div class="info-line__icon">
                <x-ui.popover>
                    An account email is required.

                    Please use the email address used when creating your Dousic Media account.
                </x-ui.popover>
            </div>
        </div>
        <div @click.away="open = false" x-data="{ open: false }" class="settings-dropdown__row">
            <button @click="open = !open" type="button" class="settings-dropdown__button">
                <span>Search Vibes</span>
                <i :class="{ 'rotate-180': open, 'rotate-0': !open }"
                    class="settings-dropdown__icon fa-solid fa-angle-down"></i>
            </button>
            <div class="settings-dropdown__menu" x-show="open" x-transition:enter="transition" style="display: none"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95">
                <ul class="settings-dropdown__list">
                    <li class="settings-dropdown__item">
                        <a href="#" class="settings-dropdown__link">Autumnal</a>
                    </li>
                    <li class="settings-dropdown__item">
                        <a href="#" class="settings-dropdown__link">Adorable</a>
                    </li>
                    <li class="settings-dropdown__item">
                        <a href="#" class="settings-dropdown__link">Acerbic</a>
                    </li>
                    <li class="settings-dropdown__item">
                        <a href="#" class="settings-dropdown__link">Atmospheric</a>
                    </li>

                    <li class="settings-dropdown__item">
                        <a href="#" class="settings-dropdown__link">Autumnal</a>
                    </li>
                    <li class="settings-dropdown__item">
                        <a href="#" class="settings-dropdown__link">Adorable</a>
                    </li>
                    <li class="settings-dropdown__item">
                        <a href="#" class="settings-dropdown__link">Acerbic</a>
                    </li>
                    <li class="settings-dropdown__item">
                        <a href="#" class="settings-dropdown__link">Atmospheric</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="settings-dropdown__tags dropdown-tags">
            <div class="dropdown-tags__item">
                <span>Autumnal</span>
                <i class="dropdown-tags__icon fa-solid fa-circle-xmark"></i>
            </div>
            <div class="dropdown-tags__item">
                <span>Atmospheric</span>
                <i class="dropdown-tags__icon fa-solid fa-circle-xmark"></i>
            </div>
        </div>
    </div>
</div>
