<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../../jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="../../jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="../../jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
<link href="../../jQueryAssets/jquery.ui.autocomplete.min.css" rel="stylesheet" type="text/css">
<script src="../../jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="../../jQueryAssets/jquery.ui-1.10.4.tabs.min.js" type="text/javascript"></script>
<script src="../../jQueryAssets/jquery.ui-1.10.4.autocomplete.min.js" type="text/javascript"></script>
<link href="../../jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<link href="../../jQueryAssets/jquery.ui.dialog.min.css" rel="stylesheet" type="text/css">
<script src="../../jQueryAssets/jquery.ui-1.10.4.dialog.min.js" type="text/javascript"></script>
<script src="../../jQueryAssets/jquery.ui-1.10.4.button.min.js" type="text/javascript"></script>


<link href="../../jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">

<script src="../../jQueryAssets/jquery.ui-1.10.4.datepicker.min.js" type="text/javascript"></script>


</head>

<body>
 <?php require("../memberheader.php"); ?>     


<div id="Tabs1">
  <ul>
    <li><a href="#tabs-1">Income</a></li>
    <li><a href="#tabs-2">Expense</a></li>
    <li><a href="#tabs-3">Cash Transasctions</a></li>
    <li><a href="#tabs-4">Widrawl/Deposit</a></li>
  </ul>
  <div id="tabs-1">
    <?php require("income.php"); ?>
  </div>
  <div id="tabs-2">
    <?php require("expense.php"); ?>     
  </div>
  <div id="tabs-3">
    <?php require("currenttxn.php"); ?>
  </div>
  <div id="tabs-4">
    <?php require("banktxn.php"); ?>     
  </div>
</div>
<script type="text/javascript">
$(function() {
	$( "#Tabs1" ).tabs(); 
});



  var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

function inWords (num) {
    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'And ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + ' ' : '';
    return str + ' Only ';
}
</script>
</body>
</html>