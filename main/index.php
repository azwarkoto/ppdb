<?php
        require_once 'conn.php';
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MAIN PPDB SMK MERCUSUAR JAKARTA 2019/2020</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <link href='../logonew.png' rel='shortcut icon'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 zzzzelements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        body {
                padding-top: 50px;
                }                
    </style>
</head>

<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Dashboard SMK MERCUSUAR </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="#biodata" data-toggle="modal" data-target="#biodata">Bioadata</a></li>
                    <li><a href="../login">Logout (<?php echo $sid=$_SESSION['username']?>)</a></li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    
    <div class="jumbotron" style="background:url('../daftar/assets/img/backgrounds/1.jpg');background-size:cover;color:white">
      <div class="container">
        <h2>Main Dashboard</h2>
        <p>Selamat Datang di Dashboard SMK MERCUSUAR.</>
      </div>
    </div>

    <?php
        $query="SELECT * FROM biodata INNER JOIN jadwal ON biodata.kdjurusan=jadwal.kdjurusan INNER JOIN jurusan ON jurusan.kdjurusan=biodata.kdjurusan WHERE biodata.username='$sid'";
        $res=mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);
            
    ?>
    
    <div class="container">
                
      <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Jadwal Ujian</div>
                <div class="panel-body">
                   <p> Kepada <?= $row['nama'];?> (<?= $row['username'];?>) <br> ujian akan dilaksanakan pada tanggal <b><?= $row['jadwal'];?></b>
                    <a href="ujian.php" class="btn btn-primary" style="margin-top:10px">Mulai Ujian</a>
                   </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">Info Jurusan</div>
                <div class="panel-body">
                    <p>Jurusan Yang anda pilih : <br><b><?= $row['namajurusan'];?></b></p>
                </div>
            </div>
       </div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">Kelengkapan Berkas</div>
                <div class="panel-body">
                    <ul>
                        <li>
                        Upload Scan Ijazah
                        <?php if(!empty($row['scanijazah'])):?>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            
                            <a href="#ijazah" data-toggle="modal" data-target="#file_ijazah">[view]</a>
                            <!-- Button trigger modal -->

                            <!-- Modal -->
                            <div class="modal fade" id="file_ijazah" tabindex="-1" role="dialog" aria-labelledby="file_ijazahLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="file_ijazahLabel">SCAN IJAZAH</h4>
                                </div>
                                <div class="modal-body">
                                    <iframe src="../daftar/public/ijazah/<?= $row['scanijazah'];?>" frameborder="0" width="100%" height="450px"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <a href="../daftar/public/ijazah/<?= $row['scanijazah'];?>" class="btn btn-link" target="_new">Buka di Tab Baru</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        <?php else:?>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        <?php endif;?>
                        </li>
                        <li>
                        Upload Scan SKHUN
                        <?php if(!empty($row['scanskhun'])):?>
                            <i class="fa fa-check" aria-hidden="true"></i> 
                            <a href="#ijazah" data-toggle="modal" data-target="#file_skhun">[view]</a>
                            <!-- Button trigger modal -->

                            <!-- Modal -->
                            <div class="modal fade" id="file_skhun" tabindex="-1" role="dialog" aria-labelledby="file_skhunLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="file_skhunLabel">SCAN SKHUN</h4>
                                </div>
                                <div class="modal-body">
                                    <iframe src="../daftar/public/nhun/<?= $row['scanskhun'];?>" frameborder="0" width="100%" height="450px"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <a href="../daftar/public/nhun/<?= $row['scanskhun'];?>" class="btn btn-link" target="_new">Buka di Tab Baru </a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        <?php else:?>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        <?php endif;?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </div>

    </div><!-- /.container -->

    <footer class="footer" style="position:fixed;bottom:0;left:0;right:0;background:#f7f7f9;padding:10px;color:#222">
      <div class="container">
        <p class="text-muted">Copyright &copy; SMK MERCUSUAR Jakarta. <?=date('Y')?></p>
      </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="biodata" tabindex="-1" role="dialog" aria-labelledby="modal_biodata">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modal_biodata">Biodata</h4>
        </div>
        <div class="modal-body">
            <ul class="list-group">
            <li class="list-group-item">Nama : <?= $row['nama'];?></li>
            <li class="list-group-item">Tanggal Lahir :  <?= $row['namajurusan'];?></li>
            <li class="list-group-item">Alamat :  <?= $row['alamat'];?></li>
            <li class="list-group-item">Asal Sekolah :  <?= $row['asalsekolah'];?></li>
            <li class="list-group-item">Nama Ayah :  <?= $row['namabapak'];?></li>
            <li class="list-group-item">Nama Ibu :  <?= $row['namaibu'];?></li>
        
            </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    

    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>

</body>

</html>
