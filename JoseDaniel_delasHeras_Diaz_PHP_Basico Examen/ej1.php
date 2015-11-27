<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 1</title>
    <link rel="stylesheet" href="">
    <script src=""></script>
</head>

<body>
   <?php

        $datos=array("22222222X" => array("Nombre" => "Juan Diego","Apellidos" => "Perez","Localidad" =>"Bormujos"),"33333333Y" => array("Nombre" => "Paco","Apellidos" => "Fernandez","Localidad" =>"Salteras"));

        foreach($datos as $k => $v){
                echo "<ul>";
                echo "<li>".$k."<ul>";
                $vector=$v;
                foreach($vector as $k1 => $v1){
                    echo "<li>".$k1.": ".$v1."</li>";
                    
                
                }
                echo "</ul></li>";
                echo "</ul>";
            }


    ?>

    
</body>
</html>
