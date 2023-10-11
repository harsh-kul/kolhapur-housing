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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include('../config/route.php');
        include('compoent/commonheader.php'); ?>
    

    <script src="../js/tbl_registration.js"></script>
</head>

<body>


<?php
	if (isset($_SESSION["token"])) {
		echo '<meta name="token" content="' . $_SESSION["token"] . '">';

	}
	?>
<?php include('../pages/compoent/mainheader.php'); ?>


<section>
    <?php include('../pages/compoent/findingheader.php'); ?>
</section>
    <section class="ftco-search">
        <div class="container">
            <div class="row">
                <div class="col-md-12 search-wrap">
                  
                    <form action="#" class="search-property">
                        <div class="row">
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <label for="login_email">Email Or Username</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="icon-pencil"></span></div>
                                        <input type="text" id="login_email" name="login_email" class="form-control"
                                            placeholder="Email Or Username">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <label for="login_password">Password</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="icon-pencil"></span></div>
                                        <input type="password" id="login_password" name="login_password"
                                            class="form-control" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md align-items-center ml-100">
                                <div class="form-group">
                                    <button type="button" class="form-control btn btn-primary" id="login"
                                        name="btn_submit"><span class="button__text">Login</span></button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include('../pages/compoent/aboutus.php'); ?>
	<?php include('../pages/compoent/placemap.php'); ?>


	
	<?php include('../pages/compoent/footer.php'); ?>



</body>

<script src="../js/jquery-migrate-3.0.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/jquery.animateNumber.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/jquery.timepicker.min.js"></script>
<script src="../js/scrollax.min.js"></script>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="../js/google-map.js"></script>
<script src="../js/main.js"></script>
</html>