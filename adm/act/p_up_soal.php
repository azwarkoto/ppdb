<?php
require_once '../conn.php';
require_once 'excel_reader2.php';
if (isset($_POST['btnupfile'])) {
  // upload file xls
  $target = basename($_FILES['filesoal']['name']) ;
  move_uploaded_file($_FILES['filesoal']['tmp_name'], $target);

  // beri permisi agar file xls dapat di baca
  chmod($_FILES['filesoal']['name'],0777);

  // mengambil isi file xls
  $data = new Spreadsheet_Excel_Reader($_FILES['filesoal']['name'],false);
  // menghitung jumlah baris data yang ada
  $jumlah_baris = $data->rowcount($sheet_index=0);

  // jumlah default data yang berhasil di import
  $berhasil = 0;
  for ($i=2; $i<=$jumlah_baris; $i++){

  	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
  	$kdjurusan     = $data->val($i, 1);
  	$soal   = $data->val($i, 2);
  	$opsi_a  = $data->val($i, 3);
    $opsi_b  = $data->val($i, 4);
    $opsi_c  = $data->val($i, 5);
    $opsi_d  = $data->val($i, 6);
    $opsi_e  = $data->val($i, 7);
    $kunci_jwb  = $data->val($i, 8);

  	if(!empty($kdjurusan) AND !empty($soal) AND !empty($opsi_a) AND !empty($opsi_b) AND !empty($opsi_c)
    AND !empty($opsi_d) AND !empty($opsi_e) AND !empty($kunci_jwb)){
  		// input data ke database (table data_pegawai)
  		mysqli_query($conn,"INSERT INTO `soal` (`kdsoal`, `kdjurusan`, `soal`, `a`, `b`, `c`, `d`, `e`, `kunci`)
      VALUES (NULL, '$kdjurusan', '$soal', '$opsi_a', '$opsi_b', '$opsi_c', '$opsi_d', '$opsi_e', '$kunci_jwb')");
  		$berhasil++;
  	}else {
      die("Terjadi Permasalahan");
    }

  }

  // hapus kembali file .xls yang di upload tadi
  unlink($_FILES['filesoal']['name']);

  // alihkan halaman ke index.php
  redirect("Berhasil mengupload soal sebanyak $berhasil","../index2.php?to=soal");

}else {
  redirect("Pilih File Template Soal terlebih dahulu","../index2.php?to=soal");
}
 ?>
