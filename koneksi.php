<?php
$koneksi = new mysqli ("localhost","root","","nguber");

session_start();

$id_admin = $_SESSION["admin"]["id"];
$ambil = $koneksi->query("SELECT * FROM admin WHERE id='$id_admin'");
$pecah = $ambil->fetch_assoc();

if(mysqli_connect_error()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}


$conn = mysqli_connect("localhost", "root", "", "nguber");


// ambil data dari database
function query($query) {
    global $conn;

	$result = mysqli_query($conn, $query);
    $rows = [];
    // untuk tiap row data ditambahkan ke var rows
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    };

    // return rows dalam bentuk array assoc
    return $rows; 
};



// fungsi tambah
function tambah($data) {
    global $conn;
    global $id_admin;

    // ambil data dari dalam form
    $nama    = $data["nama"];
    $alamat  = $data["alamat"];
    $email   = $data["email"];
    $password= $data["password"];
    $hp      = $data["hp"];
    $ktp     = $data["ktp"];
    $berkas  = $data["berkas"];

    // insert into table 
    $query = "INSERT INTO driver_recruitments
              VALUES('', '$id_admin', '$nama', '$alamat', '$email', '$password', '$hp', '$ktp', '$berkas', '1')
              ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
};

?>

