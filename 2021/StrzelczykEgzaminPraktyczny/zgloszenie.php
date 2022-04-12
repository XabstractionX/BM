<?php
$Nrzes = $_POST['Nrzes'];
$Nrdys = $_POST['Nrdys'];
$adres = $_POST['adres'];
$dbname = "ratownictwo";
$pass = "";
$serv = "localhost";
$user = "root";
$czas = date("H:i:s");
$conn = mysqli_connect($serv, $user, $pass, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO `zgloszenia` (id, ratownicy_id, dyspozytorzy_id, adres, pilne, czas_zgloszenia)
VALUES (null, $Nrzes, $Nrdys,'$adres',0,'$czas')";
if (mysqli_query($conn, $sql)) {
    echo "Dodano rekord";
  } else {
    echo "Błąd: " . $sql . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>