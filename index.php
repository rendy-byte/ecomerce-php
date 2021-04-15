<?php
include('inc/config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SOLO SQUARE Online</title>
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
		<!--<link href="themes/css/font-awesome.css" rel="stylesheet"/> -->

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
						<div class="keranjang_atas" style="margin-right:40px;"><a href="keranjang.php">
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge">0</span></a>	
						</div>
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
								<ul>
									<li><a href="store.php">All Store</a></li>
									<li><a href="store-LG.php">Lower Ground</a></li>									
									<li><a href="store-GF.php">Ground Floor</a></li>
									<li><a href="store-1st.php">1st</a></li>
									<li><a href="store-2nd.php">2nd</a></li>
									<li><a href="store-3rd.php">3rd</a></li>									
								</ul>
							</li>															
							
							<li><a href="about.php">Tentang Kami</a></li>
							<li><a href="livechat.php">Live Chat</a></li>
							<li><a href="membership.php">Membership</a></li>
						</ul>
					</nav>
				</div>
			</section>
			
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides pull-right">
						<?php
							$query = mysql_query("SELECT * FROM slider ");
				 
							while ($data = mysql_fetch_assoc($query)) {
								echo '<li><img src="admin/'.$data['gambar'].'" alt="" /></li>';	
							}
						?>	
                        
					</ul>
				</div>			
			</section>

			<section class="our_client">
				<div class="row">					
				</div>
			</section>
			
			<section class="header_text">
				<div class="product-category">
					<div class="row" width="30%" height="30%" style="display: block; margin: auto;">					
						<div class="span1">
							<a href="#"><img alt="" src="themes/images/payment/pulsa2.png"></a>
							<h6>Pulsa</h6>
						</div>
						<div class="span1">
						<a href="#"><img alt="" src="themes/images/payment/angsuran2.png"></a>
							<h6>Angsuran</h6>
						</div>
						<div class="span1">
						<a href="#"><img alt="" src="themes/images/payment/bpjs2.png"></a>
							<h6>BPJS</h6>
						</div>
						<div class="span1">
						<a href="#"><img alt="" src="themes/images/payment/data2.png"></a>
							<h6>Paket data</h6>
						</div>
						<div class="span1">
						<a href="#"><img alt="" src="themes/images/payment/kereta api2.png"></a>
							<h6>Tiket kereta api</h6>
						</div>
						<div class="span1">
						<a href="#"><img alt="" src="themes/images/payment/pdam2.png"></a>
							<h6>Biaya PDAM</h6>
						</div>
						<div class="span1">
						<a href="#"><img alt="" src="themes/images/payment/pesawat2.png"></a>
							<h6>Tiket Pesawat</h6>
						</div>
						<div class="span1">
						<a href="#"><img alt="" src="themes/images/payment/pln2.png"></a>
							<h6>Token listrik</h6>
						</div>
						<div class="span1">
						<a href="#"><img alt="" src="themes/images/payment/travel2.png"></a>
							<h6>Travel</h6>
						</div>
						<div class="span1">
						<a href="#"><img alt="" src="themes/images/payment/tv kabel2.png"></a>
							<h6>TV kabel</h6>
						</div>
					</div>
				</div>
			</section>

			<section class="main-content">
				<div class="row">
					<div class="span50">

						<div class="row">
							<div class="span50">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Promo <strong>Terbaru</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
                             
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
                                            	<?php
													$query = mysql_query("SELECT * FROM barang LIMIT 0,4 ");
										 
													while ($data = mysql_fetch_assoc($query)) {
												?>												
                                                    <li class="span3">
                                                        <div class="product-box">
                                                            <span class="sale_tag"></span>
                                                            <?php echo '<p><a href="product_detail.php?id='.$data['id_brg'].'"><img src="admin/'.$data['gambar_brg'].'" /></a></p>'; ?>
                                                            <?php echo '<a href="product_detail.php?id='.$data['id_brg'].'" class="title">'.$data['nama_brg'].'</a>'; ?>
                                                            <br/>
                                                            <?php echo '<a href="product_detail.php?id='.$data['id_brg'].'" class="category">'."Stok ".$data['jml_brg'].'</a>'; ?>
                                                            <p class="price"><?php echo 'Rp '.number_format($data['harga_brg'],0,',','.'); ?> </p>
                                                        </div>
                                                    </li>
												<?php
												}
												?>	
											</ul>
										</div>
                                        
										<div class="item">
											<ul class="thumbnails">
												<?php
													$query = mysql_query("SELECT * FROM barang LIMIT 4,4 ");
										 
													while ($data = mysql_fetch_assoc($query)) {
												?>												
                                                    <li class="span3">
                                                        <div class="product-box">
                                                            <span class="sale_tag"></span>
                                                            <?php echo '<p><a href="product_detail.php?id='.$data['id_brg'].'"><img src="admin/'.$data['gambar_brg'].'" /></a></p>'; ?>  
                                                            <?php echo '<a href="product_detail.php?id='.$data['id_brg'].'" class="title">'.$data['nama_brg'].'</a>'; ?>
                                                            <br/>
                                                            <?php echo '<a href="product_detail.php?id='.$data['id_brg'].'" class="category">'."Stok ".$data['jml_brg'].'</a>'; ?>
                                                            <p class="price"><?php echo 'Rp '.number_format($data['harga_brg'],0,',','.'); ?> </p>
                                                        </div>
                                                    </li>
												<?php
												}
												?>																																
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
	
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Tenant SOLO SQUARE</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="products-suncity.php"><img alt="" src="themes/images/clients/25.jpg"></a>
					</div>
					<div class="span2">
						<a href="products-watchclub.php"><img alt="" src="themes/images/clients/2.jpg"></a>
					</div>
					<div class="span2">
						<a href="products-cardinal.php"><img alt="" src="themes/images/clients/3.jpg"></a>
					</div>
					<div class="span2">
						<a href="products-hava.php"><img alt="" src="themes/images/clients/4.jpg"></a>
					</div>
					<div class="span2">
						<a href="products-nobby.php"><img alt="" src="themes/images/clients/5.jpg"></a>
					</div>

				</div>
			</section>
			
			<br>

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
		<div class="keranjang" style="position: fixed; bottom: 50px; right: 0px; cursor: pointer;">
			<div href="keranjang.php" style="margin-right:40px; width:40px; height:40px; line-height:5; margin-right: 17px;" >
				<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge">0</span></a>	
			</div>
		</div>
    </body>
</html>