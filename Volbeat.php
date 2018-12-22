<!DOCTYPE html>

<title>
  Volbeat
</title>

<style>
  .fixed{
    position: fixed;
    top: 0;
    right: 0;
  }
  .align img{
    vertical-align: middle;
    cursor:pointer;
  }
  body{
    color: rgb(255, 0, 0);
    text-align: center;
  }
  .image{
    width: 450px;
    height: 300px;
  }
</style>


<link rel="stylesheet" type="text/css" href="./Resources/background.css">

<script src="Resources/PictureControls.js"></script>

<h1>
  Volbeat
</h1>

<iframe class=fixed src="https://open.spotify.com/embed/user/spotify/playlist/37i9dQZF1DWYrXu9rm1zUZ" width="400" height="500" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>

  <h2>
    Pictures
  </h2>
  <div class="align">
    <img src="Resources/Left_arrow.png" onclick="left('Volbeat', 3)" height="84" width="84" />
    <img class=image id="Volbeat" src="Resources/Volbeat0.jpg"/>
    <img src="Resources/Right_arrow.png" onclick="right('Volbeat', 3)" height="84" width="84"/>
  </div>
</body>

