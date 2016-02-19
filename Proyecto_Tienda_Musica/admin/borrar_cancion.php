<?php
    session_start();
    ob_start();
    if(isset($_SESSION["user"])){
        if($_SESSION["rol"] == "admin"){
            
            if(isset($_GET["codcan"])){
        $codcan=$_GET["codcan"];
      
      $connection = new mysqli("localhost", "root", "zombiejd93", "tienda_musica");
     
       if ($connection->connect_errno) {
          printf("Conexión fallida %s\n", $mysqli->connect_error);
          exit();
      }
    
         
   $result = $connection->query("DELETE FROM CANCION WHERE COD_CANCION='".$codcan."'");
         header("Location:../admin/album.php");       
            }else{
            
            }
        
        }
        else{
        header("Location:../inicio/inicio.php");
        }
        
    }
    else{
        header("Location:../inicio/inicio.php");
    }
?>