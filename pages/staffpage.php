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
 include("../config/route.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo __WEBSITE__TITLE__; ?>
    </title>
    <link rel="stylesheet" href="../css/internal/dashboard.css">
    <link rel="stylesheet" href="../css/internal/dashboard_index.css">
	<?php include('../config/route.php');?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src=<?php echo _JS_LOADER_HANDLER_; ?>></script>
<script src=<?php echo _JS_CONFIG_; ?>></script>
<script src=<?php echo _JS_ROUTE_; ?>></script>
<script src=<?php echo _JS_DRAWER_; ?>></script>
<script src=<?php echo _JS_VALIDATION_HADNLER_; ?>></script>
<script src=<?php echo _JS_ALERT_HADNLER_; ?>></script>
<script src=<?php echo _JS_STRING_HADNLER_; ?>></script>
<script src=<?php echo _JS_UTILS_; ?>></script>
<script src=<?php echo _JS_PROGRESS_BAR_;?>></script>
<script src=<?php echo _JS_INDEX_;?>></script>  
<script src=<?php echo _JS_DATATABLE_;?>></script>
    <script src="../js/tbl_staff.js"></script>
    <script src="../js/datatablehandler.js"></script>
    
</head>

<body>


<?php
	if (isset($_SESSION["token"])) {
		echo '<meta name="token" content="' . $_SESSION["token"] . '">';

	}
	?>

    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <?php include("compoent/adminnav.php") ?>


        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title -->
                                <h1 class="h2 mb-0 ls-tight">Admin Pannel</h1>
                            </div>
                            <!-- Actions -->
                            <div class="col-sm-6 col-12 text-sm-end">
                                <div class="mx-n1">

                                </div>
                            </div>
                        </div>
                        <!-- Nav -->
                        <ul class="nav nav-tabs mt-4 overflow-x border-0">
                            <li class="nav-item ">
                                <a href="#" class="nav-link active">All files</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6 bg-surface-secondary">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">


                    </div>
                    <div class="card shadow border-0 mb-7">
                        <div class="card-header">
                            <h5 class="mb-0">Applications</h5>
                        </div>

                        <form>

                            <div class="row mt-5">
                            <div class="form-outline col-sm-6">
                            First Name
                                </div>
                                <div class="form-outline col-sm-6">
                                    <input type="text" id="staff_sf_name" class="form-control form-control-lg"
                                        placeholder="First Name">
                                </div>
                              

                            </div>
                            <div class="row mt-5">
                            <div class="form-outline col-sm-6">
                            Email
                                </div>
                                <div class="form-outline col-sm-6">
                                    <input type="text" id="staff_sf_email" class="form-control form-control-lg"
                                        placeholder="Email">
                                </div>
                                
                            </div>
                            <div class="row mt-5">
                            <div class="form-outline col-sm-6">
                            Mobile
                                </div>
                                <div class="form-outline col-sm-6">
                                    <input type="text" id="staff_sf_mobile" class="form-control form-control-lg"
                                        placeholder="Mobile">
                                </div>
                                
                            </div>
                            


                            
                            <div class="row mt-5">
                            <div class="form-outline col-sm-6">
                            
                                </div>
                            <div class="form-outline col-sm-6">
                                <button id="btn_update_staff" value="Update" class="btn btn-primary">Update</button>
                            </div>
</div>
                        </form>


                    </div>

                </div>
            </main>
        </div>
    </div>
</body>

</html>