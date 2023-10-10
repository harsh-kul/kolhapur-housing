<?php
// include('../config/config.php');
include('../config/dbservice.php');
include("../config/datehandler.php");

$dbservice =new DB();
$dhandler = new DateHandler();

 if($_POST['username']==_AUTH_USERNAME_ && $_POST['password'] ==_AUTH_PASSWORD_){
	
$loggeroject->printLogInClassfunction("In","Auth Switch",".tbl_media.php");
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
function updateData($dbservice, $dhandler)
{
	$loggeroject = new  Logger("Media Databse File ");	
	$loggeroject->printLogInClassfunction("In","Update Method","tbl_media.php");
	$tbl_mediaobject=$_POST['tbl_media'];
	$tbl_mediaobjectarray=json_decode($tbl_mediaobject,true);
	$pk_mdid=$tbl_mediaobjectarray['pk_mdid'];
	$fk_sfid=$tbl_mediaobjectarray['fk_sfid'];
	$fk_ppid=$tbl_mediaobjectarray['fk_ppid'];
	$md_media_url=$tbl_mediaobjectarray['md_media_url'];
	$md_media_type=$tbl_mediaobjectarray['md_media_type'];
	$md_is_deleted=$tbl_mediaobjectarray['md_is_deleted'];
	$md_updated_at=$dhandler->getCurrentDate();
	$md_created_at=$dhandler->getCurrentDate();
	$md_col1=$tbl_mediaobjectarray['md_col1'];
	$md_col2=$tbl_mediaobjectarray['md_col2'];
	$md_col3=$tbl_mediaobjectarray['md_col3'];
	$md_col4=$tbl_mediaobjectarray['md_col4'];
	$md_col5=$tbl_mediaobjectarray['md_col5'];
	$deleted_on=$tbl_mediaobjectarray['deleted_on'];
	$triggered_on= $dhandler->getCurrentDate();
	if(!empty($pk_mdid) && !empty($fk_sfid) && !empty($fk_ppid) && !empty($md_media_url) && 
	!empty($md_media_type) && !empty($md_is_deleted) && !empty($md_updated_at) && !empty($md_created_at) && 
	!empty($md_col1) && !empty($md_col2) && !empty($md_col3) && !empty($md_col4) && !empty($md_col5) && 
	!empty($deleted_on) && !empty($triggered_on) ) {
	$query ="UPDATE tbl_media SET `pk_mdid`='pk_mdid' , `fk_sfid`='fk_sfid' , `fk_ppid`='fk_ppid' , `md_media_url`='md_media_url' , `md_media_type`='md_media_type' , `md_is_deleted`='md_is_deleted' , `md_updated_at`='md_updated_at' , `md_created_at`='md_created_at' , `md_col1`='md_col1' , `md_col2`='md_col2' , `md_col3`='md_col3' , `md_col4`='md_col4' , `md_col5`='md_col5' , `deleted_on`='deleted_on' , `triggered_on`='triggered_on'";

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
function saveData($dbservice, $dhandler)
{
	$tbl_mediaobject=$_POST['tbl_mediaobject'];
	$tbl_mediaobjectarray=json_decode($tbl_mediaobject,true);
	$pk_mdid=$tbl_mediaobjectarray['pk_mdid'];
	$fk_sfid=$tbl_mediaobjectarray['fk_sfid'];
	$fk_ppid=$tbl_mediaobjectarray['fk_ppid'];
	$md_media_url=$tbl_mediaobjectarray['md_media_url'];
	$md_media_type=$tbl_mediaobjectarray['md_media_type'];
	$md_is_deleted=$tbl_mediaobjectarray['md_is_deleted'];
	$md_updated_at=$dhandler->getCurrentDate();
	$md_created_at=$dhandler->getCurrentDate();
	$md_col1=$tbl_mediaobjectarray['md_col1'];
	$md_col2=$tbl_mediaobjectarray['md_col2'];
	$md_col3=$tbl_mediaobjectarray['md_col3'];
	$md_col4=$tbl_mediaobjectarray['md_col4'];
	$md_col5=$tbl_mediaobjectarray['md_col5'];
	$deleted_on=$tbl_mediaobjectarray['deleted_on'];
	$triggered_on=$dhandler->getCurrentDate();
	if(!empty($pk_mdid) && !empty($fk_sfid) && !empty($fk_ppid) && !empty($md_media_url) && 
		!empty($md_media_type) && !empty($md_is_deleted) && !empty($md_updated_at) && !empty($md_created_at) && 
		!empty($md_col1) && !empty($md_col2) && !empty($md_col3) && !empty($md_col4) && !empty($md_col5) && 
		!empty($deleted_on) && !empty($triggered_on) ) {
			$query ="INSERT INTO tbl_media ( `pk_mdid' , `fk_sfid' , `fk_ppid' , `md_media_url' , `md_media_type' , `md_is_deleted' , `md_updated_at' , `md_created_at' , `md_col1' , `md_col2' , `md_col3' , `md_col4' , `md_col5' , `deleted_on' , `triggered_on' )  VALUES ('$pk_mdid' , '$fk_sfid' , '$fk_ppid' , '$md_media_url' , '$md_media_type' , '$md_is_deleted' , '$md_updated_at' , '$md_created_at' , '$md_col1' , '$md_col2' , '$md_col3' , '$md_col4' , '$md_col5' , '$deleted_on' , '$triggered_on' )";

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
function fetchoneData($dbservice, $dhandler)
 {
	$id =$_POST['tbl_mediaid'];
	$q="SELECT * FROM tbl_media  where isdelete ='false' and id=".$id;
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






function fetchAllData($dbservice, $dhandler)
	{
	$q="SELECT * FROM tbl_media where  isdelete ='false'";
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
function deleteData($dbservice, $dhandler)
{
	$tbl_mediaobject=$_POST['tbl_media_name'];
	$tbl_mediaobjectarray=json_decode($tbl_mediaobject,true);
	$id=$tbl_mediaobjectarray['tbl_mediaid'];
	if(!empty($id))
	{
		$updated_at=$dhandler->getCurrentDate();
		$query ="UPDATE tbl_media SET `isdelete`= 1 and `updated_at`=  '$updated_at' and `deleted_on`=  '$updated_at' where `id` = $id";
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