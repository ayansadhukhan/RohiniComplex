<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.autocomplete.min.css" rel="stylesheet" type="text/css">
<script src="../jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.tabs.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.autocomplete.min.js" type="text/javascript"></script>

<link href="../jQueryAssets/jquery.ui.dialog.min.css" rel="stylesheet" type="text/css">
<script src="../jQueryAssets/jquery.ui-1.10.4.dialog.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.button.min.js" type="text/javascript"></script>
<link href="../jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.resizable.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<script src="../jQueryAssets/jquery.ui-1.10.4.button.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.datepicker.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.accordion.min.js" type="text/javascript"></script>
<link href="../jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
</head>

<body>
 <?php require("memberheader.php"); 
 
  require("../service/getBillByUserID.php"); 
if(is_null($paymentData)){
	include("unauthaccess.php");
	exit();
}

 ?> 
<div id="Accordion1">
  <h3><a href="#">Payment History</a></h3>
  <div>
    <p><table border="1" style="border-collapse:collapse" width="80%">
  <tbody>
    <tr>
      <th scope="col">E Bill No</th>
      <th scope="col">Bill Date</th>
      <th scope="col">Payment Date</th>
      <th scope="col">Vide</th>
      <th scope="col">Ref. No</th>
      <th scope="col">Bill No</th>
      <th scope="col">Amount</th>
      <th scope="col">Received By</th>
    </tr>
    <?php 
	if(count($paymentData) == 0){
	?>
    <tr><td colspan="8" align="center">No Paymnent found !!</td></tr>
    <?php	
	}else{
	  foreach($paymentData as $payment){ ?>

    <tr>
      <td><?php echo $payment["EBILLNO"]; ?></td>
      <td><?php echo $payment["BILLDATE"]; ?></td>
      <td><?php echo $payment["PAYMENTDATE"]; ?></td>
      <td><?php echo $payment["VIDE"]; ?></td>
      <td><?php echo $payment["REFNO"]; ?></td>
      <td><?php echo $payment["BILLNUMBER"]; ?></td>
      <td><?php echo $payment["AMOUNT"]; ?></td>
      <td><?php echo $payment["TREASURER"]; ?></td>
    </tr>
    <?php }}?>
  </tbody>
</table>
</p>
    
</div>
</div>
<div id="Accordion2">

  <h3><a href="#">Payment Details</a></h3>
  <div> test
</div>
</div>
<script type="text/javascript">
$(function() {
	$( "#Accordion1" ).accordion(); 
});
$(function() {
	$( "#Accordion2" ).accordion(); 
});

</script>
</body>
</html>