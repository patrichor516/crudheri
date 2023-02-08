<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "phpcrud";

    $koneksi = mysqli_connect($host, $user, $pass, $database);
    if (mysqli_connect_errno()){
        echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
    }
?>