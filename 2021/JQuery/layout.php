<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
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
    <title>JQuery</title>
</head>

<body>

    <header>
        <h2>JQuery</h2>
        <?php require "PHP/img.php" ?>
    </header>

    <section>
        <nav>
            <?php require "PHP/menu.php" ?>
        </nav>
        <article>
            <?php require "PHP/tresc.php" ?>
        </article>
    </section>

    <footer>
        <?php require "PHP/data.php" ?>
    </footer>


</body>

</html>