<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: m_login.php");
  exit;
}
require 'function.php';

if (!empty($_POST["kode_gejala"])) {
  foreach ($_POST["answers"] as $key => $answer) {
    $query = "SELECT id from hasil_konsul WHERE id_user='$_SESSION[id_user]' AND kode_gejala='$_POST[kode_gejala]' AND id_pertanyaan='${key}'";
    $data = mysqli_query($conn, $query);
    if ($data->num_rows > 0) {
      $data  = mysqli_fetch_array($data);
      $query = "UPDATE hasil_konsul SET jawaban='${answer}' WHERE id='$data[id]'";
      mysqli_query($conn, $query);
    } else {
      $query = "INSERT INTO hasil_konsul (id_user, kode_gejala, id_pertanyaan, jawaban) VALUES ('$_SESSION[id_user]', '$_POST[kode_gejala]', '${key}', '${answer}')";
      mysqli_query($conn, $query);
    }
  }

?>
<?php
  header("Location: ./m_konsultasi4.php?penyakit=" . $_POST["kode_gejala"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>KONSULTASI | SISPAK VANAME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/app.css">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body background="assets/bg.png">

  <div class="container"></br>
    <div class="navbar navbar-inverse">
      <?php include 'menu2.php'; ?>
    </div>
    <div class="panel panel-success text-center">
      <h3> Konsultasi </h3>
    </div>
    <div class="badan text-center">
      <div class="card border-0">
        <div class="card-body">
          <?php
          $gj = $_POST['choose1'];
          $kondisi = "";
          foreach ($gejala[$gj] as $item) {
            $kondisi .= " kode_gejala='$item' OR ";
          }
          $kondisi = substr($kondisi, 0, strlen($kondisi) - 4);
          $hasil = mysqli_query($conn, "SELECT * FROM daftar_pertanyaan WHERE $kondisi");
          ?>
          <form action="" method="POST" id="form">
            <div class="card p-3 shadow-sm border-0 mb-2">
              <input type="hidden" name="kode_gejala" value="<?= $gj ?>">
              <?php
              $no = 0;
              $jumlahPertanyaan = $hasil->num_rows;
              while ($data = mysqli_fetch_array($hasil)) {
                $questions[] = $data[0];
              ?>
                <div class="tab pertanyaan" id="pertanyaan-<?= $data[0] ?>">
                  <div class="row">
                    <div class="col-md mb-2 mb-md-0">
                      <h4><?= ($no + 1) . '. Apakah ' . $data[1] . '?' ?></h4>
                    </div>

                    <br />
                    <div class="col-md-auto">
                      <div class="custom-control-button custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question-1-<?= $data[0] ?>" name="answers[<?= $data[0] ?>]" value="1" class="custom-control-input" required>
                        <label class="custom-control-label" for="question-1-<?= $data[0] ?>" style="width: 100px;">Ya</label>
                      </div>
                      <div class="custom-control-button tidak-class custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question-0-<?= $data[0] ?>" name="answers[<?= $data[0] ?>]" value="0" class="custom-control-input" required>
                        <label class="custom-control-label" for="question-0-<?= $data[0] ?>" style="width: 100px;">Tidak</label>
                      </div>
                    </div>

                    <br />
                    <div class="row text-center">
                      <?php
                      if ($no === 0) {
                        $firstQuestion = $data[0];
                      } else {
                      ?>
                        <button class="btn button btn-danger" type="button" style="width: 200px;" onclick="back(<?= $data['id'] ?>)">Kembali</button>
                      <?php
                      }
                      ?>
                      <button class="btn button btn-primary" type="button" style="width: 200px;" onclick="next(<?= $data['id'] ?>)"><?= ($no + 1) === $jumlahPertanyaan ? "Simpan" : "Lanjut" ?></button>
                    </div>
                  </div>
                </div>
              <?php $no++;
              } ?>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>

    <script>
      $(".pertanyaan").hide();
      $("#pertanyaan-<?= $firstQuestion ?>").show();

      const questions = ['<?= implode("', '", $questions); ?>'];

      function next(id_current) {
        const questionIndex = questions.indexOf(`${id_current}`);
        const id_next = questions[questionIndex + 1];

        // console.log("questionIndex", questionIndex);
        // console.log("id_next", id_next);

        if ((questionIndex + 1) === questions.length) {
          $("#form").submit();
        } else {
          $(`#pertanyaan-${id_current}`).hide("slow");
          $(`#pertanyaan-${id_next}`).fadeIn("fast");
        }
      }

      function back(id_current) {
        const questionIndex = questions.indexOf(`${id_current}`);
        const id_back = questions[questionIndex - 1];
        $(`#pertanyaan-${id_current}`).hide("fast");
        $(`#pertanyaan-${id_back}`).fadeIn("slow");
      }
    </script>
</body>

</html>