<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit pelanggan</title>
</head>

<body>

    <h1>Edit pelanggan</h1>

    <?php
    require 'class/pelanggan.php';
    $pelanggan = new pelanggan();
    $id = $_GET['id'];
    $data = $pelanggan->tampilkan_id($id);
    ?>

    <form action="edit.php" method="post">

        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>"><br>

        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>"><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" value="<?php echo $data['email']; ?>"><br>

        <br>

        <input type="submit" value="Edit" name="edit">

    </form>

    <?php
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $pelanggan->edit($id, $nama, $alamat, $email);
        header('location: index.php');
    }
    ?>

</body>
</html>