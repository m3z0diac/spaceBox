<?php

if (count($_COOKIE)>0 && isset($_COOKIE['user'])) {
  
  if ($_COOKIE['user'] == base64_encode("admin")) {
    http_response_code(200);
  }
  elseif ($_COOKIE['user'] == base64_encode("hamza")) {
    header('Location: ../index.php');
  }
}

else {
    
    http_response_code(403);
    die("<center><h1 style='color:blue';padding-top:25%;> Forbidden 403<br>you are not allowd to see this page<br>:(</h1></center>");
    exit;
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
        <li style="float: left;"><a href="logout.php">logout</a></li>
        <li><a href="../pics.php">pictures</a></li>
        <li><a href="../posts.php">posts</a></li>
        <li><a href="../index.php">Home</a></li>
    </ul>
    <div class="home">
        <h2>welcom to admin's dashboaed</h2>
        <center><img style="width: 300px;height: 200px;" src="../img/noice.gif"></center>
        <h3>Note: all your uploaded posts going to /posts dir</h3>
        <form method="post" action="../posts.php">
            <input class="anyinput" type="text" name="article-title" placeholder="article title" required><br>
            <textarea style="width: 40%" name="article" placeholder="your article here" required></textarea><br>
            <input type="submit" name="submit" value="post" required>
        </form>
    </div>
</body>
</html>