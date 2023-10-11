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
    <script src="../js/tbl_lone_list.js"></script>

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
<section class="ftco-search" id="saveloan">
        <div class="container">
          <div class="row">
            <div class="col-md search-wrap">
              <form action="#" class="search-property">
                <div class="row">
                  <div class="col-md align-items-end">
                    <div class="form-group">
                      <div class="user-input-wrp">
                        <br />
                        <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_fname" />
                        <span class="floating-label">First Name</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md align-items-end">
                    <div class="form-group">
                      <div class="user-input-wrp">
                        <br />
                        <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_lname" />
                        <span class="floating-label">Last Name</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md align-items-end">
                    <div class="form-group">
                      <div class="user-input-wrp">
                        <br />
                        <input type="text" class="inputText form-control form-control-lg"
                          id="lonerequest_lr_email_id" />
                        <span class="floating-label">Email Id</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md align-items-end">
                    <div class="form-group">
                      <div class="user-input-wrp">
                        <br />
                        <input type="text" class="inputText form-control form-control-lg"
                          id="lonerequest_lr_mobile_no" />
                        <span class="floating-label">Mobile No</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md align-items-end">
                    <div class="form-group">
                      <br>
                      <select name="lonerequest_lr_req_type" class="form-control form-control-lg"
                        id="lonerequest_lr_req_type" placeholder="Loan Request">
                        <option value="0" selected>Select Type</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md align-items-end">
                    <div class="form-group">
                      <div class="user-input-wrp">
                        <br />
                        <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_amt" />
                        <span class="floating-label">Amount</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md align-items-end">
                    <div class="form-group">
                      <div class="user-input-wrp">
                        <br />
                        <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_tenure" />
                        <span class="floating-label">Tenure</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md align-items-end">
                    <div class="form-group">
                      <div class="user-input-wrp">
                        <br />
                        <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_age" />
                        <span class="floating-label">Age</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md align-items-end">
                    <div class="form-group">
                      <div class="user-input-wrp">
                        <br />
                        <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_income" />
                        <span class="floating-label">Income</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md align-items-end">
                    <div class="form-group">
                      <div class="user-input-wrp">
                        <br />
                        <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_emi" />
                        <span class="floating-label">EMI</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md align-items-end">
                    <!-- <div class="form-group">
                      <button id="btn_save_lonerequest" class="form-control btn btn-primary" value="Save">Save</button>
                    </div> -->
                  </div>
                  <div class="col-md align-items-end">
                    <div class="form-group">
                      <button id="btn_update_lonerequest" class="form-control btn btn-primary"
                        value="Update">Update</button>
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


<script src="../js/jquery.min.js"></script>
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