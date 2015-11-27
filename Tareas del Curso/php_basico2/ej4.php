<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        
        $v1=[4,9,13,43,22,57,99,67,33,11];
        $nummayor=0;
        
         for($i=0;$i<sizeof($v1);$i++){
            if($nummayor < $v1[$i] ){
                $nummayor=$v1[$i];
            
            }
             
             }
        
      echo "El número mayor es el "."<b>".$nummayor.".</b>";
       
    ?>
    
</body>
</html>
