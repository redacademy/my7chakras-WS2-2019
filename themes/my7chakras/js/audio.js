const audio = document.getElementsByTagName("audio")[0]
const playButton = document.getElementById("play")
const stopButton = document.getElementById("stop")

playButton.addEventListener('click', () => {
  audio.play()
})

stopButton.addEventListener('click', () => {
  audio.pause()
})