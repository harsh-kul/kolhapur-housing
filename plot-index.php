<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php
    include('config/route.php');
    include('pages/compoent/commonheader.php'); ?>

  
  <link rel="stylesheet" href="css/internal/index/plot_index.css">

  <script src="js/plot_index.js"></script>


</head>

<body>


<section class="displayScreen">


<?php //include('pages/compoent/drawer.php'); ?>
        <?php include('pages/compoent/mainheader.php');?>
        <?php include('pages/compoent/findingheader.php'); ?>
      </header>

      <main>



        <section>
          <?php include('pages/compoent/carousel.php'); ?>
        </section>

        <section>


          <div class="container">
            <!-- Topic Cards -->
            <div id="cards_landscape_wrap-2">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                      <div class="card-flyer">
                        <div class="text-box">
                          <div class="image-box">
                            <img src="https://cdn.pixabay.com/photo/2018/03/30/15/11/deer-3275594_960_720.jpg" alt="" />
                          </div>
                          <div class="text-container">
                            <h6>Corner Side Plot</h6>

                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                      <div class="card-flyer">
                        <div class="text-box">
                          <div class="image-box">
                            <img src="https://cdn.pixabay.com/photo/2018/04/09/19/55/low-poly-3305284_960_720.jpg"
                              alt="" />
                          </div>
                          <div class="text-container">
                            <h6>Agricultural Land</h6>

                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                      <div class="card-flyer">
                        <div class="text-box">
                          <div class="image-box">
                            <img src="https://cdn.pixabay.com/photo/2018/04/06/13/46/poly-3295856_960_720.png" alt="" />
                          </div>

                          <div class="text-container">
                            <h6>Under &#8377;50Lakhs Plots</h6>

                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                      <div class="card-flyer">
                        <div class="text-box">
                          <div class="image-box">
                            <img src="https://cdn.pixabay.com/photo/2018/03/30/15/12/dog-3275593_960_720.jpg" alt="" />
                          </div>
                          <div class="text-container">
                            <h6>Residential Plot</h6>

                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <section>
          <div class="container">
            <div id="slide-left-container">
              <div class="slide-left">
              </div>
            </div>
            <div id="cards-container">
              <div class="cards" id="plotcarouselItem">
                <!-- <div class="card">
                  <img src="http://via.placeholder.com/220x220" alt="Animals" style="width:100%">
                  <div class="container">
                    <h4>
                      <b>Animals</b>
                    </h4>
                  </div>
                </div>
                <div class="card">
                  <img src="http://via.placeholder.com/220x220" alt="Nature" style="width:100%">
                  <div class="container">
                    <h4>
                      <b>Nature</b>
                    </h4>
                  </div>
                </div>
                <div class="card">
                  <img src="http://via.placeholder.com/220x220" alt="Architecture" style="width:100%">
                  <div class="container">
                    <h4>
                      <b>Architecture</b>
                    </h4>
                  </div>
                </div>
                <div class="card">
                  <img src="http://via.placeholder.com/220x220" alt="Technology" style="width:100%">
                  <div class="container">
                    <h4>
                      <b>Technology</b>
                    </h4>
                  </div>
                </div>
                <div class="card">
                  <img src="http://via.placeholder.com/220x220" alt="People" style="width:100%">
                  <div class="container">
                    <h4>
                      <b>People</b>
                    </h4>
                  </div>
                </div>
                <div class="card">
                  <img src="http://via.placeholder.com/220x220" alt="Animals" style="width:100%">
                  <div class="container">
                    <h4>
                      <b>Animals</b>
                    </h4>
                  </div>
                </div>
                <div class="card">
                  <img src="http://via.placeholder.com/220x220" alt="Nature" style="width:100%">
                  <div class="container">
                    <h4>
                      <b>Nature</b>
                    </h4>
                  </div>
                </div>
                <div class="card">
                  <img src="http://via.placeholder.com/220x220" alt="Architecture" style="width:100%">
                  <div class="container">
                    <h4>
                      <b>Architecture</b>
                    </h4>
                  </div>
                </div>
                <div class="card">
                  <img src="http://via.placeholder.com/220x220" alt="Technology" style="width:100%">
                  <div class="container">
                    <h4>
                      <b>Technology</b>
                    </h4>
                  </div>
                </div>
                <div class="card">
                  <img src="http://via.placeholder.com/220x220" alt="People" style="width:100%">
                  <div class="container">
                    <h4>
                      <b>People</b>
                    </h4>
                  </div>
                </div> -->
              </div>
            </div>

            <div id="slide-right-container">
              <div class="slide-right">
              </div>
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
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>
</html>