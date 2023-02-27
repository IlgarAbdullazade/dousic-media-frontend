@extends('layouts.auth')

@section('page.title', 'Sign Up')

@section('auth.content')

    <x-auth.content-block class="auth__content">
        <x-auth.logo class="auth__logo" />
        <h3 class="auth-content__subtitle">Welcome to your media ecosystem!</h3>
        <p class="auth-content__text">Douic Media is a content creation and consumption ecosystem
            where artists, creatives, producers, and fans can empower each other to create and
            consume original independent content in more financially sustainable ways.</p>
        <x-auth.content-socials class="auth-content__socials" />
    </x-auth.content-block>

    <x-auth.form-card class="auth__form">

        <x-auth.form-socials class="auth-form__header" />

        <div class="auth-form__body">
            <x-forms.form class="form space-y-5" action="#" autocomplete="off">

                <div class="form__group form-group">
                    <x-forms.input class="form-group__input" type="text" id="name" name="name"
                        placeholder="Enter your name">
                        <x-slot name="label">
                            <label class="form-group__label" for="name">Account Name</label>
                        </x-slot>

                        <x-slot name="popover">
                            <x-ui.popover>
                                An account email is required.

                                Please use the email address used when creating your Dousic Media account.
                            </x-ui.popover>
                        </x-slot>
                    </x-forms.input>
                </div>

                <div class="form__group form-group">
                    <x-forms.input class="form-group__input" type="email" id="email" name="email"
                        placeholder="Enter your e-mail">
                        <x-slot name="label">
                            <label class="form-group__label" for="email">Account Email</label>
                        </x-slot>
                        <x-slot name="popover">
                            <x-ui.popover>
                                An account email is required.

                                Please use the email address used when creating your Dousic Media account.
                            </x-ui.popover>
                        </x-slot>
                    </x-forms.input>
                </div>

                <div class="form__group">
                    <x-forms.input class="form-group__input" type="password" id="password" name="password" minlength="8"
                        placeholder="Account Password" :password='true'>
                        <x-slot name="label">
                            <label class="form-group__label" for="password">Account Password</label>
                        </x-slot>
                        <x-slot name="popover">
                            <x-ui.popover>
                                An account email is required.

                                Please use the email address used when creating your Dousic Media account.
                            </x-ui.popover>
                        </x-slot>
                    </x-forms.input>
                </div>

                <div class="form__group">
                    <x-forms.input class="form-group__input" type="password" id="confirmPassword" name="confirm_password"
                        minlength="8" placeholder="Re-enter your password" :password='true'>
                        <x-slot name="label">
                            <label class="form-group__label" for="password">Confirm your Password</label>
                        </x-slot>
                        <x-slot name="popover">
                            <x-ui.popover>
                                An account email is required.

                                Please use the email address used when creating your Dousic Media account.
                            </x-ui.popover>
                        </x-slot>
                    </x-forms.input>
                </div>

                <div class="form__checkbox">
                    <x-forms.checkbox name="label"> I agree to the Terms of
                        Services and Disclaimer</x-forms.checkbox>
                </div>

                <div class="form__submit">
                    <x-ui.button-link href="{{ route('setup') }}" class="form__button primary" type="submit">Register
                    </x-ui.button-link>
                </div>

            </x-forms.form>
        </div>

        <x-auth.form-extra class="auth-form__extra">
            <span class="auth-form-extra__text">Already a member?</span>
            <a href="{{ route('sign-in') }}" class="auth-form-extra__link">Login instead</a>
        </x-auth.form-extra>

    </x-auth.form-card>

    <x-auth.content-socials class="auth__socials" />
@endsection
