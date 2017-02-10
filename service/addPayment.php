<?php

include_once("../db/db.php");
$userid= $_POST["userid"];
$vide =  $_POST["vide"];
$amt = $_POST["amount"];
$date = $_POST["date"];
$receivedby = $_POST["receivedby"];
$chargedetail= $_POST["chargeDTL"];
$billno = $_POST["billno"];
$ref = $_POST["ref"];
$wfAmt = $_POST["wfAmt"];
$wfdetail=$_POST["wfdetail"];
$billto = 1; //Temp
/*
IN BILLTO INT, 
IN VIDE INT, 
IN REF VARCHAR(20),
IN AMOUNT DOUBLE,
IN PAYDATE DATE,
IN RECEVIDEDBYUN VARCHAR(45),
IN PAYIDETAIL VARCHAR(500),
IN WFIDETAIL VARCHAR(500),
IN BILLNO VARCHAR(5),
IN WFAMOUNT DOUBLE,
*/
$sql = "call ADDPAYMENT(".$billto.",".$vide.",'".$ref."',".$amt.",'".$date."','".$receivedby."','".$chargedetail
."','".$wfdetail."','".$billno."',".$wfAmt .",@result)";

 mysqli_query($conn, $sql); 

$resSQL = "select @result as res";
 $result = mysqli_query($conn, $resSQL); 

$assetsData = array();
$returnValue = -2;

if (!is_null($result) && mysqli_num_rows($result) > 0) {
    // output data of each row


   while( $row= mysqli_fetch_assoc($result)){

	  $returnValue = $row["res"];

	  
   }
	
} else{

	$returnValue = -2;
}

mysqli_close($conn);
echo $returnValue ;

?>

