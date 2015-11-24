<?php
$db = new mysqli("localhost", "root", "", "test", 3307);
$result = $db->query("select * from Tweets");

session_start();

if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

var_dump($_SESSION);

echo "<h1>Tweets:</h1>";
while ($row = $result->fetch_assoc()){
  echo htmlentities($row['ID']);
  echo ") ";
  echo htmlentities($row['content']);
  echo "<br><br>";
}

$db = new mysqli("localhost", "root", "", "test", 3307);
$result = $db->query("select * from Tweets");
?>
<h1>More Tweets</h1>
<ul>
  <?php
  while ($row = $result->fetch_assoc()){
  ?>
  <li><?php echo $row["content"] ?></li>
  <?php
  }
  ?>
</ul>
<hr>
