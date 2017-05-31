<?php

if (isset($_POST["registrujSe"])){
	
	$servername = "localhost";
	$username = "G23";
	$dbPassword = "123";
	$defaultDatabase = "portalvesti";
	
	// Create connection
	$conn = new mysqli($servername, $username, $dbPassword, $defaultDatabase);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);		
	}
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	$mobile = $_POST["mobile"];
	$address = $_POST["address"];
	
	$query = "INSERT INTO Korisnici(email, 
								  sifra, 
								  mobilni, 
								  adresa)
						VALUES('$email',
							   '$password',
							   '$mobile',
							   '$address')";
							   
	if ($conn->query($query) === TRUE) {
		echo " <br> User created successfully <br> ";
	} else {
		die("Error creating user: " . $conn->error);
	}
	
	header("Location: http://localhost/pages/UlogujSe.html");	
		
	$conn->close();
		
	exit();
	
}


?>