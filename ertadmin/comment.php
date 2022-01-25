<?php
	session_start();
	if($_SESSION["login"]==1){
		require 'dbconnect.php';
		
		$query = "SELECT * FROM home_comment";
		$result = mysqli_query($conn, $query);
		$i=1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="../img/globalLogo.jpg">

  <title>Admin Page | e-RT</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  
  <!-- CSS -->
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -110px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 110px;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }
	  
	  .input-group-addon {
			min-width:10vw;// if you want width please write here //
		}
		
		.modal-confirm {		
			color: #636363;
			width: 400px;
		}
		.modal-confirm .modal-content {
			padding: 20px;
			border-radius: 5px;
			border: none;
			text-align: center;
			font-size: 14px;
		}
		.modal-confirm .modal-header {
			border-bottom: none;   
			position: relative;
		}
		.modal-confirm h4 {
			text-align: center;
			font-size: 26px;
			margin: 30px 0 -10px;
		}
		.modal-confirm .close {
			position: absolute;
			top: -5px;
			right: -2px;
		}
		.modal-confirm .modal-body {
			color: #999;
		}
		.modal-confirm .modal-footer {
			border: none;
			text-align: center;		
			border-radius: 5px;
			font-size: 13px;
			padding: 10px 15px 25px;
		}
		.modal-confirm .modal-footer a {
			color: #999;
		}		
		.modal-confirm .icon-box {
			width: 80px;
			height: 80px;
			margin: 0 auto;
			border-radius: 50%;
			z-index: 9;
			text-align: center;
			border: 3px solid #f15e5e;
		}
		.modal-confirm .icon-box i {
			color: #f15e5e;
			font-size: 46px;
			display: inline-block;
			margin-top: 13px;
		}
		.modal-confirm .btn {
			color: #fff;
			border-radius: 4px;
			background: #60c7c1;
			text-decoration: none;
			transition: all 0.4s;
			line-height: normal;
			min-width: 120px;
			border: none;
			min-height: 40px;
			border-radius: 3px;
			margin: 0 5px;
			outline: none !important;
		}
		.modal-confirm .btn-info {
			background: #c1c1c1;
		}
		.modal-confirm .btn-info:hover, .modal-confirm .btn-info:focus {
			background: #a8a8a8;
		}
		.modal-confirm .btn-danger {
			background: #f15e5e;
		}
		.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
			background: #ee3535;
		}
	</style>

	<!-- File Upload -->
	<link href="../kartik-v-bootstrap-fileinput-6a94917/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />


</head>

<body>
  <!-- Part 1: Wrap all page content here -->
  <div id="wrap">

  <!-- Begin page content -->
  <!-- container section start -->
  <section id="container" class="">

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="adminPage.php" class="logo">e-RT <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown" align="right">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#" >
				<img src="../img/globalLogo.jpg" width=10%/>
				<span class="username"><?php echo $_SESSION["username"]; ?></span>
				<b class="caret"></b>
			</a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#" data-toggle="modal" data-target="#myModal"><i class="icon_pencil-edit"></i> Change Password</a>
              </li>
              <li>
                <a href="logout.php"><i class="icon_refresh"></i> Log Out</a>
              </li>
              <li>
                <a href="documentation.pdf"><i class="icon_documents_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <?php
		include('sidebar.php');
	?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>You're here</li>
              <li><i class="fa fa-laptop"></i><a href="comment.php">Komentar</a></li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
		  
		  <button class="btn btn-primary" data-toggle="modal" data-target="#addCompModal">
	     		Add New
  		  </button><br/><br/>
		
		  <div class="table-responsive">
		  <?php
			$out = '
				<table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th>#</th>
                    <th>Nama Komponen</th>
                    <th>Isi Teks</th>
					<th>Photo</th>
                    <th>Jabatan</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
			';
					
				while($row = mysqli_fetch_assoc($result)){
					$out .= "<tr class='trID_".$row['home_comment_id']."'>
						<td>".$i."</td>
						<td class='td_name'>".$row['home_comment_name']."</td>
						<td class='td_val'>".$row['home_comment_val']."</td>
						<td class='td_photo'>".$row['home_comment_photo']."</td>
						<td class='td_title'>".$row['home_comment_title']."</td>
						<td>
						  <div class='btn-group'>
							<button class='btn btn-success btn_edit'><i class='icon_pencil-edit'></i></button>
							<button class='btn btn-danger btn_del'><i class='icon_close_alt2'></i></button>
						  </div>
						</td>
					</tr>";
					$i++;
				}
				$out .= '</tbody></table>';
				echo $out;
			  ?>
			  </div>
          </div>
          
        </div>
        <!--/.row-->
      </section>
	  
    </section>
    <!--main content end-->
  </section>
  <div id="push"></div>
  </div>
  
  <!-- change password modal -->
  <!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Ubah Password</h4>
		  </div>
		  <div class="modal-body">
			<form action="changePasswd.php" method="post">
			  <div class="login-wrap">
				<div class="input-group">
				  <span class="input-group-addon"><i class="icon_key"></i></span>
				  <input type="password" class="form-control" name="oldPassword" placeholder="Password Lama">
				</div>
				<div class="input-group">
				  <span class="input-group-addon"><i class="icon_key_alt"></i></span>
				  <input type="password" class="form-control" name="newPassword" placeholder="Password Baru">
				</div>
				<button class="btn btn-primary btn-block" type="submit">Simpan</button>
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- add new component modal -->
	<div id="addCompModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Tambah Komponen Baru</h4>
		  </div>
		  <div class="modal-body">
			<form action="addComponentComment.php" method="post">
			  <div class="login-wrap">
				<div class="input-group">
				  <span class="input-group-addon">Nama Komponen</span>
				  <input type="text" class="form-control" name="comName" placeholder="Isi dengan nama komponen baru"/>
				</div>
				<div class="input-group">
				  <span class="input-group-addon">Isi Teks</span>
				  <textarea class="form-control" name="comVal" rows="5" placeholder="Isi dengan informasi terkait"></textarea>
				</div>
				<div class="input-group">
				  <span class="input-group-addon">Photo</span>
				  <input type="file" class="file-loading" id="comPhoto" name="comPhoto" accept="video/*,image/*" data-allowed-file-types='["video","image"]' />
				</div>
				<div class="input-group">
				  <span class="input-group-addon">Jabatan</span>
				  <input type="text" class="form-control" name="comTitle" placeholder="Isi dengan jabatan/ posisi komentator"/>
				</div>
				<br/>
				<button class="btn btn-primary btn-block" type="submit">Simpan</button>
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
		  </div>
		</div>

	  </div>
	</div>
	
  <!-- edit component modal -->
	<div id="editCompModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Ubah Komponen</h4>
		  </div>
		  <div class="modal-body">
			<form action="editComponentComment.php" method="post">
			  <div class="login-wrap">
				<div class="input-group">
				  <span class="input-group-addon">Nama Komponen</span>
				  <input type="text" class="form-control" name="comName" id="comEditName" />
				</div>
				<div class="input-group">
				  <span class="input-group-addon">Isi Teks</span>
				  <textarea class="form-control" name="comVal" rows="5" id="comEditVal"></textarea>
				</div>
				<div class="input-group">
				  <span class="input-group-addon">Photo</span>
				  <input type="file" class="file-loading" id="comEditPhoto" name="comPhoto" accept="video/*,image/*" data-allowed-file-types='["video","image"]' />
				</div>
				<div class="input-group">
				  <span class="input-group-addon">Jabatan</span>
				  <input type="text" class="form-control" name="comTitle" id="comEditTitle"/>
				</div>
				<br/>
				<input type="hidden" name="comId" id="comEditId">
				<button class="btn btn-primary btn-block" type="submit">Ubah</button>
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- delete component modal -->
	<div id="delCompModal" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>				
				<h4 class="modal-title">Apakah Anda yakin?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Anda yakin untuk menghapus komponen ini? Proses ini tidak bisa dikembalikan lagi.</p>
			</div>
			<div class="modal-footer">
				<form action="delComponentComment.php" method="post">
					<input type="hidden" name="comId" id="comDelId">
					<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-danger">Hapus</button>
				</form>
			</div>
		</div>
	  </div>
	
	</div>
	
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>

	<!-- File Upload -->
	<!-- piexif.min.js is only needed for restoring exif data in resized images and when you 
		  wish to resize images before upload. This must be loaded before fileinput.min.js -->
	<script src="../kartik-v-bootstrap-fileinput-6a94917/js/plugins/piexif.min.js" type="text/javascript"></script>
	<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
		 This must be loaded before fileinput.min.js -->
	<script src="../kartik-v-bootstrap-fileinput-6a94917/js/plugins/sortable.min.js" type="text/javascript"></script>
	<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
		 This must be loaded before fileinput.min.js -->
	<script src="../kartik-v-bootstrap-fileinput-6a94917/js/plugins/purify.min.js" type="text/javascript"></script>
	<!-- the main fileinput plugin file -->
	<script src="../kartik-v-bootstrap-fileinput-6a94917/js/fileinput.min.js"></script>

	<script>
	   $(document).ready(function(){
			$("#comPhoto").fileinput({
				uploadUrl: 'upload_file_comment.php',
				maxFilePreviewSize: 10240,
			});
			$('.btn_edit').click(function(){
				var $row = $(this).closest('tr');
				var rowID = $row.attr('class').split('_')[1];
				var name =  $row.find('.td_name').text();
				var value =  $row.find('.td_val').text();
				var photo =  $row.find('.td_photo').text();
				var title =  $row.find('.td_title').text();
				console.log(rowID+" - "+name+" - "+value+" - "+photo+" - "+title);
				$('#comEditId').val(rowID);
				$('#comEditName').val(name);
				$('#comEditVal').val(value);
				$("#comEditPhoto").fileinput({
					uploadUrl: 'upload_file_comment.php',
					uploadAsync: false,
					overwriteInitial: true,
					purifyHtml: true
				});
				$('#comEditTitle').val(title);
				$('#editCompModal').modal('show');
			});
			$('.btn_del').click(function(){
				var $row = $(this).closest('tr');
				var rowID = $row.attr('class').split('_')[1];
				$('#comDelId').val(rowID);
				$('#delCompModal').modal('show');
			});
		});
		
	</script>
  
	
</body>

</html>
<?php
	} else {
		echo "<script type='text/javascript'>alert('Anda tidak berhak mengakses sistem. Silahkan login terlebih dahulu');window.location.replace('index.php');</script>";
	}
?>