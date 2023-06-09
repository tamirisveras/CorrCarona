<?php include_once "header.php" ?>
    <main class="cards">
         
        <?php 
            if($_SESSION['tipoUsuario'] == 'Motorista'){
                echo '
                    <div class="row g-3">
                        <div class="col">';
                            
                                include "perfil.php";
                    echo '      
                        </div>
                    </div>
            ';
            }
        ?>

        <?php 
            if($_SESSION['tipoUsuario'] == 'Passageiro'){
                include "usuario.php";
                $motorista_disponivel = motorista_disponivel();
        ?>
    
            <div class="row">
                <div class="col-sm-12" style="text-align: center;">
                    <p>Aqui estão os motoristas disponíveis. Envie uma mensagem para o link do whatsapp dos motoristas disponíveis e boa carona!</p>
                </div>
                
            </div>

            
            <?php              
                if ($motorista_disponivel->num_rows > 0) {
                    echo "<section class='class_1' >
                        <div class='row g-3'>
                    ";                    
                        while ($row = $motorista_disponivel->fetch_assoc()) {?>                            
                                <div class="col-sm-12 col-lg-4">
                                    <div  backup="" class="class_3 item_class_0 shadow">
                                        <div class='' >
                                        </div>
                                        <h1 class="">
                                            <?php 
                                                if(empty($row['path'])){
                                                    echo '<img src="assets/images/user1.png" class="class_5">';                                           
                                                }else{
                                                    echo "<img src='$row[path]' class='class_5'>";                                                
                                                }
                                            ?>                                        
                                            <br>
                                        </h1>
                                        
                                        <h1 class="class_6"  >
                                            <?php  echo "<h3>" . $row['nome'] . "</h3>";?>
                                            <br>
                                        </h1>
                                        
                                        <button class="class_8"> 
                                            <?php echo "<a class='nav-link px-2 link-dark text-light' href='https://wa.me/" . $row['telefone'] . "' target='_blank'>Whatsapp</a>"; ?>
                                        </button>
                                        <div class="mb-3"></div>
                                    
                                    </div>
                                </div>
                        <?php                        
                        }
                    echo " </div>                    
                    </section>";
                }  else {
                    echo '<div class="alert alert-info message" role="alert">Nenhum motorista cadastrado.</div>';
                }
            }
                ?>
        
    </main>

