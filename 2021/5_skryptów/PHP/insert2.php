<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Document</title>
</head>

<body>
  <!-- <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bazówa";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO MyGuests (`imie`, `nazwisko`, `email`) VALUES ('John', 'Doe', 'john@example.com')";

        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?> -->
  <?php

  // servername => localhost
  // username => root
  // password => empty
  // database name => staff
  $conn = mysqli_connect("localhost", "root", "", "bazówa");

  // Check connection
  if ($conn === false) {
    die("ERROR: Could not connect. "
      . mysqli_connect_error());
  }

  // Taking all 5 values from the form data(input)
  $first_name =  $_REQUEST['imie'];
  $last_name = $_REQUEST['nazwisko'];
  $email = $_REQUEST['email'];

  // Performing insert query execution
  // here our table name is college
  $sql = "INSERT INTO `myguests` (`imie`,`nazwisko`,`email`)  VALUES ('$first_name','$last_name','$email')";

  if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully."
      . " Please browse your localhost php my admin"
      . " to view the updated data</h3>";

  } else {
    echo "ERROR: Hush! Sorry $sql. "
      . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);
  ?>

  <br>
  <form action="/5_skryptów/index.php" method="post">
    <input type="submit" value="wróć">
  </form>

</body>

</html>
