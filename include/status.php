<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();//Start session if none exists/already started
}
$headers = getallheaders();
include('../config/dbservice.php');
include('../../config/datehandler.php');
$dhandler = new DateHandler();
$dbservice =new DB();
if (isset($headers['token'])) {
	$header_token = $headers['token'];
	if ($header_token == $_SESSION['token']) {
		if($_POST['username']==_AUTH_USERNAME_ && $_POST['password'] ==_AUTH_PASSWORD_){
			$loggeroject->printLogInClassfunction("In","Auth Switch",".tbl_status.php");
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
	}
	else{
		echo "ERROR: Tokens dont match";
		exit;
	}
}


///  Update Function 
function updateData($dbservice,$dhandler)
{
	$loggeroject = new  Logger("Status DataBAse File ");
	$loggeroject->printLogInClassfunction("In","Update Method","tbl_status.php");
$tbl_statusobject=$_POST['tbl_status'];
$tbl_statusobjectarray=json_decode($tbl_statusobject,true);
$id=$tbl_statusobjectarray['id'];
$name=$tbl_statusobjectarray['name'];
$created_at=$tbl_statusobjectarray['created_at'];
$updated_at=$tbl_statusobjectarray['updated_at'];
$is_deleted=$tbl_statusobjectarray['is_deleted'];
$deleted_on=$tbl_statusobjectarray['deleted_on'];
$triggered_on=$tbl_statusobjectarray['triggered_on'];
if(!empty($id) && !empty($name) && !empty($created_at) && 
!empty($updated_at) && !empty($is_deleted) && !empty($deleted_on) && !empty($triggered_on) ) {
 $query ="UPDATE tbl_status SET `id`='id' , `name`='name' , `created_at`='created_at' , `updated_at`='updated_at' , `is_deleted`='is_deleted' , `deleted_on`='deleted_on' , `triggered_on`='triggered_on'";

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
	$tbl_statusobject=$_POST['tbl_statusobject'];
	$tbl_statusobjectarray=json_decode($tbl_statusobject,true);
	$id=$tbl_statusobjectarray['id'];
	$name=$tbl_statusobjectarray['name'];
	$created_at=$tbl_statusobjectarray['created_at'];
	$updated_at=$tbl_statusobjectarray['updated_at'];
	$is_deleted=$tbl_statusobjectarray['is_deleted'];
	$deleted_on=$tbl_statusobjectarray['deleted_on'];
	$triggered_on=$tbl_statusobjectarray['triggered_on'];
	if(!empty($id) && !empty($name) && !empty($created_at) && 
	!empty($updated_at) && !empty($is_deleted) && !empty($deleted_on) && !empty($triggered_on) ) {
	$query ="INSERT INTO tbl_status ( `id' , `name' , `created_at' , `updated_at' , `is_deleted' , `deleted_on' , `triggered_on' )  VALUES ('$id' , '$name' , '$created_at' , '$updated_at' , '$is_deleted' , '$deleted_on' , '$triggered_on' )";

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
	$id =$_POST['tbl_statusid'];
	$q="SELECT * FROM tbl_status  where isdelete ='false' and id=".$id;
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
	$q="SELECT * FROM tbl_status where  isdelete ='false'";
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
	$tbl_statusobject=$_POST['tbl_status_name'];
	$tbl_statusobjectarray=json_decode($tbl_statusobject,true);
	$id=$tbl_statusobjectarray['tbl_statusid'];
	if(!empty($id))
	{
	$query ="UPDATE tbl_status SET `isdelete`= 1  where `id` = $id";
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