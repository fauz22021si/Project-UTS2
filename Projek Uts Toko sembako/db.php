<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "dbsembako";

    $conn = mysqli_connect($hostname, $username, $password, $database) or die ('Gagal terhubung ke database');
?>