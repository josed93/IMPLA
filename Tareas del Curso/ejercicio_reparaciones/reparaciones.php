
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>REPARACIONES</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
  <body>
  <div style=float:right><a href='crear.php'><img id='anadir' src='images//añadir.jpg' ;/></a></div><br>
   <h1 style="text-align:center">REPARACIONES</h1>
   
    <?php

      //CREANDO LA CONEXION
      $connection = new mysqli("localhost", "root", "", "TalleresFaber");
      //COMPROBANDO SI SE ESTABLECE LA CONEXION
      if ($connection->connect_errno) {
          printf("ERROR A LA HORA DE CONECTARSE CON LA BASE DE DATOS", $connection->connect_errno);
          exit();
      }
      
      $result = $connection->query("SELECT * FROM REPARACIONES;");
          
      ?>

          <!-- DIBUJAR LA TABLA -->
          <table id="rep" style="text-align:center">
          <thead>
            <tr>
              <th>IdReparacion</th>
              <th>Matricula</th>
              <th>FechaEntrada</th>
              <th>Km</th>
              <th>Averia</th>
              <th>FechaSalida</th>
              <th>Reparado</th>
              <th>Observaciones</th>
              <th>Editar</th>
              <th>Borrar</th>
              <th>Asig.Empleados</th>
              <th>Asig.Piezas</th>
              <th>Mostrar Empleados</th>
              <th>Mostrar Piezas</th>
          </thead>
        
      <?php
          //RECORRER OBJETOS DE LA CONSULTA
          while($obj = $result->fetch_object()) {
              //PINTAR CADA FILA
              echo "<tr>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->FechaEntrada."</td>";
              echo "<td>".$obj->Km."</td>";
              echo "<td>".$obj->Averia."</td>";
              echo "<td>".$obj->FechaSalida."</td>";
              echo "<td>";
              if($obj->Reparado==1){
                echo "Si";
              }
              else{
                echo "No";
              }
              echo "</td>";
              echo "<td>".$obj->Observaciones."</td>";
              echo "<td><a href='editar.php?id=$obj->IdReparacion&mat=$obj->Matricula&fent=$obj->FechaEntrada&km=$obj->Km&av=$obj->Averia&fsal=$obj->FechaSalida&rep=$obj->Reparado&obs=$obj->Observaciones'><img src='images//editar.jpg'/></a></td>";
              echo "<td><a href='borrar.php?id=$obj->IdReparacion'><img src='images//borrar.jpg'/></a></td>";
              echo "<td><a href='asignar_empleados.php?id=$obj->IdReparacion'><img src='images//emp.jpg'/></a></td>";
              echo "<td><a href='asignar_piezas.php?id=$obj->IdReparacion'><img src='images//piezas.jpg'/></a></td>";
              echo "<td><a href='mostrar_empleados.php?id=$obj->IdReparacion'><img src='images//veremple.jpg'/></a></td>";
              echo "<td><a href='mostrar_piezas.php?id=$obj->IdReparacion'><img src='images//verpiezas.jpg'/></a></td>";
              
              echo "</tr>";
              
          }
          
         
          
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
       //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
        
     echo '</table><br>';
         echo "<td colspan=14><a href='crear.php'><img id='anadir' src='images//añadir.jpg' style=float:right;/></a></td>";     
    ?>
    
    
  </body>
</html>
