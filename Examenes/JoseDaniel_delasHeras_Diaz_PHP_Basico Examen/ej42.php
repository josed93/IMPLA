<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4.2 RECAMBIOS</title>
    <link rel="stylesheet" href="estilo.css">
    <script src=""></script>
</head>

<body>
       <h2>DATOS DE LOS RECAMBIOS</h2>
    
   <?php
      
      $connection = new mysqli("localhost", "root", "", "TalleresFaber");
     
      if ($connection->connect_errno) {
          printf("ERROR AL ESTABLECER CONTACTO CON LA BASE DE DATOS", $connection->connect_errno);
          exit();
      }
    
     $id = $_GET['id'];
   $result = $connection->query('SELECT R.* FROM INCLUYEN I,RECAMBIOS R WHERE I.IdRecambio=R.IdRecambio AND IdReparacion='.$id);
    

   ?>
   <div id="tabla2">
   <table border="1" style="text-align:center">
          <thead>
            <tr>
              <th>IdRecambio</th>
              <th>Descripcion</th>
              <th>UnidadBase</th>
              <th>Stock</th>
              <th>PrecioReferencia</th>
              
          </thead>
        
      <?php
          //RECORRER OBJETOS DE LA CONSULTA
          while($obj = $result->fetch_object()) {
              //PINTAR CADA FILA
              echo "<tr>";
              echo "<td>".$obj->IdRecambio."</td>";
              echo "<td>".$obj->Descripcion."</td>";
              echo "<td>".$obj->UnidadBase."</td>";
              echo "<td>".$obj->Stock."</td>";
            echo "<td>".$obj->PrecioReferencia."</td>";
              
              
              
              echo "</tr>";
              
          }
    $result->close();
          unset($obj);
          unset($connection);
    echo '</table>';

       ?>
    </div>
</body>
</html>
