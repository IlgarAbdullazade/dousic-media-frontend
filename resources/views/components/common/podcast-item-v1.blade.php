<div {{ $attributes->class(['podcast-item']) }}>
    <div class="podcast-item__wrapper">
        <a href="{{ route('podcast') }}" class="podcast-item__cover podcast-item-ibg-cover">
            <img src="../images/mock/media.png" alt="Cover" />
        </a>
        <div class="podcast-item__info">
            <div class="podcast-item__name">Timeline, 5.000 ans d'Histoire</div>
            <a href="{{ route('podcast') }}" class="podcast-item__button play-button">
                <i class="fa-solid fa-play"></i>
            </a>
        </div>
    </div>
</div>
