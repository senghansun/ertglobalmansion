<?php
	require 'ertdata.php';
	$comCount = count($community);
	$sum15Years = 0;
	$sum64Years = 0;
	$sum0Years = 0;
	$sumRT01 = 0;
	$sumRT02 = 0;
	$sumRT03 = 0;
	$sumRT04 = 0;
	$sumRT05 = 0;
	$sumRT06 = 0;
	$sumRT07 = 0;
	$sumRT08 = 0;
	$sumLRT01 = 0;
	$sumPRT01 = 0;
	$sumLRT02 = 0;
	$sumPRT02 = 0;
	$sumLRT03 = 0;
	$sumPRT03 = 0;
	$sumLRT04 = 0;
	$sumPRT04 = 0;
	$sumLRT05 = 0;
	$sumPRT05 = 0;
	$sumLRT06 = 0;
	$sumPRT06 = 0;
	$sumLRT07 = 0;
	$sumPRT07 = 0;
	$sumLRT08 = 0;
	$sumPRT08 = 0;
	$sumKKRT01 = 0;
	$sumNKKRT01 = 0;
	$sumKKRT02 = 0;
	$sumNKKRT02 = 0;
	$sumKKRT03 = 0;
	$sumNKKRT03 = 0;
	$sumKKRT04 = 0;
	$sumNKKRT04 = 0;
	$sumKKRT05 = 0;
	$sumNKKRT05 = 0;
	$sumKKRT06 = 0;
	$sumNKKRT06 = 0;
	$sumKKRT07 = 0;
	$sumNKKRT07 = 0;
	$sumKKRT08 = 0;
	$sumNKKRT08 = 0;
	$comJobs = array();
	for($i=1; $i<=$comCount; $i++){
		$dateString = $community[$i]['comBorndate'];
		$years = round((time()-strtotime($dateString))/(3600*24*365.25));
		if($years <= 15){
			$sum15Years++;
		} else if(15 < $years and $years <= 64){
			$sum64Years++;
		} else {
			$sum0Years++;
		}
		$comGroup = $community[$i]['comGroup'];
		if($comGroup == 'RT01') {
			$sumRT01++;
			if($community[$i]['comGender'] == 'Laki-laki')
				$sumLRT01++;
			else $sumPRT01++;
			if($community[$i]['comActive'] == 'Aktif KK')
				$sumKKRT01++;
			else $sumNKKRT01++;
		} else if($comGroup == 'RT02') {
			$sumRT02++;
			if($community[$i]['comGender'] == 'Laki-laki')
				$sumLRT02++;
			else $sumPRT02++;
			if($community[$i]['comActive'] == 'Aktif KK')
				$sumKKRT02++;
			else $sumNKKRT02++;
		} else if($comGroup == 'RT03') {
			$sumRT03++;
			if($community[$i]['comGender'] == 'Laki-laki')
				$sumLRT03++;
			else $sumPRT03++;
			if($community[$i]['comActive'] == 'Aktif KK')
				$sumKKRT03++;
			else $sumNKKRT03++;
		} else if($comGroup == 'RT04') {
			$sumRT04++;
			if($community[$i]['comGender'] == 'Laki-laki')
				$sumLRT04++;
			else $sumPRT04++;
			if($community[$i]['comActive'] == 'Aktif KK')
				$sumKKRT04++;
			else $sumNKKRT04++;
		} else if($comGroup == 'RT05') {
			$sumRT05++;
			if($community[$i]['comGender'] == 'Laki-laki')
				$sumLRT05++;
			else $sumPRT05++;
			if($community[$i]['comActive'] == 'Aktif KK')
				$sumKKRT05++;
			else $sumNKKRT05++;
		} else if($comGroup == 'RT06') {
			$sumRT06++;
			if($community[$i]['comGender'] == 'Laki-laki')
				$sumLRT06++;
			else $sumPRT06++;
			if($community[$i]['comActive'] == 'Aktif KK')
				$sumKKRT06++;
			else $sumNKKRT06++;
		} else if($comGroup == 'RT07') {
			$sumRT07++;
			if($community[$i]['comGender'] == 'Laki-laki')
				$sumLRT07++;
			else $sumPRT07++;
			if($community[$i]['comActive'] == 'Aktif KK')
				$sumKKRT07++;
			else $sumNKKRT07++;
		} else if($comGroup == 'RT08') {
			$sumRT08++;
			if($community[$i]['comGender'] == 'Laki-laki')
				$sumLRT08++;
			else $sumPRT08++;
			if($community[$i]['comActive'] == 'Aktif KK')
				$sumKKRT08++;
			else $sumNKKRT08++;
		}
		array_push($comJobs,$community[$i]['comJob']);
	}
	$comJobCount = array_count_values($comJobs);
	$comJobTitle = array_keys($comJobCount);
	//print_r($comJobTitle);
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
                <li class="active">Statistik</li>
              </ul>
              <h2>Statistik RT/ RW 14</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">
		<h4 class="title"><strong>Statistik</strong> Resmi</h4>
		</div>
		
		<div class="row">
          <div class="span4">
            			
            <canvas id="myChart1" width="100" height="100"></canvas>

          </div>
		  <div class="span4">
            
            <canvas id="myChart2" width="100" height="100"></canvas>
			
          </div>
		  <div class="span4">
            
            <canvas id="myChart3" width="100" height="100"></canvas>
			
          </div>
		  
		</div>
		  
		<div class="row">
		  <div class="span8">
            			
            <canvas id="myChart4" width="100" height="50"></canvas>

          </div>
		  <div class="span4">
            
            <canvas id="myChart5" width="100" height="100"></canvas>
			
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  
  <script>
			/* var ctx = document.getElementById('myChart1').getContext('2d');
			var chart = new Chart(ctx, {
				// The type of chart we want to create
				type: 'line',

				// The data for our dataset
				data: {
					labels: ["January", "February", "March", "April", "May", "June", "July","August"],
					datasets: [{
						label: "Jumlah KK",
						backgroundColor: 'rgba(255, 99, 132, 0.2)',
						borderColor: 'rgb(255, 99, 132)',
						data: [180, 182, 175, 182, 191, 190, 195, 202],
					}]
				},

				// Configuration options go here
				options: {
					title: {
						display: true,
						text: 'PERTUMBUHAN JUMLAH KK TAHUN 2018'
					},
					responsive: true,
				}
			}); */

			var ctx = document.getElementById("myChart1").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ["RT 01", "RT 02", "RT 03", "RT 04", "RT 05", "RT 06","RT 07","RT 08"],
					datasets: [{
						label: '# KK',
						data: [<?php echo $sumKKRT01; ?>, <?php echo $sumKKRT02; ?>, <?php echo $sumKKRT03; ?>, <?php echo $sumKKRT04; ?>, <?php echo $sumKKRT05; ?>, <?php echo $sumKKRT06; ?>, <?php echo $sumKKRT07; ?>, <?php echo $sumKKRT08; ?>],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(175, 192, 92, 0.2)',
							'rgba(53, 102, 55, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(175, 192, 92, 1)',
							'rgba(53, 102, 55, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					title: {
						display: true,
						text: '# Kepala Keluarga Tiap RT'
					},
					responsive: true,
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
			
			data = {
				datasets: [{
					data: [<?php echo $sum15Years; ?>, <?php echo $sum0Years; ?>, <?php echo $sum64Years; ?>],
					backgroundColor: [
							'rgba(255, 99, 132, 0.4)',
							'rgba(54, 162, 235, 0.4)',
							'rgba(255, 206, 86, 0.4)'
						],
				}],

				// These labels appear in the legend and in the tooltips when hovering different arcs
				labels: [
					'Usia < 15',
					'Usia > 64',
					'15 <= Usia <= 64'
				]
			};
			// And for a doughnut chart
			var ctx = document.getElementById('myChart2').getContext('2d');
			var myDoughnutChart = new Chart(ctx, {
				type: 'doughnut',
				data: data,
				options: {
					title: {
						display: true,
						text: '# Warga berdasarkan Usia'
					},
					responsive: true
					}
			});
			
			
			var ctx = document.getElementById("myChart3").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ["RT 01", "RT 02", "RT 03", "RT 04", "RT 05", "RT 06","RT 07","RT 08"],
					datasets: [{
						label: '# Warga',
						data: [<?php echo $sumRT01; ?>, <?php echo $sumRT02; ?>, <?php echo $sumRT03; ?>, <?php echo $sumRT04; ?>, <?php echo $sumRT05; ?>, <?php echo $sumRT06; ?>, <?php echo $sumRT07; ?>, <?php echo $sumRT08; ?>],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(175, 192, 92, 0.2)',
							'rgba(53, 102, 55, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(175, 192, 92, 1)',
							'rgba(53, 102, 55, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					title: {
						display: true,
						text: '# Warga Tiap RT'
					},
					responsive: true,
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
			
			
			var ctx = document.getElementById("myChart4").getContext('2d');
			var mybarChart = new Chart(ctx, {
				type: 'horizontalBar',
				data: {
					labels: ["RT 01", "RT 02", "RT 03", "RT 04", "RT 05", "RT 06","RT 07","RT 08"],
					datasets: [{
						label: 'Laki-laki',
						data: [<?php echo $sumLRT01; ?>, <?php echo $sumLRT02; ?>, <?php echo $sumLRT03; ?>, <?php echo $sumLRT04; ?>, <?php echo $sumLRT05; ?>, <?php echo $sumLRT06; ?>, <?php echo $sumLRT07; ?>, <?php echo $sumLRT08; ?>],
						backgroundColor: 'rgba(255, 99, 132, 0.2)',
						borderColor: 'rgba(255,99,132,1)',
						borderWidth: 1
					},{
						label: 'Perempuan',
						data: [<?php echo $sumPRT01; ?>, <?php echo $sumPRT02; ?>, <?php echo $sumPRT03; ?>, <?php echo $sumPRT04; ?>, <?php echo $sumPRT05; ?>, <?php echo $sumPRT06; ?>, <?php echo $sumPRT07; ?>, <?php echo $sumPRT08; ?>],
						backgroundColor: 'rgba(54, 162, 235, 0.2)',
						borderColor: 'rgba(54, 162, 235, 1)',
						borderWidth: 1
					}]
				},
				options: {
					title: {
						display: true,
						text: '# Rasio L/P Tiap RT'
					},
					responsive: true,
					scales: {
						xAxes: [{
							stacked: true,
						}],
						yAxes: [{
							stacked: true,
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
			
			
			data = {
				datasets: [{
					data: [<?php
						echo "'".implode("', '", $comJobCount)."'";
					?>],
					backgroundColor: [
							'rgba(255, 99, 132, 0.4)',
							'rgba(54, 162, 235, 0.4)',
							'rgba(24, 222, 35, 0.4)',
							'rgba(255, 206, 86, 0.4)'
						],
				}],

				// These labels appear in the legend and in the tooltips when hovering different arcs
				labels: [
					<?php
						echo "'".implode("', '", $comJobTitle)."'";
					?>
				]
			};
			// And for a doughnut chart
			var ctx = document.getElementById('myChart5').getContext('2d');
			var myDoughnutChart = new Chart(ctx, {
				type: 'pie',
				data: data,
				options: {
					title: {
						display: true,
						text: '# Status Pekerjaan Warga'
					},
					responsive: true
					}
			});
			</script>
			
</body>

</html>