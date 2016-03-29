<h1>Add a new Sunrise/Sunset</h1>


<form>

    <label>Day</label>
    <input name="day">

    <label>Sunrise Time</label>
    <input name="sunrise_time">

    <label>Sunset Time</label>
    <input name="sunset_time">

</form>

<?php
    $day = $_POST['day'];
    $sunrise = $_POST['sunrise_time'];
    $sunset = $_POST['sunset_time'];

    echo "You added ($day, $sunrise, $sunset)";
?>
