<header class="header">
    <div class="header__wrapper">
        <div class="header__container">
            <div class="header__body">
                <div class="header__logo logo">
                    <a href="{{ route('my-content') }}" class="logo__link">
                        <div class="logo__image logo-ibg-contain">
                            <img src="../images/logo.png" alt="Dousic Media Group LLC" />
                        </div>
                        <strong class="logo__name">Dousic</strong>
                    </a>
                </div>
                <div id="menu-default" class="header__menu menu hidden">
                    <div class="menu__wrapper">
                        <div class="menu__col">
                            <div class="menu__search search-menu">
                                <div class="search-menu__wrapper">
                                    <form class="search-menu__form">
                                        <input class="search-menu__input input" type="text" placeholder="Search" />
                                        <button type="submit" class="search-menu__button">
                                            <i class="search-menu__icon fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="menu__col">
                            <div class="menu__nav nav-menu">
                                <nav class="nav-menu__body">
                                    <ul class="nav-menu__list">
                                        <li class="nav-menu__item">
                                            <a href="{{ route('marketplace') }}" class="nav-menu__link">Marketplace
                                            </a>
                                        </li>
                                        <li class="nav-menu__item">
                                            <a href="" class="nav-menu__link">Help
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="menu__actions actions-menu">
                                <a href="{{ route('wallet') }}" class="actions-menu__item">
                                    <i class="fa-solid fa-wallet"></i>
                                </a>
                                <a href="{{ route('cart') }}" class="actions-menu__item">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                    <span class="actions-menu__badge">3</span>
                                </a>
                                <button id="theme-toggle" class="actions-menu__item theme-switcher">
                                    <div class="theme-switcher__icon hidden" id="theme-toggle-dark-icon">
                                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="theme-switcher__icon hidden" id="theme-toggle-light-icon">
                                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                fill-rule="evenodd" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div @click.away="open = false" x-data="{ open: false }" class="menu__user user-menu">
                                <button @click="open = !open" type="button"
                                    class="user-menu__wrapper user-menu-ibg-cover">
                                    <div class="user-menu__image user-menu-ibg-cover">
                                        <img src="../images/mock/user.png" alt="Kashan_Bhatti" />
                                    </div>
                                    <strong class="user-menu__name">Kashan_Bhatti</strong>
                                </button>
                                <div class="user-menu__dropdown user-dropdown" x-show="open" style="display: none"
                                    x-transition:enter="transition"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95">
                                    <ul class="user-dropdown__list">
                                        <li class="user-dropdown__item">
                                            <a href="#" class="user-dropdown__link">My Account</a>
                                        </li>
                                        <li class="user-dropdown__item">
                                            <a href="#" class="user-dropdown__link">My Wishlist</a>
                                        </li>
                                        <li class="user-dropdown__item">
                                            <a href="#" class="user-dropdown__link">Messages</a>
                                        </li>
                                        <li class="user-dropdown__item">
                                            <a href="#" class="user-dropdown__link">Notifications</a>
                                        </li>
                                        <li class="user-dropdown__item">
                                            <a href="#" class="user-dropdown__link">Sign Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-collapse-toggle="menu-default" type="button" class="icon-menu">
                    <div class="icon-menu__wrapper">
                        <span class="w-3/4"></span>
                        <span class="w-full"></span>
                        <span class="w-1/2"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</header>
