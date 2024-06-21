<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>HOMEPAGE ADMIN</title>

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

  <?php $id_lomba = isset($_GET['id']) ? $_GET['id'] : '';  ?>

  <div class="alert alert-success text-center" role="alert" > <h2>FORM DAFTAR LOMBA</h2> </div>
        <h1 class="ml-5">Daftar lomba</h1>
            <form method="post" action="prosesdaftarlomba.php" enctype="multipart/form-data"> <!-- TERDAPAT 2 METHOD POST, HARUSNYA GUNAKAN 1 SAJA -->
                

                <div class="form-group row d-none">
                <label for="nama_lengkap" class="col-sm-1 col-form-label">ID LOMBA</label>
                <div class="col-sm-3">
                <input type="hidden" name="id_lomba" value="<?= $id_lomba ?>" class="form-control" >
                </div>
                </div>

                <!-- <td> <a href="daftar.php?id=<?php echo $data['id_lomba'] ?>"class="btn btn-primary mb-1 mt-1">Daftar</a> -->

                <div class="form-group row">
                <label for="nama_lengkap" class="col-sm-1 col-form-label">Nama Lengkap</label>
                <div class="col-sm-3">
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                </div>
                </div>
                
                <div class="form-group row">
                <label for="email" class="col-sm-1 col-form-label">Email</label>
                <div class="col-sm-3">
                <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                </div>

                <div class="form-group row">
                <label for="kategori" class="col-sm-1 col-form-label">Kategori</label>
                <div class="col-sm-3">
                    <select class="form-control" name="kategori" placeholder="Kategori">
                    <option value="" disabled selected hidden>Pilih kategori...</option>
                        <option value="IT">IT</option>
                        <option value="Seni">Seni</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="Business Plan">Business Plan</option>
                        <option value="Sport">Sport</option>
                        <option value="E-Sport">E-Sport</option>
                    </select>
                </div>
                </div>

                <button type="submit" class="btn btn-primary mb-1 mt-1 ml-0 mr-0" value="upload">Daftar</button>
                <a href="home_user.php" class="btn btn-primary mb-1 mt-1 ml-0"><i class="fas fa-user-plus mr-0"></i>Kembali ke Dashboard</a>
            </form>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>
    </body>
</html> -->