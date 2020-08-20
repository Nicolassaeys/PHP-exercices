<form>
<p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="submit" value="submit">
</form>

<?php 

$hello = "Rendez-vous gare du nord à 18h quai 12 je vais te détruire";
$gender = $_GET['gender'];

$is_gender = ($gender == "female") ? $gender = 'male' : $gender = 'female';

if ($gender = 'male'){
    echo $hello;
}
?>