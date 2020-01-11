<?php
require_once 'header.php';

if (isset($_GET['to']) AND $_GET['to']=="jrsn") {
  //jurusan
  require_once 'jrsn.php';
}elseif (isset($_GET['to']) AND $_GET['to']=="jdw") {
  //jadwal
  require_once 'jdw.php';
}elseif (isset($_GET['to']) AND $_GET['to']=="soal") {
  //soalujian
  require_once 'soal.php';
}elseif (isset($_GET['to']) AND $_GET['to']=="ifs") {
  //infromasi siswa
  require_once 'ifs.php';
}elseif (isset($_GET['to']) AND $_GET['to']=="dcpd") {
  //data calon peserta didik
  require_once 'dcpd.php';
}elseif (isset($_GET['to']) AND $_GET['to']=="dpd") {
  //data peserta didik
  require_once 'dpd.php';
}elseif (isset($_GET['to']) AND $_GET['to']=="akun") {
  //data peserta didik
  require_once 'akun.php';
}elseif (isset($_GET['to']) AND $_GET['to']=="shsoal") {
  //data peserta didik
  require_once 'shsoal.php';
}
else {
  //menu utama
  require_once 'home.php';
}

require_once 'footer.php';
 ?>
