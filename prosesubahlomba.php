<?php
include_once("koneksi.php");

if (isset($_FILES['img'])) {
    $img = $_FILES['img']['name'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $target_dir = 'assets/cover/'; // Adjust this to your storage folder location

    if (move_uploaded_file($file_tmp, $target_dir . $img)) {
        $lomba = $_POST['nama_lomba'];
        $deskripsi = $_POST['deskripsi'];
        $vendor = $_POST['penyelenggara'];
        $kategori = $_POST['kategori'];
        $jadwal = $_POST['jadwal'];
        $tempat = $_POST['tempat']; // Add a semicolon here

        // Update image data if the competition already has a previous image
        $query = "UPDATE tb_lomba SET img = '$img', deskripsi = '$deskripsi', penyelenggara = '$vendor', 
                  kategori = '$kategori', jadwal = '$jadwal', tempat = '$tempat' WHERE nama_lomba = '$lomba'";

        $hasil = mysqli_query($conn, $query);

        if ($hasil) {
            // Optionally delete the old image
            // unlink($target_dir . 'nama_gambar_lama.jpg');

            echo "<script>alert('Berhasil Mengubah Lomba!'); 
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
