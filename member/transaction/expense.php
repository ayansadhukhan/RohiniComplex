<table width="60%" cellpadding="10">
<tr>
	<td>Expense type:</td>
    	<td> <input type="text" id="expensefor" />
    </td>
    	<td>Date : </td>
    	<td><input type="text" id="ExpDatepicker" >
    </td>

    
</tr>
<tr>
    <td >Payment to: </td>
    	<td colspan="3"><input type="text" id="payto"  size="70%"/>
    </td>

    
</tr>
<tr>

    <td>Vide: </td>
    	<td><select id="expvide"></select>
    </td>
	<td >No : </td>
	<td ><input type="text" id="amount">
    </td>    
</tr>
<tr>
	<td >Amount : </td>
    	<td><input type="text" id="expamt">
    </td>
    <td>Ref: </td>
    	<td><input type="text" id="Reference">
    </td>    
</tr>
<tr>
<td colspan="4"><div id="expinwords"></div></td>
</tr>
</table><br/>
<div id="ExpBttnset">
  <button id="Button1">Pay</button>
  <button id="Button2">Cancel</button>

</div>
<script type="text/javascript">
var exptypeid = null;
$(function() {
	$( "#expensefor" ).autocomplete({
	
		source:"../../service/getExpenseType.php",
		  minLength: 2,
		  select: function( event, ui ) {
		  exptypeid = ui.item.value;
		  this.value = ui.item.label;
		 }
	}); 
	
	

});
$(function() {
	$( "#payto" ).autocomplete(
	
	{
	
		source:"../../service/getPastPaytoExp.php",
		  minLength: 2
		  
	}	); 
});
$(function() {
	$( "#ExpDatepicker" ).datepicker(); 
});
$(function() {
	$( "#ExpBttnset" ).buttonset(); 
});

 $("#expvide").click(function() {
    // If the select list is empty:
	
    if ($(this).find("option").size() == 0) {
    
	    // Documentation on getJSON: http://api.jquery.com/jQuery.getJSON/
        $.getJSON("../../service/getVides.php", null, function (data) {

	        $.each(data, function(i,item){
                // Create and append the new options into the select list
                $("#expvide").append("<option value="+item.ID+">"+item.NAME+"</option>");
            });
        });
    }
});
$("#expamt").blur(function() {
	
	  var amt = parseFloat($("#expamt").val());
$("#expinwords").html("In Words :" + inWords($("#expamt").val()));
});
</script>
