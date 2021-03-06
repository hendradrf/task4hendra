<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: m_login.php");
  exit;
}
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>KONSULTASI | SISPAK VANAME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body background="assets/bg.png">

  <div class="container"> <br>
    <div class="navbar navbar-inverse">
      <?php include 'menu2.php'; ?>
    </div>
    <div class="panel panel-success text-center">
      <h3> Konsultasi </h3>
    </div>
    <div class="badan">
      <h4 align="center" >Pilih kemungkinan penyakit yang mungkin terjadi pada udang Vanamei anda : </h4><br>
      <div>
        <div class="col-sm-5"></div>
        <div class="col-sm-3">
          <form method="post" action="m_konsultasi3.php">
            <input type="radio" name="choose1" value="bintik_putih" required> Bintik Putih <br>
            <!-- maka muncul pertanyaan g001,g002,g003 -->

            <input type="radio" name="choose1" value="bintik_hitam"> Bintik Hitam <br>
            <!-- muncul pertanyaan g004, g005, g006, g010 -->

            <input type="radio" name="choose1" value="kotoran_putih"> Kotoran Putih<br>
            <!-- muncul pertanyaan g07, g08 -->

            <input type="radio" name="choose1" value="insang_merah"> Insang Merah <br>
            <!-- muncul pertanyaan g001, g009 -->

            <input type="radio" name="choose1" value="nekrosis"> Nekrosis <br>
            <!-- muncul pertanyaan g006, g010, g011 -->

            <input type="radio" name="choose1" value="udang_gripis"> Udang Gripis <br>
            <!-- muncul pertanyaan g012, g013, g016 -->

            <input type="radio" name="choose1" value="kepala_kuning"> Kepala Kuning <br>
            <!-- muncul pertanyaan g014, 015, g016 -->

            <input type="radio" name="choose1" value="tsv"> Taura Syndrome Virus <br> <br>
            <!-- muncul pertanyaan g017, g018 -->

            <button type="submit" class="btn btn-primary" style="width: 200px"> Mulai </button>
          </form>
          </div>
      </div>
    </div>
    <br>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>