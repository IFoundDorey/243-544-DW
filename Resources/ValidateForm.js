function validate(){
  var w = 0
  var x = document.forms["Form0"]["firstname"].value;
  var y = document.forms["Form0"]["lastname"].value;

  if (x == "") {
    x ++;
    alert("A First Name is requried!");
  }
  if (y == "") {
    x ++;
    alert("A Last Name is Required!");
  }
  if (w >= 1)
    return false;
}
