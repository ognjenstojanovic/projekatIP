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

$link = $_SERVER['DOCUMENT_ROOT'] . "/IP/pages/" . $_POST["Link"];

$substring = substr($link, strrpos($link, "/") + 1);

$idVesti=substr($substring, 0, strpos($substring, "."));

$query = "DELETE FROM Vesti WHERE IDVesti = " . $idVesti;

$conn1->query($query);

unlink($link);

$conn1->close();

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();

?>