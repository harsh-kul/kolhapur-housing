<?php

include('../config/dbservice.php');
include('../../config/datehandler.php');
$dhandler = new DateHandler();
$dbservice =new DB();
 if($_POST['username']==_AUTH_USERNAME_ && $_POST['password'] ==_AUTH_PASSWORD_){
	$loggeroject->printLogInClassfunction("In","Auth Switch",".tbl_config_table.php");
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

$loggeroject = new  Logger("Config Table Databasefile");
$loggeroject->printLogInClassfunction("In","Update Method","tbl_config_table.php");
$tbl_config_tableobject=$_POST['tbl_config_table'];
		$tbl_config_tableobjectarray=json_decode($tbl_config_tableobject,true);
		$pk_conid=$tbl_config_tableobjectarray['pk_conid'];
		$con_key=$tbl_config_tableobjectarray['con_key'];
		$con_value=$tbl_config_tableobjectarray['con_value'];
		$con_col1=$tbl_config_tableobjectarray['con_col1'];
		$con_col2=$tbl_config_tableobjectarray['con_col2'];
		$con_col3=$tbl_config_tableobjectarray['con_col3'];
		$con_col4=$tbl_config_tableobjectarray['con_col4'];
		$con_col5=$tbl_config_tableobjectarray['con_col5'];
		$created_at=$tbl_config_tableobjectarray['created_at'];
		$updated_at=$dhandler->getCurrentDate();;
		$is_delete=$tbl_config_tableobjectarray['is_delete'];
		$deleted_on=$tbl_config_tableobjectarray['deleted_on'];
		$triggerd_on=$dhandler->getCurrentDate();;
		if(!empty($pk_conid) && !empty($con_key) && !empty($con_value) && !empty($con_col1) && !empty($con_col2) && 
		!empty($con_col3) && !empty($con_col4) && !empty($con_col5) && !empty($created_at) && !empty($updated_at) && 
		!empty($is_delete) && !empty($deleted_on) && !empty($triggerd_on) ) {
			$query ="UPDATE tbl_config_table SET `pk_conid`='pk_conid' , `con_key`='con_key' , `con_value`='con_value' , `con_col1`='con_col1' , `con_col2`='con_col2' , `con_col3`='con_col3' , `con_col4`='con_col4' , `con_col5`='con_col5' , `created_at`='created_at' , `updated_at`='updated_at' , `is_delete`='is_delete' , `deleted_on`='deleted_on' , `triggerd_on`='triggerd_on'";

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
	$tbl_config_tableobject=$_POST['tbl_config_tableobject'];
	$tbl_config_tableobjectarray=json_decode($tbl_config_tableobject,true);
	$pk_conid=$tbl_config_tableobjectarray['pk_conid'];
	$con_key=$tbl_config_tableobjectarray['con_key'];
	$con_value=$tbl_config_tableobjectarray['con_value'];
	$con_col1=$tbl_config_tableobjectarray['con_col1'];
	$con_col2=$tbl_config_tableobjectarray['con_col2'];
	$con_col3=$tbl_config_tableobjectarray['con_col3'];
	$con_col4=$tbl_config_tableobjectarray['con_col4'];
	$con_col5=$tbl_config_tableobjectarray['con_col5'];
	$created_at=$dhandler->getCurrentDate();;
	$updated_at=$dhandler->getCurrentDate();;
	$is_delete=$tbl_config_tableobjectarray['is_delete'];
	$deleted_on=$tbl_config_tableobjectarray['deleted_on'];
	$triggerd_on=$dhandler->getCurrentDate();
	if(!empty($pk_conid) && !empty($con_key) && !empty($con_value) && !empty($con_col1) &&
	 !empty($con_col2) && !empty($con_col3) && !empty($con_col4) && !empty($con_col5) && 
	 !empty($created_at) && !empty($updated_at) && !empty($is_delete) && !empty($deleted_on) && !empty($triggerd_on) ) {
	$query ="INSERT INTO tbl_config_table ( `pk_conid' , `con_key' , `con_value' , `con_col1' , `con_col2' , `con_col3' , `con_col4' , `con_col5' , `created_at' , `updated_at' , `is_delete' , `deleted_on' , `triggerd_on' )  VALUES ('$pk_conid' , '$con_key' , '$con_value' , '$con_col1' , '$con_col2' , '$con_col3' , '$con_col4' , '$con_col5' , '$created_at' , '$updated_at' , '$is_delete' , '$deleted_on' , '$triggerd_on' )";
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
	$id =$_POST['tbl_config_tableid'];
	$q="SELECT * FROM tbl_config_table  where isdelete ='false' and id=".$id;
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



///////////////////////////////////////fetch All  Record //////////////////////// 


function fetchAllData($dbservice,$dhandler)
{
	$q="SELECT * FROM tbl_config_table where  isdelete ='false'";
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
	$tbl_config_tableobject=$_POST['tbl_config_table_name'];
	$tbl_config_tableobjectarray=json_decode($tbl_config_tableobject,true);
	$id=$tbl_config_tableobjectarray['tbl_config_tableid'];
	if(!empty($id))
	{
		$updated_at=$dhandler->getCurrentDate();
		$query ="UPDATE tbl_config_table SET `isdelete`= 1 and `updated_at`=  '$updated_at' and `deleted_on`=  '$updated_at' where `id` = $id";
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