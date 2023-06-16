<?php $query = $this->db->get('profil');
     $this->db->where('id_profil',1); 
     $row = $query->row(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php echo"$row->nama_instansi"; ?></title>
    <meta name="description" content="" />
    <meta name="author" content="Tooplate" />
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>/tema/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Additional CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/tema/assets/css/fontawesome.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/tema/assets/css/tooplate-style.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/tema/assets/css/owl.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/tema/assets/css/lightbox.css" />
  </head>
<!--
Tooplate 2116 Blugoon
https://www.tooplate.com/view/2116-blugoon
-->
  <body>
 
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="<?php echo base_url() ?>/tema/assets/images/logo-image.jpg" alt="Blugoon by Tooplate" /></a>
            </div>
            <div class="author-content">
              <h4><?php echo"$row->alias"; ?></h4>
              <span><?php echo"$row->nama_instansi"; ?></span>
            </div>  
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">Beranda</a></li>
       
              </ul>
            </nav>
            <div class="social-network">
            <div class="white-button">
                    <a href="<?php echo base_url() ?>loginkaryawan" target='_blank'>Absensi Kariawan</a>
                  </div>  <br>
            <div class="white-button">
                   <a href="<?php echo base_url() ?>loginkaryawan/buta.php" target='_blank'>BUKA BUKU TAMU</a>
                 </div>  
            </div>
            <div class="copyright-text">
              <p>Copyright 2022 <?php echo"$row->nama_instansi"; ?><br>
              Design: Tooplate</p>
            </div>
          </div>
        </div>
      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
        <div class="top-header">
        	<img src="<?php echo base_url() ?>/tema/assets/images/aerobic-girls.jpg" alt="aerobic girls" />
        </div>
          <div class="section-heading">
            
            <h2><?php echo"$row->nama_instansi"; ?></h2>
            <div class="line-dec"></div>
            <span><?php echo"$row->no_hp"; ?> <?php echo"$row->email_instansi"; ?> <?php echo"$row->alamat"; ?></span>
          </div>
          <div class="right-image-post">
            <div class="row">
 
              <div class="col-md-8">
                <div class="left-text">
                  <h4><?php echo"$row->nama_instansi"; ?></h4>
                  <p><?php echo"$row->tentang"; ?></p>
       
                </div>
              </div>
              <div class="col-md-4">
                <div class="right-image">
                  <img src="<?php echo base_url() ?>/tema/assets/images/mountain-reflection.jpg" alt="Mountain Reflection" />
                </div>
              </div>
              
            </div>
          </div>
     
        </div>
      </section>
      
    </div>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>/tema/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/tema/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url() ?>/tema/assets/js/isotope.min.js"></script>
    <script src="<?php echo base_url() ?>/tema/assets/js/owl-carousel.js"></script>
    <script src="<?php echo base_url() ?>/tema/assets/js/lightbox.js"></script>
    <script src="<?php echo base_url() ?>/tema/assets/js/custom.js"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
  </body>
</html>