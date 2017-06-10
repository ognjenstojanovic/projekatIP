
<?php

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

$substring = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], "/") + 1);

$idVesti=substr($substring, 0, strpos($substring, "."));

$query = "SELECT * FROM Vesti WHERE IDVesti = " . $idVesti;

$result = $conn1->query($query);

$brojLajkova = 0;
$brojHejtova = 0;

while($row = $result->fetch_assoc()){
    $brojLajkova = $row["BrojLajkova"];
    $brojHejtova = $row["BrojHejtova"];
}


echo '<form id="likehate" onsubmit="return likeFunction()" method="post" action="../../php/LikeDislike.php">
      <div class="likes"> 
        Lajkova: ';

echo $brojLajkova;

echo ' <button class="likeButton" style="vertical-align: middle;" type="submit" name="lajkuj">Lajkuj</button>
       </div>
       </form> ';

echo '<form id="likehate" onsubmit="return hateFunction()" method="post" action="../../php/LikeDislike.php">
      <div class="likes"> 
        Hejtova: ';
		
echo $brojHejtova;

echo ' <button class="hateButton" style="vertical-align: middle;" type="submit" name="hejtuj">Hejtuj</button>
       </div>
       </form>';



?>