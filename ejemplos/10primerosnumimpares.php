<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <ul>
    <?php  
        
        for ($i=1;$i<=20;$i++){
            if($i%2!=0){
                 echo "<li>$i</li>";
            }
                
        }
    ?>
    
    </ul>
    <ul>
    <?php    
        $num_impares=0;
        $i=0;
        while($num_impares<10){
            if(($i%2)==1){
                echo "$i ES IMPAR<br>";
                $num_impares++;
            }
            $i++;
        }
    
    ?>
    </ul>
    
</body>
</html>
