<?php
require_once '../conn.php';
$kda = $_GET['kda'];
$reset = mysqli_query($conn,"DELETE FROM adm WHERE kdadmin='$kda'");
if ($reset) {
  redirect("Berhasil Hapus","../index2.php?to=akun");
}else {
  redirect("Gagal Hapus","../index2.php?to=akun");
}
 ?>
