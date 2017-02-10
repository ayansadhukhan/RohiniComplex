<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rohini Complex Flat Owners' Association</title>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.button.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.accordion.min.js" type="text/javascript"></script>
</head>

<body>
<center><h1>ROHINI COMPLEX FLAT OWNERS' ASSOCIATION</h1></center>
<center>
<table width="80%">
  <tbody>
    <tr>
      <td valign="top"><div id="Buttonset1">
        <button id="Button3">Home</button><br/>
        <button id="Button1">About Us</button> <br/>
        <button id="Button2">Contact Us</button><br/>

      </div></td>
      <td valign="top"><div id="Accordion1">
        <h3><a href="#">Section 1</a></h3>
        <div>
          <p><table border="15" bordercolor="#5E2526" width="500" height="300" bgcolor="#148B7E" cellpadding="10" >
        <tbody>
          <tr>
            <td><font color="Yellow"><p>This is the initiative of Rohini complex</p>
            <p>Requesting all of you to attain the general meeting</p>
            <p>&nbsp;</p></font></td>
          </tr>
        </tbody></table></p>
        </div>
        
      </div></td>
      <td valign="top">
        <div id="Accordion2">
          <h3><a href="#">Section 1</a></h3>
          <div>
            <div align="center"  style="background-color:#A75051"><b>Member Login</b></div>
      <font size="2">     
    <form id="form1" name="form1" method="post">
<b>
      <table>
        <tr>
          <td>
          <label for="username">UserName:</label></td><td>
            <input name="username" type="text" id="username" size="20"></td>
        </tr>
        <tr>
          <td>
          <label for="password">Password:</label></td><td>
            <input name="password" type="text" id="password" size="20"></td>
        </tr>
          
      </table> </b>
      
    </form>
    <p align="center">
      <input type="submit" name="submit" id="submit" value="Login">
      <input type="reset" name="reset" id="reset" value="Reset">
    </p>
    <p align="center">Forget Password?</p>
    </font>
          </div>
        </div></td>
    </tr>
  </tbody>
</table>
</center>
<script type="text/javascript">
$(function() {
	$( "#Buttonset1" ).buttonset(); 
});
$(function() {
	$( "#Accordion1" ).accordion(); 
});
$(function() {
	$( "#Accordion2" ).accordion(); 
});
</script>
</body>
</html>