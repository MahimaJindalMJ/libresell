<!DOCTYPE html>
<html lang="en">
<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("libresell") or die(mysql_error());
if(isset($_REQUEST["login"]))
{
$email=$_REQUEST["email"];
$pass=$_REQUEST["password"];
$str="select * from tbluser where email='$email' and password='$pass'";
$cnn = mysql_query($str);
if($cnn != 0)
{
	header("location:home.html");
}
else
{
header("location:login.php");
}
}
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>LIBRESELL</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Welcome to LibreSell!</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
					<!--	<li><a href="#">Store</a></li>
						<li><a href="#">Newsletter</a></li>
						<li><a href="#">FAQ</a></li> -->
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">English (ENG)</a></li>
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">INR <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">INR (₹)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<!--<a class="logo" href="#">
							<img src="./img/logo.png" alt="">
						</a> -->
                        <h2><bold>LIBRESELL</bold></h2>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form method="post">
							<input class="input search-input" type="text" placeholder="Enter your keyword">
							<select class="input search-categories">
								<option value="0">All Categories</option>
                                <option value="1">Novels</option>
                                <option value="1">Biographies</option>
								<option value="1">Educationals</option>
                                <option value="1">Textbooks</option>
								<option value="1">Children books</option>
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="login.html" class="text-uppercase">Login</a> / <a href="signup.html" class="text-uppercase">Join</a>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
								<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> Address</a></li>
                                <li><a href="login.html"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="signup.html"><i class="fa fa-user-plus"></i> Create An Account</a></li>
							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">2</span>
								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span>1080.00₹</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">₹200 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="product-page.html">Twilight series</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product02.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">₹240 <span class="qty">x2</span></h3>
												<h2 class="product-name"><a href="product-page.html">Twilight New moon</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">View Cart</button>
                                        <button class="primary-btn"><a href="checkout.html">Checkout </a><i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<div class="category-nav show-on-click">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Latest Books <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Popular Books</h3></li>
											<li><a href="#">Action & Adventure</a></li>
											<li><a href="#">Antiques & Collectibles</a></li>
											<li><a href="#">Autobiography</a></li>
											<li><a href="#">Children's Fiction</a></li>
											<li><a href="#">Children's Non-Fiction</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Novels</h3></li>
											<li><a href="#">Ghost</a></li>
											<li><a href="#">Drama</a></li>
											<li><a href="#">Espionage</a></li>
											<li><a href="#">Fantasy</a></li>
											<li><a href="#">Gardening</a></li>
                                        </ul>
										<hr class="hidden-md hidden-lg">
                                        
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Educational</h3></li>
											<li><a href="#">Computers</a></li>
											<li><a href="#">Psychology</a></li>
											<li><a href="#">Literature</a></li>
											<li><a href="#">Medical</a></li>
											<li><a href="#">Architecture</a></li>
										</ul>
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/banner05.jpg" alt="">
											<div class="banner-caption text-center">
												<h2 class="white-color">NEW COLLECTION</h2>
												<h3 class="white-color font-weak">HOT DEAL</h3>
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li><a href="#">Religious books</a></li>
						<li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Novels <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Fictional</h3></li>
											<li><a href="#">Action & Adventure</a></li>
											<li><a href="#">Bedtime and Dreams</a></li>
											<li><a href="#">Family</a></li>
											<li><a href="#">Law & Crime</a></li>
											<li><a href="#">Horror & Ghost </a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Non-Fictional</h3></li>
											<li><a href="#">Humor</a></li>
											<li><a href="#">Music</a></li>
											<li><a href="#">Drama</a></li>
											<li><a href="#">Travel</a></li>
											<li><a href="#">Religion</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Thrillers</h3></li>
											<li><a href="#">Suspence</a></li>
											<li><a href="#">Crime</a></li>
											<li><a href="#">Murder</a></li>
											<li><a href="#">Espionage</a></li>
											<li><a href="#">Horror</a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Others</h3></li>
											<li><a href="#">Lifestyles</a></li>
											<li><a href="#">Love Stories</a></li>
											<li><a href="#">Short Stories</a></li>
											<li><a href="#">Fairy Tales</a></li>
											<li><a href="#">Classic</a></li>
										</ul>
									</div>
									<div class="col-md-4 hidden-sm hidden-xs">
										<a class="banner banner-2" href="#">
											<img src="./img/banner04.jpg" alt="">
											<div class="banner-caption">
												<h3 class="white-color">NEW<br>COLLECTION</h3>
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li><a href="#">Stories</a></li>
						<li><a href="#">Children books</a></li>
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Biographies <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Adventurers</a></li>
											<li><a href="#">Explorers</a></li>
											<li><a href="#">Artists</a></li>
											<li><a href="#">Architects</a></li>
											<li><a href="#">Photographers</a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Composers</a></li>
											<li><a href="#">Musicians</a></li>
											<li><a href="#">Editors</a></li>
											<li><a href="#">Producers</a></li>
											<li><a href="#">Directors</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Journalists</a></li>
											<li><a href="#">Publishers</a></li>
											<li><a href="#">Historical</a></li>
											<li><a href="#">Judges</a></li>
											<li><a href="#">Lawyers</a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Educators</a></li>
											<li><a href="#">Literary</a></li>
											<li><a href="#">Medical</a></li>
											<li><a href="#">Military</a></li>
											<li><a href="#">Political</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Personal Memoirs</a></li>
											<li><a href="#">People of Color</a></li>
											<li><a href="#">Presidents</a></li>
											<li><a href="#">Heads of State</a></li>
											<li><a href="#">Rich and Famous</a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Reference</a></li>
											<li><a href="#">Religious</a></li>
											<li><a href="#">Sports</a></li>
											<li><a href="#">Social Scientists</a></li>
											<li><a href="#">Psychologists</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li><a href="#">Educationals Books</a></li>
						<li><a href="#">View All</a></li>
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">Sell books</a></li>
						<li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">latest books <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Action & Adventure</a></li>
											<li><a href="#">Antiques & Collectibles</a></li>
											<li><a href="#">Autobiography</a></li>
											<li><a href="#">Children's Fiction</a></li>
											<li><a href="#">Children's Non-Fiction</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Ghost</a></li>
											<li><a href="#">Drama</a></li>
											<li><a href="#">Espionage</a></li>
											<li><a href="#">Fantasy</a></li>
											<li><a href="#">Gardening</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Computers</a></li>
											<li><a href="#">Psychology</a></li>
											<li><a href="#">Literature</a></li>
											<li><a href="#">Medical</a></li>
											<li><a href="#">Architecture</a></li>
										</ul>
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/banner05.jpg" alt="">
											<div class="banner-caption text-center">
												<h2 class="white-color">NEW COLLECTION</h2>
												<h3 class="white-color font-weak">HOT DEAL</h3>
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">All <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner06.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Fictionals</h3>
												</div>
											</a>
											<hr>
										</div>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Fictional</h3></li>
											<li><a href="#">Action & Adventure</a></li>
											<li><a href="#">Bedtime and Dreams</a></li>
											<li><a href="#">Family</a></li>
											<li><a href="#">Law & Crime</a></li>
											<li><a href="#">Horror & Ghost </a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner07.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Non-fictionals</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Non-Fictional</h3></li>
											<li><a href="#">Humor</a></li>
											<li><a href="#">Music</a></li>
											<li><a href="#">Drama</a></li>
											<li><a href="#">Travel</a></li>
											<li><a href="#">Religion</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner08.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Thrillers</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Thrillers</h3></li>
											<li><a href="#">Suspence</a></li>
											<li><a href="#">Crime</a></li>
											<li><a href="#">Murder</a></li>
											<li><a href="#">Espionage</a></li>
											<li><a href="#">Horror</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner09.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Others</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Others</h3></li>
											<li><a href="#">Lifestyles</a></li>
											<li><a href="#">Love Stories</a></li>
											<li><a href="#">Short Stories</a></li>
											<li><a href="#">Fairy Tales</a></li>
											<li><a href="#">Classic</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li><a href="#">Sales</a></li>
						<li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Other Pages <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="products.html">Products</a></li>
								<li><a href="product-page.html">Product Details</a></li>
								<li><a href="checkout.html">Checkout</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Login</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
         <!--login -->
	      <div class="modal-dialog">
		<div class="modal-content">
             <a href="index.html" class=" ">« Back</a>
			<div class="modal-heading">
				<h2 class="text-center">LogIn</h2>
			</div>
			<hr />
			<div class="modal-body">
				<form method="post">
                    <!-- displaying error msg -->
                    <center>
                    
                    </center>
                    
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" class="form-control" placeholder="abc@gmail.com" name="email" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" class="form-control" placeholder="Password" name="password" />

						</div>

					</div>

					<div class="form-group text-center">
						<a href="signup.html" class="btn btn-link">SignUp</a>
						<button type="submit" class="btn btn-success btn-lg" name="login">LogIn</button>
						<a href="#" class="btn btn-link">Forgot Password?</a>
						
					</div>

				</form>
			</div>
		</div>
	</div>
        	
 <!--	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
                        <h1>LIBRESELL</h1>

                        <!--
						<div class="footer-logo">
							<a class="logo" href="#"><img src="./img/logo.png" alt=""></a>
						</div>    -->

						<p>Sell your books on this website</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Compare</a></li>
							<li><a href="checkout.html">Checkout</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Return policy</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Stay Connected</h3>
						
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
						<!--	<button class="primary-btn">Join Newslatter</button>  -->
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						 <script>document.write(" ");</script> <i class="fa" aria-hidden="false"></i> <a href="https://colorlib.com" target="_blank"></a>
					</div> 
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
