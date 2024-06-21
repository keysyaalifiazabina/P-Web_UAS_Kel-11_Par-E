<?php 
    include_once("koneksi.php");
    
    // Query to fetch data with approval status NULL, 0 (not approved), or 1 (approved) for a specific user
    $sql = "SELECT tb_daftar.*, tb_lomba.* 
            FROM tb_daftar 
            INNER JOIN tb_lomba ON tb_daftar.id_lomba = tb_lomba.id_lomba 
            WHERE (tb_daftar.approval IS NULL OR tb_daftar.approval = 0 OR tb_daftar.approval = 1)
            AND tb_daftar.nama_lengkap = 'Keysya Alifia Zabina'";

    $stmt = $pdo->prepare($sql); // prepare the query
    $stmt->execute(); // execute the query

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>HOMEPAGE Vendor</title>

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
                <h1 class="h2">Lomba Saya</h1>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">User</button>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Nama Lomba</th>
                            <th>Penyelenggara</th>
                            <th>Kategori</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php foreach ($data as $key => $value): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo isset($value['nama_lengkap']) ? $value['nama_lengkap'] : ''; ?></td>
                                <td><?php echo isset($value['email']) ? $value['email'] : ''; ?></td>
                                <td><?php echo isset($value['nama_lomba']) ? $value['nama_lomba'] : ''; ?></td>
                                <td><?php echo isset($value['penyelenggara']) ? $value['penyelenggara'] : ''; ?></td>
                                <td><?php echo isset($value['kategori']) ? $value['kategori'] : ''; ?></td>
                                <td>
                                    <?php 
                                        if ($value['approval'] === null) {
                                            echo "Pending";
                                        } else if ($value['approval'] == 1) {
                                            echo "Approved";
                                        } else {
                                            echo "Not Approved";
                                        }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="dashboard.js"></script>
</body>
</html>
