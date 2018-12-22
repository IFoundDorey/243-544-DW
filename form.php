<!DOCTYPE html>

<style>
legend {
    background-color: #000;
    color: #fff;
    padding: 3px 6px;
}
</style>

<script src="Resources/ValidateForm.js"></script>

<link rel="stylesheet" type="text/css" href="./Resources/background.css">

<form name="Form0" action="./action.php" onsubmit="return validate()" method="post">
    <fieldset>
        <legend>Basic Info</legend>
        <div>
          First Name: <input type="text" name="firstname">
        <br></br>
          Last Name: <input type="text" name="lastname">
        <br></br>
          E-mail: <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
        </div>
    </fieldset>
    <fieldset>
        <legend>Select your favourite band</legend>
        <div>
            <input type="radio" id="BABYMETAL" name="band" value="BABYMETAL" checked />
            <label for="BABYMETAL">BABYMETAL</label>
        </div>
        <div>
            <input type="radio" id="Ghost" name="band" value="Ghost" />
            <label for="Ghost">Ghost</label>
        </div>
        <div>
            <input type="radio" id="Volbeat" name="band" value="Volbeat" />
            <label for="Volbeat">Volbeat</label>
        </div>
    </fieldset>
    <fieldset>
      <legend>What base genre do you prefer more?</legend>
      <label for="base">Folk/Blues</label>
      <input type="range" id="start" name="base" min="0" max="100" step="10" value="50"/>
      <label for="base">Metal</label>
    </fieldset>
    <input type="submit" value="Submit">
</form>

