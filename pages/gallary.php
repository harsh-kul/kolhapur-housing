<?php
// session_start(); 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// if (isset($_GET['get_token']) && empty($_SESSION["token"])) {
$token = bin2hex(random_bytes(64));
$_SESSION["token"] = $token;
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
    include('../config/route.php');
    include('../pages/compoent/commonheader.php'); ?>
    <link rel="stylesheet" href="../css/internal/gallary.css">

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


    <main id="mainpage">
        <?php
        if (isset($_SESSION["token"])) {
            echo '<meta name="token" content="' . $_SESSION["token"] . '">';

        }
        ?>
        <div class="tabs_container">
            <button class="btn active" id="flex-item-1">Images</button>
            <button class="btn " id="flex-item-2">Videos</button>
        </div>
        <div class="page_tabs">
            <div class="tab" id="login_div">
                <!-- <form  style=" width: 950px;
                    height: 703px;"> -->
                <?php include "image_gallary.php" ?>
                <!-- </form> -->

            </div>
            <div class="tab" id="signup_div">
                <!-- <form style=" width: 950px;
                    height: 703px;"> -->
                <?php include "video_gallary.php" ?>
                <!-- </form> -->

            </div>
        </div>
    </main>
    <script src="../js/gallary.js"></script>
</body>

</html>