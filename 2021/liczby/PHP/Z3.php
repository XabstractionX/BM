<html>

<head>
  <meta http-equiv="refresh" content="1">
  <link rel="stylesheet" href="CSS/sytle.css">
</head>

<body>

  <?php

  function generuj_zbior($ilosc)
  {

    $ile = 0;
    $zbior_liczb = array();

    while ($ile < $ilosc) {
      $ile++;
      $zbior_liczb[] = $ile;
    }
    return $zbior_liczb;
  }

  function losuj_unikalne($zbior, $ile_wylosowac)
  {

    $wylosowane_liczby = array();

    for ($i = 0; $i < $ile_wylosowac; $i++) {
      $wylosowany_index = array_rand($zbior, 1);
      $wylosowane_liczby[] = $zbior[$wylosowany_index];
      unset($zbior[$wylosowany_index]);
    }
    return $wylosowane_liczby;
  }

  $zbior = generuj_zbior(50);
  $losowanie = losuj_unikalne($zbior, 6);

  foreach ($losowanie as $value) {
    echo "$value ";
  }

  ?>

  <br><br>
  <a href="/index.php">wróć</a>
</body>

</html>