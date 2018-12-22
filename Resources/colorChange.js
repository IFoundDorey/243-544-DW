function colorChange(target){
  document.getElementById(target).style.opacity = 100;
  document.getElementById(target).style.color = getRandomColor();
}

function getRandomColor(){
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}
