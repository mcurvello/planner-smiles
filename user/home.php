<!DOCTYPE html>
<html lang="pt-br">
    <head>

<?php
    
 session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:../index.php');
  }

$logado = $_SESSION['login'];


    


?>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../img/favicon.ico">
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600;700&display=swap" rel="stylesheet">
        
        <title>Planner Smiles</title>
    
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


        <link rel="stylesheet" href="../lib/owlCarousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../lib/owlCarousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="../styles/global.css">
        <link rel="stylesheet" href="../styles/home.css">
    </head>
<body>
    <header id="header">
        <img src="../img/Image6.png" alt="">
 <?php
        require 'get-pic.php';
                 
                 ?>
                        <img src='<?=$photo?>'  class="perfil"  alt="">
                 
                            

        <img class="logo" src="./../img/Group 2.png" alt="">
        <div id=divMenu>
            <nav id="menu">
                <ul>
                    <li><a id="home" href="home.html">Home</a></li>
                    <li><a id="carteira" href="./carteira.php">Carteira</a></li>
                    <li><a id="planos" href="planos.php">Planos</a></li>
                    <li><a id="loja" href="loja.php">Loja</a></li>
                </ul>
            </nav>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   <li> <a style="    color: var(--orange);" class="dropdown-item" href="logout.php">Sair</a></li>
          
                <?php
            
            require 'get-pic.php';
                 
?>
       <img src='<?=$photo?>' style="max-width: 40px; max-height: 40px; border-radius:50%;" class="img-fluid" alt="">

               
               </div>
        </div>
        <p>Escolha o destino dos seus sonhos!</p>
        <span>Despretensiosamente, e sem qualquer responsabilidade, teste nosso planner e tire seus sonhos do papel!</span>
        <a href="meta.html"><button id="botao1" type="button" >Planejar viagem!</button></a>
        
    </header>
    <div class="container" id="perfil">
    <?php
            
            require 'get-user.php';
                 
?>
    <div class="row">
    <div class="col-sm-6" >
    <h1  style="font-size:40px;"><?=$user_name?> </h1>

</div>
<div class="col-sm-6"  >
<h1  style="font-size:25px;" class="fluid"><i class="fas fa-map-marker-alt"style="font-size:25px;"></i> <?= ' ' . $user_nat?></h1>

</div>

  
<p style="font-size:22px;">  <i class="fas fa-language" style="font-size:25px;"></i><?=' '. $user_idiomas?></p>

  <p style="font-size:20px; max-width: 450px"><?=$user_desc?></p>
</div>

  </div>
    <div id="pacotes">
        <img src="../img/Group 38.png" alt="">
    </div>
    <div id="metas">
        <img src="../img/Group 39.png" alt="">
    </div>
    <div id="intercambio">
        <img src="../img/Group 40.png" alt="">
    </div>
    <div id="amigos">
        <img src="../img/Group 41.png" alt="">
    </div>
    <div id="experience360">
        <a href="https://www.youtube.com/watch?v=UMDToJAATKo">
            <img src="../img/Group 42.png" alt="">
        </a>
    </div>
</body>
</html>