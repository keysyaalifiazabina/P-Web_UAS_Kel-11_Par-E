<?php
include_once("koneksi.php");
$id= $_GET['id'];
$query=" delete from tb_lomba where id_lomba=$id ";
$hasil=mysqli_query($conn,$query);
if($hasil){
    echo "<script>alert('Hapus Data Berhasil'); 
         document.location.href='lomba2.php'; </script>";;
}else {
    echo "Hapus Data Gagal";
}
?>