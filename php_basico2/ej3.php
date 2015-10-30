<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    <?php
        
        $v1=["roberto","juan","marta","moria","martin","jorge","miriam","nahuel","mirta"];
        $v2=[];
        
         for($i=0;$i<sizeof($v1);$i++){
            $cadena=$v1[$i];
             $cadena=substr($cadena,0,1);
             if($cadena=="m"){
                array_push($v2,$v1[$i]);
             
             }
        
        
        }
        echo "<table border='1'>";
        for($i=0;$i<sizeof($v2);$i++){
            echo "<tr>";
                echo "<td>";
            echo "<br>".$v2[$i];
                echo "</td>";
            echo "</tr>";
             }
       echo "</table>";
    ?>
    
</body>
</html>
