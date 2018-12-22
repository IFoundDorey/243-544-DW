<!DOCTYPE html>
<html>
<title>
  The Rock Locker
</title>

<script src=./Resources/getRandomColor.js></script>
<script src=./Resources/colorChange.js></script>

<link rel="stylesheet" type="text/css" href="./Resources/tables.css">
<link rel="stylesheet" type="text/css" href="./Resources/background.css">


<head>
  <h1>
    Welcome!
  </h1>

</head>

<body>
  <table>
    <tr>
      <th>Band</th>
      <th>Genre</th>
      <th>Country</th>
      <th>Youtube</th>
    </tr>
    <tr>
      <th><a href=./Ghost.php>Ghost</a></th>
      <th>Doom metal, Prog rock</th>
      <th>Sweden</th>
      <th><a href=https://www.youtube.com/user/thebandGhost1 > Rock on!</th>
    </tr>
    <tr>
      <th><a href=./BABYMETAL.php>BABYMETAL</th>
      <th>Kawaii metal, Power metal</th>
      <th>Japan</th>
      <th><a href=https://www.youtube.com/user/BABYMETALofficial>Rock on!</th>
    </tr>
    <tr>
      <th><a href=./Volbeat.php>Volbeat</th>
      <th>Psychobilly, Groove metal</th>
      <th>Denmark</th>
      <th><a href=https://www.youtube.com/channel/UCgj23Szu6ZYEvxiJCFjQ_7g > Rock on!</th>
    </tr>
  </table>
  <br>
  <p>
    Click
    <a href=./form.php>here</a>
    to join the site's mailing list.
  </p>
  <p>
  Click
  <a href=./Lab_11/LED.php>here</a>
  to turn an LED on or off.
  </p>
  <button onclick = "colorChange('punchLine')" >For those about to rock...</button>
  <h1 id="punchLine" style= opacity:0; >We Salute You!</h1>
  <p>Your user agent is:</p>

  <?php
    echo $_SERVER['HTTP_USER_AGENT'];
    $browser = get_browser();
    print_r($browser);
  ?>

</body>
</html>
