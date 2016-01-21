<?php
    session_start();
    ob_start();
    if(isset($_SESSION["user"])){
        if($_SESSION["rol"] == "admin"){
        
        }
        else{
        header("Location:../inicio/inicio.php");
        }
        
    }
    else{
        header("Location:../inicio/inicio.php");
    }
?>
<!DOCTYPE html>
<html lang="">
<title>Álbum</title>
<?php include("../plantilla/header.php");?>

<body>
    
    <div id="top">
        <div id="logo">
            <a href="../admin/ausuarios.php"><img src="../images/prueba.png"></a>
            
        </div>
        <div id="logo2">
            <a href="../admin/ausuarios.php"><img src="../images/logo2.PNG"></a>
            
        </div>
        <?php include("../plantilla/searchnbar.php");?>
       <?php
    if(isset($_POST["user"])){
        
        $userlogin=$_POST["user"];
        $passlogin=$_POST["password"];

    //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "root", "zombiejd93", "tienda_musica");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Conexión fallida %s\n", $mysqli->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */

        $consulta="SELECT * FROM usuario where username='".$userlogin."'and password=md5('".$passlogin."');";

      if ($result = $connection->query($consulta)) {
          if($result->num_rows===0){
            
              ?>
              <script type="text/javascript"> 
                  $(document).ready( function() {
                    $('#failedlogin').show();
                    $('#failedlogin').delay(3000).fadeOut();
    
                  });
            </script>
              
              <?php
              
              
          }else{
              
           while($obj = $result->fetch_object()) {
                  $rol=$obj->ROL;
                  
                  $_SESSION["user"]=$userlogin;
                  $_SESSION["rol"]=$rol;
                  
                  }
           
            }
       
      }else{
        ?>
              <script type="text/javascript"> 
                  $(document).ready( function() {
                    $('#novalido').show();
                    $('#novalido').delay(3000).fadeOut();
    
                  });
            </script>
              
              <?php
        }
    }
   
    ?>
    <?php
    
    if(isset($_SESSION["user"])){
    ?>  
       
        <div>
          <ul id="ent" class="navbar-left">
            <li class="dropdown">
              <a  href="#" class="dropdown-toggle" data-toggle="dropdown"><b><?php echo $_SESSION["user"]?></b> <span class="caret"></span></a>
                <ul id="login-dp2" class="dropdown-menu" style="width:100px;">
                    <li>
                         <div class="row">
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li id="uno"><a href="../perfil/perfil.php"><span class="glyphicon glyphicon-user"></span>Ver perfil</a></li>
                                        <li id="dos"><a href="../plantilla/logout.php"><span class="glyphicon glyphicon-log-in"></span>Cerrar sesión</a></li>

                                    </ul>


                                        
                                </div>

                         </div>
                    </li>
                </ul>
            </li>
          </ul>
        </div>
        
     
        
    <?php   
    }
    else{
    ?>
        <div>
          <ul id="ent" class="navbar-left">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Entrar</b> <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu">
                    <li>
                         <div class="row">
                                <div class="col-md-12">


                                        <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                 <label class="sr-only" for="exampleInputUsername2">Usuario</label>
                                                 <input type="text" class="form-control" id="name" name="user" placeholder="Usuario" required>
                                            </div>
                                            <div class="form-group">
                                                 <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                                                 <input type="password" class="form-control" id="pass" name="password" placeholder="Contraseña" required>
                                                 <div class="help-block text-right"><a href="">Olvidaste la contraseña ?</a></div>
                                            </div>
                                            <div class="form-group">
                                                 <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                            </div>
                                            <div class="checkbox">
                                                 <label>
                                                 <input type="checkbox"> Mantener en sesión
                                                 </label>
                                            </div>
                                     </form>
                                </div>

                         </div>
                    </li>
                </ul>
            </li>
          </ul>
        </div>
        <div id="reg">
               <a href="../registro/registro.php" id="regbutton"><span><img src="../images/iconos_menu/reg.PNG"><b>Registrarse</b></span><em></em></a>
        </div>
    
                 
    <?php    
    }
        

?>

         
          
           
        <div id="carrito" class="rotateinfinite">
                <a href="#"><img src="../images/carrito.PNG"></a>
                
        </div>
            
            
        
        
        
        
    </div>
        <?php include("../admin/amenu.php");?>
        <?php include("../plantilla/alerts.php");?>

    <div id="center">
       
     <?php
      
      $connection = new mysqli("localhost", "root", "zombiejd93", "tienda_musica");
     
       if ($connection->connect_errno) {
          printf("Conexión fallida %s\n", $mysqli->connect_error);
          exit();
      }
    
     
   $result = $connection->query("SELECT * FROM USUARIO");
    

   ?>
      <div class="col-md-12">
       <table style="margin-top:2%;" class="table table-hover table-bordered table-responsive ">
       <tr>
          
           <th>USERNAME</th>
           <th>ROL</th>
           <th>ESTADO</th>
           <th>DNI</th>
           <th>NOMBRE</th>
           <th>APELLIDOS</th>
           <th>FECHA_NAC</th>
           <th>DIRECCION</th>
           <th>TLF</th>
           <th>EMAIL</th>
           <th>PROVINCIA</th>
           <th>LOCALIDAD</th>
           <th>PAIS</th>
           
       </tr>
       
      <?php
          //RECORRER OBJETOS DE LA CONSULTA
          while($obj = $result->fetch_object()) {
              //PINTAR CADA FILA
              echo "<tr>";
              
              echo "<td>".$obj->USERNAME."</td>";
              echo "<td>".$obj->ROL."</td>";
              echo "<td>".$obj->ESTADO."</td>";
              echo "<td>".$obj->DNI."</td>";
              echo "<td>".$obj->NOMBRE."</td>";
              echo "<td>".$obj->APELLIDOS."</td>";
              echo "<td>".$obj->FECHA_NAC."</td>";
              echo "<td>".$obj->DIRECCION."</td>";
              echo "<td>".$obj->TLF."</td>";
              echo "<td>".$obj->EMAIL."</td>";
              echo "<td>".$obj->PROVINCIA."</td>";
              echo "<td>".$obj->LOCALIDAD."</td>";
              echo "<td>".$obj->PAIS."</td>";
              
          
              echo "</tr>";
              
              
          }
    $result->close();
          unset($obj);
          unset($connection);
    echo '</table>';

       ?>
   
        </div>  
       
      
        
    </div>
    <?php include("../plantilla/footer.php");?>
    <div class="ir-arriba"><img src="../images/icon_up.PNG"></div>
    
    
    
    
    
    
    
</body>
</html>
<?php
ob_end_flush();
?>
