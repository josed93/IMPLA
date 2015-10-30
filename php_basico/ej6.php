<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $dia=date("d");
    echo "Hoy es día $dia <br>";
    if ($dia<=10){
        echo "El sitio está Activo";
    
    }
    else {
        echo "Es sitio está fuera de servicio";
    }
    
    
    ?>
    
</body>
</html>
