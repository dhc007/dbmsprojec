<?php
session_start();
?>


<!DOCTYPE HTML>
<html>

<head>
	<title></title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
	<script type="text/javascript">
		$(function () {
			$('.gallery-grid a').lightBox();
		});
	</script>
</head>

<body>
	<div class="header">
		<div class="wrap">
			<div class="header-bot">
				<div class="logo">
					<a href="index.php"><img src="images/logo1.png" alt="" style="width:450px; height: 160px;"></a>
				</div>
				<div class="cart">
					<div class="menu-main">
						<nav>

							<?php
							if (isset($_SESSION['s_name'])) {
								echo '<ul class="dc_css3_menu">';
								echo '<li class="active"><a href="indexlogin.php">Home</a></li>';
								echo '<li><a href="services.php">Brands</a></li>';
								echo '<li><a href="booking.php">Book</a></li>';
								echo '<li><a href="orders.php">Orders</a></li>';
								echo '<li><a href="logout.php">logout</a></li>';
								echo '</ul>';
							} else {
								echo '<ul class="dc_css3_menu">';
								echo '<li class="active"><a href="index.php">Home</a></li>';
								echo '<li><a href="about.html">About</a></li>';
								echo '<li><a href="services.php">Brands</a></li>';
								echo '<li><a href="contact.php">Contact</a></li>';
								echo '<li><a href="login.php">Login</a></li>';
								echo '<li><a href="register.php">Signup</a></li>';
								echo '</ul>';

							}
							?>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<br><br>
		<div class="box_wrapper">
			<h3>Cars</h3>
		</div>
		<div class="wrap">
			<div class="main-box">
				<div class="gallery-grids">
					<div class="gallery-grid">
						<a href="images/Chevrolet.jpg"><img src="images/Chevrolet.jpg" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>

					<div class="gallery-grid">
						<a href="images/bmw.jpg"><img src="images/bmw.jpg" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>

					<div class="gallery-grid">
						<a href="images/audi.jpg"><img src="images/audi.jpg" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>



				</div>



				<div class="container">
					<div class="row">

						<div class="col-sm-4">
							<a href="chervolet.php">
								<h3>Chevrolet</h3>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="bmw.php">
								<h3>BMW</h3>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="audi.php">
								<h3>Audi</h3>
							</a>
						</div>

					</div>
				</div>

				<br><br><br>






				<div class="gallery-grids">
					<div class="gallery-grid">
						<a href="images/Toyota1.png"><img src="images/Toyota1.png" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>


					<div class="gallery-grid">
						<a href="images/AstonMartin.png"><img src="images/AstonMartin.png" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>

					<div class="gallery-grid">
						<a href="images/Mitsubishi.jpg"><img src="images/Mitsubishi.jpg" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>


				</div>
				<div class="container">
					<div class="row">

						<div class="col-sm-4">
							<a href="toyota.php">
								<h3>Toyota</h3>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="aston%20martin.php">
								<h3>Aston Martin</h3>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="mitsubishi.php">
								<h3>Mitsubishi</h3>
							</a>
						</div>

					</div>
				</div>

				<br><br><br>



				<div class="gallery-grids">





					<div class="clear"> </div>
				</div>
			</div>
		</div>
	</div>


	<div class="header-bottom2">
		<div class="box_wrapper">
			<h3>Bikes</h3>
		</div>
		<div class="wrap">
			<div class="main-box">
				<div class="gallery-grids">
					<div class="gallery-grid">
						<a href="images/bmwbike.png"><img src="images/bmwbike.png" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>

					<div class="gallery-grid">
						<a href="images/ducati.png"><img src="images/ducati.png" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>

					<div class="gallery-grid">
						<a href="images/kawasaki.png"><img src="images/kawasaki.png" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>



				</div>



				<div class="container">
					<div class="row">

						<div class="col-sm-4">
							<a href="bmwbike.php">
								<h3>BMW Bikes</h3>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="ducati.php">
								<h3>Ducati</h3>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="kawasaki.php">
								<h3>Kawasaki</h3>
							</a>
						</div>

					</div>
				</div>

				<br><br><br>






				<div class="gallery-grids">
					<div class="gallery-grid">
						<a href="images/download.png"><img src="images/download.png" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>


					<div class="gallery-grid">
						<a href="images/honda.png"><img src="images/honda.png" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>

					<div class="gallery-grid">
						<a href="images/white.jpeg"><img src="images/white.jpeg" alt=""
								style="width: 375px; height: 210px;"></a>
					</div>


				</div>
				<div class="container">
					<div class="row">

						<div class="col-sm-4">
							<a href="yamaha.php">
								<h3>Yamaha</h3>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="honda.php">
								<h3>Honda</h3>
							</a>
						</div>

						<!-- <div class="col-sm-4">
								<a href="mitsubishi.php"><h3>Mitsubishi</h3></a>       
							</div> -->

					</div>
				</div>

				<br><br><br>



				<div class="gallery-grids">





					<div class="clear"> </div>
				</div>
			</div>
		</div>
	</div>


	<div class="footer">
		<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Our Company</h3>
						<div class="f_menu">
							<ul>
								<li>ACDC AUTO, our dealership specializes in sales of cars and bikes</li>
								<li>Please read our Terms and Conditions </li>
							</ul>
						</div>
					</div>
				</div>


				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Get in touch</h3>
						<ul class="follow_icon">
							<li><a href="https://linkedin.com" style="opacity: 1;"><img src="images/follow_icon4.png"
										alt=""></a></li>
							<li><a href="https://facebook.com" style="opacity: 1;"><img src="images/follow_icon2.png"
										alt=""></a></li>
							<li><a href="https://twitter.com/" style="opacity: 1;"><img src="images/follow_icon1.png"
										alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon5.png" alt=""></a></li>
						</ul>
						<p>+91 9876543210</p>
						<span>support@ACDCauto.com</span>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

</body>

</html>