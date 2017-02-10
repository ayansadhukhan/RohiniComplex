

<?php

include_once("../db/db.php");
$user = $_GET["term"];
$user = strtoupper($user);
$sql = "SELECT id as value, concat(ifnull(fname,''),' ',ifnull(mname,''),' ',ifnull(lname,'') ) as label FROM user WHERE upper(fname) like '%".$user."%' or upper(lname) like '%".$user."%' or upper(mname) like '%".$user."%'";
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