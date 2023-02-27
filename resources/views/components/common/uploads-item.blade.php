<div {{ $attributes->class(['uploads-item']) }}>
    <div class="uploads-item__wrapper">
        <div class="uploads-item__info">
            <b class="uploads-item__count">48</b>
            <h3 class="uploads-item__title">Art Punk</h3>
            <span class="uploads-item__caption">UPLOADS</span>
        </div>
        <x-ui.button data-popup='#myUploadsPopup' class="uploads-item__button secondary">
            View Details
        </x-ui.button>
    </div>
</div>
