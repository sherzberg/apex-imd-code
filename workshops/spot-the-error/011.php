<?php

$myVar = array(
    array("name"=> "John", "phone" => "555-999-1010"),
    array("name"=> "Steve", "phone" => "555-999-1011"),
    array("name"=> "Yolanda", "phone" => "555-999-1012"),
    array("name"=> "Rich", "phone" => "555-999-1013"),
);

?>

<html>
<body>

<h1>Contacts</h1>

<table>
<tr>
    <th>Name</th>
    <th>Phone</th>
</tr>

<?php
foreach ($myVar as $row) {
?>
<tr>
    <td><?php echo $row; ?></td>
    <td><?php echo $row; ?></td>
</tr>
<?php
}
?>

</table>
</body>
</html>
