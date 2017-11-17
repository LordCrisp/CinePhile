document.addEventListener('DOMContentLoaded', function () {
    initializeMediaPlayer();
}, false);

function initializeMediaPlayer() {
    player = document.getElementById('player_video');
    player.controls = false;
}

// Toggle play/pause
function togglePlayPause() {
    var btn = document.getElementById('controls_play-pause');
    var controls = document.getElementById('controls');
    if (player.paused || player.ended) {
        btn.innerHTML = '<i class="material-icons">pause</i>';
        controls.classList.add('fades');
        player.play();
    } else {
        btn.innerHTML = '<i class="material-icons">play_arrow</i>';
        controls.classList.remove('fades');
        player.pause();
    }
}

// Volume control
function setVolume(val) {
    player.volume = val / 100;
}
function toggleMute() {
    var btnMute = document.getElementById('controls_mute');
    if (player.muted === false) {
        player.muted = true;
        btnMute.innerHTML = '<i class="material-icons">volume_off</i>';
    } else {
        player.muted = false;
        btnMute.innerHTML = '<i class="material-icons">volume_up</i>';
    }
}

// Progress bar
document.getElementById('player_video').addEventListener('timeupdate', updateProgressBar, false);

function updateProgressBar() {
    var progress = document.getElementById('controls_progress');
    var percentage = Math.floor((100 / player.duration) * player.currentTime);
    progress.value = percentage;
    progress.innerHTML = percentage + '% played';
}

// Toggle fullscreen
function toggleFullscreen(elem) {
    elem = elem || document.documentElement;
    if (!document.fullscreenElement && !document.mozFullScreenElement &&
        !document.webkitFullscreenElement && !document.msFullscreenElement) {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
            elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    }
}