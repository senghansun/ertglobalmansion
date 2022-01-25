<?php
	require 'ertdata.php';
	$j = 1; $k = 1;
	for($i=1; $i<=count($service); $i++){
		if($service[$i]['serviceGroup'] == 1){
			$serv[$j]['serviceName'] = $service[$i]['serviceName'];
			$serv[$j]['serviceVal'] = nl2br($service[$i]['serviceVal']);
			$j++;
		}else{
			$infor[$k]['serviceName'] = $service[$i]['serviceName'];
			$infor[$k]['serviceVal'] = nl2br($service[$i]['serviceVal']);
			$k++;
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
                <li class="active">Layanan</li>
              </ul>
              <h2>Layanan yang Tersedia</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">

          <div class="span12">
            <h4 class="title"><strong>Layanan</strong> Umum</h4>
            <!-- start: Accordion -->
            <div class="accordion" id="accordion2">
              <?php
				for($i=1; $i<=count($serv); $i++){
			  ?>
				  <div class="accordion-group">
					<div class="accordion-heading">
					  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $i; ?>">
						<i class="icon-plus"></i><?php echo $serv[$i]['serviceName']; ?></a>
					</div>
					<div id="collapse<?php echo $i; ?>" class="accordion-body collapse">
					  <div class="accordion-inner">
						<?php echo $serv[$i]['serviceVal']; ?>
					  </div>
					</div>
				  </div>
			  <?php
				}
			  ?>
			  
            <!--end: Accordion -->
            </div>
          </div>

		  <div class="span12">
            <h4 class="title">Informasi <strong>Umum</strong></h4>
            <!-- start: Accordion -->
            <div class="accordion" id="accordion3">
              <?php
				for($i=1; $i<=count($infor); $i++){
			  ?>
				  <div class="accordion-group">
					<div class="accordion-heading">
					  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse<?php echo $i+count($serv); ?>">
						<i class="icon-plus"></i><?php echo $infor[$i]['serviceName']; ?></a>
					</div>
					<div id="collapse<?php echo $i+count($serv); ?>" class="accordion-body collapse">
					  <div class="accordion-inner">
						<?php echo $infor[$i]['serviceVal']; ?>
					  </div>
					</div>
				  </div>
			  <?php
				}
			  ?>
            <!--end: Accordion -->
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