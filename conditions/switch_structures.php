<form>
<label for="grade">Enter your grade :</label>
    <input type="number" name="grade">
    <input type="submit" value="submit">
</form>

<?php 

if (isset($_GET['grade'])) {
    $grade = $_GET['grade'];

    switch ($grade) {
        case ($grade < 5):
            echo "This work is really bad. What a dumb kid! ";
        break;

        case ($grade >= 5 && $grade <= 9):
            echo "This is not sufficient. More studying is required.";
        break;

        case ($grade == 10):
            echo "barely enough!";
        break;

        case ($grade >= 11 && $grade < 15):
            echo "Not bad!";
        break;
            
        case ($grade >= 15 && $grade < 18):
            echo "Bravo, bravissimo!";
        break;

        case ($grade >= 18 && $grade <= 20):
            echo "Too good to be true : confront the cheater!";
        break;
        
    }
}
    ?>