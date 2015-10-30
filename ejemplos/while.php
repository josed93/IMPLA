<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body> 
    <?php
    $i = 1;
    while ($i <= 10) {
    echo $i++."<br>";  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
        }
    $i=0;
    do{
        echo $i;
    } while ($i>0);

    for ($i=0;$i<=10;$i++){
        echo $i."<br>";
    }
    

    ?>
    
</body>
</html>
