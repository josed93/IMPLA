<?php
    session_start();
    ob_start();


    $connection = new mysqli("localhost", "root", "zombiejd93", "tienda_musica");
     
       if ($connection->connect_errno) {
          printf("Conexión fallida %s\n", $mysqli->connect_error);
          exit();
      }
        $result = $connection->query("UPDATE USUARIO SET ESTADO='inactivo' WHERE USERNAME= '".$_SESSION['user']."'");
            
            unset($connection);
        
        header("Location:./perfil.php");
          
    
        
        
        






?>