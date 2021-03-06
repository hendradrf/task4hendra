<?php 
error_reporting(0);
require 'function.php';
if(isset($_POST['register'])){
  // fungsi registrasi, jika post > 0 berarti ada penambahan user baru
  if(registrasi($_POST)>0){
    echo "<script>
      alert('User baru berhasil ditambahkan! Silahkan login');
    </script>
    ";

  }
  else{
    echo mysqli_error($conn);
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTRASI | SISPAK VANAME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="assets/bg.png">

<div class="container">   <br> 
  <div class="navbar navbar-inverse">
   <?php  include 'menu.php'; ?>
 </div>
      <div style="min-height: 540px;">
      
<!--             <div style="padding-right: 30%; padding-left: 30%; padding-top: 5%;"> -->
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
              <br>
                  <div align="center"><img src="assets/user.png" height="150" width="150">
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
                    <div class="form-group" method="post">
                      <label for="password"><span class="fa fa-lock" style="color: #222222;"></span> Ulangi Password</label>
                      <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi password" required>
                    </div>
                      <button type="submit" name="register" class="btn btn-primary btn-block"<span></span> Registrasi</button>
                      <br>
                      <h5 style="text-align: center;">atau <a href="m_login.php">login</a> jika sudah memiliki akun
                      </h5>
              </form>

            </div>
          </div>
     <br>
    </div>
 
    <?php  include 'footer.php'; ?> 


</body>
</html>
