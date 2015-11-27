<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASIGNAR PIEZAS</title>
    <link rel="stylesheet" href="estilo.css">
    <script src=""></script>
</head>

<body>
   <h3>ASIGNAR PIEZAS</h3>
   
   <?php if(!isset($_POST["idrec"])) : ?>
         <form method="post" action="#">
            <table>
                 <tr>
               
                  <td>

               
               IdRecambio: 
                <?php
                    $connection = new mysqli("localhost","root","","TalleresFaber");
                        if($connection->connect_errno){
                            printf("ERROR AL INTENTAR CONECTARSE A LA BASE DE DATOS",$connection->connect_errno);
                            exit();
                        
                        }
                    $consulta_mysql='SELECT IdRecambio FROM RECAMBIOS';
                    $result=$connection->query($consulta_mysql);
                    echo "<select name='idrec' required>";
                    while($obj=$result->fetch_Object()){
                        echo "<option value='".$obj->IdRecambio."'>".$obj->IdRecambio."</option>";
                    }
                    echo "</select>";
                    $result->close();
                    unset($obj);
                    unset($connection);


                ?>
                </td>   
                
                <td>

               Unidades: <input type="number" name="unidades" required>
               
                </td>   

       </tr>
       
       
       </table>
       <input type="submit" name="send" value="Enviar">
   </form>
   <?php else: ?>
    <?php
        
        $idrec=$_POST['idrec'];
        $unidades=$_POST['unidades'];
        $idrep=$_GET['id'];


        
        $connection = new mysqli("localhost","root","","TalleresFaber");
    if($connection->connect_errno)
    {
        printf("ERROR AL INTENTAR CONECTARSE A LA BASE DE DATOS",$connection->connect_errno);
        exit();
    
    }
        
        //GUARDO EL RESULTADO DEL SELECT EN UNA VARIABLE
    $consulta_mysql2=$connection->query("SELECT * FROM INCLUYEN WHERE IdRecambio='$idrec' AND IdReparacion=$idrep");
//GUARDO EL NUMERO DE FILAS EN UNA VARIABLE
        $rows=$consulta_mysql2->num_rows;

        
if($rows>0){
    $connection->query("UPDATE INCLUYEN SET Unidades=$unidades where IdRecambio='$idrec' and IdReparacion=$idrep");
    }
else{
    
    $connection->query("INSERT INTO INCLUYEN (IdRecambio,IdReparacion,Unidades) VALUES ('$idrec','$idrep','$unidades')");
}
        unset($connection);
        header('Location:reparaciones.php');
    ?>
   
   
   <?php endif ?>
   
   
   
   
   
   
   
   
   
    
</body>
</html>
