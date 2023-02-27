@extends('layouts.settings')

@section('page.title', 'Account Settings')

@section('settings.content')
    <x-forms.form class="settings__form" action="#" autocomplete="off">
        <div class="settings__actions">
            <x-ui.button class="settings__button secondary">
                <x-slot name='iconBefore'><i class="fa-solid fa-arrow-left-long max-lg:mr-2 mr-4"></i></i>
                </x-slot>
                Profile
            </x-ui.button>
        </div>
        <div class="settings__header settings-header">
            <div class="settings-header__wrapper">
                <h3 class="settings-header__title">Account settings</h3>
                <div class="settings-header__actions">
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
                        <div class="settings-form__wrapper _rows">
                            <div class="settings-form__row">
                                <div class="settings-form__context">
                                    <h4 class="settings-form__title">Personal Account Data</h4>
                                    <p class="settings-form__text">Update your account's profile information and email
                                        address.</p>
                                </div>
                                <div class="settings-form__bar">
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group form-group">
                                                <x-forms.input class="form-group__input" type="text" id="name"
                                                    name="name" placeholder="Account Name">
                                                    <x-slot name="label">
                                                        <label class="form-group__label" for="name">Account Name</label>
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                </x-forms.input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group form-group">
                                                <x-forms.input class="form-group__input" type="email" id="email"
                                                    name="email" placeholder="Account Email">
                                                    <x-slot name="label">
                                                        <label class="form-group__label" for="email">Account
                                                            Email</label>
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                </x-forms.input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-form__row">
                                <div class="settings-form__context">
                                    <h4 class="settings-form__title">Market Content Filters</h4>
                                    <p class="settings-form__text">Control exactly what you do and don't see in your
                                        customized marketplace with these settings.</p>

                                </div>
                                <div class="settings-form__col max-lg:mb-1 mb-4">
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
                                    </div>
                                </div>
                                <div class="settings-form__bar">
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                    ANIMAL VIOLENCE
                                                </x-settings.switch>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                    DE-HUMANIZATION
                                                </x-settings.switch>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="settings-form__bar">
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                    DISINFORMATION
                                                </x-settings.switch>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                    GORE
                                                </x-settings.switch>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="settings-form__bar">
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                    HUMAN NUDITY
                                                </x-settings.switch>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                    HUMAN VIOLENCE
                                                </x-settings.switch>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="settings-form__bar">
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                    OFFENSIVE LANGUAGE
                                                </x-settings.switch>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                    MILITARY/WAR
                                                </x-settings.switch>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="settings-form__bar">
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                    POLITICS
                                                </x-settings.switch>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                    RELIGION
                                                </x-settings.switch>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="settings-form__bar">
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                    SEXUAL ACTS
                                                </x-settings.switch>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group">
                                                <x-settings.switch>
                                                    <x-slot name="info">
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
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
                            <div class="settings-form__row">
                                <div class="settings-form__bar">
                                    <div class="settings-form__col">
                                        <div class="settings-form__context">
                                            <h4 class="settings-form__title">Market Genre Filters</h4>
                                            <p class="settings-form__text">Your account-level genre filter settings allow
                                                you to control the genres you do not want to see in your customized
                                                marketplace
                                                experience.</p>
                                        </div>
                                        <div class="settings-form__group">
                                            <x-settings.dropdown />
                                        </div>
                                    </div>
                                    <div class="settings-form__col">
                                        <div class="settings-form__context">
                                            <h4 class="settings-form__title">Market Vibes Filters</h4>
                                            <p class="settings-form__text">Your account-level genre filter settings allow
                                                you to control the genres you do not want to see in your customized
                                                marketplace
                                                experience.</p>
                                        </div>
                                        <div class="settings-form__group">
                                            <x-settings.dropdown />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-form__row">
                                <div class="settings-form__bar">
                                    <div class="settings-form__col">
                                        <div class="settings-form__context">
                                            <h4 class="settings-form__title">Blocked Users Settings</h4>
                                            <p class="settings-form__text">Your blocked users settings allow you to
                                                manage the users you have blocked.</p>
                                        </div>
                                        <div class="settings-form__group">
                                            <x-settings.dropdown />
                                        </div>
                                    </div>
                                    <div class="settings-form__col">
                                        <div class="settings-form__context">
                                            <h4 class="settings-form__title">Market Vibes Filters</h4>
                                            <p class="settings-form__text">Your account-level genre filter settings allow
                                                you to control the genres you do not want to see in your customized
                                                marketplace
                                                experience.</p>
                                            <span class="settings-form__caption">Your public profile is not currently
                                                enabled</span>
                                            <p class="settings-form__text">Your public profile is a customizable and
                                                publicly
                                                viewable page to show off your brand, personality, and your content to the
                                                world.</p>
                                            <x-ui.button class="settings-form__button primary">
                                                Settings
                                            </x-ui.button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-form__row">
                                <div class="settings-form__context">
                                    <h4 class="settings-form__title">Update Password</h4>
                                    <p class="settings-form__text">Ensure your account is using a long, random password to
                                        stay
                                        secure.</p>
                                </div>
                                <div class="settings-form__bar">
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group form-group">
                                                <x-forms.input class="form-group__input" type="password" id="password"
                                                    name="password" placeholder="Account Password" :password='true'>
                                                    <x-slot name="label">
                                                        <label class="form-group__label" for="password">Account
                                                            Password</label>
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                </x-forms.input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="settings-form__bar">
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group form-group">
                                                <x-forms.input class="form-group__input" type="password" id="newPassword"
                                                    name="newPassword" placeholder="Account Password" :password='true'>
                                                    <x-slot name="label">
                                                        <label class="form-group__label" for="newPassword">New
                                                            Password</label>
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                </x-forms.input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settings-form__col">
                                        <div class="settings-form__line">
                                            <div class="settings-form__group form-group">
                                                <x-forms.input class="form-group__input" type="password"
                                                    id="confirmPassword" name="confirmPassword"
                                                    placeholder="Confirm Password" :password='true'>
                                                    <x-slot name="label">
                                                        <label class="form-group__label" for="confirmPassword">Confirm
                                                            Password</label>
                                                        <x-ui.popover>
                                                            An account email is required.
                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </x-slot>
                                                </x-forms.input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-form__row">
                                <div class="settings-form__bar">
                                    <div class="settings-form__context">
                                        <h4 class="settings-form__title">Two Factor Authentication</h4>
                                        <p class="settings-form__text">An optional public profile page, providing a way to
                                            share and promote your content around the web.</p>
                                        <span class="settings-form__caption">You have not enabled two factor
                                            authentication.</span>
                                        <p class="settings-form__text">When two factor authentication is enabled, you will
                                            be
                                            prompted for a secure, random token during authentication. You may retrieve this
                                            token from your phone's Google Authenticator application.</p>
                                        <x-ui.button class="settings-form__button primary">
                                            Enable
                                        </x-ui.button>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-form__row">
                                <div class="settings-form__bar">
                                    <div class="settings-form__context">
                                        <h4 class="settings-form__title">Browser Sessions</h4>
                                        <p class="settings-form__text">Manage and log out your active sessions on other
                                            browsers and devices. <br><br> If necessary, you may log out of all of your
                                            other
                                            browser sessions across all of your devices. Some of your recent sessions are
                                            listed
                                            below; however, this list may not be exhaustive. If you feel your account has
                                            been
                                            compromised, you should also update your password.</p>
                                        <div class="settings-form__line browser-sessions">
                                            <div class="browser-sessions__wrapper">
                                                <div class="browser-sessions__item session-item">
                                                    <div class="session-item__icon">
                                                        <i class="fa-solid fa-display"></i>
                                                    </div>
                                                    <div class="session-item__info">
                                                        <div class="session-item__title">
                                                            Windows - Chrome
                                                        </div>
                                                        <div class="session-item__text">
                                                            182.185.131.240 <span class="text-primary">This device</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="browser-sessions__item session-item">
                                                    <div class="session-item__icon">
                                                        <i class="fa-solid fa-tablet-screen-button"></i>
                                                    </div>
                                                    <div class="session-item__info">
                                                        <div class="session-item__title">
                                                            IPad - Safari
                                                        </div>
                                                        <div class="session-item__text">
                                                            182.185.131.240 <span class="text-primary">Other device</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="browser-sessions__item session-item">
                                                    <div class="session-item__icon">
                                                        <i class="fa-solid fa-mobile-screen"></i>
                                                    </div>
                                                    <div class="session-item__info">
                                                        <div class="session-item__title">
                                                            Android - Chrome
                                                        </div>
                                                        <div class="session-item__text">
                                                            182.185.131.240 <span class="text-primary">Other device</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <x-ui.button class="settings-form__button primary">
                                            Log out of all browsers
                                        </x-ui.button>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-form__row">
                                <div class="settings-form__bar">
                                    <div class="settings-form__context">
                                        <h4 class="settings-form__title">Account Withdrawals</h4>
                                        <p class="settings-form__text">You can withdrawal your proceeds from the purchases
                                            and
                                            subscriptions of your fans and followers into either a PayPal or private bank
                                            account.</p>
                                        <div class="settings-form__col mb-4">
                                            <div class="settings-form__line">
                                                <div class="info-line">
                                                    <span class="info-line__text">Account Withdrawal Options</span>
                                                    <div class="info-line__icon">
                                                        <x-ui.popover>
                                                            An account email is required.

                                                            Please use the email address used when creating your Dousic
                                                            Media
                                                            account.
                                                        </x-ui.popover>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="settings-form__line withdarwal-options">
                                            <div class="withdarwal-options__wrapper">
                                                <x-ui.button class="withdarwal-options__item primary">
                                                    Withdrawal To My PayPal </x-ui.button>
                                                <x-ui.button class="withdarwal-options__item primary">
                                                    Withdrawal To My Bank Account </x-ui.button>
                                                <x-ui.button class="withdarwal-options__item primary">
                                                    Withdrawal To Strip </x-ui.button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-form__row">
                                <div class="settings-form__context">
                                    <h4 class="settings-form__title">Linked Social Accounts</h4>
                                    <p class="settings-form__text">You can link your Dousic Media account to various major
                                        authenticatable accounts to expedite things like sharing your content on other
                                        networks.</p>
                                </div>
                                <div class="settings-form__socials socials-settings">
                                    <div class="socials-settings__wrapper">
                                        <div class="socials-settings__item social-item">
                                            <div class="social-item__body">
                                                <div class="social-item__icon bg-[#000000]">
                                                    <i class="fa-brands fa-apple"></i>
                                                </div>
                                                <div class="social-item__info">
                                                    <h4 class="social-item__title">
                                                        Link My Apple Account
                                                    </h4>
                                                    <span class="social-item__caption">
                                                        Link your Apple account to your Dousic Media account!
                                                    </span>
                                                </div>

                                            </div>
                                            <x-ui.button class="social-item__button primary">Link Account</x-ui.button>
                                        </div>
                                        <div class="socials-settings__item social-item">
                                            <div class="social-item__body">
                                                <div class="social-item__icon bg-[#3B5998]">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </div>
                                                <div class="social-item__info">
                                                    <h4 class="social-item__title">
                                                        Link My Facebook Account </h4>
                                                    <span class="social-item__caption">
                                                        Link your Facebook account to your Dousic Media account!
                                                    </span>
                                                </div>

                                            </div>
                                            <x-ui.button class="social-item__button primary">Link Account</x-ui.button>
                                        </div>
                                        <div class="socials-settings__item social-item">
                                            <div class="social-item__body">
                                                <div class="social-item__icon bg-[#DB4437]">
                                                    <i class="fa-brands fa-google"></i>
                                                </div>
                                                <div class="social-item__info">
                                                    <h4 class="social-item__title">
                                                        Linked Google Account
                                                    </h4>
                                                    <span class="social-item__caption">
                                                        Your Dousic Media account is currently linked to your Google
                                                        account. </span>
                                                </div>

                                            </div>
                                            <x-ui.button class="social-item__button secondary">Unlink Account</x-ui.button>
                                        </div>
                                        <div class="socials-settings__item social-item">
                                            <div class="social-item__body">
                                                <div class="social-item__icon bg-[#00ACEE]">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </div>
                                                <div class="social-item__info">
                                                    <h4 class="social-item__title">
                                                        Link My Twitter Account
                                                    </h4>
                                                    <span class="social-item__caption">
                                                        Link your Twitter account to your Dousic Media account!
                                                    </span>
                                                </div>

                                            </div>
                                            <x-ui.button class="social-item__button primary">Link Account</x-ui.button>
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
