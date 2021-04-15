<?php
include('inc/config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Store 1st</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="KLIKSOLOSQUARE">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="keranjang.php">Keranjang Belanja</a></li>				
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/logoklik.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="index.php">Beranda</a></li>
							<li><a href="#">Store</a>					
								<ul>
									<li><a href="store.php">All Store</a></li>
									<li><a href="store-LG.php">Lower Ground</a></li>									
									<li><a href="store-GF.php">Ground Floor</a></li>
									<li><a href="store-1st.php">1st</a></li>
									<li><a href="#">2nd</a></li>
									<li><a href="store-3rd.php">3rd</a></li>									
								</ul>
							</li>															
							
							<li><a href="about.php">Tentang Kami</a></li>
							<li><a href="#">Live Chat</a></li>
							<li><a href="#">Membership</a></li>
						</ul>
					</nav>
				</div>
			</section>	
			


			<section class="our_client">
				<div class="row">					
				</div>
			</section>
			
			

			
			<section class="our_client">
				<h4 class="title"><span class="text">Tenant SOLO SQUARE</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="products-3second.php"><img alt="" src="themes/images/clients/10.jpg"></a>
					</div>
					<div class="span2">
						<a href="products-hardware.php"><img alt="" src="themes/images/clients/22.jpg"></a>
					</div>

				</div>
			</section>

			<section class="our_client">
				<div class="row">					
				</div>
			</section>
			
			<section id="copyright">
				<span>@KLIKSOLOSQUARE2020</span>
			</section>

		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>