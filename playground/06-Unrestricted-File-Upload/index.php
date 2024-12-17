<?php 

// PLEASE DONT REMOVE THIS 

// Code By : Justakazh 
// Github  : https://github.com/justakazh

// RESPECT FOR CODER :)



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" >
    <title>Upload Foto</title>
  </head>
  <style type="text/css">
    body{
      font-family: sans-serif;
      background-color: #202124;
      color: #fff;
    }
  </style>
  <body>

    <div class="container">
        <div class="col-md-6 offset-3" style="margin-top: 200px;">
            <form action="" method="POST" enctype="multipart/form-data">
                <h1>Upload Foto</h1>
                <br>
                <div class="form-row align-items-center">
                    <div class="col-md-10 my-1">
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="col-auto my-1">
                        <button type="submit" name="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $targetDir = "dick/"; // Direktori tempat file akan diupload
                $targetFile = $targetDir . basename($_FILES["file"]["name"]);
            
                // Cek apakah file benar-benar berupa gambar
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                    echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            
            ?>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../../assets/js/jquery.slim.min.js" ></script>
    <script src="../../assets/js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>


