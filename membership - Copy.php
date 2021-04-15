<?php
include('inc/config_member.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Membership</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

		<link href="themes/css/livechat.css" rel="stylesheet"/>
		
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
			
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
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
			<img class="pageBanner" src="gambar-slide/banner undian pcc.jpg" alt="New products" >
				<h2><span style="color:rgb(220, 20, 60)">Preferred Customer Card</span></h2>
				<p><h5><span>Ayoo.. kumpulkan point sebanyak mungkin dengan berbelanja di SOLO SQUARE</span></h5></p>
				<p><h5><span>dapatkan undian hadiah menarik lainnya di akhir tahun 2020.</span></h5></p>
				<p><h5><span>cek point Anda secara <h5 style="color:rgb(0, 0, 255)"> online </h4> disini.</span></h5></p>
			</section>	

			<div class="container-fluid">
            	<div class="row-fluid">
					<!-- block -->
					<div class="navbar navbar-inner block-header">
                        <div class="muted pull-left"><h5>Masukkan ID Membership Anda.!</h5></div>
					</div>
					
					<div class="block-content collapse in">
                        <div class="span12">
							<form class="form-horizontal" method="get" action="membership.php"> 
                            	<fieldset>

								
									<div class="control-group">
                                        <label class="control-label" for="focusedInput"><strong>Cari ID</strong></label>
                                        <div class="controls">
                                        	<input class="input-xlarge focused" name="cari" type="text" placeholder="Masukkan ID Member">
                                        </div>
									</div>
									

									<?php 
										if(isset($_GET['cari'])){
											$cari = $_GET['cari'];
											echo "<b>Hasil pencarian : <font color='#ff0000' size='4'>".$cari."</font></b>";
										}
									?>

									<table border="1">
										<tr bgcolor="#FFFACD">
        									<th>No</th>
        									<th>ID</th>
											<th>Nama</th>
											<th>Point</th>
										</tr>

										<?php 
											if(isset($_GET['cari'])){
												$cari = $_GET['cari'];
												$data = mysql_query("select * from tbmember where barcode like '".$cari."' ORDER BY totpoint DESC");				
											}else{
		
											}
											$no = 1;
											while($d = mysql_fetch_array($data)){
										?>
	
											<tr>
        										<td><?php echo $no++; ?></td>
        										<td><?php echo $d['barcode']; ?></td>
												<td><?php echo $d['nama']; ?></td>
        										<td><?php echo $d['totpoint']; ?></td>
											</tr>
										<?php } ?>
									</table>
									
									<div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        <button type="reset" class="btn">Reset</button>
									</div>
									
								</fieldset>
							</form>


						</div>
					</div>

					
		

				</div>
			</div>
				
			
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