<?php
    
    require '../conn.php';

    $stmt = $db->prepare("SELECT * FROM users where login = '$logado'");


    $stmt->execute();


    $user_data = array($stmt->fetch(PDO::FETCH_ASSOC));



    foreach($user_data as $user){ 

        $user_name = $user['nome'];
        $user_desc = $user['descricao'];
        $user_nat = $user['naturalidade'];
        $user_idiomas = $user['idiomas'];



        ?>


    
    
   <?php 
    }

    ?>
