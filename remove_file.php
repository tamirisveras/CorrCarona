<?php
    include_once "conexao.php";
    session_start();
    $id_usuario = $_SESSION['id'];
    $path_antigo = $_SESSION['path'];
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
    header('location: perfil.php');
    exit();

?>