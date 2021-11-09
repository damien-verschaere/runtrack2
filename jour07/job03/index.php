<?php
session_start();
if (isset($_POST['prenom'])) {
    $_SESSION['prenom'] = $_SESSION['prenom'] .' '. $_POST['prenom'];
};
if ($_POST['reset']) {
    session_destroy();
}
echo $_SESSION['prenom'];


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
        <input type="submit" name='reset'>
    </form>
</body>
</html>