
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" placeholder="prenom" name="prenom"><br>
        <input type="text" placeholder="nom"name="nom"><br>
        <input type="text" placeholder="email"name="email"><br>
        <button type=submit>ENVOI</button>
    </form>
    
</body>
</html>
<?php
 $index=0;

 foreach ($_GET as $key=>$index ) {
     echo $key."<br>";
     $index++;
 }

    ?>