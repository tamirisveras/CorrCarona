
<?php
include_once "conexao.php";
 


    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $banco = "corrcarona2";

   

 $mysqli = new mysqli($servidor, $usuario, $password, $banco);
 if ($mysqli -> connect_errno) {
    echo "Falha ao conectar: (" . $mysqli -> connect_errno . ") " . $mysqli -> connect_error;
 }

