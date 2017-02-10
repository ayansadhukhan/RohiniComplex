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
<style>
body {
  font-family: 'Lucida Grande', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  padding: 20px 50px 150px;
  font-size: 13px;

  background: #E3CAA1;
}
</style>
</head>

<body>
<link href="./jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<header>
    <div align="center">
      <h1>ROHINI COMPLEX FLAT OWNERS' ASSOCIATION</h1>
    </div>
  </header>
<div id="Accordion1">
  <h3><a href="#">Login</a></h3>
  <div align="center" >
<div id="msg" style="color:#FF0000"></div>
  <table >
  <tbody>

    <tr>
      <td>User Name :</td>
      <td><input type="text" id="username" /></td>
    </tr>
   
    <tr>
      <td>Password :</td>
      <td><input type="password" id="pwd"/></td>
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

 $( "#chPwdReset" ).click(function() {
	$("#msg").empty();
	$("#username").val("");
	$("#pwd").val("");
	}); 
 $( "#chPwdSubmit" ).click(function() {

	$("#msg").empty();     
var user = 	 $("#username").val();
	
$.post( "./service/logon.php", { username: user, password: $("#pwd").val() })
  .done(function( data ) {
	  var obj = jQuery.parseJSON(data);

		$("#msg").empty().append(obj.message);
			
	
	if(obj.auth=="true"){
		
	$.post( "./member/loginredirect.php", { username: user, password: $("#pwd").val() })
  		.done(function( data ) {
			//alert(data);
				window.open("./member/profile.php","_self");
		});
		
	}
	
	
  })
  .fail(function() {
    	$("#msg").empty().append("System Error: Please try later");
  })
  ;

  });


</script>

</body>
</html>