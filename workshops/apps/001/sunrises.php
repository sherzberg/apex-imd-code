
<h1>Sunrises!</h1>

<a href="sunsets.php">Sunsets</a>


$db = new mysqli("localhost", "root", "", "sunrise_sunset", 3307);

<table>
    <tbody>
        <th>
            <td>Day</td>
            <td>Sunrise Time</td>
        </th>

<?php
    while ($row = $result->fetch_assoc())
?>
        <tr>
            <td><?php echo $row['day']; ?></td>
            <td><?php echo $row['sun_rise_time']; ?></td>
        </tr>

    </tbody>
</table
