<?php
require_once "../database/connection.php";
// Fetch all products data from database
global $connect;
$result = mysqli_query($connect, "SELECT * FROM mahasiswa ORDER BY nim");
?>
<html>
<head>
    <title>CRUD Native SQL</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<a href="add.php">Tambah Data</a><br/><br/>
<table width='80%' border=1>
    <tr>
        <th>NIM</th> <th>Nama</th> <th>No HP</th> <th>Alamat</th> <th>Action</th>
    </tr>
    <?php
    while($data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $data['nim'] . "</td>";
        echo "<td>" . $data['nama'] . "</td>";
        echo "<td>" . $data['no_hp'] . "</td>";
        echo "<td>" . $data['alamat'] . "</td>";
        echo "<td><a href='edit.php?nim=$data[nim]'>Edit</a> | <a href='delete.php?nim=$data[nim]'>Delete</a></td></tr>";
    }
    ?>
</table>
</body>
</html>