<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- normalize library  for good reset-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <!-- font-awesome icons library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Hover.Css Animations File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css">
    <!-- animate for WOW Css File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Main Css File -->
    <link rel="stylesheet" href="css/Style.css">

    <!-- Default Theme Css File-->
    <link rel="stylesheet" href="css/default-theme.css">

    <!-- media Queries To Edit in Bootstrap -->
    <link rel="stylesheet" href="css/media-Queries.css">
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <link href="fontawesome/fa/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="css/style_home.css">-->
    <link rel="stylesheet" href="style.css">
    <link href='logonew.png' rel='shortcut icon'>
    <script defer src="fontawesome/fa/js/all.js"></script>
    <!--load all styles -->

    <title>PPDB SMKN MERCUSUAR JAKARTA 2019</title>
    <script type="text/javascript">
        function d_daftar() {
            window.location = 'daftar/';
        }

        function d_login() {
            window.location = 'login/';
        }
    </script>
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
                <a class="navbar-brand" href="index.php">SMK MERCUSUAR<span class="color-theme">. Jakarta </span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="daftar/">Pendaftaran</a></li>
                    <li><a href="galeri.php">Galeri</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jurusan <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Teknik Audio Video </a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Multimedia</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Teknik Kendaraan Ringan</a></li>
                        </ul>
                    </li>
                    <li><a href="login/">Masuk</a></li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- End Navbar -->
    <div class="clear-fix">

    </div>
    <!-- End Color Box -->


    <!-- Start Slider -->

    <div id="navbar-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators hidden-xs">
            <li data-target="#navbar-slider" data-slide-to="0" class="active"></li>
            <li data-target="#navbar-slider" data-slide-to="1"></li>
            <li data-target="#navbar-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="undraw.png" alt="1" height="100%" width="100%">
                <div class="carousel-caption hidden-xs">
                    <h2>Multimedia</h2>
                    <p> Mengingat bahwa jurusan multimedia adalah jurusan yang mempunyai ruang lingkup pekerjaan dan profesi yang luas, jurusan multimedia SMK adalah jurusan yang banyak difavoritkan bagi sebagian besar siswa lulusan SMP dan sederajat selain jurusan Teknik Komputer dan Jaringan (TKJ) </p>
                </div>
            </div>

            <div class="item">
                <img src="tkr.jpg" alt="2">
                <div class="carousel-caption hidden-xs">
                    <h2>Teknik Kendaraan Ringan</h2>
                    <p> Teknik Kendaraan Ringan merupakan kompetensi keahlian dibidang Teknik Otomotif yang menekankan keahlian pada bidang penguasaan jasa perbaikan kendaraan ringan. Kompetensi keahlian teknik kendaraan ringan menyiapkan peserta didik untuk bekerja pada pekerjaan jasa perawatan dan perbaikan didunia usaha / industri.</p>
                </div>
            </div>
            <div class="item">
                <img src="tav.jpg" alt="3">
                <div class="carousel-caption new_class hidden-xs">
                    <h2>Teknik Audio Video</h2>
                    <p>Program Studi Teknik Elektronika bertujuan menghasilkan tenaga ahli madya yang mampu merancang perangkat lunak dan perangkat keras dalam teknik elektronika dan mengaplikasikan, memelihara dan memperbaiki peralatan pengendali elektronika dan komputer.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#navbar-slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left color-theme " aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#navbar-slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right color-theme" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- End Slider -->

    <!-- Start Section about -->
    <section class="about text-center wow slideInLeft" data-wow-duration="2s" data-wow-offset="200">
        <div class="container">
            <h1 class="hidden-xs"> SMK MERCUSUAR <span class="color-theme">JAKARTA</span></h1>
            <h4 class="visible-xs"> SMK Mercusuar <span class="color-theme">Jakarta</span></h4>
            <p class="lead">
                SMK Mercusuar Jakarta merupakan sekolah kejuruan yang memiliki akreditasi "A". Selain itu kami memiliki jurusan yang siap bersaing dengan sekolah lain, baik itu swasta maupun negeri. Dengan adanya web ini kami bertujuan agar pendaftaran siswa/siswi baru di sediakan lewat online.
                AYO BERGABUNG DENGAN KAMI!

            </p>
        </div>
    </section>
    <!-- End Section about -->


    <!-- Start Section features -->
    <section class="features text-center wow jackInTheBox" data-wow-duration="2s" data-wow-offset="300">
        <div class="container">
            <h2 class="h1"> Fasilitas Sekolah</h2>
            <div class="row">

                <div class="feat col-lg-3 col-md-3 col-sm-6 col-xs-12 wow rollIn " data-wow-duration="2s" data-wow-offset="300" data-wow-delay=".5s">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <h3> Laboratorium</h3>
                    <p>
                        Lab. Teknik Komputer, Lab. Bahasa, Lab. Multimedia, Lab. Akuntansi.
                    </p>
                </div>

                <div class="feat col-lg-3 col-md-3 col-sm-6 col-xs-12 wow zoomIn " data-wow-duration="2s" data-wow-offset="300" data-wow-delay=".5s">

                    <span class="fas fa-school fa-3x" aria-hidden="true"></span>
                    <h3> Ruangan</h3>
                    <p>
                        Ruang Kelas AC & non AC, Layar & InFocus, Ruang Serba Guna, Pelatihan-Pelatihan.
                    </p>
                </div>

                <div class="feat col-lg-3 col-md-3 col-sm-6 col-xs-12 wow flipInY " data-wow-duration="2s" data-wow-offset="300" data-wow-delay=".5s">
                    <span class="fas fa-handshake fa-3x" aria-hidden="true"></span>
                    <h3> Bekerja-sama banyak pihak</h3>
                    <p>
                        Mempunyai hubungan dengan tempat-tempat kerja yang akan disalurkan langsung.
                    </p>
                </div>

                <div class="feat col-lg-3 col-md-3 col-sm-6 col-xs-12 wow flipInX" data-wow-duration="2s" data-wow-offset="300" data-wow-delay=".5s">
                    <span class="fas fa-mosque fa-3x" aria-hidden="true"></span>
                    <h3> Masjid </h3>
                    <p>
                        Memiliki masjid sendiri pada lingkungan sekolah.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- End Section features -->


    <!-- Start Section testimonials -->
    <section class="testimonials text-center wow bounceInRight " data-wow-duration="2s" data-wow-offset="220" data-wow-delay="0s">
        <div class="container">
            <h3 class="hidden-xs"> Pendapat Alumni Tentang SMK Mercusuar Jakarta</h3>
            <h4 class="visible-xs"> Pendapat Alumni Tentang SMK Mercusuar Jakarta </h4>

            <div id="testimonials-slider" class="carousel slide" data-ride="carousel">


                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">

                        <div class="carousel-caption">
                            <p class="lead">
                                Sekolahan nya bagus, guru-gurunya juga baik ada juga galah sih
                                hehe. tapi gapapa galak buat kebaikan murid. Keep Going.
                            </p>

                            <span class="color-theme"> Muhammad Arifin Syah</span>
                        </div>
                    </div>

                    <div class="item">

                        <div class="carousel-caption">
                            <p class="lead">
                                Fasilitas nya lengkap sih tapi internetnya masih lama nih hahha
                            </p>

                            <span class="color-theme"> Mostafa Ahmad</span>
                        </div>
                    </div>

                    <div class="item">

                        <div class="carousel-caption">
                            <p class="lead">
                                Saya lulusan SMK Mercusuar Jurusan Teknik Informatika tahun 2013. Sekarang saya bekerja di salah satu partner SMK Mercusuar. pesan saya kepada adik-adik belajar dengan sungguh pasti bisa. Salam Mercu.
                            </p>

                            <span class="color-theme"> Santy San</span>
                        </div>
                    </div>


                    <div class="item">

                        <div class="carousel-caption">
                            <p class="lead">
                                Udah beda sih sekarang, udah ada web nya jadi gampang kalo mau daftar sekolah. Jadi jangan males yaa.
                            </p>

                            <span class="color-theme"> Kirana Seto</span>
                        </div>
                    </div>


                </div>


                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#testimonials-slider" data-slide-to="0" class="active wow bounceInLeft " data-wow-duration="2s" data-wow-offset="200" data-wow-delay="0.5s">
                        <img src="https://image.ibb.co/fQ0wUk/avatar_01.jpg" alt="Mahmoud Badawy">
                    </li>
                    <li data-target="#testimonials-slider" data-slide-to="1" class="wow bounceInDown " data-wow-duration="2s" data-wow-offset="200" data-wow-delay="1s">
                        <img src="https://image.ibb.co/jphApk/avatar_02.jpg" alt="Mostafa Mahmoud Badawy">
                    </li>
                    <li data-target="#testimonials-slider" data-slide-to="2" class="wow bounceInUp " data-wow-duration="2s" data-wow-offset="200" data-wow-delay="1.5s">
                        <img src="https://image.ibb.co/mkDuFQ/avatar_03.jpg" alt="Karima Sultan">
                    </li>
                    <li data-target="#testimonials-slider" data-slide-to="3" class="wow bounceInRight " data-wow-duration="2s" data-wow-offset="200" data-wow-delay="2s">
                        <img src="https://image.ibb.co/cuRgvQ/avatar_04.jpg" alt="Sara Samy">
                    </li>
                </ol>

            </div>

        </div>
    </section>
    <!-- End Section testimonials -->


    <!-- Start Section  Table-price -->
    <section class="Table-price text-center">
        <div class="container">
            <h2 class="h1">Daftar Biaya SMK Mercusuar Jakarta</h2>
            <div class="row">

                <div class="  col-lg-3 col-md-4 col-sm-6 col-xs-12 wow rotateInDownLeft " data-wow-duration="2s" data-wow-offset="200" data-wow-delay="0.5s">
                    <div class="Price-box">
                        <h3 class="text-primary"> Multimedia</h3>
                        <p class="center-block">
                            Rp.200.000 /smt
                        </p>
                        <div>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <a href="daftar/" class="btn btn-primary "> Daftar Sekarang</a>
                    </div>
                </div>

                <div class="  col-lg-3 col-md-4 col-sm-6 col-xs-12 wow rotateInUpLeft " data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1s">
                    <div class="Price-box">
                        <h3 class="text-success"> Teknik Kendaraan Ringan</h3>
                        <p class="center-block">
                            Rp.150.000/smt
                        </p>
                        <div>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <a href="daftar/" class="btn btn-success"> Daftar Sekarang</a>
                    </div>
                </div>
                <div class="  col-lg-3   col-md-12 col-sm-6 col-xs-12 wow rotateInUpRight " data-wow-duration="2s" data-wow-offset="200" data-wow-delay="0.5s">
                    <div class="Price-box">
                        <h3 class="text-info">Teknik Audio Video</h3>
                        <p class="center-block">
                            Rp.150.000
                        </p>
                        <div>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <a href="daftar/" class="btn btn-info"> Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section  Table-price -->

    <!-- Start Section statistic -->
<!--
    <section class="statistic text-center wow slideInRight " data-wow-duration="2s" data-wow-offset="300">
        <div class="stat-layout">
            <div class="container">
                <h2 class="h1"> Statistik SMK Mercusuar Jakarta</h2>
                <div class="row">

                    <div class="col-md-3 col-xs-6">
                        <div class="stat-info">
                            <i class="fa fa-users fa-4x" aria-hidden="true"></i>
                            <p>9,550</p>
                            <span> SISWA </span>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="stat-info">
                            <i class="fa fa-comments fa-4x" aria-hidden="true"></i>
                            <p>19,550</p>
                            <span> Lulus</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="stat-info">
                            <i class="fa fa-briefcase fa-4x" aria-hidden="true"></i>
                            <p>3,550</p>
                            <span> Diterima Kerja</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="stat-info">
                            <i class="fas fa-graduation-cap fa-3x" aria-hidden="true"></i>
                            <p>5000</p>
                            <span> Masuk PTN </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
-->
    <!-- End Section statistic -->


    <!-- Start Section Skill-progress -->
    <!--<section class="Skill-progress wow rubberBand " data-wow-duration="2s" data-wow-offset="200">
        <h2 class="h1 text-center">Our Skills</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="skills-progress">
                        <div class="progress ">
                            <div class=" progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                HTML5 / CSS3
                            </div>
                        </div>


                        <div class="progress ">
                            <div class=" progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                PHP / MYSQL
                            </div>
                        </div>


                        <div class="progress ">
                            <div class=" progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                JavaScript / JQuery
                            </div>
                        </div>


                        <div class="progress ">
                            <div class=" progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                WordPress
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-md-offset-1">
                    <div class="skills-info">
                        <h2>About The Team</h2>
                        <p class="lead">We Are Specialised Desiging And Programming Team Passionate About Web Design And
                            Creatin Digital Ideas We Will Transfer Your Idea To A Digital Dream And Make Your Wish Come
                            True</p>
                        <button type="button" class="btn btn-primary">Talk With A Professional</button>
                    </div>
                </div>
            </div>
        </div>
    </section>--!>
    <!-- End Section Skill-progress -->


    <!-- Start Section contact -->
    <!--<section class="contact text-center wow zoomInLeft " data-wow-duration="2s" data-wow-offset="200">
        <div class="contact-layout">

            <div class="container">
                <i class="fa fa-headphones fa-5x color-theme" aria-hidden="true"></i>
                <h2 class="h1">
                    Tell Us What You Fell
                </h2>

                <p class="lead">
                    Feel Free To Contact Us Anytime
                </p>

                <!-- Start form-->
    <!--<form action="index.html" method="post">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">

                            <div class="form-group">
                                <input class="input-lg form-control" type="text" name="username" placeholder="Username" value="">
                            </div>

                            <div class="form-group">
                                <input class="input-lg form-control" type="text" name="email" placeholder="E-Mail" value="">
                            </div>

                            <div class="form-group">
                                <input class="input-lg form-control" type="text" name="cell-phone" placeholder="Cell PHone" value="">
                            </div>

                        </div>

                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <textarea class="form-control input-lg" placeholder="Your Message"></textarea>
                            </div>
                            <button class="btn btn-danger btn-block btn-lg">Contact Us</button>
                        </div>

                    </div>
                </form>
                <!-- End form -->

    <!--
            </div>
        </div>
    </section>
-->

    <!-- End Section contact -->

    <!-- Start Section our-client -->

    <!--
    <section class="our-client">
        <div class="container">

            <div class="col-md-2 col-xs-4">
                <img class="img-responsive wow zoomInLeft " data-wow-duration="2s" data-wow-offset="200" data-wow-delay=".5s" src="https://image.ibb.co/ce9Uh5/bbc.png" alt="BBC" title="BBC">
            </div>


            <div class="col-md-2 col-xs-4">
                <img class="img-responsive wow zoomInLeft " data-wow-duration="2s" data-wow-offset="200" data-wow-delay="1s" src="https://image.ibb.co/mBv225/cnn.png" alt="CNN" title="CNN">
            </div>


            <div class="col-md-2 col-xs-4">
                <img class="img-responsive wow zoomInLeft " data-wow-duration="2s" data-wow-offset="200" data-wow-delay="1.5s" src="https://image.ibb.co/bBbWvQ/forbes.png" alt="Forbes" title="Forbes">
            </div>


            <div class="col-md-2 col-xs-4">
                <img class="img-responsive wow zoomInLeft " data-wow-duration="2s" data-wow-offset="200" data-wow-delay="2s" src="https://image.ibb.co/nBq225/techradar.png" alt="Techradar" title="Techradar">
            </div>


            <div class="col-md-2 col-xs-4">
                <img class="img-responsive wow zoomInLeft " data-wow-duration="2s" data-wow-offset="200" data-wow-delay="2.5s" src="https://image.ibb.co/nunt9k/wired.png" alt="Wired" title="Wired">
            </div>


            <div class="col-md-2 col-xs-4">
                <img class="img-responsive wow zoomInLeft " data-wow-duration="2s" data-wow-offset="200" data-wow-delay="3s" src="https://image.ibb.co/cuKJaQ/wsj.png" alt="WSJ" title="WSJ">
            </div>

        </div>
    </section>
-->

    <!-- End Section our-client -->

    <!-- Start Section footer -->
    <section class="footer wow slideInLeft " data-wow-duration="2s" data-wow-offset="200">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 sitemap">
                    <h2 class="color-theme">
                        Sitemap
                    </h2>

                    <ul class="list-unstyled list-inline three-columns">
                        <li>Home</li>
                        <li>Pendaftaran</li>
                        <li>Galeri</li>
                        <li>Jurusan</li>
                        <li>Hubungi</li>
                        <li>Masuk</li>
                    </ul>

                    <ul class="list-unstyled list-inline Social-Media">
                        <li><img src="https://image.ibb.co/eZKjFQ/facebook.png" width="48" height="48" alt="Facebook" /></li>
                        <li><img src="https://image.ibb.co/iRZvN5/gplus.png" width="48" height="48" alt="Google Plus" /></li>
                        <li><img src="https://image.ibb.co/mshFN5/twitter.png" width="48" height="48" alt="Twitter" /></li>
                        <li><img src="https://image.ibb.co/kt4jFQ/pinterest.png" width="48" height="48" alt="Pinterest" />
                        </li>
                        <li><img src="https://image.ibb.co/mCXFN5/rss.png" width="48" height="48" alt="Rss" /></li>
                        <li><img src="https://image.ibb.co/d6afpk/email.png" width="48" height="48" alt="Email" /></li>
                    </ul>

                </div>
                <div class="col-md-4 col-xs-12 awesome-work">
                    <h2 class="color-theme">
                        SMK MERCUSUAR JAKARTA
                    </h2>
                    <img class="img-thumbnail img-responsive" src="logonew.png" width="550" height="200">
                </div>

            </div>
        </div>
        <div class="copyright text-center hidden-xs hidden-sm h3">
            Copyrigth &copy;2019 <span class="color-theme ">Noer</span>.Inc
        </div>

        <div class="copyright text-center visible-xs  visible-sm h5">
            Copyrigth &copy;2019 <span class="color-theme ">Noer</span>.Inc
        </div>
    </section>

    <!-- End  footer -->

    <!-- Start loading-page-->

    <section class="loading-page">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </section>
    <!-- End loading-page -->




    <!-- Start Section Scroll To top -->
    <section class="scroll-top-arrow">
        <i class="fa fa-arrow-up fa-3x background-color-theme" aria-hidden="true"></i>
    </section>
    <!-- End Section  Scroll To top -->

    <!-- Start Section about -->

    <!-- End Section about -->

    <!-- jquery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- bootstrap library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- WOW library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- nicescroll File -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <!-- WOW JS File -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- Main JavaScript File -->
    <script src="js/MyJSFunc.js"></script>

    <!--       onload="function()" class="hold-transition login-page" style="background-image: url(bg.jpeg); background-size: cover;">-->
    <!--
        <header>
            <div class="menu">
                <div class="bar"></div>
            </div>
            <div class="overlay"></div>
            <nav>
                <a href="index.php" class="brand">SMK MERCUSUAR JAKARTA</a>
                <ul>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-text="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-text="Info Pendaftaran">Info Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-text="Galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-text="Jurusan">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a href="login/" class="nav-link" data-text="Login">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a href="daftar/" class="nav-link" data-text="Pendaftaran">Pendaftaran</a>
                    </li>
                </ul>
            </nav>
        </header>
-->

    <!--
    <script src="home.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
-->


</body>

</html>