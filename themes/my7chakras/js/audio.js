let music = new Audio();
function init() {
  music.preload = 'auto';
  music.load();

  music.addEventListener('ended', function () {
    music.currentTime = 0;
    music.play();
  }, false);
}

function play() {
  music.loop = true;
  music.play();
}

function stop() {
  music.pause();
  music.currentTime = 0;
}

init();