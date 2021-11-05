<?php 
    $phrase="I'm sorry Dave I'm afraid I can't do that";
    $voyelle=["a","e","i","o","u","y"];
    $i=0;
    $x=0;
   while ($phrase <= isset($phrase[$i])==true) {
       while ($voyelle <=isset($voyelle[$x])==true) {
           echo $voyelle[$x];
           if ($phrase[$i]==$voyelle[$x]) {
            
           $x++;
       }
       echo $phrase[$i];
       }
       $i++;
   }
