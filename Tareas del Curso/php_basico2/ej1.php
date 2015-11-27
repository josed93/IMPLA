<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        
        $v=["San Cristobal","Cucuta","Maracaibo","Caracas"];
        
        echo "numero de elementos: ".sizeof($v)."<br>";    
       
        for($i=0;$i<sizeof($v);$i++){
            echo "Ciudad ".$i."<br>"."<br>"."<h2>".$v[$i]."</h2>"."<br>"."<br>";
        
        
        }
        
    ?>
    
</body>
</html>
