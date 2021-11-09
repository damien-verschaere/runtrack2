<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get" >
        <input type="text"placeholder="nom"name="nom"><br>
        <input type="text" placeholder="prenom"name="prenom"><br>
        <input type="text" placeholder="email"name="email"><br>
        <input type="submit">
    </form>
    <br>
    <br>
    <br>

    <table>
        <thead>
            <tr>
                <th>ARGUMENT</th>
                <th>VALEUR</th>
            </tr>
            <tbody>
            <?php
            foreach ($_GET as $key => $value) {
              echo "<tr> <td>".$key  ."</td><td>".$value ."</td></tr>";
            }
            ?>
            </tbody>
        </thead>
    </table>
</body>
</html>
