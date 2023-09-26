<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();//Start session if none exists/already started
}
$headers = getallheaders();
ini_set ('display_errors', 1);  
ini_set ('display_startup_errors', 1);  
error_reporting (E_ALL);

include('../config/dbservice.php');
include('../utils/php/loghandler.php');
include('../utils/php/hashhandler.php');
include('../config/datehandler.php');
include('../config/cummunicationUtil.php');

$dhandler = new DateHandler();
$loggeroject = new Logger("property");
$dbservice = new DB();
$hashHandler = new Hashhandler();
$communicationUtil = new cummunicationUtil();
// print_r($_POST);

if (isset($headers['token'])) {
	$header_token = $headers['token'];
	if ($header_token == $_SESSION['token']) {
		if ($_POST["username"] == _AUTH_USERNAME_ && $_POST["password"] == _AUTH_PASSWORD_) {


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
					saveData($dbservice, $hashHandler,$communicationUtil,$dhandler);
					break;
				case _LOGIN_:
					fetchoneDataForLogin($dbservice);
					break;
				case _LOGOUT_:
					logOut($dbservice, $dhandler);
					break;
				case _VERIFY_OTP_:
					verifyOtp($dbservice, $dhandler);
					break;
				case _RESENT_OTP_:
					reSentOtp($dbservice, $dhandler,$communicationUtil);
					break;
				case _SEND_OTP_:
					sendOTP($dbservice, $dhandler,$communicationUtil);
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
function updateData($dbservice, $dhandler)
{
	$loggeroject = new Logger("Retration Database File ");
	$loggeroject->printLogInClassfunction("In", "Update Method", "tbl_registration.php");
	$tbl_registrationobject = $_POST['tbl_registration'];
	$tbl_registrationobjectarray = json_decode($tbl_registrationobject, true);
	$pk_rgid = $tbl_registrationobjectarray['pk_rgid'];
	$fk_sfid = $tbl_registrationobjectarray['fk_sfid'];
	$rg_fname = $tbl_registrationobjectarray['rg_fname'];
	$rg_lname = $tbl_registrationobjectarray['rg_lname'];
	$rg_email = $tbl_registrationobjectarray['rg_email'];
	$rg_mobile = $tbl_registrationobjectarray['rg_mobile'];
	$rg_address = $tbl_registrationobjectarray['rg_address'];
	$rg_password = $tbl_registrationobjectarray['rg_password'];
	$rd_is_super_admin = $tbl_registrationobjectarray['rd_is_super_admin'];
	$rg_is_seller = $tbl_registrationobjectarray['rg_is_seller'];
	$rg_is_buyer = $tbl_registrationobjectarray['rg_is_buyer'];
	$rg_is_app_user = $tbl_registrationobjectarray['rg_is_app_user'];
	$rg_is_deleted = $tbl_registrationobjectarray['rg_is_deleted'];
	$rg_created_at = $tbl_registrationobjectarray['rg_created_at'];
	$rg_updated_at = $tbl_registrationobjectarray['rg_updated_at'];
	$rg_status = $tbl_registrationobjectarray['rg_status'];
	$rg_col1 = $tbl_registrationobjectarray['rg_col1 '];
	$rg_col2 = $tbl_registrationobjectarray['rg_col2'];
	$rg_col3 = $tbl_registrationobjectarray['rg_col3'];
	$rg_col4 = $tbl_registrationobjectarray['rg_col4'];
	$rg_col5 = $tbl_registrationobjectarray['rg_col5'];
	$rg_deleted_on = $tbl_registrationobjectarray['rg_deleted_on'];
	$rg_triggered_on = $tbl_registrationobjectarray['rg_triggered_on'];
	if (
		!empty($pk_rgid) && !empty($fk_sfid) && !empty($rg_fname) && !empty($rg_lname) &&
		!empty($rg_email) && !empty($rg_mobile) && !empty($rg_address) && !empty($rg_password) &&
		!empty($rd_is_super_admin) && !empty($rg_is_seller) && !empty($rg_is_buyer) && !empty($rg_is_app_user) &&
		!empty($rg_is_deleted) && !empty($rg_created_at) && !empty($rg_updated_at) && !empty($rg_status) &&
		!empty($rg_col1) && !empty($rg_col2) && !empty($rg_col3) && !empty($rg_col4) && !empty($rg_col5) &&
		!empty($rg_deleted_on) && !empty($rg_triggered_on)
	) {
		$query = "UPDATE tbl_registration SET `pk_rgid`='pk_rgid' , `fk_sfid`='fk_sfid' , `rg_fname`='rg_fname' , `rg_lname`='rg_lname' , `rg_email`='rg_email' , `rg_mobile`='rg_mobile' , `rg_address`='rg_address' , `rg_password`='rg_password' , `rd_is_super_admin`='rd_is_super_admin' , `rg_is_seller`='rg_is_seller' , `rg_is_buyer`='rg_is_buyer' , `rg_is_app_user`='rg_is_app_user' , `rg_is_deleted`='rg_is_deleted' , `rg_created_at`='rg_created_at' , `rg_updated_at`='rg_updated_at' , `rg_status`='rg_status' , `rg_col1`='rg_col1' , `rg_col2`='rg_col2' , `rg_col3`='rg_col3' , `rg_col4`='rg_col4' , `rg_col5`='rg_col5' , `rg_deleted_on`='rg_deleted_on' , `rg_triggered_on`='rg_triggered_on'";

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
function saveData($dbservice, $hashHandler,$communicationUtil,$dhandler)
{
	$tbl_registrationobject = $_POST['tbl_registrationobject'];


	$tbl_registrationobjectarray = json_decode($tbl_registrationobject, true);

	$rg_fname = $tbl_registrationobjectarray['rg_fname'];

	$rg_email = $tbl_registrationobjectarray['rg_email'];
	$rg_mobile = $tbl_registrationobjectarray['rg_mobile'];
	$rg_address = $tbl_registrationobjectarray['rg_address'];
	$rg_password = $tbl_registrationobjectarray['rg_password'];
	$rg_password_encr = $hashHandler->gethashPassword($rg_password);

	$rg_is_seller = $tbl_registrationobjectarray['rg_is_seller'];
	$rg_is_buyer = $tbl_registrationobjectarray['rg_is_buyer'];

	$rg_col1 = $tbl_registrationobjectarray['rg_col1'];
	$rg_col2 = $tbl_registrationobjectarray['rg_col2'];
	$created_on = $dhandler->getCurrentDate();
	$updated_on = $dhandler->getCurrentDate();

	if (!empty($rg_fname)) {

		$query1 = "INSERT INTO tbl_staff ( `pk_sfid` , `sf_name` , `sf_email` , `sf_mobile` , `sf_status` , `sf_created_at` ,`sf_updated_at`)  VALUES (null , '$rg_fname' , '$rg_email' , '$rg_mobile' , 'Active' , '$created_on', '$updated_on' )";



		$result1 = $dbservice->executeDbSaveUpdateQueryReturnId($query1);
		// printf($result1);
		$fk_sfid = $result1;
		$query = "INSERT INTO tbl_registration ( `pk_rgid` , `fk_sfid` , `rg_fname` , `rg_email` , `rg_mobile` , `rg_address` , `rg_password`  , `rg_status` , `rg_is_seller`,`rg_is_buyer`,`rg_col1`,`rg_col2`,`rg_created_at`,`rg_updated_at` )  VALUES (null , $fk_sfid , '$rg_fname' , '$rg_email' , '$rg_mobile' , '$rg_address' , '$rg_password'  , 'inActive' ,'$rg_is_seller','$rg_is_buyer','$rg_col1','$rg_col2' , '$created_on', '$updated_on' )";
		// echo ($query);
		$result = $dbservice->executeDbSaveUpdateQueryReturnId($query);
		$communicationUtil->sendMail($rg_email, $rg_col2);
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




///////////////////////////////////////fetch Single  Record //////////////////////// 
function fetchoneData($dbservice, $dhandler)
{
	$tbl_registrationobject = $_POST['tbl_registrationobject'];

	$tbl_registrationobjectarray = json_decode($tbl_registrationobject, true);

	$id = $tbl_registrationobjectarray['tbl_registrationid'];
	$q = "SELECT * FROM tbl_registration  where rg_is_deleted ='false' and pk_rgid=" . $id;

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
}


function sendOTP($dbservice, $dhandler, $communicationUtil)
{
	$tbl_registrationobject = $_POST['tbl_registrationobject'];

	$tbl_registrationobjectarray = json_decode($tbl_registrationobject, true);

	$id = $tbl_registrationobjectarray['tbl_registrationid'];
	$q = "SELECT * FROM tbl_registration  where rg_is_deleted ='false' and pk_rgid=" . $id;

	$mydat = $dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetch(PDO::FETCH_ASSOC);
	if ($row) {

		$communicationUtil->sendMail($row['rg_email'], rand(10, 100));
		$data['status'] = true;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	} else {
		$data['status'] = false;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	}
}

function verifyOtp($dbservice, $dhandler)
{
	$tbl_registrationobject = $_POST['tbl_registrationobject'];

	$tbl_registrationobjectarray = json_decode($tbl_registrationobject, true);

	$id = $tbl_registrationobjectarray['tbl_registrationid'];
	$q = "UPDATE tbl_registration SET `rg_status`='Active' where  `pk_rgid`=" . $id;

	$row = $dbservice->executeDbSaveUpdateQuery($q);

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

function reSentOtp($dbservice, $dhandler,$communicationUtil)
{
	$tbl_registrationobject = $_POST['tbl_registrationobject'];

	$tbl_registrationobjectarray = json_decode($tbl_registrationobject, true);

	$id = $tbl_registrationobjectarray['tbl_registrationid'];
	$otp = $tbl_registrationobjectarray['tbl_registrationotp'];

	$fetchquery = "select * from tbl_registration  WHERE  pk_rgid=" . $id;
	$mydat1 = $dbservice->executeDbFetchDataQuery($fetchquery);
	$fetchrow = $mydat1->fetch(PDO::FETCH_ASSOC);

	$q = "UPDATE `tbl_registration` SET `rg_col2` = '" . $otp . "' WHERE  pk_rgid=" . $id;
	$row = $dbservice->executeDbSaveUpdateQuery($q);

	// echo ("registration". $fetchrow['rg_email']);
	$communicationUtil->sendMail($fetchrow['rg_email'], $otp);

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






function fetchAllData($dbservice, $dhandler)
{
	$q = "SELECT * FROM tbl_registration where  isdelete ='false'";
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
	$tbl_registrationobject = $_POST['tbl_registration_name'];
	$tbl_registrationobjectarray = json_decode($tbl_registrationobject, true);
	$id = $tbl_registrationobjectarray['tbl_registrationid'];
	if (!empty($id)) {
		$query = "UPDATE tbl_registration SET `isdelete`= 1  where `id` = $id";
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

function fetchoneDataForLogin($dbservice)
{
	$tbl_registrationobject = $_POST['registration_data'];
	// echo ($tbl_registrationobject);
	$tbl_registrationobjectarray = json_decode($tbl_registrationobject, true);
	// print_r($tbl_registrationobjectarray);
	$userName = $tbl_registrationobjectarray['rg_email'];
	$password = $tbl_registrationobjectarray['rg_password'];
	// $password = $hashHandler->gethashPassword($tbl_registrationobjectarray['rg_password']);

	// $q = "SELECT * FROM tbl_registration  where `rg_email` ='$userName' and `rg_status`='Active'";
	$q = "SELECT * FROM tbl_registration  where `rg_email` like '%$userName%' and `rg_password` = '$password' and `rg_status`='Active'";
	// echo($q);
	$mydat = $dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetch(PDO::FETCH_ASSOC);


	if ($row) {
		// echo ("pass". $row['rg_password']);
		// $verify = $hashHandler->comparePassword($password,$row['rg_password']);
		// echo ("verify". $verify);
		// if ($verify==1) {

		// echo json_encode($data);
		// while ($row) {
		// 	// $verify = $hashHandler->comparePassword($password, $row['rg_password']);
		// 	// echo ("verify" . $verify);
		// 	// $verify = password_verify($password, $row['rg_password']);
		// 	// if (password_verify($password, $row['rg_password']) === TRUE) {
		$_SESSION["id"] = $row['pk_rgid'];
		$_SESSION["fname"] = $row['rg_fname'];
		$_SESSION["lname"] = $row['rg_lname'];
		$_SESSION["is_buyer"] = $row['rg_is_buyer'];
		$_SESSION["is_seller"] = $row['rg_is_seller'];
		$_SESSION["is_other"] = $row['rg_col1'];
		$_SESSION["is_admin"] = $row['rd_is_super_admin'];
		$data['status'] = true;
		$data['data'] = json_encode($row);
		echo json_encode($data);
		// }
		// $configquery = "INSERT INTO tbl_config_table ( `pk_conid` , `con_key` , `con_value` )  VALUES (null , ".$row['pk_rgid']." , ".$row['rg_fname']." )";
		// $dbservice->executeDbSaveUpdateQuery($configquery);
		// }

		// }

	} else {
		$data['status'] = false;
		$data['data'] = json_encode($row);
		echo json_encode($data);
	}
}


function logOut($dbservice, $dhandler)
{

	if (session_unset() && session_destroy()) {
		$data['status'] = true;
		echo json_encode($data);
	} else {
		$data['status'] = false;
		echo json_encode($data);
	}

}



?>