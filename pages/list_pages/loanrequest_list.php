<?php include('../../config/route.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo __WEBSITE__TITLE__ ;?></title>
    <?php include('../compoent/listheader.php') ?>
    <link rel="stylesheet" href="../../css/internal/dashboard.css">
    <link rel="stylesheet" href="../../css/internal/dashboard_index.css">
    <script src="../../js/config.js"></script>
    <script src="../../js/route.js"></script>
    <script src="../../js/datatablehandler.js"></script>
    <script src="../../js/tbl_lone_request.js"></script>
    <script src="../../js/loaderhandler.js"></script>

</head>

<body>
    

<section class="displayScreen">
    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
  
        <!-- Vertical Navbar -->
        <?php include('../compoent/adminnav.php'); ?>
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

                                    <!-- <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Create</span>
                                </a> -->
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
                 
                    <div class="card shadow border-0 mb-7">
                        <div class="card-header">
                            <h5 class="mb-0">Applications</h5>
                        </div>
                        <div class="table-responsive" >
                            <table class="table table-hover table-nowrap" id="loanTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Property Type</th>
                                        <th scope="col">price</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Owner</th>
                                        <th scope="col">Contact No</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Deposite</th>
                                        <th scope="col">Aggrement Month</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody >

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    </section>
</body>

</html>