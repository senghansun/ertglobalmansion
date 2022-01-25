<?php
	require 'ertdata.php';
	require 'ertadmin/dbconnect.php';
	
	$dGallery = "SELECT DISTINCT gallery_group FROM gallery";
	$rdGallery = mysqli_query($conn, $dGallery);
	$galGroup = array();
	while ($rowList = mysqli_fetch_array($rdGallery)) {				 
		array_push($galGroup, $rowList);
	}
	sort($galGroup);
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
                <li class="active">Galeri</li>
              </ul>
              <h2>Galeri Photo Kegiatan</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <!--
			<ul class="portfolio-categ filter">
              <li class="all active"><a href="#">All</a></li>
			  <?php
				/*
				for($i=0; $i<count($galGroup); $i++){
			  ?>
					<li class="<?php echo $galGroup[$i]['gallery_group']; ?>"><a href="#" title=""><?php echo $galGroup[$i]['gallery_group']; ?></a></li>
			  <?php
				}
				*/
			  ?>
            </ul>
			-->

            <div class="clearfix"></div>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="grid cs-style-4 portfolio">
				<?php
					for($i=1; $i<=count($gallery); $i++){
				?>
					  <li class="item-thumbs span3 design" data-id="id-<?php echo $i; ?>" data-type="<?php echo $gallery[$i]['galleryGroup'] ?>">
						<div class="item">
						  <figure>
							<div><img src="uploads/gallery/<?php echo $gallery[$i]['galleryPhoto']; ?>" alt="" title="<?php echo $gallery[$i]['galleryGroup'] ?>"/></div>
							<figcaption>
							  <div>
								<span>
									<a href="uploads/gallery/<?php echo $gallery[$i]['galleryPhoto']; ?>" data-pretty="prettyPhoto[gallery1]" title="<?php echo $gallery[$i]['galleryVal']; ?>"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
								<span>
									<a href="uploads/gallery/<?php echo $gallery[$i]['galleryPhoto']; ?>" download="<?php echo $gallery[$i]['galleryVal']; ?>"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
							  </div>
							</figcaption>
						  </figure>
						</div>
					  </li>
				<?php
					}
				?>

                </ul>
              </section>

            </div>
          </div>
        </div>
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