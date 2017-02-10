<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.autocomplete.min.css" rel="stylesheet" type="text/css">
<script src="../jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.tabs.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.autocomplete.min.js" type="text/javascript"></script>

<link href="../jQueryAssets/jquery.ui.dialog.min.css" rel="stylesheet" type="text/css">
<script src="../jQueryAssets/jquery.ui-1.10.4.dialog.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.button.min.js" type="text/javascript"></script>
<link href="../jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">

<link href="../jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">

<script src="../jQueryAssets/jquery.ui-1.10.4.datepicker.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.accordion.min.js" type="text/javascript"></script>
<link href="../jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
</head>
<style>

td.paid ,th.paid{
    background-color: green;
	color:white;
}

td.due ,th.due{
    background-color: red;
}

td.current ,th.current{
    background-color: orange;
}

td.future ,th.future{
    background-color: #555555;
	color:white;
}

td.hold ,th.hold{
    background-color: #64BAE4;
}

td.adjust ,th.adjust{
    background-color: #E01DAE;
		color:white;
}
td.partial ,th.partial{
    background-color: #50EB11;
}

</style>
<body>
<?php require("memberheader.php"); ?> <br/>
<div id="Accordion1">
  <h3><a href="#">Your Payment Status</a></h3>
  <div>
    <p> <table style="border-collapse:collapse; height:30px" width="90%">
  <tbody>
    <tr>
      <th width="4%"  >Legend: </th>
      <th width="14%"  class="paid">Paid</th>
      <th width="14%" class="partial">Partial Paid</th>
      <th width="14%" class="due">Due</th>
      <th width="14%" class="current">Current</th>
      <th width="14%" class="future">Future</th>
      <th width="14%" class="hold">Hold</th>
      <th  class="adjust">Adjusted</th>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>
<p><strong>Your Payment Status:</strong></p>
<table border="1" style="border-collapse:collapse" width="90%">
  <tbody>
    <tr>
      <th scope="col">Assset/Facility</th>
      <th scope="col">FY Year</th>
      <th scope="col">Apr</th>
      <th scope="col">May</th>
      <th scope="col">Jun</th>
      <th scope="col">Jul</th>
      <th scope="col">Aug</th>
      <th scope="col">Sep</th>
      <th scope="col">Oct</th>
      <th scope="col">Nov</th>
      <th scope="col">Dec</th>
      <th scope="col">Jan</th>
      <th scope="col">Feb</th>
      <th scope="col">Mar</th>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <th scope="row">2015-16</th>
      <td class="paid">
      	<table>
        <tr><td>Amount:</td></tr>
        <tr><td>Due:</td></tr>
        </table>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
</p>
  </div>
  <h3><a href="#">Other Charges</a></h3>
  <div>
    <p><table  border="1" style="border-collapse:collapse;" width="80%">
  <tbody>
    <tr>
      <th scope="col">Sl.No</th>
      <th scope="col">Charge details</th>
      <th scope="col">Invoice Date</th>
      <th scope="col">Due Date</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Amount</th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
            <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</p>
  </div>
  </div>
<div id="Accordion2">
  <h3><a href="#">Payment for selected charge</a></h3>
  <div>
    <p><table border="1" style="border-collapse:collapse" width="80%">
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
</table></p>
  </div>
  </div>



<script type="text/javascript">
$(function() {
	$( "#Accordion1" ).accordion(); 
});
$(function() {
	$( "#Accordion2" ).accordion(); 
});
</script>
</body>
</html>