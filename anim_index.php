<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Jackson Pollock Playground Magnafique</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/animation-delay.css">
    <link rel="stylesheet" href="assets/css/hamburgers.min.css">
    <link href="assets/animsition/dist/css/animsition.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">

  </head>
  <body class="bg-dark">
<div class="animsition-overlay" data-animsition-overlay="true">

 
<!-- Overlay Navigation Menu -->
<div class="overlay">
  <nav class="overlay-menu">
    <ul>
      <li><a class="animsition-link" href="anim_page2.php">About Us</a></li>
      <li><a href="#">Comic</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Patreon</a></li>
      <li><img class="close-menu img-fluid" width="100px" src="assets/img/alter_locus.png" alt=""/></li>
    </ul>
  </nav>
</div>

<!-- Navbar -->
<div class="navbar">
  <div class="navbar-buttons">
    <button class="hamburger hamburger--spring" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </div>
</div>

<div class="mouse-bg">
  <div id="background" class="background-anim animated fadeIn">
  </div>
    <div id="foreground" class="right-anim animated-sloow animation-delay-20 slideInLeft">   
  </div>
  <div id="fore-foreground" class="left-anim animated animation-delay-18 fadeInRight">
  </div>

  
  <div class="overlay-anim animated-sloow fadeInOverlay animation-delay-35"></div>
  <div id="fore-fore-foreground" class="embers-anim animated-sloow fadeIn animation-delay-15">
  </div>
</div>

<div class="site-wrap animated animation-delay-25 fadeIn">
  <div class="container-fluid section-wrap-h">
    <div class="row content-header d-flex align-items-center">
      <div class="col-lg-2 col-md-12 offset-lg-3 text-lg-right text-center text-sm-center">
        <img class="img-fluid" src="assets/img/logo_locus.png" alt="">
      </div>
      <div class="col-lg-7 col-md-12 alter">
        <h1 class="display-5 align-self-start text-lg-left text-center">Alter Locus</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 offset-lg-5 col-md-10 offset-md-2 text-right">
        <p class="content-p color-light">
          Catchy comic introduction
         </p>
      </div>
    </div>
    <div class="row scrolldown text-center">
      <div id="section05" class="text-center arrow-container animated fadeInDown">
        <a href="#section06"><span></span>Scroll</a>
      </div>
    </div>

    
  </div>
</div>

</div>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="assets/js/jquery-slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/tether.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/mouse.parallax.js"></script>
    <script src="assets/js/jquery.smoothState.min.js"></script>
    <script src="assets/animsition/dist/js/animsition.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
    $(document).ready(function() {
  $(".animsition-overlay").animsition({
    inClass: 'overlay-slide-in-bottom',
    outClass: 'overlay-slide-out-bottom',
    inDuration: 2800,
    outDuration: 1000,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 10000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : true,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});</script>
  </body>
</html>