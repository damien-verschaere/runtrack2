<?php 
    for($multiple=0;$multiple<101;$multiple++){
        if ($multiple%15==0){
            echo "FizzBuzz" ."<br>";
        }
        
        elseif($multiple %5==0){
            echo "buzz"."<br>";
        }
        elseif($multiple %3==0){
            echo "fizz"."<br>";
        }
    else{
        echo $multiple ."<br>";
    }
    }