<?php
require_once '../conn.php';
if (isset($_POST['btnaddadm'])) {
  $nmadin = $_POST['nmadin'];
  $akun = $_POST['akun'];
  $pass = $_POST['pass'];
  $inisial = str_shuffle($akun);
  $inisial2 = substr($inisial,0,3);
  $inisial3 = strtoupper($inisial2);
  $in = mysqli_query($conn,"INSERT INTO `adm` (`kdadmin`, `inisial`, `akun`, `pass`, `nmadmin`)
  VALUES (NULL, '$inisial3', '$akun', MD5('$pass'), '$nmadin')");
  if ($in) {
    redirect("Berhasil Menambahkan Admin","../index2.php?to=akun");
  }else {
    redirect("Gagal Menambahkan Admin","../index2.php?to=akun");
  }
}else {
  redirect("Kembali","../index2.php?to=akun");
}
 ?>
