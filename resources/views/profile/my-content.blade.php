@extends('layouts.main')

@section('page.title', 'My content')

@section('profile.content')
    <section class="main-content">
        <div class="main-content__wrapper">
            <div class="main-content__header main-content-header">
                <h2 class="main-content-header__title">This is your originally created content!</h2>
                <div class="main-content-header__actions">
                    <x-ui.button-link href="{{ route('upload-content') }}" class="main-content-header__button primary">
                        <x-slot name='iconBefore'> <i class="fa-solid fa-cloud-arrow-up mr-2"></i>
                        </x-slot>
                        Upload
                    </x-ui.button-link>
                    <x-ui.button-link href="{{ route('start-stream') }}" class="main-content-header__button primary">
                        <x-slot name='iconBefore'><i class="fa-solid fa-tower-broadcast mr-2"></i>
                        </x-slot>
                        Stream
                    </x-ui.button-link>
                </div>
            </div>
            <div class="main-content__actions">
                <x-common.browse-button href='#' class="main-content__button">
                    <x-slot name='icon'>
                        <div class="browse-button__icon">
                            <x-icons.genre />
                        </div>
                    </x-slot>
                    Browse my Genres
                </x-common.browse-button>
                <x-common.browse-button href='#' class="main-content__button">
                    <x-slot name='icon'>
                        <div class="browse-button__icon">
                            <x-icons.vibe />
                        </div>
                    </x-slot>
                    Browse my Vibes
                </x-common.browse-button>

            </div>
            <x-ui.tabs class="main-content__tabs" />
            <div class="main-content__body">
                <div class="content-body">
                    <x-common.item-card-v1 class="content-body__item" />
                    <x-common.item-card-v1 class="content-body__item" />
                </div>
                {{-- <x-common.empty-block /> --}}
            </div>
            <div class="main-content__floating">
                <button data-popup='#uploadPopup' class="floating-button">
                    <i class="fa-solid fa-video"></i>
                </button>
            </div>
        </div>
    </section>
@endsection
