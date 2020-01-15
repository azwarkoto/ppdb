<?php
ob_start();
require_once 'conn.php';
require_once 'phpqrcode/phpqrcode/qrlib.php';
$u =  $_GET['u'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM biodata JOIN register USING(username) WHERE username='$u'"));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      div.tengah{
        width: 100px;
        margin: 0 auto;
      }
      table,tr,td,th{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
      }
      td,th{
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <div class="tengah">
    <h1>Pendaftaran PPDB SMK MERCUSUAR JAKARTA 2019/2020</h1>
    <table class="table">
      <tr>
        <th>Nama</th>
        <td><?php echo $data['nama'] ?></td>
      </tr>
      <tr>
        <th>Asal Sekolah</th>
        <td><?php echo $data['asalsekolah'] ?></td>
      </tr>
      <tr>
        <th>Tempat, Tanggal Lahir</th>
        <td><?php echo $data['tempatlahir'] ?>, <?php echo $data['tanggallahir'] ?></td>
      </tr>
      <tr>
        <th>Username</th>
        <td><?php echo $data['username'] ?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><?php echo $data['email'] ?></td>
      </tr>
      <tr>
        <th>Waktu Pendaftaran</th>
        <td><?php echo $data['waktudaftar'] ?></td>
      </tr>
      <tr>
        <td colspan="2">
          <?php
          QRcode::png("Pendaftaran PPDB 2019 ".$data['username'], "barcode/bc_".$data['username'],"M",5,5);
          echo "<img src=\"barcode/bc_".$data['username']."\" alt=\"Pendaftaran PPDB 2019 ".$data['username']."\">";
           ?>
        </td>
      </tr>
    </table>
    </div>
  </body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Bukti Pendaftaran '.$data['username'].'.pdf', 'D');
 ?>
