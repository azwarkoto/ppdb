<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Masuk PPDB SMK MERCUSUAR JAKARTA 2019/2020</title>
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

    <link href='log.png' rel='shortcut icon'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 zzzzelements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="width:70%;margin:auto">
    <div class="login-box" style="padding:20px;">
        <div class="login-logo">
            <a href="../"><b>PPDB</b>&nbsp;SMK Mercusuar Jakarta 2019/2020</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg"><?php echo ucwords('silahkan login menggunakan username atau email yang telah dibuat dipendaftaran') ?></p>

            <form action="login.php" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="akun" placeholder="Username Atau Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="btnlogin">Masuk</button>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-2">
                        <button type="reset" name="button" class="btn btn-secondary btn-block btn-flat">Batal</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>



            <a href="#" class="text-left" data-toggle="popover" title="Lupa password?" data-content="Datang ke sekolah atau telfon sekolah untuk mereset akun">Saya Lupa Password</a><br>
            <!-- <a href="../daftar" target="_blank" class="text-right">Pendaftaran PPDB</a><br> -->

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });

        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
        });

    </script>

</body>

</html>
