<?php
session_start();
?>
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
      #chart-container {
          width: 75%;
          height: auto;
      }
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
  <?php require_once('include/menu_admin.php') ?>

    <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Halo, <?= $_SESSION['nama_lengkap']?></h1>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">Admin></button>
    </div>
    <div class="row">
        <div id="chart-container">
        <h1 class="h2"> Data Banyaknya Pendaftar di Suatu Lomba</h1>
        <canvas id="graphCanvas"></canvas>
        </div>
    </div>
    <div class="row">
          <div class="card ml-4" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Jumlah Admin</h5>
                <div class="display-4">5</div>
                <a href="admin.php" class="btn btn-primary">Lihat</a>
              </div>
            </div>
            <div class="card ml-4" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Jumlah User</h5>
                <div class="display-4">10</div>
                <a href="user.php" class="btn btn-primary">Lihat</a>
              </div>
            </div>
            <div class="card ml-4" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Jumlah Vendor</h5>
                <div class="display-4">10</div>
                <a href="vendor.php" class="btn btn-primary">Lihat</a>
              </div>
            </div>
            </div>
            <div class="row mt-4">
          <div class="card ml-4" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Jumlah Lomba</h5>
                <div class="display-4">6</div>
                <a href="lomba.php" class="btn btn-primary">Lihat</a>
              </div>
            </div>
            </div>
            
      </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
      <script src="assets/dist/dashboard.js"></script></body>
      <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph() {
          $.post("chart_data.php", function(data) {
              console.log(data); // Log the data to see if it's received correctly

              var name = [];
              var total = [];

              // Process the JSON data
              for (var i = 0; i < data.length; i++) {
                  name.push(data[i].nama_lomba);
                  total.push(data[i].total_entries);
              }

              var chartdata = {
                  labels: name,
                  datasets: [{
                      label: 'Jumlah Pendaftar',
                      backgroundColor: '#49e2ff',
                      borderColor: '#46d5f1',
                      hoverBackgroundColor: '#CCCCCC',
                      hoverBorderColor: '#666666',
                      data: total
                  }]
              };

              // Get the canvas element where the chart will be rendered
              var graphTarget = $("#graphCanvas");

              // Ensure the canvas element exists
              if (graphTarget.length) {
                  var barGraph = new Chart(graphTarget, {
                      type: 'bar',
                      data: chartdata
                  });
              } else {
                  console.error("Graph canvas element not found.");
              }
          }, "json"); // Specify "json" as the dataType for automatic JSON parsing
      }
      </script>
</html>
