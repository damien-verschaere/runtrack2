<?php  
    $bdd=mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd,'utf8');
    $requete=mysqli_query($bdd,"SELECT SUM(capacite) FROM salles");
    $capacite=mysqli_fetch_all($requete,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>CAPACITE</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($capacite as $key) {
                    echo "<tr><td>". $key ['SUM(capacite)']."</td></tr>";
                };
            ?>
        </tbody>
    </table>
</body>
</html>