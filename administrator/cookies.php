<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])){
  $user = htmlspecialchars($_POST['username']);
  $pass = htmlspecialchars($_POST['password']);
  if ($user == "admin" && $pass == "randompass") {
    setcookie("user", base64_encode("admin"), time()+3600, "/");
    header("Location: dashboard.php");
  }
  elseif($user == "hamza" && $pass == "password"){
    setcookie("user", base64_encode("hamza"));
    header("Location: ../index.php");
  }
}
else {
    echo "forbiden";
}

?>
