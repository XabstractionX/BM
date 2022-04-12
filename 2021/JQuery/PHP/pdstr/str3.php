<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/kk/JQuery/CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var text = $(".lorem")
            $("#hide").click(function() {
                text.hide();
            });
            $("#show").click(function() {
                text.show();
            });
        });
    </script>

    <title>pdstr3</title>
</head>

<body>

    <header>
        <h2>Pod strona 3</h2>
    </header>

    <section>
        <nav>
            <a href="/kk/JQuery/layout.php">wróć na główną</a>
        </nav>
        <article>
            <?php
            $serv = "localhost";
            $user = "root";
            $pass = "";
            $baza = "kk";

            $conn = new mysqli($serv, $user, $pass, $baza);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT `tresc` FROM `tekst` WHERE ID = '4'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $kotek = $row["tresc"];
                }
                $malykotek = substr($kotek, 0, 11);
                $duzykotek = substr($kotek, 12, 300);
                echo "<span>" . $malykotek . " " . "<span class='lorem'>" . $duzykotek . "</span></span>";
                echo "
                <br>
                <button id='hide'>Hide</button>
                <button id='show'>Show</button>
                ";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </article>
    </section>

    <footer>
        <?php
        echo date("Y");
        echo "r";
        ?>
    </footer>



</body>

</html>