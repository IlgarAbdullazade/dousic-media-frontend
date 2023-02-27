@extends('layouts.marketplace')

@section('page.title', 'Podcasts')

@section('marketplace.content')
    <div class="podcasts">
        <div class="podcasts__wrapper">
            <div class="podcasts__section podcast-section">
                <h2 class="podcast-section__title">Top Podcast</h2>
                <div class="podcast-section__body">
                    <div class="podcast-section__slider podcast-slider swiper" id='topPodcasts'>
                        <div class="podcast-slider__wrapper swiper-wrapper">
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="podcasts__section podcast-section">
                <h2 class="podcast-section__title">Podcast Genres</h2>
                <x-common.category class="podcast-section__category" />
                <div class="podcast-section__body">
                    <div class="podcast-section__slider podcast-slider swiper" id='podcasts'>
                        <div class="podcast-slider__wrapper swiper-wrapper">
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                            <div class="podcast-slider__slide swiper-slide">
                                <x-common.podcast-item-v1 />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
