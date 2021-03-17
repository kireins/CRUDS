<?php
//require
require 'functions.php';
$siswa = query("SELECT * FROM tb_siswa");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <a href="tambah2.php">tambah data mahasiswa</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
        <th>No</th>
        <th>aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Jurusan</th>
        </tr>
    <?php $i = 1; ?>
    <?php foreach($siswa as $row):?>

        <tr>
        <td><?= $i; ?></td>
        <td>
        <a href="">ubah</a> | 
        <a href="ubah.php?id="<?php echo $row["id_siswa"];?>>ubah</a>
        <a href="hapus.php?id="<?php echo $row["id_siswa"];?>>hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar_siswa"];?>" width="50"></td>
        <td><?php echo $row["nama_siswa"];?></td>
        <td><?php echo $row["nim_siswa"];?></td>
        <td><?php echo $row["email_siswa"];?></td>
        <td><?php echo $row["jurusan_siswa"];?></td>

        </tr>
        <?php $i++ ?>

        <?php endforeach;?>
    </table>
</body>
</html>