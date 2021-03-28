<?php
    
    require '../conn.php';

    $stmt = $db->prepare("SELECT foto FROM users where login = '$logado'");


    $stmt->execute();


    $fotos = array($stmt->fetch(PDO::FETCH_ASSOC));



    foreach($fotos as $foto){ 

        $photo = ('../cadastro/'.$foto['foto']);

       

        ?>


    
    
   <?php 
    }

    ?>
