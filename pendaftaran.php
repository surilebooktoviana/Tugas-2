<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $fakultas = $_POST['fakultas'];

    $sql = "INSERT INTO mahasiswa (nama, nim, kelas, fakultas) VALUE
     ('$nama', '$nim', '$kelas', '$fakultas')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('location: index.php?status=sukses');
    } else {
        header('location: index.php?status=gagal');
    }

} else {
    die("akses dilarang.....");
}
?>