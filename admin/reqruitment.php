<?php
session_start();
// $admin=$_SESSION['admin'];
// $id_admin = $admin['id'];
$url = "http://localhost:3002/api/admin/driver";
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
  // var_dump($data);
}
curl_close($ch);
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
          <b><u><a href="reqruitment.html">Reqruitment</a></u></b>
          <a href="dataDriver.html">Data Driver</a>
          <a href="dataCustomer.html">Data Customer</a>
          <a href="dataTransaksi.html">Data Transaksi</a>
          <a href="akun.php">Akun</a>
        </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">No. Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Ktp</th>
            <th scope="col">Status</th>
            <th scope="col">Pendaftaran</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php
          $no = 0;
          foreach ($data['data']['data'] as $row) {
            $no++?>
            <tr>
            <td><?=$no?></td>
            <td><?=$row['full_name']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['phone_number']?></td>
            <td><?=$row['address']?></td>
            <td><?=$row['no_ktp']?></td>
            <td><?=$row['status']?></td>
            <td><?=$row['createdAt']?></td>
            <td>
              <a href="ubahStatus.php?id=<?=$row['_id']?>" class="btn-warning" name='ubah'>Ubah Status</a>
            </td>
            </tr>
          <?php }?>
        </tbody>
  </table>
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