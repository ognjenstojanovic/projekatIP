<?php

$servername = "localhost";
$username = "G23";
$password = "123";
$defaultDatabase = "portalvesti";
	
// Create connection
$conn1 = new mysqli($servername, $username, $password, $defaultDatabase);
// Check connection
if ($conn1->connect_error) {
	die("Connection failed: " . $conn->connect_error);		
}

$url = $_SERVER['REQUEST_URI'];

$IDVesti = substr(strrpos($url, '\')+1, strrpos($url, '.'));

$queryKomentari = "SELECT * FROM Komentari WHERE IDVesti = " . $IDVesti;

$result = $conn1->query($queryKomentari);

while($row = $result->fetch_assoc())
{
	echo "komentar";
}

$conn1->close();

?>