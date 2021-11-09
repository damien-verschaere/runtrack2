<?php

$str="On n est pas le meilleur quand on le croit mais quand on le sait";
$dic=array(
    'consone'=>["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z" ],
    'voyelle'=>["a","e","i","o","u","y","O"]
);
$compteurC=0;
$compteurV=0;

for ($i=0;isset($str[$i])==true; $i++) { 
    echo $str[$i];
    for ($c=0;isset($dic['consone'][$c]);$c++) { 
        if ($str[$i]==$dic['consone'][$c]) {
            $compteurC ++;
        };
    for ($v=0;isset($dic['voyelle'][$v]); $v++) { 
        if ($str[$i]==$dic['voyelle'][$v]) {
            $compteurV++;
        };
    }
};

}
echo $compteurC;
echo $compteurV;
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
            <th>
                <td>CONSONE</td>
                <td>VOYELLE</td>
            </th>
            <tbody>
                <tr>
                    <td><?php echo $compteurC ?> </td>
                    <td><?php echo $compteurV ?></td>
                </tr>
            </tbody>
        </thead>
    </table>
</body>
</html>