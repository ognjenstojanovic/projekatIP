<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$linktoFIle=$name = $podkategorija = $kategorija = $tekstVesti = $naslovVesti = "";
echo "\n Skripta pocela\n";

if (empty($_POST["lajkuj"])) {
    $nameErr = "\nGRESKA KOD FAJLA \n";
   // echo "Hello World";
    echo $nameErr;

  } else {
    $nameErr = test_input($_POST["lajkuj"]);
    echo $nameErr;

  }

if (empty($_POST["hejtuj"])) {
    $nameErr = "\nGRESKA KOD FAJLA \n";
   // echo "Hello World";
    echo $nameErr;

  } else {
    $nameErr = test_input($_POST["hejtuj"]);
    echo $nameErr;

  }

 echo "\n Skripta zavrsila \n";

?>