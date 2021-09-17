var InitDemo() = function () {
  var canvas = document.getElementById('game-surface');
  var gl = canvas.getContext('webgl');
  if (!gl) {
    console.log('Using experimental-webgl');
    gl = canvas.getContext('experimental-webgl');
  }
  if (!gl) {
    alert = ('NO WEBGL ON YOUR BROWSER BROKE BOI');
  }
  
};
