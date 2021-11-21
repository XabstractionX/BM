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
    $dbname = "bazówa";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        imie VARCHAR(30) NOT NULL,
        nazwisko VARCHAR(30) NOT NULL,
        email VARCHAR(50)
        )";

    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
    ?>
    
    <br>
    <form action="/5_skryptów/index.php" method="post">
        <input type="submit" value="wróć">
    </form>

</body>

</html>