<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        
        $v1=["2222222X" => "Pepe","3333333X" => "Manuel","4444444X" => "José","5555555X" => "Rosa"];
        $v2=["2222222X" => "Pérez","3333333X" => "Jiménez","4444444X" => "Martínez","5555555X" => "Rodríguez"];
        
         echo "<table border='1'>";
        
        foreach($v1 as $k => $v){
                echo "<tr>";
               echo "<td>$k</td>";
                echo "<td>$v</td>";
                echo "<td>$v2[$k]</td>";
                    
            echo "</tr>";
        }
        
       
    ?>
    
</body>
</html>
