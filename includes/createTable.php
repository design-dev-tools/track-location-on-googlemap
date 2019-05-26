<?php
	include('connection.php');

	$sql = "CREATE TABLE IF NOT EXISTS getlonlat(
			id INT(15) PRIMARY KEY AUTO_INCREMENT,
			district VARCHAR(200),
			street VARCHAR(200),
			longitude DOUBLE(200,4),
			latitude DOUBLE(200,4),
			zoom DOUBLE(200,4)
			)";

	if($conn->query($sql)==true){
		echo "Table created successfully <br/>";
	}else{
		echo "error creating table <br/>". $conn->error;
	}

?>