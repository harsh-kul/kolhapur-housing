<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();//Start session if none exists/already started
}
$headers = getallheaders();
include('../../config/dbservice.php');
$dir=_IMAGE_UPLOAD_PATH_;
$videodir=_VIDO_UPLOAD_PATH_;
$files = scandir($dir);
$videoFile =scandir($videodir);


		$ret= array();
		$dbmedialist= array();
		$dbservice = new DB();
		$pid=$_POST["pp_id"];//9102;
		$q = "SELECT * FROM `tbl_media` where  `md_is_deleted` = 0 and  `md_media_type`='Image' and `fk_ppid`='$pid'";
		// echo $q;
		$mydat = $dbservice->executeDbFetchDataQuery($q);
		$row = $mydat->fetchAll(PDO::FETCH_ASSOC);
		if ($row) {
			$dbmedialist = $row;
			
		}
		// print_r($files);
		
	foreach($dbmedialist as $dbmedia)
	{
		foreach($files as $file)
		{
	
			if($file == "." || $file == "..")
				continue;
			$filePath=$dir."/".$file;

			if($dbmedia['md_media_url']==$file)
			{
				$details = array();
				$details['name']=$file;
				$details['path']=$filePath;
				$details['size']=filesize($filePath);
				$details['mdid']=$dbmedia['pk_mdid'];
				echo in_array($details , $ret);
    			if(!in_array($details , $ret))
					{
						$ret[] = $details;
					}
			}
		}
	}	


	$retvideodata= array();
	//id load of property 
	$dbvideomedialist= array();
	$dbservice = new DB();
	$pid=$_POST["pp_id"];//9102;
	$q = "SELECT * FROM `tbl_media` where  `md_is_deleted` = 0 and  `md_media_type`='Video' and `fk_ppid`='$pid'";
	// echo $q;
	$mydat = $dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetchAll(PDO::FETCH_ASSOC);
	if ($row) {
		$dbvideomedialist = $row;
		
	}
	// print_r($files);
	foreach($dbvideomedialist as $dbmedia)
	{
		foreach($videoFile as $file)
		{

			if($file == "." || $file == "..")
				continue;
			$filePath=$videodir."/".$file;

			if($dbmedia['md_media_url']==$file)
			{
			$videodetails = array();
			$videodetails['name']=$file;
			$videodetails['path']=$filePath;
			$videodetails['size']=filesize($filePath);
			$videodetails['mdid']=$dbmedia['pk_mdid'];

				if(!in_array($videodetails , $retvideodata))
				{
					$retvideodata[] = $videodetails;
				}
			}
		}
	}

if($ret!=null)
{
	// print_r($ret);
	$data['status']=true;
	$data['data']=json_encode($ret);
	$data['videodata']=json_encode($retvideodata); 
	echo json_encode($data);
}
else{
	$data['status']=false;
	$data['data']=json_encode($ret);
	$data['videodata']=json_encode($retvideodata); 
	echo json_encode($data);
}

// echo json_encode($ret);
?>