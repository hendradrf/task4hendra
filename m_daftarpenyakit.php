<!-- USER BIASA -->
<?php
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>DAFTAR PENYAKIT | SISPAK VANAME</title>
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
      <div class="panel panel-success text-center">
          <h3> Daftar Penyakit Udang Vaname  </h3>
      </div>
          <div class="badan text-center " style="border-color: #d6e9c6;">
            <?php
            $no=0;
            $queri="SELECT * FROM daftar_penyakit";
            $hasil=mysqli_query($conn,$queri);
            ?>
            <table class="table table-striped table-hover table-bordered" width="100%">
              <thead>
                <th style="text-align:center; vertical-align:middle" width="3%" rowspan="2">NO</th>
                <th style="text-align:center; vertical-align:middle" width="15%" rowspan="2">KODE PENYAKIT</th>
                <th style="text-align:center; vertical-align:middle"  rowspan="2">NAMA PENYAKIT</th>
                <th style="text-align:center; vertical-align:middle" width="15%" rowspan="2">DETAIL</th>
              </thead>
              <tbody>
                <?php
                  while($data=mysqli_fetch_array($hasil)){
                    $no++;
                    echo'
                      <tr>
                      <td style="text-align:center;">
                        <strong> '.$no.'</strong></td>
                      <td><strong> '.$data['kode_penyakit'].'</strong></td>
                      <td><strong> '.$data['nama_penyakit'].'</strong></td>
                      <td> <a href="m_detailpenyakit.php?id='.$data[0].'">
                          <i class="fa fa-search" style="color: #42455a; font-size: 24px;"></i>
                           </a> 
                      </td>
                      </tr>
                    ';
                    }
               ?>
              </tbody>
            </table>

          </div>
      <br>
 </div>

    <?php  include 'footer.php'; ?> 
</body>
</html>
