<?php 

require 'koneksi.php';

// cek apakah submit sudah ditekan
if ( isset($_POST["submit"]) ) {

  if (tambah($_POST) > 0) {
      echo "
          <script>
              alert('Data berhasil ditambahkan!');
              document.location.href = 'index.html';
          </script>
          ";
  } else {
      echo "
          <script>
              alert('Data gagal ditambahkan!');
              // document.location.href = 'registrasi.php';
          </script>
          ";
  };
};


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
    <link rel="stylesheet" href="css/styleRegist.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter|Nunito|Trirong">

    <title>Form Pendaftaran Member Nguber</title>
  </head>
  <body>
    <div class="jumbotron">
        <div class="logo">
            <img src="assets/logo.png" alt="">
        </div>
        <div class="navbar">
            <a href="index.html">Beranda</a>
            <a href=""><u><b>Bergabung Bersama Kami</b></u></a>
        </div>
    </div>
    
    <div class="content">
        <div class="form">
            <h1>Formulir Pendaftaran</h1>
            <p>Lihat ketentuan pendaftaran <a href="">di sini</a></p>
            <form action="" method="post">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mb-3">
                  <label for="hp" class="form-label">No. Telepon</label>
                  <input type="text" class="form-control" name="hp" id="hp">
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="alamat" id="alamat">
                </div>
                <div class="mb-3">
                  <label for="ktp" class="form-label">No. KTP</label>
                  <input type="text" class="form-control" name="ktp" id="ktp">
                </div>
                <div class="mb-3">
                  <label for="berkas" class="form-label">Upload Berkas</label>
                  <input type="file" class="form-control" name="berkas" id="berkas">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
              </form>
        </div>

        <div class="banner">
            <div class="text">
                <h1>Welcome!</h1>
                <p>Gabung bersama tim kami<br> sekarang juga!</p>
            </div>
            <div class="image">
                <img src="assets/banner.png" alt="">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>