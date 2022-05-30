<?php 
// session_start() ;
include '../koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter|Nunito|Trirong">

    <title>Form Pendaftaran Member Nguber</title>
  </head>
  <body>
    <div class="jumbotron">
        <div class="logo">
            <img src="../assets/logo.png" alt="">
        </div>
        <div class="navbar">
        </div>
    </div>
    
    <div class="content">
        <div class="form">
            <h1>Login</h1>
            <form method="POST">
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email">
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
              </div>
              <button type="submit" class="btn btn-primary" name="login">Login</button>
          </form>
          <?php
         if (isset($_POST['login']))
         {
           $ambil= $koneksi->query("SELECT * FROM admin WHERE email='$_POST[email]' AND password ='$_POST[pass]'");
           $cocok = $ambil->num_rows;
           if ($cocok==1)
           {
           $_SESSION['admin']=$ambil->fetch_assoc();
           echo "<div class='alert alert-info'>Login sukses</div>";
           echo "<meta http-equiv='refresh' content='1;url=akun.php'>";
         }
         else
         {
          echo "<div class='alert alert-danger'>Login gagal</div>";
         }

         }
         ?>
        </div>
        <div class="banner">
            <div class="text">
                <h1>Welcome to admin login page</h1>
            </div>
            <div class="image">
                <img src="../assets/banner.png" alt="">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>