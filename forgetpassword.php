<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.accordion.min.js" type="text/javascript"></script>
</head>

<body>
<div id="Accordion1">
  <h3><a href="#">Forget Password</a></h3>
  <div>
    <p><form>
    
    <label for="userid">User Id: </label>
    <input type="text" id="userid"/> <input type="submit" value="Send"/></form></p>
  </div>

</div>
<script type="text/javascript">
$(function() {
	$( "#Accordion1" ).accordion(); 
});
</script>
</body>
</html>