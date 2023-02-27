const audioPlayer = document.querySelector(".audio-player");

if (audioPlayer) {
    const audioSrc = audioPlayer.getAttribute("data-audio-src");
    if (audioSrc) {
        const audio = new Audio(audioSrc);

        const volumeEl = audioPlayer.querySelector(
            ".audio-player__volume-icon"
        );
        if (audio.muted) {
            volumeEl.classList.remove("fa-volume-high");
            volumeEl.classList.add("fa-volume-xmark");
        } else {
            volumeEl.classList.add("fa-volume-high");
            volumeEl.classList.remove("fa-volume-xmark");
        }
        audio.addEventListener(
            "loadeddata",
            () => {
                audioPlayer.querySelector(".audio-player__length").textContent =
                    getTimeCodeFromNum(audio.duration);
                audio.volume = 1;
            },
            false
        );

        const timeline = audioPlayer.querySelector(".audio-player__timeline");
        timeline.addEventListener(
            "click",
            (e) => {
                const timelineWidth = window.getComputedStyle(timeline).width;
                const timeToSeek =
                    (e.offsetX / parseInt(timelineWidth)) * audio.duration;
                audio.currentTime = timeToSeek;
            },
            false
        );

        const volumeSlider = audioPlayer.querySelector(
            ".audio-player__volume-slider"
        );
        volumeSlider.addEventListener(
            "click",
            (e) => {
                const sliderHeight =
                    window.getComputedStyle(volumeSlider).height;
                const newVolume = e.offsetY / parseInt(sliderHeight);
                audio.volume = newVolume;
                audioPlayer.querySelector(
                    ".audio-player__volume-percentage"
                ).style.height = newVolume * 100 + "%";

                audio.muted = newVolume * 100 < 5;
                handleMute();
            },
            false
        );

        setInterval(() => {
            const progressBar = audioPlayer.querySelector(
                ".audio-player__progress"
            );
            progressBar.style.width =
                (audio.currentTime / audio.duration) * 100 + "%";
            audioPlayer.querySelector(
                ".audio-player__current-time"
            ).textContent = getTimeCodeFromNum(audio.currentTime);
        }, 500);

        const playBtn = audioPlayer.querySelector(".audio-player__play-toggle");
        const playIcon = audioPlayer.querySelector(".audio-player__play-icon");

        playBtn.addEventListener(
            "click",
            () => {
                if (audio.paused) {
                    playIcon.classList.remove("fa-circle-play");
                    playIcon.classList.add("fa-circle-pause");
                    audio.play();
                } else {
                    playIcon.classList.add("fa-circle-play");
                    playIcon.classList.remove("fa-circle-pause");
                    audio.pause();
                }
            },
            false
        );

        audio.addEventListener("ended", function () {
            audio.currentTime = 0;
            playIcon.classList.add("fa-circle-play");
            playIcon.classList.remove("fa-circle-pause");
        });

        audioPlayer
            .querySelector(".audio-player__volume-button")
            .addEventListener("click", () => {
                audio.muted = !audio.muted;
                handleMute();
            });

        function handleMute() {
            const volumeEl = audioPlayer.querySelector(
                ".audio-player__volume-icon"
            );
            if (audio.muted) {
                volumeEl.classList.remove("fa-volume-high");
                volumeEl.classList.add("fa-volume-xmark");
                audioPlayer.querySelector(
                    ".audio-player__volume-percentage"
                ).style.height = 0;
            } else {
                volumeEl.classList.add("fa-volume-high");
                volumeEl.classList.remove("fa-volume-xmark");
                audioPlayer.querySelector(
                    ".audio-player__volume-percentage"
                ).style.height = audio.volume * 100 + "%";
            }
        }
    }
}

function getTimeCodeFromNum(num) {
    let seconds = parseInt(num);
    let minutes = parseInt(seconds / 60);
    seconds -= minutes * 60;
    const hours = parseInt(minutes / 60);
    minutes -= hours * 60;

    if (hours === 0) return `${minutes}:${String(seconds % 60).padStart(2, 0)}`;
    return `${String(hours).padStart(2, 0)}:${minutes}:${String(
        seconds % 60
    ).padStart(2, 0)}`;
}
