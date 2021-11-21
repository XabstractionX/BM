<html>

<head>
    <link rel="stylesheet" href="CSS/sytle.css">
</head>

<?php
$d = $_POST["name_day"];

switch ($d) {
    case "1":
        echo "Poniedziałek";
        break;
    case "2":
        echo "Wtorek";
        break;
    case "3":
        echo "Środa";
        break;
    case "4":
        echo "Czwartek";
        break;
    case "5":
        echo "Piątek";
        break;
    case "6":
        echo "Sobota";
        break;
    case "7":
        echo "Niedziela";
        break;
    default:
        echo "Taki dzień nie istnieje";
}
?>
<br><br>
<a href="/index.php">wróć</a>


</html>