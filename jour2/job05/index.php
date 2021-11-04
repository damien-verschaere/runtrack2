<?php
#fonction des chiffres non premiers
function estpremier($nombre) {
    for ($paspremier = 2; $paspremier < $nombre; $paspremier++) {
        if ($nombre % $paspremier == 0) {
            return false;
        }
    }
    return true;
}
 

for ($premier = 3; $premier < 1000; $premier++) {
    if (estpremier($premier)) {
        echo $premier.'<br> ';
    }
}
