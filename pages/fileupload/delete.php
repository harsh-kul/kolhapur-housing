<?php

include('../../config/dbservice.php');
include('../../config/datehandler.php');
$output_dir = _IMAGE_UPLOAD_PATH_;
$output_video_dir = _VIDO_UPLOAD_PATH_;

$dbservice = new DB();
$dhandler = new DateHandler();
if(isset($_POST['name']) && isset($_POST['mdid']))
{
	$fileName =$_POST['name'];
	// $fileName=str_replace("..",".",$fileName); //required. if somebody is trying parent folder files	
	if($_POST['mediatype']=="img")//mediatype:"img"
	$filePath = $output_dir. $fileName;
	else
	$filePath = $output_video_dir. $fileName;

	// echo $filePath;
	if (file_exists($filePath)) 
	{
     	//delete file
		$updated_at=$dhandler->getCurrentDate();
		$query="UPDATE `tbl_media`	SET  `md_is_deleted` = 1 , `md_updated_at`=  '$updated_at' , `deleted_on`=  '$updated_at' WHERE `pk_mdid` = ".$_POST['mdid'];
		// echo $query;
		$result = $dbservice->executeDbSaveUpdateQuery($query);
		if ($result > 0) {
			$data['status'] = true;
			$data['data'] = json_encode($result);
			unlink($filePath);
		
		} else {
			$data['status'] = false;
			$data['data'] = json_encode($result);
			
		}
	    }
	else{
		$data['status'] = false;
		$data['data'] = "file not deleed ".$filePath;
		echo json_encode($data);
	}
	echo json_encode($data);
}
else{
	echo "data not Found";
}

?>