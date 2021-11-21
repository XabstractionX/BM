<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pięcio skryptowy</title>
</head>

<body>
    <form action="PHP/create_db.php" method="post">
        <br> kliknij aby dodać bazę
        <input type="submit" value="dodaj bazę">
    </form>
    <form action="PHP/create_table.php" method="post">
        <br> kliknij aby dodać tabelę
        <input type="submit" value="dodaj tabelę">
    </form>
    <form action="PHP/insert.php" method="post">
        <br> kliknij aby wprowadzić wartosć do bazy
        <input type="submit" value="dodaj wartość">
    </form>
    <form action="PHP/update.php" method="post">
        <br> kliknij aby zaaktualizować bazę
        <input type="submit" value="zaaktualizuj">
    </form>
    <form action="PHP/delete_data.php" method="post">
        <br> kliknij aby usunąć wiersz z tabeli
        <input type="submit" value="usuń wiersz">
    </form>
    <form action="PHP/drop_table.php" method="post">
        <br> kliknij aby usunąć bazę
        <input type="submit" value="usuń bazę">
    </form>
</body>

</html>