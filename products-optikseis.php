<?php
include('inc/config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Produk</title>
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
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
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
							<li><a href="products.php">Produk</a>
								<ul>									
									<li><a href="products.php">Kaos</a></li>
								</ul>
							</li>							
							<li><a href="about.php">Tentang Kami</a></li>
							<li><a href="contact.php">Kontak</a></li>
							<li><a href="livechat.php">Live Chat</a></li>
							<li><a href="membership.php">Membership</a></li>
						</ul>
					</nav>
				</div>
			</section>	
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/clients/page2.jpg" alt="New products" >
			</section>
			

			<section class="our_client">
				<h4 class="title"><span class="text">Optik Seis <strong>SOLO SQUARE</strong></span></h4>
			</section>

			<section class="main-content">
				
				<div class="row">						
					<div class="span12">								
						<ul class="thumbnails listing-products">
							<?php
								$per_page = 12;

								$page_query = mysql_query("SELECT COUNT(*) FROM barang where kategori='optik seis'");
								$pages = ceil(mysql_result($page_query, 0) / $per_page);

								$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
								$start = ($page - 1) * $per_page;
										
								$query = mysql_query("SELECT * FROM barang where kategori='optik seis' LIMIT $start, $per_page");
									 
								while ($data = mysql_fetch_assoc($query)) {
							?>												
							<li class="span3">
											
											<div class="product-box">
												<span class="sale_tag"></span>
												<?php echo '<p><a href="product_detail.php?id='.$data['id_brg'].'"><img src="admin/'.$data['gambar_brg'].'" /></a></p>'; ?>
												<?php echo '<a href="product_detail.php?id='.$data['id_brg'].'" class="title">'.$data['nama_brg'].'</a>'; ?>
												<br/>
												<?php echo '<a href="product_detail.php?id='.$data['id_brg'].'" class="category">'."Stok ".$data['jml_brg'].'</a>'; ?>
												<p class="price"><?php echo 'Rp '.$data['harga_brg']; ?></p>
											</div>
										</li>
										<?php
										}
										?>
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
                            <?php
								if($pages >= 1 && $page <= $pages)
								{
								  for($x=1; $x<=$pages; $x++)
								  {
									  //echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
									if($x == $page)
										echo ' <li class="active"><a href="?page='.$x.'">'.$x.'</a></li>';
									else
										echo ' <li><a href="?page='.$x.'">'.$x.'</a></li>';
								  }
								}
								?>
							</ul>
						</div>
					</div>	
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="index.php">Beranda</a></li>  
							<li><a href="about.php">Tentang Kami</a></li>
							<li><a href="contact.php">Kontak</a></li>
							<li><a href="keranjang.php">Keranjang Belanja</a></li>							
						</ul>					
					</div>
                    <div class="span4"></div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Toko online kami menjual beberapa kaos</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>	
    </body>
</html>