<?php

include('../config/dbservice.php');
include('../../config/datehandler.php');
$dhandler = new DateHandler();
$dbservice =new DB();
if($_POST['username']==_AUTH_USERNAME_ && $_POST['password'] ==_AUTH_PASSWORD_)
{

	switch ($_POST['key']) 
	{
	 	case _GETALL_:
		fetchAllData($dbservice);
		break;
		case _DELETEDATA_:
			deleteData($dbservice);
			break;
		case _GETONE_:
			fetchoneData($dbservice);
			break;
		case _UPDATEDATA_:
		updateData($dbservice);
			break;
		case _SAVEDATA_:
			saveData($dbservice);
			break;
	}
}
else
{
	echo('HTTP/1.0 401 Unauthorized');
}






///  Update Function 
function updateData($dbservice)
{
	$loggeroject = new  Logger("Admin request Databasefile");
	$loggeroject->printLogInClassfunction("In","Update Method","tbl_admin_request.php");
	$tbl_admin_requestobject=$_POST['tbl_admin_request'];
	$tbl_admin_requestobjectarray=json_decode($tbl_admin_requestobject,true);
	$pp_req_id=$tbl_admin_requestobjectarray['pp_req_id'];
	$req_regi_id=$tbl_admin_requestobjectarray['req_regi_id'];
	$req_pp_id=$tbl_admin_requestobjectarray['req_pp_id'];
	$reg_status_id=$tbl_admin_requestobjectarray['reg_status_id'];
	$updated_at=$tbl_admin_requestobjectarray['updated_at'];
	$created_at=$tbl_admin_requestobjectarray['created_at'];
	$is_deleted=$tbl_admin_requestobjectarray['is_deleted'];
	$req_ppowner_id=$tbl_admin_requestobjectarray['req_ppowner_id'];
	$req_remark=$tbl_admin_requestobjectarray['req_remark'];
	$req_col1=$tbl_admin_requestobjectarray['req_col1'];
	$req_col2=$tbl_admin_requestobjectarray['req_col2'];
	$req_col3=$tbl_admin_requestobjectarray['req_col3'];
	$req_col4=$tbl_admin_requestobjectarray['req_col4'];
	$req_col5=$tbl_admin_requestobjectarray['req_col5'];
	$deleted_on=$tbl_admin_requestobjectarray['deleted_on'];
	$triggered_on=$tbl_admin_requestobjectarray['triggered_on'];
	$req_admin_id=$tbl_admin_requestobjectarray['req_admin_id'];
	if(!empty($pp_req_id) && !empty($req_regi_id) && !empty($req_pp_id) && !empty($reg_status_id) &&
	!empty($updated_at) && !empty($created_at) && !empty($is_deleted) && !empty($req_ppowner_id) && 
	!empty($req_remark) && !empty($req_col1) && !empty($req_col2) && !empty($req_col3) && !empty($req_col4) && 
	empty($req_col5) && !empty($deleted_on) && !empty($triggered_on) && !empty($req_admin_id) ) {

		$query ="UPDATE tbl_admin_request SET `pp_req_id`='pp_req_id' , `req_regi_id`='req_regi_id' , `req_pp_id`='req_pp_id' , `reg_status_id`='reg_status_id' , `updated_at`='updated_at' , `created_at`='created_at' , `is_deleted`='is_deleted' , `req_ppowner_id`='req_ppowner_id' , `req_remark`='req_remark' , `req_col1`='req_col1' , `req_col2`='req_col2' , `req_col3`='req_col3' , `req_col4`='req_col4' , `req_col5`='req_col5' , `deleted_on`='deleted_on' , `triggered_on`='triggered_on' , `req_admin_id`='req_admin_id'";
		$result = $dbservice->executeDbSaveUpdateQuery($query);
		if($result) 
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



///  Save Function 
function saveData($dbservice)
{
	$tbl_admin_requestobject=$_POST['tbl_admin_requestobject'];
	$tbl_admin_requestobjectarray=json_decode($tbl_admin_requestobject,true);
	$pp_req_id=$tbl_admin_requestobjectarray['pp_req_id'];
	$req_regi_id=$tbl_admin_requestobjectarray['req_regi_id'];
	$req_pp_id=$tbl_admin_requestobjectarray['req_pp_id'];
	$reg_status_id=$tbl_admin_requestobjectarray['reg_status_id'];
	$updated_at=$tbl_admin_requestobjectarray['updated_at'];
	$created_at=$tbl_admin_requestobjectarray['created_at'];
	$is_deleted=$tbl_admin_requestobjectarray['is_deleted'];
	$req_ppowner_id=$tbl_admin_requestobjectarray['req_ppowner_id'];
	$req_remark=$tbl_admin_requestobjectarray['req_remark'];
	$req_col1=$tbl_admin_requestobjectarray['req_col1'];
	$req_col2=$tbl_admin_requestobjectarray['req_col2'];
	$req_col3=$tbl_admin_requestobjectarray['req_col3'];
	$req_col4=$tbl_admin_requestobjectarray['req_col4'];
	$req_col5=$tbl_admin_requestobjectarray['req_col5'];
	$deleted_on=$tbl_admin_requestobjectarray['deleted_on'];
	$triggered_on=$tbl_admin_requestobjectarray['triggered_on'];
	$req_admin_id=$tbl_admin_requestobjectarray['req_admin_id'];
	if(
	!empty($pp_req_id) && !empty($req_regi_id) && !empty($req_pp_id) && !empty($reg_status_id) && 
	!empty($updated_at) && !empty($created_at) && !empty($is_deleted) && !empty($req_ppowner_id) &&
	!empty($req_remark) && !empty($req_col1) && !empty($req_col2) && !empty($req_col3) && !empty($req_col4) 
	&& !empty($req_col5) && !empty($deleted_on) && !empty($triggered_on) && !empty($req_admin_id) )
	{
		$query ="INSERT INTO tbl_admin_request ( `pp_req_id' , `req_regi_id' , `req_pp_id' , `reg_status_id' , `updated_at' , `created_at' , `is_deleted' , `req_ppowner_id' , `req_remark' , `req_col1' , `req_col2' , `req_col3' , `req_col4' , `req_col5' , `deleted_on' , `triggered_on' , `req_admin_id' )  VALUES ('$pp_req_id' , '$req_regi_id' , '$req_pp_id' , '$reg_status_id' , '$updated_at' , '$created_at' , '$is_deleted' , '$req_ppowner_id' , '$req_remark' , '$req_col1' , '$req_col2' , '$req_col3' , '$req_col4' , '$req_col5' , '$deleted_on' , '$triggered_on' , '$req_admin_id' )";

		$result = $dbservice->executeDbSaveUpdateQuery($query);
		if($result) 
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



///////////////////////////////////////fetch Single  Record //////////////////////// 
function fetchoneData($dbservice)
 {
	$id =$_POST['tbl_admin_requestid'];
	$q="SELECT * FROM tbl_admin_request  where isdelete ='false' and id=".$id;
	$mydat=$dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetch(PDO::FETCH_ASSOC);
	if($row)
	{
		$data['status']=true;
		$data['data']=json_encode($row);
		echo json_encode($data);
	}
	else
	{
		$data['status']=false;
		$data['data']=json_encode($row);
		echo json_encode($data);
	}
}






function fetchAllData($dbservice)
{
	$q="SELECT * FROM tbl_admin_request where  is_deleted ='false'";//
	$mydat=$dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetchAll(PDO::FETCH_ASSOC);
	if($row)
		{
			$data['status']=true;
			$data['data']=json_encode($row);
			echo json_encode($data);
		}
	else
	{
			$data['status']=false;
			$data['data']=json_encode($row);
			echo json_encode($data);
	}
}






///////////////////////////////////////  Delete Record  //////////////////////// 
function deleteData($dbservice)
{
	$tbl_admin_requestobject=$_POST['tbl_admin_request_name'];
	$tbl_admin_requestobjectarray=json_decode($tbl_admin_requestobject,true);
	$id=$tbl_admin_requestobjectarray['tbl_admin_requestid'];
	if(!empty($id))
	{
		$query ="UPDATE tbl_admin_request SET `isdelete`= 1  where `id` = $id";
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