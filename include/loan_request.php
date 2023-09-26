<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();//Start session if none exists/already started
}
$headers = getallheaders();
include('../utils/php/utils.php');
include('../config/dbservice.php');
include('../config/datehandler.php');
$dhandler = new DateHandler();
$utils = new Utils();
// echo  $dhandler->getCurrentDate();
$dbservice = new DB();
if (isset($headers['token'])) {
	$header_token = $headers['token'];
	if ($header_token == $_SESSION['token']) {
		if ($_POST['username'] == _AUTH_USERNAME_ && $_POST['password'] == _AUTH_PASSWORD_) {
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
					$dhandler->getCurrentDate();
					saveData($dbservice, $dhandler);
					break;
				case _LOAD_USER_LOAN_:
					fetchUserLoan($dbservice, $dhandler);
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
	$tbl_lone_requestobject = $_POST['lonerequest_data'];
	$tbl_lone_requestobjectarray = json_decode($tbl_lone_requestobject, true);
	$lr_id = 1;
	$fk_regid = 1; //$_SESSION["id"];
	$status_id = 1;
	$lr_fname = $tbl_lone_requestobjectarray['lr_fname'];
	$lr_lname = $tbl_lone_requestobjectarray['lr_lname'];
	$lr_email_id = $tbl_lone_requestobjectarray['lr_email_id'];
	$lr_mobile_no = $tbl_lone_requestobjectarray['lr_mobile_no'];
	$lr_resident_type = '';
	$lr_amt = $tbl_lone_requestobjectarray['lr_amt'];
	$lr_tenure = $tbl_lone_requestobjectarray['lr_tenure'];
	$lr_age = $tbl_lone_requestobjectarray['lr_age'];
	$lr_income = $tbl_lone_requestobjectarray['lr_income'];
	$lr_emi = $tbl_lone_requestobjectarray['lr_emi'];
	$lr_req_type = $tbl_lone_requestobjectarray['lr_req_type'];
	$lr_lone_type_id = $tbl_lone_requestobjectarray['lr_req_type'];
	$created_on = $dhandler->getCurrentDate();
	$updated_on = $dhandler->getCurrentDate();
	$deleted_on = '';
	$triggerd_on = $dhandler->getCurrentDate();


	if (!empty($lr_id)) {
		$query = "UPDATE tbl_lone_request SET  `lr_fname`='$lr_fname' , `lr_lname`='$lr_lname' , `lr_email_id`='$lr_email_id' , `lr_mobile_no`='$lr_mobile_no' , `lr_resident_type`='$lr_resident_type' , `lr_pp_loc`='' , `lr_req_type`='$lr_req_type' , `lr_amt`='$lr_amt' , `lr_tenure`='$lr_tenure' , `lr_age`='$lr_age' , `lr_pp_cost`=0 , `lr_currently_employeed`='' , `lr_income`='$lr_income' , `lr_emi`='$lr_emi' , `lr_lone_type_id`='$lr_lone_type_id' , `updated_on`='$updated_on' WHERE `lr_id` =" . $lr_id;

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
function saveData($dbservice, $dhandler)
{
	$tbl_lone_requestobject = $_POST['lonerequest_data'];
	$tbl_lone_requestobjectarray = json_decode($tbl_lone_requestobject, true);
	$fk_regid = $tbl_lone_requestobjectarray['fk_regid']; //$_SESSION["id"];
	$status_id = 1;
	$lr_fname = $tbl_lone_requestobjectarray['lr_fname'];
	$lr_lname = $tbl_lone_requestobjectarray['lr_lname'];
	$lr_email_id = $tbl_lone_requestobjectarray['lr_email_id'];
	$lr_mobile_no = $tbl_lone_requestobjectarray['lr_mobile_no'];
	$lr_resident_type = null;
	$lr_pp_location = null;
	$lr_pp_cost = null;
	$lr_currently_employeed = null;
	$lr_amt = $tbl_lone_requestobjectarray['lr_amt'];
	$lr_tenure = $tbl_lone_requestobjectarray['lr_tenure'];
	$lr_age = $tbl_lone_requestobjectarray['lr_age'];
	$lr_income = $tbl_lone_requestobjectarray['lr_income'];
	$lr_emi = $tbl_lone_requestobjectarray['lr_emi'];
	$lr_req_type = $tbl_lone_requestobjectarray['lr_req_type'];
	$lr_lone_type_id = $tbl_lone_requestobjectarray['lr_req_type'];
	$created_on = $dhandler->getCurrentDate();
	$updated_on = $dhandler->getCurrentDate();
	$deleted_on = null;
	$triggerd_on = $dhandler->getCurrentDate();

	if (!empty($lr_fname)) {
		$query = "INSERT INTO tbl_lone_request (`lr_id` ,`fk_regi_id`, `fk_stid`,`lr_fname` , `lr_lname` , `lr_email_id` , `lr_mobile_no`  , `lr_req_type` , `lr_amt` , `lr_tenure` , `lr_age` ,  `lr_income` , `lr_emi` , `lr_lone_type_id` ,`created_on`,`updated_on`,`triggerd_on`,`is_deleted`)  VALUES (null, $fk_regid,  $status_id, '$lr_fname' , '$lr_lname' , '$lr_email_id' , '$lr_mobile_no' , '$lr_req_type' , '$lr_amt' , '$lr_tenure' , '$lr_age'   , '$lr_income' , '$lr_emi' , '$lr_lone_type_id' ,'$created_on','$updated_on' ,'$triggerd_on','0' )";
		// echo $query;
		$result = $dbservice->executeDbSaveUpdateQuery($query);
		if ($result) {
			$data['status'] = true;
			$data['data'] = json_encode($result);

		} else {
			$data['status'] = false;
			$data['data'] = json_encode($result);
		}
		echo json_encode($data);

	}

}




///////////////////////////////////////fetch Single  Record //////////////////////// 
function fetchoneData($dbservice, $dhandler)
{
	$id = $_POST['lonerequestid'];
	$q = "SELECT * FROM tbl_lone_request  where is_deleted ='false' and lr_id=" . $id;
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


function fetchUserLoan($dbservice, $dhandler)
{
	$userId = $_POST['userId'];
	$q = "SELECT * FROM tbl_lone_request  where is_deleted ='false' and fk_regi_id=" . $userId;
	// echo $q;
	$mydat = $dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetch(PDO::FETCH_ASSOC);
	// print_r($row);
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
	$q = "SELECT * FROM tbl_lone_request where  is_deleted ='false'";
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
function deleteData($dbservice,$dhandler)
{
	$tbl_lone_requestobject=$_POST['tbl_lone_request_name'];
	$tbl_lone_requestobjectarray=json_decode($tbl_lone_requestobject,true);
	$id=$tbl_lone_requestobjectarray['tbl_lone_requestid'];
	if(!empty($id))
	{
		$updated_at=$dhandler->getCurrentDate();
		$query ="UPDATE tbl_lone_request SET `is_deleted`= 1  , `updated_on`=  '$updated_at' , `deleted_on`=  '$updated_at'  where `lr_id` = $id";
		echo $query;
				$result = $dbservice->executeDbSaveUpdateQuery($query);
		if($result>0)
		{
			$data['status']=true;
			$data['data']=json_encode($result);
			echo json_encode($data);
		}
		else
		{
			$data['status']=false;
			$data['data']=json_encode($result);
			echo json_encode($data);
		}
	}
}








?>