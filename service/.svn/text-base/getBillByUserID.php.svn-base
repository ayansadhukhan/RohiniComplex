<?php

include_once("../db/db.php");
$user = $_SESSION["userName"];
$sql = "SELECT * FROM PAYMENTSVIEW WHERE USERNAME = '".$user."'";
$result = mysqli_query($conn, $sql); 
$paymentData = array();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	

   while( $row= mysqli_fetch_assoc($result)){
	   
	   array_push($paymentData,$row);
	   
	   
   }
	
} 

mysqli_close($conn);


?>