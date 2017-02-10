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
<link href="../../jQueryAssets/jquery.ui.dialog.min.css" rel="stylesheet" type="text/css">
<link href="../../DataTables/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
<script src="../../jQueryAssets/jquery.ui-1.10.4.dialog.min.js" type="text/javascript"></script>


<script type="text/javascript" src="../../DataTables/media/js/jquery.dataTables.min.js"></script>
<link href= type="text/css" href="../../DataTables/media/css/jquery.dataTables.min.css"></link>
<script type="text/javascript" src="../../DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<link href= type="text/css" href="../../DataTables/extensions/TableTools/css/dataTables.tableTools.min.css"></link>
<link href="../../DataTables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css">

<link href="../../jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<link href="../../jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
<link href="../../jQueryAssets/jquery.ui.resizable.min.css" rel="stylesheet" type="text/css">
<script src="../../jQueryAssets/jquery.ui-1.10.4.datepicker.min.js" type="text/javascript"></script>
<script src="../../jQueryAssets/jquery.ui-1.10.4.accordion.min.js" type="text/javascript"></script>
</head>

<body>
 <?php require("../memberheader.php"); ?>
<div id="memberlistacc">
    <h3><a href="#">Member List</a></h3>
    <div>
      <p><table width="100%" id="memberlist" class="display">
  
   <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Asset</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
    </tr>
    </thead>
  <tbody>
  
  </tbody>
</table>

</p>
<div id="EditBtns">
  <button  id="ViewBtn">View</button>
  <button id="EditBtn">Edit</button>
  
</div>
<p></p>
    </div>
</div>

<div id="memberdetail">

<?php require("editmember.php") ; ?>

</div>
<script type="text/javascript">

var table = null;
$(function() {
	
  $.post( "../../service/getAllMembers.php",{} )
	  		.done(function( data ) {
				
				$("#memberlist > tbody").html("");
				
	  			var chargedata = jQuery.parseJSON(data);
	  			for(i=0;i<chargedata.length;i++){
					
					$("#memberlist").append("<tr><td>"+chargedata[i].id+"</td><td>"+chargedata[i].Name+"</td><td>"+chargedata[i].Role+"</td><td>"+chargedata[i].Asset+"</td><td>"+chargedata[i].PHONE+"</td><td>"+chargedata[i].EMAIL+"</td></tr>");
				}

table =   $('#memberlist').DataTable( {
        dom: 'T<"clear">lfrtip<"clear spacer">T',
        tableTools: {
			"sRowSelect": "single",
			"aButtons": ""
        },
		"columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            }]
    } );
	


			});
});




$(function() {
	$( "#memberlistacc" ).accordion({
		heightStyle:"content"
	}); 
});

/* $(document).ready(function() {
    $('#memberlist').DataTable( {
        dom: 'T<"clear">lfrtip<"clear spacer">T',
        tableTools: {
			"sRowSelect": "single",
			"aButtons": ""
        },
		"columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            }]
    } );
	
} ); */
$(function() {
	$( "#EditBtns" ).buttonset(); 
});

/*    $( "#ViewBtn" ).click(function() {

	var oTT = TableTools.fnGetInstance( 'memberlist' );
    var aSelectedTrs = oTT.fnGetSelected();
	alert(aSelectedTrs);


    }); */
$(function() {
	$( "#memberdetail" ).dialog({
		autoOpen:false,
		modal:true,
		title:"Member Detail",
		show:{effect: "blind"},
		hide:{effect: "fold"},
		width: "auto",
		open: function( event, ui ) {
			
			
			populateEditData(event,ui,selectedid);
			
			
		}
	});
	$( "#ViewBtn" ).click(function(){

		$( "#memberdetail" ).dialog("open");
	
	});
});

$('#memberlist tbody').on( 'click', 'tr', function () {
    var idx = table
        .row( this )
        .index();

/*    table
        .cell( idx, 0 ) // note that you could actually pass in 'this' as the row selector!
        .data( 'Updated' )
        .draw();
*/
selectedid = table.cell(idx,0).data();
} );

var selectedid = null;				
</script>

</body>
</html>