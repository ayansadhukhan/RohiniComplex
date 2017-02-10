<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
<script src="../jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.accordion.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.tabs.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.button.min.js" type="text/javascript"></script>

</head>

<body>
<?php require("memberheader.php"); ?>
<div id="Tabs1">
  <ul>
    <li><a href="#tabs-4">Account Summary</a></li>
    <li><a href="#tabs-1">Profile</a></li>
<li><a href="#tabs-2">Asset</a></li>
<li><a href="#tabs-3">Payment History</a></li>
<li><a href="#tabs-5">Charges</a></li>
    <li><a href="#tabs-6">Ledger/Journal</a></li>
    <li><a href="#tabs-7">News</a></li>
    <li><a href="#tabs-8">Transaction</a></li>
    <li><a href="#tabs-9">Tab 9</a></li>
<li><a href="#tabs-10">Manage Members</a></li>
<li><a href="#tabs-11">Administration</a></li>
  </ul>
  <div id="tabs-4">
    <p>Content 4</p>
  </div>
  <div id="tabs-1">
  <p><table width="100%"><tr><td><?php include("profile1.php"); ?></td></tr></table>
</p>
  </div>
<div id="tabs-2">
    <div><?php include("asset.php"); ?></div>
  </div>
<div id="tabs-3">
    <p>Content 3</p>
</div>
<div id="tabs-5">
    <p>Content 5</p>
</div>
  <div id="tabs-6">
    <p>Content 6</p>
  </div>
  <div id="tabs-7">
    <p>Content 7</p>
  </div>
<div id="tabs-8">
<table width="100%"><tr>
  <td></td></tr></table>
  </div>
  <div id="tabs-9">
    <p>Content 9</p>
  </div> 
<div id="tabs-10">
  <p>Content 10</p>
</div>
<div id="tabs-11">
  <p>Content 11</p>
</div>
</div>
<script type="text/javascript">
$(function() {
	$( "#Tabs1" ).tabs(); 
});
$(function() {
	$( "#Buttonset1" ).buttonset(); 
});
</script>
</body>
</html>
