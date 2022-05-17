<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "karangtaruna";

    $koneksi = mysqli_connect($server, $username, $password, $database) or die("koneksi ke database gagal");

    // if (mysqli_connect_errno()){
    //     echo "Koneksi database gagal : " . mysqli_connect_error();
    // }