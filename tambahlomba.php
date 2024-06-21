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

  <div class="alert alert-success text-center" role="alert" > <h2>DATA LOMBA</h2> </div>
        <h1 class="ml-5">Tambah lomba</h1>
            <form method="post" action="prosestambahlomba.php" method="post" enctype="multipart/form-data">

                <div class="form-group row">
                <label for="img" class="col-sm-1 col-form-label">Cover</label>
                <div class="col-sm-3">
                <input type="file" name="img" class="form-control" placeholder="Cover">
                </div>
                </div>  
                <div class="form-group row">
                <label for="nama_lomba" class="col-sm-1 col-form-label">Nama Lomba</label>
                <div class="col-sm-3">
                <input type="text" name="nama_lomba" class="form-control" placeholder="Nama lomba">
                </div>
                </div>
                
                <div class="form-group row">
                <label for="deskripsi" class="col-sm-1 col-form-label">Deskripsi</label>
                <div class="col-sm-3">
                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
                </div>
                </div>

                <div class="form-group row">
                <label for="penyelenggara" class="col-sm-1 col-form-label">Penyelenggara</label>
                <div class="col-sm-3">
                    <select class="form-control" name="penyelenggara">
                    <option value="" disabled selected hidden>Pilih kategori...</option>
                        <option value="Hima Sifo">Hima Sifo</option>
                        <option value="Hima Tifa">Hima Tifa</option>
                        <option value="Hima Sada">Hima Sada</option>
                        <option value="Hima Bisdig">Hima Bisdig</option>
                        <option value="BEM Fasilkom">BEM Fasilkom</option>
                    </select>
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

                <div class="form-group row">
                <label for="ktg_pst" class="col-sm-1 col-form-label">Kategori Peserta</label>
                <div class="col-sm-3">
                    <select class="form-control" name="ktg_pst">
                    <option value="" disabled selected hidden>Pilih kategori...</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Umum">Umum</option>
                    </select>
                </div>
                </div>

                <div class="form-group row">
                <label for="jadwal" class="col-sm-1 col-form-label">Jadwal</label>
                <div class="col-sm-3">
                <input type="date" name="jadwal" class="form-control" placeholder="Jadwal">
                </div>
                </div>

                <div class="form-group row">
                <label for="tempat" class="col-sm-1 col-form-label">Tempat</label>
                <div class="col-sm-3">
                    <select class="form-control" name="tempat">
                    <option value="" disabled selected hidden>Pilih kategori...</option>
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                    </select>
                </div>
                </div>

                <button type="submit" class="btn btn-primary mb-1 mt-1 ml-0 mr-0" value="upload">Tambah</button>
                
                <a href="lomba2.php" class="btn btn-primary mb-1 mt-1 ml-0"><i class="fas fa-user-plus mr-0"></i>Kembali ke Dashboard</a>
            </form>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>
    </body>
</html> -->