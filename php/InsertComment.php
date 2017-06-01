<?php

session_start();

$linktoFIle=$name = $podkategorija = $kategorija = $tekstKomentara = $naslovKomentara = "";
echo "\n Skripta pocela\n";

$servername = "localhost";
$username = "G23";
$password = "123";
$defaultDatabase = "portalvesti";


$conn1 = new mysqli($servername, $username, $password, $defaultDatabase);
// Check connection
if ($conn1->connect_error) {
  die("Connection failed: " . $conn->connect_error);    
}

$substring = substr($_SERVER['HTTP_REFERER'], strrpos($_SERVER['HTTP_REFERER'], "/") + 1);

$idVesti=substr($substring, 0, strpos($substring, "."));

$query = "SELECT * FROM Vesti WHERE IDVesti = " . $idVesti;

$result = $conn1->query($query);




if (!empty($_POST["naslovKomentara"])) {

   $naslovKomentara = test_input($_POST["naslovKomentara"]);


  } 

if (!empty($_POST["tekstKomentara"])) {

   $tekstKomentara = test_input($_POST["tekstKomentara"]);

  }

  $query1 = "INSERT INTO komentari(TekstKomentara,NaslovKomentara,IDKorisnika,IDVesti) 
   			VALUES('$tekstKomentara','$naslovKomentara',1,$idVesti)";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$conn1->query($query1);

echo $naslovKomentara . " ";
echo $tekstKomentara . " ";
echo $idVesti . " ";


echo $conn1->connect_error;

if ($conn1->connect_error) {
  die("Connection failed: " . $conn->connect_error);    
}

$conn1->close();


header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>