<?php
require_once '../conn.php';
if (isset($_POST['yakinsimpan'])) {
  $kdjurusanget = $_POST['kdjurusanget'];
  $limit1 = $_POST['limit'];
  $before = mysqli_query($conn,"DELETE FROM terterima WHERE kdjurusan='$kdjurusanget'");
  $query = mysqli_query($conn,"
  INSERT INTO `terterima` SELECT username,kdjurusan FROM pd_terterima WHERE kdjurusan='$kdjurusanget' ORDER BY nhun DESC LIMIT $limit1
  ");
  if ($query AND $before) {
    redirect("Berhasil Simpan Daftar Peserta Didik Terseleksi","../index2.php?to?to=dpd");
  }else {
    redirect("Gagal Simpan","../index2.php?to?to=dpd");
  }
}else {
  redirect("Kembali","../index2.php?to?to=dpd");
}
 ?>
