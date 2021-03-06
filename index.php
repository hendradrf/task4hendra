<!-- HALAMAN UTAMA -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BERANDA | SISPAK VANAME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="assets/bg.png">

<div class="container">    
      <br>
      <div class="navbar navbar-inverse">
       <?php  include 'menu.php'; ?>
      </div>  
          <div style="min-height: 540px;"> <!-- badan -->
            <div class="col-sm-1"></div>
            <div class="col-sm-5" style="font-family: sans-serif; padding-top: 30px;">
              <h1>
                <strong>SP Diagnosis Penyakit Udang Vanamei <br>dengan Metode Certainty Factor (CF)
                </strong>
               </h1>
               <br>
               <h3> Tema : Edukasi (untuk penambak udang)</h3>
               Aplikasi ini adalah aplikasi sistem pakar untuk mendiagnosis penyakit pada udang jenis Vaname. <br><br>
             <br><br>
               <div class="play-btn">
                  <div class="play-btn-inner">
                    <a href="m_login.php">
                      <i class="fa fa-sign-in" style="color: #42455a; font-size: 27px;"></i>
                    </a>
                  </div>
                  <small><b><a style="text-decoration: none; color: #42455a;" href="m_login.php">Masuk</a></b></small>

              </div>             
            </div>
            <div class="col-sm-5">
              <div class="app-picture">
                <img src="assets/background.png">
              </div>
              <div  style="text-align: center; margin-left: 90px;" class="hidden">
                <br>
                <strong>
                <i class="fa fa-share-alt" style="font-size:20px; color: #42455a;;"></i>
                 Share with : </strong> <br> <br>
                <i class="fa fa-facebook-square" style="font-size:20px;color:#42455a"></i>&nbsp;
                <i class="fa fa-linkedin-square" style="font-size:20px;color:#42455a"></i>&nbsp;
                <i class="fa fa-google-plus-official" style="font-size:20px;color:#42455a"></i>&nbsp;
                <i class="fa fa-twitter-square" style="font-size:20px;color:#42455a"></i>&nbsp;
                <i class="fa fa-instagram" style="font-size:20px;color:#42455a"></i>&nbsp;
                


              </div>

            </div>
            
          </div> <!-- badan -->
      <br>

     </div> <!-- container -->
<div>
  <?php  include 'footer.php'; ?> 
</div>
    

</body>
</html>
