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
    <link rel="stylesheet" href="css/galeri.css">

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
                            <li><a href="#">Teknik Audio Video</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Multimedia</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Teknik Kendaraan Ringan</a></li>
                        </ul>
                    </li>


                    <li><a href="#">Hubungi</a></li>
                    <li><a href="login/">Masuk</a></li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- End Navbar -->



    <!--Start Galeri-->
    
    <div class="album-sec">
        <container>
            <div class="row">
                <div class="col-md-12">
                    <div class="header text-center">
                        <h2>Galeri SMK MERCUSUAR JAKARTA</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="single-album">
                        <div class="album-img">
                            <img src="turnamen.jpg" alt="img1">
                        </div>
                        <div class="album-content">
                            <div class="album-info">
                                <h3>Turnamen</h3>
                                <p>Futsal Antar Sekolah</p>
                            </div>
                            <p class="album-text">Turnamen futsal yang diadakan oleh SMK Mercusuar Jakarta, dengan sambutan kepala sekolah.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="single-album">
                        <div class="album-img">
                            <img src="studi.jpg" alt="img3">
                        </div>
                        <div class="album-content">
                            <div class="album-info">
                                <h3>Studi Wisata</h3>
                                <p>Kota Tua</p>
                            </div>
                            <p class="album-text">Studi untuk mengetahui dan mengenal sejarah kota tua Jakarta</p>
                        </div>
                    </div>
                </div>
                
                
            </div>           
        </container>
    </div>
    
    
    <!--End Galeri-->


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

                <div class="col-md-4 col-xs-12 Latest-Articles">
                    <h2 class="color-theme">
                        Artikel Terbaru
                    </h2>

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="https://image.ibb.co/moct9k/01.jpg" width="64" height="64" alt="Image 01">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Programming</h3>
                            This Is Some Text About Programming Describe The Media Of Bootstrap 4.3.1
                        </div>
                    </div>

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="https://image.ibb.co/bztph5/02.jpg" width="64" height="64" alt="Image 02">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Coding</h3>
                            This Is Some Text About Coding Describe The Media Of Bootstrap 4.3.1
                        </div>
                    </div>


                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="https://image.ibb.co/ftkD9k/03.jpg" width="64" height="64" alt="Image 03">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Web Design</h3>
                            This Is Some Text About Web Design Describe The Media Of Bootstrap 4.3.1
                        </div>
                    </div>

                </div>

                <div class="col-md-4 col-xs-12 awesome-work">
                    <h2 class="color-theme">
                        SMK MERCUSUAR JAKARTA
                    </h2>
                    <img class="img-thumbnail img-responsive" src="logo.png" width="550" height="200">
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

</body>

</html>