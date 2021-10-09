<?php

if (count($_COOKIE)>0 && isset($_COOKIE['admin'])) {
  
  if ($_COOKIE['user'] == base64_encode("admin")) {
    header('Location: dashboard.php');
  }
  elseif ($_COOKIE['user'] == base64_encode("hamza")) {
    header('Location: ../index.php');
  }
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>space box - admin login</title>
  <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>
<body>
    <ul>
        <li style="float: left;"><a href="#">login</a></li>
        <li><a href="../pics.php">pictures</a></li>
        <li><a href="../posts.php">posts</a></li>
        <li><a href="../index.php">Home</a></li>
    </ul>
    <div class="home">
      <h2>log into admin control panel</h2>
    <form method="post" action="cookies.php">
      <input class="anyinput" type="text" name="username" placeholder="username" required><br>
      <input class="anyinput" type="password" name="password" placeholder="password" required><br>
      <input type="submit" name="submit" value="login" required>
    </form>
    </div>
    <--!user: hamza!->
</body>
</html>