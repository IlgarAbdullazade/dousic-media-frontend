@php($id = Str::uuid())

<div class="file-upload">
    @isset($info)
        <div class="file-upload__info"> {{ $info }}</div>
    @endisset
    <label for="{{ $id }}" class="file-upload__label">
        <div class="file-upload__wrapper">
            <i class="file-upload__icon fa-solid fa-image"></i>
            <b class="file-upload__text text-primary">Upload file</b>
            <span class="file-upload__text">(Click/tap to select a file)</span>
            <span class="file-upload__text text-customGray-600 dark:text-customGray-500">PNG, JPG, JPEG (up to 4 MB) At
                least 1,200 x 750 pixels</span>
        </div>
        <input id="{{ $id }}" type="file" class="hidden" />
    </label>
</div>
