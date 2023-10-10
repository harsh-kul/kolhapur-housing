<?php

include('../config/dbservice.php');
include('../config/datehandler.php');
$dhandler = new DateHandler();

$dbservice =new DB();
 if($_POST['username']==_AUTH_USERNAME_ && $_POST['password'] ==_AUTH_PASSWORD_){

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
}
}
else{
		echo('HTTP/1.0 401 Unauthorized');
}






///  Update Function 
function updateData($dbservice,$dhandler)
{
	$loggeroject = new  Logger("Loan Type DataBase File");
	$loggeroject->printLogInClassfunction("In","Update Method","tbl_lone_type.php");
	$tbl_lone_typeobject=$_POST['tbl_lone_type'];
	$tbl_lone_typeobjectarray=json_decode($tbl_lone_typeobject,true);
	$lt_id=$tbl_lone_typeobjectarray['lt_id'];
	$lt_name=$tbl_lone_typeobjectarray['lt_name'];
	$created_at=$tbl_lone_typeobjectarray['created_at'];
	$updated_at=$updated_at=$dhandler->getCurrentDate();
	$is_deleted=$tbl_lone_typeobjectarray['is_deleted'];
	$deleted_on=$tbl_lone_typeobjectarray['deleted_on'];
	$triggered_on=$tbl_lone_typeobjectarray['triggered_on'];
	if(!empty($lt_id) && !empty($lt_name) && !empty($created_at) && !empty($updated_at) && 
		!empty($is_deleted) && !empty($deleted_on) && !empty($triggered_on) ) {
		$query ="UPDATE tbl_lone_type SET `lt_id`='lt_id' , `lt_name`='lt_name' , `created_at`='created_at' , `updated_at`='updated_at' , `is_deleted`='is_deleted' , `deleted_on`='deleted_on' , `triggered_on`='triggered_on'";

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
function saveData($dbservice,$dhandler)
{
	$tbl_lone_typeobject=$_POST['tbl_lone_typeobject'];
	$tbl_lone_typeobjectarray=json_decode($tbl_lone_typeobject,true);
	$lt_id=$tbl_lone_typeobjectarray['lt_id'];
	$lt_name=$tbl_lone_typeobjectarray['lt_name'];
	$created_at=$updated_at=$dhandler->getCurrentDate();
	$updated_at=$updated_at=$dhandler->getCurrentDate();;
	$is_deleted=$tbl_lone_typeobjectarray['is_deleted'];
	$deleted_on=$tbl_lone_typeobjectarray['deleted_on'];
	$triggered_on=$updated_at=$dhandler->getCurrentDate();;
	if(!empty($lt_id) && !empty($lt_name) && !empty($created_at) && !empty($updated_at) && 
	!empty($is_deleted) && !empty($deleted_on) && !empty($triggered_on) ) {
		$query ="INSERT INTO tbl_lone_type ( `lt_id' , `lt_name' , `created_at' , `updated_at' , `is_deleted' , `deleted_on' , `triggered_on' )  VALUES ('$lt_id' , '$lt_name' , '$created_at' , '$updated_at' , '$is_deleted' , '$deleted_on' , '$triggered_on' )";

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
function fetchoneData($dbservice,$dhandler)
 {
	$id =$_POST['tbl_lone_typeid'];
	$q="SELECT * FROM tbl_lone_type  where isdelete ='false' and id=".$id;
	$mydat=$dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetch(PDO::FETCH_ASSOC);
	if($row)
		{$data['status']=true;
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






function fetchAllData($dbservice,$dhandler)
{
	$q="SELECT * FROM tbl_lone_type where  is_deleted ='false'";
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
function deleteData($dbservice,$dhandler)
{
	$tbl_lone_typeobject=$_POST['tbl_lone_type_name'];
	$tbl_lone_typeobjectarray=json_decode($tbl_lone_typeobject,true);
	$id=$tbl_lone_typeobjectarray['tbl_lone_typeid'];
	if(!empty($id))
	{
		$updated_at=$dhandler->getCurrentDate();
		$query ="UPDATE tbl_lone_type SET `isdelete`= 1 and `updated_at`=  '$updated_at' and `deleted_on`=  '$updated_at' where `id` = $id";
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



function fetchAllDataType($dbservice)
{
	$q = "SELECT * FROM tbl_lone_type where  is_deleted ='false'";
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




?>