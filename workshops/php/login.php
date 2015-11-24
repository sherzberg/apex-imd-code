<!-- www/login.php -->

<?php
$sql = "
select
    *
from
    users
where
    username = '". $_POST['username']."'
    and password='". $_POST['password']."'
";

echo $sql;
echo "<hr>";
$db = new mysqli("localhost", "root", "", "apex", 3307);
$result = $db->query($sql);

$row = $result->fetch_assoc();
echo var_dump($row);

if ($row == null) {
    echo "Go away!";
} else {
    echo "Successful login!";
    echo "<br>";
    echo "your userid is " .$row['id'];

    $sql = "select * from tweets
        where user_id = ".$row['id'];
    echo $sql;
}
?>
