<?php
    include_once 'conexao.php';
    session_start();
    $id_usuario = $_SESSION['id'];

    $sql = "SELECT * FROM usuario WHERE id = $id_usuario";

    $usuario = $conexao->query($sql);
    if($usuario->num_rows > 0){
        $sql = "DELETE FROM usuario WHERE id = $id_usuario";
        $conexao->query($sql);
       header("location: sair.php");

    }else{
        return false;
    }

?>