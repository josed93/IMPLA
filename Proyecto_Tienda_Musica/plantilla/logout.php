<?php
    session_start();
    session_destroy();
    
    echo '<script type="application/javascript">alert("La sesión del usuario '.$_SESSION["user"].' se ha cerrado."); window.location.href = "../inicio/inicio.php";</script>';

?>