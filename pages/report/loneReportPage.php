<?php 
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
  <?php include('../compoent/reportheader.php') ?>


  <link rel="stylesheet" href="../../css/internal/dashboard.css">
  <link rel="stylesheet" href="../../css/internal/dashboard_index.css">
  <script src="../../js/report.js"></script>
  <script src="../../js/datatablehandler.js"></script>
  <script src="../../js/config.js"></script>
  <script src="../../js/loaderhandler.js"></script>

</head>

<body>
  
<?php
	if (isset($_SESSION["token"])) {
		echo '<meta name="token" content="' . $_SESSION["token"] . '">';

	}
	?>
  <script>
    $(document).ready(function () {

      // var screenLoader = new ScreenLoaderHandler("displayScreen");

      var table = $('#loneReportTable').DataTable({
        dom: 'Bfrtip',

        buttons: [
          {
            extend: 'excel',
            // text: 'exel',
            // exportOptions: {
            //   modifier: {
            //     page: 'current'
            //   }
            // }
          },
          {
            extend: 'copy',
            text: '<u>C</u>opy',
            key: {
              key: 'c',
              altKey: true
            }
          },
        ]

      });

    });
  </script>

  <?php //include('../compoent/loadingpage.php') ?>

  <section class="displayScreen">
    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
      <!-- Vertical Navbar -->

      <?php include("../../config/route.php") ?>
      <?php include('../compoent/vertivcalnavbar.php'); ?>
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
                  <!-- <a href="#" class="nav-link active">All files</a> -->
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
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="fromDate"> Start Date</label>
                      <input type="date" name="fromDate" id="fromDate" class="form-control">
                    </div>

                    <div class="col-md-6">
                      <label for="toDate"> End Date</label>
                      <input type="date" name="toDate" id="toDate" class="form-control">
                    </div>


                    <div class="col-md-6 pt-2">
                    <label for="statusId"> Select Status</label>
                      <select name="select_box" class="form-select" id="loneTypeId">
                        <option value="">Select</option>
                        <option value="1">car lone</option>
                        <option value="2">education lone</option>
                        <option value="3">personal lone</option>
                      </select>
                    </div>
                    <div class=" pt-2">
                      <button type="button" id="showReport" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                  <br />
                  <br />
                </div>
              </div>
              <div class="table-responsive">
                <table class="table table-hover table-nowrap" id="loneReportTable">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Sr. No.</th>
                      <th scope="col">User Name</th>
                      <th scope="col">Property Type</th>
                      <th scope="col">Price</th>
                      <th scope="col">Address</th>
                      <th scope="col">Owner Name</th>
                      <th scope="col">Contact No</th>
                      <th scope="col">Status</th>
                      <th scope="col">Deposite</th>
                      <th scope="col">Aggrement Month</th>
                    </tr>
                  </thead>
                  <tbody>

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