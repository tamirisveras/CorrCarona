<?php    
    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];  
    $telefone = $_POST['telefone'];  

    $telefone = str_ireplace("+", "", $telefone);
    $telefone = str_ireplace(" ", "", $telefone);
    $telefone = str_ireplace("(", "", $telefone);
    $telefone = str_ireplace(")", "", $telefone);
    $telefone = str_ireplace("-", "", $telefone);
    $tipoUsuario = $_POST['tipoUsuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE matricula =$matricula ";
    $resultado = $conexao->query($sql);
    if ($resultado->num_rows > 0){
        $_SESSION['msg'] = "Matricula já cadastrada";
        ob_start();
        header("location: index.php");
        exit;
    }else
        $sql = "INSERT INTO usuario(nome, matricula, telefone, tipo, senha) \n
        VALUES ('$nome', '$matricula', '$telefone', '$tipoUsuario', '$senha')";
        $resultado = $conexao->query($sql);
        if($resultado){
            $_SESSION['msg'] = "Usuário Cadastrado com sucesso! Faça seu login";
            ob_start();
            header("location: login.php");
            exit;
        }else{
            return false;
        }
