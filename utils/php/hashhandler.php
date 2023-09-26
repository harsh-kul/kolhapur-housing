<?php
class Hashhandler
{
    function gethashPassword($plaintext_password)
    {
        $hash = password_hash(
            $plaintext_password,
            PASSWORD_DEFAULT
        );
        return $hash;
    }
    function comparePassword($plaintext_password, $hash)
    {
        // echo ("palin    ".$plaintext_password ."hash   ". $hash);
        $isValid = false;
        $verify = password_verify($plaintext_password, $hash);
        if ($verify) {
            $isValid = true;
        }
        return $isValid;

    }
}
?>