<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <style type="text/css">
  form  { margin-left:5%; }
</style>
</head>

<body>
   <form>
        <b>Número de columnas:</b> <input type="number" name="columnas" min="1" max="999">
        <b>Número de filas:</b> <input type="number" name="filas" min="1" max="999">
<input type="submit" value="CREAR">
</form>
        <br>
    
   <div style='width:auto;height:auto;margin-left:5%;'>
    <?php

      $contador=0;  
           

        for($i=1;$i<=$_GET["columnas"];$i++){
            
            echo "<div style='width:auto;height:50px;'>";
            for($j=1;$j<=$_GET["filas"];$j++){
                
                if($i%2==0){
                    if($j%2==0){
                        echo "<div style='width:50px;height:50px;float:left;background-color:yellow'>$contador</div>";              
                        }
                    else{
                        echo "<div style='width:50px;height:50px;float:left;background-color:red'>$contador</div>";
                    
                        }
                }
                
                else{
                    if($j%2==0){
                        echo "<div style='width:50px;height:50px;float:left;background-color:red'>$contador</div>";

                    }
                    else{
                        echo "<div style='width:50px;height:50px;float:left;background-color:yellow'>$contador</div>";
                    }
        
        
            }
            $contador++;
        
        }
            echo "</div>";
    }

    ?>
    </div>
</body>
</html>
