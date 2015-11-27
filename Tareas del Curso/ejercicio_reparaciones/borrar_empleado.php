<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORRAR EMPLEADOS</title>
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
    $codemp=$_GET['codemp'];
    
    $connection->query("DELETE FROM INTERVIENEN WHERE IdReparacion=$id and CodEmpleado=$codemp");
    

        unset($connection);
        header("Location:mostrar_empleados.php?id=$id");



   ?>
    
    
</body>
</html>
