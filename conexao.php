<?php
   /* 
    $servidor = "localhost";
    $usuario = "525449";
    $password = "Gleydson1409";
    $banco = "525449";*/

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $banco = "corrcarona2";

      /* $servidor = "localhost";
    $usuario = "1449007";
    $password = "strongpassword";
    $banco = "1449007";*/

    $conexao = mysqli_connect($servidor, $usuario, $password, $banco);
    if(!$conexao){
        die("Houve um erro: ". mysqli_connect_error());
    }

?>
