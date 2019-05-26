<?php
include('includes/connection.php');

session_start();
$sessionDistrict = $_SESSION["district"];

$getPositionsql = "SELECT * FROM map WHERE Name='$sessionDistrict' ";
$result = mysqli_query($conn, $getPositionsql);

echo '<script type="text/javascript" > ';
	echo 'var markers = [ ';
	if(mysqli_num_rows($result) > 0){
	  while($row = $result-> fetch_assoc()){
	    $id=$row['ID'];
	    $adrname=$row['Name'];
	    $latitude=$row['latitude'];
	    $longitude=$row['longitude'];
	    $zoom=$row['zoom'];

	    	
	    	
	    	echo '    { ';
	    	echo '        "district": " '. $adrname. ' ", ';
	    	echo '        "lat":  " '. $latitude. ' ", ';
	    	echo '        "lng":  " '. $longitude. ' ", ';
	    	echo '        "zoom":  " '. $zoom. ' ", ';
	    	echo '    }, ';
	    	

	    	
	    }
	 }else{
	       echo "Data not found regarding district";
	  }
	  echo ']; ';
	  echo '</script> ';
?>