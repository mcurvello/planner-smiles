<?php
require '../conn.php';




    $stmt = $db->prepare("INSERT INTO users(login, senha, nome, email, foto, descricao, naturalidade, idiomas) VALUES(:LOGIN, :SENHA, :NOME, :EMAIL, :IMGLINK, :DESCRICAO, :NATURALIDADE, :IDIOMAS)");
    

    $dirUploads = "upload-blog";

    if(!is_dir($dirUploads)){
        mkdir($dirUploads);
    }
        $extensao = strtolower(substr($_FILES['img_link']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "upload-blog". DIRECTORY_SEPARATOR;
        $file_path =  $diretorio.$novo_nome;
        move_uploaded_file($_FILES['img_link']['tmp_name'], $file_path);

    
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $img_link = $file_path;
    $descricao = $_POST['descricao'];
    $naturalidade = $_POST['naturalidade'];
    $idiomas = $_POST['idiomas'];


    $stmt-> bindParam(":LOGIN", $login);
    $stmt-> bindParam(":SENHA", $senha);
    $stmt-> bindParam(":NOME", $nome);
    $stmt-> bindParam(":EMAIL", $email);
    $stmt-> bindParam(":IMGLINK", $img_link);
    $stmt-> bindParam(":DESCRICAO", $descricao);
    $stmt-> bindParam(":NATURALIDADE", $naturalidade);
    $stmt-> bindParam(":IDIOMAS", $idiomas);
       
    $stmt->execute();

   header('Location: ../user/home.php');

    







?>
