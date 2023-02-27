@extends('layouts.main')

@section('page.title', 'My Uploads')

@section('profile.content')
    <section class="main-content">
        <div class="main-content__wrapper">
            <div class="main-content__header main-content-header">
                <h2 class="main-content-header__title">This is your collection of media made by other content creators!</h2>
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
                    <x-common.uploads-item class="content-body__item" />
                    <x-common.uploads-item class="content-body__item" />
                    <x-common.uploads-item class="content-body__item" />
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


    <div id="myUploadsPopup" aria-hidden="true" class="popup">
        <div class="popup__wrapper">
            <div class="popup__content">
                <div class="popup__header">
                    <b class="popup__title">
                        Genre Big beat </b>
                    <button data-close type="button" class="popup__close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </button>
                </div>
                <div class="popup__body">
                    <div class="my-uploads-popup">
                        <div class="my-uploads-popup__wrapper">
                            <div class="my-uploads-popup__list">
                                <x-common.item-card-v2 class="my-uploads-popup__item" />
                                <x-common.item-card-v2 class="my-uploads-popup__item" />
                                <x-common.item-card-v2 class="my-uploads-popup__item" />
                                <x-common.item-card-v2 class="my-uploads-popup__item" />
                                <x-common.item-card-v2 class="my-uploads-popup__item" />
                                <x-common.item-card-v2 class="my-uploads-popup__item" />
                                <x-common.item-card-v2 class="my-uploads-popup__item" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
