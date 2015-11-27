<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
    <script src=""></script>
</head>

<body>
   
   <?php
//LISTA DE UN ARRAY
        function list_of_array($v){
            echo "<ul>";
            foreach($v as $valor){
                echo "<li>$valor</li>";
                
            
            }
        echo "</ul>";
        
        }
    $data=array(1,2,3,4,6);
    $data=array("A" => 1, "B" => 2, "C" => 3, "D" => 4,"E"=>6);

        //list_of_array($data);   

//SI EXISTE O NO UNA CADENA QUE SE LE PASE EN UNA CADENA
    function existeCad($v,$cad){
        foreach($v as $val){
            if($val==$cad){
                return true;
            }
        }
    return false;
        }
    

    /*if(existeCad($data,6)==true){
        echo "Existe";
    
    
    }else{
        echo "No existe";    
    
    }*/

//CALCULAR MEDIA DE UN ARRAY
    /*function devMedia($v){
        $resultado=0;
        for($i=0;$i<sizeof($v);$i++){
            $resultado=$resultado+$v[$i];
        
        }
            return $resultado/sizeof($v);
        }*/
        include("/funciones/media.php");
        $num=array(5,7,2,4,8);

            echo "La media es ".devMedia($num);

        








    ?>
    
</body>
</html>
