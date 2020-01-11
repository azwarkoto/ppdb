<?php
  require_once 'conn.php';
  $username = htmlentities(strip_tags(mysqli_real_escape_string($conn,$_POST['akun'])));
  $password = htmlentities(strip_tags(mysqli_real_escape_string($conn,$_POST['pass'])));
  $encrypt = md5($password);
  session_start();
  $cekakun = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM register WHERE username='$username' OR email='$username' AND password='$encrypt'"));
  if (!empty($cekakun['username'])) {
    //ada
    $_SESSION['username'] = $cekakun['username'];
    redirect("Berhasil","../main/");
  }else {
    //tidak ada
    redirect("Akun Tidak ditemukan", "../index.php");
  }

 ?>