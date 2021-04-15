<?php
include('inc/config_member.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
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
				<p><h5><span>Ayoo.. kumpulkan point sebanyak mungkin dengan berbelanja di SOLO SQUARE</span></h5></p>
				<p><h5><span>dapatkan undian hadiah menarik lainnya di akhir tahun 2020.</span></h5></p>
				<p><h5><span>cek point Anda secara <h5 style="color:rgb(0, 0, 255)"> online </h4> disini.</span></h5></p>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Checkout Options</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												
												
												<form method="get" action="membership.php">
													<fieldset>
									<div class="control-group">
                                        <label class="control-label" for="focusedInput"><strong>Cari ID</strong></label>
                                        <div class="controls">
                                        	<input class="input-xlarge focused" name="cari" type="text" placeholder="Masukkan ID Member">
                                        </div>
									</div>


														<button type="submit" class="btn btn-primary">Search</button>
                                       					<button type="reset" class="btn">Reset</butto
													</fieldset>
												</form>
											 </div>
											 <div class="span6">

											 <?php 
										if(isset($_GET['cari'])){
											$cari = $_GET['cari'];
											echo "<b>Hasil pencarian : <font color='#ff0000' size='4'>".$cari."</font></b>";
										}
									?>
												 
												
												
												<div class="block">																
                                        			<ul class="small-product">



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
												$data = mysql_query("select * from tbmember where barcode like '%".$cari."' ORDER BY totpoint DESC");				
											}else{
												$data = mysql_query("select * from tbmember where barcode ORDER BY totpoint DESC");
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
										<?php
										}
										?>
									</table>

                                        			</ul>
                                    			</div>
											</div>
										</div>
										<input type="hidden" value=" <?php echo ''.@$total.''; ?>" name="total">
									</div>
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
		<script src="themes2/js/common.js"></script>
    </body>
</html>