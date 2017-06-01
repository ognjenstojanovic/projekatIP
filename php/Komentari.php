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

$substring = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], "/") + 1);

$idVesti=substr($substring, 0, strpos($substring, "."));

$queryKomentari = "SELECT * FROM Komentari WHERE IDVesti = " . $idVesti;

$result = $conn1->query($queryKomentari);

while($row = $result->fetch_assoc())
{
	$idKorisnika = $row["IDKorisnika"];

	$query = "SELECT * FROM Korisnici WHERE IDKorisnika = " . $idKorisnika;

	$korisnik = $conn1->query($query);

	$imeKorisnika = "";

	while($row1 = $korisnik->fetch_assoc())
	{
		$imeKorisnika = $row1["ime"];
	}	


	echo '<div class="comment"><p class="commenter">';
	echo $imeKorisnika . ": " . $row["NaslovKomentara"];
	echo '</p>';
	echo $row["TekstKomentara"];
	echo '</div>';
}

$conn1->close();

?>