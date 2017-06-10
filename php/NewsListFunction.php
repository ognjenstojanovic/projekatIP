<?php

function ListNews($category){
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

    $query = "SELECT * FROM Vesti WHERE Kategorija = '" . $category . "' OR Podkategorija = '" . $category . "'";

    $result = $conn1->query($query);

    $row = $result->fetch_assoc();

    echo '<img src="' . $row["SlikaLink"] . '" class="blockImage" />';
				
	echo '<div id="newsBlockParagraph">';

    echo '<ul>';

    while($row = $result->fetch_assoc()){
        echo '<li><a href=' . $row["Link"] . '>' . $row["Naslov"] . '</a></li>';
    }

    echo '</ul>';

    echo '</div>';


}

?>