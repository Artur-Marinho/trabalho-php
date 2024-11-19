<?php 

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $query = "SELECT * FROM login WHERE user='$usuario' and senha='$senha'";
    $conexao = new PDO('mysql:host=localhost; dbname=studio_tatuagem', 'root', '');
    $resultado = $conexao->query($query);
    $logado = $resultado->fetch();
    $id_logado = $logado['id_login'];

    if($logado == null){
        //usuário ou senhas invalidas
        header('Location: usuarioerro.php');
    }else {
        session_start();
        $_SESSION['usuario_logado'] = $id_logado;
        header('Location: cliente.php');

        die();
    }
    ?>