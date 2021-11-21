<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
            $l = $_REQUEST['Imie'];
            $u = $_REQUEST['Nazwisko'];
            $b = $_REQUEST['Hasło'];
            $i = $_REQUEST['data'];
            $e = $_REQUEST['mail'];
            $g = $_REQUEST['Numer'];
            $o = $_REQUEST['Kolor'];
            $f = $_REQUEST['zAd'];
            $r = $_REQUEST['Wiek'];
            $y = $_REQUEST['opis'];
        echo "Imie:" .
            $l . "." . "Nazwisko:" . 
            $u . "." . "Data Urodzenia:" . 
            $b . "." . "Adres Mail:" . 
            $i . "." . "Numer Telefonu:" . 
            $e . "." . "(RGB)Ulubiony Kolor:" . 
            $g . "." . "Zadowolenie z zajęć:" . 
            $o . "." . "Wiek:" . 
            $f . "." . "Opis:" . 
            $r . ".";
            $y . ".";
        ?>
    </p>
  </body>
</html>



