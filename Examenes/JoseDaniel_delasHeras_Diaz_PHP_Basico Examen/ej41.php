<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4.1 REPARACIONES</title>
    <link rel="stylesheet" href="estilo.css">
    <script src=""></script>
    
</head>

<body>
       <h1 style='text-align:center'>DATOS DE LAS REPARACIONES</h1>
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
          <div id="tabla" style="margin-left:150px;">
          <table border=1 id="rep" style="text-align:center;">
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
              
          </thead>
        
      <?php
          //RECORRER OBJETOS DE LA CONSULTA
          while($obj = $result->fetch_object()) {
              //PINTAR CADA FILA
              echo "<tr>";
              echo "<td><a href='ej42.php?id=$obj->IdReparacion'>$obj->IdReparacion</a></td>";
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
              
              
              echo "</tr>";
              
          }
          
         
          
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
       //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
        
     echo '</table><br>';
          
    
    
    ?>
    </div>
</body>
</html>
