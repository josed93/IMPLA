 <?php
      $connection = new mysqli("localhost", "root", "zombiejd93", "tienda_musica");
     
       if ($connection->connect_errno) {
          printf("Conexión fallida %s\n", $mysqli->connect_error);
          exit();
      }
    
      $result = $connection->query("SELECT * FROM USUARIO WHERE USERNAME LIKE '%".$_GET['dato']."%'");
      echo '<table style="margin-top:2%;" class="table table-hover table-bordered table-responsive ">
       <tr style="text-align:center;font-weight:bold">
          
           <td>USERNAME</td>
           <td>ROL</td>
           <td>ESTADO</td>
           <td>NOMBRE</td>
           <td>EMAIL</td>
           <td colspan="3">OPERACIONES</td>
           
                      
       </tr>';
      
          //RECORRER OBJETOS DE LA CONSULTA
          while($obj = $result->fetch_object()) {
              //PINTAR CADA FILA
              echo "<tr>";
              
              echo "<td>".$obj->USERNAME."</td>";
              echo "<td>".$obj->ROL."</td>";
              echo "<td>".$obj->ESTADO."</td>";
              echo "<td>".$obj->NOMBRE."</td>";
              echo "<td>".$obj->EMAIL."</td>";
              echo "<td><a href='?coduser=$obj->COD_USU'><button type='button' class='btn btn-info'>Ver detalles</button></a></td>";
              echo "<td><a href='./editar_user.php'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
              echo "<td><a href='./borrar_user.php?coduser=$obj->COD_USU'><button type='button' class='btn btn-danger'>Borrar</button></a></td>";
              
              
              
              
          
              echo "</tr>";
              
              
          }
    $result->close();
          unset($obj);
          unset($connection);
    echo '</table>';

       ?>
   