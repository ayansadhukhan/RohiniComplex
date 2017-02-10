<?php

include_once("../db/db.php");
$user = $_SESSION["userName"];
$sql = "SELECT * FROM PROFILEVIEW WHERE USERNAME = '".$user."'";
$result = mysqli_query($conn, $sql); 
$profileData = null;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	

    $profileData= mysqli_fetch_assoc($result);
	
} 

mysqli_close($conn);


?>