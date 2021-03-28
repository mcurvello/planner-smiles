<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
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
  
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/styles-card.css" rel="stylesheet" />

    <title>Planner Smiles</title>

    <link rel="stylesheet" href="lib/owlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/owlCarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

<script></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!-- scrips do card blog -->

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <div class="container">
        <div class="containerA">
            <img id="background" src="./img/Image.png" alt="">
            <img  id="logo" src="./img/Group 2.png" alt="">
            <p>Planeje suas viagens com antecedência</p>
            <span>Você pode planejar mesmo antes de decidir seu destino e ainda ganhar recompensas!</span>
            <button id="botao" type="button" >Conheça o Planner Smiles</button>
            <button id="botaoLogin"  data-toggle="modal" data-target="#loginModal" >
                LOGIN
                <img src="./img/Vector 12.png" alt="">
            </button>
            <h6>Foto: Daniel J. Schwarz/Unsplash</h6>
        </div>
        <div class="containerB">
            <div id=divMenu>
                <nav id="menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Carteira</a></li>
                        <li><a href="#">Planos</a></li>
                        <li><a href="#" data-target="#loginEstudante">Loja</a></li>
                    </ul>
                </nav>
                <div>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#loginModal">Login</button>
                    <img src="./img/Vector 8.png" alt="">
                    <img src="./img/Vector.png" alt="">
                </div>
            </div>
    <!-- Modal Login -->
    <div class="modal fade"  id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  " role="document">
            <div class="modal-content" id="content">
                    <h5 class=""  id="exampleModalLabel">Seja bem vindo!</h5>
              
                <div class="modal-body " style="margin-top: 0px;">
                <div class="form-group">
  
                <form action="login/login.php" style="top: 0px; padding:0%" method="POST">
                        <div class="form-group">
                            <input name="login" type="text" class="form-control" id="usuario" id="id_login" aria-describedby="loginPost" placeholder="Usuário">
                        </div>
                        <div class="form-group">
                            <input name="senha" type="password" class="form-control" id="id_senha" placeholder="Senha">
                        </div>
                        <div class="fazerlogin">
                        <h4>Esqueceu sua senha?</h4>
                        <button id="botao-login" type="submit" >Login</button>
                        </form>
                    </div>

                    </div>
                    <div class="form-group">

                    <h2 class="h2login">Ainda não possui uma conta?</h2>

                    <button id="botao-planner" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroEstudanteModal" >Conheça o Planner Smiles</button>
                    </div>

                   
                </div>

            </div>
        </div>

    </div> <!-- Modal Login Estudante-->
  
      <!-- Modal Cadastro Estudante-->
      <div class="modal fade" id="cadastroEstudanteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  " role="document">
            <div class="modal-content">
                    <h5 class="modal-title" id="exampleModalLabel">Crie sua conta!</h5>
                
                <div class="modal-body">
                    <form action="cadastro/user.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">

                            <input name="login" type="text" class="form-control" id="id_login" aria-describedby="nomePost" placeholder="Login">
                            <input name="senha" type="text" class="form-control" id="id_senha" aria-describedby="nomePost" placeholder="Senha">
                            <input name="nome" type="text" class="form-control" id="id_nome" placeholder="Nome">
                            <input name="email" type="textarea" class="form-control" id="id_email" placeholder="Email">
                            <input name="descricao" type="textarea" class="form-control" id="id_descricao" placeholder="Descreva-se :D">
                            <input name="idiomas" type="textarea" class="form-control" id="id_idiomas" placeholder="Quais idiomas você fala?">
                            <input name="naturalidade" type="textarea" class="form-control" id="id_naturalidade" placeholder="Seu país de naturalidade">
        
                            <input name="img_link" class="form-control" type="file" class=""  placeholder="Insira o link da sua imagem..." >
                        
                            <button type="submit" class="btn btn-primary form-control">Criar Perfil</button>
                        
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div><!-- Modal Cadastro Estudante-->

            
            <div id="divPesquisar">
                <img src="./img/Vector2.png" alt="Buscar"> 
                <input type="text" id="txtPesquisar" placeholder="Pesquisar hotéis e destinos">
            </div>
            <div id="divDestino">
                <div id="tituloDestino">
                    <p>Destino</p>
                    <img src="./img/Ellipse 12.png" alt="">
                    <span>Clique para selecionar um destino</span>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="img/Destino1.png" alt=""></div>
                    <div class="item"><img src="img/Destino2.jpeg" alt=""></div>
                    <div class="item"><img src="img/Destino3.png" alt=""></div>
                    <div class="item"><img src="img/Destino4.png" alt=""></div>
                </div>
            </div>
            <div id="divHospedagem">
               <div id= >
                   <p>Hospedagem</p>
                    <img src="./img/Ellipse 12.png" alt="">
                    <span>Serviço oferecido por </span>
                    <img src="./img/Group 4.png" alt="">
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="img/Hospedagem1.png" alt=""></div>
                    <div class="item"><img src="img/Hospedagem2.png" alt=""></div>
                    <div class="item"><img src="img/Hospedagem3.png" alt=""></div>
                    <div class="item"><img src="img/Hospedagem4.png" alt=""></div>
                </div>
            </div>
            <div>
                <img id="logo2" src="img/Group 9.png" alt="">
            </div>
        </div>  
    </div>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/owlCarousel/dist/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 4,
                loop: true,
                margin: 20,
                nav: false,
                autoplay: true,
                autoplayTimeout: 2000,
                dots: false,
                responsive: {
                    0: { items: 1},
                    360: { items: 4},
                    1000: { items: 4}
                }
            });
        });
    </script>
  <!-- Bootstrap core JS-->


</body>
</html>