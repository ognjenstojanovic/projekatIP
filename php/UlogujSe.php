<?php 

if (isset($_POST["ulogujSe"])){
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	$sql = "SELECT * FROM Korisnici WHERE email = '$email' AND sifra = '$password'";
	
	$servername = "localhost";
	$username = "G23";
	$dbPassword = "123";
	$defaultDatabase = "portalvesti";
	
	// Create connection
	$conn = new mysqli($servername, $username, $dbPassword, $defaultDatabase);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);		
	}
	
	if(!$result = $conn->query($sql)){
		die($conn->connect_error);
	}
		
	if ($row = $result->fetch_assoc()){
		session_start();
		
		//ubacivanje svih podataka o korisniku u sesiju
		$_SESSION["email"] = $email;
		$_SESSION["password"] = $email;
		$_SESSION["ime"] = $row["ime"];
		$_SESSION["prezime"] = $row["prezime"];
		$_SESSION["IDKorisnika"] = $row["IDKorisnika"];
		$_SESSION["mobilni"] = $row["mobilni"];
		$_SESSION["adresa"] = $row["adresa"];
		$_SESSION["komentar"] = $row["komentar"];
		
		header("Location: http://localhost/pages/TacniPodaci.html");	
		
		$conn->close();
		
		exit();
	}else{
		header("Location: http://localhost/pages/PogresniPodaci.html");
		
		$conn->close();
		
		exit();
	}
		

}

?>