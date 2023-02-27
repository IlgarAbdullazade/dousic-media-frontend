<div {{ $attributes->class(['profile-sidebar']) }}>
    <div class="profile-sidebar__wrapper">
        <div class="profile-sidebar__user sidebar-user">
            <div class="sidebar-user__wrapper">
                <div class="sidebar-user__info user-info">
                    <div class="user-info__wrapper">
                        <div class="user-info__image user-info-ibg-cover">
                            <img src="../images/mock/user.png" alt="User" />
                            <x-profile.image-upload class="opacity-0">Upload Profile Logo
                            </x-profile.image-upload>
                        </div>
                        <h3 class="user-info__name">Kashan_Bhatti</h3>
                        <b class="user-info__caption">A Full-Time Graphic Designer</b>

                        {{-- <button class="text-secondary max-sm:text-xs font-bold" type="button">Edit Profile
                            Profession
                            <i class="fa-solid fa-pen ml-1"></i></button> --}}

                        <div class="user-info__slug"> <b>Profile Slug:</b> <span
                                class="text-secondary mr-1">46ba3046-46ec-4257a a02-70bd666dd759 </span>

                            <button type="button"> <i class="fa-solid fa-copy text-primary"></i></button>
                        </div>
                        <div class="user-info__address"> <span class="text-secondary mr-1">Sheikhupura,
                                Pakistan
                            </span>
                            <button type="button"> <i class="fa-solid fa-location-dot text-primary"></i></button>
                        </div>

                        {{-- <button class="text-secondary max-sm:text-xs text-sm" type="button">Edit your Location
                            </span><i class="fa-solid fa-pen ml-1"></i></button> --}}

                    </div>
                </div>
                <div class="sidebar-user__description user-description">
                    <b class="user-description__title">About me</b>
                    <p class="user-description__text">
                        Starting from editing photos for my social handles to delivering digital products
                        all over the world. I learn graphics and connected to this field for years. I
                        started it as a hobby and now it’s my full-time work.
                    </p>
                </div>
                <div class="sidebar-user__interests user-interests">
                    <b class="user-interests__title">Interests</b>
                    <div class="user-interests__content">
                        <x-common.interest-item class="user-interests__item">
                            <x-slot name='icon'>
                                <i class="fa-solid fa-microphone-lines"></i>
                            </x-slot>
                            Popmusic
                        </x-common.interest-item>
                        <x-common.interest-item class="user-interests__item">
                            <x-slot name='icon'>
                                <i class="fa-solid fa-music"></i>
                            </x-slot>
                            Classic lofi songs
                        </x-common.interest-item>
                        <x-common.interest-item class="user-interests__item">
                            <x-slot name='icon'>
                                <i class="fa-solid fa-futbol"></i>
                            </x-slot>
                            Sport Football
                        </x-common.interest-item>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
