<?php
session_start();

include('../config/dbservice.php');
include('../utils/php/loghandler.php');
include('../config/datehandler.php');
$dhandler = new DateHandler();
$loggeroject = new Logger("property");
$dbservice = new DB();
if ($_POST['username'] == "shankar" && $_POST['password'] == "shankar") {

	switch ($_POST['key']) {
		case _GETALL_:
			fetchAllData($dbservice, $dhandler);
			break;
		case _DELETEDATA_:
			deleteData($dbservice, $dhandler);
			break;
		case _GETONE_:
			fetchoneData($dbservice, $dhandler);
			break;
		case _UPDATEDATA_:
			updateData($dbservice, $dhandler);
			break;
		case _SAVEDATA_:
			saveData($dbservice, $dhandler);
			break;
		case _AC_PROPERTY_:
			acceptProperty($dbservice, $dhandler);
			break;
		case _ALL_PROPERTY_:
			AllProperty($dbservice, $dhandler);
			break;
		case _RJ_PROPERTY_:
			rejectProperty($dbservice, $dhandler);
			break;
		case _OPEN_STATUS_:
			openStatusProperty($dbservice, $dhandler);
			break;
		case _UPDATEFORACC_:
			updateDataForAcc($dbservice, $dhandler);
			break;
		case _UPDATEFORRJ_:
			updateDataForRj($dbservice, $dhandler);
			break;
		case _COUNT_PROPERTY_:
			propertyCount($dbservice, $dhandler);
			break;
		case _USER_PROPERTY_:
			AllUserProperty($dbservice, $dhandler);
			break;
		case _PROPERTY_STATUS_UPDATE_:
			updateStatusData($dbservice, $dhandler);
			break;
	}
} else {
	echo ('HTTP/1.0 401 Unauthorized');
}






///  Update Function 
function updateData($dbservice, $dhandler)
{

	$updated_at = $dhandler->getCurrentDate();
	$tbl_propertyobject = $_POST['property_data'];
	$tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
	$pk_ppid = $tbl_propertyobjectarray['pk_ppid'];
	$fk_usid = $tbl_propertyobjectarray['fk_usid'];
	$fk_ptid = $tbl_propertyobjectarray['fk_ptid'];
	$pp_price = $tbl_propertyobjectarray['pp_price'];
	$pp_plot_no = $tbl_propertyobjectarray['pp_plot_no'];
	$pp_ward = $tbl_propertyobjectarray['pp_ward'];
	$pp_bulding_name = $tbl_propertyobjectarray['pp_bulding_name'];
	$pp_street = $tbl_propertyobjectarray['pp_street'];
	$pp_landmark = $tbl_propertyobjectarray['pp_landmark'];
	$pp_city = $tbl_propertyobjectarray['pp_city'];
	$pp_district = $tbl_propertyobjectarray['pp_district'];
	$pp_state = $tbl_propertyobjectarray['pp_state'];
	$pp_pincode = $tbl_propertyobjectarray['pp_pincode'];
	$pp_owner_name = $tbl_propertyobjectarray['pp_owner_name'];
	$pp_contact_no = $tbl_propertyobjectarray['pp_contact_no'];
	$pp_status = $tbl_propertyobjectarray['pp_status'];
	$pp_rj_resone = $tbl_propertyobjectarray['pp_rj_resone'];
	$pp_deposite = $tbl_propertyobjectarray['pp_deposite'];
	$pp_aggrement_month = $tbl_propertyobjectarray['pp_aggrement_month'];
	$pp_created_at = $updated_at;
	$pp_updated_at = $updated_at;

	$triggered_on = $updated_at;
	if (!empty($pk_ppid)) {
		$query = "UPDATE tbl_property SET `fk_usid`=$fk_usid , `fk_ptid`=$fk_ptid , `pp_price`='$pp_price' , `pp_plot_no`='$pp_plot_no' , `pp_ward`='$pp_ward' , `pp_bulding_name`='$pp_bulding_name' , `pp_street`='$pp_street' , `pp_landmark`='$pp_landmark' , `pp_city`='$pp_city' , `pp_district`='$pp_district' , `pp_state`='$pp_state' , `pp_pincode`='$pp_pincode' , `pp_owner_name`='$pp_owner_name' , `pp_contact_no`='$pp_contact_no' , `pp_status`='$pp_status' , `pp_rj_resone`='$pp_rj_resone' , `pp_deposite`='$pp_deposite' , `pp_aggrement_month`='$pp_aggrement_month'  , `pp_created_at`='$pp_created_at' , `pp_updated_at`='$pp_updated_at'  , `triggered_on`='$triggered_on' where `pk_ppid`='$pk_ppid'";
		echo $query;
		$result = $dbservice->executeDbSaveUpdateQuery($query);
		if ($result) {
			$data['status'] = true;
			$data['data'] = $result;
			echo json_encode($data);
		} else {
			$data['status'] = false;
			$data['data'] = $result;
			echo json_encode($data);
		}
	}
}


////update stays
function updateStatusData($dbservice, $dhandler)
{

	$ppid = $_POST['ppid'];

	if (!empty($ppid)) {
		$query = "UPDATE tbl_property SET  `pp_status`='1'  where `pk_ppid`='$ppid'";
		// echo $query;
		$result = $dbservice->executeDbSaveUpdateQuery($query);
		if ($result) {
			$data['status'] = true;
			$data['data'] = $result;
			echo json_encode($data);
		} else {
			$data['status'] = false;
			$data['data'] = $result;
			echo json_encode($data);
		}
	}
}




///  Save Function 
function saveData($dbservice, $dhandler)
{

	$tbl_propertyobject = $_POST['property_data'];
	// echo $tbl_propertyobject;
	$updated_at = $dhandler->getCurrentDate();
	$tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
	$fk_usid = $_SESSION['id']; //1; // $_SESSION['id']; //$tbl_propertyobjectarray['fk_usid'];
	$fk_ptid = $tbl_propertyobjectarray['fk_ptid']; //1; //$tbl_propertyobjectarray['fk_ptid'];
	$pp_price = $tbl_propertyobjectarray['pp_price'];
	$pp_plot_no = $tbl_propertyobjectarray['pp_plot_no'];
	$pp_ward = $tbl_propertyobjectarray['pp_ward'];
	$pp_bulding_name = $tbl_propertyobjectarray['pp_bulding_name'];
	$pp_street = $tbl_propertyobjectarray['pp_street'];
	$pp_landmark = $tbl_propertyobjectarray['pp_landmark'];
	$pp_city = $tbl_propertyobjectarray['pp_city'];
	$pp_district = $tbl_propertyobjectarray['pp_district'];
	$pp_state = $tbl_propertyobjectarray['pp_state'];
	$pp_pincode = $tbl_propertyobjectarray['pp_pincode'];
	$pp_owner_name = $tbl_propertyobjectarray['pp_owner_name'];
	$pp_contact_no = $tbl_propertyobjectarray['pp_contact_no'];
	$pp_status = 8; //$tbl_propertyobjectarray['pp_status'];

	$pp_deposite = $tbl_propertyobjectarray['pp_deposite'];
	$pp_aggrement_month = $tbl_propertyobjectarray['pp_aggrement_month'];




	if (!empty('fk_usid')) {
		$query = "INSERT INTO tbl_property ( `pk_ppid` , `fk_usid` , `fk_ptid` , `pp_price` , `pp_plot_no` , `pp_ward` , `pp_bulding_name` , `pp_street` , `pp_landmark` , `pp_city` , `pp_district` , `pp_state` , `pp_pincode` , `pp_owner_name` , `pp_contact_no` , `pp_status` , `pp_deposite` , `pp_aggrement_month`  )  VALUES (null , $fk_usid , $fk_ptid , '$pp_price' , '$pp_plot_no' , '$pp_ward' , '$pp_bulding_name' , '$pp_street' , '$pp_landmark' , '$pp_city' , '$pp_district' , '$pp_state' , '$pp_pincode' , '$pp_owner_name' , '$pp_contact_no' , $pp_status , '$pp_deposite' , '$pp_aggrement_month' ) ; ";

		// print($query);
		$result = $dbservice->executeDbSaveUpdateQueryReturnId($query);
		if ($result) {
			$data['status'] = true;
			$data['data'] = json_encode($result);
			echo json_encode($data);
		} else {
			$data['status'] = false;
			$data['data'] = json_encode($result);
			echo json_encode($data);
		}
		// echo json_encode($data);
	}




}




///////////////////////////////////////fetch Single  Record //////////////////////// 
function fetchoneData($dbservice, $dhandler)
{
	$id = $_POST['propertyid'];
	$q = "SELECT * FROM tbl_property  where pp_is_deleted ='false' and pk_ppid=" . $id;
	$mydat = $dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetch(PDO::FETCH_ASSOC);
	if ($row) {
		$data['status'] = true;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	} else {
		$data['status'] = false;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	}
	;
}






function fetchAllData($dbservice, $dhandler)
{
	$q = "SELECT * FROM tbl_property where  pp_is_deleted ='false'";
	$mydat = $dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetchAll(PDO::FETCH_ASSOC);
	if ($row) {
		$data['status'] = true;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	} else {
		$data['status'] = false;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	}
}






///////////////////////////////////////  Delete Record  //////////////////////// 
function deleteData($dbservice, $dhandler)
{
	$tbl_propertyobject = $_POST['tbl_property_name'];
	$tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
	$id = $tbl_propertyobjectarray['tbl_propertyid'];
	if (!empty($id)) {
		$query = "UPDATE tbl_property SET `pp_is_deleted`= 1  where `pk_ppid` = $id";
		$result = $dbservice->executeDbSaveUpdateQuery($query);
		if ($result > 0) {
			$data['status'] = true;
			$data['data'] = json_encode($result);
			echo json_encode($data);
		} else {
			$data['status'] = false;
			$data['data'] = json_encode($result);
			echo json_encode($data);
		}
	}
}






function acceptProperty($dbservice, $dhandler)
{
	$q = "SELECT * FROM tbl_property  where pp_is_deleted ='false' and pp_status= 2";
	$mydat = $dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetchAll(PDO::FETCH_ASSOC);
	if ($row) {
		$data['status'] = true;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	} else {
		$data['status'] = false;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	}

}
function AllProperty($dbservice, $dhandler)
{
	$q = "SELECT * FROM tbl_property pt  join tbl_registration rg on pt.fk_usid = rg.pk_rgid ".
		" join tbl_property_type ptype on pt.fk_ptid = ptype.pk_ptid  ".
		" join tbl_status st on pt.pp_status = st.id ".
		" where pp_is_deleted ='false'";
	$mydat = $dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetchAll(PDO::FETCH_ASSOC);
	if ($row) {
		$data['status'] = true;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	} else {
		$data['status'] = false;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	}
}

function AllUserProperty($dbservice, $dhandler)
{

	$userId = $_POST['userid'];

	$q = "SELECT * FROM tbl_property  where pp_is_deleted ='false' and fk_usid = " . $userId;
	$mydat = $dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetchAll(PDO::FETCH_ASSOC);
	if ($row) {
		$data['status'] = true;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	} else {
		$data['status'] = false;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	}
}

function rejectProperty($dbservice, $dhandler)
{

	$q = "SELECT * FROM tbl_property  where pp_is_deleted ='false' and pp_status= 4";
	$mydat = $dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetchAll(PDO::FETCH_ASSOC);
	if ($row) {
		$data['status'] = true;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	} else {
		$data['status'] = false;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	}
}

function openStatusProperty($dbservice, $dhandler)
{

	$q = "SELECT * FROM tbl_property  pt  join tbl_registration rg on pt.fk_usid = rg.pk_rgid ".
	" join tbl_property_type ptype on pt.fk_ptid = ptype.pk_ptid  ".
	" join tbl_status st on pt.pp_status = st.id ".
	" where pp_is_deleted ='false' and pp_status= 1";
	$mydat = $dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetchAll(PDO::FETCH_ASSOC);
	if ($row) {
		$data['status'] = true;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	} else {
		$data['status'] = false;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	}
}

function updateDataForAcc($dbservice, $dhandler)
{
	// $loggeroject->printLogInClassfunction("In","Update Method",".tbl_property.php");
	$tbl_propertyobject = $_POST['property_data'];
	$tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
	$pk_ppid = $tbl_propertyobjectarray['pk_ppid'];
	if (!empty($pk_ppid)) {
		$query = "UPDATE tbl_property SET `pp_status`='2'  where `pk_ppid`='$pk_ppid'";

		$result = $dbservice->executeDbSaveUpdateQuery($query);
		if ($result) {
			$data['status'] = true;
			$data['data'] = json_encode($result);
			echo json_encode($data);
		} else {
			$data['status'] = false;
			$data['data'] = json_encode($result);
			echo json_encode($data);
		}
	}
}

function updateDataForRj($dbservice, $dhandler)
{
	// $loggeroject->printLogInClassfunction("In","Update Method",".tbl_property.php");
	$tbl_propertyobject = $_POST['property_data'];
	$tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
	$pk_ppid = $tbl_propertyobjectarray['pk_ppid'];
	if (!empty($pk_ppid)) {
		$query = "UPDATE tbl_property SET `pp_status`='4'  where `pk_ppid`='$pk_ppid'";

		$result = $dbservice->executeDbSaveUpdateQuery($query);
		if ($result) {
			$data['status'] = true;
			$data['data'] = json_encode($result);
			echo json_encode($data);
		} else {
			$data['status'] = false;
			$data['data'] = json_encode($result);
			echo json_encode($data);
		}
	}
}

function propertyCount($dbservice, $dhandler)
{

	$userId = $_SESSION['id'];

	$query = "SELECT * FROM tbl_property where pp_status=2 and fk_usid=$userId; ";
	$result = $dbservice->executeDbFetchDataCount($query);
	// $row = $result->columnCount();

	$query2 = "SELECT count(pk_ppid) FROM tbl_property where pp_status=4 and fk_usid=$userId;";
	$result2 = $dbservice->executeDbFetchDataQuery($query2);
	$row2 = $result2->columnCount();

	$query3 = "SELECT count(pk_ppid) FROM tbl_property pp  join tbl_media md on pp.pk_ppid = md.fk_ppid where fk_usid=$userId;";
	$result3 = $dbservice->executeDbFetchDataQuery($query3);
	$row3 = $result3->columnCount();

	if ($result) {
		$data['status'] = true;
		$data['ac_count'] = json_encode($result);
		$data['rj_count'] = json_encode($row2);
		$data['md_count'] = json_encode($row3);
		echo json_encode($data);
	} else {
		$data['status'] = false;
		$data['data'] = json_encode($result);
		echo json_encode($data);
	}

}


?>