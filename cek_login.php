<?php

//koneksi database

include "koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $pass);
$level = mysqli_real_escape_string($conn, $_POST['level']);

//cek username valid
$cek_user = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE username = '$username' and level = '$level' ");
$user_valid = mysqli_fetch_array($cek_user);
//uji jika user terdaftar
if($user_valid){
    //username terdaftar + cek password
    if($password == $user_valid['password']){
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['level'] = $user_valid['level'];

        //uji level

        if($level == "Admin"){
            header('location:home_admin.php');
        }else if($level == "User"){
            header('location:home_user.php');
        }else if($level == "Vendor"){
            header('location:home_vendor.php');
        }
    } else {
        echo "<script>alert('Maaf, Login Gagal! Password Anda Salah.'); 
         document.location.href='index.php'; </script>";
    }
} else{
     echo"<script> alert('Maaf, Login Gagal! Username Anda Tidak Terdaftar.'); 
    document.location.href='index.php';</script>";
}
