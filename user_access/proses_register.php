<?php

    include_once("../function/koneksi.php");
    include_once("../function/helper.php");

    $level = "user";
    $status = "on";
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $nik = $_POST['nik'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    // mysqli_query($koneksi, "INSERT INTO  user (level, nama, email, alamat, phone, password, status)
    //                                     VALUES ('$level', '$nama_lengkap', '$email', '$alamat', '$phone', '$password', '$status')");

    unset($_POST['password']);
    unset($_POST['re_password']);
    $dataFrom = http_build_query($_POST);
    echo "SELECT * FROM `account` WHERE email='$email'";

    $query = mysqli_query($koneksi, "SELECT * FROM `account` WHERE email='$email'");

    // echo mysqli_num_rows($query); 

    if(empty($nama_lengkap) || empty($email) || empty($phone) || empty($nik) || empty($password)) {
        header("location:".BASE_URL."index.php?page=user_access/register&notif=require&$dataFrom");
    } elseif($password != $re_password) {
        header("location:".BASE_URL."index.php?page=user_access/register&notif=password&$dataFrom");
    } elseif(mysqli_num_rows($query) == 1) {
        header("location:".BASE_URL."index.php?page=user_access/register&notif=email&$dataFrom");
    } else {
        $password = md5($password);
        mysqli_query($koneksi, "INSERT INTO  account (level, nama, email, nik, phone, password, status)
                                        VALUES ('$level', '$nama_lengkap', '$email', '$nik', '$phone', '$password', '$status')");
        header("location:".BASE_URL."index.php?page=user_access/login");
    };