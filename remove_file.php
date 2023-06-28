<?php
    include_once "conexao.php";
    ob_start();
    session_start();
    $id_usuario = $_SESSION['id'];
    include "usuario.php";   
    $usuario = usuario_id($_SESSION['id']);  
    $usuario = $usuario->fetch_assoc();

    $path_antigo = $usuario['path'];
    if(!empty($path_antigo)){
        $sql = "UPDATE usuario SET path = '' WHERE id = $id_usuario";  
        $resposta = $conexao->query($sql);
        if($resposta){
            include_once 'manipular_foto.php';

            if(removerImagem($path_antigo)){
                $_SESSION['path'] = '';
            };
            
        }
    }
    ob_start();
    header('location: perfil.php');
    exit();

?>