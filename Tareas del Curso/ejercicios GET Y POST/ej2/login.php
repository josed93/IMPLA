<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing info with POST and HTML FORMS using a single file.</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="materialize/materialize.min.css">
    <script src="materialize/materialize.min.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  
  <body>
<script>
    
  $( document ).ready(function() {
            $( "#dialog" ).dialog();
      });
  </script>
     

      <?php if (!isset($_POST["username"])) : ?>
       <div id="dialog" title="Introduzca user y pass" >
        <form method="post">
          Usuario: 
          <input type="text" id="username" name="username">
          Contraseña: 
          <input type="password" id="password" name="password">
          <input type="submit" id="enter" value="Entrar" class="waves-effect waves-light btn">
        
          
        </form>
        
        </div>
      <?php else: ?>

        <?php
            $user=$_POST["username"];//pepe
            $pass=$_POST["password"];//1234

            if ($user == "pepe" && $pass == "1234"){
                
                header ("Location: matricula.php");              
            }
            else{
                
                
            
                echo "<a class='btn' onclick='Materialize.toast('I am a toast', 4000)'>Usuario o contraseña incorrectos!</a>";

                header ("refresh:3;url=login.php");
                
       
                /*echo "<div id=error>";
                echo "Usuario o Contraseña incorrectos";
                echo "</div>";*/
                
                /*echo "<script language='javascript'>";
            echo "alert('Usuario o Contraseña incorrectos')";
        echo "</script>";*/
            }
        ?>
        

      <?php endif ?>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      

  </body>
</html>