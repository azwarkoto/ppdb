<?php
require_once '../conn.php';
$kda = $_GET['kda'];
$reset = mysqli_query($conn,"UPDATE adm SET pass=MD5('123') WHERE kdadmin='$kda'");
if ($reset) {
  redirect("Berhasil Reset","../index2.php?to=akun");
}else {
  redirect("Gagal Reset","../index2.php?to=akun");
}
 ?>
