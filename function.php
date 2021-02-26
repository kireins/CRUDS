<?php 
//koneksi ke database
//(nama host, username, password, nama database) 
$db = mysqli_connect("localhost", "root", "", "db_phpdasarr");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data){
    global $db;
    //ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama_siswa"]);
    $nim = htmlspecialchars($data["nim_siswa"]);
    $email = htmlspecialchars($data["email_siswa"]);
    $jurusan = htmlspecialchars($data["jurusan_siswa"]);
    $gambar = htmlspecialchars($data["gambar_siswa"]);

     //query insert data
     $query ="INSERT INTO siswa VALUES ('', '$gambar', '$nama', '$nim', '$email', '$jurusan' )";
     mysqli_query($db, $query);
 
     return mysqli_affected_rows($db);

}


function hapus($id){
    global $db;
    mysqli_query($db, "DELETE FROM siswa WHERE id = $id");

    return mysqli_affected_rows($db);
}  

?>
