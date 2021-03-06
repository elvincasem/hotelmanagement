<?php
	require 'db_connection.php';

//logout user
	if($_GET['action'] == "logout"){
		ob_start();
		session_start();
		session_unset();
		session_destroy();
		//echo "Log";
		echo "loggedout";
	}

//list rows and columns sql
function selectListSQL($q){
	
	$conn = dbConnect();
	$stmt = $conn->prepare($q);
	$stmt->execute();
	$rows = $stmt->fetchAll();
	return $rows;
	$conn = null;
	
}
//return single value sql
function singleSQL($q){
	$conn = dbConnect();
	$stmt = $conn->prepare($q);
	$stmt->execute();
	$rows = $stmt->fetch();
	return $rows[0];
	$conn = null;
}
	
	
	//save item
	if($_POST['action'] == "saveitem"){

		$conn = dbConnect();
		$description = $_POST['description'];
		$unit = $_POST['unit'];
		$unitcost = $_POST['unitcost'];
		$pcperunit = $_POST['pc_per_unit'];
		$category = $_POST['category'];
		$supplier = $_POST['supplier'];
		//return "ok";

		$sqlinsert = "INSERT INTO items(description,category,unit,pc_per_unit,unitcost,supplierID) VALUES('$description','$category','$unit','$pcperunit',$unitcost,$supplier)";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		
		$conn = null;

	}
	
	//delete item
	if($_POST['action'] == "deleteitem"){
		$conn = dbConnect();
		$itemno = $_POST['itemno'];
		$sqldelete = "DELETE FROM items where itemNo='$itemno'";
		$delete = $conn->prepare($sqldelete);
		$delete->execute();
		$conn = null;

	}
	
	//update item
	if($_POST['action'] == "updateitem"){

		$conn = dbConnect();
		$itemno = $_POST['itemno'];
		$desc = $_POST['description'];
		$pcperunit = $_POST['pc_per_unit'];
		$unit = $_POST['unit'];
		$cost = $_POST['unitcost'];
		$category = $_POST['category'];
		$supplier = $_POST['supplier'];
		$sqlupdate = "UPDATE items set description = '$desc', unit = '$unit',pc_per_unit = '$pcperunit', unitCost = $cost, category='$category', supplierID =$supplier where itemNo=$itemno";
		echo $sqlupdate;
		$update = $conn->prepare($sqlupdate);
		$update->execute();
		$conn = null;
	}
	
	//get single item
	if($_POST['action'] == "getitem"){

		$conn = dbConnect();
		$itemno = $_POST['itemno'];
		$sqlselect = "SELECT itemNo,description,category,unit,pc_per_unit,unitCost,inventory_qty,items.supplierID,COALESCE(supName,'') AS supName FROM items LEFT JOIN suppliers ON items.supplierID = suppliers.supplierID WHERE itemNo=$itemno";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetchAll();
		//print_r($rows[0]);
		echo json_encode($rows[0]);
		
		$conn = null;
	}
	
	
	//save supplier
	if($_POST['action'] == "savesupplier"){

		$conn = dbConnect();
		$suppliername = $_POST['suppliername'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		//return "ok";
		$sqlinsert = "INSERT INTO suppliers(supName,address,contactNo) VALUES('$suppliername','$address','$contactno')";
		//echo "INSERT INTO suppliers(supName,address,contactNo) VALUES('$suppliername','$address','$contactno')";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		
		$conn = null;

	}
	//get single supplier
	if($_POST['action'] == "getsupplier"){

		$conn = dbConnect();
		$supplierno = $_POST['supplierno'];
		$sqlselect = "SELECT * FROM suppliers where supplierID=$supplierno";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetchAll();
		//print_r($rows[0]);
		echo json_encode($rows[0]);
		//echo $sqlselect;
		$conn = null;
	}
	//update item
	if($_POST['action'] == "updatesupplier"){

		$conn = dbConnect();
		$supplierid = $_POST['supplierid'];
		$suppliername = $_POST['suppliername'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		
		$sqlupdate = "UPDATE suppliers set supName = '$suppliername', address = '$address', contactno = '$contactno' where supplierID=$supplierid";
		//echo $sqlupdate;
		$update = $conn->prepare($sqlupdate);
		$update->execute();
		$conn = null;
	}
	//delete supplier
	if($_POST['action'] == "deletesupplier"){
		$conn = dbConnect();
		$supplierid = $_POST['supplierid'];
		$sqldelete = "DELETE FROM suppliers where supplierID='$supplierid'";
		$delete = $conn->prepare($sqldelete);
		$delete->execute();
		$conn = null;

	}
	//save employee
	if($_POST['action'] == "saveemployee"){

		$conn = dbConnect();
		$employeeno = $_POST['employeeno'];
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$ename = $_POST['ename'];
		$designation = $_POST['designation'];
		//return "ok";
		$sqlinsert = "INSERT INTO employee(empNo,lname,fname,mname,ename,designation) VALUES('$employeeno','$lname','$fname','$mname','$ename','$designation')";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		$conn = null;
		echo "employee added";

	}
	
	//get single employee
	if($_POST['action'] == "getuser"){

		$conn = dbConnect();
		$eid = $_POST['eid'];
		$sqlselect = "SELECT * FROM users where userID=$eid";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetchAll();
		//print_r($rows[0]);
		echo json_encode($rows[0]);
		//echo $sqlselect;
		$conn = null;
	}
	//update employee
	if($_POST['action'] == "updateemployee"){

		$conn = dbConnect();
		$eid = $_POST['eid'];
		$employeeno = $_POST['employeeno'];
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$ename = $_POST['ename'];
		$designation = $_POST['designation'];
		
		$sqlupdate = "UPDATE employee set empNo = '$employeeno', lname = '$lname', fname = '$fname', mname = '$mname', ename = '$ename', designation = '$designation' where eid=$eid";
		echo $sqlupdate;
		$update = $conn->prepare($sqlupdate);
		$update->execute();
		$conn = null;
	}
	//delete employee
	if($_POST['action'] == "deleteemployee"){
		$conn = dbConnect();
		$eid = $_POST['eid'];
		$sqldelete = "DELETE FROM employee where eid='$eid'";
		$delete = $conn->prepare($sqldelete);
		$delete->execute();
		$conn = null;

	}
	
	
		//get single guest
	if($_POST['action'] == "getguest"){

		$conn = dbConnect();
		$eid = $_POST['eid'];
		$sqlselect = "SELECT * FROM guest where guestID=$eid";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetchAll();
		//print_r($rows[0]);
		echo json_encode($rows[0]);
		//echo $sqlselect;
		$conn = null;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//get last pr number
	
	if($_POST['action'] == "getlastpr"){
		
		$conn = dbConnect();
		$lastprid = $conn->prepare("SELECT prNo FROM pr_list ORDER BY transID DESC limit 1");
		$lastprid->execute();
		$result = $lastprid->fetch(PDO::FETCH_ASSOC);
		$lastpriddb = $result['prNo'];
		echo $lastpriddb;
		$conn = null;

	}
	//save pr
	if($_POST['action'] == "savepr"){

		$conn = dbConnect();
		$prnumber = $_POST['prnumber'];
		$department = $_POST['department'];
		$office = $_POST['office'];
		$requestdate = $_POST['requestdate'];
		$purpose = $_POST['purpose'];
		
		//return "ok";
		$sqlinsert = "INSERT INTO pr_list(prNo,department,section,prDate,purpose) VALUES('$prnumber','$department','$office','$requestdate','$purpose')";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		$conn = null;
		echo $sqlinsert;

	}
	//save user
	if($_POST['action'] == "saveuser"){

		$conn = dbConnect();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$user_name = $_POST['user_name'];
		$usertype = $_POST['usertype'];
		
		//return "ok";
		$sqlinsert = "INSERT INTO users(userName,password,name,userType) VALUES('$username',MD5('$password'),'$user_name','$usertype')";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		$conn = null;
		echo $sqlinsert;

	}
	
	//delete user
	if($_POST['action'] == "deleteuser"){
		$conn = dbConnect();
		$userid = $_POST['userid'];
		$sqldelete = "DELETE FROM users where userID='$userid'";
		//echo $sqldelete;
		$delete = $conn->prepare($sqldelete);
		$delete->execute();
		$conn = null;

	}
	
	//get unit in inventory module
	if($_POST['action'] == "getunitinventory"){

		$conn = dbConnect();
		$itemno = $_POST['itemno'];
		$sqlselect = "SELECT unit FROM items where itemNo=$itemno";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetchAll();
		//print_r($rows[0]);
		echo json_encode($rows[0]);
		//echo $sqlselect;
		$conn = null;
	}
	
	//save inventory
	if($_POST['action'] == "saveinventory"){

		$conn = dbConnect();
		$itemno = $_POST['itemno'];
		$unit = $_POST['unit'];
		$qty = $_POST['qty'];
		
		//return "ok";
		$sqlinsert = "INSERT INTO inventory(itemNo,unit,qty) VALUES($itemno,'$unit',$qty)";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		
		
		/*
		//get current inventory
		$conn2 = dbConnect();
		$currentinventoryqty = $conn2->prepare("SELECT inventory_qty FROM items where itemNo=$itemno ");
		$currentinventoryqty->execute();
		$result = $lastqty->fetch(PDO::FETCH_ASSOC);
		$current_qty = $result['inventory_qty'];
		
		
		*/
		$sqlselect = "SELECT inventory_qty FROM items where itemNo=$itemno limit 1";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetchAll();
		//print_r($rows);
		$current_qty = $rows[0]['inventory_qty'];
		//echo $current_qty;
		
		
		$latest_qty = $current_qty + $qty;
		//update item qty
		$sqlupdate = "UPDATE items set inventory_qty = $latest_qty where itemNo=$itemno";
		$update = $conn->prepare($sqlupdate);
		$update->execute();
		
		$conn = null;
		echo "inventory added";

	}
	
	//delete inventory
	if($_POST['action'] == "deleteinventory"){
		$conn = dbConnect();
		$inventoryid = $_POST['inventoryid'];
		$sqldelete = "DELETE FROM inventory where inventoryid='$inventoryid'";
		$delete = $conn->prepare($sqldelete);
		$delete->execute();
		$conn = null;

	}
	
	/********* Hotel Management Functions ***********/
	
	//save user
	if($_POST['action'] == "saveguest"){

		$conn = dbConnect();
		$guesttype = $_POST['guesttype'];
		$guestname = $_POST['guestname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$email = $_POST['email'];
		$nationality = $_POST['nationality'];
		
		//return "ok";
		$sqlinsert = "INSERT INTO guest(guestType,guestName,address,contactNo,email,nationality) VALUES('$guesttype','$guestname','$address','$contactno','$email','$nationality')";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		$conn = null;
		echo "user added";

	}
	
	//update employee
	if($_POST['action'] == "updateguest"){

		$conn = dbConnect();
		$guestid = $_POST['guestid'];
		$guestname = $_POST['guestname'];
		$address = $_POST['address'];
		$contact_no = $_POST['contact_no'];
		$email = $_POST['email'];
		$nationality = $_POST['nationality'];
		$guest_type = $_POST['guest_type'];
		
		$sqlupdate = "UPDATE guest set guestType = '$guest_type', guestName = '$guestname', address = '$address', contactNo = '$contact_no', eMail = '$email', nationality = '$nationality' where guestID=$guestid";
		echo $sqlupdate;
		$update = $conn->prepare($sqlupdate);
		$update->execute();
		$conn = null;
	}
	
	
	
	//delete user
	if($_POST['action'] == "deleteguest"){
		$conn = dbConnect();
		$guestid = $_POST['guestid'];
		$sqlupdate = "UPDATE guest set status = 'DELETED' where guestID='$guestid'";
		echo $sqlupdate;
		$update = $conn->prepare($sqlupdate);
		$update->execute();
		$conn = null;

	}
	//save room
	if($_POST['action'] == "saveroom"){

		$conn = dbConnect();
		$roomname = $_POST['roomname'];
		$building = $_POST['building'];
		
		//return "ok";
		$sqlinsert = "INSERT INTO room(roomName,building) VALUES('$roomname','$building')";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		$conn = null;
		echo "room added";

	}
	//get single settings season
	if($_POST['action'] == "getseason"){

		$conn = dbConnect();
		$supplierno = $_POST['supplierno'];
		$sqlselect = "SELECT * FROM settings where settingsname='SEASON'";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetchAll();
		//print_r($rows[0]);
		echo json_encode($rows[0]);
		//echo $sqlselect;
		$conn = null;
	}
	//update item
	if($_POST['action'] == "updatesettings"){

		$conn = dbConnect();
		$cseason = $_POST['cseason'];
		$sqlupdate = "UPDATE settings set settingsvalue = '$cseason' where settingsname='SEASON'";
		//echo $sqlupdate;
		$update = $conn->prepare($sqlupdate);
		$update->execute();
		$conn = null;
	}
	
	//get guest details
	
	//get unit in inventory module
	if($_POST['action'] == "selectguest"){

		$conn = dbConnect();
		$guestid = $_POST['guestid'];
		$sqlselect = "SELECT * from guest where guestID=$guestid";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetchAll();
		//print_r($rows[0]);
		echo json_encode($rows[0]);
		//echo $sqlselect;
		$conn = null;
	}
	
	$GLOBALS['currentuser_name'] ="elvin";
	
	//get single item
	if($_POST['action'] == "checkusername"){

		$conn = dbConnect();
		$username = $_POST['username'];
		$sqlselect = "SELECT count(*) as numberofusers from users where userName='$username'";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetchAll();
		if($rows[0]['numberofusers']>0){
			echo "invalid";
		}else{
			echo "valid";
		}
		
		$conn = null;
	}
	
	
	
	
	//save user
	if($_POST['action'] == "savecharge"){

		$conn = dbConnect();
		$chargetitle = $_POST['chargetitle'];
		$description = $_POST['description'];
		$amount = $_POST['amount'];

		$sqlinsert = "INSERT INTO other_charges(charge_title,description,amount) VALUES('$chargetitle','$description',$amount)";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		$conn = null;
		echo "Charge added";

	}
	//delete charge
	if($_POST['action'] == "deletecharge"){
		$conn = dbConnect();
		$chargeid = $_POST['chargeid'];
		$sqldelete = "DELETE FROM other_charges where chargeID=$chargeid";
		$delete = $conn->prepare($sqldelete);
		$delete->execute();
		$conn = null;

	}
	
	
	
	
	//get room list from good for
	if($_POST['action'] == "selectroomsnumberofguest"){

		$conn = dbConnect();
		$numberofguest = $_POST['numberofguest'];
		$sqlselect = "SELECT * FROM  room LEFT JOIN room_rates ON room.roomID = room_rates.roomID WHERE room_rates.goodFor=$numberofguest";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetchAll();
		//print_r($rows[0]);
		echo json_encode($rows);
		//echo $sqlselect;
		$conn = null;
	}
	
	
	//get good for list
	if($_POST['action'] == "getgoodforlist"){

		$conn = dbConnect();
		$sqlselect = "SELECT DISTINCT(goodFor) as goodfor FROM room_rates ORDER BY goodFor asc";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//print_r($rows[0]);
		echo json_encode($rows);
		//echo $sqlselect;
		$conn = null;
	}
	
	//get single item
	if($_POST['action'] == "checkrate"){

		$conn = dbConnect();
		$columnrate = $_POST['columnrate'];
		$rateid = $_POST['rateid'];
		$sqlselect = "SELECT * from room_rates where rateID=$rateid ";
		//echo $sqlselect;
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetch(PDO::FETCH_ASSOC);
		$data = json_encode($rows);
		echo $data;
		$conn = null;
	}
		//getselected charge
	if($_POST['action'] == "getchargeamount"){
		
		$conn = dbConnect();
		$cid = $_POST['chargeid'];
		//$cid = 1;
		$sqlselect = "SELECT * FROM other_charges where chargeID=$cid";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$rows = $stmt->fetch(PDO::FETCH_ASSOC);
		//print_r($rows[0]);
		echo json_encode($rows);
		//echo $sqlselect;
		$conn = null;
	}
	//save user
	if($_POST['action'] == "savereservation"){

		$conn = dbConnect();
		$reservation = json_decode($_POST['reservation']);
		//print_r($reservation);
		print_r(count($reservation->rooms));
		$checkin = $reservation->rooms[0]->checkin;
		$checkin = $reservation->rooms[0]->checkin;
		//print_r($checkin);
		//print_r(json_decode($reservation));
		//$description = $_POST['description'];
		//$amount = $_POST['amount'];
/*
		$sqlinsert = "INSERT INTO other_charges(charge_title,description,amount) VALUES('$chargetitle','$description',$amount)";
		$save = $conn->prepare($sqlinsert);
		$save->execute();*/
		$conn = null;
		//echo "Charge added";

	}
	/**********end**********/
	
?>