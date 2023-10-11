<?php //session_start(); 
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php
	include('config/route.php');
	include('pages/compoent/commonheader.php');
	?>


</head>

<body>
	<?php
	if (isset($_SESSION["token"])) {
		echo '<meta name="token" content="' . $_SESSION["token"] . '">';

	}
	?>
	<?php include('pages/compoent/mainheader.php'); ?>


	<section>
		<?php include('pages/compoent/findingheader.php'); ?>
	</section>





	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(images/bg_1.jpg);">
			<div class="overlay"></div>

			<div class="container">
				<div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
					<div class="col-md-6 text p-4 ftco-animate">
						<h1 class="mb-3">Siddhesh Complex</h1>
						<span class="location d-block mb-3"><i class="icon-my_location"></i> Hari Om Nagar</span>
						<p>Siddhesh Complex is the project that symbolizes way of life declaration. It is the flawless
							mixture of immobility,
							luxury and comfort in one place. The material used in creation ensures long long-lasting
							life combined with quality and sturdiness.</p>

						<a href="#" class="btn-custom p-3 px-4 bg-primary">View Details <span
								class="icon-plus ml-1"></span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image:url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
					<div class="col-md-6 text p-4 ftco-animate">
						<h1 class="mb-3">S R Karveer Nivasini Residency</h1>
						<span class="location d-block mb-3"><i class="icon-my_location"></i>Kanerkar Nagar,
							Kolhapur</span>
						<p>Residential project, S R Karveer Nivasini Residency in Kolhapur is offering units for sale in
							Kanerkar Nagar.
							Check out some Apartment that suit your lifestyle and liking. Possession date of S R Karveer
							Nivasini Residency is Nov, 2025.</p>

						<a href="#" class="btn-custom p-3 px-4 bg-primary">View Details <span
								class="icon-plus ml-1"></span></a>
					</div>
				</div>
			</div>
		</div>

	</section>


	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon"><span class="flaticon-pin"></span></div>
						</div>

						<div class="media-body p-2 mt-2">
							<h3 class="heading mb-3">Find Places Anywhere In The World</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon"><span class="flaticon-detective"></span></div>
						</div>
						<div class="media-body p-2 mt-2">
							<h3 class="heading mb-3">We Have Agents With Experience</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon"><span class="flaticon-house"></span></div>
						</div>
						<div class="media-body p-2 mt-2">
							<h3 class="heading mb-3">Buy &amp; Rent Modern Properties</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon"><span class="flaticon-purse"></span></div>
						</div>
						<div class="media-body p-2 mt-2">
							<h3 class="heading mb-3">Making Money</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-properties" id="propertySection">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Recent Posts</span>
					<h2 class="mb-4">Recent Properties</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="properties-slider owl-carousel ftco-animate">
						<div class="item">
							<div class="properties">
								<a href="#" class="img d-flex justify-content-center align-items-center"
									style="background-image: url(images/properties-1.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<span class="status sale">Sale</span>
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">North Parchmore Street</a></h3>
											<p>Apartment</p>
										</div>
										<div class="two">

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="properties">
								<a href="#" class="img d-flex justify-content-center align-items-center"
									style="background-image: url(images/properties-2.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<span class="status rent">Rent</span>
										<div class="one">
											<h3><a href="#">North Parchmore Street</a></h3>
											<p>Apartment</p>
										</div>
										<div class="two">

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="properties">
								<a href="#" class="img d-flex justify-content-center align-items-center"
									style="background-image: url(images/properties-3.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<span class="status sale">Sale</span>
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">North Parchmore Street</a></h3>
											<p>Apartment</p>
										</div>
										<div class="two">

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="properties">
								<a href="#" class="img d-flex justify-content-center align-items-center"
									style="background-image: url(images/properties-4.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<span class="status sale">Sale</span>
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">North Parchmore Street</a></h3>
											<p>Apartment</p>
										</div>
										<div class="two">

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="properties">
								<a href="#" class="img d-flex justify-content-center align-items-center"
									style="background-image: url(images/properties-5.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<span class="status rent">Rent</span>
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">North Parchmore Street</a></h3>
											<p>Apartment</p>
										</div>
										<div class="two">

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="properties">
								<a href="#" class="img d-flex justify-content-center align-items-center"
									style="background-image: url(images/properties-6.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<span class="status sale">Sale</span>
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">North Parchmore Street</a></h3>
											<p>Apartment</p>
										</div>
										<div class="two">

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

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Special Offers</span>
					<h2 class="mb-4">Most Recommended Properties</h2>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="properties">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center"
							style="background-image: url(images/properties-1.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<span class="status sale">Sale</span>
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">North Parchmore Street</a></h3>
									<p>Apartment</p>
								</div>
								<div class="two">

								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="flaticon-selection"></i> 250sqft</span>
								<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
								<span><i class="flaticon-bed"></i> 4</span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="properties">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center"
							style="background-image: url(images/properties-2.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<span class="status sale">Sale</span>
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">North Parchmore Street</a></h3>
									<p>Apartment</p>
								</div>
								<div class="two">

								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="flaticon-selection"></i> 250sqft</span>
								<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
								<span><i class="flaticon-bed"></i> 4</span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="properties">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center"
							style="background-image: url(images/properties-3.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<span class="status rent">Rent</span>
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">North Parchmore Street</a></h3>
									<p>Apartment</p>
								</div>
								<div class="two">

								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="flaticon-selection"></i> 250sqft</span>
								<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
								<span><i class="flaticon-bed"></i> 4</span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="properties">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center"
							style="background-image: url(images/properties-4.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<span class="status sale">Sale</span>
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">North Parchmore Street</a></h3>
									<p>Apartment</p>
								</div>
								<div class="two">

								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="flaticon-selection"></i> 250sqft</span>
								<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
								<span><i class="flaticon-bed"></i> 4</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php include('pages/compoent/funfact.php'); ?>
	<?php include('pages/compoent/aboutus.php'); ?>
	<?php include('pages/compoent/placemap.php'); ?>



	<?php include('pages/compoent/footer.php'); ?>


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
	<script src="js/index.js"></script>


</body>

</html>