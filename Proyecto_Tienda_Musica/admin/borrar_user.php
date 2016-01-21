<?php
    session_start();
    ob_start();
    if(isset($_SESSION["user"])){
        if($_SESSION["rol"] == "admin"){
            
            if(isset($_GET["coduser"])){
        $cod_user=$_GET["coduser"];
      
      $connection = new mysqli("localhost", "root", "zombiejd93", "tienda_musica");
     
       if ($connection->connect_errno) {
          printf("Conexión fallida %s\n", $mysqli->connect_error);
          exit();
      }
    
         
   $result = $connection->query("DELETE FROM USUARIO WHERE COD_USU='".$cod_user."' ");
         header("Location:../admin/ausuarios.php");       
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