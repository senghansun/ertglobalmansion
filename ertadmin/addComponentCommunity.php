<?php
	session_start();
	include("dbconnect.php");
	$comName = mysqli_real_escape_string($conn, $_POST["comName"]);
	$comKTP = mysqli_real_escape_string($conn, $_POST["comKTP"]);
	$comBornAt = mysqli_real_escape_string($conn, $_POST["comBornAt"]);
	$comBornDate = mysqli_real_escape_string($conn, $_POST["comBornDate"]);
	$comGender = mysqli_real_escape_string($conn, $_POST["comGender"]);
	$comAddress = mysqli_real_escape_string($conn, $_POST["comAddress"]);
	$comJob = mysqli_real_escape_string($conn, $_POST["comJob"]);
	$comReligion = mysqli_real_escape_string($conn, $_POST["comReligion"]);
	$comCitizenship = mysqli_real_escape_string($conn, $_POST["comCitizenship"]);
	$comMarital = mysqli_real_escape_string($conn, $_POST["comMarital"]);
	$comActive = mysqli_real_escape_string($conn, $_POST["comActive"]);
	$comGroup = mysqli_real_escape_string($conn, $_POST["comGroup"]);
	$comDateCreated = date("Y-m-d");
	$comTimeCreated = date("Y-m-d H:i:s");
	if(empty($comName)){
		echo "<script type='text/javascript'>alert('Setidaknya nama komponen harus terisi. Silahkan dicoba lagi.');window.location.replace('community.php');</script>";
	} else {
		$query = "INSERT INTO community(com_name,com_ktp,com_born_at,com_borndate,com_gender,com_address,com_job,com_religion,com_citizenship,com_marital,com_active,com_group,created_at) VALUES ('$comName','$comKTP','$comBornAt','$comBornDate','$comGender','$comAddress','$comJob','$comReligion','$comCitizenship','$comMarital','$comActive','$comGroup','$comDateCreated')";
		$result = mysqli_query($conn, $query);
		if(mysqli_affected_rows($conn)>0){
			echo "<script type='text/javascript'>alert('Data baru berhasil disimpan.');window.location.replace('community.php');</script>";
		} else {
			echo "<script type='text/javascript'>alert('Data gagal disimpan. Silahkan dicoba kembali.');window.location.replace('community.php');</script>";
		}
	}
	
	mysqli_close($conn);
?>