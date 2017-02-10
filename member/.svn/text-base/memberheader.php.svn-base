<?php
// Start the session
session_start();
?>

<header>
    <div align="center">
      <h1>ROHINI COMPLEX FLAT OWNERS' ASSOCIATION</h1>
    </div>
  </header>
<table class="ui-widget-header ui-corner-all"  width="100%" bgcolor="#F0B82B"><tr>
    <td align="left"><div ><p>Welcome <?php echo $_SESSION["userName"] ;?> </p></div></td>
    <td align="right"><div id="Buttonset1">

      <button id="changePwdBtn" >Change Password</button>
      <button id="Button2">Logout</button>
    </div></td></tr></table> 
<?php require("menu.php"); ?>
<div id="changePwdDialog"><p><?php require("changepwd.php"); ?></p></div>
<script type="text/javascript">
$(function() {
	$( "#Buttonset1" ).buttonset(); 
});

  $(function() {
    $( "#changePwdDialog" ).dialog({
		autoOpen:false,
		modal:true,
		show:{effect: "blind", duration: 1000},
		hide:{effect: "explode", duration: 1000},
		width:400
	});
 
    $( "#changePwdBtn" ).click(function() {
      $( "#changePwdDialog" ).dialog( "open" );
    });
  });
  </script>