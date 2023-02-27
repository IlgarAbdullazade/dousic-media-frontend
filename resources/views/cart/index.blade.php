@extends('layouts.purchase')

@section('page.title', 'Cart')

@section('purchase.content')
    <div class="purchase__header">
        <h1 class="purchase__title">Cart</h1>
    </div>
    <div class="purchase__body">
        <x-purchase.item class="purchase__item" />
        <x-purchase.item class="purchase__item" />
        <x-purchase.item class="purchase__item" />
    </div>
    <div class="purchase__footer purchase-footer">
        <div class="purchase-footer__row">
            <div class="purchase-footer__caption">Total</div>
            <div class="purchase-footer__price">3.94</div>
        </div>
        <div class="purchase-footer__actions">
            <x-ui.button-link href="{{ route('checkout') }}" class="purchase-footer__button primary">Go to checkout
            </x-ui.button-link>
        </div>
    </div>
@endsection
