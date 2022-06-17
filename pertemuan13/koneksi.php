<?php
$koneksi = mysqli_connect("localhost:3306","root","","dbminggu13");

if (mysqli_connect_errno()) {
    echo "koneksi database gagal:" . mysqli_connect_error();
}
?>