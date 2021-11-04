<?php 
    $phrase="I'm sorry Dave I'm afraid I can't do that";
    $voyelle=["a","e","i","o","u","y"];
    $i=0;
    $x=0;
  while ($voyelle <= isset($voyelle[$x])==true) {
      while ($phrase<=isset($phrase[$i])==true) {
          if ($voyelle[$x]==$phrase[$i]) {
            echo $phrase[$i];
          }
          
          $i++;
      }
    
    $x++;
  }