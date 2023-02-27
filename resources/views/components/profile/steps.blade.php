@props(['step' => 1])

<x-auth.form-card class="auth__form">

    <div class="auth-form__header">

        <h2 class="auth-form__title">Profile Settings</h2>

        <x-ui.stepper class="auth-form__stepper" />

    </div>

    <div class="auth-form__body">
        @if ($step == 1)
            <x-forms.form class="form space-y-7" action="#" autocomplete="off">

                <div class="form__group form-group">
                    <x-forms.input class="form-group__input" type="text" id="moniker" name="moniker"
                        placeholder="Profile Moniker">

                        <x-slot name="popover">
                            <x-ui.popover>
                                An account email is required.

                                Please use the email address used when creating your Dousic Media account.
                            </x-ui.popover>
                        </x-slot>
                    </x-forms.input>
                </div>

                <div class="form__group form-group">
                    <x-forms.input class="form-group__input" type="text" id="slug" name="slug"
                        placeholder="Profile Slug">

                        <x-slot name="popover">
                            <x-ui.popover>
                                An account email is required.

                                Please use the email address used when creating your Dousic Media account.
                            </x-ui.popover>
                        </x-slot>
                    </x-forms.input>
                </div>

                <div class="form__group form-group">
                    <x-forms.input class="form-group__input" type="text" id="profession" name="profession"
                        placeholder="Profile Profession">

                        <x-slot name="popover">
                            <x-ui.popover>
                                An account email is required.

                                Please use the email address used when creating your Dousic Media account.
                            </x-ui.popover>
                        </x-slot>
                    </x-forms.input>
                </div>

                <div class="form__group form-group">
                    <x-forms.input class="form-group__input" type="text" id="location" name="location"
                        placeholder="Profile Location">

                        <x-slot name="popover">
                            <x-ui.popover>
                                An account email is required.

                                Please use the email address used when creating your Dousic Media account.
                            </x-ui.popover>
                        </x-slot>
                    </x-forms.input>
                </div>

                <div class="form__actions">

                    <x-ui.button-link href="" class="secondary">
                        Skip
                    </x-ui.button-link>
                    <x-ui.button class="primary" type="submit">Continue</x-ui.button>

                </div>

            </x-forms.form>
        @elseif ($step == 2)
            <x-forms.form class="form max-sm:space-y-4 space-y-7" action="#" autocomplete="off">

                <div class="form__group">
                    <div class="form__uploader">
                        <x-forms.upload-file>
                            <x-slot name='info'>
                                <div class="info-line">
                                    <span class="info-line__text">Profile Cover Image</span>
                                    <div class="info-line__icon">
                                        <x-ui.popover>
                                            An account email is required.

                                            Please use the email address used when creating your Dousic Media account.
                                        </x-ui.popover>
                                    </div>
                                </div>
                            </x-slot>
                        </x-forms.upload-file>
                    </div>
                </div>

                <div class="form__group form-group">
                    <x-forms.input class="form-group__input" type="text" id="coverAlt" name="cover_alt"
                        placeholder="Cover Image Alt Text">

                        <x-slot name="popover">
                            <x-ui.popover>
                                An account email is required.

                                Please use the email address used when creating your Dousic Media account.
                            </x-ui.popover>
                        </x-slot>
                    </x-forms.input>
                </div>

                <div class="form__actions">

                    <x-ui.button-link href="" class="secondary max-lg:w-full max-lg:min-w-0">
                        Skip
                    </x-ui.button-link>
                    <x-ui.button class="primary max-lg:w-full max-lg:min-w-0" type="submit">Continue</x-ui.button>

                </div>

            </x-forms.form>
        @else
            <x-forms.form class="form space-y-7" action="#" autocomplete="off">

                <div class="form__group">
                    <x-forms.upload-file>
                        <x-slot name='info'>
                            <div class="info-line">
                                <span class="info-line__text">Profile Logo Image</span>
                                <div class="info-line__icon">
                                    <x-ui.popover>
                                        An account email is required.

                                        Please use the email address used when creating your Dousic Media account.
                                    </x-ui.popover>
                                </div>
                            </div>
                        </x-slot>
                    </x-forms.upload-file>
                </div>

                <div class="form__group form-group">
                    <x-forms.input class="form-group__input" type="text" id="logoAlt" name="logo_alt"
                        placeholder="Logo Image Alt Text">

                        <x-slot name="popover">
                            <x-ui.popover>
                                An account email is required.

                                Please use the email address used when creating your Dousic Media account.
                            </x-ui.popover>
                        </x-slot>
                    </x-forms.input>
                </div>

                <div class="form__actions">

                    <x-ui.button-link href="" class="secondary">
                        Skip
                    </x-ui.button-link>
                    <x-ui.button class="primary" type="submit">Continue</x-ui.button>

                </div>

            </x-forms.form>
        @endif


    </div>

</x-auth.form-card>
