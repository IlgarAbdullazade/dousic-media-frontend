@php($id = Str::uuid())

<div {{ $attributes->class(['file-upload']) }}>
    <label for="{{ $id }}" class="file-upload__label">
        <div class="file-upload__wrapper">
            <i class="file-upload__icon fa-solid fa-image"></i>
            <span class="file-upload__text !text-base text-customGray-600 dark:text-customGray-500">
                {{ $slot }}</span>
        </div>
        <input id="{{ $id }}" type="file" class="hidden" />
    </label>
</div>
