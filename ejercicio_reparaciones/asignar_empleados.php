<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASIGNAR EMPLEADOS</title>
    <link rel="stylesheet" href="estilo.css">
    <script src=""></script>
</head>

<body>
   <h3>ASIGNAR EMPLEADOS</h3>
   
   <?php if(!isset($_POST["codemp"])) : ?>
         <form method="post" action="#">
            <table>
                 <tr>
               
                  <td>

               
               CodEmpleado: 
                <?php
            //CREANDO LA CONEXION
            $connection = new mysqli("localhost", "root", "", "TalleresFaber");
        //COMPROBANDO SI SE ESTABLECE LA CONEXION
            if ($connection->connect_errno) {
            printf("ERROR A LA HORA DE CONECTARSE CON LA BASE DE DATOS", $connection->connect_errno);
                exit();
                    
                        
                        }
                    $consulta_mysql='SELECT CodEmpleado FROM EMPLEADOS';
                    $result=$connection->query($consulta_mysql);
                    echo "<select name='codemp' required>";
                    while($obj=$result->fetch_Object()){
                        echo "<option value='".$obj->CodEmpleado."'>".$obj->CodEmpleado."</option>";
                    }
                    echo "</select>";
                    $result->close();
                    unset($obj);
                    unset($connection);


                ?>
                </td>   
                
                <td>

               Horas: <input type="number" name="horas" step="any" required>
               
                </td>   

       </tr>
       
       
       </table>
       <input type="submit" name="send" value="Enviar">
   </form>
   <?php else: ?>
    <?php
        
        $codemp=$_POST['codemp'];
        $horas=$_POST['horas'];
        $idrep=$_GET['id'];


        
        $connection = new mysqli("localhost","root","","TalleresFaber");
    if($connection->connect_errno)
    {
        printf("ERROR AL INTENTAR CONECTARSE A LA BASE DE DATOS",$connection->connect_errno);
        exit();
    
    }

//GUARDO EL RESULTADO DEL SELECT EN UNA VARIABLE
    $consulta_mysql2=$connection->query("SELECT * FROM intervienen WHERE CodEmpleado=$codemp AND IdReparacion=$idrep");
//GUARDO EL NUMERO DE FILAS EN UNA VARIABLE
        $rows=$consulta_mysql2->num_rows;

        
if($rows>0){
    $connection->query("UPDATE INTERVIENEN SET Horas=$horas where CodEmpleado=$codemp and IdReparacion=$idrep");
    }
else{
    
    $connection->query("INSERT INTO INTERVIENEN (CodEmpleado,IdReparacion,Horas) VALUES ('$codemp','$idrep','$horas')");
}
        
        unset($connection);
        header('Location:reparaciones.php');
    ?>
    
   
   
   <?php endif ?>
   
   

   
   
   
   
   
   
    
</body>
</html>
