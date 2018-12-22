var img = 0;
function right(target, max){
  img ++;
  if (img > max)
    img = 0;
  document.getElementById(target).src="Resources/"+target+img+".jpg";
}
function left(target, max){
  img --;
  if (img < 0)
    img = max;
  document.getElementById(target).src="Resources/"+target+img+".jpg";
}
