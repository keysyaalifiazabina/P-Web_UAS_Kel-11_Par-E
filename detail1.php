<?php 
    include_once ("koneksi.php");
    $query= "SELECT * FROM tb_lomba";
    $hasil= mysqli_query ($conn, $query);
?>
<div class="card-body">
   <table class="table table-bordered table-striped table-hover">
    <tr>
        <th>No</th>
        <th>Nama Lomba</th>
        <th>Deskripsi</th>
        <th>Penyelenggara</th>
        <th>Kategori</th>
        <th>Jumlah Peserta</th>
        <th>Jadwal</th>
        <th>Aksi</th>
    </tr>
    <tbody>
        <?php $nomor=1; while ($data=mysqli_fetch_array ($hasil)){ ?> 
            <tr>
                <th scope="row"> <?php echo $nomor; ?> </th> 
                <td> <?php echo $data['nama_lomba']; ?> </td>
                <td> <?php echo $data['deskripsi']; ?> </td>
                <td> <?php echo $data['penyelenggara']; ?> </td>
                <td> <?php echo $data['kategori']; ?> </td>
                <td> <?php echo $data['jumlah_pst']; ?> </td>
                <td> <?php echo $data['jadwal']; ?> </td>
             <td> <a href=#>Edit</a>
                <a href=#>Delete</a> 
                </td>
            </tr>
        <?php $nomor++; } ?>
    </tbody>
    <table>