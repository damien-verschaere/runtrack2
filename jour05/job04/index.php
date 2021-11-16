<?php
$a=10;
$b= '*';
$c=30;
function calcul($a,$b,$c){
 if ($b == '+') {
     $resultat = $a + $c ;
    
 }
 elseif ($b== '-') {
    $resultat = $a - $c ;
 }
 elseif ($b== '*' ) {
     $resultat= $a * $c ;

 }
 elseif ($b=='/') {
     $resultat= $a / $c;

 }
 return $resultat;
};

?>
<?php 

echo calcul($a,$b,$c);
?>