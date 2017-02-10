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
<link href="../../jQueryAssets/jquery.ui.dialog.min.css" rel="stylesheet" type="text/css">
<script src="../../jQueryAssets/jquery.ui-1.10.4.dialog.min.js" type="text/javascript"></script>
<link href="../../jQueryAssets/jquery.ui.dialog.min.css" rel="stylesheet" type="text/css">
<link href="../../DataTables/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
<script src="../../jQueryAssets/jquery.ui-1.10.4.dialog.min.js" type="text/javascript"></script>



<script type="text/javascript" src="../../DataTables/media/js/jquery.dataTables.min.js"></script>
<link href= type="text/css" href="../../DataTables/media/css/jquery.dataTables.min.css"></link>
<script type="text/javascript" src="../../DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<link href= type="text/css" href="../../DataTables/extensions/TableTools/css/dataTables.tableTools.min.css"></link>
<link href="../../DataTables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css">

<link href="../../jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<link href="../../jQueryAssets/jquery.ui.resizable.min.css" rel="stylesheet" type="text/css">
<link href="../../jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
<script src="../../jQueryAssets/jquery.ui-1.10.4.datepicker.min.js" type="text/javascript"></script>
<script src="../../jQueryAssets/jquery.ui-1.10.4.accordion.min.js" type="text/javascript"></script>
<script src="../../jQueryAssets/jquery.ui-1.10.4.button.min.js" type="text/javascript"></script>
<style>
  #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>
<link href="../../jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
</head>

<body>
 <?php require("../memberheader.php"); ?>
<div id="roleperm">
    <h3><a href="#">Role Permissin Mapping</a></h3>
    <div>
      <p></p>
      <div id="Buttonset2">
        <select>
          <option value="1">One</option>
          <option value="2">Two</option>
        </select>
        <button id="Button1">Save</button>
        <button id="Button3">Reset</button>
      </div>
      <div id="Checkboxes1">
        <table>
          <tr>
            <td><label for="Checkbox1">Label 1</label></td>
            <td><input type="checkbox" id="Checkbox1"></td>
          </tr>
        </table>
      </div>
      <p>&nbsp;</p>
    </div>
    <h3><a href="#">Section 2</a></h3>
    <div>
      <p>Content 2</p>
    </div>
</div>
<script type="text/javascript">
$(function() {
	$( "#roleperm" ).accordion(); 
});
$(function() {
	$( "#Buttonset2" ).buttonset(); 
});
</script>
</body>
</html>