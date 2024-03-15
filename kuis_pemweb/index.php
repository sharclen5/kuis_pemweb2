<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pelanggan</title>
</head>

<body>

    <h1>Daftar Pelanggan</h1>
    <table border="1">

        <tr>

            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Aksi</th>

        </tr>

        <?php
        require 'class/pelanggan.php';
        $pelanggan = new Pelanggan();
        $data = $pelanggan->tampilkan();
        $no = 1;
        foreach($data as $row){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='hapus.php?id=".$row['id']."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>

    </table>

    <br>

    <a href="tambah.php"><button>Tambah Pelanggan</button></a>


</body>
</html>