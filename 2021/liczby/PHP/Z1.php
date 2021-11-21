<html>

<head>
  <link rel="stylesheet" href="CSS/sytle.css">
</head>

Twoja liczba <?php echo $_POST["sgn"]; ?><br><br>

<?php
$t = $_POST["sgn"];

if ($t < "0") {
  echo "sgn(-1)";
} elseif ($t > "0") {
  echo "sgn(1)";
} else {
  echo "sgn(0)";
}
?>

<br><br>
<a href="/index.php">wróć</a>


</html>