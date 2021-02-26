<?php
//koneksi ke DBMS
$db = mysqli_connect("localhost", "root", "", "db_phpdasarr");

// cek apakah tombol submit udah ditekan atau belum
if(isset($_POST["submit"])){
    // var_dump($_POST);

    //ambil data dari tiap elemen dalam form
    // $id = $_POST["id_siswa"];
    $nama = $_POST["nama_siswa"];
    $nim = $_POST["nim_siswa"];
    $email = $_POST["email_siswa"];
    $jurusan = $_POST["jurusan_siswa"];
    $gambar = $_POST["gambar_siswa"];


    //query insert data
    $query ="INSERT INTO tb_siswa VALUES ('', '$gambar', '$nama', '$nim', '$email', '$jurusan')";
    mysqli_query($db, $query);

    //cek apakah data berhasil ditambahkan atau tidak
    var_dump(mysqli_affected_rows($db));

    if(mysqli_affected_rows($db) > 0){
        echo "berhasil";
    }else {
        echo "gagal";
        echo "<br>";
        echo mysqli_error($db);
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    <!-- untuk menentukan da -->
    <form action="" method="post">
    <ul>
        <li>
            <label for="nama_siswa">Nama : </label>
            <input type="text" name="nama_siswa" id="nama_siswa"> </input>
        </li>
        <li>
            <label for="nim_siswa">NIM : </label>
            <input type="text" name="nim_siswa" id="nim_siswa"> </input>
        </li>
        <li>
            <label for="email_siswa">NRP : </label>
            <input type="text" name="email_siswa" id="email_siswa"> </input>
        </li>
        <li>
            <label for="jurusan_siswa">NRP : </label>
            <input type="text" name="jurusan_siswa" id="jurusan_siswa"> </input>
        </li>
        <li>
            <label for="gambar_siswa">NRP : </label>
            <input type="text" name="gambar_siswa" id="gambar_siswa"> </input>
        </li>
        <br>
        <button type="submit" name="submit">Tambah Data</button>
    </ul>
    </form>
</body>
</html>