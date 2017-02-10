<?php

include_once("../db/db.php");
$user = $_SESSION["userName"];
$sql = "SELECT * FROM ASSETVIEW WHERE USERNAME = '".$user."'";
$result = mysqli_query($conn, $sql); 
$assetsData = array();
$assetsHistData = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	

   while( $row= mysqli_fetch_assoc($result)){
	   if(is_null($row["ENDDATE"])){
	   array_push($assetsData,$row);
	   }else{
   	   array_push($assetsHistData,$row);
	   }
   }
	
} 

mysqli_close($conn);


?>