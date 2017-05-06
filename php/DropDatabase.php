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


$dropDBsql = "DROP DATABASE portalvesti";

if ($conn->query($dropDBsql) === TRUE) {
    echo "<br> Db dropped successfully <br>";
} else {
    echo "Error creating table: " . $connTable->error;
}

$conn->close();


?>