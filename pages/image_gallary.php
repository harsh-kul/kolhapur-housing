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
    <link rel="stylesheet" href="../css/internal/image_gallary.css">
    <script src="../js/image_gallary.js"></script>
</head>
<?php
// if (isset($_GET['mdid'])) {
//     $mdid = $_GET['mdid'];

// } else {
//     echo "Please Select Product";
//     $location = __URL_propertypagepage_;
//     header('Location:' . $location);
// }
?>

<body>
    
<?php
	// if (isset($_SESSION["token"])) {
	// 	echo '<meta name="token" content="' . $_SESSION["token"] . '">';

	// }
	// ?>
    <input type="hidden" name="mdid" id="mdid" value=<?php echo $mdid ?>>
    <div class="gallery" id="gallery">
        <!-- <input type="radio" checked="checked" name="select" id="img-tab-1">
        <label for="img-tab-1"
            style="background-image: url(https://images.unsplash.com/photo-1558981000-f294a6ed32b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjc5NjV9&auto=format&fit=crop&w=2550&q=80);"></label>
        <img src="https://images.unsplash.com/photo-1558981000-f294a6ed32b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjc5NjV9&auto=format&fit=crop&w=2550&q=80"
            border="0">

        <input type="radio" name="select" id="img-tab-2">
        <label for="img-tab-2"
            style="background-image: url(https://images.unsplash.com/photo-1558981359-219d6364c9c8?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60);"></label>
        <img src="https://images.unsplash.com/photo-1558981359-219d6364c9c8?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
            border="0">

        <input type="radio" name="select" id="img-tab-3">
        <label for="img-tab-3"
            style="background-image: url(https://images.unsplash.com/photo-1558981285-501cd9af9426?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60);"></label>
        <img src="https://images.unsplash.com/photo-1558981285-501cd9af9426?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
            border="0">

        <input type="radio" name="select" id="img-tab-4">
        <label for="img-tab-4"
            style="background-image: url(https://images.unsplash.com/photo-1558981001-1995369a39cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60);"></label>
        <img src="https://images.unsplash.com/photo-1558981001-1995369a39cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
            border="0">

        <input type="radio" name="select" id="img-tab-5">
        <label for="img-tab-5"
            style="background-image: url(https://images.unsplash.com/photo-1558980394-dbb977039a2e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60);"></label>
        <img src="https://images.unsplash.com/photo-1558980394-dbb977039a2e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
            border="0">

        <input type="radio" name="select" id="img-tab-6">
        <label for="img-tab-6"
            style="background-image: url(https://images.unsplash.com/photo-1558980664-769d59546b3d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjExMDk0fQ&auto=format&fit=crop&w=800&q=60);"></label>
        <img src="https://images.unsplash.com/photo-1558980664-769d59546b3d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjExMDk0fQ&auto=format&fit=crop&w=800&q=60"
            border="0">

        <input type="radio" name="select" id="img-tab-7">
        <label for="img-tab-7"
            style="background-image: url(https://images.unsplash.com/photo-1558981403-c5f9899a28bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60);"></label>
        <img src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=601.2.1&auto=format&fit=crop&w=800&q=60"
            border="0">

        <input type="radio" name="select" id="img-tab-8">
        <label for="img-tab-8"
            style="background-image: url(https://images.unsplash.com/photo-1558980664-2506fca6bfc2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60);"></label>
        <img src="https://images.unsplash.com/photo-1558980664-2506fca6bfc2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
            border="0"> -->
    </div>
</body>

</html>