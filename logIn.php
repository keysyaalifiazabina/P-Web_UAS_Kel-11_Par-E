<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo "<body onload=Gagal()>";
      }
    }else{
      echo "<body>";
    }
?>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                <div class= "logo">
                        <img src= "img/simba.png" alt= "logo">
                    <div class="form-items">
                        <h1 style="color: white"><a href="index.php">SIMBA</a></h1>
                        <h7 style="color: blue">Situs Penyedia Lomba</h7>
                        <br><br>
                        <div class="page-links">
                            <a href="logIn.php" class="active">Login</a><br><a href="#sign up">Sign Up</a>
                        </div>

                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <label for="admin">Admin</label>
                            <input type="radio" id="admin" name="as" value="admin">
                            <label for="user">User</label>
                            <input type="radio" id="user" name="as" value="user">
                            <label for="owner">Owner</label>
                            <input type="radio" id="owner" name="as" value="owner">
                            <div class="form-button">
                                <button type="submit" name="tambah" value="Log In" class="ibtn">Log In</button>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
  functionGagal() {
    alert("Login Gagal, periksa apakah terdapat data yang salah !");
  }
</script>
</body>
</html>