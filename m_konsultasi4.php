<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: m_login.php");
    exit;
}
require 'function.php';
?>

<!DOCTYPE html>
<title>DETAIL PENYAKIT | PAKAR VANAME</title>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body background="assets/bg.png">
    <div class="container"><br>
        <div class="navbar navbar-inverse">
            <?php include 'menu2.php'; ?>
        </div>
        <div class="panel panel-success text-center">
            <h3>Hasil Perhitungan</h3>
        </div>
        <div class="badan" style="text-align: center;">
            <table class="table table-striped table-hover table-bordered" width="100%">
                <thead>
                    <th class="text-center">#</th>
                    <th class="text-center">Kode Pertanyaan</th>
                    <th class="text-center">Jawaban</th>
                    <th class="text-center">Nilai MB</th>
                    <th class="text-center">Nilai MD</th>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT hasil_konsul.*, daftar_gejala.*, daftar_pertanyaan.pertanyaan FROM hasil_konsul INNER JOIN daftar_pertanyaan ON hasil_konsul.id_pertanyaan=daftar_pertanyaan.id INNER JOIN daftar_gejala ON daftar_pertanyaan.kode_gejala=daftar_gejala.kode_gejala WHERE id_user='$_SESSION[id_user]' AND hasil_konsul.kode_gejala='$_GET[penyakit]' ORDER BY daftar_gejala.kode_gejala ASC";
                    $execute = mysqli_query($conn, $query);

                    $iteration = 1;
                    $data = [];
                    $data_true = [];
                    $data_false = [];

                    while ($value = mysqli_fetch_array($execute)) {
                        if ($value["jawaban"] == 1) {
                            $data_true[] = [
                                "kode" => $value["kode_gejala"],
                                "gejala" => ucfirst($value["pertanyaan"]),
                                "mb" => $value["mb"],
                                "md" => $value["md"]
                            ];
                        } else {
                            $data_false[] = [
                                "kode" => $value["kode_gejala"],
                                "gejala" => ucfirst($value["pertanyaan"]),
                                "mb" => $value["mb"],
                                "md" => $value["md"]
                            ];
                        }
                    ?>
                        <tr>
                            <td><?= $iteration ?></td>
                            <td><?= $value["kode_gejala"] ?></td>
                            <td><?= $value["jawaban"] ? "Ya" : "Tidak" ?></td>
                            <td><?= $value["jawaban"] ? $value["mb"] : 0 ?></td>
                            <td><?= $value["jawaban"] ? $value["md"] : 0 ?></td>
                        </tr>
                    <?php
                        $data[$value["kode_gejala"]] = [
                            "mb" => $value["jawaban"] ? $value["mb"] : 0,
                            "md" => $value["jawaban"] ? $value["md"] : 0
                        ];
                        $iteration++;
                    }
                    ?>
                </tbody>
            </table>

            <div class="row">
                <div class="col-sm-6">
                    <table class="table table-striped table-hover table-bordered" width="100%">
                        <thead>
                            <th class="text-center">Variabel</th>
                            <th class="text-center">Nilai</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>MB0</td>
                                <td>0.000</td>
                            </tr>
                            <?php
                            $iteration = 1;
                            foreach ($data as $key => $value) {
                                $hasil = (@$temp_mb) + ($value["mb"] * (1 - (@$temp_mb)));
                            ?>
                                <tr>
                                    <td>MB<?= $iteration ?></td>
                                    <td><?= number_format($hasil, 3) ?></td>
                                </tr>
                            <?php
                                $temp_mb = $hasil;
                                $iteration++;
                            }
                            $valueMB = $temp_mb;
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>MB</td>
                                <td><?= number_format($temp_mb, 3) ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="table table-striped table-hover table-bordered" width="100%">
                        <thead>
                            <th class="text-center">Variabel</th>
                            <th class="text-center">Nilai</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>MD0</td>
                                <td>0.000</td>
                            </tr>
                            <?php
                            $iteration = 1;
                            foreach ($data as $key => $value) {
                                $hasil = (@$temp_md) + ($value["md"] * (1 - ($value["md"])));
                            ?>
                                <tr>
                                    <td>MD<?= $iteration ?></td>
                                    <td><?= number_format($hasil, 3) ?></td>
                                </tr>
                            <?php
                                $temp_md = $hasil;
                                $iteration++;
                            }
                            $valueMD = $temp_md;
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>MD</td>
                                <td><?= number_format($temp_md, 3) ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <table class="table table-striped table-hover table-bordered" width="100%">
                <tbody>
                    <tr>
                        <th>Certainty Factor</th>
                        <td>Nilai MB - Nilai MD</td>
                    </tr>
                    <tr>
                        <th>CF</th>
                        <td><?= $cf = number_format($valueMB - $valueMD, 2) ?></td>
                    </tr>
                    <tr>
                        <th>Persentase</th>
                        <td><?= $cf * 100 ?>%</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="panel panel-success text-center">
            <h3>Hasil Konsultasi</h3>
        </div>
        <div class="badan" style="text-align: center;">
            <?php
            $penyakit = ucfirst($_GET["penyakit"] === "tsv" ? "taura syndrome virus" : str_replace("_", " ", $_GET["penyakit"]));
            $query = "SELECT * FROM daftar_penyakit WHERE nama_penyakit='" . ucwords($penyakit) . "'";
            $penyakit = mysqli_fetch_array(mysqli_query($conn, $query));
            ?>
            <table class="table table-striped table-hover table-bordered text-left" width="100%">
                <tbody>
                    <tr>
                        <th style="width: 125px">Penyakit</th>
                        <td><b><?= $penyakit["nama_penyakit"] ?></b></td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td><?= $penyakit["deskripsi"] ?></td>
                    </tr>
                    <tr>
                        <th>Gejala (Iya)</th>
                        <td>
                            <?php
                            if (count($data_true) > 0) {
                                foreach ($data_true as $key => $value) {
                                    if ($key !== 0) {
                                        echo "</br>";
                                    }
                                    // echo ($key+1).". ".$value["gejala"];
                                    echo $value["kode"] . " <b>&rightarrow;</b> " . $value["gejala"];
                                }
                            } else {
                                echo "Tidak Ada";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Gejala (Tidak)</th>
                        <td>
                            <?php
                            if (count($data_false) > 0) {
                                foreach ($data_false as $key => $value) {
                                    if ($key !== 0) {
                                        echo "</br>";
                                    }
                                    // echo ($key+1).". ".$value["gejala"];
                                    echo $value["kode"] . " <b>&rightarrow;</b> " . $value["gejala"];
                                }
                            } else {
                                echo "Tidak Ada";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Kemungkinan Terjangkit Penyakit</th>
                        <td>
                            <b><?= number_format($valueMB - $valueMD, 2) * 100 ?>%</b>
                        </td>
                    </tr>
                    <tr>
                        <th>Solusi</th>
                        <td>
                            <?= $cf ? $penyakit["solusi"] : "Tidak ada" ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div hidden>
                <h4>Kemungkinan penyakit <b><?= $_GET["penyakit"] === "tsv" ? "taura syndrome virus" : str_replace("_", " ", $_GET["penyakit"]) ?></b> yang terjadi pada udang Vanamei sekitar</h4>
                <h1>
                    <b><?= number_format($valueMB - $valueMD, 2) * 100 ?>%</b>
                </h1>

                <br />
            </div>

            <h5>
                <a href=" ./m_konsultasi2.php" class="btn btn-primary"">
                    <i class=" fa fa-arrow-left" aria-hidden="true"></i>
                    Kembali Konsultasi
                </a>
            </h5>
        </div>

        <!--  footer -->
        <br>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>