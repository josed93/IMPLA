<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 2</title>
    <link rel="stylesheet" href="">
    <script src=""></script>
</head>

<body>
    <?php
          
        function medias($v1,$v2,$v3) {
            $mediaedades=0;
            for($i=0; $i<sizeof($v1);$i++) {
                $mediaedades=$mediaedades+$v1[$i];
            }            
            $mediaedades=$mediaedades/sizeof($v1);
            
            $mediaalturas=0;
            for($i=0; $i<sizeof($v2);$i++) {
                $mediaalturas=$mediaalturas+$v2[$i];
            }
            $mediaalturas=$mediaalturas/sizeof($v2);
            $mediapesos=0;
            for($i=0; $i<sizeof($v3);$i++) {
                $mediapesos=$mediapesos+$v3[$i];
            }
            $mediapesos=$mediapesos/sizeof($v3);        
            return array("EDAD" => $mediaedades,
                         "ALTURA" => $mediaalturas,
                         "PESO" => $mediapesos);
        }

        $edades=array(10,20,30,40,50,60);
        $altura=array(1.75,2.00,1.82,1.72,1.65);
        $peso=array(70,80,120,74,90);

        $arraymedia=medias($edades,$altura,$peso);

        var_dump($arraymedia);
    ?>
    
</body>
</html>
