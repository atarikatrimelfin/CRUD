<?php
// include database connection file
require_once "../database/connection.php";
// Get id from URL to delete that product
global $connect;
$nim = $_GET['nim'];
// Delete product row from table based on given id
$result = mysqli_query($connect,
    "DELETE FROM mahasiswa WHERE nim=$nim");
// After delete redirect to Home, so that latest product list will be displayed.
header("Location:index.php");
?>