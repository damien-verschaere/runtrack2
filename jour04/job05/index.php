<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php"method="POST">
                                                      
        <input type="text" placeholder="username" name="pseudo"><br>
        <input type="text" placeholder="password" name="mdp"><br>
        <input type="submit"><br>
    </form>
 
</body>
</html>
<?php
        $pseudo=$_POST["pseudo"];
        $mdp=$_POST["mdp"];
        if ($pseudo=="John"&&$mdp=="Rambo") {
        echo "C'est pas ma guerre";
        }
        else {
        echo "Votre pire cauchemar";
       }?>                                         