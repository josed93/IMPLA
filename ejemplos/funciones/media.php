<?php
       function devMedia($v){
        $resultado=0;
        for($i=0;$i<sizeof($v);$i++){
            $resultado=$resultado+$v[$i];
        
        }
            return $resultado/sizeof($v);
        }

?>