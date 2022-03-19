<?php include("config.php"); ?>

<!DOCTYPE html>
<html >
<head>
    
    <title>Hasna</title>
   
    
</head>

<body>
<header>
   
</header>

<nav>
<a href="daftar.php">[+}Daftar baru</a>
</nav>

<br>
<table border="1">
    <thead>
        <tr>
           <th>No</th> 
           <th>Nama</th>
           <th>Nim</th>
           <th>Kelas</th>
           <th>Fakultas</th>
        </tr>
    </thead>   
    <tbody>

        <?php
        $sql = "SELECT * FROM mahasiswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$siswa["id"]."</td>";
            echo "<td>".$siswa["nama"]."</td>";
            echo "<td>".$siswa["nim"]."</td>";
            echo "<td>".$siswa["kelas"]."</td>";
            echo "<td>".$siswa["fakultas"]."</td>";
            echo "<td>";
            echo "<a href='edit.php?id=".$siswa['id']." '>edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']." '>hapus</a>";
            echo "</td>";
            echo "</tr>";

        }

        ?>
    </tbody>
</table>

</body>


</html>