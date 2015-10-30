<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body> 
    <?php
        $v1=array("A","B","C");
        var_dump($v1);
        $v3=["A","B","C"];
        $v4=["Nombre" => "Pepe","Edad" => 25];
        var_dump($v3);
        var_dump($v4);

        echo $v4["Nombre"]."<br>";

    ?>
    
</body>
</html>
