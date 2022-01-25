<?php
	session_start();
	include("dbconnect.php");
	$comName = mysqli_real_escape_string($conn, $_POST["comName"]);
	$comVal = mysqli_real_escape_string($conn, $_POST["comVal"]);
	$comDoc = $_SESSION["comUploadValueNews"];
	$comTag = mysqli_real_escape_string($conn, $_POST["comTag"]);
	$comDateCreated = date("Y-m-d");
	$comTimeCreated = date("Y-m-d H:i:s");
	if(empty($comName) OR empty($comVal)){
		echo "<script type='text/javascript'>alert('Setidaknya nama dan isi komponen harus terisi. Silahkan dicoba lagi.');window.location.replace('news.php');</script>";
	} else {
		$query = "INSERT INTO news(news_name,news_val,news_doc,news_group,created_at) VALUES ('$comName','$comVal','$comDoc','$comTag','$comDateCreated')";
		$result = mysqli_query($conn, $query);
		if(mysqli_affected_rows($conn)>0){
			echo "<script type='text/javascript'>alert('Data baru berhasil disimpan.');window.location.replace('news.php');</script>";
		} else {
			echo "<script type='text/javascript'>alert('Data gagal disimpan. Silahkan dicoba kembali.');window.location.replace('news.php');</script>";
		}
	}
	
	mysqli_close($conn);
?>