<?php
require_once '../conn.php';
$kdjurusan = $_POST['kdjurusan'];
if (empty($kdjurusan)) {
  header("Location: ../index2.php?to=soal");
}else {
  $delete = mysqli_query($conn,"DELETE FROM soal WHERE kdjurusan='$kdjurusan'");
  $dlete2 = mysqli_query($conn,"DELETE FROM jwb WHERE kdjurusan='$kdjurusan'");
  $dlete3 = mysqli_query($conn,"DELETE FROM nilai WHERE kdjurusan='$kdjurusan'");
  if ($delete AND $dlete2 AND $dlete3) {
    redirect("Berhasil Hapus","../index2.php?to=soal");
  }else {
    redirect("Gagal Hapus","../index2.php?to=soal");
  }
}
 ?>
