<?php
    session_start();
    ob_start();
    if(isset($_SESSION["user"])){
        if($_SESSION["rol"] == "admin"){
            
            if(isset($_GET["codiscogra"])){
        $codiscogra=$_GET["codiscogra"];
      
      $connection = new mysqli("localhost", "root", "zombiejd93", "tienda_musica");
     
       if ($connection->connect_errno) {
          printf("Conexión fallida %s\n", $mysqli->connect_error);
          exit();
      }
    
         
   $result = $connection->query("DELETE FROM DISCOGRAFICA WHERE COD_DISCOGRA='".$codiscogra."' ");
         header("Location:../admin/discogra.php");       
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