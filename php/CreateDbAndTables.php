<?php
$servername = "localhost";
$username = "G23";
$password = "123";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Create table
$createDBsql = "CREATE DATABASE portalvesti";
if ($conn->query($createDBsql) === TRUE) {
    echo "<br> Database created successfully <br>";
} else {
    echo "<br> Error creating database: " . $conn->error;
}

$conn->close();

$primaryDatabase = "portalvesti";
// Create connection
$connTable = new mysqli($servername, $username, $password, $primaryDatabase); 

// Create table
$createTablesql = "CREATE TABLE Vesti (								
								IDVesti int NOT NULL AUTO_INCREMENT,
								IDKorisnika int NOT NULL,
								Naslov nvarchar(1000),
								Link nvarchar(1000),
								BrojLajkova int,
								BrojHejtova int,
								Kategorija nvarchar(1000),
								Podkategorija nvarchar(1000),
								Created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
								LastUpdated TIMESTAMP NOT NULL ON UPDATE CURRENT_TIMESTAMP,
								PRIMARY KEY (IDVesti)
								)";

if ($connTable->query($createTablesql) === TRUE) {
    echo " <br> Table created successfully <br> ";
} else {
    echo "Error creating table: " . $connTable->error;
}



$createTablesql = "CREATE TABLE Korisnici (		
								IDKorisnika int NOT NULL AUTO_INCREMENT,						
								ime nvarchar(1000),
								prezime nvarchar(1000),
								email  nvarchar(1000),
								sifra  nvarchar(1000),
								mobilni  nvarchar(1000),
								adresa  nvarchar(1000),
								slika nvarchar(1000),
								komentar nvarchar(1000),
								PRIMARY KEY (IDKorisnika)
								)";

if ($connTable->query($createTablesql) === TRUE) {
    echo " <br> Table created successfully <br> ";
} else {
    echo "Error creating table: " . $connTable->error;
}

$createTablesql = "CREATE TABLE Komentari (								
								IDKomentara int NOT NULL AUTO_INCREMENT,
								IDKorisnika int NOT NULL,
								IDVesti int NOT NULL,
								BrojLajkova int,
								BrojHejtova int,
								PRIMARY KEY (IDKomentara)
								)";

if ($connTable->query($createTablesql) === TRUE) {
    echo " <br> Table created successfully <br> ";
} else {
    echo "Error creating table: " . $connTable->error;
}

$connTable->close();


?>