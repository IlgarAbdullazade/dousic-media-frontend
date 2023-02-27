@extends('layouts.base')

@section('content')
    @include('includes.header')

    <x-page>
        <section class="page__settings settings">
            <div class="settings__container">
                <div class="settings__wrapper">
                    @yield('settings.content')
                </div>
            </div>
        </section>
    </x-page>
@endsection
