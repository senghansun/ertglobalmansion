<?php
	require 'ertdata.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>e-RT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="img/globalLogo.jpg">

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="css/camera.css" rel="stylesheet" />
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">

    <!-- start header -->
    <header>
      
      <div class="container">

        <div class="row nomargin">
          <div class="span3">
            <div class="logo">
              <h2><a href="index.html"><img src="img/globalLogo.jpg" alt="e-RT UMN" width="15%"/></a><strong><span class="colored"> e-RT 06</span></strong></h2>
            </div>
          </div>
          <?php
			include("sidebar.php");
		  ?>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- section featured -->
    <section id="featured">

      <!-- slideshow start here -->

      <div class="camera_wrap" id="camera-slide">
	  <?php
		for($i=1;$i<=count($carousel);$i++){
			if($i%2 == 0){
	  ?>
        <!-- slide 1 here -->
        <div data-src="img/slides/camera/slide1/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span12 aligncenter">				
                  <h2 class="animated fadeInDown"><strong><span class="colored"><?php echo $carousel[$i]["carName"]; ?></span></strong></h2>
                  <p class="animated fadeInUp"><strong><?php echo $carousel[$i]["carVal"]; ?></strong></p>
                  <a href="<?php echo $carousel[$i]["carLink"]; ?>" class="btn btn-success btn-large animated fadeInUp page-scroll">
						<i class="icon-link"></i> Informasi lebih lanjut
					</a>				
                </div>
              </div>
            </div>
          </div>
        </div>
	  <?php
			}elseif($i%2 == 1){
	  ?>
        <!-- slide 2 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span4">
                  <img src="uploads/<?php echo $carousel[$i]["carPhoto"]; ?>" alt="" />
                </div>
                <div class="span8">
                  <h2 class="animated fadeInDown"><strong><span class="colored"><?php echo $carousel[$i]["carName"]; ?></span></strong></h2>
                  <p class="animated fadeInUp"><strong><?php echo $carousel[$i]["carVal"]; ?></strong></p>
                  <a href="<?php echo $carousel[$i]["carLink"]; ?>" class="btn btn-theme btn-large animated fadeInUp">
						<i class="icon-link"></i> Informasi lebih lanjut
					</a>
                </div>
              </div>
            </div>
          </div>
        </div>
	  <?php
			}else{
	  ?>
        <!-- slide 3 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span8">
                  <h2 class="animated fadeInDown"><strong><span class="colored"><?php echo $carousel[$i]["carName"]; ?></span></strong></h2>
                  <p class="animated fadeInUp"><strong><?php echo $carousel[$i]["carVal"]; ?></strong></p>
                  <a href="<?php echo $carousel[$i]["carLink"]; ?>" class="btn btn-theme btn-large animated fadeInUp">
						<i class="icon-link"></i> Informasi lebih lanjut
					</a>
                </div>
                <div class="span4">
                  <img src="uploads/<?php echo $carousel[$i]["carPhoto"]; ?>" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>
	  <?php
			}
		}
	  ?>
      </div>

      <!-- slideshow end here -->

    </section>
    <!-- /section featured -->

    <section id="content">
      <div class="container">

		<div class="row">
          <div class="aligncenter">
            <ul class="bxslider">
			<?php
				for($i=1;$i<=count($info);$i++){
			?>
              <li>
                <blockquote>
                  <?php
					echo $info[$i]["infoVal"];
				  ?>
                </blockquote>
              </li>
			<?php
				}
			?>
            </ul>
          </div>
        </div>
		
        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>

        <div class="row">
          <div class="span12 aligncenter"><div class="cta-text">
            <h2>Komentar warga dan pengurus RT tentang <span>situs</span> ini</h2>
            </div><div class="blankline30"></div>

            <ul class="bxslider">
			<?php
				for($i=1;$i<=count($comment);$i++){
			?>
              <li>
                <div class="testimonial-autor">
				<?php if(!empty($comment[$i]['commentPhoto']))
						echo "<img src='uploads/comment/".$comment[$i]['commentPhoto']."' alt='' width=150/>";
					else 
						echo "<img src='img/dummies/team/person.png' alt='' width=150/>";
				?>
                  <br/><br/><br/>
				  <h4><?php echo $comment[$i]['commentName']; ?></h4>
                  <p><?php echo $comment[$i]['commentTitle']; ?></p>
                </div>
				<blockquote>
                  <?php echo $comment[$i]['commentVal']; ?>
                </blockquote>
            <?php
				}
			?>   
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
			<center>
              <div class="box" style="background:#fff">
			  <a href="http://umn.ac.id"><img src="img/logo.png" alt="UMN" width="50%"/></a>
			  </div>
			  <br/>
			  <address>
					<strong>Universitas Multimedia Nusantara</strong><br>
					Jl. Scientia Boulevard, Gading Serpong<br>
					Tangerang - 15811, Indonesia
				</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <a href="http://umn.ac.id"><i class="icon-external-link"></i> umn.ac.id</a>
              </p>
			  </center>
            </div>
          </div>
          <div class="span9">
            <div class="widget">
              <h5 class="widgetheading">Tentang Aplikasi e-RT</h5>
              <p>
				Aplikasi ini merupakan salah satu sumbangsih nyata dari Universitas Multimedia Nusantara (UMN) dalam membangun dan meningkatkan kehidupan masyarakat Indonesia.
				Sebagai bagian dari Program Pengabdian kepada Masyarakat UMN, e-RT Global Mansion digagas oleh sivitas akademika UMN, yakni:<br/>
				<ul>
				<li>Seng Hansun</li>
				<li>Muhammad Salehuddin</li>
				<li>Marcel Bonar Kristanda</li>
				</ul>
				Selain itu, keberhasilan implementasi program ini juga didukung oleh berbagai pihak yang telah membantu, diantaranya:<br/>
				<ul>
				<li>Lembaga Penelitian dan Pengabdian kepada Masyarakat (LPPM) UMN</li>
				<li>Bapak Slamet selaku Ketua RW 14</li>
				<li>Bapak Wawan Triyanto dan Bapak Suradji Suryo</li>
				<li>Seluruh pengurus RT dan RW di Perumahan Global Mansion</li>
				<li>Seluruh warga Perumahan Global Mansion, Tangerang</li>
				</ul>
				Semoga aplikasi e-RT ini dapat menjadi jembatan yang menghubungkan warga dengan pengurus RT serta bermanfaat bagi seluruh warga sekitar.
			  </p>
            </div>
          </div>
        </div>
      </div>
      <?php
		include("sub-footer.php");
	  ?>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>

  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/camera/camera.js"></script>
  <script src="js/camera/setting.js"></script>

  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/inview.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>

</html>