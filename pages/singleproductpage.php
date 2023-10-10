
<?php 
$productid=0;
if(isset($_GET['productid']))
{
 $productid=$_GET['productid'];
}
else{
echo  "Please Select Product";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<?php include('../config/route.php'); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/internal/singleproductpage.css">
  <title> <?php echo __WEBSITE__TITLE__ ;?> </title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
  <link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/internal/whatsapp.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


    <link rel="stylesheet" href="../css/internal/index/drawer.css">
    <link rel="stylesheet" href="../css/internal/index/index.css">
    <link rel="stylesheet" href="../css/internal/footer.css">
    <link rel="stylesheet" href="../css/internal/aboutus.css">
	<script src="../js/singleproduct.js"></script>
	<script src="../js/route.js"></script>
    <script src="../js/loaderhandler.js"></script>


</head>
<body>
<script>
    $(document).ready(function () {
        var screenLoader = new ScreenLoaderHandler("displayScreen");
    });
   
</script>
<?php include('../pages/compoent/loadingpage.php') ?>
   <section class="displayScreen">
<header>
<input type="hidden" value=<?php echo $productid;?> id="productid"> 
        <?php include('../pages/compoent/drawer.php'); ?>
        <div class="header-logo">
            <h4>Housing Kolhapur</h4>
        </div>
        <?php include('../pages/compoent/mainheader.php'); ?>

        <div class="mobile__nav__open__btn" onclick="mobileMenu()">
            <span class="bi bi-list"></span>
        </div>
    </header>
    <style>
        
    </style>
<section class="product">
	<div class="product__photo">
		<div class="photo-container">
			<div class="photo-main">
				<div class="controls">
					<i class="material-icons">share</i>
					<i class="material-icons">favorite_border</i>
				</div>
				<img src="../assets/house1.jpg"  alt="green apple slice" class="active-img">
			</div>
			<div class="photo-album">
				<ul>
					<li><img src="../assets/house2.jpg" alt="green apple"></li>
					<li><img src="../assets/house3.jpg" alt="half apple"></li>
					<li><img src="../assets/house4.jpg" alt="green apple"></li>
					<li><img src="../assets/house5.jpg" alt="apple top"></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="product__info">
		<div class="title">
			<h1>Delicious Apples</h1>
			<span>COD: 45999</span>
		</div>
		<div class="price">
			R$ <span>7.93</span>
		</div>
		
		<div class="description">
			<h3>BENEFITS</h3>
			<ul>
				<li>Apples are nutricious</li>
				<li>Apples may be good for weight loss</li>
				<li>Apples may be good for bone health</li>
				<li>They're linked to a lowest risk of diabetes</li>
			</ul>
		</div>
		<button class="buy--btn">ADD TO CART</button>
	</div>
</section>
<?php include('compoent/aboutus.php');?>
<?php include('compoent/contactus.php');?>  
<?php include('compoent/footer.php');?>
</section>
</body>
</html>