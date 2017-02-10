<?php

include_once("../db/db.php");
$user = $_POST["userID"];
$sql = "SELECT * FROM ASSETVIEW WHERE USERID= '".$user."' AND ENDDATE IS NULL";
$result = mysqli_query($conn, $sql); 
$assetsData = array();
$assetsHistData = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	

   while( $row= mysqli_fetch_assoc($result)){

	   array_push($assetsData,$row);
   }
	
} 

mysqli_close($conn);

echo json_encode($assetsData);
?>