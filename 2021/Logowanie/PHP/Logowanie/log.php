<?php
$servername = "localhost";
$username = "root";
$password = "";
$tt = $_REQUEST['tt'];

session_start();

if (isset($_GET['user']) && isset($_GET['pass'])) {

	$conn = new mysqli($servername, $username, $password, $tt);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM ggg WHERE user = '" . $_GET['user'] . "' AND pass = '" . $_GET['pass'] . "'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "miszcz, jest taki es :)<br>";
		$_SESSION["auth"] = "OK";
		$row = mysqli_fetch_row($result);
		if ($row[3] == "admin") {
			$_SESSION["role"] = "admin";
			echo 'witaj adminku ' . $row[1] . ' twa rola to: ' . $row[3];
		}
		else {
			$_SESSION["role"] = "user";
			echo 'witaj userku ' . $row[1] . ' twa rola to: ' . $row[3];
		}
	} else {
		echo 'nie pamiętasz hasła debilu albo jaki masz nick? No debil...<br>
	<a href="index.html">to se wróć i się popraw</a>';
	}
	$conn->close();
} else {
	echo 'nie kombinuj cwaniaku, do forma logowania sobie idź<br>
 <a href="index.html">to se wróć i się popraw</a>';
}
