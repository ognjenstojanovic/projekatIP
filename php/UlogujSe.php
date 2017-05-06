<?php 

if (isset($_POST["ulogujSe"])){
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	$sql = "SELECT * FROM Korisnici WHERE email = '$email' AND sifra = '$password'";
	
	$servername = "localhost";
	$username = "G23";
	$password = "123";
	$defaultDatabase = "portalvesti";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $defaultDatabase);
	
	if ($conn->connect_error) {
	echo "123";
		die("Connection failed: " . $conn->connect_error);		
	}
	
	if(!$result = $conn->query($sql)){
		echo $conn->error;
		die($conn->connect_error);
	}
		
	if ($row = $result->fetch_assoc()){
		session_start();
		$_SESSION["user"] = $email;
		header("Location: http://localhost/pages/TacniPodaci.html");	

		exit();
	}else{
		header("Location: http://localhost/pages/PogresniPodaci.html");
		exit();
	}
		

}

?>