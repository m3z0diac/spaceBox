<?php



if (isset($_SERVER['HTTP_REFERER']))
{
    if(1==1);
    {
      setcookie("user", base64_encode("admin"), time() - 3600);
      unset($_COOKIE['user']);
      header('Location: login.php');
    }
}

?>