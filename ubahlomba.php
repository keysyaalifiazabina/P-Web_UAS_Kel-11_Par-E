<?php 
    include_once("koneksi.php");
    $id=$_GET['id'];
    $query="SELECT * FROM tb_lomba WHERE id_lomba=" . $id;
    $hasil=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Lomba</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, 
        initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">        
        <title>Update Lomba</title>
    </head>
    <body>
    <div class="alert alert-success text-center" role="alert" > <h2>DETAIL LOMBA</h2> </div>
        <h1 class="ml-5">Update Detail</h1>
        <form action="prosesubahlomba.php" method="post" enctype="multipart/form-data">
        <?php while ($data=mysqli_fetch_array($hasil)) { ?>

            <input type="hidden" name="id" value="<?php echo $data['id_lomba']?>">

            <div class="form-group row">
            <label for="img" class="col-sm-1 col-form-label">Cover</label>
            <div class="col-sm-3">
            <input type="file" name="img" class="form-control" value="<?php echo $data['img'] ?>">
            </div>
            </div>

            <div class="form-group row">
            <label for="nama_lomba" class="col-sm-1 col-form-label">Nama Lomba</label>
            <div class="col-sm-3">
            <input type="text" name="nama_lomba" class="form-control" value="<?php echo $data['nama_lomba'] ?>" >
            </div>
            </div>

            <div class="form-group row">
            <label for="deskripsi" class="col-sm-1 col-form-label">Deskripsi</label>
            <div class="col-sm-3">
            <input type="text" name="deskripsi" class="form-control" value="<?php echo $data['deskripsi'] ?>" >
            </div>
            </div>

            <div class="form-group row">
            <label for="penyelenggara" class="col-sm-1 col-form-label">Penyelenggara</label>
            <div class="col-sm-3">
            <input type="text" name="penyelenggara" class="form-control" value="<?php echo $data['penyelenggara'] ?>" >
            </div>
            </div>
            
            <div class="form-group row">
            <label for="kategori" class="col-sm-1 col-form-label">Kategori</label>
            <div class="col-sm-3">
            <input type="text" name="kategori" class="form-control" value="<?php echo $data['kategori'] ?>">
            </div>
            </div>

            <div class="form-group row">
            <label for="jumlah_pst" class="col-sm-1 col-form-label">Jumlah Peserta</label>
            <div class="col-sm-3">
            <input type="number" name="jumlah_pst" class="form-control" value="<?php echo $data['jumlah_pst'] ?>">
            </div>
            </div>

            <div class="form-group row">
            <label for="jadwal" class="col-sm-1 col-form-label">Jadwal</label>
            <div class="col-sm-3">
            <input type="date" name="jadwal" class="form-control" value="<?php echo $data['jadwal'] ?>">
            </div>
            </div>

            <button type="submit" class="btn btn-primary mb-1 mt-1 ml-0 mr-0" value="Upload" >Update</button>
            <a href="lomba2.php" class="btn btn-primary mb-1 mt-1 ml-0"><i class="fas fa-user-plus mr-0"></i>Kembali</a>
        </form>
        <?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/dist/js/bootstrap.min.js"> integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>