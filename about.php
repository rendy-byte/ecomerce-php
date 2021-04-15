<?php
include('inc/config.php');
session_start();
$tgl=date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>About us</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap2/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap2/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes2/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes2/css/flexslider.css" rel="stylesheet"/>
		<link href="themes2/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes2/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap2/js/bootstrap.min.js"></script>				
		<script src="themes2/js/superfish.js"></script>	
		<script src="themes2/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
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
									<li><a href="">Lower Ground</a></li>									
									<li><a href="">Ground Floor</a></li>
									<li><a href="">1st</a></li>
									<li><a href="">2nd</a></li
									<li><a href="">3rd</a></li>									
								</ul>
							</li>															
							
							<li><a href="about.php">Tentang Kami</a></li>
							<li><a href="livechat.php">Live Chat</a></li>
							<li><a href="membership.php">Membership</a></li>
						</ul>
					</nav>
				</div>
			</section>				
			<section class="header_text sub">
			<img class="pageBanner" src="gambar-slide/pagebanner.jpg" alt="New products" >
				<h4><span>Tentang Kami</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						
							

								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
										<div class="control-group">
												<div class="controls">
												<?php
													$query = mysql_query("SELECT * FROM pageabout") or die(mysql_error());
													$data = mysql_fetch_array($query);
				
				 									echo $data['deskripsi'];
												?>
												</div>
											</div>
										</div>
									</div>
								</div>
							
										
					</div>
				</div>
			</section>			

			<section id="copyright">
				<span>@KLIKSOLOSQUARE2020</span>
			</section>
		</div>
		<script src="themes2/js/common.js"></script>
    </body>
</html>