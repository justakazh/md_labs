<?php

session_start();
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "puppet"){
        if($pass == "yankees"){
            $_SESSION['login'] = true;
            header("Location: admin.php");
        }
        else{
            echo "<script>alert('password salah')</script>";
        }
    }
    else{
        echo "<script>alert('username tidak ditemukan!')</script>";
    }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Login  </title>
  </head>
  <style type="text/css">
    body{
      font-family: sans-serif;
    }
  </style>
  <body>
    <div class="container mt-5">
        <!-- title -->
        <div class="row">
          <div class="col-md-6 offset-3">
            <h1>Login dulu sat!</h1>
            <hr>
          </div>
        </div>
        <!-- content -->
        <div class="row">
          <div class="col-md-6 offset-3">
            <form action="" method="post">
                <input type="text" class="form-control" placeholder="Username" name="username">
                <br>
                <input type="password" class="form-control" placeholder="Password" name="password">
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-md-6 offset-3">
                      </div>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../../assets/js/jquery.slim.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"  ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" ></script>
    -->
  </body>
</html>


