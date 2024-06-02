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
        $jumlah = $_POST['jumlah_pst'];
        $jadwal = $_POST['jadwal'];

        $query= "INSERT INTO tb_lomba(img,nama_lomba,deskripsi,penyelenggara,kategori,jumlah_pst,jadwal) 
        VALUE ('$img','$lomba','$deskripsi','$vendor','$kategori','$jumlah','$jadwal')";

        $hasil = mysqli_query($conn, $query);

        if ($hasil) {
            header('location:lomba2.php');
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
