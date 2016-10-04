//hotel

function nextdetail(){
	
	//check if no blank selected
		var numberofemptyfields = 0;
		var checkinvalue = 1;
		var numberofrows = 0;
		for (var i = 1; i <= room_no; i++) { 
			var checkin = "ci"+i;
			var checkout = "co"+i;
			var goodfor = "goodfor"+i;
			var roomselected = "room_selected"+i;
			//console.log(checkin);
			try{
				//check whether row is removed or displayed
				var something = document.getElementById(checkin);
				var somethingcheckout = document.getElementById(checkout);
				var somethinggoodfor = document.getElementById(goodfor);
				var somethingroomselected = document.getElementById(roomselected);
				//console.log(something.value);
				if(something.value == "" || somethingcheckout.value=="" || somethinggoodfor.value=="" || somethingroomselected.value==""){
				//console.log("null value");
				numberofemptyfields++;
				}else{
					
					numberofrows++;
					
				}
				if (something != undefined) {
						checkinvalue = document.getElementById(checkin).value;
						if(checkinvalue !=""){
							//save to temporary database

							
							//alert(numberofrows);
						}
					}
				
				
			}catch(e){
				console.log("No number_of_rooms element" +e.message);
			}
			
					

			
		}
	
	
	if(numberofemptyfields ==0){
				document.getElementById("detailtab").className = "";
				$('.nav-tabs a[href="#detail"]').tab('show');
				saveroomsselected();
				}else{
					//success,info,warning,danger,
					$.notifyDefaults({
						type: 'danger',
						allow_dismiss: false
					});
					$.notify('Please fill up all the fields.');
				}
	
}
function nextsummary(){
	//showselectedrooms();
	//check if there is selected guest
	var guestname = document.getElementById("guest_name").innerHTML;
	
	if(guestname!=""){
		document.getElementById("summarytab").className = "";
		$('.nav-tabs a[href="#summary"]').tab('show');
	}else{
		$.notifyDefaults({
			type: 'danger',
			allow_dismiss: false
		});
		$.notify('Please select guest.');
	}
	
	
	
}
function nextpayment(){
	//computesummary();
	document.getElementById("paymenttab").className = "";
	$('.nav-tabs a[href="#payment"]').tab('show');
	
}

//user logout

// tooltip demo


	$('#logout').click(function(){
				//alert("out");
					logout();
				});

	function logout(){
	
	
				$.ajax({
                    url: 'include/functions.php',
                    type: 'get',
                    data: {action: 'logout'},
                    success: function(response) {
						//alert(response);
						if(response=="loggedout"){
							//document.getElementById("message").style.display="block";
							//document.cookie = 'PHPSESSID=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
							
							window.location.replace("../");
						}
						
                    }
                });
	} 
	
$('#addguestbutton').click(function(){
	document.getElementById("guest_name").value = "";
	document.getElementById("guest_name").value = "";
	document.getElementById("address").value = "";
	document.getElementById("contact_no").value = "";
	document.getElementById("email").value = "";
	document.getElementById("nationality").value = "";
	
});
	
	
//item savePreferences
	$('#additembutton').click(function(){
		$('#update').prop("disabled", true);    
		$('#saveitem').prop("disabled", false);
		//clear fields
		//alert("clear");
		document.getElementById("itemno").value = "";
		document.getElementById("idescription").value = "";
		document.getElementById("unit").value = "";
		document.getElementById("cost").value = "";
		//alert("test");
		var sel = document.getElementById("supplier");
			sel.remove(0);
			var opt = document.createElement("option");
			opt.value = "0";
			opt.text = "";
			opt.selected = "selected";

			sel.add(opt,  sel.options[0]);


	});
	$('#addsupplierbutton').click(function(){
		//clear fields
		//alert("clear");
		document.getElementById("suppliername").value = "";
		document.getElementById("address").value = "";
		document.getElementById("contactno").value = "";
		document.getElementById("supplierid").value = "";

	});
	
	$('#addprbutton').click(function(){
		//clear fields
		//alert("clear");
		/*document.getElementById("suppliername").value = "";
		document.getElementById("address").value = "";
		document.getElementById("contactno").value = "";
		document.getElementById("supplierid").value = "";
		*/
		//get last pr number
		getLastprnumber();	

	});
	
	//add inventory button
	$('#addinventorybutton').click(function(){
		$('#update').prop("disabled", true);    
		$('#saveitem').prop("disabled", false);
		//clear fields
		//alert("clear");
		document.getElementById("unit").value = "";
		document.getElementById("qty").value = "";

	});
	
	
	//add inventory button
	$('#addemployeebutton').click(function(){
		$('#update').prop("disabled", true);    
		$('#saveitem').prop("disabled", false);
		//clear fields
		//alert("clear");
		document.getElementById("employeeno").value = "";
		document.getElementById("lname").value = "";
		document.getElementById("fname").value = "";
		document.getElementById("mname").value = "";
		document.getElementById("ename").value = "";
		document.getElementById("designation").value = "";

	});
	
	
	
	
	//save item
	$('#saveitem').click(function(){
				//alert("save");
					//logout();
				//$('#addItem').close();	
				//$("#addItem").modal('close')
				//saveItem();
				$('#update').prop("disabled", true);    
				$('#saveitem').prop("disabled", false);  
				
				var description = document.getElementById("idescription").value;
				var pcperunit = document.getElementById("pc_per_unit").value;
					var unit = document.getElementById("unit").value;
					var cost = document.getElementById("cost").value;
					var category = document.getElementById("category").value;
					var supplierid = document.getElementById("supplier").value;
					//alert(description);
					
					$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "saveitem", description: description, unit: unit, pc_per_unit: pcperunit, unitcost: cost, category: category,supplier:supplierid},
                    success: function(response) {
						//console.log();
						document.getElementById("idescription").value = "";
						document.getElementById("unit").value = "";
						document.getElementById("cost").value = "";

						//$('#itemtable').load(document.URL +  ' #itemtable');
						//$('#success-alert').show();
						//document.getElementById("success-alert").show;
						$('#success-alert').show("slow");
						$('#success-alert').removeClass("hide");
						setTimeout(function(){$('#success-alert').hide("slow");},1500);
						$( ".simplemodal-close" ).trigger( "click" );
						 setTimeout(function(){location.reload();},1500);
						
                        //$('table#resultTable tbody').html(response);
						//alert(response);
						//$('#itemtable').load(document.URL +  ' #itemtable');
						//$('#deletesuccess').show("fast");
						//setTimeout(function(){$('#deletesuccess').hide("slow");},1500);
						//$( ".simplemodal-close" ).trigger( "click" );
						return "valid";
                    }
                });

				//$( ".simplemodal-close" ).trigger( "click" );
				});
	//save supplier
	$('#savesupplier').click(function(){

				$('#updatesupplier').prop("disabled", true);    
				$('#saveitem').prop("disabled", false);  
				
					var suppliername = document.getElementById("suppliername").value;
					var address = document.getElementById("address").value;
					var contactno = document.getElementById("contactno").value;
					//alert('save');
					$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "savesupplier", suppliername: suppliername, address: address, contactno: contactno},
                    success: function(response) {
						console.log(response);
						document.getElementById("suppliername").value = "";
						document.getElementById("address").value = "";
						document.getElementById("contactno").value = "";

						$('#success-alert').show("slow");
						$('#success-alert').removeClass("hide");
						setTimeout(function(){$('#success-alert').hide("slow");},1500);
						$( ".simplemodal-close" ).trigger( "click" );
						 setTimeout(function(){location.reload();},1500);

						return "valid";
                    }
                });

				});				
	//save employee
	$('#saveemployee').click(function(){

				$('#updateemployee').prop("disabled", true);    
				$('#saveemployee').prop("disabled", false);  
				
					var employeeno = document.getElementById("employeeno").value;
					var lname = document.getElementById("lname").value;
					var fname = document.getElementById("fname").value;
					var mname = document.getElementById("mname").value;
					var ename = document.getElementById("ename").value;
					var designation = document.getElementById("designation").value;
					
					$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "saveemployee", employeeno: employeeno, lname: lname, fname: fname, mname: mname,ename: ename, designation: designation},
                    success: function(response) {
						console.log(response);
						document.getElementById("employeeno").value = "";
						document.getElementById("lname").value = "";
						document.getElementById("fname").value = "";
						document.getElementById("mname").value = "";
						document.getElementById("ename").value = "";
						document.getElementById("designation").value = "";

						$('#success-alert').show("slow");
						$('#success-alert').removeClass("hide");
						setTimeout(function(){$('#success-alert').hide("slow");},1500);
						$( ".simplemodal-close" ).trigger( "click" );
						 setTimeout(function(){location.reload();},1500);

						return "valid";
                    }
                });

				});

		
var verification;
var validuname;
		//save user
		$('#saveuser').click(function(){
				$('#updateuser').prop("disabled", true);    
				$('#saveuser').prop("disabled", false);  
				
				var validity = document.getElementById("unamevalidity").value;
				
				if(validity == "valid"){
					var username = document.getElementById("userusername").value;
					
					var user_name = document.getElementById("user_name").value;
					var usertype = document.getElementById("user_type").value;
					var username = document.getElementById("userusername").value;
					var password = document.getElementById("userpassword").value;
					//var usertype = "admin";

					
						$.ajax({
							url: 'include/functions.php',
							type: 'post',
							data: {action: "saveuser", username: username, password: password, usertype: usertype, user_name: user_name},
							success: function(response) {
								console.log(response);
								document.getElementById("userusername").value = "";
								document.getElementById("userpassword").value = "";
								

								$('#success-alert').show("slow");
								$('#success-alert').removeClass("hide");
								$.notifyDefaults({
									type: 'success',
									allow_dismiss: false
								});
								$.notify('Guest Saved!');
								setTimeout(function(){$('#success-alert').hide("slow");},1500);
								$( ".simplemodal-close" ).trigger( "click" );
								setTimeout(function(){location.reload();},1500);

								return "valid";
							}
						});
					
				}else{
					//invalid username
					alert("Please Choose another username.");
				}
				
				
				
					
					
					
					
					
					
					

				});	

//check username on database
				function verifyusername(){
					var username = document.getElementById("userusername").value;
					$.ajax({
							url: 'include/functions.php',
							type: 'post',
							data: {action: "checkusername", username: username},
							success: function(response) {
								console.log(response);
								if(response == "valid"){
									document.getElementById("unamevalidity").value = "valid";
								}else{
									document.getElementById("unamevalidity").value = "invalid";
								}
							}
						});
				}
				
				
				
				
				//save user
$('#savecharge').click(function(){
				$('#updatecharge').prop("disabled", true);    
				$('#savecharge').prop("disabled", false);  
				
				var chargetitle = document.getElementById("charge_title").value;
				var description = document.getElementById("description").value;
				var amount = document.getElementById("amount").value;
				
				$.ajax({
					url: 'include/functions.php',
					type: 'post',
					data: {action: "savecharge", chargetitle: chargetitle, description: description, amount: amount},
					success: function(response) {
						console.log(response);
						document.getElementById("charge_title").value = "";
						document.getElementById("description").value = "";
						document.getElementById("amount").value = "";

						$('#success-alert').show("slow");
						$('#success-alert').removeClass("hide");
						$.notifyDefaults({
									type: 'success',
									allow_dismiss: false
								});
						$.notify('New Charge Saved!');
						//setTimeout(function(){$('#success-alert').hide("slow");},1500);
						$( ".simplemodal-close" ).trigger( "click" );
						 setTimeout(function(){location.reload();},1500);

						return "valid";
					}
				});
					
				
						

});				
				
function deletecharge(id){
	
	var r = confirm("Are your sure you want to delete this Charge?");
    if (r == true) {
        //alert ("You pressed OK!");
		$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "deletecharge", chargeid: id},
                    success: function(response) {
						$.notifyDefaults({
									type: 'success',
									allow_dismiss: false
								});
						$.notify('Charge Deleted!');
						setTimeout(function(){location.reload();},1500);
                    }
                });
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}			
				
				

//edit guest
function editguest(id){
	$('#updateguest').prop("disabled", false);    
	$('#saveguest').prop("disabled", true);    
	$.ajax({
		url: 'include/functions.php',
		type: 'post',
		data: {action: "getguest", eid : id},
		success: function(response) {
			//console.log(response);
			var data = JSON.parse(response);
			document.getElementById("guestid").value = id;
			
			var sel = document.getElementById("guest_type");
			var opt = document.createElement("option");
			opt.value = data.guestType;
			opt.text = data.guestType;
			opt.selected = "selected";
			sel.add(opt,  sel.options[0]);
			
			
			
			document.getElementById("guest_name").value = data.guestName;
			document.getElementById("address").value = data.address;
			document.getElementById("contact_no").value = data.contactNo;
			document.getElementById("email").value = data.eMail;
			document.getElementById("nationality").value = data.nationality;
			//document.getElementById("user_type").value = data.designation;

			return "valid";
		}
	});
	
}


//update guest
$('#updateguest').click(function(){
	
		var guestid = document.getElementById("guestid").value;
		var guestname = document.getElementById("guest_name").value;
		var address = document.getElementById("address").value;
		var contact_no = document.getElementById("contact_no").value;
		var email = document.getElementById("email").value;
		var nationality = document.getElementById("nationality").value;
		var guest_type = document.getElementById("guest_type").value;
		
		$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "updateguest", guestid: guestid, guestname: guestname, address: address, contact_no: contact_no, email: email, nationality: nationality,guest_type:guest_type},
                    success: function(response) {
						console.log(response);
						//alert(response);
						document.getElementById("guestid").value = "";
						document.getElementById("guest_name").value = "";
						document.getElementById("address").value = "";
						document.getElementById("contact_no").value = "";
						document.getElementById("email").value = "";
						document.getElementById("nationality").value = "";
						document.getElementById("guest_type").value ="";
						location.reload();
						$( ".simplemodal-close" ).trigger( "click" );
						$.notifyDefaults({
									type: 'success',
									allow_dismiss: false
								});
						$.notify('Guest details updated!');
						setTimeout(function(){location.reload();},1500);
						
						return "valid";
                    }
                });
		
	});



//delete user
function deleteuser(id){
	var r = confirm("Are your sure you want to delete this user?");
    if (r == true) {
        
		$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "deleteuser", userid: id},
                    success: function(response) {
						$.notifyDefaults({
									type: 'success',
									allow_dismiss: false
								});
						$.notify('User deleted!');
						setTimeout(function(){location.reload();},1500);
                    }
                });
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

//edit employee
function editemployee(id){
	$('#updateemployee').prop("disabled", false);    
	$('#saveemployee').prop("disabled", true);    
	$.ajax({
		url: 'include/functions.php',
		type: 'post',
		data: {action: "getuser", eid : id},
		success: function(response) {
			//console.log(response);
			var data = JSON.parse(response);
			document.getElementById("eid").value = id;
			document.getElementById("user_name").value = data.name;
			document.getElementById("userusername").value = data.userName;
			document.getElementById("userpassword").value = data.password;
			//document.getElementById("user_type").value = data.designation;
			var sel = document.getElementById("user_type");
			var opt = document.createElement("option");
			opt.value = data.userType;
			opt.text = data.userType;
			opt.selected = "selected";
			sel.add(opt,  sel.options[0]);
			return "valid";
		}
	});
	
}

//update employee
$('#updateemployee').click(function(){
	
		var eid = document.getElementById("eid").value;
		var employeeno = document.getElementById("employeeno").value;
		var lname = document.getElementById("lname").value;
		var fname = document.getElementById("fname").value;
		var mname = document.getElementById("mname").value;
		var ename = document.getElementById("ename").value;
		var designation = document.getElementById("designation").value;
		
		$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "updateemployee", eid: eid, employeeno: employeeno, lname: lname, fname: fname, mname: mname, ename: ename, designation: designation},
                    success: function(response) {
						console.log(response);
						//alert(response);
						document.getElementById("eid").value = "";
						document.getElementById("employeeno").value = "";
						document.getElementById("lname").value = "";
						document.getElementById("fname").value = "";
						document.getElementById("lname").value = "";
						document.getElementById("ename").value = "";
						document.getElementById("designation").value = "";
location.reload();
						$( ".simplemodal-close" ).trigger( "click" );
						$.notifyDefaults({
									type: 'success',
									allow_dismiss: false
								});
						$.notify('Employee details updated!');
						setTimeout(function(){location.reload();},1500);
						
						return "valid";
                    }
                });
		
	});
//delete employee
function deleteemployee(id){
	var r = confirm("Are your sure you want to delete this Employee?");
    if (r == true) {
        
		$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "deleteemployee", eid: id},
                    success: function(response) {
						$.notifyDefaults({
									type: 'success',
									allow_dismiss: false
								});
						$.notify('Employee deleted!');
						setTimeout(function(){location.reload();},1500);
                    }
                });
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}
	//date picker for PR Request page
	$(function() {
		$('.datepicker').datepicker({format: 'yyyy-mm-dd'});
	});

	
	
	/* ********* purchase request module *** */
	
function getLastprnumber(){
	
	$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "getlastpr"},
                    success: function(response) {
						console.log(response);
						
                        var d = new Date();
						var month = d.getMonth();
						//increate month by 1 since it is 0 indexed
						month = month + 1;
						var day = d.getDate();
						var year = d.getFullYear();
						var yy = year.toString().substring(2);
						
						var lastdigit = response.substring(5);
						
						//alert(lastdigit);
						
						/*var lastmonth = response.substring(3,5);
						var lastyear = response.substring(1,2);
						
						
							lastmonth = parseInt(lastmonth);
							if(lastmonth < month){
								
								lastdigit = 1;
							}else{
								lastdigit = parseInt(lastdigit) +1;
							}

						//converts month to a string
						month = month + "";
						//if month is 1-9 pad right with a 0 for two digits
						if (month.length == 1)
						{
							month = "0" + month;
						}
		
						var autopr = yy + '-' + month + '-' + lastdigit;
						
						*/
						lastdigit++;
						var autopr = year + '-' + lastdigit;
						document.getElementById("prnumber").value = autopr; 
						//alert (autopr);
						
                    }
                });
	
}
//auto input Unit in additem select
function selectunit(){
	
	var itemNo = document.getElementById("itemdescription").value;
	
	$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "getunitinventory", itemno: itemNo},
                    success: function(response) {
						console.log(response);
						var data = JSON.parse(response);
						document.getElementById("unit").value = data.unit; 
                        
						
                    }
                });
	
	
	
}



function addpritem(id){
	var table=document.getElementById("pr_items");
	$(table).append( "<tr><td>aaaa</td></tr>" );
	
}

//delete inventory
function deleteinventory(id){
	
	var r = confirm("Are your sure you want to delete this Item?");
    if (r == true) {
        //alert ("You pressed OK!");
		$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "deleteinventory", inventoryid: id},
                    success: function(response) {
						location.reload();
                    }
                });
		
    } if(r == false) {
        //txt = "You pressed Cancel!"; 
		
    }
	
}

$(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
		
		//items sort by name
		$('#dataTables-items').DataTable({
                responsive: true,
				 "order": [[ 0, "asc" ]]
        });
		//base unit of measure
		//items sort by name
		$('#dataTables-baseunit').DataTable({
                responsive: true,
				 "order": [[ 0, "asc" ]]
        });
		
		//guest table
		$('#dataTables-guest').DataTable({
                responsive: true,
				 "order": [[ 1, "asc" ]]
        });
		
		
    });
	
/////////hotel management functions///////////

		//save guest
		$('#saveguest').click(function(){
			var guestname = document.getElementById("guest_name").value;
			//guestname mandatory
			if(guestname!=''){
				$('#updateguest').prop("disabled", true);    
				$('#saveguest').prop("disabled", false);  
				var guesttype = document.getElementById("guest_type").value;
				var address = document.getElementById("address").value;
				var contactno = document.getElementById("contact_no").value;
				var email = document.getElementById("email").value;
				var nationality = document.getElementById("nationality").value;
					
					
					$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "saveguest", guesttype:guesttype, guestname: guestname, address: address, contactno:contactno, email:email, nationality:nationality},
                    success: function(response) {
						console.log(response);
						document.getElementById("guest_name").value = "";
						document.getElementById("address").value = "";
						document.getElementById("contact_no").value = "";
						document.getElementById("email").value = "";
						document.getElementById("nationality").value = "";
						

						$('#success-alert').show("slow");
						$('#success-alert').removeClass("hide");
						setTimeout(function(){$('#success-alert').hide("slow");},1500);
						$( ".simplemodal-close" ).trigger( "click" );
						$.notifyDefaults({
									type: 'success',
									allow_dismiss: false
								});
						$.notify('New guest saved!');
						
						 setTimeout(function(){location.reload();},1500);

						return "valid";
                    }
                });
				
			}else{
				alert("Guest Name Required!");
			}

				

				});	



//delete guest
function deleteguest(id){
	var r = confirm("Are your sure you want to delete this guest?");
    if (r == true) {
        
		$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "deleteguest", guestid: id},
                    success: function(response) {
						console.log(response);
						$.notifyDefaults({
									type: 'success',
									allow_dismiss: false
								});
						$.notify('Guest deleted');
						setTimeout(function(){location.reload();},1500);
                    }
                });
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}


$('#addroombutton').click(function(){
		$('#updateroom').prop("disabled", true);    
		$('#saveroom').prop("disabled", false);
		//clear fields
		
		document.getElementById("roomname").value = "";
		document.getElementById("building").value = "";
	});
	
	
	//save room
		$('#saveroom').click(function(){
			var roomname = document.getElementById("roomname").value;
			//guestname mandatory
			if(roomname!=''){
				
				var building = document.getElementById("building").value;
									
					$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "saveroom", roomname:roomname, building: building},
                    success: function(response) {
						console.log(response);
						document.getElementById("roomname").value = "";
						document.getElementById("building").value = "";


						$('#success-alert').show("slow");
						$('#success-alert').removeClass("hide");
						setTimeout(function(){$('#success-alert').hide("slow");},1500);
						$( ".simplemodal-close" ).trigger( "click" );
						$.notifyDefaults({
									type: 'success',
									allow_dismiss: false
								});
						$.notify('New room added!');
						
						 setTimeout(function(){location.reload();},1500);

						return "valid";
                    }
                });
				
			}else{
				alert("Room Name Required!");
			}

				

				});	

	function updatesettings(){
		
		var current_season = document.getElementById("current_season").value;
		//alert(current_season);
		$.ajax({
		url: 'include/functions.php',
		type: 'post',
		data: {action: "updatesettings", cseason : current_season},
		success: function(response) {
			$.notifyDefaults({
						type: 'success',
						allow_dismiss: false
					});
			$.notify('Settings updated!');
			setTimeout(function(){location.reload();},1500);
			return "valid";
		}
	});
	}
	try{
		var room_no = document.getElementById("number_of_rooms").value;
	}catch(e){
		console.log("No number_of_rooms element" +e.message);
	}
	

	
	//var room_no = 1;
	var row_count = 1;
	function addroom(){
		
		row_count++;
		room_no++;
		//alert(room_no);
		document.getElementById("number_of_rooms").value = room_no;
		$('#reservation_date tr:last').after("<tr id='row"+room_no+"'><td><input id='ci"+room_no+"' type='date' class='form-control'></td><td><input id='co"+room_no+"' type='date' class='form-control'></td><td><select class='form-control' onchange='onchange_goodfor(this.value,"+room_no+");' id='goodfor"+room_no+"'></select></td><td><select class='form-control' id='room_selected"+room_no+"'></select></td><td><button type='button' class='btn btn-danger btn-circle' onclick='removeroom("+room_no+");' id='delete"+room_no+"'><i class='fa fa-times'></i></button></td></tr>");
		//console.log("row count:"+row_count);
		//console.log("room no:"+room_no);
		
		goodforlist(room_no);
	}
	
	
	function removeroom(rowid){
		row_count--;
		console.log("row count:"+row_count);
		console.log("row id:"+rowid);
		//document.getElementById("reservation_date").deleteRow(rowid)
		 document.getElementById("row"+rowid).outerHTML="";
		
	}
	
	function goodforlist(goodforid){
		$.ajax({
			url: 'include/functions.php',
			type: 'post',
			data: {action: "getgoodforlist"},
			success: function(response) {
				var goodforlist = JSON.parse(response);
				console.log(goodforlist);
				for(var ctr=0;ctr<goodforlist.length; ctr++){
				
					$("#goodfor"+goodforid).append("<option >"+goodforlist[ctr].goodfor+"</option>");
				
				}
			}
		});
	}
	
	function viewrows(){
		
		
		//alert(row_count);
		getrowvalues();
		//saveanddisplaysummary();
	}
	
	function getrowvalues(){
		
		var checkinvalue = 1;
		var numberofrows = 0;
		for (var i = 1; i <= room_no; i++) { 
			var checkin = "ci"+i;
			console.log(checkin);
			
			//check whether row is removed or displayed
			var something = document.getElementById(checkin);
			console.log(something);
			if(something == null){
				console.log("null value");
			}else{
				
				numberofrows++;
				
			}
					if (something != undefined) {
						checkinvalue = document.getElementById(checkin).value;
						if(checkinvalue !=""){
							//save to temporary database
							$.ajax({
								url: 'include/functions.php',
								type: 'post',
								data: {action: "savetemprooms", description: description, unit: unit, pc_per_unit: pcperunit, unitcost: cost, category: category,supplier:supplierid},
								success: function(response) {
									return "valid";
								}
							});
							
							//alert(numberofrows);
						}
					}

			
		}
		//console.log(room_no);
		//console.log(numberofrows);
	}
	//function saveanddisplaysummary(){
		
		
	//}
	
	
	function computesummary(){
		alert("computed");
	}
	
	//save room to temporary table
	function saveroomsselected(){
					//var supplierid = document.getElementById("supplier").value;
					//alert(description);
					
					

				
		
	}
	
	
	function bodyonload(){
		console.log( "ready!" );
	}

	$(function() {
        // initialize sol
        $('#guest-list').searchableOptionList({
			maxHeight: '250px'
			
		});
		
    });
	
	//selecting guest and show details
	function chooseguest() {
		var selectBox = document.getElementById("guest-list");
		var selectedValue = selectBox.options[selectBox.selectedIndex].value;
		
		$.ajax({
		url: 'include/functions.php',
		type: 'post',
		data: {action: "selectguest", guestid : selectedValue},
		success: function(response) {
			console.log(response);
			var data = JSON.parse(response);
			//document.getElementById("unit").value = data.unit; 
			document.getElementById("guestid").value = data.guestID;
			document.getElementById("guest_type").innerHTML = data.guestType;
			document.getElementById("guest_name").innerHTML = data.guestName;
			document.getElementById("guest_address").innerHTML = data.address;
			document.getElementById("guest_contactno").innerHTML = data.contactNo;
			document.getElementById("guest_email").innerHTML = data.eMail;
			document.getElementById("guest_nationality").innerHTML = data.nationality;
			
			//summary tab
			document.getElementById("guest_name_summary").innerHTML = data.guestName;
			
			}
		});
    //alert(selectedValue);
	
   }
	//get rooms base from number of guest
function onchange_goodfor(numberofguest,reservationid){
	var room_no = document.getElementById("number_of_rooms").value;
	$.ajax({
		url: 'include/functions.php',
		type: 'post',
		data: {action: "selectroomsnumberofguest", numberofguest : numberofguest},
		success: function(response) {
			//console.log(response);
			var room_list = JSON.parse(response);
			var room_optionlist = document.getElementById("room_selected"+reservationid);
			room_optionlist.innerHTML = "";
			for(var ctr=0;ctr<room_list.length; ctr++){
				
				$("#room_selected"+reservationid).append("<option value='"+room_list[ctr].roomID+"'>"+room_list[ctr].roomName+"</option>");
				
			}
			/*
			//document.getElementById("unit").value = data.unit; 
			document.getElementById("guestid").value = data.guestID;
			document.getElementById("guest_type").innerHTML = data.guestType;
			document.getElementById("guest_name").innerHTML = data.guestName;
			document.getElementById("guest_address").innerHTML = data.address;
			document.getElementById("guest_contactno").innerHTML = data.contactNo;
			document.getElementById("guest_email").innerHTML = data.eMail;
			document.getElementById("guest_nationality").innerHTML = data.nationality;
			
			//summary tab
			document.getElementById("guest_name_summary").innerHTML = data.guestName;
			*/
			}
		});
	
	
}

///////////end//////////
