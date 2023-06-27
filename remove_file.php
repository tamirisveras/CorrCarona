<?php
if ($_SESSION['tipoUsuario'] == 'Motorista') {
    if (isset($_SESSION['path'])) {

        unlink($_SESSION['path']);
        unset($_SESSION['path']);
    }

    $fotoPadrao = 'assets/images/user.png';

    $_SESSION['path'] = $fotoPadrao;
}
?>