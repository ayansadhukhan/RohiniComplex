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

<link href="../jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">

<script src="../jQueryAssets/jquery.ui-1.10.4.datepicker.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.accordion.min.js" type="text/javascript"></script>
<link href="../jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
</head>

<body>
 <?php require("memberheader.php"); 
 require("../service/getAssetsByUserID.php"); 
if(is_null($assetsData)){
	include("unauthaccess.php");
	exit();
}

 if(is_null($assetsHistData)){
	include("unauthaccess.php");
	exit();
}
 ?> 
<div id="Accordion1">
<?php 
  if (count($assetsData) >0 )
{  
  ?>
  <h3><a href="#">Current Assets</a></h3>
  <div>
    <p><table border="1" style="border-collapse:collapse" width="80%">
    <tr><th>Asset Type</th><th>Asset Name</th><th>Start Date</th></tr>
<?php 
	  foreach($assetsData as $asset){ ?>
    <tr><td><?php echo $asset["ASSETTYPE"]; ?></td><td><?php echo $asset["ASSETNAME"]; ?></td><td><?php echo $asset["STARTDATE"]; ?></td></tr>
    <?php }?>
    </table>
    </p>
  </div>
  <?php } ?>
  <!--
  <h3><a href="#">Current Facilities</a></h3>
  <div>
    <p><table border="1" style="border-collapse:collapse" width="80%">
    <tr><th>Facility Type</th><th>Facility Name</th><th>Start Date</th></tr>
    <tr><td>Facility Type</td><td>Facility Name</td><td>Start Date</td></tr>
    </table></p>
  </div> -->
  <?php 
  if (count($assetsHistData) >0 )
{  
  ?>
  <h3><a href="#">Historical Assets</a></h3>
  <div>
    <p><table border="1" style="border-collapse:collapse" width="80%">
    <tr><th>Asset Type</th><th>Asset Name</th><th>Start Date</th><th>End Date</th></tr>
    <?php 
	  foreach($assetsHistData as $asset){ ?>
    <tr><td><?php echo $asset["ASSETTYPE"]; ?></td><td><?php echo $asset["ASSETNAME"]; ?></td><td><?php echo $asset["STARTDATE"]; ?></td>
    <td><?php echo $asset["ENDDATE"]; ?></td>
    </tr>
    <?php }?>

    </table></p>
  </div>
  <?php } ?>
  <!-- <h3><a href="#">Historical Facilities</a></h3>
  <div>
    <p><table border="1" style="border-collapse:collapse" width="80%">
    <tr><th>Facility Type</th><th>Facility Name</th><th>Start Date</th><th>End Date</th></tr>
    <tr><td>Facility Type</td><td>Facility Name</td><td>Start Date</td><td>End Date</td></tr>
    </table></p>
  </div> -->
</div>
<script type="text/javascript">
$(function() {
	$( "#Accordion1" ).accordion(); 
});
</script>
</body>
</html>