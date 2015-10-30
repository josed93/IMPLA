<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <table border=1>
        <?php
        $num=2;
        echo "<thead><th colspan='2'>TABLA DEL $num</th></thead>";
        for($i=0;$i<=10;$i++){
            echo "<tr>";
            echo "<td>$num"."*"."$i</td>";
            echo "<td>".$num*$i."</td>";
            echo "</tr>";
        
        
        }



        ?>
        
        
    
    
    
    
    
    
    
    
    </table>
    <?php
    

    ?>
    
</body>
</html>
