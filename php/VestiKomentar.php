<?php 

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$linktoFIle=$name = $podkategorija = $kategorija = $tekstVesti = $naslovVesti = "";

echo "\n Skripta pocela\n";

  //TODO:dohvati sesiju,id korsnika

  if (empty($_POST["tekstKomentara"])) {
    $nameErr = "\nGRESKA KOD FAJLA \n";
   // echo "Hello World";
    echo $nameErr;

  } else {
    $nameErr = test_input($_POST["tekstKomentara"]);
    echo $nameErr;

  }
  //////////////////////////////////////////////
 // $conn = new mysqli($servername, $username, $password, $defaultDatabase);
	
 //	if ($conn->connect_error) {
 //	echo "123";
 //		die("Connection failed: " . $conn->connect_error);		
 //	}
 //
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "\n Skripta se zavrsila \n";

?>