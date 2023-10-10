<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php
  include('config/route.php');
  include('pages/compoent/commonheader.php'); ?>

  <link rel="stylesheet" href="css/internal/index/buy_pp_index.css">
  <script src="js/buy_pp_index.js"></script>
</head>

<body>
  <section class="displayScreen">


    <?php //include('pages/compoent/drawer.php'); ?>
    <?php include('pages/compoent/mainheader.php'); ?>
    <?php include('pages/compoent/findingheader.php'); ?>
    <main>




      <section>
        <?php include('pages/compoent/carousel.php'); ?>
      </section>



      <section class="mt-5">
        <h2 class="text-center"><b> low-cut</b> Properties</h2>
        <div class="container">
          <div id="slide-left-container">
            <div class="slide-left">
            </div>
          </div>
          <div id="cards-container">
            <div class="cards" id="carouselItem">


            </div>
          </div>

          <div id="slide-right-container">
            <div class="slide-right">
            </div>
          </div>

        </div>
      </section>

      <section class="mt-5">
        <h2 class="text-center">Best <b> Houses </b></h2>
        <div id="threePageContainer">
        </div>
        <div class="container">
          <div class="row">

            <div class="col-md-6">
              <h4><a href="#"><span class="badge badge-pill bg-info">See More</span></a></h4>
            </div>
          </div>
        </div>
      </section>

      <section>
        <h2 class="text-center">Best <b> Assets</b> </h2>
        <div class="container">
          <div class="row" id="fourStaticCards">

          </div>
        </div>

      </section>

      <?php include('pages/compoent/funfact.php'); ?>
      <?php include('pages/compoent/placemap.php'); ?>
      <?php include('pages/compoent/footer.php'); ?>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</html>