<?php 
    $phrase="I'm sorry Dave I'm afraid I can't do that";
    $voyelle=["a","e","i","o","u","y","I"];

    for ($i=0; isset($phrase[$i]) ; $i++) { 
        for ($x=0; isset($voyelle[$x]); $x++) { 
           if ($phrase[$i]==$voyelle[$x]) {
               echo $phrase[$i];
           }
        }
    }
      
   


