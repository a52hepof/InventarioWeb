<!DOCTYPE html>
<html>

<html lang="en">
  <head>
    <title>Utilidades BP 324-&mdash; Material-Campamentos-Seguridad e higiene-Accidentes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/lightgallery.min.css">    
    
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="../css/swiper.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
    
  </head>



<div class="site-wrap">
    
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    

    <header class="site-navbar py-3" role="banner">
      
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">BP_324.<span class="text-primary"></span></a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="../index.html">Página Principal</a></li>
                <li class="has-children">
                  <a href="single.html">Servicios</a>
                  <ul class="dropdown">
                    <li><a href=../material.html>Material</a></li>
                    <li><a href="#">Campamentos</a></li>
                    <li><a href="#">Seguridad e higiene</a></li>
                    <li class="has-children">
                      <a href="#">Otros servicios</a>
                      <ul class="dropdown">
                        <li><a href="#">Fotografía</a></li>
                        <li><a href="#">B</a></li>
                        <li><a href="#">C</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="about.html">Sobre nosotros</a></li>
                <li><a href="contact.html">Contacto</a></li>
              </ul>
            </nav>
          </div>



          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>


   <body>



  

   <div class="py-3 mb-5 mt-5">
     <div class="container">

        <?php
        //system("chmod -R 777 ./mini");

         require_once('php-image-magician/php_image_magician.php');
          $magicianObj = new imageLib('../imagenesInventario/baterias.jpg');
          
          $magicianObj -> resizeImage(600, 400, 'auto');
           $magicianObj -> saveImage('bbbbaterias.jpg',90);
           //$magicianObj -> saveImage('mini/bbbbaterias.jpg',90);

            echo "<img src=mini/bbbbaterias.jpg width='20%'' >"; 
            //imagedestroy($dst);
             imagedestroy('baterias.jpg');
             unlink('../imagenesInventario/baterias.jpg');
	    ?>

    
          


     </div>
   </div>

  </body>


  <footer>
 


  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/swiper.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/picturefill.min.js"></script>
  <script src="../js/lightgallery-all.min.js"></script>
  <script src="../js/jquery.mousewheel.min.js"></script>

  <script src="../js/main.js"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>
    
  </footer>






</html>




