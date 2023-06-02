<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
<h1>Tambah Data Mahasiswa</h1>
<a href="index.php">Go to Home</a>
<br/><br/>
<form action="add.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>NIM</td>
            <td>: <input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td>: <input type="text" name="no_hp"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <input type="numeric" name="alamat"></td>
        </tr>
        <tr>
            <td></td>
            <td>&nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp<input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>
<?php
// Check If form submitted, insert form data into products table.
if(isset($_POST['Submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
// include database connection file
    require_once "../database/connection.php";
    global $connect;
// Insert product data into table
    $result = mysqli_query($connect, "INSERT INTO mahasiswa(nim, nama, no_hp, alamat) 
              VALUES('$nim','$nama', '$no_hp', '$alamat')");
// Show message when product added
    echo "Data Berhasil Ditambahkan. <a href='index.php'>Lihat Data</a>";
}
?>
</body>
</html>