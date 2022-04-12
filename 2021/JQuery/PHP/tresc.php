<?php
$serv = "localhost";
$user = "root";
$pass = "";
$baza = "kk";

$conn = new mysqli($serv, $user, $pass, $baza);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `tresc` FROM `tekst` WHERE ID = '1'";
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
