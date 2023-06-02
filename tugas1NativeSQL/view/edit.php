<?php
// include database connection file
require_once "../database/connection.php";
global $connect;
// Check if form is submitted for product update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
// update product data
    $result = mysqli_query($connect, "UPDATE mahasiswa SET nim='$nim', nama='$nama', no_hp='$no_hp', 
              alamat='$alamat' WHERE nim=$nim");
// Redirect to homepage to display updated product in list
    header("Location: index.php");
}
?>

<?php
// Display selected product data based on id
// Getting id from url
require_once "../database/connection.php";
global $connect;
// Fetch product data based on id
$nim = $_GET['nim'];
$result = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE nim=$nim");
while($data = mysqli_fetch_array($result))
{
    $nim= $data['nim'];
    $nama = $data['nama'];
    $no_hp = $data['no_hp'];
    $alamat = $data['alamat'];
}
?>

<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>
<h1>Edit Data Mahasiswa</h1>
<a href="index.php">Home</a>
<br/><br/>
<form name="update.data" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>NIM</td>
            <td>&nbsp : <input type="text" name="nim" value=<?php
                echo "\"$nim\"";
                ?>></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>&nbsp : <input type="text" name="nama" value=<?php
                echo "\"$nama\"";
                ?>></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td>&nbsp : <input type="text" name="no_hp" value=<?php
                echo "\"$no_hp\"";
                ?>></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>&nbsp : <input type="numeric" name="alamat" value=<?php
                echo "\"$alamat\"";
                ?>></td>
        </tr>
        <tr>
            <td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
            <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>