<?php
session_start();
include('../config/dbservice.php');
include('../utils/php/loghandler.php');
include('../config/datehandler.php');
$dhandler = new DateHandler();
$loggeroject = new Logger("property");
$dbservice = new DB();
 if($_POST['username']==_AUTH_USERNAME_ && $_POST['password'] ==_AUTH_PASSWORD_){
	$loggeroject->printLogInClassfunction("In","Auth Switch",".tbl_property_type.php");
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
	$updated_at=$dhandler->getCurrentDate();

	$loggeroject = new  Logger("Property Type Database File ");
	$loggeroject->printLogInClassfunction("In","Update Method","tbl_property_type.php");
	$tbl_property_typeobject=$_POST['tbl_property_type'];
	$tbl_property_typeobjectarray=json_decode($tbl_property_typeobject,true);
	$pk_ptid=$tbl_property_typeobjectarray['pk_ptid'];
	$pt_name=$tbl_property_typeobjectarray['pt_name'];
	$pt_is_deleted=$tbl_property_typeobjectarray['pt_is_deleted'];
	$pt_updated_at=$updated_at;
	$pt_col1=$tbl_property_typeobjectarray['pt_col1'];
	$pt_col2=$tbl_property_typeobjectarray['pt_col2'];
	$pt_col3=$tbl_property_typeobjectarray['pt_col3'];
	$pt_col4=$tbl_property_typeobjectarray['pt_col4'];
	$pt_col5=$tbl_property_typeobjectarray['pt_col5'];
	$deleted_on=$tbl_property_typeobjectarray['deleted_on'];
	$triggered_on=$tbl_property_typeobjectarray['triggered_on'];
	if(!empty($pk_ptid) && !empty($pt_name) && !empty($pt_is_deleted) && 
	!empty($pt_created_at) && !empty($pt_updated_at) && !empty($pt_col1) && !empty($pt_col2) &&
	!empty($pt_col3) && !empty($pt_col4) && !empty($pt_col5) && !empty($deleted_on) && !empty($triggered_on) ) {
		$query ="UPDATE tbl_property_type SET `pk_ptid`='pk_ptid' , `pt_name`='pt_name' , `pt_is_deleted`='pt_is_deleted' , `pt_created_at`='pt_created_at' , `pt_updated_at`='pt_updated_at' , `pt_col1`='pt_col1' , `pt_col2`='pt_col2' , `pt_col3`='pt_col3' , `pt_col4`='pt_col4' , `pt_col5`='pt_col5' , `deleted_on`='deleted_on' , `triggered_on`='triggered_on'";

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
	$updated_at=$dhandler->getCurrentDate();

	$tbl_property_typeobject=$_POST['tbl_property_typeobject'];
	$tbl_property_typeobjectarray=json_decode($tbl_property_typeobject,true);
	$pk_ptid=$tbl_property_typeobjectarray['pk_ptid'];
	$pt_name=$tbl_property_typeobjectarray['pt_name'];
	$pt_is_deleted=$tbl_property_typeobjectarray['pt_is_deleted'];
	$pt_created_at=	$updated_at;	;
	// $updated_at=$dhandler->getCurrentDate();
	$pt_updated_at= $dhandler->getCurrentDate();
	$pt_col1=$tbl_property_typeobjectarray['pt_col1'];
	$pt_col2=$tbl_property_typeobjectarray['pt_col2'];
	$pt_col3=$tbl_property_typeobjectarray['pt_col3'];
	$pt_col4=$tbl_property_typeobjectarray['pt_col4'];
	$pt_col5=$tbl_property_typeobjectarray['pt_col5'];
	$deleted_on=$tbl_property_typeobjectarray['deleted_on'];
	$triggered_on=$dhandler->getCurrentDate();
	if(!empty($pk_ptid) && !empty($pt_name) && !empty($pt_is_deleted) && 
	!empty($pt_created_at) && !empty($pt_updated_at) && !empty($pt_col1) && !empty($pt_col2) &&
	!empty($pt_col3) && !empty($pt_col4) && !empty($pt_col5) && !empty($deleted_on) && !empty($triggered_on) ) {
		$query ="INSERT INTO tbl_property_type ( `pk_ptid' , `pt_name' , `pt_is_deleted' , `pt_created_at' , `pt_updated_at' , `pt_col1' , `pt_col2' , `pt_col3' , `pt_col4' , `pt_col5' , `deleted_on' , `triggered_on' )  VALUES ('$pk_ptid' , '$pt_name' , '$pt_is_deleted' , '$pt_created_at' , '$pt_updated_at' , '$pt_col1' , '$pt_col2' , '$pt_col3' , '$pt_col4' , '$pt_col5' , '$deleted_on' , '$triggered_on' )";

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
	$id =$_POST['tbl_property_typeid'];
	$q="SELECT * FROM tbl_property_type  where isdelete ='false' and id=".$id;
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






function fetchAllData($dbservice,$dhandler)
{
	$q="SELECT * FROM tbl_property_type";
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
	$tbl_property_typeobject=$_POST['tbl_property_type_name'];
	$tbl_property_typeobjectarray=json_decode($tbl_property_typeobject,true);
	$id=$tbl_property_typeobjectarray['tbl_property_typeid'];
	if(!empty($id))
	{
		$updated_at=$dhandler->getCurrentDate();

		$query ="UPDATE tbl_property_type SET `isdelete`= 1 and `updated_at`=  '$updated_at' and `deleted_on`=  '$updated_at'  where `id` = $id";
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