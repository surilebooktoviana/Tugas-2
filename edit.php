<?php
include("config.php");
if( !isset($_GET['id']) ){
    header('location: list.php');
}
$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan....");
}
?>


<!DOCTYPE html>
<html>
<head>
   
    <title>Hasna</title>
</head>
<body>
    <header>
        <h3>Data Mahasiswa</h3>
</header>

<form action="edits.php" method="post">
    <fieldset>
        <input type="hidden" name="id" value="<?php echo $siswa[ 'id' ] ?>" />
        <p>
            <label for="nama">Nama: </label>
            <input for="text" name="nama" 
            placeholder="isikan nama lengkap" value="<?php
            echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="nama">Nim: </label>
            <input for="text" name="nim" 
            placeholder="isikan Nim" value="<?php
            echo $siswa['nim'] ?>" />
        </p>
        <p>
            <label for="nama">Kelas: </label>
            <input for="text" name="kelas" 
            placeholder="isikan Kelas" value="<?php
            echo $siswa['kelas'] ?>" />
        </p>
        <p>
            <label for="nama">Fakultas: </label>
            <input for="text" name="fakultas" 
            placeholder="isikan Fakultas" value="<?php
            echo $siswa['fakultas'] ?>" />
        </p>
        <p>
            <input type="submit" value="simpan" name="simpan" />
        </p>
</fieldset>
    
</body>
</html>