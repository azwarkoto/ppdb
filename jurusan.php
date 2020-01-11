<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Jurusan</title>
      <link href='logonew.png' rel='shortcut icon'>
      <link rel="stylesheet" href="css/style2.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
</head>
<body>
     <div class="container">
            <nav>
                  <input type="checkbox" id="nav" class="hidden">
                  <label for="nav" class="nav-btn">
                        <i></i>
                        <i></i>
                        <i></i>
                  </label>
                  <div class="logo">
                        <a href="index.php"><img src="logonew.png" alt="" style="height: 62px;"></a>
                  </div>
                  <div class="nav-wrapper">
                        <ul>
                              <li><a href="daftar/">PENDAFTARAN</a></li>
                              <li><a href="#">INFO PENDAFTARAN</a></li>
                              <li><a href="jurusan.php">JURUSAN</a></li>
                              <li><a href="#">GALERI</a></li>
                              <li><a href="#">HUBUNGI</a></li>
                              <li><a href="login/">LOGIN</a></li>
                        </ul>
                  </div>
            </nav>
    </div>
      <div class="slide active">
            <div class="card">
                  <div class="card-img" id="img01"></div>
                  <div class="card-content">
                        <p class="card-theme">Teknik Audio Video</p>
                        <h2 class="card-header">Amongst the giants</h2>
                        <p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellendus vel neque iure aut, eligendi aliquid vero facilis, quia repellat.</p>
                  <a class="card-link">Read</a>
                  </div>
            </div>
      </div>
      <div class="slide">
            <div class="card">
                  <div class="card-img" id="img02"></div>
                  <div class="card-content">
                        <p class="card-theme">Teknik Kendaraan Ringan</p>
                        <h2 class="card-header">Home Outdoors</h2>
                        <p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellendus vel neque iure aut, eligendi aliquid vero facilis, quia repellat.</p>
                  <a class="card-link">Read</a>
                  </div>
            </div>
      </div>
      <div class="slide">
            <div class="card">
                  <div class="card-img" id="img03"></div>
                  <div class="card-content">
                        <p class="card-theme">Multimedia</p>
                        <h2 class="card-header">A Mystic Walk</h2>
                        <p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellendus vel neque iure aut, eligendi aliquid vero facilis, quia repellat.</p>
                  <a class="card-link">Read</a>
                  </div>
            </div>
      </div>
      <div class="prevnext">
            <button class="pn-btn" id="prev"></button>
            <button class="pn-btn" id="next"></button>
      </div>
      <script type="text/javascript">

      var $activeSlide = $('.active'),
      $homeSlide = $(".slide"),
      $slideNavPrev = $("#prev"),
      $slideNavNext = $("#next");

      function init() {
            TweenMax.set($homeSlide.not($activeSlide), {autoAlpha: 0});
            TweenMax.set($slideNavPrev, {autoAlpha: 0.2});
      }

      init();

      function goToNextSlide(slideOut, slideIn, slideInAll) {
            var t1 = new TimelineLite(),
            slideOutContent = slideOut.find('.card-content'),
            slideInContent = slideIn.find('.card-content'),
            slideOutImg = slideOut.find('.card-img'),
            slideInImg = slideIn.find('.card-img'),
            index = slideIn.index(),
            size = $homeSlide.length;
            console.log(index);

            if(slideIn.length !== 0) {
            t1
            .set(slideIn, {autoAlpha: 1, className: '+=active'})
            .set(slideOut, {className: '-=active'})
            .to(slideOutContent, 0.65, {y: "+=40px", ease: Power3.easeInOut}, 0)
            .to(slideOutImg, 0.65, {backgroundPosition :'bottom', ease: Power3.easeInOut}, 0)
            .to(slideInAll, 1, {y: "-=100%", ease: Power3.easeInOut}, 0)
            .fromTo(slideInContent, 0.65, {y: '-=40px'}, {y : 0, ease: Power3.easeInOut}, "-=0.7")
            .fromTo(slideInImg, 0.65, {backgroundPosition: 'top'}, {backgroundPosition: 'bottom', ease: Power3.easeInOut}, '-=0.7')
            }

            TweenMax.set($slideNavPrev, {autoAlpha: 1});

            if(index === size - 1){
                  TweenMax.to($slideNavNext, 0.3, {autoAlpha: 0.2, ease:Linear.easeNone});
            }
      };

      $slideNavNext.click(function(e) {
            e.preventDefault();

            var slideOut = $('.slide.active'),
            slideIn = $('.slide.active').next('.slide'),
            slideInAll = $('.slide');

            goToNextSlide(slideOut, slideIn, slideInAll);

      });

      function goToPrevSlide(slideOut, slideIn, slideInAll) {
            var t1 = new TimelineLite(),
            slideOutContent = slideOut.find('.card-content'),
            slideInContent = slideIn.find('.card-content'),
            slideOutImg = slideOut.find('.card-img'),
            slideInImg = slideIn.find('.card-img'),
            index = slideIn.index(),
            size = $homeSlide.length;

            if(slideIn.length !== 0) {
            t1
            .set(slideIn, {autoAlpha: 1, className: '+=active'})
            .set(slideOut, {className: '-=active'})
            .to(slideOutContent, 0.65, {y: "-=40px", ease: Power3.easeInOut}, 0)
            .to(slideOutImg, 0.65, {backgroundPosition :'top', ease: Power3.easeInOut}, 0)
            .to(slideInAll, 1, {y: "+=100%", ease: Power3.easeInOut}, 0)
            .fromTo(slideInContent, 0.65, {y: '+=40px'}, {y : 0, ease: Power3.easeInOut}, "-=0.7")
            .fromTo(slideInImg, 0.65, {backgroundPosition: 'bottom'}, {backgroundPosition: 'top', ease: Power3.easeInOut}, '-=0.7')
            }

            TweenMax.set($slideNavPrev, {autoAlpha: 1});

            if(index === 0){
                  TweenMax.to($slideNavPrev, 0.3, {autoAlpha: 0.2, ease:Linear.easeNone});
            }
      };

      $slideNavPrev.click(function(e) {
            e.preventDefault();

            var slideOut = $('.slide.active'),
            slideIn = $('.slide.active').prev('.slide'),
            slideInAll = $('.slide');

            goToPrevSlide(slideOut, slideIn, slideInAll);
      
      });


      </script>
</body>
</html>
