<?php
	require 'ertadmin/dbconnect.php';
	
	$qCarousel = "SELECT * FROM home_car ORDER BY home_car_id DESC";
	$qInfo = "SELECT * FROM home_info ORDER BY home_info_id DESC";
	$qComment = "SELECT * FROM home_comment ORDER BY home_comment_id DESC";
	$qAbout = "SELECT * FROM about ORDER BY about_id DESC";
	$qService = "SELECT * FROM service ORDER BY service_id DESC";
	$qGallery = "SELECT * FROM gallery ORDER BY gallery_id DESC";
	$qFacility = "SELECT * FROM facility ORDER BY facility_id DESC";
	$qNews = "SELECT * FROM news ORDER BY news_id DESC";
	$qDownload = "SELECT * FROM download ORDER BY download_id DESC";
	$qCommunity = "SELECT * FROM community ORDER BY com_id DESC";
	$qContact = "SELECT * FROM contact ORDER BY contact_id DESC";
	
	$rCarousel = mysqli_query($conn, $qCarousel);
	$rInfo = mysqli_query($conn, $qInfo);
	$rComment = mysqli_query($conn, $qComment);
	$rAbout = mysqli_query($conn, $qAbout);
	$rService = mysqli_query($conn, $qService);
	$rGallery = mysqli_query($conn, $qGallery);
	$rFacility = mysqli_query($conn, $qFacility);
	$rNews = mysqli_query($conn, $qNews);
	$rDownload = mysqli_query($conn, $qDownload);
	$rCommunity = mysqli_query($conn, $qCommunity);
	$rContact = mysqli_query($conn, $qContact);
	
	$carousel = array();
	$i=1;
	while ($rowList = mysqli_fetch_array($rCarousel)) {				 
		$transaction = array(
			't_id' => $rowList['home_car_id'],
			'carName' => $rowList['home_car_name'],
			'carVal' => $rowList['home_car_val'],
			'carPhoto' => $rowList['home_car_photo'],
			'carLink' => $rowList['home_car_link'],
		);		
		$carousel[$i] = $transaction;
		$i++;
	}
	
	$info = array();
	$i=1;
	while ($rowList = mysqli_fetch_array($rInfo)) {				 
		$transaction = array(
			't_id' => $rowList['home_info_id'],
			'infoName' => $rowList['home_info_name'],
			'infoVal' => $rowList['home_info_val'],
		);		
		$info[$i] = $transaction;
		$i++;
	}
	
	$comment = array();
	$i=1;
	while ($rowList = mysqli_fetch_array($rComment)) {				 
		$transaction = array(
			't_id' => $rowList['home_comment_id'],
			'commentName' => $rowList['home_comment_name'],
			'commentVal' => $rowList['home_comment_val'],
			'commentPhoto' => $rowList['home_comment_photo'],
			'commentTitle' => $rowList['home_comment_title'],
		);		
		$comment[$i] = $transaction;
		$i++;
	}
	
	$about = array();
	$i=1;
	while ($rowList = mysqli_fetch_array($rAbout)) {				 
		$transaction = array(
			't_id' => $rowList['about_id'],
			'aboutName' => $rowList['about_name'],
			'aboutVal' => $rowList['about_val'],
			'aboutSlogan' => $rowList['about_slogan'],
			'aboutPhoto1' => $rowList['about_photo1'],
			'aboutPIC1' => $rowList['about_pic1'],
			'aboutTitle1' => $rowList['about_title1'],
			'aboutContact1' => $rowList['about_contact1'],
			'aboutPIC2' => $rowList['about_pic2'],
			'aboutTitle2' => $rowList['about_title2'],
			'aboutPIC3' => $rowList['about_pic3'],
			'aboutTitle3' => $rowList['about_title3'],
			'aboutPIC4' => $rowList['about_pic4'],
			'aboutTitle4' => $rowList['about_title4'],
			'aboutPIC5' => $rowList['about_pic5'],
			'aboutTitle5' => $rowList['about_title5'],
		);		
		$about[$i] = $transaction;
		$i++;
	}
	
	$service = array();
	$i=1;
	while ($rowList = mysqli_fetch_array($rService)) {				 
		$transaction = array(
			't_id' => $rowList['service_id'],
			'serviceName' => $rowList['service_name'],
			'serviceVal' => $rowList['service_val'],
			'serviceGroup' => $rowList['service_group'],
		);		
		$service[$i] = $transaction;
		$i++;
	}
	
	$gallery = array();
	$i=1;
	while ($rowList = mysqli_fetch_array($rGallery)) {				 
		$transaction = array(
			't_id' => $rowList['gallery_id'],
			'galleryName' => $rowList['gallery_name'],
			'galleryVal' => $rowList['gallery_val'],
			'galleryPhoto' => $rowList['gallery_photo'],
			'galleryGroup' => $rowList['gallery_group'],
		);		
		$gallery[$i] = $transaction;
		$i++;
	}
	
	$facility = array();
	$i=1;
	while ($rowList = mysqli_fetch_array($rFacility)) {				 
		$transaction = array(
			't_id' => $rowList['facility_id'],
			'facilityName' => $rowList['facility_name'],
			'facilityVal' => $rowList['facility_val'],
			'facilityPhoto' => $rowList['facility_photo'],
			'facilityGroup' => $rowList['facility_group'],
		);		
		$facility[$i] = $transaction;
		$i++;
	}
	
	$news = array();
	$i=1;
	while ($rowList = mysqli_fetch_array($rNews)) {				 
		$transaction = array(
			't_id' => $rowList['news_id'],
			'newsName' => $rowList['news_name'],
			'newsVal' => $rowList['news_val'],
			'newsDoc' => $rowList['news_doc'],
			'newsGroup' => $rowList['news_group'],
		);
		$news[$i] = $transaction;
		$i++;
	}
	
	$download = array();
	$i=1;
	while ($rowList = mysqli_fetch_array($rDownload)) {				 
		$transaction = array(
			't_id' => $rowList['download_id'],
			'downloadName' => $rowList['download_name'],
			'downloadDoc' => $rowList['download_doc'],
			'downloadGroup' => $rowList['download_group'],
		);		
		$download[$i] = $transaction;
		$i++;
	}
	
	$community = array();
	$i=1;
	while ($rowList = mysqli_fetch_array($rCommunity)) {				 
		$transaction = array(
			't_id' => $rowList['com_id'],
			'comName' => $rowList['com_name'],
			'comKTP' => $rowList['com_ktp'],
			'comBornAt' => $rowList['com_born_at'],
			'comBorndate' => $rowList['com_borndate'],			
			'comGender' => $rowList['com_gender'],
			'comAddress' => $rowList['com_address'],
			'comJob' => $rowList['com_job'],
			'comReligion' => $rowList['com_religion'],
			'comCitizenship' => $rowList['com_citizenship'],
			'comMarital' => $rowList['com_marital'],
			'comActive' => $rowList['com_active'],
			'comGroup' => $rowList['com_group'],
		);		
		$community[$i] = $transaction;
		$i++;
	}
	
	$contact = array();
	$i=1;
	while ($rowList = mysqli_fetch_array($rContact)) {				 
		$transaction = array(
			't_id' => $rowList['contact_id'],
			'contactName' => $rowList['contact_name'],
			'contactVal' => $rowList['contact_val'],
		);		
		$contact[$i] = $transaction;
		$i++;
	}
	//print_r($carousel);
	mysqli_close($conn);
?>