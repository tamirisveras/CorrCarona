
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
        session_start();
        $_SESSION['msg'] = "Matricula já cadastrada";
        header('location: index.php');
    }else

        $sql = "INSERT INTO usuario(nome, matricula, telefone, tipo, senha) \n
        VALUES ('$nome', '$matricula', '$telefone', '$tipoUsuario', '$senha')";

        $resultado = $conexao->query($sql);

        if($resultado){
            session_start();
            $_SESSION['msg'] = "Usuário Cadastrado com sucesso! Faça seu login";
            header('location: login.php');
        }else{
            return false;
        }

        /*
        $imagem = $_FILES['nome_imagem'];

        $pasta = "imagem/";
        $nomeAtualImagem = $imagem['name'];
        $novoNomeImagem = time();
        $extensao = strtolower(pathinfo($nomeAtualImagem, PATHINFO_EXTENSION));
        
        if($extensao != "jpg" && $extensao != "png"){
            die("Extensão de arquvio não permitida");
        }
        $resposta = move_uploaded_file($imagem["tmp_name"], $pasta . $novoNomeImagem . "." . $extensao);
        $path = $pasta . $novoNomeImagem . "." . $extensao;
       
        if($resposta){
            
            $sql = "INSERT INTO usuario(nome, matricula, telefone, tipo, path) \n
            VALUES ('$nome', '$matricula', '$telefone', '$tipoUsuario', '$path')";
        
            $resultado = $conexao->query($sql);
        
            if($resultado){
                session_start();
                $_SESSION['msg'] = "Usuário Cadastrado com sucesso! Faça seu login";
                header('location: login.php');
            }else{
                return false;
            }
        } */

   

    
?>
