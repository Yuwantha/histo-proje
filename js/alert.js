document.getElementById("load").onload = function() {setTimeout(alertUser, 9000)};
function alertUser(msg) {
var txt;
  if (confirm("I'm trying to autoplay a video to make this page more attractive, Can I continue it!")) {
    document.getElementById('video').src='https://www.youtube.com/embed/htjGEA33qX4?autoplay=1&loop=1'
  }
}
