<!DOCTYPE html>

<title>
  Ghost
</title>

<style>
  .align img{
    vertical-align: middle;
    cursor:pointer;
  }
  body{
    color: rgb(102, 255, 153);
    text-align: center;
  }
  .image{
    width: 450px;
    height: 300px;
  }
</style>

<link rel="stylesheet" type="text/css" href="./Resources/background.css">

<script src="Resources/PictureControls.js"></script>

<body>
  <h1>
    Ghost
  </h1>
  <h2>
    Pictures
  </h2>
  <div class="align">
    <img src="Resources/Left_arrow.png" onclick="left('Ghost', 3)" height="84" width="84" />
    <img class=image id="Ghost" src="Resources/Ghost0.jpg"/>
    <img src="Resources/Right_arrow.png" onclick="right('Ghost', 3)" height="84" width="84"/>
  </div>
</body>
