@php($id = Str::uuid())

<div class="checkbox">
    <input {{ $attributes }} type="checkbox" id="{{ $id }}" class="checkbox__input" />
    <label for="{{ $id }}" class="checkbox__label">
        {{ $slot }}
    </label>
</div>
