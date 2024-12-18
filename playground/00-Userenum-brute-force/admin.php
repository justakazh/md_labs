<?php

session_start();
if(!isset($_SESSION['login'])){
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <center>
        <img src="./avatar/users/puppet/image.webp" alt="" width="20%">
        <h3>THIS IS ADMIN PAGE</h3>
        <h1>KAMU HACKER BANGETZ</h1>

    </center>
</body>
</html>