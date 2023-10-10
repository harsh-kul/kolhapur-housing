<?php include('config/route.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('pages/compoent/commonheader.php'); ?>
  <script src="js/plot_index.js"></script>




  <title>
    <?php echo __WEBSITE__TITLE__; ?>
  </title>


</head>

<body>


  </head>

  <body>

    

<section class="displayScreen">



      <header>
        <?php include('pages/compoent/drawer.php'); ?>
        <div class="header-logo">
          <h4>
            <?php echo __WEBSITE__TITLE__; ?>
          </h4>
        </div>
        <?php include('pages/compoent/mainheader.php'); ?>


      </header>

      <main>
        <?php include('pages/compoent/findingheader.php'); ?>




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
          <div class="container">
            <div id="slide-left-container">
              <div class="slide-left">
              </div>
            </div>
            <div id="cards-container">
              <div class="cards">
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
            <div class="row">
              <div class="col-md-6">
                <div class="movie_card" id="bright">
                  <div class="info_section">
                    <div class="movie_header">
                      <img class="locandina"
                        src="https://movieplayer.net-cdn.it/t/images/2017/12/20/bright_jpg_191x283_crop_q85.jpg" />
                      <h1>Bright</h1>
                      <h4>2017, David Ayer</h4>
                      <span class="minutes">117 min</span>
                      <p class="type">Action, Crime, Fantasy</p>
                    </div>
                    <div class="movie_desc">
                      <p class="text">
                        Set in a world where fantasy creatures live side by side with humans. A human cop is forced to
                        work with
                        an Orc to find a weapon everyone is prepared to kill for.
                      </p>
                    </div>
                    <div class="movie_social">
                      <ul>
                        <li><i class="material-icons">share</i></li>
                        <li><i class="material-icons"></i></li>
                        <li><i class="material-icons">chat_bubble</i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="blur_back bright_back"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-6">
              </div>
              <div class="col-md-6">
                <div class="movie_card" id="tomb">
                  <div class="info_section">
                    <div class="movie_header">
                      <img class="locandina" src="https://mr.comingsoon.it/imgdb/locandine/235x336/53750.jpg" />
                      <h1>Tomb Raider</h1>
                      <h4>2018, Roar Uthaug</h4>
                      <span class="minutes">125 min</span>
                      <p class="type">Action, Fantasy</p>
                    </div>
                    <div class="movie_desc">
                      <p class="text">
                        Lara Croft, the fiercely independent daughter of a missing adventurer, must push herself beyond
                        her
                        limits when she finds herself on the island where her father disappeared.
                      </p>
                    </div>
                    <div class="movie_social">
                      <ul>
                        <li><i class="material-icons">share</i></li>
                        <li><i class="material-icons"></i></li>
                        <li><i class="material-icons">chat_bubble</i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="blur_back tomb_back"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="movie_card" id="ave">
                  <div class="info_section">
                    <div class="movie_header">
                      <img class="locandina" src="https://mr.comingsoon.it/imgdb/locandine/235x336/53715.jpg" />
                      <h1>Black Panther</h1>
                      <h4>2018, Ryan Coogler</h4>
                      <span class="minutes">134 min</span>
                      <p class="type">Action, Adventure, Sci-Fi</p>
                    </div>
                    <div class="movie_desc">
                      <p class="text">
                        T'Challa, the King of Wakanda, rises to the throne in the isolated, technologically advanced
                        African
                        nation, but his claim is challenged by a vengeful outsider who was a childhood victim of
                        T'Challa's
                        father's mistake.
                      </p>
                    </div>
                    <div class="movie_social">
                      <ul>
                        <li><i class="material-icons">share</i></li>
                        <li><i class="material-icons"></i></li>
                        <li><i class="material-icons">chat_bubble</i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="blur_back ave_back"></div>
                </div>
              </div>
            </div>
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
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some example text. Some example text.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some example text. Some example text.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some example text. Some example text.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some example text. Some example text.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
        <section>


          <div id="aboutus">
            <div class="container aboutus">
              <div class="row">
                <div class="col-md-6 p-4 p-sm-5 order-2 order-sm-1">
                  <small class="text-uppercase theme-primary-color">About us</small>
                  <h1 class="h2 mb-4">Your Headline <span class="theme-primary-color">Here</span></h1>
                  <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat
                    iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo
                    omnis illo sequi at velit, odit quod!</p>

                </div>
                <div class="col-md-6 p-0 text-center order-1 order-sm-2">
                  <img
                    src="https://images.pexels.com/photos/3184430/pexels-photo-3184430.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    class="w-100" alt="">
                </div>

                <div class="col-md-6 p-0 text-center">
                  <img
                    src="https://images.pexels.com/photos/2467506/pexels-photo-2467506.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    class="w-100" alt="">
                </div>
                <div class="col-md-6 p-4 p-sm-5 order-2 order-sm-1">
                  <small class="text-uppercase theme-primary-color">About us</small>
                  <h1 class="h2 mb-4">Your Headline <span class="theme-primary-color">Here</span></h1>
                  <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat
                    iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo
                    omnis illo sequi at velit, odit quod!</p>

                </div>
              </div>
            </div>


            <!-- Credit: Componentity.com -->
            <a href="https://componentity.com" target="_blank" class="block">
              <img src="" width="120px" class="d-block mx-auto my-5">
            </a>

          </div>
        </section>
        <div id="contactus">
          <section class="container mt-5">
            <!--Contact heading-->
            <div class="row">

              <!--Grid column-->
              <div class="col-sm-12 mb-4 col-md-5">
                <!--Form with header-->
                <div class="card  rounded-0" id="contactuscardborder">
                  <div class="card-header p-0">
                    <div class="text-white text-center py-2" id="contactuscardheader">
                      <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                      <p class="m-0">We’ll write rarely, but only the best content.</p>
                    </div>
                  </div>
                  <div class="card-body p-3">

                    <div class="form-group">
                      <label> Your name </label>
                      <div class="input-group">
                        <input value="" type="text" name="data[name]" class="form-control"
                          id="inlineFormInputGroupUsername" placeholder="Your name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Your email</label>
                      <div class="input-group mb-2 mb-sm-0">
                        <input type="email" value="" name="data[email]" class="form-control"
                          id="inlineFormInputGroupUsername" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Subject</label>
                      <div class="input-group mb-2 mb-sm-0">
                        <input type="text" name="data[subject]" class="form-control" id="inlineFormInputGroupUsername"
                          placeholder="Subject">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Message</label>
                      <div class="input-group mb-2 mb-sm-0">
                        <input type="text" class="form-control" name="mesg">
                      </div>
                    </div>
                    <div class="text-center">
                      <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block rounded-0 py-2"
                        id="contactsubmitbtn">
                    </div>

                  </div>

                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-sm-12 col-md-7">
                <!--Google map-->
                <div class="mb-4">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117223.77996815204!2d85.3213263!3d23.3432048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11b5a9b0042eef56!2sourcita.com!5e0!3m2!1sen!2sin!4v1589706571407!5m2!1sen!2sin"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
                <!--Buttons-->
                <div class="row text-center">
                  <div class="col-md-4">
                    <a class="px-3 py-2 rounded text-white mb-2 d-inline-block" id="contactusaddress"><i
                        class="fa fa-map-marker"></i></a>
                    <p>
                      <?php echo _ADDRESS_; ?>
                    </p>
                  </div>
                  <div class="col-md-4">
                    <a class=" px-3 py-2 rounded text-white mb-2 d-inline-block" id="contactusmoblie"><i
                        class="fa fa-phone"></i></a>
                    <p><?php echo _MOBILE_NO_; ?></p>
                  </div>
                  <div class="col-md-4">
                    <a class="px-3 py-2 rounded text-white mb-2 d-inline-block" id="contactusemail"><i
                        class="fa fa-envelope"></i></a>
                    <p>
                      <?php echo _MAIL_ID_; ?>
                    </p>
                  </div>
                </div>
              </div>
              <!--Grid column-->
            </div>
          </section>
        </div>

        <?php include('pages/compoent/footer.php'); ?>


    </section>
  </body>

</html>