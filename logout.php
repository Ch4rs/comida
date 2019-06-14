<?php
//este codigo es para iniciar sesion :D
    session_start();
    $_SESSION = array();
    session_destroy();
         echo '<script>window.location.href="login.php";</script>';
    exit;
?>



