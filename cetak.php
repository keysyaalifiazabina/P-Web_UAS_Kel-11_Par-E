<?php 
	include 'koneksi.php';
    
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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="assets/dist/css/newstyle.css">
	<script>
		window.print();
	</script>
</head>
<body>

<h2 style="text-align: center;">Bukti Pendaftaran</h2>
<table class="table-cetak" border="0" center>

    <tr>
        <div class="image-container">
        <img src="assets/cover/<?php echo $data['img'];?>" width="300" height="auto">
            </div> <br>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?php echo $data['nama_lengkap']; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $data['email']; ?></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>:</td>
			<td><?php echo $data['kategori']; ?></td>
		</tr>
        <tr>
			<td>Nama Lomba</td>
			<td>:</td>
			<td><?php echo $data['nama_lomba']; ?></td>
		</tr>
        <tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td><?php echo $data['deskripsi']; ?></td>
		</tr>
		<tr>
			<td>Penyelenggara</td>
			<td>:</td>
			<td><?php echo $data['penyelenggara']; ?></td>
		</tr>
        <tr>
			<td>Kategori</td>
			<td>:</td>
			<td><?php echo $data['kategori']; ?></td>
		</tr>
        <tr>
			<td>Peserta</td>
			<td>:</td>
			<td><?php echo $data['ktg_pst']; ?></td>
		</tr>
        <tr>
			<td>Jadwal</td>
			<td>:</td>
			<td><?php echo $data['jadwal']; ?></td>
		</tr>
        <tr>
			<td>Tempat</td>
			<td>:</td>
			<td><?php echo $data['tempat']; ?></td>
		</tr>
	</table>
    <a href="home_user.php" class="btn btn-primary mb-1 mt-1 ml-0"><i class="fas fa-user-plus mr-0"></i>Kembali ke Dashboard</a>
</body>
</html>