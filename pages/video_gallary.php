<?php //session_start();

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

// if (isset($_GET['get_token']) && empty($_SESSION["token"])) {
	// $token = bin2hex(random_bytes(64));
	// $_SESSION["token"] = $token;
// }

// if (isset($_GET['kill_token'])) {
// 	unset($_SESSION["token"]);
// 	session_destroy();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // include('../config/route.php');
    // include('../pages/compoent/commonheader.php'); ?>
    <link rel="stylesheet" href="../css/internal/video_gallary.css">
    <script src="../js/image_gallary.js"></script>
</head>
<?php
if (isset($_GET['mdid'])) {
    $mdid = $_GET['mdid'];

} else {
    echo "Please Select Product";
    $location = __URL_propertypagepage_;
    header('Location:' . $location);
}
?>

<body>
    <div class="grid-row reverse video-gallery">

    </div>
</body>

</html>