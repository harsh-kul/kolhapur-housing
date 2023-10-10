<!DOCTYPE html>
<html lang="en">

<head>

  <?php  include('../compoent/reportheader.php') ?>
  



  <link rel="stylesheet" href="../../css/internal/dashboard.css">
  <link rel="stylesheet" href="../../css/internal/dashboard_index.css">
  <script src="../../js/config.js"></script>
  <script src="../../js/datatablehandler.js"></script>
  <script src="../../js/report.js"></script>
  <script src="../../js/loaderhandler.js"></script>
</head>

<body>
  <script>
    $(document).ready(function () {

      var screenLoader = new ScreenLoaderHandler("displayScreen");

      var table = $('#userTable').DataTable({
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
  <?php include('../pages/compoent/loadingpage.php') ?>

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
            <div class="row card-header">
              <div class="col-md-6">
                <input type="date" name="fromDate" id="fromDate">
              </div>

              <div class="col-md-6">
                <input type="date" name="toDate" id="toDate">
              </div>


              <button type="button" id="showUserReport" class="btn btn-success col-md-2 mt-6">Submit</button>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-nowrap" id="userTable">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Address</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
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