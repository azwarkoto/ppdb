<?php
require_once '../conn.php';
$kdj = $_GET['kdj'];
$del = mysqli_query($conn,"DELETE FROM jadwal WHERE kdjadwal='$kdj'");
if ($del) {
  redirect("Berhasil Hapus Jadwal","../index2.php?to=jdw");
}else {
  redirect("Gagal Hapus Jadwal","../index2.php?to=jdw");
}
 ?>
