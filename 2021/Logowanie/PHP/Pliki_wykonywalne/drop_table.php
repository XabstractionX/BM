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
  $nz =$_REQUEST['nz'];

  $conn = mysqli_connect($servername, $username, $password, $nz);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $drop = $_REQUEST['drop'];
  $sql = "DROP TABLE $drop";

  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>

  <br>
  <form action="/5_skryptów/index.php" method="post">
    <input type="submit" value="wróć">
  </form>
</body>

</html>