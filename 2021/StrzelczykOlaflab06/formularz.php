<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formularze</title>
</head>

<body>
<?php
    if (isset($_POST["zadanie"])) {
        $zad = ($_POST["zadanie"]);
        switch ($zad) {
            case 1:
                $ilosc = ($_POST["Ilosc"]);
                for ($i = 1; $i <= $ilosc; $i++) {
                    echo "<div class='Klasa1'>$i</div>";
                }
                break;
            case 2:
                $ilosc = ($_POST["Ilosc"]);
                for ($i = 1; $i <= $ilosc; $i++) {
                    echo "<div class='Klasa1'>$i</div><div class='Klasa2'>$i</div>";
                }
                break;
            case 3:
                $ilosc = ($_POST["Ilosc"]);
                for ($i = 1; $i <= $ilosc; $i++) {
                    echo "<div class='Klasa2'>" . rand(1, 500) . "</div>";
                }
                break;

            case 4:
                $t = ($_POST["text"]);
                echo '<div class="anim">' . $t . '</div>';
                break;
            case 5:
                $ilosc = rand(1, 100);
                echo "
                <table>
                    <tr>
                        <th>Potęga 2</th>
                        <th>Potęga 3</th>
                    </tr>
                ";
                for ($i = 1; $i <= $ilosc; $i++) {
                    echo "
                <tr>
                <td>" . (pow(2, $i)) . "</td>
                <td>" . (pow(3, $i)) . "</td>
              </tr>";
                }
                echo "</table>";
                break;
            case 6:
                $ilosc = ($_POST["Ilosc"]);
                $pom = 1;
                for ($i = 1; $i <= $ilosc; $i++) {
                    echo "<div class='Klasa" . $pom . "'>$i</div><div class='Klasa" . $pom . "'>$i</div>";
                    if ($pom == 1) {
                        $pom = 2;
                    } else {
                        $pom = 1;
                    }
                }
                break;
            case 7:
                $ilosc = ($_POST["Ilosc"]);
                $x = 0;
                $h = 1;
                for ($i = 1; $i <= $ilosc; $i++) {
                    echo "<div class='Klasa1' style='background-color: RGB(0," . $x . ",0);color:white;'>$i</div>";
                    if ($h == 1 and $x != 250) {
                        $x = $x + 10;
                    } else {
                        $x = $x - 10;
                    }
                }
                break;
            default:
                echo ("out of range");
        }
    } else {
        echo '
    <div class="tt">
        <form action="formularz.php" method="POST">
            <p>Generowanie kwadratów</p>
            Ilość: 
            <input type="number" name="Ilosc" min="1" max="1000">
            <input type="hidden" name="zadanie" value="1">
            <input type="submit" value="Wyślij">
        </form>
 
        <br>

        <form action="formularz.php" method="POST">
            <p>Generowanie kwadratów naprzemiennie</p>
            Ilość: 
            <input type="number" name="Ilosc" min="1" max="1000">
            <input type="hidden" name="zadanie" value="2">
            <input type="submit" value="Wyślij">
        </form>

        <br>

        <form action="formularz.php" method="POST">
            <p>Generowanie losowych nr. do kwadratów  </p>
            Ilość: 
            <input type="number" name="Ilosc" min="1" max="1000">
            <input type="hidden" name="zadanie" value="3">
            <input type="submit" value="Wyślij">
        </form>
        
        <br>

        <form action="formularz.php" method="POST">
            <p>Generowanie animowanego div-a</p>
            Wpisz tekst: 
            <textarea name="text" rows="1" cols="10"></textarea>
            <input type="hidden" name="zadanie" value="4">
            <input type="submit" value="Wyślij">
        </form>

        <br>

        <form action="formularz.php" method="POST">
            Generowanie tabeli n-potęg 2 i 3
            <input type="hidden" name="zadanie" value="5">
            <input type="submit" value="Generuj">
        </form>

        <br>
        
        <form action="formularz.php" method="POST">
            <p>Podaj Ilość Drukowanych Kwadratów W Podanej Kolejności</p>
            Ilość: 
            <input type="number" name="Ilosc" min="1" max="1000">
            <input type="hidden" name="zadanie" value="6">
            <input type="submit" value="Wyślij">
        </form>
        
        <br>
        
        <form action="formularz.php" method="POST">
            <p>Podaj Ilość Drukowanych Kwadratów Kolorowych</p>
            Ilość: 
            <input type="number" name="Ilosc" min="1" max="1000">
            <input type="hidden" name="zadanie" value="7">
            <input type="submit" value="Wyślij">
        </form>
    </div>';
    }
    ?>
</body>

</html>