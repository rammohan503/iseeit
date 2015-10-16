<?php
echo "12222\n";
echo "12222\n";
echo "12222\n";
echo "12222\n";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iseeit";

// Create connection
$conn = mysql_connect('localhost', 'root', '');
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

else{
	die("Connection Succussful: ");
}
$conn->close();
?>
