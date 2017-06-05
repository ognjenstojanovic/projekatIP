<?php 

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$linktoFIle=$name = $podkategorija = $kategorija = $tekstVesti = $naslovVesti = "";

  //TODO:dohvati sesiju,id korsnika

  if (isset($_POST["uploadSlike"])) {
    $nameErr = "\nGRESKA KOD FAJLA \n";
   // echo "Hello World";
    echo $nameErr;

  } else {
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["uploadSlike"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
   
        $check = getimagesize($_FILES["uploadSlike"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["uploadSlike"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["uploadSlike"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

  }
  
  if (empty($_POST["kategorija"])) {
    $kategorija = "";
    echo "\n Greske kod kategorija \n";
  
  } else {
    $kategorija = test_input($_POST["kategorija"]);
    
  }  
  if (empty($_POST["podkategorija"])) {
    $podkategorija = "";
    echo "\nGreske kod podkategorija \n";

  } else {
    $podkategorija = test_input($_POST["podkategorija"]);
    
  }
  
  if (empty($_POST["tekstVesti"])) {
    $tekstVesti = "";
    echo "\n Greske kod teksta vesti \n";

  } else {
    $tekstVesti = test_input($_POST["tekstVesti"]);
    
  }
   if (empty($_POST["naslovVesti"])) {
    $naslovVesti = "";
    echo  "\n Greske kod teksta vesti \n";

  } else {
    $naslovVesti = test_input($_POST["naslovVesti"]);
  }
  $servername = "localhost";
	$username = "G23";
	$password = "123";
	$defaultDatabase = "portalvesti";
	
	$conn = new mysqli($servername, $username, $password, $defaultDatabase);
	
	if ($conn->connect_error) {
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



?>