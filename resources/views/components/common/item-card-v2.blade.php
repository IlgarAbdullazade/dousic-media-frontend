<div {{ $attributes->class(['media-tile']) }}>
    <div class="media-tile__wrapper">
        <div class="media-tile__col">
            <div class="media-tile__row">
                <a href="" class="media-tile__link">
                    <div class="media-tile__image media-tile-ibg-cover">
                        <img src="../images/mock/media.png" alt="Cover" />
                    </div>
                </a>
                <div class="media-tile__data">
                    <h3 class="media-tile__title">Love stories</h3>
                    <p class="media-tile__description">Lorem Ipsum is simply dummy text of the printing and typesetting
                        em
                        Ipsum
                        industry.....</p>
                    <div class="media-tile__info media-info">
                        <div class="media-info__item">
                            <i class="media-info__icon fa-solid fa-clock text-primary"></i>
                            00:53.016
                        </div>
                        <div class="media-info__item text-secondary">
                            <i class="media-info__icon fa-solid fa-ban"></i>Not available in Market
                        </div>
                        {{-- <div class="media-info__item">
                            <i class="media-info__icon fa-solid fa-circle-check text-primary"></i> Available in Market
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
        <div class="media-tile__col">
            <div class="media-tile__counts media-counts">
                <div class="media-counts__item">
                    <b class="media-counts__number">11k
                    </b>
                    <span class="media-counts__text">From search</span>
                </div>
                <div class="media-counts__item">
                    <b class="media-counts__number">9k</b>
                    <span class="media-counts__text">Page Views</span>
                </div>
                <div class="media-counts__item">
                    <b class="media-counts__number">932</b>
                    <span class="media-counts__text">Preview Plays</span>
                </div>
                <div class="media-counts__item">
                    <b class="media-counts__number">48</b>
                    <span class="media-counts__text">Total Sales </span>
                </div>
            </div>
            <x-ui.button class="media-tile__button primary">
                Dig Deeper </x-ui.button>
        </div>
    </div>
</div>
