<?php

$conn = new PDO("mysql:dbname=ITSTRAVEL;
host:localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM USUARIOS ORDER BY ID_USUARIO");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){

    foreach ($row as $key => $value){
        
        echo "<strong>".$key.": </strong>".$value."<br/>";

    }
}


?>