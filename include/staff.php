<?php
include('../config/dbservice.php');
include('../utils/php/loghandler.php');
include('../config/datehandler.php');
$dhandler = new DateHandler();
$loggeroject = new  Logger("property");
$dbservice =new DB();
 if($_POST["username"]==_AUTH_USERNAME_ && $_POST["password"] ==_AUTH_PASSWORD_){
	$loggeroject->printLogInClassfunction("In","Auth Switch",".tbl_staff.php");
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
	$loggeroject = new  Logger("Staff DatabaseFile ");
	$loggeroject->printLogInClassfunction("In","Update Method","tbl_staff.php");
	$tbl_staffobject=$_POST['tbl_staff'];
	$tbl_staffobjectarray=json_decode($tbl_staffobject,true);
	$pk_sfid=$tbl_staffobjectarray['pk_sfid'];
	$sf_name=$tbl_staffobjectarray['sf_name'];
	$sf_email=$tbl_staffobjectarray['sf_email'];
	$sf_mobile=$tbl_staffobjectarray['sf_mobile'];
	$sf_status=$tbl_staffobjectarray['sf_status'];
	
	if(!empty($pk_sfid) && !empty($sf_name) && !empty($sf_email)
	&& !empty($sf_mobile) && !empty($sf_status)  ) {
		$updated_at=$dhandler->getCurrentDate();
		$query ="UPDATE tbl_staff SET `sf_name`='$sf_name' , `sf_email`='$sf_email' , `sf_mobile`='$sf_mobile' , `sf_status`='$sf_status'  , `sf_updated_at`='$updated_at' where `pk_sfid`=".$pk_sfid;
		// echo $query;
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
	$tbl_staffobject=$_POST['tbl_staffobject'];
	$tbl_staffobjectarray=json_decode($tbl_staffobject,true);
	$pk_sfid=$tbl_staffobjectarray['pk_sfid'];
	$sf_name=$tbl_staffobjectarray['sf_name'];
	$sf_email=$tbl_staffobjectarray['sf_email'];
	$sf_mobile=$tbl_staffobjectarray['sf_mobile'];
	$sf_status=$tbl_staffobjectarray['sf_status'];
	$sf_is_deleted=$tbl_staffobjectarray['sf_is_deleted'];
	$sf_created_at=$tbl_staffobjectarray['sf_created_at'];
	$sf_updated_at=$tbl_staffobjectarray['sf_updated_at'];
	$sf_col1=$tbl_staffobjectarray['sf_col1'];
	$sf_col2=$tbl_staffobjectarray['sf_col2'];
	$sf_col3=$tbl_staffobjectarray['sf_col3'];
	$sf_col4=$tbl_staffobjectarray['sf_col4'];
	$deleted_on=$tbl_staffobjectarray['deleted_on'];
	$triggered_on=$tbl_staffobjectarray['triggered_on'];
	if(!empty($pk_sfid) 
	
	) 
	{ 

			$query ="INSERT INTO tbl_staff ( `pk_sfid` , `sf_name` , `sf_email` , `sf_mobile` , `sf_status` , `sf_is_deleted` , `sf_created_at` , `sf_updated_at` , `sf_col1` , `sf_col2` , `sf_col3` , `sf_col4` , `deleted_on` , `triggered_on` )  VALUES ($pk_sfid , '$sf_name' , '$sf_email' , '$sf_mobile' , '$sf_status' , '$sf_is_deleted' , '$sf_created_at' , '$sf_updated_at' , '$sf_col1' , '$sf_col2' , '$sf_col3' , '$sf_col4' , '$deleted_on' , '$triggered_on' )";

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
	$id =$_POST['tbl_staffid'];
	$q="SELECT * FROM tbl_staff  where sf_is_deleted=0 and pk_sfid=".$id;
	// echo $q;
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
	$q="SELECT * FROM tbl_staff where  sf_is_deleted =0";
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
	$tbl_staffobject=$_POST['tbl_staff_name'];
	$tbl_staffobjectarray=json_decode($tbl_staffobject,true);
	$id=$tbl_staffobjectarray['id'];
	if(!empty($id))
	{
		$updated_at=$dhandler->getCurrentDate();
		$query ="UPDATE tbl_staff SET `sf_is_deleted`= 1  , `sf_updated_at`=  '$updated_at' , `deleted_on`=  '$updated_at' where `pk_sfid` = $id";
		// echo $query;
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