<!-- www/game.php -->

<form action="game.php" method="POST">
    <label for="guess">Enter a guess</label>
    <input name="guess">
    <input type="submit">
</form>

<?php
    $n = rand(1, 100);

    if (isset($_POST["guess"])) {
        if ($_POST["guess"] == $n) {
            echo "YEAH!";
        } else {
            echo "GO AWAY";
            echo "the right answer was: " .$n;
        }
    }
?>
