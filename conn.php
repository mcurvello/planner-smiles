<?php

$db = new PDO("mysql:dbname=smiles;host=localhost", "root", ""); 

$mysqli = new mysqli("localhost", "root", "", "smiles");



/*$stmt = $db->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value){
        echo "<strong>".$key.": </strong>".$value."<br/>";
    }

    echo "=================================================<br/>";

}

var_dump($results);
*/
?>