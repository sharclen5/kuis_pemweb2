<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
</head>
<body>
    
<h1>Tambah Pelanggan</h1>
    <form action="tambah.php" method="post">

        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama"><br>

        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" id="alamat"><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email"><br>

        <br>
        <button type="button" onclick="location.href='index.php'">Kembali</button>
        <input type="submit" value="Tambah" name="tambah">

    </form>


<?php

require 'class/pelanggan.php';
$pelanggan = new pelanggan();

if(isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    $pelanggan->tambah($id_pelanggan, $nama, $alamat, $email);
    header('location: index.php');
}

?>

</body>
</html>