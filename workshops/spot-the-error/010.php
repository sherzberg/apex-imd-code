<html>
<body>

<h1>This is a heading</h1>

<ul>
This is a thing
This is another thing
</ul>
<form action="010.php" method="POST">
<input name="mything">
</form>


echo var_dump($_POST);

if (isset($_POST["mything"])) {
  echo <h3>$_POST["mything"]</h3>;
}

</body>
</html>
