<?php
require_once '../conn.php';
if (isset($_POST['btntmnjdw'])) {
  $kdjrsn = $_POST['kdjrsn'];
  $date = $_POST['date'];
   $proses = mysqli_query($conn,"INSERT INTO `jadwal` (`kdjadwal`, `kdjurusan`, `jadwal`) VALUES (NULL, '$kdjrsn', '$date')");
   if ($proses) {
     redirect("Berhasil Menambahkan Jadwal $kdjrsn","../index2.php?to=jdw");
   }else {
     redirect("Gagal Menambahkan Jadwal","../index2.php?to=jdw");
   }
}else {
  redirect("Error 404","../index2.php?to=jdw");
}
 ?>
