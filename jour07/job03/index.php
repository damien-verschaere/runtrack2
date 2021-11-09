<?php
// if (isset($_POST['prenom'])) {
//     $_SESSION['prenom'] = $_SESSION['prenom'] .' '. $_POST['prenom'];
// };

// echo $_SESSION['prenom'];
session_start();
if (!isset($_SESSION['prenom']))
    $_SESSION['prenom']= [];
    $compteurI = 0;
foreach ($_SESSION['prenom'] as $key => $value) {
    $compteurI++;
}
if (isset($_POST['prenom'])) {
    $_SESSION['prenom'][$compteurI] = $_POST['prenom'];
}   
if ($_POST['reset']) {
    session_destroy();
}

var_dump($_SESSION);


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
    <form action="index.php" method="POST">
        <input type="text"placeholder="prenom"name="prenom">
        <input type="submit">
        <input type="submit" name='reset'value="reset">
    </form>
</body>
</html>
<?php
 for ($i=0; $i<=0 ; $i++) { 
    echo $_SESSION['prenom'][$i];
 };
 ?>