<?php
class DateHandler
{
    function getCurrentDate()
    {
        if(function_exists('date_default_timezone_set')) 
        {
            date_default_timezone_set("Asia/Kolkata");
        }
        return date('Y-m-d H:i:s',time());
    }

}
?>


