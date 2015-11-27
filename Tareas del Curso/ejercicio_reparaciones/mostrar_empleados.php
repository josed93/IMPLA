<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR EMPLEADOS</title>
    <link rel="stylesheet" href="estilo.css">
    <script src=""></script>
</head>

<body>
       <h3>MOSTRAR EMPLEADOS</h3>
    
   <?php
      
      $connection = new mysqli("localhost", "root", "", "TalleresFaber");
     
      if ($connection->connect_errno) {
          printf("ERROR AL ESTABLECER CONTACTO CON LA BASE DE DATOS", $connection->connect_errno);
          exit();
      }
    
     $id = $_GET['id'];
   $result = $connection->query('SELECT E.nombre,I.CodEmpleado,I.IdReparacion,I.Horas FROM INTERVIENEN I,EMPLEADOS E WHERE I.CodEmpleado=E.CodEmpleado AND IdReparacion='.$id);
    

   ?>
   <table border="1" style="text-align:center">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>CodEmpleado</th>
              <th>IdReparacion</th>
              <th>Horas</th>
              <th>Borrar Empleados</th>
              
          </thead>
        
      <?php
          //RECORRER OBJETOS DE LA CONSULTA
          while($obj = $result->fetch_object()) {
              //PINTAR CADA FILA
              echo "<tr>";
              echo "<td>".$obj->nombre."</td>";
              echo "<td>".$obj->CodEmpleado."</td>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Horas."</td>";
              echo "<td><a href='borrar_empleado.php?id=$obj->IdReparacion&codemp=$obj->CodEmpleado'><img src='images//deletemp.jpg'/></a></td>";
              
              
              echo "</tr>";
              
          }
    $result->close();
          unset($obj);
          unset($connection);
    echo '</table>';

       ?>
    
</body>
</html>
