<?php 
    include_once "header.php"; 
    include "usuario.php";

    $usuario = usuario_id($_SESSION['id']);  
    $usuario = $usuario->fetch_assoc();
?>
   
    <div class="container">

        <div class="row g-3">
            <div class="col-sm-12 col-lg-8">
                <div class="card w-100 p-3">
                
                    <h2 class="card-title">Dados pessoais</h2>
                    <?php 
                        if(isset($_POST['submit-form'])){
                            include "update.php";
                            $resposta = update();
                            echo "$resposta";
                            echo'<script>
                                setTimeout(function(){ 
                                    $(document).ready(function() {
                                        $(window).prop("location", location.href);
                                    });
                                }, 2000);
                            </script>';
                        }
                    ?>
                    
                    <form class="row" method="POST" enctype="multipart/form-data">
                        
                        
                        <div class="card-body"> 
                            <input type="hidden" class="form-control" value="<?php echo $usuario['id']; ?>" maxlength="80" name="id_usuario" required> 
                            <?php if ($usuario['tipo'] == 'Motorista'){
                                $disponivel =  $usuario['disponivel'];
                                if($disponivel){
                                    $disponivel = "checked";
                                }else{
                                    $disponivel= "";
                                }?>
                            
                            
                                    <div  class="col-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="disponivel" type="checkbox" id="flexSwitchCheckChecked" <?php echo isset($disponivel)? $disponivel:'checked' ?> >
                                            <label class="form-check-label text-nowrap" for="flexSwitchCheckChecked">Disponível</label>
                                        </div>                       
                                    </div>
                            
                            <?php }?>
                            

                            <div class="col-12 mt-2">
                                <label class="form-label">Nome</label> 
                                <input type="text" class="form-control" value="<?php echo $usuario['nome']; ?>" disabled maxlength="80" name="nome" required>
                        
                            </div>                       
                            <div class="col-12 mt-2">

                                    <label class="form-label">Telefone</label> 
                                    <input type= "tel" class="form-control" id="telefone" value="<?php echo $usuario['telefone']; ?>" maxlength="20" name="telefone" required>
                            </div>
                                <div class="col-12 mt-2">
                                    <label class="form-label">Tipo</label> 
                                    <select name="tipoUsuario" class="form-control">
                                        <option class="option" name="tipoUsuario" id="inlineRadio1" value="<?php echo $usuario['tipo']; ?>"><?php echo $usuario['tipo']; ?></option>
                                        <option class="option" name="tipoUsuario" id="inlineRadio1"></option>
                                        <option class="fa-light fa-angle-down" class="option" name="tipoUsuario" id="inlineRadio1" value="Motorista">Motorista</option>
                                        <option class="fa-light fa-angle-down" class="option" name="tipoUsuario" id="inlineRadio2" value="Passageiro">Passageiro</option>
                                    </select>
                                    
                                    
                            </div>
                            <div class="col-3 mt-2">
                                
                            </div>
                           
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button  class="btn btn-success" style="background-color: #34a853;"  name="submit-form" type="submit">SALVAR</button>
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto mt-4" >
                                <button href="" class="btn btn-danger" style="background-color: #f77668;" id="excluir-usuario" data-bs-toggle="modal" data-bs-target="#exampleModal" name="button" type="button">EXCLUIR</button>
                            </div>
                        
                        </div>

                    </form>
                </div>
            </div>
            <div class="col">
                <?php if($usuario['tipo']== 'Motorista'){ 
                    
                    ?>
                    
                    <form class="row" method="POST" action="update_file.php" enctype="multipart/form-data"> 
                        <div  backup="" class="class_3 item_class_0 shadow">
                            <div class='' ></div>
                            <h1 class="">
                                               
                                    <?php 
                                        if(empty($usuario['path'])){
                                            echo '<img src="assets/images/user1.png" class="class_5">';                                           
                                        }else
                                            echo "<img src='$usuario[path]' class='class_5'>";
                                    ?>
                                
                                
                            
                                <br>
                            </h1>
                            <div class="m-3">
                                <label class="form-label text-white" for="nome_imagem">Escolha sua foto de perfil:</label>
                                <input title="Foto do Perfil" accept=".jpg, .jpeg, .png, .gif, .pdf" class="form-control form-control-md mb-2" name="nome_imagem" type="file" value="nome_imagem">
                      
                            <div class="mb-3">
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-success" style="background-color: #34a853;" name="submit-image" type="submit">SALVAR</button>
                                <div class="ms-1">
                                    
                                </div> 
                                <!--<button href="" class="btn btn-danger" id="excluir-foto" data-bs-toggle="modal" data-bs-target="#exampleModal" name="button" type="button">REMOVER</button>-->
                                <button class="btn btn-danger" style="background-color: #f77668;" id="excluir-foto" data-bs-toggle="modal" data-bs-target="#modal-excluir-foto" name="remover_foto" type="button">REMOVER FOTO</button>
          
                            </div>
                            </div>
                        </div>
                    </form>
                <?php }?>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Realente deseja excluir sua conta? </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $usuario['nome'];?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    
                    <form action="excluir.php" method="post">
                        <button type="submit" class="btn btn-danger" style="background-color: #f77668;">Sim</button>
                    </form>
                    
                </div>
                </div>
            </div>
        </div>

        <!--Excluir foto -->
        <div class="modal fade" id="modal-excluir-foto" tabindex="-1" aria-labelledby="exampleModal-foto" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Realente deseja excluir essa foto? </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    
                    <form action="remove_file.php" method="post">
                        <button type="submit" class="btn btn-danger" style="background-color: #f77668;">Sim</button>
                    </form>
                    
                </div>
                </div>
            </div>
        </div>

                            
    </div>

    <script>
        $('#telefone').mask('+55(00)00000-0000');

        function excluir_usuario(nome){
            var nome = nome;
            alert(nome);
        }
    </script>


