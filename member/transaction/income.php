  <style>
  .ui-autocomplete-loading {
    background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
  }
  </style>
<p><div > <b>Search :</b> &nbsp; Name:
  <input type="text" id="namesearch" size="50">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="button" id="detailsbtn" value="View Details"/>
</p> </div>
<table width="100%" cellpadding="10"><tr><td style="border-right-style:solid;width:55%" valign="top">
<h3>Asset/Facility Deails </h3>
<table>
<tr>
  <td><div id="Checkboxes1">
    <input type="checkbox" id="Checkbox1">
    <label for="Checkbox1">Flat 603</label>
  </div></td>
</tr>
</table>

<h3>Pending Transaction </h3>

<table id="chargetable"  border="1" style="border-collapse:collapse;" width="95%">
  <thead>
    <tr>
      <th scope="col">Sl.No</th>
      <th scope="col">Charge details</th>
      <th scope="col">Invoice Date</th>
      <th scope="col">Due Date</th>
      <th scope="col">Payment Status</th>
      
      <th scope="col">Amount</th>
      <th scope="col">Amount Due</th>
      <th scope="col">Select</th>
    </tr>
    
  </thead>
  <tbody></tbody>
</table>

<h3>Last Payment </h3>
<table border="1" style="border-collapse:collapse" width="95%">
  <tbody>
    <tr>
      <th scope="col">Sl.No</th>
      <th scope="col">Date</th>
      <th scope="col">Transaction Number</th>
      <th scope="col">Vide</th>
      <th scope="col">Ref. No</th>
      <th scope="col">Bill No</th>
      <th scope="col">Amount</th>
      <th scope="col">Status</th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
            <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
<td valign="top" >
<h3> Payment Details: </h3>
<table width="100%">
<tr><td> 

   <label for="text">Bill No:</label>
<input type="text" id="billno" required/>
</td><td align="right">
    <label for="Datepicker1">Date:</label>
<input type="text" id="receivedDate">
</td></tr>
<tr><td colspan="2">    <label for="amount">Amount:</label>
<input type="text" id="amount"></td>
</tr><tr>
<td>
Vide:
<select id="vide"></select>
</td><td align="right">
<label for="Ref">Ref:</label>
<input type="text" id="Ref">


</td></tr>
</table>
<br/>


<table id="chrgtopay" border="1" style="border-collapse:collapse" width="100%">
  <thead>
    <tr>
      <th scope="col">Sl.No.</th>
      <th scope="col">Charge Details</th>
      <th scope="col">Amount Due</th>
      <th scope="col">Amount to Pay</th>
    </tr>
      </thead>
  <tbody>

</tbody>
<tfoot>
        <tr>
      <th colspan="2">Total</th>
      <td><div id="totalDue"></div></td>
      <td><div id="totalToPay"></div></td>
    </tr>
</tfoot>
</table>
<div id="inworkds">In Words: </div>
<br/>
<div id="Buttonset1">
  <button id="receivePayment"  >Receive Payment</button>
  <button id="cancelPayments">Cancel</button>

</div>
<p>&nbsp;</p>
</td></tr>
</table>
<script type="text/javascript">
var chargeMap = new Object();
var uid = null;

$(function() {
	$( "#namesearch" ).autocomplete({
		source:"../../service/namesearch.php",
		  minLength: 2,
		 select: function( event, ui ) {
		  uid = ui.item.value;
		  $.post( "../../service/getPendingCharges.php", { userid: ui.item.value})
	  		.done(function( data ) {
				
$("#chargetable > tbody").html("");
				
	  			var chargedata = jQuery.parseJSON(data);
	  			for(i=0;i<chargedata.length;i++){
					chargeMap[chargedata[i].SLNO] = chargedata[i];
				$("#chargetable").append("<tr><td>"+chargedata[i].SLNO+"</td><td><a href='#' id='chargedetails'>"+chargedata[i].SLNO+"</a></td><td>"+chargedata[i].INVDATE+"</td><td>"+chargedata[i].DUEDATE+"</td><td>&nbsp;</td><td>"+chargedata[i].AMOUNT+"</td><td>"+chargedata[i].DUEAMOUNT+"</td><td><input type='checkbox' name='chrgcheckbox' onclick='addToPay()' value='"+chargedata[i].SLNO+"'/></td></tr>");
				}
			});
		   }
		
	
		  
	}); 
});
$(function() {
	$( "#Checkboxes1" ).buttonset(); 
});
$(function() {
	$( "#receivedDate" ).datepicker(); 
});
$(function() {
	$( "#Buttonset1" ).buttonset(); 
});
</script>
<div id="details">Content for New Dialog Goes Here</div>
<div id="holddetails">Content for New Dialog Goes Here</div>
<div id="confirmPayment" title="Confirm?">Do you want to add this payment?</div>
<script type="text/javascript">

  $(function() {
    $( "#confirmPayment" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      },
	  modal: true,
	  buttons: {
        "Yes": function() {
			receivePayment();
          $( this ).dialog( "close" );
        },
        "No": function() {
          $( this ).dialog( "close" );
        }
	  }
    });

  $(function() {
    $( "#details" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });


  $(function() {
    $( "#holddetails" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#detailsbtn" ).click(function() {
      $( "#details" ).dialog( "open" );
    });
  });


    $( "#receivePayment" ).click(function() {
      $( "#confirmPayment" ).dialog( "open" );
    });
  });
  
  
  
    $( "#chargedetails" ).click(function() {
      $( "#holddetails" ).dialog( "open" );
    });
  });
  
  $( "#cancelPayments" ).click(function() {
		clarAllPayment();
		//alert("test");
    });
  
  function addToPay(){

	  $("#chrgtopay > tbody").html("");
	  var totalDue = 0;
	var values = 	  $("input[name=chrgcheckbox]:checked").map(function(index, element) {
			var val = chargeMap[this.value];
				$("#chrgtopay").append("<tr><td>"+val.SLNO+"</td><td></td><td>"+val.DUEAMOUNT+"</td><td align='right'><input type='text' name='amtpay' align='right' id='amtpay_"+val.SLNO+"'/> </td></tr>");
			totalDue = parseFloat(totalDue) + parseFloat(val.DUEAMOUNT);
        return val.DUEAMOUNT;
    });;
	$("#totalDue").html(totalDue);
  }
  
  
  $("#amount").blur(function() {
	
	  var amt = parseFloat($("#amount").val());
$("#inworkds").html("In Words :" + inWords($("#amount").val()));
		$("input[name=amtpay]").map(function(index, element) {
//			alert(this.id.substring(7));
			if(amt> parseFloat(chargeMap[this.id.substring(7)].DUEAMOUNT)){
				this.value = chargeMap[this.id.substring(7)].DUEAMOUNT;
				amt-=parseFloat(this.value);
			}else{
				this.value=amt;
				amt =0;
			}
        });
});
  
  function receivePayment(){
	  var chargeitemStr = "";
	  var tmptotpaid = 0;
	  $("input[name=amtpay]").map(function(index, element) {
		  	
		  chargeitemStr+= this.id.substring(7) +":" +this.value+"," ;
		  tmptotpaid += parseFloat(this.value);
		  });

		if(	parseFloat($("#amount").val()) != tmptotpaid){
			alert($("#amount").val() + " should be distributed totally");
			return;
		}
	
	    $.post( "../../service/addPayment.php", { userid: uid,vide:$("#vide").val(),amount:$("#amount").val(),date:$("#receivedDate").val(),receivedby:'<?php echo $_SESSION["userName"] ; ?>',chargeDTL:chargeitemStr,billno:$("#billno").val(),ref:$("#Ref").val(), wfAmt:0,wfdetail:""})
	  		.done(function( data ) {

				if(data ==1){
					alert("Payment received successfully !!");
					clarAllPayscreen();
				}else{
					
						alert("fail");
				}
			});
  }
  
  function clarAllPayscreen(){
	  $("#inworkds").html("");
	  $("#chrgtopay > tbody").html("");
	  $("#chargetable > tbody").html("");
	  $( "#namesearch" ).val("");
	  uid = null;
	  $("#amount").val("");
	  $("#totalDue").html("");
	  $("#receivedDate").val("");
	  $("#billno").val("");
	  $("#Ref").val("");
	  $("#vide").val("");
  }
  function clarAllPayment(){
	  $("#inworkds").html("");
	  $("#chrgtopay > tbody").html("");

	  $("#amount").val("");
	  $("#totalDue").html("");
	  $("#receivedDate").val("");
	  ("#billno").val("");
	  $("#Ref").val("");
	  $("#vide").val("");
  }
  
  $("#vide").click(function() {
	  

    // If the select list is empty:
    if ($(this).find("option").size() == 0) {
        // Documentation on getJSON: http://api.jquery.com/jQuery.getJSON/
     $.getJSON("../../service/getVides.php", null, function (data) {
     $.each(data, function(i,item){
                // Create and append the new options into the select list
                $("#vide").append("<option value="+item.ID+">"+item.NAME+"</option>");

           });

        }); 

    }
});
  </script>