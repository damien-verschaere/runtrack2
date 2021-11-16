<?php
function bonjour($jour){
    if ($jour===TRUE) {
       
        echo "bonjour";
       
    }
    else {
        echo "bonsoir";
    } 
        
    return $jour;
}
?>

<?php
    echo bonjour(FALSE);
?>