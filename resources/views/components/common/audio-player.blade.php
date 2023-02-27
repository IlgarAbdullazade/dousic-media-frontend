<div {{ $attributes->class(['audio-player']) }}>
    <div class="audio-player__wrapper">
        <div class="audio-player__play-container">
            <div class="audio-player__play-toggle">
                <i class="audio-player__play-icon fa-solid fa-circle-play"></i>
            </div>
        </div>
        <div class="audio-player__time">
            <div class="audio-player__current-time">0:00</div>
            <div class="audio-player__time-divider">/</div>
            <div class="audio-player__length"></div>
        </div>
        <div class="audio-player__timeline">
            <div class="audio-player__progress"></div>
        </div>
        <div class="audio-player__volume-container">
            <div class="audio-player__volume-button">
                <i class="audio-player__volume-icon fa-solid fa-volume-high"></i>
            </div>
            <div class="audio-player__volume-slider">
                <div class="audio-player__volume-percentage"></div>
            </div>
        </div>
    </div>
</div>
