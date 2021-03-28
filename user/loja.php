<!DOCTYPE html>
<html lang="pt-br">
<head>


<?php

 session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

$logado = $_SESSION['login'];

    


?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <title>Planner Smiles</title>

    <link rel="stylesheet" href="../lib/owlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../lib/owlCarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/loja.css">
</head>
<body>

    <div class="container">
        <div class="containerA">
            <img id="background" src="../img/Image4.png" alt="">
            <img id="logo" src="../img/Group 2.png" alt="">
            <p>Você possui desconto exclusivo!</p>
            <span>Assinantes do Planner Smiles possuem descontos exclusivos em pacotes de viagem completo, que te garantem maior comodidade na hora do embarque, deixe tudo por nossa conta!</span>
            <img id="cartao-gol" src="../img/cartaogol.png" alt="">
            <h6>Foto: Benjamin Voros/Unsplash</h6>
        </div>
        <div class="containerB">
            <div id=divMenu>
                <nav id="menu">
                    <ul>
                    <li><a id="home" href="home.php">Home</a></li>
                    <li><a id="carteira" href="carteira.php">Carteira</a></li>
                    <li><a id="planos" href="planos.php">Planos</a></li>
                    <li><a id="loja" href="loja.php">Loja</a></li>
                    </ul>
                </nav>
                <div>
                <span><?= $_SESSION['login']?></span>

                <?php
            
            require 'get-pic.php';
                 
?>
       <img src='<?=$photo?>' style="max-width: 40px; max-height: 40px; border-radius:50%;" class="img-fluid" alt="">


                </div>
            </div>
            <div id="divLoja">
                <p>Loja</p>
            </div>
          
            <div id="passagens">
                <h1>Passagens</h1>
                <div id="divInput">
                    <div id="destino">
                        <input type="text" id="txtDestino" placeholder="Destino">
                    </div>
                    <div id="data">
                        <input type="text" id="txtData" placeholder="Dia / Mês / Ano">
                    </div>
                </div>
            </div>
            <div id="cartao-passagens">
                <img src="../img/Group 32.png" alt="">
            </div>
            <button id="botao2" type="button" >Comprar 
                <img src="../img/Group 33.png" alt="">
                288.600</button>
            <button id="botao3" type="button" >Smiles&Cash</button>
            <div id="pacotes">
                <h1>Pacotes de viagem</h1>
                <img id="navbar" src="../img/Group 47.png" alt="">
                <img id="figuras" src="../img/pacotes.jpeg" alt="">
            </div>
            <div>
                
            </div>
            <div id="hospedagem">
                <div id="titulo">
                    <p>Hospedagem</p>
                     <img src="./../img/Ellipse 12.png" alt="">
                     <span>Serviço oferecido por </span>
                     <img src="./../img/Group 4.png" alt="">
                 </div>
                 <div id="hospedagens">
                     <img src="../img/hospedagens.jpeg" alt="">
                 </div>
            <div>
            <div id="alugar">
                <div id="titulo">
                    <p>Alugar carros</p>
                     <img src="./../img/Ellipse 12.png" alt="">
                     <span>Serviço oferecido por </span>
                     <img src="../img/localiza-hertz-logo-1 1.png" alt="">
                 </div>
            <div>
                <div id="carros">
                    <img src="../img/carros.jpeg" alt="">
                </div>
            <img id="logo2" src="../img/Group 9.png" alt="">
        </div>  
    </div>
</body>
</html>