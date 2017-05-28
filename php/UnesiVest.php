<?php 

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $tekstVesti = $naslovVesti = "";

echo "Skripta pocela\n";

if (isset($_POST["uploadSlike"])){
echo "Entered the shit\n ";

  if (empty($_POST["uploadSlike"])) {
    $nameErr = "GRESKA KOD FAJLA \n";
   // echo "Hello World";
    echo $nameErr;

  } else {
    //$name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
 
  }
  

  
  if (empty($_POST["tekstVesti"])) {
    $tekstVesti = "";
    echo "Greske kod teksta vesti \n";

  } else {
    $tekstVesti = test_input($_POST["tekstVesti"]);
    
    echo $tekstVesti;
    echo "\n";
  }
   if (empty($_POST["naslovVesti"])) {
    $naslovVesti = "";
    echo "Greske kod teksta vesti \n";

  } else {
    $naslovVesti = test_input($_POST["naslovVesti"]);
    
    echo $naslovVesti;
    echo "\n";
  }
  $servername = "localhost";
	$username = "G23";
	$password = "123";
	$defaultDatabase = "portalvesti";
	

  //za fajl : iskopirati fajl u locahost/projekatIP/images;
  //zapamtiti link u bazi,i onda njega kao echo link;
	// Create connection
	$conn = new mysqli($servername, $username, $password, $defaultDatabase);
	
	if ($conn->connect_error) {
	echo "123";
		die("Connection failed: " . $conn->connect_error);		
	}
	  $sql="INSERT INTO Vesti (IDKorisnika, Naslov, Link, BrojLajkova, BrojHejtova,Kategorija,Podkategorija)
                VALUES (Cardinal, Tom B. Erichsen, Skage, Stavanger,4006,Norway)";
	if(!$result = $conn->query($sql)){
		echo $conn->error;
		die($conn->connect_error);
  }
  //id iz sesije
  //naslov...fak odakle to?


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "Skripta se zavrsila \n";

?>