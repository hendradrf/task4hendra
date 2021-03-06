<?php
//membuat koneksi ke database  

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'sispak-vaname';

// $konek_db dirubah menjadi $conn    
$conn = mysqli_connect($host, $user, $password, $database);
$gejala = array(
	'bintik_putih' => ['g001', 'g002', 'g003'],
	'bintik_hitam' => ['g004', 'g005', 'g006', 'g011'],
	'kotoran_putih' => ['g007', 'g008'],
	'insang_merah' => ['g001', 'g009'],
	'nekrosis' => ['g005', 'g006', 'g010', 'g011'],
	'udang_gripis' => ['g012', 'g013', 'g016'],
	'kepala_kuning' => ['g014', 'g015', 'g016'],
	'tsv' => ['g017', 'g018', 'g019'],
);
function registrasi($data)
{
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek username ada yg sudah pakai atau belum
	$result = mysqli_query($conn, "SELECT username FROM daftar_user WHERE username= '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>alert('username sudah terdaftar, pilih username lain');</script>";
		return false;
	}

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>alert('password tidak sesuai!');</script>";
		return false;
	}
	//enkripsi password, jangan pakai MD5
	$password = password_hash($password, PASSWORD_DEFAULT);
	//VARIABEL PASSWORD, ALGORITMA 
	//menambah ke database
	mysqli_query($conn, "INSERT INTO daftar_user VALUES(0,'$username','$password','1','')");
	echo "pass sama " . mysqli_affected_rows($conn);
	return mysqli_affected_rows($conn);
} //akhir function registrasi
