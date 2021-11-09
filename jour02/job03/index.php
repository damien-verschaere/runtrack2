<?php 
    #boucle for pour affichage 0 a 100
    for($chiffre=0;$chiffre<101;$chiffre++){
        #si le chiffre a 42 affiche plateforme
        if($chiffre==42){
            echo  "laplateforme" ."<br>" ;
        }
        #pour les chiffre entre 0 et 20 affichage en italique
        elseif($chiffre==0||$chiffre<=20){
            echo "<i>". $chiffre ."</i>"."<br>";
        }
        #pour les chiffres entre 25 et 50 affichage souligné
        elseif($chiffre==25||$chiffre<=50){
            echo "<u>". $chiffre ."</u>" ."<br>";
        }
        
    else{
        echo $chiffre ."<br>";
    }
}