<?php
require_once '../conn.php';
if (isset($_POST['btntmbjur'])) {
  //DATA
  $namajurusan = $_POST['namajurusan'];
  $kuotajurusan = $_POST['kuotajurusan'];
  $newID = $_POST['kdjurusan'];

  //PROSES
  $qin = mysqli_query($conn,"INSERT INTO `jurusan` (`kdjurusan`, `namajurusan`, `kuotajurusan`) VALUES
  ('$newID', '$namajurusan', '$kuotajurusan')");

  //NOTIF
  if ($qin) {
    redirect("Berhasil Menginput Jurusan", "../index2.php?to=jrsn");
  }else {
    redirect("Gagal Menginput Jurusan", "../index2.php?to=jrsn");
  }
}else {
  redirect("Halaman Tidak ditemukan","../index2.php?to=jrsn");
}
 ?>
