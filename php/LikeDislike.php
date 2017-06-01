<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$linktoFIle=$name = $podkategorija = $kategorija = $tekstVesti = $naslovVesti = "";


$servername = "localhost";
$username = "G23";
$password = "123";
$defaultDatabase = "portalvesti";
  
// Create connection
$conn1 = new mysqli($servername, $username, $password, $defaultDatabase);
// Check connection
if ($conn1->connect_error) {
  die("Connection failed: " . $conn->connect_error);    
}

$substring = substr($_SERVER['HTTP_REFERER'], strrpos($_SERVER['HTTP_REFERER'], "/") + 1);

$idVesti=substr($substring, 0, strpos($substring, "."));

$query = "SELECT * FROM Vesti WHERE IDVesti = " . $idVesti;

$result = $conn1->query($query);

$broj = 0;

if (isset($_POST["lajkuj"])) {

   while($row = $result->fetch_assoc()){
    $broj = $row["BrojLajkova"];
   }

   $broj = $broj + 1;
   
   $query = "UPDATE Vesti SET BrojLajkova = ". $broj . " WHERE IDVesti = " . $idVesti;

} 

if (isset($_POST["hejtuj"])) {
  while($row = $result->fetch_assoc()){
    $broj = $row["BrojHejtova"];
  }

   $broj = $broj + 1;
   
   $query = "UPDATE Vesti SET BrojHejtova = ". $broj . " WHERE IDVesti = " . $idVesti;

}

$conn1->query($query);

if ($conn1->connect_error) {
  die("Connection failed: " . $conn->connect_error);    
}

$conn1->close();

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();

?>