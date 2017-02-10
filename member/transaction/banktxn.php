
<input type="button" id="withdrawlBtn" value="Withdrawal"><input id="depositBtn" type="button" value="Deposit"><br/><br/>
<div id="Dialogwithd" title="Withdrawal">
<table width="100%">
<tr><td>Date :</td><td><input type="text" id="Datepickerwithd"></td></tr>
<tr><td>Amount : </td><td><input type="text" id="amount"/></td></tr>
<tr>
  <td colspan="2"><div id="Buttonset1">
    <button id="Button1">Submit</button>
    <button id="Button2">Cancel</button>

  </div></td></tr>
</table>
</div>
<br/><br/>
<table border="1" style="border-collapse:collapse" width="60%">
  <tbody>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Withdrawal</th>
      <th scope="col">Deposit</th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>


<script type="text/javascript">
$(function() {
	$( "#Dialogwithd" ).dialog(
	{
		autoOpen: false,
		 modal: true
	}); 

	$( "#withdrawlBtn" ).click(function() {
      $( "#Dialogwithd" ).dialog( "open" );
    });
	$( "#depositBtn" ).click(function() {
      $( "#Dialogwithd" ).dialog( "open" );
    });
});
$(function() {
	$( "#Datepickerwithd" ).datepicker(); 
});
$(function() {
	$( "#Buttonset1" ).buttonset(); 
});
</script>
