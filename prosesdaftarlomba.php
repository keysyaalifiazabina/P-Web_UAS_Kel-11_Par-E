<?php

// Koneksi ke database (gunakan file koneksi.php yang sudah dibuat sebelumnya)
include 'koneksi.php';

// Ambil data dari form pendaftaran
// $id_dtr = $_POST['id_dtr']; 
$data = array(
    'id_lomba' => (int) $_POST['id_lomba'],
    'nama_lengkap' => $_POST['nama_lengkap'],
    'email' => $_POST['email'],
    'kategori' => $_POST['kategori']
);

// Validasi input (contoh sederhana)
if (array_filter($data)) {
    
    try{
        $columns = implode(",", array_keys($data)); //extract kolom
        $placeholders = ":" . implode(", :", array_keys($data)); //buat placeholder untuk value
    
        // Query untuk menyimpan data peserta ke tabel peserta
        $query = "INSERT INTO tb_daftar ($columns) VALUES ($placeholders)";
        $stmt = $pdo->prepare($query); //prepare query nya
    
        foreach ($data as $key => &$val) { //perulangan untuk ambil array key di $data
            $stmt->bindParam(":$key", $val); //isi kolom dengan value di $data
        }
        // Eksekusi query
        $stmt->execute();

        $idDaftar = $pdo->lastInsertId();

        echo "<script>alert('Berhasil Mendaftar'); 
        document.location.href='berhasil.php?id_dtr=".$idDaftar."'; </script>";
    }catch(PDOexception $error){
        echo "<script>alert('Maaf Pendaftaran Gagal'); 
        document.location.href='home_user.php';</script>"; 
    }
} else {
    //perlu di handle misal gagal, id nya tetep pake yg td di input
    echo "<script>alert('Harap isi semua data'); 
    document.location.href='daftar.php?id=".$data['id_lomba']."';</script>";
}

// // Query untuk menyimpan data peserta ke tabel peserta
// $query = "INSERT INTO tb_daftar (id_lomba, nama_lengkap, email, kategori) VALUES ('$id_lomba','$nama', '$email', '$kategori_lomba')";

// // Eksekusi query
// if (mysqli_query($conn, $query)) {
//     echo "<script>alert('Berhasil Mendaftar'); 
//     document.location.href='lombasaya.php'; </script>";
// } else {
//     echo"<script> alert('Maaf Pendaftaran Gagal); 
//     document.location.href='home_user.php';</script>";
?>
