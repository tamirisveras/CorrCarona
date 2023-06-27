<?php 

function motorista_disponivel(){
    include "conexao.php";

    $sql = "SELECT * FROM usuario WHERE tipo = 'Motorista' and disponivel = 1 ";
    $resposta = $conexao->query($sql);
    return $resposta;
}

function usuario_id($id){
    include "conexao.php";

    $sql = "SELECT * FROM usuario WHERE id = $id";
    $resultado = $conexao->query($sql);
    return $resultado;
}