<?php

class Utils
{

    public function isData($variable, $variablemane)
    {
        if (isset($_POST[$variablemane])) {
            $variable = $_POST[$variablemane];
        } else {
            $variable = null;
        }
        return $variable;
    }

    public function isValidUser()
    {
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Text to send if user hits Cancel button';
            exit;
        } else {

            if ($_SERVER['PHP_AUTH_PW'] == "shankar" && $_SERVER['PHP_AUTH_USER'] == _AUTH_USERNAME_) {
                return true;
            } else {
                return false;
            }
        }
    }

function bytoAnyconvert($size,$unit) 
{
 if($unit == "KB")
 {
  return $fileSize = round($size / 1024,4) . 'KB';	
 }
 if($unit == "MB")
 {
  return $fileSize = round($size / 1024 / 1024,4) . 'MB';	
 }
 if($unit == "GB")
 {
  return $fileSize = round($size / 1024 / 1024 / 1024,4) . 'GB';	
 }
}


}
?>