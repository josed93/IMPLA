<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR REPARACIONES</title>
    <link rel="stylesheet" href="">
    <script src=""></script>
    
    <style>
    table{
        border:4px solid #5E610B;
        border-collapse:collapse;
        background-color:#F5F6CE;
        font-weight:bold;
        color:#585858;
        
        
        
    }
    td{
        border-right:3px solid #5E610B;
    }    
    
    select{
        background-color:#F6D8CE;
    }
    
   
    
    </style>
</head>

<body>
       <h3 style="text-align:center;color:brown">EDITAR REPARACIONES</h3>
       
<?php if(!isset($_POST["matri"])) : ?>
         <form method="post" action="#">
           <div id="editar" style="margin-left:20%">
            <table border="1">
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
                    $mat = $_GET['mat'];
                    echo "<select name='matri'>";
                    while($obj=$result->fetch_Object()){
                        if($mat==$obj->Matricula){
                        
                            echo "<option value='".$obj->Matricula."'selected>".$obj->Matricula."</option>";
                        }else{
                            echo "<option value='".$obj->Matricula."'>".$obj->Matricula."</option>";
                        }
                    }
                    echo "</select>";
                    $result->close();
                    unset($obj);
                    unset($connection);
                $id = $_GET['id'];
                $fent = $_GET['fent'];
                $km = $_GET['km'];
                $av = $_GET['av'];
                $fsal = $_GET['fsal'];
                $rep = $_GET['rep'];
                $obs = $_GET['obs'];


        
                                                                          echo '</td>';   
                 echo '<td>

               
               FechaEntrada: <input type="date" name="Fent" value="'.$fent.'">
                 </td>  
                 <td>
                             
               Km: <input type="number" name="km" value="'.$km.'">
               </td>

       </tr>
       <tr>
              
               <td>
                          
               Averia: <input type="text" name="ave" value="'.$av.'">
               </td>
               
               <td></td>
               <td>
               
               FechaSalida: <input type="date" name="Fsal" value="'.$fsal.'">
               </td>
       </tr>
       <tr>
       
            <td>
               
               Reparado:';
            if($rep==1){
                   echo '<input name="rep" value="1" type="radio" id="rep1" checked/>
                   <label for="rep1">Si</label>
                   <input name="rep" value="0" type="radio" id="rep2"/>
                   <label for="rep2">No</label>';
                   }
            else{
                  echo ' <input name="rep" value="1" type="radio" id="rep1" checked/>
                   <label for="rep1">Si</label>
                   <input name="rep" value="0" type="radio" id="rep2" checked/>
                   <label for="rep2">No</label>'; 
            
                }
            echo '</td>
            <td></td>
            <td>
 
               
               Observaciones: <input type="text" name="obs" value="'.$obs.'">
            </td>   

       </tr>
       
       
       </table>
       <input type="hidden" name="id" value="'.$id.'">
       <input type="submit" name="send" value="Enviar">
       </div>
   </form>';
        ?>
   <?php else: ?>
    <?php
        $matri=$_POST['matri'];
        $fent=$_POST['Fent'];
        $km=$_POST['km'];
        $av=$_POST['ave'];
        $fsal=$_POST['Fsal'];
        $rep=$_POST['rep'];
        $obs=$_POST['obs'];
        $id=$_POST['id'];
        
        $connection = new mysqli("localhost","root","","TalleresFaber");
    if($connection->connect_errno)
    {
        printf("ERROR AL INTENTAR CONECTARSE A LA BASE DE DATOS",$connection->connect_errno);
        exit();
    
    }
        
        $consulta_mysql2="UPDATE REPARACIONES SET IdReparacion='.$id.',Matricula='".$matri."',FechaEntrada='".$fent."',Km='".$km."',Averia='".$av."',FechaSalida='".$fsal."',Reparado='".$rep."',Observaciones='".$obs."' WHERE IdReparacion=$id";
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
