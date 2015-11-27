<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR REPARACIONES</title>
    <link rel="stylesheet" href="">
    <script src=""></script>
    
    <style>
    table{
        border:4px solid blue;
        border-collapse:collapse;
        background-color:#CEECF5;
        font-weight:bold;
        color:#585858;
        
        
        
    }
    td{
        border-right:3px solid blue;
    }    
    
    select{
        background-color:#D8F781;
    }
    
   
    
    </style>
    
    
    
    
    
</head>

<body>
       <h3 style="text-align:center;color:brown">INSERTAR REPARACIONES</h3>
       
       <?php if(!isset($_POST["matri"])) : ?>
         <form method="post" action="#">
           <div id="crear" style="margin-left:20%">
            <table border=1>
                 <tr>
               
                  <td>

               
               Matricula: 
                <?php
                    $connection = new mysqli("localhost","root","","TalleresFaber");
                        if($connection->connect_errno){
                            printf("ERROR AL INTENTAR CONECTARSE A LA BASE DE DATOS",$connection->connect_errno);
                            exit();
                        
                        }
                    $consulta_mysql='SELECT Matricula FROM VEHICULOS';
                    $result=$connection->query($consulta_mysql);
                    echo "<select name='matri' required>";
                    while($obj=$result->fetch_Object()){
                        echo "<option value='".$obj->Matricula."'>".$obj->Matricula."</option>";
                    }
                    echo "</select>";
                    $result->close();
                    unset($obj);
                    unset($connection);


                ?>
                </td>   
                 <td>

               
               FechaEntrada: <input type="date" name="Fent" required>
                 </td> 
                  <td>
                             
               Km: <input type="number" name="km" required>
               </td>  

       </tr>
       <tr>
             
               <td>
                          
               Averia: <input type="text" name="ave" required>
               </td>
               <td></td>
               <td>
               
               FechaSalida: <input type="date" name="Fsal" value="Fsal" required>
               </td>
       </tr>
       <tr>
            <td>
               
               Reparado: 
                   <input name="rep" value="1" type="radio" id="rep1" checked/>
                   <label for="rep1">Si</label>
                   <input name="rep" value="0" type="radio" id="rep2"/>
                   <label for="rep2">No</label>
            </td>
            <td></td>
            <td>
 
               
               Observaciones: <input type="text" name="obs">
            </td>   

       </tr>
       
       
       </table>
       <input type="submit" name="send" value="Enviar">
       </div>
   </form>
   <?php else: ?>
    <?php
        $matri=$_POST['matri'];
        $fent=$_POST['Fent'];
        $km=$_POST['km'];
        $av=$_POST['ave'];
        $fsal=$_POST['Fsal'];
        $rep=$_POST['rep'];
        $obs=$_POST['obs'];
        
        $connection = new mysqli("localhost","root","","TalleresFaber");
    if($connection->connect_errno)
    {
        printf("ERROR AL INTENTAR CONECTARSE A LA BASE DE DATOS",$connection->connect_errno);
        exit();
    
    }
        
        $consulta_mysql2="INSERT INTO REPARACIONES (IdReparacion,Matricula,FechaEntrada,Km,Averia,FechaSalida,Observaciones) VALUES(NULL,'$matri','$fent','$km','$av','$fsal','$obs')";
        echo $consulta_mysql2."<br>";

        if($connection->query($consulta_mysql2)==true){
            echo "Se ha realizado correctamente";
        }else{
            echo $connection->error;
        
        }
        unset($connection);
        header('Location:reparaciones.php');
    ?>
   
   
   <?php endif ?>
   
   
   
   
   
   
   
   
   
   
   
   
   
  
    
    
</body>
</html>
