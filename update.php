
<?php
    function update(){
        include "conexao.php";
       
        $telefone = $_POST['telefone'];   
        $tipoUsuario = $_POST['tipoUsuario'];
        //$imagem = $_FILES['nome_imagem'];
        $id_usuario = $_POST['id_usuario'];
        $disponivel = isset($_POST['disponivel'])?1:0;

        $telefone = str_ireplace("+", "", $telefone);
        $telefone = str_ireplace(" ", "", $telefone);
        $telefone = str_ireplace("(", "", $telefone);
        $telefone = str_ireplace(")", "", $telefone);
        $telefone = str_ireplace("-", "", $telefone);

        $sql = "UPDATE usuario \n
        SET telefone = '$telefone', tipo = '$tipoUsuario', disponivel = '$disponivel' \n
        WHERE id = $id_usuario";
       
        $resultado = $conexao->query($sql);

        if($resultado){                 
                
            $_SESSION['telefone'] = $telefone;
            $_SESSION['tipoUsuario'] = $tipoUsuario;
            $_SESSION['disponivel'] = $disponivel;
            //header('location: perfil.php');
            return  '<div class="alert alert-success" role="alert">Perfil atualizado com sucesso!</div>';
            
        }else{
            return  '<div class="alert alert-danger" role="alert"Não alterado!</div>';
        }
    }
    