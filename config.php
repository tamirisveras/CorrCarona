
<?php
include_once "conexao.php";
 


$servidor = $_ENV['BD_HOST'];
$usuario = $_ENV['BD_USER'];
$password = $_ENV['BD_PASS'];
$banco = $_ENV['BD_NAME'];


   

 $mysqli = new mysqli($servidor, $usuario, $password, $banco);
 if ($mysqli -> connect_errno) {
    echo "Falha ao conectar: (" . $mysqli -> connect_errno . ") " . $mysqli -> connect_error;
 }

