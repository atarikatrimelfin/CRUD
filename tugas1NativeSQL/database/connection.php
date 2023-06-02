<?php

$connect = mysqli_connect("localhost","root","","tugaspbd");

// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
//    echo "koneksi berhasil";
}
?>