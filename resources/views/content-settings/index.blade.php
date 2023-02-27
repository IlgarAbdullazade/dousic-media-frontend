@extends('layouts.settings')

@section('page.title', 'Content Settings')

@section('settings.content')
    <x-forms.form class="settings__form" action="#" autocomplete="off">

        <div class="settings__actions">
            <x-ui.button-link href="{{ route('my-content') }}" class="settings__button secondary">
                <x-slot name='iconBefore'><i class="fa-solid fa-arrow-left-long max-lg:mr-2 mr-4"></i></i>
                </x-slot>
                My Audio
            </x-ui.button-link>
        </div>
        <div class="settings__header settings-header">
            <div class="settings-header__wrapper">
                <h3 class="settings-header__title">Love stories Content Settings</h3>
                <div class="settings-header__actions">
                    <x-ui.button class="settings-header__button secondary">
                        <x-slot name='iconBefore'><i class="fa-solid fa-trash-can max-lg:mr-2 mr-3"></i>
                        </x-slot>
                        Delete
                    </x-ui.button>
                    <x-ui.button class="settings-header__button primary">
                        Save Changes
                    </x-ui.button>
                </div>
            </div>
        </div>
        <div class="settings__content settings-content">
            <div class="settings-content__wrapper">
                <div class="settings-content__form">
                    <div class="settings-form">
                        <div class="settings-form__wrapper _cols">
                            <div class="settings-form__col max-lg:gap-8 gap-20">
                                <div class="settings-form__line">
                                    <div class="settings-form__group form-group">
                                        <x-forms.input class="form-group__input" type="text" id="title"
                                            name="title" placeholder="Title">
                                            <x-slot name="popover">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                        </x-forms.input>
                                    </div>
                                </div>
                                <div class="settings-form__line">

                                    <div class="settings-form__group form-group">
                                        <x-forms.input class="form-group__input" type="text" id="synopsis"
                                            name="synopsis" placeholder="Synopsis">
                                            <x-slot name="popover">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                        </x-forms.input>
                                    </div>
                                </div>
                                <div class="settings-form__line">

                                    <div class="settings-form__group form-group">
                                        <x-forms.textarea class="form-group__input resize-none" rows="12"
                                            id="description" name="description" placeholder="Description">
                                            <x-slot name="label">
                                                <label class="form-group__label" for="name">Description </label>
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>

                                            </x-slot>
                                        </x-forms.textarea>

                                    </div>
                                </div>
                                <div class="settings-form__line">

                                    <div class="settings-form__group">
                                        <x-forms.upload-file>
                                            <x-slot name='info'>
                                                <div class="info-line">
                                                    <span class="info-line__text">Preview Audio File</span>
                                                    <div class="info-line__icon">
                                                        <x-ui.popover>
                                                            An account email is required.

                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </div>
                                                </div>
                                            </x-slot>
                                        </x-forms.upload-file>
                                    </div>
                                </div>
                                <div class="settings-form__line">

                                    <div class="settings-form__group">
                                        <div class="settings-form__audio settings-audio">
                                            <div class="settings-audio__info info-line">
                                                <span class="info-line__text">Master Audio File</span>
                                                <div class="info-line__icon">
                                                    <x-ui.popover>
                                                        An account email is required.

                                                        Please use the email address used when creating your Dousic
                                                        Media
                                                        account.
                                                    </x-ui.popover>
                                                </div>
                                            </div>
                                            <div class="settings-audio__player">
                                                <x-common.audio-player
                                                    data-audio-src="https://ia800905.us.archive.org/19/items/FREE_background_music_dhalius/backsound.mp3" />
                                            </div>
                                            <p class="settings-audio__text">
                                                You cannot change a master file that's in the Market! Also, once a master
                                                file has been purchased by someone, you cannot change the master file even
                                                if you remove it from the market!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="settings-form__line">

                                    <div class="settings-form__group">
                                        <x-forms.upload-file>
                                            <x-slot name='info'>
                                                <div class="info-line">
                                                    <span class="info-line__text">Master Audio File</span>
                                                    <div class="info-line__icon">
                                                        <x-ui.popover>
                                                            An account email is required.

                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </div>
                                                </div>
                                            </x-slot>
                                        </x-forms.upload-file>
                                    </div>
                                </div>
                                <div class="settings-form__line">

                                    <div class="settings-form__group form-group">
                                        <x-forms.upload-file>
                                            <x-slot name='info'>
                                                <div class="info-line">
                                                    <span class="info-line__text">Content Image</span>
                                                    <div class="info-line__icon">
                                                        <x-ui.popover>
                                                            An account email is required.

                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </div>
                                                </div>
                                            </x-slot>
                                        </x-forms.upload-file>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-form__col max-lg:gap-8 gap-20">
                                <div class="settings-form__line">

                                    <div class="settings-form__group">
                                        <x-settings.dropdown />
                                    </div>
                                </div>

                                <div class="settings-form__line">

                                    <div class="settings-form__group">
                                        <x-settings.dropdown />
                                    </div>
                                </div>
                                <div class="settings-form__line">
                                    <div class="info-line">
                                        <span class="info-line__text">Add To Market</span>
                                        <div class="info-line__icon">
                                            <x-ui.popover>
                                                An account email is required.

                                                Please use the email address used when creating your Dousic Media
                                                account.
                                            </x-ui.popover>
                                        </div>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            Make this content available in the Market </x-settings.switch>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.dropdown />
                                    </div>
                                </div>

                                <div class="settings-form__line">
                                    <div class="info-line">
                                        <span class="info-line__text">This Audio Content Contains:</span>
                                        <div class="info-line__icon">
                                            <x-ui.popover>
                                                An account email is required.

                                                Please use the email address used when creating your Dousic Media
                                                account.
                                            </x-ui.popover>
                                        </div>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            <x-slot name="info">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                            ANIMAL VIOLENCE
                                        </x-settings.switch>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            <x-slot name="info">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                            DE-HUMANIZATION
                                        </x-settings.switch>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            <x-slot name="info">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                            DISINFORMATION

                                        </x-settings.switch>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            <x-slot name="info">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                            GORE

                                        </x-settings.switch>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            <x-slot name="info">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                            HUMAN NUDITY

                                        </x-settings.switch>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            <x-slot name="info">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                            OFFENSIVE LANGUAGE

                                        </x-settings.switch>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            <x-slot name="info">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                            MILITARY/WAR
                                        </x-settings.switch>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            <x-slot name="info">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                            POLITICS
                                        </x-settings.switch>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            <x-slot name="info">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                            RELIGION
                                        </x-settings.switch>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            <x-slot name="info">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                            SEXUAL ACTS
                                        </x-settings.switch>
                                    </div>
                                    <div class="settings-form__group">
                                        <x-settings.switch>
                                            <x-slot name="info">
                                                <x-ui.popover>
                                                    An account email is required.
                                                    Please use the email address used when creating your Dousic Media
                                                    account.
                                                </x-ui.popover>
                                            </x-slot>
                                            SUBSTANCE ABUSE
                                        </x-settings.switch>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-forms.form>

@endsection
