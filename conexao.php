<?php
    include_once __DIR__ . "/vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
  

    $servidor = $_ENV['BD_HOST'];
    $usuario = $_ENV['BD_USER'];
    $password = $_ENV['BD_PASS'];
    $banco = $_ENV['BD_NAME'];

    

    $conexao = mysqli_connect($servidor, $usuario, $password, $banco);
    if(!$conexao){
        die("Houve um erro: ". mysqli_connect_error());
    }

?>
