<?php
    $bdd= mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd,'utf8');
    $requete= mysqli_query($bdd,"SELECT * FROM `etudiants`");
    $etudiants=mysqli_fetch_all($requete, MYSQLI_ASSOC);
    // var_dump($etudiants)
      

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB01</title>
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