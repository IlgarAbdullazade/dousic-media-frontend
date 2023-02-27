@extends('layouts.base')

@section('content')
    @include('includes.header')

    <x-page>
        <section class="page__purchase purchase">
            <div class="purchase__container">
                <div class="purchase__wrapper">
                    @yield('purchase.content')
                </div>
            </div>
        </section>
    </x-page>
@endsection
