
<?php
    include_once 'conexao.php';
    session_start();

    $imagem = $_FILES['nome_imagem'];
    $usuario_id = $_SESSION['id'];

    $imagem = $_FILES['nome_imagem'];
   

        $pasta = "assets/images/";
        $nomeAtualImagem = $imagem['name'];
        $tempPath = $imagem["tmp_name"];
        
        $qualidade= 60;
        $extensao = strtolower(pathinfo($nomeAtualImagem, PATHINFO_EXTENSION));
        $base_name = basename($nomeAtualImagem);
        $originalPath = $pasta.$base_name; 
        $novoNomeImagem = $pasta.time(). "." . $extensao;

        if(empty($nomeAtualImagem)){
            header('location: perfil.php');
           
        }else{

          

            if($extensao != "jpg" && $extensao != "jpeg" && $extensao != "png"){           
                die("Extensão de arquvio não permitida");
            }else{

                $path = comprimir_imagem( $tempPath, $novoNomeImagem, $qualidade);

                #$resposta = move_uploaded_file($imagem["tmp_name"], $pasta . $novoNomeImagem . "." . $extensao);
                #$path = $pasta . $novoNomeImagem . "." . $extensao;
            
                $sql = "UPDATE usuario
                SET path = '$path'
                WHERE id = $usuario_id            
                ";
                        
                $resultado = $conexao->query($sql);
            
                if($resultado){      
                    include_once "manipular_foto.php";              
                    
                    $path_antigo = $_SESSION['path'];
                    
                    $retorno = removerImagem($path_antigo);
                
                    $_SESSION['path'] = $path;
                    $_SESSION['msg'] = "Imagem Alterada com sucesso! ";
                    header('location: perfil.php');
                }else{
                    return false;
                    }
                
            }
        }

    function comprimir_imagem($tempPath, $originalPath, $qualidade){
        $imgsize = getimagesize($tempPath);
        $mime = $imgsize['mime'];
        var_dump($mime);
        switch($mime){
            
            case 'image/jpeg':
                $image = imagecreatefromjpeg($tempPath);
                break;
            case 'image/png':
                $image = imagecreatefrompng($tempPath);
                break;
        }
        imagejpeg($image, $originalPath, $qualidade);
        return $originalPath;

    }
    
?>
