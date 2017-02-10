<?php


try {
include_once("../db/db.php");


$user = $_POST["username"]; 
$pass = $_POST["password"]; 

if(strlen($user)==0){
	echo ( "{\"auth\": \"false\",\"message\": \"Invalid Userid/Password !\"}");
	exit();
}

if(strlen($pass)==0){
	echo  ("{\"auth\": \"false\",\"message\": \"Invalid Userid/Password !\"}");
	exit();
}

$sql = "SELECT 1 FROM CREDENTIALS WHERE USERNAME='".$user."' AND PASSWORD='".$pass."'";

$result = mysqli_query($conn, $sql); 

if (mysqli_num_rows($result) > 0) {
    echo "{\"auth\": \"true\",\"message\": \"success\"}";
} else{
	    echo "{\"auth\": \"false\",\"message\": \"Invalid Userid/Password !\"}";
}

mysqli_close($conn);
}

//catch exception
catch(Exception $e) {
echo "{\"auth\": \"false\",\"message\": \"System Error! Try again later !\"}";
console.log($e);
}



?>
