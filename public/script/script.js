var myAudio = document.getElementById("myAudio");
var isPlaying = false;

var audio = document.getElementById("myAudio");
var button = document.getElementById("audioButton");

function playOrStopAudio() {
    if (audio.paused) {
        audio.play();
        button.innerHTML = "Stop Audio";
    } else {
        audio.pause();
        button.innerHTML = "Play Audio";
    }
}
