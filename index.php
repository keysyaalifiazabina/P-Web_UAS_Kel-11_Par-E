<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>SIMBA</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/style.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @font-face{
        font-family: 'Poppins';
        src : url('./assets/font/Poppins.ttf');
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
</head>
  <body>
    <form class="form-signin" method="POST" action="cek_login.php"> 
  <div class="text-center mb-4">
    <img class="mb-4" src="assets/img/simba.png" alt="" width="150" height="auto">
    <h1 class="h3 mb-3 font-weight-normal">SIMBA</h1>
    <h2 style="color: blue">Situs Pencari Lomba</h2>
    <p> Masukkan Username dan Password Anda! </p>
  </div>

  <div class="form-label-group">
    <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
    <label>Username</label>
  </div>
  
  
  <div class="form-label-group">
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <label>Password</label>
  </div>

  <div class="form-label-group">
    <select class="form-control" name="level" placeholder="Level">
        <option value="" disabled selected hidden>Pilih level...</option>
        <option value="Admin">Admin</option>
        <option value="User">User</option>
        <option value="Vendor">Vendor</option>
    </select>
</div>


  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me </label>
  </div>
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; SIMBA 2024-<?= date('Y')?></p>

</form>
</body>
</html>