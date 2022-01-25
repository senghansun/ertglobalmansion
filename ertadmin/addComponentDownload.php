<?php
	session_start();
	include("dbconnect.php");
	$comName = mysqli_real_escape_string($conn, $_POST["comName"]);
	$comDoc = $_SESSION["comUploadValueDownload"];
	$comTag = mysqli_real_escape_string($conn, $_POST["comTag"]);
	$comDateCreated = date("Y-m-d");
	$comTimeCreated = date("Y-m-d H:i:s");
	if(empty($comName)){
		echo "<script type='text/javascript'>alert('Setidaknya nama komponen harus terisi. Silahkan dicoba lagi.');window.location.replace('download.php');</script>";
	} else {
		$query = "INSERT INTO download(download_name,download_doc,download_group,created_at) VALUES ('$comName','$comDoc','$comTag','$comDateCreated')";
		$result = mysqli_query($conn, $query);
		if(mysqli_affected_rows($conn)>0){
			echo "<script type='text/javascript'>alert('Data baru berhasil disimpan.');window.location.replace('download.php');</script>";
		} else {
			echo "<script type='text/javascript'>alert('Data gagal disimpan. Silahkan dicoba kembali.');window.location.replace('download.php');</script>";
		}
	}
	
	mysqli_close($conn);
?>