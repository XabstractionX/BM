<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Document</title>
</head>
<body>
  
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn =  mysqli_connect($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE bazówa";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
<br>
<button type="button" value="dodaj"><a href="/5_skryptów/index.php">wróć</a></button>

</body>
</html>
