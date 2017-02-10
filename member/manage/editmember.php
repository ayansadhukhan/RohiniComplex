<div id="EditPageMemberBtn">
  <button id="SubmitEditBtn">Submit</button>
  <button id="ResetEditBtn">Reset</button>

</div>

<div id="Accordioneditmember"  style="width:600px">
  <h3><a href="#">Personal</a></h3>
  <div>
    <p>
    <input type="hidden" id="edit_uid"/>
    <table cellpadding="10"><tr><td>
    <table cellpadding="10">
      <tr>
              <td ><b>User id</b></td><td> : </td><td ><input type="text" id="edit_username"/> </td></tr>
    		<tr><td ><b>First Name</b></td><td> : </td><td ><input type="text" id="edit_fname"/></td></tr>
            <tr><td ><b>Middle Name</b></td><td> : </td><td ><input type="text" id="edit_mname"/></td></tr>
       		<tr><td ><b>Last Name</b></td><td> : </td><td ><input type="text" id="edit_lname"/></td></tr>
            <tr><td ><b>Sex</b></td><td> : </td><td ><p>
              <label>
                <input type="radio" name="sexgroup" value="male" id="edit_sexmale">
                Male</label>
            
              <label>
                <input type="radio" name="sexgroup" value="female" id="edit_sexfemale">
                Female</label>
              <br>
            </p></td></tr>
            <tr><td ><b>Date of Birth</b></td><td> : </td><td ><input type="text" id="edit_DOB"></td></tr>
            <tr><td ><b>Address</b></td><td> : </td><td ><textarea id="edit_address"></textarea> </td></tr>
            <tr><td ><b>PIN</b></td><td> : </td><td ><input type="text" id="edit_PIN"> </td></tr>
            <tr><td ><b>Email</b></td><td> : </td><td ><input type="email" id="edit_email"> </td></tr>
            <tr><td ><b>Phone</b></td><td> : </td><td ><input type="tel" id="edit_tel"> </td></tr>
            <tr>
              <td ><b>Mobile</b></td><td> : </td><td ><input type="tel" id="edit_mob"> </td></tr>
    	
    </table></td><td valign="top" >
    
      <img src="../../images/face.jpg" width="160" height="160" alt=""/>
      <br/><br/><b>Roles:</b>
	<div id="edit_role_div" >
    ayan11
    
    </div>
      
      </td></tr></table></p>
  </div>
  <!--<h3><a href="#">Documents</a></h3>
  <div>
    <p>
    
    </p>
  </div> -->
  <h3><a href="#">Asset and Facility</a></h3>
  <div>
    <p>
    <select name="allAssets" id="allAssets">
    </select> <button id="mapAssetBtn" > Add</button>
    <div id="selectedAsset">
    <table border="1" style="border-collapse:collapse" width="80%" id="selectedAssetTable">
		<thead>
    		<tr><th>Asset Type</th><th>Asset Name</th><th>Relation</th><th>Start Date</th><th>Delete?</th></tr>
      	</thead>
  		<tbody></tbody>

    </table>
    </div>
</p>
  </div>
</div>
<script type="text/javascript">
$(function() {
	$( "#Accordioneditmember" ).accordion({
		collapsible: true
		}); 
});
$(function() {
	$( "#edit_DOB" ).datepicker(); 
});

    $( "#mapAssetBtn" ).click(function() {

		var selectedasset  = $("#allAssets").val();
		for(i=0;i<editAllAssets.length;i++){
			if(editAllAssets[i].ID==selectedasset){
										$("#selectedAssetTable").append("<tr><td>"+editAllAssets[i].ASSETTYPE+"</td><td>"+editAllAssets[i].ASSET+"</td><td>"+ getRelationDropdown(null)+"</td><td><input type='text' id='assetedit_id"+editAllAssets[i].ID+"' value='' /></td><td><a href='#' onclick='deleteRow(this)'>Delete?</a></td></tr>");
	$("#assetedit_id"+editAllAssets[i].ID).datepicker(); 		

			}
		}
		
    });

/*
$(function() {
	
	$("#allAssets").selectmenu();
}); */

$(function() {
	$( "#EditPageMemberBtn" ).buttonset(); 
});
var editAllAssets=null;
function populateEditData(event, ui,uid ){

	  $.post( "../../service/getAllRoles.php",{userid:uid} )
	  		.done(function( data ) {

				document.getElementById("edit_role_div").innerHTML="";
				var roles = jQuery.parseJSON(data);
			//	$("edit_role_div").html("ayan");
			var rolesStr="<ul>";
				for(i=0;i<roles.length;i++){

	rolesStr = rolesStr + ("<li><input type='checkbox' name='roles' value='"+roles[i].ID+"'>"+roles[i].NAME+" </input></li>");
				}

				document.getElementById("edit_role_div").innerHTML=rolesStr +"</ul>";	
				populateAllRelations(event, ui,uid );
		
		});

}

var relations = null;
function populateAllRelations(event, ui,uid ){

 $.post( "../../service/getAllRelations.php",{} )
	  		.done(function( data ) {
				relations = null;
				relations = jQuery.parseJSON(data);
				populateAllAssets(event, ui,uid );	
		});
}

function populateAllAssets(event, ui,uid ){

 $.post( "../../service/getAllAssets.php",{} )
	  		.done(function( data ) {

				document.getElementById("allAssets").innerHTML="";

				var assets = jQuery.parseJSON(data);
			//	$("edit_role_div").html("ayan");
				editAllAssets = assets;
				var assetsMap={};

				for(i=0;i<assets.length;i++){

					assetsMap[assets[i].ASSETTYPE]=assetsMap[assets[i].ASSETTYPE] + "<option value="+assets[i].ID+">"+assets[i].ASSET+"</option>";	
				}

				var assetStr = "";
				var keys =Object.keys(assetsMap); 

				for(i=0;i<keys.length;i++){
					assetStr = assetStr+"<optgroup label="+keys[i]+">"+assetsMap[keys[i]]+" </optgroup>";
				}

			document.getElementById("allAssets").innerHTML=assetStr;	
			populateMemberDetails(event, ui,uid );			
		});

	
}
var currentAssets = null;

function populateCurrentAssets(event, ui,uid ){

	 $.post( "../../service/getCurrentAssetByUserID.php",{userID:uid} )
	  		.done(function( data ) {

				$("#selectedAssetTable > tbody").html("");
//				alert(data);
					 var memberData = jQuery.parseJSON(data);	
					 currentAssets = null;

					for(i=0;i<memberData.length;i++){
					//	alert("aaaa");
						//currentAssets[memberData[i].ASSETID] = 	memberData[i];
						
						$("#selectedAssetTable").append("<tr><td>"+memberData[i].ASSETTYPE+"</td><td>"+memberData[i].ASSETNAME+"</td><td>"+ getRelationDropdown(memberData[i].RELATIONID)+"</td><td><input type='text' id='assetedit_id"+memberData[i].ID+"' value='"+memberData[i].STARTDATE+"' /></td><td><a href='#' onclick='deleteRow(this)'>Delete?</a></td></tr>");
	$("#assetedit_id"+memberData[i].ID).datepicker(); 		
					}

				
			});
}

function getRelationDropdown(selval){
	//alert(selval);
	var a= "";
	if(selval == null){
		a = "<select>";
	}else{
		a= "<select value='"+selval+"'>";
	}
	for(var i=0;i<relations.length;i++){
		a =a+"<option value='"+relations[i].ID+"' "+(relations[i].ID==selval?"selected":"")+" > "+ relations[i].CODE +"</option>";
	}
	a =a+"</select>";
	return a;
}

function deleteRow(link){
	var i = link.parentNode.parentNode.rowIndex;

	document.getElementById("selectedAssetTable").deleteRow(i);
}
function populateMemberDetails(event, ui,uid ){
	
		  $.post( "../../service/getMemberDetailsByID.php",{userid:uid} )
	  		.done(function( data ) {
				
	  			var memberData = jQuery.parseJSON(data);
	  			for(i=0;i<memberData.length;i++){

				document.getElementById("edit_uid").value = memberData[i].USERNAME;			
				document.getElementById("edit_username").value = memberData[i].USERNAME;			
				document.getElementById("edit_fname").value =memberData[i].FNAME;
				document.getElementById("edit_mname").value =memberData[i].MNAME;
				document.getElementById("edit_lname").value=memberData[i].LNAME;					


				if(memberData[i].sex == "F"){
						document.getElementById("edit_sexfemale").checked=true;
				}else{
					document.getElementById("edit_sexmale").checked=true;
				}
				//document.getElementById("edit_sexmale").value=memberData[i].sex;					
				//document.getElementById("edit_sexfemale").value=memberData[i].LNAME;					

				document.getElementById("edit_DOB").value=memberData[i].DOB;					
				document.getElementById("edit_address").value=memberData[i].ADDRESS;					
				document.getElementById("edit_PIN").value=memberData[i].PIN;						
				document.getElementById("edit_email").value=memberData[i].EMAIL;					
				document.getElementById("edit_tel").value=memberData[i].PHONE;									
				document.getElementById("edit_mob").value=memberData[i].MOBILENUMBER;	
				
				var roleids = memberData[i].ROLEIDS.split(",");
				
				$("input:checkbox[name=roles]").each(function(){
				
					if($.inArray(this.value,roleids)== -1){
				
						this.checked=false;						
					}else{
										
						this.checked=true;
					}
				});																
					}
			populateCurrentAssets(event, ui,uid );
			});

}


</script>
