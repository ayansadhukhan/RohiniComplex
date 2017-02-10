<?php

include_once("../db/db.php");
$sql = "call testProc(@result)";
 mysqli_query($conn, $sql); 

$resSQL = "select @result as res";
 $result = mysqli_query($conn, $resSQL); 
 //echo $result;

$assetsData = array();
$returnValue = -2;
echo "aaa".mysqli_num_rows($result); 
if (!is_null($result) && mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "y";

   while( $row= mysqli_fetch_assoc($result)){
	   echo "Z";
	echo $row["res"];

	  
   }
	
} else{
	echo "pp";
	$returnValue = -2;
}

mysqli_close($conn);
//echo $returnValue ;

?>

