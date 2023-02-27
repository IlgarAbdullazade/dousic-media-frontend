<div {{ $attributes->class(['video']) }}>
    <video id="my-player" class="video-js" controls poster="../images/mock/stream-poster.jpg" live>
        <source src="rtmp://flash.example.com:1935/live/stream" type="application/x-mpegURL">
    </video>
    <div class="vjs-live-tag" aria-hidden="true">LIVE<i class="fa-solid fa-tower-broadcast ml-1"></i>
    </div>
    <div class="vjs-my-control-bar" role="group" aria-label="Player">
        <div class="vjs-my-control-bar-row">
            <button class="vjs-my-control-button vjs-mute-button" aria-pressed="false" aria-label="Mute/Unmute"><i
                    class="fa-solid fa-microphone"></i></button>
            <button class="vjs-my-control-button vjs-camera-button" aria-pressed="false"
                aria-label="Open/Close Camera"><i class="fa-solid fa-video"></i></button>
            <button class="vjs-my-control-button vjs-rotate-button" aria-pressed="false" aria-label="Rotate Camera"><i
                    class="fa-solid fa-camera-rotate"></i></button>
        </div>
        <x-ui.button class="vjs-stream-button primary" aria-pressed="false" aria-label="Start/End streaming">End Stream
        </x-ui.button>
    </div>
</div>
