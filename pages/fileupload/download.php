<?php

include('../../config/dbservice.php');
if(isset($_GET['filename']))
{
$fileName=$_GET['filename'];
$fileName=str_replace("..",".",$fileName);
if($_GET['mediatype']=="img") //required. if somebody is trying parent folder files
$file = _IMAGE_UPLOAD_PATH_.$fileName;
else
$file = _VIDO_UPLOAD_PATH_.$fileName;

if (file_exists($file)) {
	$fileName =str_replace(" ","",$fileName);
    $str_arre = explode (".", $fileName);
    $str_arre1 = explode ("_", $str_arre[0]);
    $newfilename=$str_arre1[0].".".$str_arre[1];
    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename='.$newfilename);
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}
else{
    echo $file;
   echo "mediatype". $_GET['mediatype'];
    echo "  file not found";
}

}
else{
    echo "data Not Found";
}
?>
