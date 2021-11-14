<?php 
    $bdd=mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd,'utf8');
    $requete=mysqli_query($bdd,"SELECT `prenom`,`nom`,`naissance`FROM etudiants WHERE `sexe`= 'Femme'");
    $etudiantes=mysqli_fetch_all($requete,MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB03</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>PRENOM</th>
                <th>NOM</th>
                <th>NAISSANCE</th>
            </tr>
        </thead>
        <tbody>
            <?php  
                foreach ($etudiantes as $key ) {
                    echo "<tr><td>".$key['prenom']."</td>";
                    echo "<td>".$key['nom']."</td>";
                    echo "<td>".$key['naissance']."</td></th>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>