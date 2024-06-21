<?php
session_start();
include_once("koneksi.php");

$sql = "SELECT tb_lomba.nama_lomba, COUNT(tb_daftar.id_dtr) AS total_entries
        FROM tb_daftar 
        INNER JOIN tb_lomba ON tb_daftar.id_lomba = tb_lomba.id_lomba 
        GROUP BY tb_lomba.nama_lomba";

$stmt = $pdo->prepare($sql); // prepare query
$stmt->execute(); // execute query

$data = $stmt->fetchAll(PDO::FETCH_ASSOC); //get query result

echo json_encode($data);
exit;


