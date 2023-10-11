<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();//Start session if none exists/already started
}
$headers = getallheaders();

include('../../config/dbservice.php');
include('../../config/datehandler.php');
include('../../utils/php/utils.php');
$dbservice = new DB();
$dhandler = new DateHandler();
$utils = new Utils();
$output_dir = _IMAGE_UPLOAD_PATH_;
$output_Video_dir = _VIDO_UPLOAD_PATH_;

if (isset($_FILES["myfile"])) {
	$ret = array();
	$error = $_FILES["myfile"]["error"];
	if (!is_array($_FILES["myfile"]["name"])) //single file
	{
		$fileName = $_FILES["myfile"]["name"];
		$str_arre = explode (".", $fileName);
		$fk_sfid = $_POST["sf_id"];//$tbl_mediaobjectarray['fk_sfid'];
		$fk_ppid = $_POST["pp_id"];//$tbl_mediaobjectarray['fk_ppid'];
		// echo ("fk_ppid" .$fk_ppid);
		$md_media_url=str_replace("_","-",$fileName);
		if($_POST["mediatype"]=="img")
		{
		$md_media_type="Image"; 
		}
		else 
		{
			$md_media_type="Video"; 
		}
		$createdAt=$dhandler->getCurrentDate();
		$query = "INSERT INTO tbl_media ( `pk_mdid` , `fk_sfid` , `fk_ppid` , `md_media_url` , `md_media_type`, `md_created_at` ,`md_updated_at` )  VALUES (null , $fk_sfid , $fk_ppid , '$md_media_url' , '$md_media_type' ,'$createdAt','$createdAt')";
	    echo $query;
		$insertedId=$dbservice->executeDbSaveUpdateQueryReturnId($query);
		$newfileName =$str_arre[0]."_".$fk_sfid."_".$fk_ppid."_".$insertedId.".".$str_arre[1];
		$updatenameQuery ="UPDATE tbl_media SET md_media_url='$newfileName' WHERE pk_mdid=".$insertedId;
		$dbservice->executeDbSaveUpdateQuery($updatenameQuery);
		if($_POST["mediatype"]=="img")
		{
			move_uploaded_file($_FILES["myfile"]["tmp_name"], $output_dir . $newfileName);

		}
		else 
		{
			move_uploaded_file($_FILES["myfile"]["tmp_name"], $output_Video_dir . $newfileName);
		}
		
		$ret["data"] = $fileName;
		$ret["status"]=true;
	} 	
	
} else {
	$ret["data"] = "File Not Added  File Name Not Found";
	$ret["status"]=false;
}
echo json_encode($ret);
?>