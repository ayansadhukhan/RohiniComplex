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
<link href="./jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<div id="Accordion1">
  <h3><a href="#">Reset Password</a></h3>
  <div align="center">
  <table width="50%">
  <tbody>

    <tr>
      <td>New Password :</td>
      <td><input type="password" /></td>
    </tr>
   
    <tr>
      <td>Re enter New Password :</td>
      <td><input type="password" /></td>
    </tr>
    <tr>
      <td colspan="2"><div id="ButtonsetChPwd" align="center">
        <button id="chPwdSubmit">Submit</button>
        <button id="chPwdReset">Reset</button>

      </div></td>
      
    </tr>
  </tbody>
</table>

  </div>
  
</div>
<script type="text/javascript">
$(function() {
	$( "#Accordion1" ).accordion(); 
});
</script>
<script type="text/javascript">
$(function() {
	$( "#ButtonsetChPwd" ).buttonset(); 
});
</script>

</body>
</html>