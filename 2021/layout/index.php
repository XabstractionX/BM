<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Layout + baza</title>
</head>

<body>

    <?php require "PHP/header.php"; ?>

    <section>
        
        <?php
        $serv = "localhost";
        $user = "root";
        $pass = "";
        $baza = "o_mnie";

        $conn = new mysqli($serv, $user, $pass, $baza);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `linki`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                <nav>
                <a href='https://www.w3schools.com/'>" . $row["link"] . "</a>
                <br>
                </nav>"
                ;
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

        <?php require "PHP/article.php"; ?>

    </section>

    <?php require "PHP/footer.php"; ?>

</body>

</html>
