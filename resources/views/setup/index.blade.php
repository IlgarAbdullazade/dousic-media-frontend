@extends('layouts.auth')

@section('page.title', 'Setup')

@section('auth.content')

    <div class="auth__header">
        <x-auth.logo />
    </div>

    <x-auth.content-block class="auth__content">
        <h2 class="auth-content__title">Setup your account in a few simple steps</h2>
        <p class="auth-content__text">Lorem s Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <x-ui.button-link href="{{ route('my-content') }}" class="auth-content__button secondary !hidden lg:!inline-flex">
            Setup Profile later
        </x-ui.button-link>
    </x-auth.content-block>

    <x-profile.steps step=2 />

    <x-ui.button-link href="{{ route('my-content') }}" class="auth-content__button secondary lg:!hidden">Setup Profile later
    </x-ui.button-link>

    <x-auth.content-socials class="auth__socials" />
@endsection
