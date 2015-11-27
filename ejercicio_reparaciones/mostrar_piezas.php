<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR PIEZAS</title>
    <link rel="stylesheet" href="estilo.css">
    <script src=""></script>
</head>

<body>
       <h3>MOSTRAR PIEZAS</h3>
    
   <?php
      
      $connection = new mysqli("localhost", "root", "", "TalleresFaber");
     
      if ($connection->connect_errno) {
          printf("ERROR AL ESTABLECER CONTACTO CON LA BASE DE DATOS", $connection->connect_errno);
          exit();
      }
    
     $id = $_GET['id'];
   $result = $connection->query('SELECT R.Descripcion,I.IdRecambio,I.IdReparacion,I.Unidades FROM INCLUYEN I,RECAMBIOS R WHERE I.IdRecambio=R.IdRecambio AND IdReparacion='.$id);
    

   ?>
   <table border="1" style="text-align:center">
          <thead>
            <tr>
              <th>Descripcion</th>
              <th>IdRecambio</th>
              <th>IdReparacion</th>
              <th>Unidades</th>
              <th>Borrar piezas</th>
              
          </thead>
        
      <?php
          //RECORRER OBJETOS DE LA CONSULTA
          while($obj = $result->fetch_object()) {
              //PINTAR CADA FILA
              echo "<tr>";
              echo "<td>".$obj->Descripcion."</td>";
              echo "<td>".$obj->IdRecambio."</td>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Unidades."</td>";
              echo "<td><a href='borrar_pieza.php?id=$obj->IdReparacion&idrec=$obj->IdRecambio'><img src='images//deletepieza.jpg'/></a></td>";
              
              
              echo "</tr>";
              
          }
    $result->close();
          unset($obj);
          unset($connection);
    echo '</table>';

       ?>
    
</body>
</html>
