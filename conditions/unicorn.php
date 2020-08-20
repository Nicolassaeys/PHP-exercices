<form> 
    <p>Are you a human, a cat or a unicorn ?</p>
    <input type="radio" name="type" value="human">
    <label for="male">Human</label><br>
    <input type="radio" name="type" value="cat">
    <label for="female">Cat</label><br>
    <input type="radio" name="type" value="unicorn">
    <label for="female">Unicorn</label><br>
    <input type="submit" value="submit">
</form>

<?php

$type = $_GET['type'];

$human = "<img src='https://media0.giphy.com/media/bASySzJH6bsxG/giphy.gif?cid=ecf05e47635fe2484zld2phuf052794gjgg8cj2ec9f94amc&rid=giphy.gif'>";
$cat = '<img src="https://media0.giphy.com/media/LHZyixOnHwDDy/giphy.gif?cid=ecf05e4740bpsb070rvd7g6qajc6acth768p5e5ue8z14t6v&rid=giphy.gif">';
$unicorn = '<img src="https://media0.giphy.com/media/YSkKdo0gHXy3ZD9Cpj/giphy.gif?cid=ecf05e47zbyxqqfhqh2zaue3aqdjpgeux70zur9a2jkdp65s&rid=giphy.gif">';

$input_type = ($type == 'human') ? $type = $human : 
(($type == 'cat') ? $type = $cat : 
((($type == 'unicorn') ? $type = $unicorn : 'other')));

echo $type;


?>


