<div {{ $attributes->class(['media-card']) }}>
    <div class="media-card__wrapper">
        <a href="" class="media-card__link">
            <div class="media-card__image media-card-ibg-cover">
                <img src="../images/mock/media.png" alt="Cover" />
            </div>
        </a>
        <h3 class="media-card__title">Love stories</h3>
        <p class="media-card__description">Lorem Ipsum is simply dummy text of the printing and typesetting em Ipsum
            is simply dummy text of the printing and typesetting em Ipsum is simply dummy text of the printing and
            typesetting
            industry.....</p>
        <div class="media-card__info media-info">
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

        <div class="media-card__counts media-counts">
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
        <x-ui.button-link href="{{ route('content-settings') }}" class="media-card__button secondary">
            <x-slot name='iconBefore'><i class="fa-solid fa-gear max-sm:mr-1 mr-2"></i>
            </x-slot>
            Content Settings
        </x-ui.button-link>

        {{-- <div class="media-card__categories media-categories">
            <div class="media-categories__item media-category">
                <div class="media-category__wrapper">
                    <div class="media-category__title">
                        Genres
                    </div>
                    <x-common.category class="media-category__body" />
                </div>
            </div>
            <div class="media-categories__item media-category">
                <div class="media-category__wrapper">
                    <div class="media-category__title">
                        Vibes
                    </div>
                    <x-common.category class="media-category__body" />
                </div>
            </div>
        </div> --}}
        {{-- <x-ui.button class="media-card__button primary">
            Dig Deeper
        </x-ui.button> --}}
    </div>
</div>
