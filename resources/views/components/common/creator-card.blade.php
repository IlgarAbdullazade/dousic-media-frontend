<div {{ $attributes->class(['creator-card']) }}>
    <div class="creator-card__wrapper">
        <div class="creator-card__avatar">
            <div class="creator-card__image creator-card-ibg-cover">
                <img src="../images/mock/user.png" alt="user" />
            </div>
        </div>
        <div class="creator-card__plate creator-plate">
            <div class="creator-plate__cover creator-plate-ibg-cover">
                <img src="../images/mock/cover.png" alt="cover" />
            </div>
            <div class="creator-plate__info">
                <div class="creator-plate__data creator-data">
                    <h3 class="creator-data__name">Kashan_Bhatti</h3>
                    <b class="creator-data__caption">A Full-Time Graphic Designer</b>
                    <div class="creator-data__address"> Sheikhupura,
                        Pakistan
                        <i class="fa-solid fa-location-dot ml-1 text-primary"></i>
                    </div>
                </div>
                <div class="creator-plate__interests creator-interests">
                    <b class="creator-interests__title">Interests</b>
                    <div class="creator-interests__content">
                        <x-common.interest-item class="creator-interests__item secondary">
                            <x-slot name='icon'>
                                <i class="fa-solid fa-microphone-lines"></i>
                            </x-slot>
                            Pop music
                        </x-common.interest-item>
                        <x-common.interest-item class="creator-interests__item secondary">
                            <x-slot name='icon'>
                                <i class="fa-solid fa-music"></i>
                            </x-slot>
                            Classic lofi songs
                        </x-common.interest-item>
                        <x-common.interest-item class="creator-interests__item secondary">
                            <x-slot name='icon'>
                                <i class="fa-solid fa-futbol"></i>
                            </x-slot>
                            Sport Football
                        </x-common.interest-item>
                    </div>
                </div>
                <x-ui.button class="creator-plate__button primary"> View Profile</x-ui.button>
            </div>
        </div>
    </div>
</div>
