<?php

if (isset($_POST['article']) && isset($_POST['article-title'])) {
    $filename = $_POST['article-title'];
    $filename = str_ireplace(" ", "-", $filename);
    $content = $_POST['article'];
    file_put_contents("posts/".$filename."php", $content);
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Pwn Me</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
    <ul>
        <li style="float: left;"><a href="administrator/login.php">login</a></li>
        <li><a href="pics.php">pictures</a></li>
        <li><a href="posts.php">posts</a></li>
        <li><a href="index.php">Home</a></li>
    </ul>
    <div class="home">
        <h1>space box articles</h1>
    </div>
</body>
</html>