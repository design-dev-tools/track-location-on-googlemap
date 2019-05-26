<?php

$sql = "SELECT * FROM map WHERE Name='$district' ";
$result = mysqli_query($conn, $sql);

$options = 0;
if(mysqli_num_rows($result) > 0){
  while($row = $result-> fetch_assoc()){
    $id=$row['ID'];
    $adrname=$row['Name'];
    $latitude=$row['latitude'];
    $longitude=$row['longitude'];
    $zoom=$row['zoom'];

    }
 }else{
       echo "Data not found regarding district";
  }


?>