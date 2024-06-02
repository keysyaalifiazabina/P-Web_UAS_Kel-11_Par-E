<?php
include_once("koneksi.php");

if (isset($_FILES['img'])) {
    $img = $_FILES['img']['name'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $target_dir = 'assets/cover/'; // Sesuaikan dengan lokasi folder penyimpanan

    if (move_uploaded_file($file_tmp, $target_dir . $img)) {
        $lomba = $_POST['nama_lomba'];
        $deskripsi = $_POST['deskripsi'];
        $vendor = $_POST['penyelenggara'];
        $kategori = $_POST['kategori'];
        $jumlah = $_POST['jumlah_pst'];
        $jadwal = $_POST['jadwal'];

        // Perbarui data gambar jika lomba sudah memiliki gambar sebelumnya
        $query = "UPDATE tb_lomba SET img = '$img', deskripsi = '$deskripsi', penyelenggara = '$vendor', 
                  kategori = '$kategori', jumlah_pst = '$jumlah', jadwal = '$jadwal' WHERE nama_lomba = '$lomba'";

        $hasil = mysqli_query($conn, $query);

        if ($hasil) {
            // Hapus gambar lama (opsional)
            // unlink($target_dir . 'nama_gambar_lama.jpg');

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
