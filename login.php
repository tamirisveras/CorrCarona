<?php
session_start();

if (isset($_SESSION['msg'])) {
    $mensagem = $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="tela_login/style/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        
    </head>

    <body>

        <section class="figura">
            <div class="logo">
                <img src="tela_login/style/imagens/CorrCarona.png" alt="Logo CorrCarona" width="200px">
            </div>
            <div class="ilustra">
                <img src="tela_login/style/imagens/Carpool-pana.svg" alt="Ilustaração da  página principal">
            </div>
        </section>
        <section class="formulario">
            <div class="container-form">
            
                <h2>Faça seu Login</h2>
                <p class="cd">Acesse sua conta informando apenas a sua matrícula e sua senha!</p>
                <ul class="menu-form">
                    <li><a href="login.php">Login</a></li>
                    <li><a href="index.php">Cadastro</a></li>
                </ul>
                <form method="POST" action="validar_login.php">
                    
                    <input type="text" class="form-control shadow-sm rounded" placeholder="Matrícula" maxlength="20" name="matricula" required>
                    <input type="password" class="form-control shadow-sm rounded" placeholder="Senha" maxlength="20" name="senha" required>
                    <input class="bt-login " type="submit" name="submit-login" value="ACESSAR">
                    <!--<input class="bt-login" type="button" name="submit-login" value="ACESSAR" data-bs-toggle="modal" data-bs-target="#exampleModal">-->
                    
                </form>
                <p>Esqueceu sua senha?<a href="https://instagram.com/rayline.mendes" class="cd"> Contate-nos </a></p>
            </div>
        </section>
             
    </body>
    <script>
    
        if (!localStorage.nossoCooke) {
            document.querySelector('.box-cookies').classList.remove('hide')
        }
        
        const acceptCookies = () => {
            document.querySelector('.box-cookies').classList.add('hide')
            localStorage.setItem("nossoCooke", "accept");
        }

        const btnCookies = document.querySelector(".btn-cookies");
        btnCookies.addEventListener('click', acceptCookies)
    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Usuário não cadastrado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Matrícula ou Senha inválidas
            </div>
            <div class="modal-footer">
                <form action="login.php" method="post">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>    
                    <button type="submit" class="btn btn-danger">Voltar</button>
                </form>
            </div>
        </div>
    </div>
    </div>

</html>