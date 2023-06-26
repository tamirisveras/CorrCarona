<?php
  

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $banco = "corrcarona2";

    

    $conexao = mysqli_connect($servidor, $usuario, $password, $banco);
    if(!$conexao){
        die("Houve um erro: ". mysqli_connect_error());
    }

?>
