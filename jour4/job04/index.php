<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php"method="post">
        <input type="text" name="nom"placeholder="nom" id=""><br>
        <input type="text" name="prenom"placeholder="prenom" id=""><br>
        <input type="text" name="email"placeholder="email" id=""><br>
        <input type="submit"><br>
    </form>
    <table>
        <thead>
            <tr>
                <th>ARGUMENT</th>
                <th>VALEUR</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($_POST as $key => $value) {
                   echo "<tr><td>". $key  ."</td><td>".$value."</td></tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>





