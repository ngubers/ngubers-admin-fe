<?php 
session_start();
include "../koneksi.php"; 

$id_admin = $_SESSION["admin"]["id"];
$ambil = $koneksi->query("SELECT * FROM admin WHERE id='$id_admin'");
$pecah = $ambil->fetch_assoc();
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
    <div class="jumbotronBeranda">
        <div class="logo">
            <img src="../assets/logo-white.png" alt="">
        </div>
        <div class="navbarBeranda">
          <a href="beranda.html">Beranda</a>
          <a href="reqruitment.html">Reqruitment</a>
          <a href="dataDriver.html">Data Driver</a>
          <a href="dataCustomer.html">Data Customer</a>
          <a href="dataTransaksi.html">Data Transaksi</a>
          <b><u><a href="akun.html">Akun</a></u></b>
        </div>
    </div>

    <div class="profil">
      <div class="foto">
        <img src="../assets/woman.png" alt="">
      </div>

      <div class="data">
        <div class="akun">
          <p><b>Akun</b></p>
          <hr>
          <br>
          <form method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" readonly value="<?php echo $pecah["email"]?>">
            </div>
            <div class="username password">
              <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername" name="username" readonly value="<?php echo $pecah["nama_lengkap"]?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass" readonly value="<?php echo $pecah["password"]?>">
              </div>
            </div>
          </form>
        </div>

        <div class="informasiAdmin">
          <p><b>Informasi Admin</b></p>
          <hr>
          <br>
          <form method="POST">
            <div class="mb-3">
              <label for="exampleInputNama1" class="form-label">Nama</label>
              <input type="text" class="form-control" id="exampleInputNama1" name="nama" readonly value="<?php echo $pecah["nama_lengkap"]?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputAlamat1" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="exampleInputAlamat1" name="alamat" readonly value="<?php echo $pecah["alamat"]?>">
            </div>
            <div class="noHp noKtp">
              <div class="mb-3">
                <label for="exampleInputNomorHp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="exampleInputNomorHp" name="nomor" readonly value="<?php echo $pecah["no_hp"]?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputNomorKTP" class="form-label">Nomor KTP</label>
                <input type="text" class="form-control" id="exampleInputNomorKTP" name="ktp" readonly value="<?php echo $pecah["no_ktp"]?>">
              </div>
            </div> 
            <div class="button">
              <button type="submit" class="btn btn-primary editAkun"><a href="editAkun.php">Ubah</a></button>
            </div>         
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>