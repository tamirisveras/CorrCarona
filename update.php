
<?php

    function update(){
        include_once 'conexao.php';

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
        
 // Alterando senha 

/*$senha = $_POST['senha'];
$senhanova = $_SESSION['senha'];
if ($senha === $senhanova) {
} else {
    return '<div class="alert alert-danger" role="alert"Senha incorreta!</div>';
}*/


        $sql = "UPDATE usuario \n
        SET telefone = '$telefone', tipo = '$tipoUsuario', disponivel = $disponivel \n
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
    /*$imagem = $_FILES['nome_imagem'];
   

        $pasta = "imagem/";
        $nomeAtualImagem = $imagem['name'];
        $novoNomeImagem = time();
        $extensao = strtolower(pathinfo($nomeAtualImagem, PATHINFO_EXTENSION));
        
        if($extensao != "jpg" && $extensao != "png"){           
            die("Extensão de arquvio não permitida");
        }else{

        
            $resposta = move_uploaded_file($imagem["tmp_name"], $pasta . $novoNomeImagem . "." . $extensao);
            $path = $pasta . $novoNomeImagem . "." . $extensao;
           
  
            if($resposta){
                
                $sql = "UPDATE usuario
                SET telefone = '$telefone', tipo = '$tipoUsuario', path = '$path', disponivel = $disponivel
                WHERE id = $id_usuario            
                ";
                echo $sql;

            
                $resultado = $conexao->query($sql);
            
                if($resultado){      
                    include_once "manipular_foto.php";              
                    session_start();
                    $path_antigo = $_SESSION['path'];
                    
                    $retorno = removerImagem($path_antigo);
                  

                    $_SESSION['telefone'] = $telefone;
                    $_SESSION['tipoUsuario'] = $tipoUsuario;
                    $_SESSION['disponivel'] = $disponivel;
                    $_SESSION['path'] = $path;
                    $_SESSION['msg'] = "Usuário Alterado com sucesso! ";
                    header('location: perfil.php');
                }else{
                    return false;
                }
            }
        }*/


   

    
?>
