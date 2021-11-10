<html> 
    <head> 
        <title></title> 
   </head> 
  <body> 
<?php 

    if (!isset($_COOKIE['compteur']))
    {
        ?> 

<?php 
        $cookie = 1;
        setcookie("compteur", $cookie);
    }
    elseif (isset($_POST['reset'])) {
        setcookie('compteur');
        $cookie=0;
        setcookie('compteur',$cookie);
    }
    else
    {
        $cookie = ++ $_COOKIE['compteur'];
        setcookie("compteur", $cookie);
        ?> 
<?= $_COOKIE['compteur'] ?> 
<?php  }?> 
<form action="index.php"method='POST'>
    <input type="submit"name="reset">
</form>
   </body> 
</html>








