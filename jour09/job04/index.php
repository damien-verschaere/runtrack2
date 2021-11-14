<?php
    $bdd=mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd,'utf8');
    $select=mysqli_query($bdd,"SELECT * FROM `etudiants` WHERE `prenom` LIKE 'T%'");
    $etudiants=mysqli_fetch_all($select,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB04</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>NAISSANCE</th>
            <th>SEXE</th>
            <th>EMAIL</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($etudiants as $key) {
                echo "<tr><td>".$key['nom']."</td>"; 
                echo "<td>".$key['prenom']."</td>";
                echo "<td>".$key['naissance']."</td>";
                echo "<td>".$key['sexe']."</td>";
                echo "<td>".$key['email']."</td></tr>";
            };
        ?>
    </tbody>
    </table>
</body>
</html>