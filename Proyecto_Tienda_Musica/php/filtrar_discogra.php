<?php
      
      $connection = new mysqli("localhost", "root", "zombiejd93", "tienda_musica");
     
       if ($connection->connect_errno) {
          printf("Conexión fallida %s\n", $mysqli->connect_error);
          exit();
      }
    
     
   $result = $connection->query("SELECT * FROM DISCOGRAFICA WHERE NOMBRE LIKE '%".$_GET['dato']."%'");
    
       echo '<table style="margin-top:2%;" class="table table-hover table-bordered table-responsive ">
       <tr style="font-weight:bold;text-align:center">
          <td>CÓDIGO</td>
           <td>NOMBRE</td>
           <td>FUNDACIÓN</td>
           <td>PÁGINA WEB</td>
           <td colspan="2">OPERACIONES</td>
           
           
       </tr>';
       
      
          //RECORRER OBJETOS DE LA CONSULTA
          while($obj = $result->fetch_object()) {
              //PINTAR CADA FILA
              echo "<tr>";
              echo "<td>".$obj->COD_DISCOGRA."</td>";
              echo "<td>".$obj->NOMBRE."</td>";
              echo "<td>".$obj->FUNDACION."</td>";
              echo "<td><a href='".$obj->PAGINA_WEB."' target='_blank'>".$obj->PAGINA_WEB."</a></td>";
              
              echo "<td><a href='./editar_discogra.php?codiscogra=$obj->COD_DISCOGRA'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
              echo "<td><a href='./borrar_discogra.php?codiscogra=$obj->COD_DISCOGRA'><button type='button' class='btn btn-danger'>Borrar</button></a></td>";
              
              
          
              echo "</tr>";
              
              
          }
    $result->close();
          unset($obj);
          unset($connection);
    echo '</table>';

       ?>