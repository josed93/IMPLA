<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $v=[0,10,15,20,50];
        $suma=0;
        $media=0;

   for($i=0;$i<sizeof($v);$i++){
       $suma=$suma+$v[$i];
   
   
   
   }
    $media=$suma/sizeof($v);
    echo $media;


    ?>
    
</body>
</html>
