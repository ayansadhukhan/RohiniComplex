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
<?php require("memberheader.php"); ?> 
<div id="Accordion1">
  <h3><a href="#">Notice Board</a></h3>
  <div>
    <p>
    <form>
    <table>
    <tr><td><textarea cols="50" rows="5"></textarea>
    </td></tr>
    <tr><td><center>
    <input type="submit"><input type="reset"> </center>
    </td></tr>
    </table>
    
    </form>
    </p>
  </div>
  
</div>
<script type="text/javascript">
$(function() {
	$( "#Accordion1" ).accordion(); 
});
</script>
</body>
</html>