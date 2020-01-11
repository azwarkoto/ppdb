<?php
session_start();

if(empty($_SESSION['kdadmin']) OR empty($_SESSION['inisial']) OR empty($_SESSION['nmadmin'])){
  header("Location: logout.php");
}

$host = "localhost";
$dbname = "ppdb";
$user = "root";
$pass = "";

$conn = mysqli_connect($host,$user,$pass,$dbname);
if (!$conn) {
  die("Gagal Koneksi Database");
}



function redirect($message,$to)
{
  ?>
  <script type="text/javascript">
    window.alert('<?php echo $message ?>')
    window.location.href='<?php echo $to ?>';
  </script>
  <?php
  return true;
}
 ?>
