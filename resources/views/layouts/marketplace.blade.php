@extends('layouts.base')

@section('content')
    @include('includes.header')

    <x-page>
        <section class="page__marketplace marketplace">
            <div class="marketplace__container">
                <div class="marketplace__wrapper">
                    <div class="marketplace__header">
                        <h1 class="marketplace__title">Marketplace</h1>
                        <p class="marketplace__text">The Market is where you find new independent and original content from
                            our community of digital content creators. Content creators offer their creations in various
                            ways, like single purchase access, subscriptions, and more!</p>
                    </div>
                    <div class="marketplace__actions">
                        <x-common.browse-button href='#' class="marketplace__button">
                            <x-slot name='icon'>
                                <div class="browse-button__icon">
                                    <x-icons.creator />
                                </div>
                            </x-slot>
                            Browse By Creator
                        </x-common.browse-button>
                        <x-common.browse-dropdown href='#' class="marketplace__button">
                            <x-slot name='icon'>
                                <div class="browse-button__icon">
                                    <x-icons.genre />
                                </div>
                            </x-slot>
                            <x-slot name='name'>
                                Browse By Genre
                            </x-slot>
                            <x-slot name='menu'>
                                <ul class="browse-dropdown__list">
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Streams </a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Videos </a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Audio</a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Images</a>
                                    </li>

                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Texts</a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">eBooks</a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Podcast</a>
                                    </li>
                                </ul>
                            </x-slot>
                        </x-common.browse-dropdown>
                        <x-common.browse-dropdown href='#' class="marketplace__button">
                            <x-slot name='icon'>
                                <div class="browse-button__icon">
                                    <x-icons.vibe />
                                </div>
                            </x-slot>
                            <x-slot name='name'>
                                Browse By Vibes
                            </x-slot>
                            <x-slot name='menu'>
                                <ul class="browse-dropdown__list">
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Streams </a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Videos </a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Audio</a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Images</a>
                                    </li>

                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Texts</a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">eBooks</a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Podcast</a>
                                    </li>
                                </ul>
                            </x-slot>
                        </x-common.browse-dropdown>
                        <x-common.browse-dropdown href='#' class="marketplace__button">
                            <x-slot name='icon'>
                                <div class="browse-button__icon">
                                    <x-icons.media-type />
                                </div>
                            </x-slot>
                            <x-slot name='name'>
                                Browse By Media Type
                            </x-slot>
                            <x-slot name='menu'>
                                <ul class="browse-dropdown__list">
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Streams </a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Videos </a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Audio</a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Images</a>
                                    </li>

                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Texts</a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">eBooks</a>
                                    </li>
                                    <li class="browse-dropdown__item">
                                        <a href="{{ route('podcasts') }}" class="browse-dropdown__link">Podcast</a>
                                    </li>
                                </ul>
                            </x-slot>
                        </x-common.browse-dropdown>

                    </div>
                    <div class="marketplace__content">
                        @yield('marketplace.content')
                    </div>
                </div>
            </div>
        </section>
    </x-page>
@endsection
