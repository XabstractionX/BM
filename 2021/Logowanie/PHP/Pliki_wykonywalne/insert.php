<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Document</title>
</head>

<body>

  <?php

  

  $conn = mysqli_connect("localhost", "root", "", "gg");

  if ($conn === false) {
    die("ERROR: Could not connect. "
      . mysqli_connect_error());
  }
  $col1 = $_REQUEST['col1'];
  $col2 = $_REQUEST['col2'];
  $col3= $_REQUEST['col3'];

  $sql = "INSERT INTO users (`user`,`pass`,`rola`)  VALUES ('$col1','$col2','$col3')";

  if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully."
      . " Please browse your localhost php my admin"
      . " to view the updated data</h3>";
  } else {
    echo "ERROR: Hush! Sorry $sql. "
      . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>

  <br>
  <form action="/5_skryptów/index.php" method="post">
    <input type="submit" value="wróć">
  </form>

</body>

</html>