<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        
        $mult=[];
        $elementos=0;
        $i=0;
        
        while($elementos<10){
            if($i%77==0){
                $mult[$elementos]=$i;
                $elementos++;
            }
            $i++;
        }

        echo "<ol>";
       for($i=0;$i<sizeof($mult);$i++){
           
        echo "<li><b>".$mult[$i]."<br>"."</b></li>";
            
       }
        echo "</ol>";

   
    ?>
    
</body>
</html>
