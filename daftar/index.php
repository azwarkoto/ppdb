<?php
require_once 'conn.php';
date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pendaftaran PPDB SMK MERCUSUAR JAKARTA 2019/2020</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
        $( function() {
          $( "#datepicker" ).datepicker();
        } );
        </script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Pendaftaran PPDB SMK MERCUSUAR JAKARTA 2019/2020</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								Dapatkan info pendaftaran juga
							</span>
							<a href="#"><strong>melalui</strong></a>
							<span class="li-text">
								sosmed kami:
							</span>
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
								<a href="#"><i class="fa fa-skype"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>PENDAFTARAN</strong> PPDB SMK MERCUSUAR <JAKARTA></JAKARTA> 2019/2020</h1>
                            <div class="description">
                            	<p>
	                            	<?php echo ucwords('silahkan lengkapi formulir pendaftaran dengan lengkap') ?>
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <?php
                          if (empty($_GET['act']) OR empty($_GET['u'])) {
                            //pendaftaran
                            ?>
                            <form role="form" action="" method="post" class="registration-form" enctype="multipart/form-data">

                          		<fieldset>
  		                        	<div class="form-top">
  		                        		<div class="form-top-left">
  		                        			<h3>Step 1 / 3</h3>
  		                            		<p>Biodata Diri:</p>
  		                        		</div>
  		                        		<div class="form-top-right">
  		                        			<i class="fa fa-user"></i>
  		                        		</div>
  		                            </div>
  		                            <div class="form-bottom">
  				                    	<div class="form-group">
  				                    		<label class="sr-only" for="form-first-name">Nama Lengkap</label>
  				                        	<input type="text" name="nama" placeholder="Nama Lengkap..." class="form-first-name form-control" id="form-first-name">
  				                        </div>
  				                        <div class="form-group">
  				                        	<label class="sr-only" for="form-last-name">Asal Sekolah</label>
  				                        	<input type="text" name="asalsekolah" placeholder="Asal Sekolah..." class="form-last-name form-control" id="form-last-name">
  				                        </div>
                                  <div class="form-group">
  				                        	<label class="sr-only" for="form-last-name">Tempat Lahir</label>
  				                        	<input type="text" name="tempatlahir" placeholder="Tempat Lahir..." class="form-last-name form-control" id="form-last-name">
  				                        </div>
                                  <div class="form-group">
  				                        	<label class="sr-only" for="form-last-name">Tanggal Lahir</label>
  				                        	<input type="text" name="tanggallahir" id="datepicker" placeholder="YYYY-MM-DD" class="form-last-name form-control">
  				                        </div>
                                  <div class="form-group">
  				                        	<label class="sr-only" for="form-last-name">Nama Bapak</label>
  				                        	<input type="text" name="namabapak" placeholder="Nama Bapak..." class="form-last-name form-control" id="form-last-name">
  				                        </div>
                                  <div class="form-group">
  				                        	<label class="sr-only" for="form-last-name">Nama Ibu</label>
  				                        	<input type="text" name="namaibu" placeholder="Nama Ibu..." class="form-last-name form-control" id="form-last-name">
  				                        </div>
  				                        <div class="form-group">
  				                        	<label class="sr-only" for="form-about-yourself">Alamat Lengkap</label>
  				                        	<textarea name="alamat" placeholder="Alamat Lengkap..."
  				                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
  				                        </div>
                                  <a href="../"><button class="btn btn-secondary">Halaman Utama</button></a>
  				                        <button type="button" class="btn btn-next">Selanjutnya</button>
  				                    </div>
  			                    </fieldset>

  			                    <fieldset>
  		                        	<div class="form-top">
  		                        		<div class="form-top-left">
  		                        			<h3>Step 2 / 3</h3>
  		                            		<p>Lengkapi Dokumen Kelulusan & Pemilihan Jurusan</p>
  		                        		</div>
  		                        		<div class="form-top-right">
  		                        			<i class="fa fa-list-alt"></i>
  		                        		</div>
  		                            </div>
  		                            <div class="form-bottom">

                                    <div class="form-group">
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupFileAddon01">Ijazah</span>
                                        </div>
                                        <div class="custom-file">
                                          <input required name="scanijazah" type="file" class="custom-file-input" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01" accept="application/pdf">
                                        </div>
                                      </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon02">SKHUN</span>
                                          </div>
                                          <div class="custom-file">
                                            <input required type="file" name="scannhun" class="custom-file-input" id="inputGroupFile02"
                                              aria-describedby="inputGroupFileAddon02" accept="application/pdf">
                                          </div>
                                        </div>
                                        </div>
                                  <div class="form-group">
                                    <label class="sr-only" for="form-email">Nilai Rata-Rata Ujian</label>
                                    <input type="number" maxlength="2" name="nhun" placeholder="Nilai Rata-Rata Ujian.." class="form-email form-control" id="form-nem">
                                  </div>
                                  <hr>
                                  <div class="form-group">
                                    <label for="" class="control-label">Jurusan</label>
                                    <select name="kdjurusan" class="form-control" id="">
                                      <?php
                                      $jurusan = mysqli_query($conn,"SELECT * FROM jurusan ORDER BY namajurusan ASC");
                                      while ($data = mysqli_fetch_assoc($jurusan)) {
                                        ?><option value="<?php echo $data['kdjurusan'] ?>"><?php echo $data['namajurusan'] ?></option><?php
                                      }
                                       ?>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label">Jadwal Ujian</label>
                                    <small>*Perhatikan Nama Jurusan</small>
                                    <select name="kdjadwal" class="form-control" id="">
                                      <?php
                                      $jadwal = mysqli_query($conn,"SELECT * FROM jadwal JOIN jurusan USING(kdjurusan) ORDER BY jurusan.namajurusan ASC");
                                      while ($data = mysqli_fetch_assoc($jadwal)) {
                                        ?><option value="<?php echo $data['kdjadwal'] ?>"><?php echo $data['namajurusan'] ?> | <?php echo $data['jadwal'] ?></option><?php
                                      }
                                       ?>
                                    </select>
                                  </div>
  				                        <button type="button" class="btn btn-previous">Sebelumnya</button>
  				                        <button type="button" class="btn btn-next">Selanjutnya</button>
  				                    </div>
  			                    </fieldset>

  			                    <fieldset>
  		                        	<div class="form-top">
  		                        		<div class="form-top-left">
  		                        			<h3>Step 3 / 3</h3>
  		                            		<p>Setting Akun Anda</p>
  		                        		</div>
  		                        		<div class="form-top-right">
  		                        			<i class="fa fa-key"></i>
  		                        		</div>
  		                            </div>
  		                            <div class="form-bottom">
                                    <?php
                                    //Username
                                    // PPDB190001
                                    $username = mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(username) AS maxUsername FROM register"));
                                    $maxusername = $username['maxUsername'];
                                    $noUrut = (int) substr($maxusername, 4, 6);
                                    $noUrut++;
                                    $char = "PPDB";
                                    $newID = $char . sprintf("%03s", $noUrut);
                                     ?>
                                    <div class="form-group">
                                      <label class="sr-only" for="form-email">Username</label>
                                      <input type="text" readonly name="username" placeholder="Username..." class="form-username form-control" id="form-username" value="<?php echo $newID ?>">
                                    </div>
                                    <div class="form-group">
                                      <label class="sr-only" for="form-email">Email</label>
                                      <input type="email" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                                    </div>
                                    <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                      <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <div class="form-group">
                                      <label class="sr-only" for="form-repeat-password">Repeat password</label>
                                      <input type="password" name="repassword" placeholder="Repeat password..."
                                            class="form-repeat-password form-control" id="form-repeat-password">
                                    </div>
  				                        <button type="button" class="btn btn-previous">Sebelumnya</button>
  				                        <button type="submit" name="btn-daftar" class="btn">Daftar</button>
  				                    </div>
  			                    </fieldset>

  		                    </form>
                            <?php
                          }else {
                            //buktipendaftaran
                            ?>
                            <!-- <form role="form" action="" method="post" class="registration-form"> -->

                          		<fieldset>
  		                        	<div class="form-top">
  		                        		<div class="form-top-left">
  		                        			<h3>Berhasil Melakukan Pendaftaran PPDB SMK Mercusuar Jakarta 2019/2020</h3>
  		                            		<p>Silahkan Download Bukti Pendaftaran</p>
  		                        		</div>
  		                        		<div class="form-top-right">
  		                        			<i class="fa fa-check"></i>
  		                        		</div>
  		                            </div>
  		                            <div class="form-bottom">
                                <?php
                                $u = $_GET['u'];
                                $data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM biodata JOIN register USING(username) JOIN statuscpd USING(username) WHERE username='$u' AND statuscpd.status=1"));
                                 ?>
  				                    	<div class="form-group">
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
                                  </table>
  				                        <a href="bukti.php?u=<?php echo $data['username'] ?>"><button class="text-center btn btn-success">Download Bukti Daftar</button></a>
                                  <a href="../index.php"><button class="btn btn-primary">Kembali Halaman Depan</button></a>
  				                    </div>
  			                    </fieldset>

  		                    <!-- </form> -->
                            <?php
                          }
                           ?>


                      </div> <!-- Tutup Form -->

                    </div>
                </div>
            </div>

        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>

        <![endif]-->

    </body>

</html>

<?php
if (isset($_POST['btn-daftar'])) {
  //data
  $nama = $_POST['nama'];
  $kdjurusan = $_POST['kdjurusan'];
  $kdjadwal = $_POST['kdjadwal'];
  $asalsekolah = $_POST['asalsekolah'];
  $tempatlahir = $_POST['tempatlahir'];
  $tanggallahir = $_POST['tanggallahir'];
  $namabapak = $_POST['namabapak'];
  $namaibu = $_POST['namaibu'];
  $alamat = $_POST['alamat'];
  $er_scanijazah = $_FILES['scanijazah']['error'];
  $er_scannhun = $_FILES['scannhun']['error'];
  $nhun = $_POST['nhun'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];

  //proses
  //cekpass
  if ($password==$repassword) {
    //lanjut
    //pindahkan gambar
    if ($er_scanijazah===0 AND $er_scannhun==0) {
      // siapkan variabel untuk pesan error
      $pesan_error = "";

      // siapkan variabel untuk pemindahan file
      $nama_folder="public/ijazah";
      $nama_folder2="public/nhun";
      $tmp = $_FILES["scanijazah"]["tmp_name"];
      $tmp2 = $_FILES["scannhun"]["tmp_name"];
      $nama_file_scanijazah = $username."_Ijazah_".$_FILES["scanijazah"]["name"];
      $nama_file_scannhun = $username."_NHUN_".$_FILES["scannhun"]["name"];
      $path_file = "$nama_folder/$nama_file_scanijazah";
      $path_file2 = "$nama_folder2/$nama_file_scannhun";

      // cek apakah terdapat file dengan nama yang sama
      if (file_exists($path_file)) {
        $pesan_error = "File Ijazah dengan nama sama sudah ada di server";
        redirect($pesan_error,"index.php");
      }elseif (file_exists($path_file2)) {
        $pesan_error = "File NHUN dengan nama sama sudah ada di server";
        redirect($pesan_error,"index.php");
      }

      // pindahkan file upload jika semuanya OK
      if (move_uploaded_file($tmp,$path_file) AND move_uploaded_file($tmp2,$path_file2)){
        $encrypt = md5($password);
        $cek = mysqli_fetch_assoc(mysqli_query($conn,"SELECT email FROM register WHERE email='$email'"));
        if (!empty($cek['email'])) {
          redirect("Mohon Maaf Email Sudah Terdaftar, Gunakan Email lainnya","index.php");
        }else {
        $waktudaftar = date('d-m-Y H:i:s');
        $register = mysqli_query($conn,"INSERT INTO `register` (`username`, `email`, `password`,`waktudaftar`)
        VALUES ('$username', '$email', '$encrypt', '$waktudaftar')");
        $biodata = mysqli_query($conn,"INSERT INTO `biodata` (`username`, `kdjurusan`,`kdjadwal`, `nama`, `asalsekolah`, `tempatlahir`, `tanggallahir`, `namabapak`, `namaibu`, `alamat`, `scanijazah`, `scanskhun`, `nhun`)
        VALUES ('$username', '$kdjurusan', '$kdjadwal', '$nama', '$asalsekolah', '$tempatlahir', '$tanggallahir', '$namabapak', '$namaibu', '$alamat', '$nama_file_scanijazah', '$nama_file_scannhun', '$nhun')");
        $status = mysqli_query($conn,"INSERT INTO `statuscpd` (`kdstatuscpd`, `username`, `status`) VALUES (NULL, '$username', '1')"); //berhasil daftar
        if ($register AND $biodata AND $status) {
          // code...
          redirect("Pendaftaran PPDB SMK Mercusuar Jakarta 2019/2020 Berhasil, Harap Download Bukti Pendaftaran","index.php?act=cetak&u=$username");
        }else {
          redirect("Permasalahan Register","index.php");
        }

        }
      }
      else {
        $pesan_error = "File gagal di upload";
        redirect($pesan_error,"index.php");
      }

    }

  }else {
    //buang
    redirect('Mohon Maaf Password Tidak Sesuai','index.php');
  }


}
 ?>
