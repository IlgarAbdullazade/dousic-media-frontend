@extends('layouts.base')

@section('content')
    <x-page class="!pt-0">
        <section class="page__auth auth">
            <div class="auth__container">
                <div class="auth__wrapper">
                    @yield('auth.content')
                </div>
            </div>
        </section>
    </x-page>

    @include('includes.footer')
@endsection
