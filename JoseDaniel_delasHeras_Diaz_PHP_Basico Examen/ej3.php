<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 3</title>
    <link rel="stylesheet" href="">
    <script src=""></script>
</head>

<body>
      <form method="post" action="#">
        Cantidad: <input type="text" name="cantidad">
        <input type="submit" name="enviar" value="Enviar">
        </form>
  
   <?php

        if (isset($_POST['enviar'])) {
        
            $connection = new mysqli("localhost","root","","TalleresFaber");
                        if($connection->connect_errno){
                            printf("ERROR AL INTENTAR CONECTARSE A LA BASE DE DATOS",$connection->connect_errno);
                            exit();

                        }
            $v1=$_POST['cantidad'];
            $consulta_mysql = "SELECT * FROM RECAMBIOS WHERE Stock<$v1";
            $result = $connection->query($consulta_mysql);

            //Siempre te muestra los datos pero cuando el stock sea menor que la cantidad introducida los datos cambian de color
            echo "<ul>";
            while ($obj = $result->fetch_Object()) {
                
            echo "<li>";
                echo "IdRecambio: ".$obj->IdRecambio."<br>";
                echo "Descripcion: ".$obj->Descripcion."<br>";
                echo "UnidadBase: ".$obj->UnidadBase."<br>";
                echo "Stock: ".$obj->Stock."<br>";
                echo "PrecioReferencia: ".$obj->PrecioReferencia."<br>";
                    
            echo "</li>";    
                } 
                           
            
            
            echo "</ul>";

             $result->close();
                    unset($obj);
                    unset($connection);
        
            }

    ?>

    
</body>
</html>
