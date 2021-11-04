<?php
    $tableau=[200, 204, 173, 98, 171, 404, 459];
for ($i=0; $i <7 ; $i++) { 
    if ($tableau[$i]%2==0) {
        echo $tableau[$i] . " est pair" ."<br>";
    }
    elseif ($tableau[$i]%2!=0) {
        echo $tableau[$i] . " est impair" ."<br>";
    }
        // echo $tableau[$i]  ."<br>";
    
    }
    
