<<<<<<< HEAD
<?php
session_start();
$admin=$_SESSION['admin'];
$id_admin = $admin['id'];
$url = "http://localhost:3002/api/admin/$id_admin";
$header = "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjYyOWQ1NmUzNmRlMjFiYzNjYjJlMTY1ZCIsImVtYWlsIjoiYWRtaW5AZ21haWwuY29tIiwiaWF0IjoxNjU0NTY0OTI5fQ.5q4MY7ey5JgL17TYP0HViM9UQN9leWbfK6rJwtJfOtM";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url); 
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json',$header));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$output = curl_exec($ch);
if ($e = curl_error($ch)){
  echo $e;
}
else {
  $data = json_decode($output, true);
  // var_dump($decoded);
}
curl_close($ch);
$nama = $data['data']['full_name'];
$email = $data['data']['email'];
$pass = $data['data']['password'];
$alamat = $data['data']['address'];
$no_hp = $data['data']['phone_number'];
$no_ktp = $data['data']['no_ktp'];
=======
<?php 
session_start();
include "../koneksi.php"; 

$id_admin = $_SESSION["admin"]["id"];
$ambil = $koneksi->query("SELECT * FROM admin WHERE id='$id_admin'");
$pecah = $ambil->fetch_assoc();
>>>>>>> 7b0525a9592a43e5a9f8648943ce1f439be0eb92
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

    <title>Form Edit Member Nguber</title>
  </head>
  <body>
    <div class="jumbotronBeranda">
        <div class="logo">
            <img src="../assets/logo-white.png" alt="">
        </div>
        <div class="navbarBeranda">
          <a href="beranda.html">Beranda</a>
          <a href="reqruitment.php">Reqruitment</a>
          <a href="dataDriver.html">Data Driver</a>
          <a href="dataCustomer.html">Data Customer</a>
          <a href="dataTransaksi.html">Data Transaksi</a>
          <b><u><a href="akun.php">Akun</a></u></b>
        </div>
    </div>

    <div class="profil">
      <div class="foto">
        <img src="../assets/woman.png" alt="">
      </div>

      <div class="data">
        <div class="akun">
        </div>

        <div class="informasiAdmin">
          <p><b>Informasi Akun</b></p>
          <hr>
          <br>
          <form method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $email?>">
              </div>
              <div class="username password">
                <div class="mb-3">
                  <label for="exampleInputUsername" class="form-label">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername" name="username" value="<?php echo $nama?>">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="pass" value="<?php echo $pass?>">
                </div>
              <div class="mb-3">
              <label for="exampleInputNama1" class="form-label">Nama</label>
              <input type="text" class="form-control" id="exampleInputNama1" name="nama" value="<?php echo $nama?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputAlamat1" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="exampleInputAlamat1" name="alamat" value="<?php echo $alamat?>">
            </div>
            <div class="noHp noKtp">
              <div class="mb-3">
                <label for="exampleInputNomorHp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="exampleInputNomorHp" name="nomor" value="<?php echo $no_hp?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputNomorKTP" class="form-label">Nomor KTP</label>
                <input type="text" class="form-control" id="exampleInputNomorKTP" name="ktp" value="<?php echo $no_ktp?>">
              </div>
            </div>
            <div class="button">
              <button type="submit" class="btn btn-primary editAkun" name="ubah"><a>Simpan</a></button>
              <button class="btn btn-primary cancel"><a href="akun.php">Cancel</a></button>
            </div>
          </form>
          <?php
          if (isset($_POST["ubah"]))
          {
            $url = "http://localhost:3002/api/admin/$id_admin";
            $header = array(
              "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjYyOWQ1NmUzNmRlMjFiYzNjYjJlMTY1ZCIsImVtYWlsIjoiYWRtaW5AZ21haWwuY29tIiwiaWF0IjoxNjU0NTY0OTI5fQ.5q4MY7ey5JgL17TYP0HViM9UQN9leWbfK6rJwtJfOtM"
            );

            $array = array(
                "full_name" => $_POST['nama'],
                "email" => $_POST["email"],
                "password" => $_POST["pass"],
                "phone_number" => $_POST['nomor'],
                "address" => $_POST['alamat'],
                "no_ktp" => $_POST['ktp']
            );
            $data = http_build_query($array);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $output = curl_exec($ch);
            if ($e = curl_error($ch)){
                echo $e;
            }
            else {
                echo "<script>alert('data berhasil diupdate')</script>";
				        echo "<script>location='akun.php';</script>";
            }
            curl_close($ch);
        }
        ?>
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