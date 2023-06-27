<?php
    include_once __DIR__ . "/vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    #require "../../vendor/autoload.php";
    #$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "./../../../");
    #$dotenv->load();
    #print_r($_ENV);

    #ou

    #$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2)); 
  

    $servidor = $_ENV['BD_HOST'];
    $usuario = $_ENV['BD_USER'];
    $password = $_ENV['BD_PASS'];
    $banco = $_ENV['BD_NAME'];
    $port = $_ENV['BD_PORT'];

    

    $conexao = mysqli_connect($servidor, $usuario, $password, $banco, $port);
    if(!$conexao){
        die("Houve um erro: ". mysqli_connect_error());
    }

?>
