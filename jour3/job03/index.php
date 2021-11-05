<?php 
    $phrase="I'm sorry Dave I'm afraid I can't do that";
    $voyelle=["a","e","i","o","u","y"];
    $i=0;
    $x=0;
<<<<<<< HEAD
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
=======
  while ($voyelle <= isset($voyelle[$x])==true) {
      while ($phrase<=isset($phrase[$i])==true) {
          if ($voyelle[$x]==$phrase[$i]) {
            echo $phrase[$i];
          }
          
          $i++;
      }
    
    $x++;
  }
>>>>>>> a715a5f7e0b3213c18f9bb4d2b969661a59b3e0b
