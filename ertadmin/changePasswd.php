<?php
	session_start();
	include("dbconnect.php");
	$oldPassword = md5(mysqli_real_escape_string($conn, $_POST["oldPassword"]));
	$newPassword = md5(mysqli_real_escape_string($conn, $_POST["newPassword"]));
	$username = $_SESSION["username"];
	
	$query = "UPDATE user SET password = '$newPassword' WHERE (password = '$oldPassword' AND username = '$username')";
	$result = mysqli_query($conn, $query);
	if(mysqli_affected_rows($conn)>0){
		echo "<script type='text/javascript'>alert('Password Anda telah berhasil diperbarui.');window.location.replace('adminPage.php');</script>";
	} else {
		echo "<script type='text/javascript'>alert('Password yang Anda masukkan tidak cocok. Silahkan dicoba lagi.');window.location.replace('adminPage.php');</script>";
	}
	
	mysqli_close($conn);
?>