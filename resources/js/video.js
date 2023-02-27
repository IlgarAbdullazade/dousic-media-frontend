const videoBlock = document.querySelector("#my-player");

if (videoBlock) {
    const player = videojs(videoBlock);

    player.controlBar.hide();

    // Create the custom mute button
    const muteButton = document.querySelector(".vjs-mute-button");

    // Create the custom camera button
    const cameraButton = document.querySelector(".vjs-camera-button");

    // Create the custom rotate button
    const rotateButton = document.querySelector(".vjs-rotate-button");

    // Create the custom stream button
    const streamButton = document.querySelector(".vjs-stream-button");

    // Add functionality to the mute button
    muteButton.addEventListener("click", function () {
        if (player.muted()) {
            player.muted(false);
            muteButton.setAttribute("aria-pressed", false);
            muteButton.innerHTML = '<i class="fa-solid fa-microphone"></i>';
        } else {
            player.muted(true);
            muteButton.setAttribute("aria-pressed", true);
            muteButton.innerHTML =
                '<i class="fa-solid fa-microphone-slash"></i>';
        }
    });

    // Add functionality to the camera button
    cameraButton.addEventListener("click", function () {
        if (cameraButton.getAttribute("aria-pressed") === "false") {
            // open camera
            cameraButton.setAttribute("aria-pressed", true);
            cameraButton.innerHTML = '<i class="fa-solid fa-video-slash"></i>';
        } else {
            // close camera
            cameraButton.setAttribute("aria-pressed", false);
            cameraButton.innerHTML = '<i class="fa-solid fa-video"></i>';
        }
    });

    // Add functionality to the rotate button
    rotateButton.addEventListener("click", function () {
        if (rotateButton.getAttribute("aria-pressed") === "false") {
            // rotate camera
            rotateButton.setAttribute("aria-pressed", true);
        } else {
            // rotate camera
            rotateButton.setAttribute("aria-pressed", false);
        }
    });

    // Add functionality to the stream button
    streamButton.addEventListener("click", function () {
        if (streamButton.getAttribute("aria-pressed") === "false") {
            // start streaming
            streamButton.setAttribute("aria-pressed", true);
            streamButton.innerHTML = "End stream";
        } else {
            // end streaming
            streamButton.setAttribute("aria-pressed", false);
            streamButton.innerHTML = "Start stream";
        }
    });
}
