<?php
	include('createTable.php');

	// insert data in  table --------------------------
	$district = $_POST['district'];
	$street = $_POST['street'];

	include('getLatLon.php');
	//addressinfo
	
	$insertsql = "INSERT INTO getlonlat(
						district, street , longitude, latitude, zoom
					)
				 VALUES(
				 	'$district' , '$street' , '$latitude', '$longitude' , '$zoom'
				 )";
	if(mysqli_query($conn, $insertsql)){
		echo "new record created successfully";
		session_start();
		$_SESSION["district"] = "$district";
		// echo $_SESSION["district"];
		
		header("Location: ../getLocation.php");
		
	}else{
		echo "error:" . $insertsql. "<br>" . mysqli_error($conn);
	}

?>