
<?php
    session_start();
    ob_start();
    if(isset($_SESSION["user"])){
        if($_SESSION["rol"] == "user"){
            header("Location:../inicio/inicio.php");
        }else{
            
        }
        
    }
    else{
        
    }


?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilo_reg.css">
    <script type="text/javascript" src="../jquery/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="registro.js"></script>
    
</head>

<body>
    
    <div id="top">
        <div id="logo">
            <a href="../inicio/inicio.php"><img src="../images/prueba.png"></a>
            
        </div>
        <div id="logo2">
            <a href="../inicio/inicio.php"><img src="../images/logo2.PNG"></a>
            
        </div>
        <div id="find">
            <form id="searchform">

                 <input type="text" placeholder="Buscar cancion,interprete...">

                 <button type="submit">Buscar</button>

             </form>

            
            
        </div>
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
            echo "<script type='text/javascript'>alert('USUARIO O CONTRASEÑA INCORRECTOS');</script>";
              
          }else{
              
           while($obj = $result->fetch_object()) {
                  $rol=$obj->ROL;
                  
                  $_SESSION["user"]=$userlogin;
                  $_SESSION["rol"]=$rol;

            
            }
              header("Location: ../registro/registro.php");
              
              
              
          }
      }else{
        echo "<script type='text/javascript'>alert('NO VALIDO ');</script>";
        }
    }
      


    ?>
    <?php
    
    if(isset($_SESSION["user"])){
    ?>  
       <div id="loginContainer">
                <a href="#" id="loginButton"><span><?php echo $_SESSION["user"]?></span></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <fieldset id="body2">
                            <a href="../perfil/perfil.php"><div id="perfil">
                                <p>Ver perfil</p>
                            </div></a>
                            <a href="../plantilla/logout.php"><div id="logout">
                                <p>Cerrar Sesión</p>
                            </div></a>
                            
                    </fieldset>
                        
                    
                </div>
        </div>
        
     
        
    <?php   
    }
    else{
    ?>
       <div id="loginContainer">
                <a href="#" id="loginButton"><span>Entrar</span></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm" method="post" action="">
                        <fieldset id="body">
                            <fieldset>
                                <label for="user">Usuario</label>
                                <input type="text" name="user" id="user" required />
                            </fieldset>
                            <fieldset>
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" required/>
                            </fieldset>
                            <input type="submit" id="login" value="Entrar" />
                            <label for="checkbox"><input type="checkbox" id="checkbox" />Recordarme</label>
                        </fieldset>
                        <span><a href="#">¿Olvidaste tu contraseña?</a></span>
                    </form>
                </div>
            </div>
            <div id="reg">
               <a href="../registro/registro.php" id="regbutton"><span><img src="../images/iconos_menu/reg.PNG">Registrarse</span><em></em></a>
               </div>
               
    <?php    
    }
        

?>

         
          
           
        <div id="carrito" class="rotateinfinite">
                <a href="#"><img src="../images/carrito.PNG"></a>
                
        </div>
            
            
        
        
        
        
    </div>
    <nav id="top_menu">

		<ul>
			<li>
				<a href="../inicio/inicio.php"><div class="contenedor_general">

					<div class="contenedor_uno">
						<p class="texto_uno"><img src="../images/iconos_menu/home_white.PNG">INICIO</p>
					</div>

					<div class="contenedor_dos">
                        <p class="texto_uno"><img src="../images/iconos_menu/home_black.PNG">INICIO</p>					
                    </div>

				</div></a>
			</li>




			<li>
				<a href="../tienda/tienda.php"><div class="contenedor_general">

					<div class="contenedor_uno">
						<p class="texto_uno"><img src="../images/iconos_menu/tienda_white.PNG">TIENDA</p>
					</div>

					<div class="contenedor_dos">
                        <p class="texto_dos"><img src="../images/iconos_menu/tienda_black.PNG">TIENDA</p>
					</div>

                    </div></a>
			</li>
			<li>
				<a href="../catalogo/catalogo.php"><div class="contenedor_general">

					<div class="contenedor_uno">
						<p class="texto_uno"><img src="../images/iconos_menu/catalogo_white.png">CATÁLOGO</p>
					</div>

					<div class="contenedor_dos">
                        <p class="texto_dos"><img src="../images/iconos_menu/catalogo_black.PNG">CATÁLOGO</p>
					</div>

                    </div></a>
			</li>



			<li>
				<a href="../aboutus/aboutus.php"><div id ="excep" class="contenedor_general">

					<div class="contenedor_uno">
						<p class="texto_uno"><img src="../images/iconos_menu/aboutus_white.png">SOBRE NOSOTROS</p>
					</div>

					<div class="contenedor_dos">
                        <p class="texto_dos"><img src="../images/iconos_menu/aboutus_black.PNG">SOBRE NOSOTROS</p>
					</div>

                </div></a>
			</li>


			<li>
				<a href="../contacto/contacto.php"><div class="contenedor_general">

					<div class="contenedor_uno">
						<p class="texto_uno"><img src="../images/iconos_menu/contact_white.png">CONTACTO</p>
					</div>

					<div class="contenedor_dos">
                        <p class="texto_dos"><img src="../images/iconos_menu/contac_black.PNG">CONTACTO</p>
					</div>

                </div></a>
			</li>
			
			

		</ul>


		
	</nav>

    <div id="center">
        
         <h2>CREAR CUENTA</h2>
         
       
        
        <div id="izq">
        
        
        
    <?php if(!isset ($_POST["nickname"])) : ?>
            <h4>INFORMACIÓN PERSONAL</h4>
        <form method="post" action="#">
        
        <table>
            <tr>
                <td>
                   <label for="nombre">NOMBRE</label><br>
                    <input type="text" name="name" id="nombre" required><br>
                  
                </td>
            </tr>
            <tr>    
                <td>
                    <label for="apellidos">APELLIDOS</label><br>
                    <input type="text" name="proname" id="apellidos" required><br>
                    
                </td>
            </tr>      
            <tr>  
                <td>
                   <label for="email">CORREO ELECTRÓNICO</label><br>
                    <input type="email" name="mail" id="email" required><br>
                    
                    
                    
                </td>
            </tr>
        </table>
        
        </div>
        <div id="der">
           <h4>INFORMACIÓN DE INICIO DE SESIÓN</h4>
        
            <table>
            <tr>
                
                <td>
                   <label for="nickname">NOMBRE DE USUARIO</label><br>
                    <input type="text" name="nickname" id="nickname" required><br>
                  
                </td>
            </tr>
                <tr>
                <td>
                   <label for="password">CONTRASEÑA</label><br>
                    <input type="password" name="pass" id="password" required><br>
                  
                </td>
            </tr>
                <tr>
                <td>
                   <label for="testpass">CONFIRMAR LA CONTRASEÑA</label><br>
                    <input type="password" name="test" id="testpass" required><br>
                  
                </td>
            </tr>
            
            </table>
         
            
            
        </div>
        
        <input type="submit" name="sub" id="enviar" value="REGISTRAR">
        
        </form> 
        
        
        
        <?php else: ?>
        <?php
        
            $nombre=$_POST["name"];
            $apellidos=$_POST["proname"];
            $email=$_POST["mail"];
            $username=$_POST["nickname"];
            $password=$_POST["pass"];
            $confpass=$_POST["test"];

$connection = new mysqli("localhost","root","zombiejd93","tienda_musica");
    if($connection->connect_errno)
    {
        printf("ERROR AL INTENTAR CONECTARSE A LA BASE DE DATOS",$connection->connect_errno);
        exit();
    
    }

    if($password==$confpass){

     $connection->query("INSERT INTO USUARIO (nombre,apellidos,email,username,password,rol) VALUES ('$nombre','$apellidos','$email','$username',md5('$password'),'user')");
        

        unset($connection);
 echo '<script type="application/javascript">alert("Usuario '.$username.' creado correctamente"); window.location.href = "../inicio/inicio.php";</script>';
    }
    else{
        
         echo '<script type="application/javascript">alert("Las contraseñas no coinciden.");window.location.href = "../registro/registro.php";</script>';
        
        
        
        
        
    }
    ?>
    
   
   
   <?php endif ?>           
    
        

        
        
    </div>
    <div id="foot">
        <div id="fizq" class="efooter">
           
           
           
           <h3>SOBRE NOSOTROS</h3>
           <p>Página Web desarrollada por José Daniel de las Heras Díaz para el proyecto de Implantación de aplicaciones web de ASIR Segundo Año.</p>
           <p>Delasheras-Music va dedicada principalmente a la venta de discos de música de una gran multitud de géneros.</p>
           <br>
            <p id="copy">Delasheras-Music. Copyright © 2015. All right reserved.<img src="../images/logo2.png"></p>
            
            
        </div>
        <div id="fcenter" class="efooter">
            <h3>REDES SOCIALES</h3>
            <div><a href="https://www.facebook.com/josedaniel.delasheras" target="_blank"><img src="../images/iconos_footer/icon_facebook.PNG"><p>Facebook</p></a></div>
            <div><a href="https://twitter.com/zombiejd93" target="_blank"><img src="../images/iconos_footer/icon_twitter.PNG"><p>Twitter</p></a></div>
            <div><a href="https://plus.google.com/+sangetsubankai/posts" target="_blank"><img src="../images/iconos_footer/icon_google.PNG"><p>Google+</p></a></div>
            <div><a href="https://www.youtube.com/channel/UCG36-wXs5lBZMmWXUjyouZw" target="_blank"><img src="../images/iconos_footer/icon_you.PNG"><p>Youtube</p></a></div>
            <div><a href="https://github.com/josed93/IMPLA" target="_blank"><img src="../images/iconos_footer/icon_github.PNG"><p>Github</p></a></div>
            
            
        </div>
        <div id="fder" class="efooter">
            <h3>CONTACTO</h3>
            <div id="pos"><img src="../images/iconos_footer/icon_position.PNG"><p>Posición</p></div>
            <div id="lugar"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="300" height="143" src="https://maps.google.com/maps?hl=en&q=IES Triana&ie=UTF8&t=m&z=18&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://www.bmwpedia.net/">BMW cars</a></small></div></iframe></div>
            <img src="../images/iconos_footer/icon_email.PNG"><p>jose_d.93@hotmail.com</p>
            <img src="../images/iconos_footer/icon_tel.PNG"><p>+34 655599239</p>
            
            
        </div>
        
        
        
    </div>
    <div class="ir-arriba"><img src="../images/icon_up.PNG"></div>
    
    
    
    
    
    
    
</body>
</html>
<?php
ob_end_flush();
?>
