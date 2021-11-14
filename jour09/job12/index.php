
<?php
    $bdd= mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd,'utf8');
    $requete= mysqli_query($bdd,"SELECT `nom`,`prenom`,`naissance` FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'");
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
            </tr>
        
    </thead>   
      
    <tbody>
    <?php 
          foreach ($etudiants as $key) {
              echo "<tr><td>".$key['nom']."</td>"; 
              echo "<td>".$key['prenom']."</td>";
              echo "<td>".$key['naissance']."</td></th>";
            
          };
      
      ?>
    </tbody>
    </table>
</body>
</html>