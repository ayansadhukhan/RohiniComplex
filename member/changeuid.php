<link href="../../jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<table width="100%">
  <tbody>
    <tr>
      <td>New User Name:</td>
      <td><input type="userid" /></td>
    </tr>
   
    <tr>
      <td>Password :</td>
      <td><input type="password" /></td>
    </tr>
    <tr>
      <td colspan="2"><div id="ButtonsetChUID" align="center">
        <button id="chUidSubmit">Submit</button>
        <button id="chUidReset">Reset</button>

      </div></td>
      
    </tr>
  </tbody>
</table>
<script type="text/javascript">
$(function() {
	$( "#ButtonsetChUID" ).buttonset(); 
});
</script>
