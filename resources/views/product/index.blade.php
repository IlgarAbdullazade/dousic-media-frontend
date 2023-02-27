@extends('layouts.base')

@section('page.title', 'Product')

@section('content')
    @include('includes.header')

    <x-page>
        <section class="page__podcast podcast">
            <div class="podcast__container">
                <div class="podcast__wrapper">
                    <div class="podcast__header">
                        <x-ui.button-link href="{{ route('marketplace') }}" class="podcast__button secondary">
                            <x-slot name='iconBefore'><i class="fa-solid fa-arrow-left-long max-lg:mr-2 mr-4"></i></i>
                            </x-slot>
                            Marketplace
                        </x-ui.button-link>
                    </div>
                    <div class="podcast__body">
                        <div class="podcast__col">
                            <div class="podcast-content">
                                <div class="podcast-content__wrapper">
                                    <div class="podcast-content__data podcast-data">
                                        <div class="podcast-data__creator">
                                            Haris_Shahid
                                            <span class="text-primary">(Singer)</span>
                                        </div>
                                        <h1 class="podcast-data__title">Hollywood Greatest Themes</h1>
                                        <p class="podcast-data__text">Every first Wednesday of the month, Un
                                            Podcast à soi combines intimacy and expertise, testimonies and reflectionse
                                        </p>
                                    </div>
                                    <div class="podcast-content__player">
                                    </div>
                                    <div class="podcast-content__info podcast-info">
                                        <div class="podcast-info__wrapper">
                                            <div class="podcast-info__categories podcast-categories">
                                                <div class="podcast-categories__item podcast-category">
                                                    <div class="podcast-category__wrapper">
                                                        <div class="podcast-category__title">
                                                            Genres
                                                        </div>
                                                        <x-common.category class="podcast-category__body" />
                                                    </div>
                                                </div>
                                                <div class="podcast-categories__item podcast-category">
                                                    <div class="podcast-category__wrapper">
                                                        <div class="podcast-category__title">
                                                            Vibes
                                                        </div>
                                                        <x-common.category class="podcast-category__body" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="podcast-info__purchase podcast-purchase">
                                                <div class="podcast-purchase__title">
                                                    Price
                                                </div>
                                                <div class="podcast-purchase__price">
                                                    1.97
                                                </div>
                                            </div>
                                            <div class="podcast-info__actions">
                                                <x-ui.button class="podcast-info__button primary">Add to Cart</x-ui.button>
                                                <x-ui.button class="podcast-info__button secondary">Add to wishlist
                                                </x-ui.button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="podcast__col">
                            <div data-da=".podcast-content__player, 1023.98, 0" class="podcast-player">
                                <div class="podcast-player__wrapper">
                                    <div class="podcast-player__image podcast-player-ibg-cover">
                                        <img src="../images/mock/media.png" alt="media" />
                                    </div>
                                    <div class="podcast-player__audio">
                                        <x-common.audio-player
                                            data-audio-src="https://ia800905.us.archive.org/19/items/FREE_background_music_dhalius/backsound.mp3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-page>
@endsection
