<?php include('../../config/route.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo __WEBSITE__TITLE__ ;?></title>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap.min.css"></head>
    <script src="..\..\js\config.js"></script>
    <script src="../../js/tbl_registration.js"></script>
    <script src="../../js/loaderhandler.js"></script>
<body>
 <script>
  $(document).ready(function () {
        var screenLoader = new ScreenLoaderHandler("displayScreen");

        
      });
 </script>
 <?php include('../pages/compoent/loadingpage.php') ?>

<section class="displayScreen">
  <!-- 
    <div class="container-scroller d-flex"> -->
  <!-- nav bar -->
  <!-- <?php include('nav.php') ?> -->
    
    <!--end nav bar -->
     <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Registration Page</h4>
                    <!-- <p class="card-description">
                      Add class 
                       <code>.table-{color}</code>
                    </p> -->
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered" id="myTable">
                        <thead>
                          <tr>
                            <th>
                              #
                              <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Mobile No.</th>
                            <th>Address</th>
                            <th>Password</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                            <td>1</td>   
                            <td>Smita</td>
                            <td>Pawar</td>
                            <td>smita123@gmail.com</td>
                            <td>8876323465</td>
                            <td>Kalamba Kolhapur</td>
                            <td>654321</td>
                            </tr>
                            <tr >
                            <td>2</td> 
                            <td>Rohan</td>
                            <td>Desai</td>
                            <td>rohan123@gmail.com</td>
                            <td>8876543287</td>
                            <td>Kale,Sangli</td>
                            <td>234561</td>
                            </tr>
                            <tr>
                            <td>3</td> 
                            <td>Kailas</td>
                            <td>Khot</td>
                            <td>kailas123@gmail.com</td>
                            <td>6567897654</td>
                            <td>Islampur,Satara</td>
                            <td>987654</td>
                            </tr>
                            <tr>
                            <td>4</td> 
                            <td>Aditya</td>
                            <td>Savant</td>
                            <td>aditya123@gmail.com</td>
                            <td>9865432345</td>
                            <td>Kalamba,Kolhapur</td>
                            <td>876543</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
</div>
  </div>  
    </section>  
</body>
</html>