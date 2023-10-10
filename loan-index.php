<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php
    include('config/route.php');
    include('pages/compoent/commonheader.php'); ?>

<link rel="stylesheet" href="css/internal/index/lone_index.css">
  <script src="js/lone-index.js"></script>



  <title>
    <?php echo __WEBSITE__TITLE__; ?>
  </title>


</head>

<body>


<section class="displayScreen">
      <style>
/* input:focus ~ .floating-label,
input:not(:focus):valid ~ 
.floating-label{
  top: 8px;
  bottom: 10px;
  left: 20px;
  font-size: 11px;
  opacity: 1;
}

.inputText {
  font-size: 14px;
  width: 200px;
  height: 35px;
}

.floating-label {
  position: absolute;
  pointer-events: none;
  left: 20px;
  top: 18px;
  transition: 0.2s ease all;
} */

      </style>
<?php //include('pages/compoent/drawer.php'); ?>
        <?php include('pages/compoent/mainheader.php');?>
        <?php include('pages/compoent/findingheader.php'); ?>
      <main>


        <section>


          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner ">

              <div class="carousel-item  active">
                <img src="assets/house.jpg" alt="Los Angeles">
              </div>
              <div class="carousel-item">
                <img src="assets/house1.jpg" alt="Chicago">
              </div>
              <div class="carousel-item ">
                <img src="assets/house2.jpg" alt="New York">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

        </section>

        <section>
          <div class="hero-container mt-5">
            <div class="main-container">
              <div class="poster-container">
                <a href="#"><img src="assets/car-loan.png" class="poster" /></a>
              </div>
              <div class="ticket-container">
                <div class="ticket__content">
                  <h4 class="ticket__movie-title">Car Lone</h4>
                  <p class="ticket__movie-slogan">
                    100020 Completed Now
                  </p>
                  <!-- <p class="ticket__current-price">$28.00</p>
                  <p class="ticket__old-price">$44.99</p> -->
                  <button class="ticket__buy-btn">Get Now</button>
                </div>
              </div>
            </div>

            <div class="main-container">
              <div class="poster-container">
                <a href="#"><img src="assets/Education-loan.jpg" class="poster" /></a>
              </div>
              <div class="ticket-container">
                <div class="ticket__content">
                  <h4 class="ticket__movie-title">Education Lone</h4>
                  <p class="ticket__movie-slogan">
                    100020 Completed Now
                  </p>
                  <!-- <p class="ticket__current-price">$28.00</p>
                  <p class="ticket__old-price">$44.99</p> -->
                  <button class="ticket__buy-btn">Get Now</button>
                </div>
              </div>
            </div>

            <div class="main-container">
              <div class="poster-container">
                <a href="#"><img src="assets/Home-Loans.jpg" class="poster" /></a>
              </div>
              <div class="ticket-container">
                <div class="ticket__content">
                  <h4 class="ticket__movie-title">Home Lone</h4>
                  <p class="ticket__movie-slogan">
                    100020 Completed Now
                  </p>
                  <!-- <p class="ticket__current-price">$28.00</p>
                  <p class="ticket__old-price">$44.99</p> -->
                  <button class="ticket__buy-btn">Get Now</button>
                </div>
              </div>
            </div>

            <div class="main-container">
              <div class="poster-container">
                <a href="#"><img src="assets/personal-lone.png" class="poster" /></a>
              </div>
              <div class="ticket-container">
                <div class="ticket__content">
                  <h4 class="ticket__movie-title">Personal Lone</h4>
                  <p class="ticket__movie-slogan">
                    100020 Completed Now
                  </p>
                  <!-- <p class="ticket__current-price">$28.00</p>
                  <p class="ticket__old-price">$44.99</p> -->
                  <button class="ticket__buy-btn">Get Now</button>
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
              <div class="cards" id="carouselItem">

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
                </div>
              </div>
            </div>

            <div id="slide-right-container">
              <div class="slide-right">
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
              <div class="cards" id="carouselItem">

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
                </div>
              </div>
            </div>

            <div id="slide-right-container">
              <div class="slide-right">
              </div>
            </div>

          </div>
        </section>
        <section class="ftco-search">
          <div class="container">
            <div class="row">
              <div class="col-md search-wrap">
                <form action="#" class="search-property">
                  <div class="row">
                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <div class="user-input-wrp">
                          <br/>
                            <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_fname"  />
                            <span class="floating-label">First Name</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md align-items-end">
                        <div class="form-group">
                          <div class="user-input-wrp">
                                <br/>
                                <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_lname"  />
                                <span class="floating-label">Last Name</span>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <div class="user-input-wrp">
                          <br/>
                          <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_email_id"  />
                          <span class="floating-label">Email Id</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <div class="user-input-wrp">
                          <br/>
                          <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_mobile_no"  />
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
                                <br/>
                                <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_amt"  />
                                <span class="floating-label">Amount</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md align-items-end">
                      <div class="form-group">
                          <div class="user-input-wrp">
                              <br/>
                              <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_tenure"  />
                              <span class="floating-label">Tenure</span>
                          </div>                        
                      </div>
                  </div>
                  <div class="col-md align-items-end">
                      <div class="form-group">
                          <div class="user-input-wrp">
                              <br/>
                              <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_age"  />
                              <span class="floating-label">Age</span>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md align-items-end">
                      <div class="form-group">
                          <div class="user-input-wrp">
                              <br/>
                              <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_income"  />
                              <span class="floating-label">Income</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md align-items-end">
                      <div class="form-group">
                          <div class="user-input-wrp">
                              <br/>
                              <input type="text" class="inputText form-control form-control-lg" id="lonerequest_lr_emi"  />
                              <span class="floating-label">EMI</span>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md align-items-end">
                        <div class="form-group">
                            <button id="btn_save_lonerequest" class="form-control btn btn-primary"
                                value="Save">Save</button>
                        </div>
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


        
        
        
        
        <?php include('pages/compoent/funfact.php'); ?>
	<?php include('pages/compoent/placemap.php'); ?>
  <?php include('pages/compoent/footer.php'); ?>

  <script src="js/tbl_lone_request.js"></script>

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
  </body>

</html>