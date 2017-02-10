<?php

include_once("../db/db.php");

$sql = "SELECT * FROM ROLE ";
$result = mysqli_query($conn, $sql); 
$chargeData = array();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	

   while( $row= mysqli_fetch_assoc($result)){
	   
	   array_push($chargeData,$row);
	   
	   
   }
	
} 

mysqli_close($conn);

echo json_encode($chargeData);
?>