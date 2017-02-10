
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
/*
if(!in_array("VIEWPROFILE",$_SESSION["permission"])){
	include("unauthaccess.php");
	exit();
}*/

require("../service/getProfileByUserID.php"); 
if(is_null($profileData)){
	include("unauthaccess.php");
	exit();
}
?>

<div id="profile">
  <h3><a href="#">Personal</a></h3>
  <div>
    <p>
    <table cellpadding="10"><tr><td>
    <table cellpadding="10">
        		<tr><td ><b>User ID:</b></td><td> : </td><td ><font color="blue"><?php echo $profileData["USERNAME"] ; ?></font>&nbsp;&nbsp;&nbsp; 
				<?PHP if($profileData["USERIDMODI"] ==0){ ?><small>(<a href="#" id="ChngeUIDLink">change </a>)</small> <?php } ?></td></tr>
    		<tr><td ><b>First Name</b></td><td> : </td><td ><font color="blue"><?php echo $profileData["FNAME"] ; ?></font> </td></tr>
            <tr><td ><b>Middle Name</b></td><td> : </td><td ><font color="blue"><?php echo $profileData["MNAME"] ; ?></font> </td></tr>
       		<tr><td ><b>Last Name</b></td><td> : </td><td ><font color="blue"><?php echo $profileData["LNAME"] ; ?></font> </td></tr>
            <tr><td ><b>Sex</b></td><td> : </td><td ><font color="blue"><?php echo $profileData["sex"] ; ?></font> </td></tr>
            <tr><td ><b>Date of Birth</b></td><td> : </td><td ><font color="blue"><?php echo $profileData["DOB"] ; ?></font> </td></tr>
            <tr><td ><b>Address</b></td><td> : </td><td ><font color="blue"><?php echo $profileData["ADDRESS"] ; ?></font> </td></tr>
            <tr><td ><b>PIN</b></td><td> : </td><td ><font color="blue"><?php echo $profileData["PIN"] ; ?></font> </td></tr>
            <tr><td ><b>Email</b></td><td> : </td><td ><font color="blue"><?php echo $profileData["EMAIL"] ; ?></font> </td></tr>
            <tr><td ><b>Phone</b></td><td> : </td><td ><font color="blue"><?php echo $profileData["PHONE"] ; ?></font> </td></tr>
            <tr>
              <td ><b>Mobile</b></td><td> : </td><td ><font color="blue"><?php echo $profileData["MOBILENUMBER"] ; ?></font> </td></tr>
    	
    </table></td><td valign="top" >
    
      <img src="../images/face.jpg" width="160" height="160" alt=""/>
            <br/><br/><b>Roles:</b>
      <font color="blue">
      <ul>
      
      <?php 
	  $roles =  split(",",$profileData["ROLES"] );
	  foreach($roles as $role){
		  echo "<li>".$role."</li>";
	  }
	  ?>

      </ul>
      </font>

      </td></tr></table></p>
  </div>
  <h3><a href="#">Documents</a></h3>
  <div>
    <p>Content 2</p>
  </div>
  <h3><a href="#">Asset and Facility</a></h3>
  <div>
    <p>Content 3</p>
  </div>
</div>
<div id="changeUIDDialog"><p><?php require("changeuid.php"); ?></p></div>
<script type="text/javascript">
$(function() {
	$( "#profile" ).accordion(); 
});



  $(function() {
    $( "#changeUIDDialog" ).dialog({
		autoOpen:false,
		modal:true,
		show:{effect: "blind", duration: 1000},
		hide:{effect: "explode", duration: 1000},
		width:400
	});
 
    $( "#ChngeUIDLink" ).click(function() {
      $( "#changeUIDDialog" ).dialog( "open" );
    });
  });
</script>
</body>
</html>
