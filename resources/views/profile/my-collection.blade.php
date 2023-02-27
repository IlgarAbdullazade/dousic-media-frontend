@extends('layouts.main')

@section('page.title', 'My Collection')

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
                            <x-icons.creator />
                        </div>
                    </x-slot>
                    Browse my Creator
                </x-common.browse-button>
                <x-common.browse-button href='#' class="main-content__button">
                    <x-slot name='icon'>
                        <div class="browse-button__icon">
                            <x-icons.genre />
                        </div>
                    </x-slot>
                    Browse my Genre
                </x-common.browse-button>
                <x-common.browse-button href='#' class="main-content__button">
                    <x-slot name='icon'>
                        <div class="browse-button__icon">
                            <x-icons.vibe />
                        </div>
                    </x-slot>
                    Browse my Vibes
                </x-common.browse-button>
                <x-common.browse-button href='#' class="main-content__button">
                    <x-slot name='icon'>
                        <div class="browse-button__icon">
                            <x-icons.media-type />
                        </div>
                    </x-slot>
                    Browse my Media Type
                </x-common.browse-button>

            </div>
            <x-ui.tabs class="main-content__tabs" />
            <div class="main-content__body">
                {{-- <div class="content-body">
                    <x-common.item-card-v1 class="content-body__item" />
                    <x-common.item-card-v1 class="content-body__item" />
                    <x-common.item-card-v1 class="content-body__item" />
                    <x-common.item-card-v1 class="content-body__item" />
                </div> --}}
                <x-common.empty-block />
            </div>
            <div class="main-content__floating">
                <button data-popup='#uploadPopup' class="floating-button">
                    <i class="fa-solid fa-video"></i>
                </button>
            </div>
        </div>
    </section>
@endsection
