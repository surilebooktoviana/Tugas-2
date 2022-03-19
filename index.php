<!DOCTYPE html>
<html >
<head>
    
    <title>Hasna</title>
</head>
<body>
    <header>
        <h3>Data Mahasiswa via lebo</h3>
        <h1> echa dan via </h1>
    </header>
    <h4>Menu</h4>
    <nav>
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "pendaftaran berhasil";
                }else {
                    echo "pendaftaran gagal!";
                }
                ?>
            </p>
            <?php endif; ?>
            <ul>
                <li><a href="daftar.php">Daftar Baru</a></li>
                <li><a href="list.php">List</a></li>
            </ul>
    </nav>
</body>
</html>
