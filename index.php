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
                
                <h2>Faça seu Cadastro</h2>
                <ul class="menu-form">
                    <li><a href="login.php">Login</a></li>
                    <li><a href="index.php">Cadastro</a></li>
                </ul>
                <form method="POST" action="cadastrar.php" enctype="multipart/form-data">
                    
                    <input type="text" class="form-control shadow-sm rounded" placeholder="Nome Completo" maxlength="80" name="nome" required>
                    <input type="text" class="form-control shadow-sm rounded" placeholder="Matrícula" maxlength="20" name="matricula" required>
                    <input type="password" class="form-control shadow-sm rounded" placeholder="Senha" maxlength="20" name="senha" required>
                    <input type= "tel" class="form-control shadow-sm rounded" placeholder="Whatsapp" id="telefone" maxlength="20" name="telefone" required>
                    
                    
                    <select name="tipoUsuario" class="form-control shadow-sm rounded">
                        <option class="option" value="title">Tipo de usuário</option>
                        <option class="option" name="tipoUsuario" id="inlineRadio1" value="Motorista">Motorista</option>
                        <option class="option" name="tipoUsuario" id="inlineRadio2" value="Passageiro">Passageiro</option>
                    </select>
                   
                    <input class="bt-login mt-2 " type="submit" name="submit" value="CADASTRAR">

                    <p>Já possui uma conta?  Faça seu <a href="login.php" class="cd"> login!</a></p>

                </form>
            </div>
        </section>
             
    </body>
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script>
        $('#telefone').mask('+55 (00) 00000-0000');
    </script>
    <!--
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
    </script>-->
    
</html>