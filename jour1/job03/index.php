<?php
    $str="chaine de caractere";
    $int= 4;
    $float=4.5;
    $bool=true;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau php</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>TYPE</th>
                <th>NOM</th>
                <th>VALEUR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>string</td>
                <td>str</td>
                <td><?php echo $str ?></td>
            </tr>
            <tr>
                <td>integer</td>
                <td>int</td>
                <td><?php echo $int ?></td>
            </tr>
            <tr>
                <td>float</td>
                <td>float</td>
                <td><?php echo $float ?></td>
            </tr>
            <tr>
                <td>boolean</td>
                <td>bool</td>
                <td><?php echo $bool ?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>