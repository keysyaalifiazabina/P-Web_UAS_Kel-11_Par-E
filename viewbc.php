<?php 
    include_once ("koneksi.php");
    $query= "SELECT * FROM tb_lomba where kategori='Business Plan'";
    $hasil= mysqli_query ($conn, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Kategori Lomba</title>

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">SIMBA</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
  <?php require_once('include/menu_user.php') ?>

    <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategori Business Plan</h1>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">User</button>
    </div>
    <div class="card-body">
    <a href="home_user.php" class="btn btn-primary mb-1 mt-1 ml-0"><i class="fas fa-user-plus mr-0"></i>Kembali ke Dashboard</a>
    <table class="table table-bordered table-striped table-hover">
    <tr>
        <th>No</th>
        <th>Cover</th>
        <th>Nama Lomba</th>
        <th>Deskripsi</th>
        <th>Penyelenggara</th>
        <th>Kategori</th>
        <th>Kategori Peserta</th>
        <th>Jadwal</th>
        <th>Tempat</th>
        <th>Aksi</th>
    </tr>
    <tbody>
        <?php $nomor=1; while ($data=mysqli_fetch_array ($hasil)){ ?> 
            <tr>
                <th scope="row"> <?php echo $nomor; ?> </th>
                <td> <img src="assets/cover/<?php echo $data['img'];?> " width="100" height="auto"> </td>
                <td> <?php echo $data['nama_lomba']; ?> </td>
                <td> <?php echo $data['deskripsi']; ?> </td>
                <td> <?php echo $data['penyelenggara']; ?> </td>
                <td> <?php echo $data['kategori']; ?> </td>
                <td> <?php echo $data['ktg_pst']; ?> </td>
                <td> <?php echo $data['jadwal']; ?> </td>
                <td> <?php echo $data['tempat']; ?> </td>
                <td> <a href="daftar.php?id=<?php echo $data['id_lomba'] ?>"class="btn btn-primary mb-1 mt-1">Daftar</a>
                </td>
            </tr>
        <?php $nomor++; } ?>
    </tbody>
    <t/table>
  </div>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
