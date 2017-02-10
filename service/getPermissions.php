<?php

include_once("../db/db.php");
$user = $_POST["username"]; 
$sql = "SELECT * FROM PERMISSIONXUSERVIEW WHERE USERNAME = '".$user."'";
$result = mysqli_query($conn, $sql); 
$peermissions = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	$peermissions = mysqli_fetch_array($result);

    /*while($row = mysqli_fetch_assoc($result)) {
          $peermissions = $peermissions."\"".$row["PERMISSIONS"]. "\",";
    }
	$peermissions = $peermissions."\"dummy\"";*/
} 

mysqli_close($conn);


?>