<!-- www/notes.php -->
<h1>Notes</h1>

<form action="notes.php"  method="POST">
    <p>Enter your notes here:</p>
    <input name="notes" type="text">
    <input type="submit" value="Clicky">
</form>

<?php
    $notes = $_POST["notes"];

    session_start();
    /* unset($_SESSION["notes"]); */

    if (!isset($_SESSION["notes"])) {
        $_SESSION["notes"] = array();
    }
    array_push($_SESSION["notes"], $notes);

    foreach($_SESSION["notes"] as $note){
        echo $note;
        echo "<br>";
    }

?>
