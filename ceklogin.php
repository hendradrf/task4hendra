<?php
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
      header("Location: m_index2.php");
      exit;
    }
  }
}

?>