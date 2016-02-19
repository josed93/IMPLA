<?php
    session_start();
    ob_start();
    if(isset($_SESSION["user"])){
        


    $connection = new mysqli("localhost", "root", "zombiejd93", "tienda_musica");
     
       if ($connection->connect_errno) {
          printf("Conexión fallida %s\n", $mysqli->connect_error);
          exit();
      }
        $result = $connection->query("UPDATE USUARIO SET ESTADO='inactivo' WHERE USERNAME= '".$_SESSION['user']."'");
            
            unset($connection);
        session_destroy();
        
        header("Location:../inicio/inicio.php");
    }
    else{
        header("Location:../inicio/inicio.php");
    }
          
    
        
        
        






?>