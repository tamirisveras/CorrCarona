<?php
valida_login();
function valida_login(){
    include_once "conexao.php";
    $senha = $_POST["senha"];
    $matricula = $_POST["matricula"];

    $query = "SELECT * FROM usuario WHERE matricula = '$matricula' AND senha = '$senha'";
    $resultado = $conexao->query($query);



    if ($resultado->num_rows > 0) {
        $resultado = $resultado->fetch_assoc();
        session_start();
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['matricula'] = $resultado['matricula'];
        $_SESSION['telefone'] = $resultado['telefone'];
        $_SESSION['senha'] = $resultado['senha'];
        $_SESSION['tipoUsuario'] = $resultado['tipo'];
        $_SESSION['path'] = $resultado['path'];
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['disponivel'] = $resultado['disponivel'];

       header("Location: logado.php");
        
        
    } else {
        header("Location: login.php");
       
    }

}

?>
