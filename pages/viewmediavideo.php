<?php
// session_start();
// $url= $_SERVER['REQUEST_URI'];

// $url_components = parse_url($url);

// // parse_str($url_components['query'], $params);
// echo($_GET['pk_ppid']);
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

    <link rel="stylesheet" href="../css/internal/dashboard.css">
    <link rel="stylesheet" href="../css/internal/dashboard_index.css">
    <script src="../js/viewmedia.js"></script>
    <script src="../js/config.js"></script>

</head>

<body>
    
<?php
	if (isset($_SESSION["token"])) {
		echo '<meta name="token" content="' . $_SESSION["token"] . '">';

	}
	?>
    <script>


    </script>

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
                                <a href="#" class="nav-link active">View Media</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6 bg-surface-secondary" id="mainContiermedia">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="col">
                                        <div class="col-auto">
                                            <img src="../assets/house.jpg" alt="" srcset="">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>

                </div>
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="col">
                                        <div class="col-auto">
                                            <img src="../assets/house.jpg" alt="" srcset="">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="col">
                                        <div class="col-auto">
                                            <img src="../assets/house.jpg" alt="" srcset="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="col">
                                        <div class="col-auto">
                                            <img src="../assets/house.jpg" alt="" srcset="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="col">
                                        <div class="col-auto">
                                            <img src="../assets/house.jpg" alt="" srcset="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</body>

</html>