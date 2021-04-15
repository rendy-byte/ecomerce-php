<?php
include('inc/config.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sun City Resto</title>
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
									<li><a href="store-LG.php">Lower Ground</a></li>									
									<li><a href="store-GF.php">Ground Floor</a></li>
									<li><a href="store-1st.php">1st</a></li>
									<li><a href="store-2nd.php">2nd</a></li>
									<li><a href="store-3rd.php">3rd</a></li>									
								</ul>
							</li>															
							
							<li><a href="about.php">Tentang Kami</a></li>
							<li><a href="livechat.php">Live Chat</a></li>
							<li><a href="#">Membership</a></li>
						</ul>
					</nav>
				</div>
			</section>	
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/clients/suncity.jpg" alt="New products" >
				<h4><span>Sun City SOLO SQUARE</span></h4>
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span12">								
						<ul class="thumbnails listing-products">
							<?php
								$per_page = 15;

								$page_query = mysql_query("SELECT COUNT(*) FROM barang  where kategori='SUN CITY RESTAURANT'");
								$pages = ceil(mysql_result($page_query, 0) / $per_page);

								$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
								$start = ($page - 1) * $per_page;
										
								$query = mysql_query("SELECT * FROM barang where kategori='SUN CITY RESTAURANT' LIMIT $start, $per_page");
									 
								while ($data = mysql_fetch_assoc($query)) {
							?>

							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<?php echo '<p><a href="product_detail.php?id='.$data['id_brg'].'"><img src="admin/'.$data['gambar_brg'].'" /></a></p>'; ?>
									<?php echo '<a href="product_detail.php?id='.$data['id_brg'].'" class="title">'.$data['nama_brg'].'</a>'; ?>
									<br/>
									<?php echo '<a href="product_detail.php?id='.$data['id_brg'].'" class="category">'."Stok ".$data['jml_brg'].'</a>'; ?>
									<p class="price"><?php echo 'Rp '.number_format($data['harga_brg'],0,',','.'); ?></p>
								</div>
							</li>
								<?php
								}
								?>
							</li>
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
			
			<section class="our_client">
				<div class="row">					
				</div>
			</section>
			
			<section id="copyright">
				<span>@KLIKSOLOSQUARE2020</span>
			</section>
			
		</div>
		<script src="themes2/js/common.js"></script>	
    </body>
</html>