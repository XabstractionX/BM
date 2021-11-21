<?php
$serv = "localhost";
$user = "root";
$pass = "";
$baza = "drukowanie";

$conn = new mysqli($serv, $user, $pass, $baza);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `ID`, `imię`, `nazwisko`, `nr_tel` FROM `osoby`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
        <table>
        <tr>
            <th>ID</th>
            <th>imię</th>
            <th>nazwisko</th>
            <th>nr_tel</th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["imię"] . "</td><td>" . $row["nazwisko"] . "</td><td>" . $row["nr_tel"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>