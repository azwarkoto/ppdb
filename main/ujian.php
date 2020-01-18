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
    <title>UJIAN PPDB SMK MERCUSUAR JAKARTA 2019/2020</title>
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
        .label-form{
            margin:5px;
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

    <?php
        
        $sid=$_SESSION['username'];
        
        $query="SELECT * FROM biodata INNER JOIN jadwal ON biodata.kdjurusan=jadwal.kdjurusan INNER JOIN jurusan ON jurusan.kdjurusan=biodata.kdjurusan WHERE biodata.username='$sid'";
        $res=mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);   
        
        
        $query_nilai="SELECT * FROM nilai WHERE username='$sid'";
        $res_nilai=mysqli_query($conn,$query_nilai);
        $data_nilai = mysqli_num_rows($res_nilai);
        if($data_nilai<1){
            $query="DELETE FROM jwb WHERE kdjurusan='$row[kdjurusan]' AND username='$sid'";
            $result=mysqli_query($conn,$query);
        }else{
            redirect("Anda Sudah Melakukan Ujian","./");
        }

        $query_soal="SELECT * FROM soal WHERE kdjurusan='$row[kdjurusan]'";
        $res_soal=mysqli_query($conn,$query_soal);
        
            
    ?>
    
    <div class="container">
                
        <div class="soal" style="margin-bottom:230px">
            <h2>Ujian Jurusan <?=$row['namajurusan']?> </h2>
            <?php
                $query_jawab="SELECT * FROM jwb WHERE kdjurusan='$row[kdjurusan]' AND username='$sid'";
                $res_jawab=mysqli_query($conn,$query_jawab);
                $data_jawab=mysqli_fetch_all($res_jawab,MYSQLI_ASSOC);
                
                $n=1;
                while($rs = mysqli_fetch_array($res_soal)):
            ?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Soal ke <?=$n?></h3>
                </div>
                <div class="panel-body">
                    <h3>Pertanyaan</h3>
                    <p><?=$rs['soal']?></p><br>
                    <h4>Jawaban:</h4>
                    
                    
                    <input type="radio" name="jawaban_<?=$rs['kdsoal']?>" <?php foreach($data_jawab as $dj){ if($rs['kdsoal']==$dj['kdsoal'] && $row['kdjurusan']==$dj['kdjurusan'] && $sid==$dj['username'] && $dj['get_jwb']=="A"){ echo "checked";}} ?> class="jawaban_pilih" data-key='jawaban_<?=$rs['kdsoal']?>' data-param="<?=$rs['a']?>" id="jawaban_<?=$rs['kdsoal']?>_<?=$rs['a']?>"><label for="jawaban_<?=$rs['kdsoal']?>_<?=$rs['a']?>" class="label-form"><?=$rs['a']?></label><br>
                    <input type="radio" name="jawaban_<?=$rs['kdsoal']?>" <?php foreach($data_jawab as $dj){ if($rs['kdsoal']==$dj['kdsoal'] && $row['kdjurusan']==$dj['kdjurusan'] && $sid==$dj['username'] && $dj['get_jwb']=="B"){ echo "checked";}} ?> class="jawaban_pilih" data-key='jawaban_<?=$rs['kdsoal']?>' data-param="<?=$rs['b']?>" id="jawaban_<?=$rs['kdsoal']?>_<?=$rs['b']?>"><label for="jawaban_<?=$rs['kdsoal']?>_<?=$rs['b']?>" class="label-form"><?=$rs['b']?></label><br>
                    <input type="radio" name="jawaban_<?=$rs['kdsoal']?>" <?php foreach($data_jawab as $dj){ if($rs['kdsoal']==$dj['kdsoal'] && $row['kdjurusan']==$dj['kdjurusan'] && $sid==$dj['username'] && $dj['get_jwb']=="C"){ echo "checked";}} ?> class="jawaban_pilih" data-key='jawaban_<?=$rs['kdsoal']?>' data-param="<?=$rs['c']?>" id="jawaban_<?=$rs['kdsoal']?>_<?=$rs['c']?>"><label for="jawaban_<?=$rs['kdsoal']?>_<?=$rs['c']?>" class="label-form"><?=$rs['c']?></label><br>
                    <input type="radio" name="jawaban_<?=$rs['kdsoal']?>" <?php foreach($data_jawab as $dj){ if($rs['kdsoal']==$dj['kdsoal'] && $row['kdjurusan']==$dj['kdjurusan'] && $sid==$dj['username'] && $dj['get_jwb']=="D"){ echo "checked";}} ?> class="jawaban_pilih" data-key='jawaban_<?=$rs['kdsoal']?>' data-param="<?=$rs['d']?>" id="jawaban_<?=$rs['kdsoal']?>_<?=$rs['d']?>"><label for="jawaban_<?=$rs['kdsoal']?>_<?=$rs['d']?>" class="label-form"><?=$rs['d']?></label><br>
                    <input type="radio" name="jawaban_<?=$rs['kdsoal']?>" <?php foreach($data_jawab as $dj){ if($rs['kdsoal']==$dj['kdsoal'] && $row['kdjurusan']==$dj['kdjurusan'] && $sid==$dj['username'] && $dj['get_jwb']=="E"){ echo "checked";}} ?> class="jawaban_pilih" data-key='jawaban_<?=$rs['kdsoal']?>' data-param="<?=$rs['e']?>" id="jawaban_<?=$rs['kdsoal']?>_<?=$rs['e']?>"><label for="jawaban_<?=$rs['kdsoal']?>_<?=$rs['e']?>" class="label-form"><?=$rs['e']?></label><br>
                    <input type="hidden" class="jawaban_<?=$rs['kdsoal']?>" id="<?=$rs['kdsoal']?>" value="<?=strtolower($rs['kunci'])?>" >
                </div>
            </div>
            <?php 
                $n++;
                endwhile;
            ?>

            <?php
                $query="SELECT COUNT(kdsoal) AS jumlah  FROM soal WHERE kdjurusan='$row[kdjurusan]' ";
                $res=mysqli_query($conn,$query);
                $data=mysqli_fetch_assoc($res);
                
            ?>
            <form action="{{ajax}}" medhod="post">
                <input type="hidden" name="nilai" id="nilai" value="" placeholder="nilai">
                <input type="hidden" name="jumlah" id="jumlah" value="<?=$data['jumlah'];?>" placeholder="jumlah">
                <input type="hidden" name="benar" id="benar" value="" placeholder="benar">
                <input type="hidden" name="salah" id="salah" value="" placeholder="salah">
                <input type="hidden" name="username" value="<?=$sid?>" id="username" value="" placeholder="username">
                <input type="hidden" name="jurusan" value="<?=$row['kdjurusan']?>" id="jurusan" value="" placeholder="jurusan">
                <br>
                <button type="button" class="btn btn-primary btn-sm" id="btn-simpan">Simpan</button>
            </form>
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

    <script>
        $(document).ready(function() {

            
            $(document).on('click','.jawaban_pilih',function(){
                let jurusan=$('#jurusan').val();
                let username=$('#username').val();
                let key=$(this).attr('data-key');
                let answer=$(this).attr('data-param');
                let question=$('.'+key).attr('id');
                let true_answer=$('.'+key).val();
                let result="";

                if(answer==true_answer){
                    result="1";
                }else{
                    result="0";
                }                
                
                $.ajax({
                    url:"api.php?method=cek-jawaban",
                    method:"POST",
                    data:{question:question,jurusan:jurusan,username:username,answer:answer.toUpperCase(),result:result},
                    success:function(data)
                    {
                        console.log(data);
                        
                    }
                });
                
                $.ajax({
                    url:"api.php?method=cek-benar",
                    method:"POST",
                    data:{jurusan:jurusan,username:username},
                    success:function(data)
                    {
                        let jumlah=$('#jumlah').val();
                        $('#benar').val(data);
                        let benar=$('#benar').val();
                        let salah=parseInt(jumlah)-parseInt(benar);
                        $('#salah').val(salah);
                        let nilai=parseInt(benar)*100/parseInt(jumlah);
                        $('#nilai').val(nilai);

                    }
                });

                
                
                
                
            });

            $(document).on('click','#btn-simpan',function(){
                let jurusan=$('#jurusan').val();
                let username=$('#username').val();

                $.ajax({
                    url:"api.php?method=cek-benar",
                    method:"POST",
                    data:{jurusan:jurusan,username:username},
                    success:function(data)
                    {
                        let jumlah=$('#jumlah').val();
                        $('#benar').val(data);
                        let benar=$('#benar').val();
                        let salah=parseInt(jumlah)-parseInt(benar);
                        $('#salah').val(salah);
                        let nilai=parseInt(benar)*100/parseInt(jumlah);
                        $('#nilai').val(nilai);

                    }
                });

                let jumlah=$('#jumlah').val();        
                let benar=$('#benar').val();
                let salah=$('#salah').val();
                let nilai=$('#nilai').val();
                
                
                let saved=confirm('Jawaban akan disimpan, anda yakin  ?');
                if(saved){
                    $.ajax({
                            url:"api.php?method=cek-jawab",
                            method:"POST",
                            data:{jurusan:jurusan,username:username},
                                success:function(data)
                                {
                                    if(jumlah==data){
                                        $.ajax({
                                        url:"api.php?method=simpan-nilai",
                                        method:"POST",
                                        data:{username:username,nilai:nilai,benar:benar,salah:salah},
                                            success:function(data)
                                            {
                                                location.replace("./");
                                            }
                                        });
                            
                                    }else{
                                        alert('Soal belum terisi semua silahkan cek kembali');   
                                    }
                                }
                        });

                }else{
                    alert('Jawaban belum disimpan, silahkan cek kembali jawaban anda');
                }
    
                
                
            });


        });
        
        
    </script>

</body>

</html>
