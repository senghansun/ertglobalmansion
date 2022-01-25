<?php
	require 'ertdata.php';
	$id = $_GET['id'];
	
	for($i=1; $i<=count($about); $i++){
		if($about[$i]['t_id']==$id){
			$k = $i;
		}
	}
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
              <h2><a href="index.html"><img src="img/globalLogo.jpg" alt="e-RT UMN" width="15%"/></a><strong><span class="colored"> e-RT </span></strong></h2>
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
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.php">Beranda</a> <i class="icon-angle-right"></i></li>
                <li><a href="#">Tentang</a> <i class="icon-angle-right"></i></li>
				<li class="active"><?php echo $about[$k]['aboutName'] ?></li>
              </ul>
              <h2><?php echo $about[$k]['aboutName']; ?> RW 14 Global Mansion</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">

          <div class="span12">
            <h4 class="title"><strong>Tentang</strong> Kami</h4>
            <p>
              <?php
				echo $about[$k]['aboutVal'];
			  ?>
			</p>
            <blockquote>
              <?php
				echo $about[$k]['aboutSlogan'];
			  ?>
			</blockquote>

          </div>

        </div>

        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>
        <!-- end divider -->

        <div class="row team">
          <div class="span12">
            <h4 class="title">Para Pengurus <strong><?php echo $about[$k]['aboutName']; ?></strong></h4>
          </div>

          <div class="span12">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="uploads/about/<?php echo $about[$k]['aboutPhoto1']; ?>" alt="" width=250/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong><?php echo $about[$k]['aboutPIC1']; ?></strong></p>
                <p>
                  <?php echo $about[$k]['aboutTitle1']; ?> RW 14
                </p>
				<p>
                  <a href="tel:<?php echo $about[$k]['aboutContact1']; ?>"><i class="icon-phone"></i> <?php echo $about[$k]['aboutContact1']; ?></a>
                </p>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <img src="uploads/about/Pak Toni.jpg" alt="" width=150/>
			  <div class="roles aligncenter">
                <p class="lead"><strong><?php echo $about[$k]['aboutPIC2']; ?></strong></p>
                <p>
                  <?php echo $about[$k]['aboutTitle2']; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <img src="uploads/about/Pak Krisna.jpg" alt="" width=150/>
			  <div class="roles aligncenter">
                <p class="lead"><strong><?php echo $about[$k]['aboutPIC3']; ?></strong></p>
                <p>
                  <?php echo $about[$k]['aboutTitle3']; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <img src="uploads/about/Pak Nanang.jpeg" alt="" width=150/>
			  <div class="roles aligncenter">
                <p class="lead"><strong><?php echo $about[$k]['aboutPIC4']; ?></strong></p>
                <p>
                  <?php echo $about[$k]['aboutTitle4']; ?>
                </p>
              </div>
            </div>
          </div>
		  <div class="span3">
            <div class="team-box">
              <img src="uploads/about/Ci Rika.jpg" alt="" width=150/>
			  <div class="roles aligncenter">
                <p class="lead"><strong><?php echo $about[$k]['aboutPIC5']; ?></strong></p>
                <p>
                  <?php echo $about[$k]['aboutTitle5']; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="blankline30"></div>

      </div>
    </section>

    <?php
		include("sub-footer.php");
	?>
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