<?php
ini_set ('display_errors', 1);  
ini_set ('display_startup_errors', 1);  
error_reporting (E_ALL);
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require_once '../PHPMailer/Exception.php';
// require_once '../PHPMailer/PHPMailer.php';
// require_once '../PHPMailer/SMTP.php';

class cummunicationUtil
{
    function sendMail($mailId, $otp)
    {

        $to = $mailId; // <– replace with your address here
        $subject = "Registration OTP For Housing Kolhapur";
        $message = "<p>Thank you for choosing Housing Kolhapur. Use the following OTP ".
                    "to complete your Sign Up procedures. OTP is ". $otp ."</p>";
        // $from = 'k11shrutika@gmail.com';
        $headers = ' ' ;
        mail($to, $subject, $message, $headers);
        // echo "Mail Sent.";
        // passing true in constructor enables exceptions in PHPMailer
        // $mail = new PHPMailer(true);

        // try {
        //     // Server settings
        //     $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
        //     $mail->isSMTP();
        //     $mail->Host = 'smtp.gmail.com';
        //     $mail->SMTPAuth = true;
        //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        //     $mail->Port = 587;

        //     $mail->Username = 'website.housingkolhapur@gmail.com'; // YOUR gmail email
        //     $mail->Password = 'nhenpcgnsulrrddt'; // YOUR gmail password

        //     // Sender and recipient settings
        //     $mail->setFrom($mailId, 'Sender Name');
        //     $mail->addAddress($mailId, 'Receiver Name');
        //     $mail->addReplyTo($mailId, 'Sender Name'); // to set the reply to

        //     // Setting the email content
        //     $mail->IsHTML(true);
        //     $mail->Subject = "Send OTP For Registration";
        //     $mail->Body = 'Your Otp Is '.$otp;
        //     //$mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

        //     $mail->send();
        //     // echo "Email message sent.";
        // } catch (Exception $e) {
        //     // echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
        // }
    }
}


// $mail = new PHPMailer(true);

//         try {
//             // Server settings
//             $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
//             $mail->isSMTP();
//             $mail->Host = 'smtp.gmail.com';
//             $mail->SMTPAuth = true;
//             $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//             $mail->Port = 587;

//             $mail->Username = 'k11shrutika@gmail.com'; // YOUR gmail email
//             $mail->Password = 'tnixvawpdbbcshho'; // YOUR gmail password

//             // Sender and recipient settings
//             $mail->setFrom("k11shrutika@gmail.com", 'Sender Name');
//             $mail->addAddress("k11shrutika@gmail.com", 'Receiver Name');
//             $mail->addReplyTo("k11shrutika@gmail.com", 'Sender Name'); // to set the reply to

//             // Setting the email content
//             $mail->IsHTML(true);
//             $mail->Subject = "Send OTP For Registration";
//             $mail->Body = 'Your Otp Is ';
//             $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

//             $mail->send();
//             echo "Email message sent.";
//         } catch (Exception $e) {
//             echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
//         }
?>