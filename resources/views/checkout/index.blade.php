@extends('layouts.purchase')

@section('page.title', 'Checkout')

@section('purchase.content')
    <div class="purchase__header">
        <h1 class="purchase__title">Checkout</h1>
        <ul class="purchase__text max-lg:ml-4 ml-6 list-disc">
            <li class="purchase__text-item"> All file access purchases are final, and cannot be undone.</li>
            <li class="purchase__text-item"> All subscription purchases are final for the duration of a subscription period
                of time defined by the
                content
                creator, but you may cancel a subscription at any time and you will have access to that subscription for
                the
                remainder of the time you have paid for in that period of time.</li>
        </ul>
    </div>
    <div class="purchase__body">
        <x-purchase.item class="purchase__item" checkout='true' />
        <x-purchase.item class="purchase__item" checkout='true' />
        <x-purchase.item class="purchase__item" checkout='true' />
    </div>
    <div class="purchase__footer purchase-footer">
        <div class="purchase-footer__row">
            <div class="purchase-footer__caption">Total</div>
            <div class="purchase-footer__price">3.94</div>
        </div>
        <div class="purchase-footer__actions">
            <x-ui.button-link href="{{ route('cart') }}" class="purchase-footer__button secondary">Edit cart
            </x-ui.button-link>
            <x-ui.button-link class="purchase-footer__button primary">Buy now!</x-ui.button-link>
        </div>
    </div>
@endsection
