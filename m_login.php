<?php 
error_reporting(0);
session_start();
if(isset($_SESSION["login"])){
  header("Location: m_index2.php");
  exit;
}
require 'function.php';
if(isset($_POST['login'])){
  
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM daftar_user WHERE username = '$username'");
  //cek username, apakah terdapat 1 username yg sama dg inputan atau tidak
  if(mysqli_num_rows($result) === 1){
    //cek passwordnya
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])){
      //set user session
      $_SESSION["login"] = true;
      $_SESSION["id_user"] = $row["id"];
      if ($row["level"] == 1) {
        header("Location: m_index2.php");  
      } else {
        header("Location: pakar");
      }
      exit;
    }
  }
  $error = true;
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN | SISPAK SKRIPSI</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="assets/bg.png">

<div class="container">   <br> 
  <div class="navbar navbar-inverse">
   <?php  include 'menu.php'; ?>
 </div>
<!--       <div class="panel panel-success text-center">
          <h3> Silahkan Login </h3>
      </div> -->
          <div style="min-height: 540px;"> <!-- badan -->
            <!-- <div style="padding-right: 30%; padding-left: 30%; padding-top: 7%;">

 -->        <div class="col-sm-4"></div>
                <div class="col-sm-4">
                  <br>
                  <div align="center"><img src="assets/user.png" height="200" width="200">
                  </div>
                  <br> <br>
                <form role="form" method="post" action="">
                    <div class="form-group" method="post">
                      <label for="username"><span class="fas fa-user" style="color: #222222;"></span> Username</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    </div>

                    <div class="form-group" method="post">
                      <label for="password"><span class="fa fa-lock" style="color: #222222;"></span> Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                
              <?php if (isset($error)): ?>
                <p style="font-style: italic; color: red;">Username atau password salah</p>
              <?php endif;?>
                      <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                      <br>
                      <h5 style="text-align: center;">
                      Silahkan 
                      <a href="m_registrasi.php">registrasi</a>  jika belum memiliki akun
                      </h5>
              </form>

            </div>
          </div>
     <br>
    </div>
 
    <?php  include 'footer.php'; ?> 

</body>
</html>
