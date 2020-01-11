<?php
require_once '../conn.php';
if (!empty($_GET['usr'])) {
  $usr = $_GET['usr'];
  $jwb = mysqli_query($conn,"DELETE FROM jwb WHERE username='$usr'");
  $nilai = mysqli_query($conn,"DELETE FROM nilai WHERE username='$usr'");
  $reset = mysqli_query($conn,"UPDATE statuscpd SET statuscpd.status=1 WHERE statuscpd.username='$usr'");
  if ($reset AND $jwb AND $nilai) {
    redirect("Berhasil Reset Status","../index2.php?to=dcpd");
  }else {
    redirect("Gagal Reset","../index2.php?to=dcpd");
  }
}else {
  redirect("Kembali","../index2.php?to=dcpd");
}
 ?>
