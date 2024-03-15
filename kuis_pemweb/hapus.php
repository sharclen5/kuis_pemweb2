<?php

require 'class/pelanggan.php';
$pelanggan = new Pelanggan();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $pelanggan->hapus($id);
    header('location: index.php');
}

?>