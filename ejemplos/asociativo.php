<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $v2=["Nombre" => "PEPE","Apellido" => "PEREZ","Edad" => 25];
        
        echo "<table border='1'>";
        echo "<tr>";
        foreach($v2 as $k => $v){
               echo "<td>$k</td>"; 
        
        }
        echo "</tr>";
        echo "<tr>";
        foreach($v2 as $k => $v){
                echo "<td>$v</td>"; 
        
        }
        echo "</tr>";
        


        $v3=["Nombre" => "ANA","Apellido" => "DIAZ","Edad" => 20];
        
        echo "<table border='1'>";
        echo "<tr>";
        foreach($v3 as $k => $v){
               echo "<td>$k</td>"; 
        
        }
        echo "</tr>";
        echo "<tr>";
        foreach($v3 as $k => $v){
                echo "<td>$v</td>"; 
        
        }
        echo "</tr>";
    ?>
    
</body>
</html>
