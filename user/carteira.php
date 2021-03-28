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


    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
  
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/styles-card.css" rel="stylesheet" />

    <title>Planner Smiles</title>

    <link rel="stylesheet" href="../lib/owlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../lib/owlCarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/carteira.css">
    <link rel="stylesheet" href="../styles/main.css">
</head>

    <body>


    <script></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>

    <!-- scrips do card blog -->

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="container">
    <div class="containerA">
        <img id="background" src="../img/Image2.png" alt="">
        <img id="logo" src="../img/Group 2.png" alt="">
        <p>Acumule milhas e defina seus objetivos</p>
        <span>Utilize o cartão Planner Smiles e compre com suas milhas, garanta descontos e cashback em lojas parceiras, ao acumular milhas você pode cumprir suas metas de viagens!</span>
        <button id="botao" type="button" >Pedir cartão Planner Smiles</button>
        <h6>Foto: Kendrick Mills/Unsplash</h6>
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
        <div id="divCarteira">
            <div id="tituloCarteira">
                <p>Carteira</p>
            </div>
            <div id="milhas">
                <span>
                    Minhas Milhas
                    <img src="../img/Group 15.png" alt="">
                </span>
                <img id="quantMilhas" src="../img/Group 22.png" alt="minhas-milhas-pic">
            </div>
        </div>
        <img id="cartao" src="../img/cartao.png" alt="">
        <button id="botao2" type="button" >Confira empresas que aceitam SmilesCard</button>


        <div id="divMetas">
           <div id= >
               <p>Metas</p>
                <img src="../img/Ellipse 12.png" alt="">
                <span>Clique para ver mais detalhes</span>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item"><img src="../img/meta1.png" alt=""></div>
                <div class="item"><img src="../img/meta2.png" alt=""></div>
                <div class="item"><img src="../img/meta3.png" alt=""></div>
                
            </div>
        </div>
        <div>
            <img id="logo2" src="../img/Group 9.png" alt="">
        </div>
    </div>  
</div>


<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/owlCarousel/dist/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 4,
            loop: false,
            margin: 20,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            dots: false,
            responsive: {
                0: { items: 1},
                360: { items: 3},
                1000: { items: 3}
            }
        });
    });
</script>
</body>
</html>