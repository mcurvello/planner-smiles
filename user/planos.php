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
    <link rel="stylesheet" href="../styles/planos.css">
</head>
<body>

    <div class="container">
        <div class="containerA">
            <img id="background" src="../img/Image3.png" alt="">
            <img id="logo" src="../img/Group 2.png" alt="">
            <p>Nós temos o plano ideal para você!</p>
            <span>Mas ainda está em dúvidas? Não tem problema, veja nosso comparativo e tire suas dúvidas.</span>
            <button id="botao" type="button" >Veja nosso comparativo</button>
            <h6>Foto: Keszthelyi Timi/Unsplash</h6>
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

                    <img src="../img/Vector 8.png" alt="">
                    <?php
            
            require 'get-pic.php';
                 
?>
       <img src='<?=$photo?>' style="max-width: 40px; max-height: 40px; border-radius:50%;" class="img-fluid" alt="">

               
                </div>
            </div>
            <div id="divPlanos">
                <p>Planos</p>
                <div class="planos">
                    <img src="../img/Plano1.png" alt="">
                    <img src="../img/Plano2.png" alt="">
                    <img src="../img/Plano3.png" alt="">
                </div>
            </div>
            <div id="tituloValores">
                <p>Milhas</p>
                <p>Cash</p>
            </div>
            <div id="valores">
                <div class="milhas">
                    <img src="../img/Group 19.png" alt="">
                    <p>450</p>
                    <span>/mês</span>
                </div>
                <div class="separador"></div>
                <div class="cash">
                    <img src="../img/cash.png" alt="">
                    <p>130</p>
                    <span>/mês</span>
                </div>
            </div>
            <div id="premium">
                <h1>Plano Premium</h1>
                <div id="desconto">
                    70% DE DESCONTO
                </div>
                <p>
                    <img src="../img/Group 18.png" alt="">
                    <img src="../img/Group 19.png" alt="">
                    30 mil milhas de entrada
                    <br>
                    <img src="../img/Group 18.png" alt="">
                    <img src="../img/Group 19.png" alt="">
                    3000 mil milhas por mês
                    <br>
                    <img src="../img/Group 18.png" alt="">
                    Planner Smiles
                    <br>
                    <img src="../img/Group 18.png" alt="">
                    Acesso a Tours 360º em pontos turísticos
                    <br>
                    <img src="../img/Group 18.png" alt="">
                    Seguro viagem
                    <br>
                    <img src="../img/Group 18.png" alt="">
                    Sorteios de realização de metas
                    <br>
                    <img src="../img/Group 18.png" alt="">
                    Descontos e cashback
                </p>
                
            </div>
            <button id="botao2" type="button" >Assinar com milhas</button>
            <button id="botao3" type="button" >Smiles&Cash</button>
           <footer id="footer">
               <img src="../img/Group 20.png" alt="">
                Smiles&Cash é o programa exclusivo de complementação de pagamentos em milhas com dinheiro convencional
           </footer>
            <div>
                <img id="logo2" src="../img/Group 9.png" alt="">
            </div>
        </div>  
    </div>
</body>
</html>