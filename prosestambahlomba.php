<?php
include_once("koneksi.php");

if (isset($_FILES['img'])) {
    $img = $_FILES['img']['name'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $target_dir = 'assets/cover/';

    if (move_uploaded_file($file_tmp, $target_dir . $img)) {
        $lomba = $_POST['nama_lomba'];
        $deskripsi = $_POST['deskripsi'];
        $vendor = $_POST['penyelenggara'];
        $kategori = $_POST['kategori'];
        $jadwal = $_POST['jadwal'];
        $tempat =$_POST['tempat'];

        $query= "INSERT INTO tb_lomba(img,nama_lomba,deskripsi,penyelenggara,kategori,jadwal,tempat) 
        VALUE ('$img','$lomba','$deskripsi','$vendor','$kategori','$jadwal','$tempat')";

        $hasil = mysqli_query($conn, $query);

        if ($hasil) {
            echo "<script>alert('Lomba Berhasil Ditambahkan'); 
         document.location.href='lomba2.php'; </script>";
        } else {
            echo "Input data Lomba Gagal!";
        }
    } else {
        echo "Upload gambar gagal!";
    }
} else {
    echo "File gambar tidak ditemukan.";
}
?>
