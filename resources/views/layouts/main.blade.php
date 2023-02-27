@extends('layouts.base')

@section('content')
    @include('includes.header')

    <x-page>
        <section class="page__profile profile">
            <div class="profile__cover profile-cover">
                <div class="profile-cover__background">
                    <div class="profile-cover__image profile-cover-ibg-cover">
                        <img src="../images/mock/cover.png" alt="Cover" />
                        <x-profile.image-upload class="z-10 scale-150 opacity-0">Upload Profile Cover
                        </x-profile.image-upload>
                    </div>
                </div>
                <div class="profile-cover__container">
                    <div class="profile-cover__wrapper">
                        <div class="profile-cover__actions">
                            <div class="profile-cover__action">
                                <x-ui.button class="profile-cover__button secondary">
                                    Edit Profile
                                    <x-slot name="iconAfter">
                                        <i class="fa-solid fa-pen ml-3"></i>
                                    </x-slot>
                                </x-ui.button>
                                <x-ui.popover class="profile-cover__info">
                                    An account email is required.

                                    Please use the email address used when creating your Dousic Media account.
                                </x-ui.popover>
                            </div>

                        </div>
                        {{-- <div class="profile-cover__actions user">
                            <div class="profile-cover__action">
                                <x-ui.button class="profile-cover__button primary">
                                    <x-slot name="iconBefore">
                                        <i class="fa-solid fa-circle-plus mr-3"></i>
                                    </x-slot>
                                    Follow
                                </x-ui.button>
                            </div>
                            <div class="profile-cover__action">
                                <x-ui.button class="profile-cover__button secondary">
                                    <x-slot name="iconBefore">
                                        <i class="fa-solid fa-envelope mr-3"></i>
                                    </x-slot>
                                    Message
                                </x-ui.button>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="profile__container">
                <div class="profile__wrapper">
                    <x-profile.sidebar class="profile__sidebar" />

                    <div class="profile__content profile-content">
                        <div class="profile-content__header profile-content-header">
                            <div class="profile-content-header__wrapper">
                                <a href="{{ route('my-content') }}"
                                    class="{{ Request::routeIs('my-content') ? 'profile-content-header__item active active' : 'profile-content-header__item' }}">
                                    My Content </a>
                                <a
                                    href="{{ route('my-collection') }}"class="{{ Request::routeIs('my-collection') ? 'profile-content-header__item active active' : 'profile-content-header__item' }}">
                                    My Collection </a>
                            </div>

                        </div>
                        <div class="profile-content__body">
                            @yield('profile.content')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-page>

    @include('includes.footer')

    <div id="uploadPopup" aria-hidden="true" class="popup">
        <div class="popup__wrapper">
            <div class="popup__content">
                <div class="popup__header">
                    <b class="popup__title">
                        Upload New Audio Content
                    </b>
                    <button data-close type="button" class="popup__close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </button>
                </div>
                <div class="popup__body">
                    <div class="upload-popup">
                        <x-forms.form class="upload-popup__form" action="#" autocomplete="off">
                            <x-forms.upload-file />
                        </x-forms.form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
