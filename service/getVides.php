<?php

include_once("../db/db.php");

$sql = "SELECT ID, NAME FROM VIDETYPE";
$result = mysqli_query($conn, $sql); 
$vides = array();


if (mysqli_num_rows($result) > 0) {
    // output data of each row
	//$vides = mysqli_fetch_assoc($result);

    while($row = mysqli_fetch_assoc($result)) {
      //    $peermissions = $peermissions."\"".$row["PERMISSIONS"]. "\",";
	  array_push($vides,$row);
    }
	//$peermissions = $peermissions."\"dummy\"";*/
} 

mysqli_close($conn);

echo json_encode($vides);
?>