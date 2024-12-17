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
    <title>Admin Dashboard</title>
</head>
<body>
    <center>
        <h1>SELAMAT DATANG ADMIN!</h1>
    <b>List Komentar:</b>
    <ul style="list-style:none;">
    <?php   
        $i = 1;
        include "../../config.php"; 
        $q = mysqli_query($conn, "SELECT * FROM `comment` ");
        while ($data = mysqli_fetch_array($q)){
        ?>
           <li>
           <?= $i . ". ".$data['comment_text'] ?>
           </li>
        <?php
        $i++;
        }

    ?>
    </ul>
    </center>

</body>
</html>