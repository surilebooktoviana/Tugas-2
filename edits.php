<?php
include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $fakultas = $_POST['fakultas'];

    $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', kelas='$kelas', fakultas='$fakultas' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    if( $query) {
        header('location: list.php');
    } else {
    die("gagal menyimpan perubahan...");
    }
} else {
    die("akses dilarang...");
}
?>