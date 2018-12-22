<!DOCTYPE html>

<style>

legend {
    background-color: #000;
    color: #fff;
    padding: 3px 6px;
}

</style>

<link rel="stylesheet" type="text/css" href="../Resources/background.css">

<form method="post" action="./action.php">
  <fieldset>
    <legend>LED control</legend>
    <div>
      <input type="radio" id="ON" name="led" value="ON" checked />
      <label for="ON">ON</label>
    </div>
    <div>
      <input type="radio" id="OFF" name="led" value="OFF" />
      <label for="OFF">OFF</label>
    </div>
  </fieldset>
  <br></br>
  <input type="submit" value="Submit"></input>
</form>

