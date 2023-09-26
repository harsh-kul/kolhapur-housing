<?php
// class validatehandler
// {
function isNumber($value)
{
    $status = is_integer($value);
    return $status;
}


function isTenDigit($value)
{
    $length = strlen($value);
    echo "length: " . $length;
    if ($length < 10 && $length > 10) {
        $ErrMsg = "Mobile must have 10 digits.";
        echo $ErrMsg;
    } else {
        echo "Your Mobile number is: " . $value;
    }
}

isTenDigit("128")
// }

?>