<?php
require_once '../conn.php';
if (!empty($_GET['usr'])) {
  $usr = $_GET['usr'];
  $reset = mysqli_query($conn,"UPDATE register SET password=MD5('123') WHERE username='$usr'");
  if ($reset) {
    redirect("Berhasil Reset Password","../index2.php?to=dcpd");
  }else {
    redirect("Gagal Reset","../index2.php?to=dcpd");
  }
}else {
  redirect("Kembali","../index2.php?to=dcpd");
}
 ?>
