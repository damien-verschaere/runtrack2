<?php

session_start();

if (!isset($_SESSION['nbvisite'])) {
    $_SESSION['nbvisite']=1;
}
elseif ($_POST['reset']) {
    unset($_SESSION['nbvisite']);
}

else {
    $_SESSION['nbvisite']++;
}
echo "nombre de visite :" . $_SESSION['nbvisite'];

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
   <form action="index.php"method='POST'>
       <input type="submit"name='reset'>
   </form> 
</body>
</html>
