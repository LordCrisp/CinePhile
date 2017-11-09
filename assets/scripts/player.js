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
    if (player.paused || player.ended) {
        btn.innerHTML = '<i class="material-icons">pause</i>';
        player.play();
    } else {
        btn.innerHTML = '<i class="material-icons">play_arrow</i>';
        player.pause();
    }
}

// Volume control
function setVolume(val) {
    player.volume = val / 100;
}

document.getElementById('player_video').addEventListener('timeupdate', updateProgressBar, false);

function updateProgressBar() {
    var progress = document.getElementById('controls_progress');
    var percentage = Math.floor((100 / player.duration) * player.currentTime);
    progress.value = percentage;
    progress.innerHTML = percentage + '% played';
}