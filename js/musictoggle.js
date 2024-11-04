function toggleMusic() {
  const music = document.getElementById("background-music");
  const playPauseButton = document.getElementById("play-pause-button");

  if (music.paused) {
    music.play();
    playPauseButton.src = "image/stop.png";
  } else {
    music.pause();
    playPauseButton.src = "image/play.png";
  }
}
