<?php
$serv = "localhost";
$user = "root";
$pass = "";
$baza = "kk";

$conn = new mysqli($serv, $user, $pass, $baza);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `lista`, `link` FROM `menu`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
        <ul>
            <li>
                <a href='" . $row["link"] . "'>"
            . $row["lista"] .
            "</a>
            </li>
        </ul>
        ";
    }
} else {
    echo "0 results";
}
$conn->close();
