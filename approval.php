<?php
session_start();
include_once("koneksi.php");

$id_dtr = $_GET['id_dtr'];
$approval = (!empty($_GET['approve']) && $_GET['approve'] == 'true') ? 1 : 0;

// SQL query to update approval status
$sql = "UPDATE tb_daftar
        SET approval = :approval
        WHERE id_dtr = :id_dtr";

$stmt = $pdo->prepare($sql); // prepare query

// Bind the parameters
$stmt->bindParam(':id_dtr', $id_dtr, PDO::PARAM_INT);
$stmt->bindParam(':approval', $approval, PDO::PARAM_STR);

$stmt->execute(); // execute query

// Check if the query was successful
if ($stmt->rowCount()) {
    if($_GET['approve'] == 'true'){
        echo "<script>alert('Pendaftaran diterima!'); 
        document.location.href='konfirmasi_pendaftaran.php'; </script>";
    }else{
        echo "<script>alert('Pendaftaran ditolak!'); 
        document.location.href='konfirmasi_pendaftaran.php'; </script>";
    }
} else {
    echo "<script>alert('Gagal!'); 
        document.location.href='konfirmasi_pendaftaran.php'; </script>";
}

