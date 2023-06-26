
<?php
include_once "conexao.php";
 
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

 $mysqli = new mysqli($servidor, $usuario, $password, $banco);
 if ($mysqli -> connect_errno) {
    echo "Falha ao conectar: (" . $mysqli -> connect_errno . ") " . $mysqli -> connect_error;
 }

