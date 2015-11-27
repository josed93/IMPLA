<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing info with POST and HTML FORMS using a single file.</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/materialize.min.css"  media="screen,projection"/>
    
    <script src="materialize/materialize.min.js"></script>    
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      

    
  </head>
  
  <body>     
     <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/materialize.min.js"></script>
      
      
      
      <script>
       $(document).ready(function() {
            $('select').material_select();
        });

       </script>


        
      <?php if (!isset($_POST["asignatura"])) : ?>
        <div class="row">
        
         <h2 align="center" style="font-family:'sans-serif'">MATRÍCULA</h2>
         
          <form method="post" class="col s12" action="#">
          <div class="row">
          <div class="input-field col s4">
          <i class="material-icons prefix">perm_identity</i>
          
          <input type="text" maxlength="9" id="dni" name="dni" required>
          <label for="DNI">DNI</label>
          </div>
          <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
         
          <input type="text" id="nom" name="nombre" required>
            <label for="nom">Nombre</label>
             </div>
            <div class="input-field col s4">
            <i class="material-icons prefix">account_circle</i>
           
          <input type="text" id="ape" name="apellidos" required>
             <label for="ape">Apellidos</label>
              </div>
            </div>
              <div class="row">
              <div class="input-field col s4">
              <i class="material-icons prefix">picture_in_picture</i>
           
          <input type="text" id="dire" name="direccion" required>
             <label for="dire">Dirección</label>
              </div>
              <div class="input-field col s4">
              <i class="material-icons prefix">phone</i>
          
          <input type="number" maxlength="9" id="tel" name="telefono" required>
             <label for="tel">Teléfono</label>
              </div>
              <div class="input-field col s4">
              <i class="material-icons prefix">email</i>
          
          <input type="email" id="em" name="email" required>  
             <label for="ema">Email</label><br>
              </div>
            </div><br>
             <div class="row">
              <div class="input-field col s3">
               <select name="curso" required>
                <option value="" disabled selected>Seleccione un curso</option>
                <option value="asir1">ASIR 1</option>
                <option value="asir2">ASIR 2</option>
  
                </select>
            <br>
              </div>
            </div>
             <div class="row">
              
              <h5>Asignaturas</h5>
        <p>    
           <input  id="uno" class="filled-in" type="checkbox" name="asignatura[]" value="IMPLA">
            <label for="uno">Implantación</label>
        </p>
        <p>
            <input id="dos" class="filled-in" type="checkbox" name="asignatura[]" value="AGEBA">
            <label for="dos">Base de Datos</label>
            
        </p>
        <p>
           <input id="tres" class="filled-in" type="checkbox" name="asignatura[]" value="EMP">
            <label for="tres">Empresa</label>
      
        </p>
        <p>
           <input id="cuatro" class="filled-in" type="checkbox" name="asignatura[]" value="SEG">
            <label for="cuatro">Seguridad</label>
      
        </p>
        <p>
           <input id="cinco" class="filled-in" type="checkbox" name="asignatura[]" value="RED">
            <label for="cinco">Redes</label>
        
        </p>
        <p>
           <input id="seis" class="filled-in" type="checkbox" name="asignatura[]" value="S.O">
            <label for="seis">Sistemas Operativos</label>
            
       
        </p>           
            
            <input id="si" type="radio" name="beca" value="si" required>
            <label for="si">Solicita Beca</label>
            
            
            <input id="no" type="radio" name="beca" value="no" required>
            <label for="no">No solicita Beca</label><br>
          
          <input type="submit" id="enter" value="ENVIAR" onclick="if(!this.form.uno.checked && !this.form.dos.checked && !this.form.tres.checked && !this.form.cuatro.checked && !this.form.cinco.checked && !this.form.seis.checked){alert('Ninguna asignatura seleccionada.');}" class="btn waves-effect waves-light">
              
            </div>
            
        </form>
        </div>
      <?php else: ?>
        <h3 align="center" style="font-family:'sans-serif'">DATOS DE LA MATRÍCULA</h3>
        <?php
            $nam=$_POST["nombre"];
            $ape=$_POST["apellidos"];
            $dir=$_POST["direccion"];
            $tel=$_POST["telefono"];
            $ema=$_POST["email"];
            $cur=$_POST["curso"];
            $asig=$_POST["asignatura"];
            $beca=$_POST["beca"];


    echo '<div id="resumen">';
        echo "<table id='name'><tr><th >Nombre:</th><td>$nam</td></tr>";
        echo "<tr><th>Apellidos:</th><td>$ape</td></tr>";
        echo "<tr><td><b>Dirección</b></td><td>$dir</td></tr>";
        echo "<tr><td><b>Teléfono</b></td><td>$tel</a></td></tr>";
        echo "<tr><td><b>Email</b></td><td>$ema</td></tr>";
        echo "<tr><td><b>Curso</b></td><td>$cur</td></tr></table>";
        echo "<table><tr><b>Asignatura</b><br>";
        
        for($i=0;$i<sizeof($asig);$i++){
            echo "<td>$asig[$i]</td>";
        
        }
        echo "<tr><td><b>Beca</b>&nbsp&nbsp$beca</td></tr></table>";
        
      echo '</div>'; 
    
    
        echo "<div id='ima'><img src='image//graduado.jpg' style='width:100%;'/></div>";

    

            
        ?>
        

      <?php endif ?>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      

  </body>
</html>