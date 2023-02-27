@extends('layouts.base')

@section('page.title', 'Wallet')

@section('content')
    @include('includes.header')

    <x-page>
        <section class="page__wallet wallet">
            <div class="wallet__container">
                <div class="wallet__wrapper">
                    <div class="wallet__header">
                        <h1 class="wallet__title">Your wallet</h1>
                        <div class="wallet__actions">
                            <x-ui.button-link class="wallet__button primary">Add balance</x-ui.button-link>
                            <x-ui.button class="wallet__button primary" data-popup='#withdrawPopup'>Withdraw</x-ui.button>
                        </div>
                    </div>
                    <div class="wallet__body">
                        <div class="wallet__sidebar wallet-sidebar">
                            <div class="wallet-sidebar__wrapper">
                                <div class="wallet-sidebar__item wallet-sidebar-item">
                                    <div class="wallet-sidebar-item__image purchase-item-ibg-contain">
                                        <img src="../images/wallet/coins.png" alt="coins" />
                                    </div>
                                    <div class="wallet-sidebar-item__info">
                                        <div class="wallet-sidebar-item__name">Current Coins</div>
                                        <div class="wallet-sidebar-item__value">7565</div>
                                    </div>
                                </div>
                                <div class="wallet-sidebar__item wallet-sidebar-item">
                                    <div class="wallet-sidebar-item__image purchase-item-ibg-contain">
                                        <img src="../images/wallet/safe.png" alt="safe" />
                                    </div>
                                    <div class="wallet-sidebar-item__info">
                                        <div class="wallet-sidebar-item__name">Coins Withdraw</div>
                                        <div class="wallet-sidebar-item__value">12373</div>
                                    </div>
                                </div>
                                <div class="wallet-sidebar__item wallet-sidebar-item">
                                    <div class="wallet-sidebar-item__image purchase-item-ibg-contain">
                                        <img src="../images/wallet/chart.png" alt="chart" />
                                    </div>
                                    <div class="wallet-sidebar-item__info">
                                        <div class="wallet-sidebar-item__name">Total Sales</div>
                                        <div class="wallet-sidebar-item__value">365</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="wallet__content wallet-content">
                            <div class="wallet-content__wrapper">
                                <h3 class="wallet-content__title">History</h3>
                                <div class="wallet-content__column">
                                    <div class="wallet-content__item history-item">
                                        <div class="history-item__wrapper">
                                            <div class="history-item__cell">
                                                <div class="history-user">
                                                    <div class="history-user__image history-user-ibg-cover">
                                                        <img src="../images/mock/user.png" alt="user" />
                                                    </div>
                                                    <div class="history-user__name">
                                                        Creative Sparks
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12749648365986526</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">Payment for XYZ</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12/17/2021</span>
                                                <b class="text-primary">2136</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wallet-content__item history-item">
                                        <div class="history-item__wrapper">
                                            <div class="history-item__cell">
                                                <div class="history-user">
                                                    <div class="history-user__image history-user-ibg-cover">
                                                        <img src="../images/mock/user.png" alt="user" />
                                                    </div>
                                                    <div class="history-user__name">
                                                        Creative Sparks
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12749648365986526</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">Payment for XYZ</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12/17/2021</span>
                                                <b class="text-primary">2136</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wallet-content__item history-item">
                                        <div class="history-item__wrapper">
                                            <div class="history-item__cell">
                                                <div class="history-user">
                                                    <div class="history-user__image history-user-ibg-cover">
                                                        <img src="../images/mock/user.png" alt="user" />
                                                    </div>
                                                    <div class="history-user__name">
                                                        Creative Sparks
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12749648365986526</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">Payment for XYZ</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12/17/2021</span>
                                                <b class="text-primary">2136</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wallet-content__item history-item">
                                        <div class="history-item__wrapper">
                                            <div class="history-item__cell">
                                                <div class="history-user">
                                                    <div class="history-user__image history-user-ibg-cover">
                                                        <img src="../images/mock/user.png" alt="user" />
                                                    </div>
                                                    <div class="history-user__name">
                                                        Creative Sparks
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12749648365986526</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">Payment for XYZ</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12/17/2021</span>
                                                <b class="text-primary">2136</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wallet-content__item history-item">
                                        <div class="history-item__wrapper">
                                            <div class="history-item__cell">
                                                <div class="history-user">
                                                    <div class="history-user__image history-user-ibg-cover">
                                                        <img src="../images/mock/user.png" alt="user" />
                                                    </div>
                                                    <div class="history-user__name">
                                                        Creative Sparks
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12749648365986526</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">Payment for XYZ</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12/17/2021</span>
                                                <b class="text-primary">2136</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wallet-content__item history-item">
                                        <div class="history-item__wrapper">
                                            <div class="history-item__cell">
                                                <div class="history-user">
                                                    <div class="history-user__image history-user-ibg-cover">
                                                        <img src="../images/mock/user.png" alt="user" />
                                                    </div>
                                                    <div class="history-user__name">
                                                        Creative Sparks
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12749648365986526</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">Payment for XYZ</span>
                                            </div>
                                            <div class="history-item__cell">
                                                <span class="text-secondary">12/17/2021</span>
                                                <b class="text-primary">2136</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-page>

    <div id="withdrawPopup" aria-hidden="true" class="popup">
        <div class="popup__wrapper">
            <div class="popup__content">
                <div class="popup__header">
                    <b class="popup__title">
                        Redeem
                    </b>
                    <button data-close type="button" class="popup__close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </button>
                </div>
                <div class="popup__body">
                    <div class="redeem-popup">
                        <x-forms.form class="redeem-popup__form redeem-popup-form" action="#" autocomplete="off">
                            <div class="redeem-popup-form__wrapper">
                                <div class="redeem-popup-form__row">
                                    <div class="redeem-popup-form__col">
                                        <div class="redeem-popup-form__group form-group">
                                            <x-forms.input class="form-group__input" type="text" id="coin"
                                                name="coin" placeholder="Coins">
                                                <x-slot name="label">
                                                    <label class="form-group__label" for="coin">Dousic coin</label>
                                                </x-slot>
                                            </x-forms.input>
                                        </div>
                                    </div>
                                    <div class="redeem-popup-form__icons">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </div>
                                    <div class="redeem-popup-form__col">
                                        <div class="redeem-popup-form__group form-group">
                                            <x-forms.input class="form-group__input" type="text" id="usd"
                                                name="usd" placeholder="USD">
                                                <x-slot name="label">
                                                    <label class="form-group__label" for="coin">USD</label>
                                                </x-slot>
                                            </x-forms.input>
                                        </div>
                                    </div>
                                </div>
                                <x-ui.button class="redeem-popup-form__button primary">
                                    Withdraw
                                </x-ui.button>
                            </div>

                        </x-forms.form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
