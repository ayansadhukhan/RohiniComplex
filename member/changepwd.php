<link href="../../jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<table width="100%">
  <tbody>
    <tr>
      <td>Current Password :</td>
      <td><input type="password" /></td>
    </tr>
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
<script type="text/javascript">
$(function() {
	$( "#ButtonsetChPwd" ).buttonset(); 
});
</script>
