<div class="settings-switch">
    <div class="settings-switch__info">
        @isset($info)
            <div class="settings-switch__popover">
                {{ $info }}
            </div>
        @endisset

        <span class="settings-switch__name">
            {{ $slot }}
        </span>
    </div>
    <label class="settings-switch__button switch-button">
        <input type="checkbox" value="" class="switch-button__input peer">
        <div
            class="switch-button__block peer peer-checked:bg-primary peer-checked:after:translate-x-full peer-focus:outline-none peer-focus:ring-0">
        </div>
    </label>
</div>
