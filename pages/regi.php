<?php 
session_start(); 
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
    <!-- END nav -->
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

                                    <div class="form-field">
                                        <div class="user-input-wrp">
                                            <br />
                                            <input type="text" class="inputText form-control form-control-lg"
                                                id="registration_rg_fname" required />
                                            <span class="floating-label"> Name</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">

                                    <div class="form-field">
                                        <div class="user-input-wrp">
                                            <br />
                                            <input type="text" class="inputText form-control form-control-lg"
                                                id="registration_rg_email" required />
                                            <span class="floating-label"> Email</span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md align-items-end">
                                <div class="form-group">

                                    <div class="form-field">
                                        <div class="user-input-wrp">
                                            <br />
                                            <input type="text" class="inputText form-control form-control-lg"
                                                id="registration_rg_mobile" required />
                                            <span class="floating-label"> Mobile</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">

                                    <div class="form-field">
                                        <div class="user-input-wrp">
                                            <br />
                                            <input type="text" class="inputText form-control form-control-lg"
                                                id="registration_rg_address" required />
                                            <span class="floating-label"> Address</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md align-items-end">
                                <div class="form-group">

                                    <div class="form-field">
                                        <div class="user-input-wrp">
                                            <br />
                                            <input type="text" class="inputText form-control form-control-lg"
                                                id="registration_rg_password" required />
                                            <span class="floating-label"> Password</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">

                                    <div class="form-field">
                                        <div class="user-input-wrp">
                                            <br />
                                            <input type="text" class="inputText form-control form-control-lg"
                                                id="registration_rg_confim_password" required />
                                            <span class="floating-label"> Confirm Password</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="registration_roles" class="mt-3 form-field">
                                        <input type="checkbox" id="registration_rg_is_seller"
                                            value="SE">&nbsp;&nbsp;&nbsp;&nbsp;<label
                                            for="registration_role">Seller</label>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" id="registration_rg_is_buyer"
                                            value="BU">&nbsp;&nbsp;&nbsp;&nbsp;<label
                                            for="registration_role">Buyer</label>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" id="registration_rg_col1"
                                            value="O">&nbsp;&nbsp;&nbsp;&nbsp;<label
                                            for="registration_role">Other</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md align-items-center ml-100">
                                <div class="form-group">
                                    <button type="button" class="form-control btn btn-primary"
                                        id="btn_save_registration"><span class="button__text">Sign Up</span></button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php include('../pages/compoent/footer.php'); ?>

    <!-- loader -->
    <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div> -->


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

</body>

</html>