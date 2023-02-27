<div {{ $attributes->class(['podcast-tile']) }}>
    <div class="podcast-tile__wrapper">
        <div class="podcast-tile__info">
            <div class="podcast-tile__image podcast-tile-ibg-cover">
                <img src="../images/mock/media.png" alt="media" />
            </div>
            <div class="podcast-tile__data">
                <h4 class="podcast-tile__title">Un podcast à soi</h4>
                <p class="podcast-tile__text">Every first Wednesday of the month,
                    Un Podcast à soi combines intimacy and expertise.</p>
            </div>
            <div class="podcast-tile__action">
                <a href="{{ route('product') }}" class="podcast-tile__button play-button">
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</div>
