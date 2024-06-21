<?php
	session_start();
	include_once("koneksi.php");
	$id_dtr = $_GET['id_dtr'];
	$sql = "SELECT tb_daftar.*, tb_lomba.* 
			FROM tb_daftar 
			INNER JOIN tb_lomba ON tb_daftar.id_lomba = tb_lomba.id_lomba 
			WHERE tb_daftar.id_dtr = :id_dtr";

	$stmt = $pdo->prepare($sql); // prepare query
	$stmt->bindParam(':id_dtr', $id_dtr, PDO::PARAM_INT); // bind the parameter (id_dtr)
	$stmt->execute(); // execute query

	$data = $stmt->fetchAll(PDO::FETCH_ASSOC); //get query result
	$data = reset($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
</head>
<body>
    <h1>Pendaftaran Berhasil</h1>
    <p>Kode Pendaftaran Anda adalah: <?php echo htmlspecialchars($id_dtr); ?></p>
	<p>Nama Lomba: <?= $data['nama_lomba']; ?></p>
    <a href="cetak.php?<?= 'id_dtr='.urlencode($id_dtr)?>" class="btn-cetak">Cetak Bukti Pendaftaran</a>
</body>
</html>
