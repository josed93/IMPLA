<?php
    session_start();
    ob_start();
    if(isset($_SESSION["user"])){
        if($_SESSION["rol"] == "admin"){
            
            if(isset($_GET["codautor"])){
        $codautor=$_GET["codautor"];
      
      $connection = new mysqli("localhost", "root", "zombiejd93", "tienda_musica");
     
       if ($connection->connect_errno) {
          printf("Conexión fallida %s\n", $mysqli->connect_error);
          exit();
      }
    
         
   $result = $connection->query("DELETE FROM AUTOR WHERE COD_AUTOR='".$codautor."' ");
         header("Location:../admin/autor.php");       
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