<?php 

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$linktoFIle=$name = $podkategorija = $kategorija = $tekstVesti = $naslovVesti = "";

echo "Skripta pocela\n";

  //TODO:dohvati sesiju,id korsnika

  if (empty($_POST["uploadSlike"])) {
    $nameErr = "GRESKA KOD FAJLA \n";
   // echo "Hello World";
    echo $nameErr;

  } else {
    $nameErr = test_input($_POST["uploadSlike"]);
    $newfile = 'projekatIP/images/';

    if (!copy($file, $newfile)) {
     echo "failed to copy";
    }
     echo $nameErr;
     $linktoFIle=$newfile+ $nameErr;
     //realno ovde bi trebaso da ide id vesti..jer ne postoje 2 slike..samo ime slike nije 
     //relevantno za celu stvar...zar ne?
    //
 
  }
  
  if (empty($_POST["kategorija"])) {
    $kategorija = "";
    echo "Greske kod kategorija \n";
  
  } else {
    $kategorija = test_input($_POST["kategorija"]);
    
    echo $kategorija;
    echo "\n";
  }  
  if (empty($_POST["podkategorija"])) {
    $podkategorija = "";
    echo "Greske kod podkategorija \n";

  } else {
    $podkategorija = test_input($_POST["podkategorija"]);
    
    echo $podkategorija;
    echo "\n";
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
  }*/
  //id iz sesije
  //naslov...fak odakle to?



  $insertQuery="INSERT INTO Vesti (IDKorisnika, Naslov, Link, BrojLajkova, BrojHejtova,Kategorija,Podkategorija)
                VALUES (0, $naslovVesti,$linktoFIle, 0,0,$kategorija,$podkategorija)";


}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "Skripta se zavrsila \n";

?>