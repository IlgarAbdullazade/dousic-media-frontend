(function () {
    "use strict";

    const topPodcasts = document.querySelector("#topPodcasts");
    const podcasts = document.querySelector("#podcasts");

    let topPodcastsSlider;
    let podcastsSlider;

    const breakpoint = window.matchMedia("(min-width:1024px)");

    const breakpointChecker = function () {
        if (breakpoint.matches === true) {
            if (topPodcastsSlider !== undefined) topPodcastsSlider.destroy();
            if (podcastsSlider !== undefined) podcastsSlider.destroy();
        } else if (breakpoint.matches === false) {
            enableTopPodcastsSlider(topPodcasts);
            enablePodcastsSlider(podcasts);
        }
    };

    const enableTopPodcastsSlider = function (block) {
        topPodcastsSlider = new Swiper(block, {
            slidesPerView: 2.2,
            spaceBetween: 12,
        });
    };

    const enablePodcastsSlider = function (block) {
        podcastsSlider = new Swiper(block, {
            slidesPerView: 2.2,
            spaceBetween: 12,
        });
    };

    if (topPodcasts && podcasts) {
        breakpoint.addEventListener("change", breakpointChecker);
        breakpointChecker();
    }
})();
