<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="CSS/sytle.css">
    <title> Zadania </title>

</head>

<body>

    <h1> Tutaj policzysz sqn(x) </h1>

    <form action="Z1.php" method="post">
        Wybierz liczbę
        <input type="number" name="sgn" required="required">
        <input type="submit" value="Zobacz">
    </form>
    <br>

    <h1> Jaki to dzień tygodnia </h1>

    <form action="Z2.php" method="post">
        Wybierz liczbę od 1-7
        <input type="number" name="name_day" required="required">
        <input type="submit" value="Zobacz">
    </form>
    <br>

    <h1> Generowanie 6 randowowych liczb </h1>

    <form action="Z3.php">
        <input type="submit" value="Generuj">
    </form>
    <br><br>

</body>

</html>