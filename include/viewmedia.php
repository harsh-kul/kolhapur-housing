<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();//Start session if none exists/already started
}
$headers = getallheaders();
include('../config/dbservice.php');
include('../utils/php/loghandler.php');
include('../../config/datehandler.php');
$dhandler = new DateHandler();
$loggeroject = new Logger("property");
$dbservice = new DB();
if (isset($headers['token'])) {
	$header_token = $headers['token'];
	if ($header_token == $_SESSION['token']) {
		if ($_POST['username'] == "shankar" && $_POST['password'] == "shankar") {
			$loggeroject->printLogInClassfunction("In", "Auth Switch", ".tbl_property.php");
			switch ($_POST['key']) {
				case _GETALL_:
					fetchAllData($dbservice,$dhandler);
					break;
				case _DELETEDATA_:
					deleteData($dbservice,$dhandler);
					break;
				case _GETONE_:
					fetchoneData($dbservice,$dhandler);
					break;
				case _UPDATEDATA_:
					updateData($dbservice,$dhandler);
					break;
				case _SAVEDATA_:
					saveData($dbservice,$dhandler);
					break;
				case _AC_PROPERTY_:
					acceptProperty($dbservice,$dhandler);
					break;
				case _RJ_PROPERTY_:
					rejectProperty($dbservice,$dhandler);
					break;
				case _OPEN_STATUS_:
					openStatusProperty($dbservice,$dhandler);
					break;
				case _UPDATEFORACC_:
					updateDataForAcc($dbservice,$dhandler);
					break;
			
			}
		} else {
			echo ('HTTP/1.0 401 Unauthorized');
		}
	}
	else{
		echo "ERROR: Tokens dont match";
		exit;
	}
}



///  Update Function 
function updateData($dbservice)
{
	// $loggeroject->printLogInClassfunction("In","Update Method",".tbl_property.php");
	$tbl_propertyobject = $_POST['tbl_property'];
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
	$pp_is_deleted = $tbl_propertyobjectarray['pp_is_deleted'];
	$pp_created_at = $tbl_propertyobjectarray['pp_created_at'];
	$pp_updated_at = $tbl_propertyobjectarray['pp_updated_at'];
	$pp_col1 = $tbl_propertyobjectarray['pp_col1'];
	$pp_col2 = $tbl_propertyobjectarray['pp_col2'];
	$pp_col3 = $tbl_propertyobjectarray['pp_col3'];
	$pp_col4 = $tbl_propertyobjectarray['pp_col4'];
	$pp_col5 = $tbl_propertyobjectarray['pp_col5'];
	$pp_soid = $tbl_propertyobjectarray['pp_soid'];
	$deleted_on = $tbl_propertyobjectarray['deleted_on'];
	$triggered_on = $tbl_propertyobjectarray['triggered_on'];
	if (!empty($pk_ppid)) {
		$query = "UPDATE tbl_property SET `pk_ppid`='$pk_ppid' , `fk_usid`='$fk_usid' , `fk_ptid`='$fk_ptid' , `pp_price`='$pp_price' , `pp_plot_no`='$pp_plot_no' , `pp_ward`='$pp_ward' , `pp_bulding_name`='$pp_bulding_name' , `pp_street`='$pp_street' , `pp_landmark`='$pp_landmark' , `pp_city`='$pp_city' , `pp_district`='$pp_district' , `pp_state`='$pp_state' , `pp_pincode`='$pp_pincode' , `pp_owner_name`='$pp_owner_name' , `pp_contact_no`='$pp_contact_no' , `pp_status`='$pp_status' , `pp_rj_resone`='$pp_rj_resone' , `pp_deposite`='$pp_deposite' , `pp_aggrement_month`='$pp_aggrement_month' , `pp_is_deleted`='$pp_is_deleted' , `pp_created_at`='$pp_created_at' , `pp_updated_at`='$pp_updated_at' , `pp_col1`='$pp_col1' , `pp_col2`='$pp_col2' , `pp_col3`='$pp_col3' , `pp_col4`='$pp_col4' , `pp_col5`='$pp_col5' , `pp_soid`='$pp_soid' , `deleted_on`='$deleted_on' , `triggered_on`='$triggered_on' where `pk_ppid`='$pk_ppid'";

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






///  Save Function 
function saveData($dbservice)
{

	$tbl_propertyobject = $_POST['property_data'];

	$tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);

	$fk_usid = 1; // $_SESSION['id']; //$tbl_propertyobjectarray['fk_usid'];
	$fk_ptid = 1; //$tbl_propertyobjectarray['fk_ptid'];
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
// $pp_rj_resone=$tbl_propertyobjectarray['pp_rj_resone'];
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
		echo json_encode($data);
	}




}




///////////////////////////////////////fetch Single  Record //////////////////////// 
function fetchoneData($dbservice)
{
	$id = $_POST['tbl_propertyid'];
	$q = "SELECT * FROM tbl_property  where isdelete ='false' and id=" . $id;
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






function fetchAllData($dbservice)
{

 
$dbservice = new DB();
$pid = $_POST['propertyid'];
        $q = "SELECT * FROM `tbl_media` where  `md_is_deleted` = 0 and `md_media_type`='Image' and 	`fk_ppid`=".$pid;
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
function deleteData($dbservice)
{
	$tbl_propertyobject = $_POST['tbl_property_name'];
	$tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
	$id = $tbl_propertyobjectarray['tbl_propertyid'];
	if (!empty($id)) {
		$query = "UPDATE tbl_property SET `isdelete`= 1  where `id` = $id";
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






function acceptProperty($dbservice)
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

function rejectProperty($dbservice)
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

function openStatusProperty($dbservice)
{

	$q = "SELECT * FROM tbl_property  where pp_is_deleted ='false' and pp_status= 1";
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

function updateDataForAcc($dbservice)
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


?>