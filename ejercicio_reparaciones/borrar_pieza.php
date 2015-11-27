<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORRAR PIEZAS</title>
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
    $idrec=$_GET['idrec'];
    
    $connection->query("DELETE FROM INCLUYEN WHERE IdReparacion=$id and IdRecambio='$idrec'");
    

        unset($connection);
        header("Location:mostrar_piezas.php?id=$id");



   ?>
    
    
</body>
</html>
