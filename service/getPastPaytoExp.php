<?php

include_once("../db/db.php");
$name = $_GET["term"];
$name = strtoupper($name);
$sql = "SELECT payto as value, payto as label from EXPENDATURE where upper(payto) like '%".$name."%'";
$result = mysqli_query($conn, $sql); 
$paymentData = array();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	

   while( $row= mysqli_fetch_assoc($result)){
	   
	   array_push($paymentData,$row);
	   
	   
   }
	
} 

mysqli_close($conn);

echo json_encode($paymentData);
?>