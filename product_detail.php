<?php
include('inc/config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Detail Produk</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
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
				<h4><span>Detail Produk</span></h4>
				<ul class="thumbnails small">								
				</ul>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">						
						<div class="row">
							<div class="span4">
                        		<?php
						  			$id = $_GET['id'];
						  			$query = mysql_query("SELECT * FROM barang WHERE id_brg='$id'") or die(mysql_error());
						  			$data = mysql_fetch_array($query);
								?>
								<?php echo '<a href="admin/'.$data['gambar_brg'].'" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="admin/'.$data['gambar_brg'].'"></a>'; ?>
								<ul class="thumbnails small">							
								</ul>
							</div>												
							
							<div class="span5">
								<address>
									<?php echo '<strong>Nama Barang : </strong> <span> '.$data['nama_brg'].' </span><br>
									<strong>Kode Produk : </strong> <span> '.$data['id_brg'].' </span><br>
									<strong>Stok : </strong> <span> '.$data['jml_brg'].' </span><br>
									<strong>Kategori : </strong> <span> '.$data['kategori'].' </span><br>'; ?>							
								</address>									
								<?php echo '<h4><strong>Harga : Rp '.number_format($data['harga_brg'],0,',','.');'</strong></h4>'; ?>
							</div>
							<div class="span5">
                                <?php echo '<a class="btn btn-success" href="keranjang.php?add='.$data['id_brg'].'" class="category"><h4>Masukkan Keranjang</h4></a>'; ?>
							</div>							
							<br>
						</div>
							
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Deskripsi</a></li>
								</ul>

								<div class="tab-content">
									<?php echo '<div class="tab-pane active" id="home">'.$data['desc_brg'].'</div>'; ?>
								</div>							
							</div>						
						</div>
					</div>
				</div>
			</section>
            			
			<br>

			<section id="copyright">
				<span>@KLIKSOLOSQUARE2020</span>
			</section>
		</div>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>