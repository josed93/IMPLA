<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORRAR REPARACIONES</title>
    <link rel="stylesheet" href="estilo.css">
    <script src=""></script>
</head>

<body>
       
    
   <?php
      
      $connection = new mysqli("localhost", "root", "", "TalleresFaber");
     
      if ($connection->connect_errno) {
          printf("ERROR AL ESTABLECER CONTACTO CON LA BASE DE DATOS", $connection->connect_errno);
          exit();
      }
    
     $id = $_GET['id'];
    $connection->query('DELETE FROM REALIZAN WHERE IdReparacion='.$id);
    $connection->query('DELETE FROM INTERVIENEN WHERE IdReparacion='.$id);
    $connection->query('DELETE FROM INCLUYEN WHERE IdReparacion='.$id);
    $connection->query('DELETE FROM FACTURAS WHERE IdReparacion='.$id);
    $connection->query('DELETE FROM REPARACIONES WHERE IdReparacion='.$id);

        unset($connection);
        header('Location:reparaciones.php');



   ?>
    
    
</body>
</html>
