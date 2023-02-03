
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="" method="POST">
  <input type="email" name="email" id="email" required>
  <input type="text" name="user" id="user" required>
  <input type="password" name="password" id="password" required>
  <button type="submit">sumbit</button>
</form>

<?php 
$DB_connection = mysqli_connect('127.0.0.1','root_DB','ZAQ!2wsx','test_db');

$email = $_POST["email"];
$user = $_POST["user"];
$password = $_POST["password"];

mysqli_query($DB_connection," INSERT INTO `Table_users`(`Email`, `User_Name`, `Password`) VALUES ([],[value-2],[value-3])");


?>
</body>
</html>