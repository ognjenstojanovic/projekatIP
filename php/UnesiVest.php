<?php 

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$linktoFIle=$name = $podkategorija = $kategorija = $tekstVesti = $naslovVesti = "";

echo "\n Skripta pocela\n";

  //TODO:dohvati sesiju,id korsnika

  if (empty($_POST["uploadSlike"])) {
    $nameErr = "\nGRESKA KOD FAJLA \n";
   // echo "Hello World";
    echo $nameErr;

  } else {
    $nameErr = test_input($_POST["uploadSlike"]);
    $newfile = '..\images\\';
    //otvir fajl u images..gde vec
    //dohvati last IDVesti
    $lastIDVesti=1;//Ognjene izvini :/ numem
    $fileDest=getcwd() . $newfile . $lastIDVesti .".jpg";
    echo $fileDest;
    $newfile = fopen($fileDest, "w") or die("Unable to open file!");
    $fileSource="";

    if (!copy($file, $newfile)) {
    echo "\n failed to copy file\n";
    }
     echo $nameErr;
     $linktoFIle=$newfile+ $nameErr;
     //realno ovde bi trebaso da ide id vesti..jer ne postoje 2 slike..samo ime slike nije 
     //relevantno za celu stvar...zar ne?
    //
 
  }
  
  if (empty($_POST["kategorija"])) {
    $kategorija = "";
    echo "\n Greske kod kategorija \n";
  
  } else {
    $kategorija = test_input($_POST["kategorija"]);
    
    echo $kategorija;
    echo "\n";
  }  
  if (empty($_POST["podkategorija"])) {
    $podkategorija = "";
    echo "\nGreske kod podkategorija \n";

  } else {
    $podkategorija = test_input($_POST["podkategorija"]);
    
    echo $podkategorija;
    echo "\n";
  }
  
  if (empty($_POST["tekstVesti"])) {
    $tekstVesti = "";
    echo "\n Greske kod teksta vesti \n";

  } else {
    $tekstVesti = test_input($_POST["tekstVesti"]);
    
    echo $tekstVesti;
    echo "\n";
  }
   if (empty($_POST["naslovVesti"])) {
    $naslovVesti = "";
    echo  "\n Greske kod teksta vesti \n";

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

	
/*	if(!$result = $conn->query($sql)){
>>>>>>> origin/dev_vlada
		echo $conn->error;
		die($conn->connect_error);
  }*/
  //id iz sesije

  //link je relativna putanja+ime fajla
  //Kategorija,Podkategorija-iz onog s..izvadi
  $insertQuery="INSERT INTO Vesti (IDKorisnika, Naslov, Link, BrojLajkova, BrojHejtova,Kategorija,Podkategorija)
                VALUES (0, $naslovVesti,$linktoFIle, 0,0,$kategorija,$podkategorija)";



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "\n Skripta se zavrsila \n";

?>