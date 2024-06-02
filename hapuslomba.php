<?php
include_once("koneksi.php");
$id= $_GET['id'];
$query=" delete from tb_lomba where id_lomba=$id ";
$hasil=mysqli_query($conn,$query);
if($hasil){
    header('location:lomba2.php');
}else {
    echo "Hapus Data Gagal";
}
?>