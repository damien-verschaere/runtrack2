<?php
    $str="bonobo";
    $char='o';

    function occurence($str,$char){
        $nboc=0;
        for ($i=0;isset($str[$i]); $i++) { 
           
        if ($str[$i]==$char) 
            $nboc++;  
        
        
           
        }
        return ($nboc);
    }
    echo occurence($str,$char);

?>