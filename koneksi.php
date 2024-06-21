<?php

$conn = mysqli_connect("localhost","root","","db_uas");

$pdo = new PDO('mysql:host=localhost;dbname=db_uas', 'root', ''); //karena pake php 8.2 disarankan pake ini aja
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!$conn){
    // echo "Koneksi Gagal";
    die();
}else{
    //echo "Koneksi berhasil";

}
?>