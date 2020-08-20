



<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.2 Clean your room Exercise, improved

// 2. "Different greetings according to time" Exercise
if (isset($_GET['age'])){
    // Form processing
    $age = $_GET['age'];

    if ( $_GET['age'] < 12 ){
        echo "Hello kiddo!</br>";
    } else if ( $_GET['age'] < 18 ){
        echo "Hello Teenager!</br>";
    } else if ( $_GET['age'] < 115 ){
        echo "Hello Adult!</br>";
    } else {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?</br>";
    }
    

}

$now = date('H'); // How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
if( $now >= 5 AND $now <= 9 ){
    echo "Good morning !";
} else if ( $now > 9 AND $now <= 12 ){
    echo "Good day !";
} else if ( $now > 12 AND $now <= 16 ){
    echo "Good afternoon !";
} else if ( $now > 16 AND $now <= 21 ){
    echo "Good evening !";
} else if ( $now > 21 AND $now < 5 ){
    echo "Good night !";
}

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[3]; 

if( $room_filthiness == $possible_states[0] ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness >= $possible_states[2] ){
	echo "Yuk, Room is dirty : let's clean it up !";

} else {
	echo "<br>Nothing to do, room is neat.";
}

?>

<form>
    <label for="age">How old are you ?</label>
	<input type="" name="age">
</br>
  <p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  
  </br>  
  <p>Do you speak English ?</p>
    <input type="radio" id="language" name="language" value="yes">
    <label for="language">Yes</label><br>
    <input type="radio" id="language" name="language" value="no">
    <label for="language">No</label><br>
  <input type="submit" value="submit">
</form>




<?php 

    $gender = $_GET['gender'];
    $language = $_GET['language'];

    if ($gender == "male" AND $language == "yes"){
        echo "Hello boi";
    } else if ($gender == "male" AND $language == "no"){
        echo "Aloha boi";
    } else if ($gender == "female" AND $language == "yes"){
        echo "Hello gurl";
    } else if ($gender == "female" AND $language == "no"){
        echo "Aloha gurl";
    } else if ($gender == "female"){
        echo "Hi gurl";
    }


?>

<form>
</br>
<hr>
</br>
    <label for="age">How old are you ?</label>
    <input type="" name="age">
</br>
    <p>Please select your gender:</p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="submit" value="submit">
</br>
    
 
</form>
    

<?php 
    
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $default = "Sorry you don't fit the criteria";

    if ( $age >= 21 AND $age <= 40 AND $gender = "female" ){
        $default = "Welcome to the team !";
    }

    echo $default;
?>


<hr>
</br>

<form>
<label for="grade">Enter your grade :</label>
    <input type="" name="grade">
    <input type="submit" value="submit">
</form>

<?php
    $grade = $_GET['grade'];

    if ( $grade < 4){
        echo "This work is really bad. What a dumb kid!";
    } else if ( $grade >= 4 AND $grade <= 9 ){
        echo "This is not sufficient. More studying is required.";
    } else if ( $grade == 10 ){
        echo "barely enough!";
    } else if ( $grade > 10 AND $grade <= 14 ){
        echo "Not bad!";
    } else if ( $grade > 14 AND $grade <=18 ){
        echo "Bravo, bravissimo!";
    } else if ( $grade <=20 ){
        echo "Too good to be true : confront the cheater!";
    }
?>
