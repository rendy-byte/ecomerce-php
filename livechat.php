<?php
include('inc/config.php');
session_start();
$tgl=date("Y-m-d");
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

		<link href="themes/css/livechat.css" rel="stylesheet"/>

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
				<h5><span>( isikan chat anda pada post chat yang sudah disediakan )</span></h5>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Live Chat</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
										<div class="control-group">
												<div class="controls">
												
													<div class="pesan">
														<table class="art-article" border="0" cellspacing="0" cellpadding="0" style=" margin: 0; width: 100%;">
															<tbody>
																<?php
																	$Tampil="SELECT * FROM chat ORDER BY waktu DESC LIMIT 99;";
																	$query = mysql_query($Tampil);
																	while (	$hasil = mysql_fetch_array ($query)) {
																	$komen = stripslashes ($hasil['komen']);
																	$waktu = stripslashes ($hasil['waktu']);
																	$nama = stripslashes ($hasil['nama']);	
																?>	
																<?php
																	echo"
																	<div id='atas'>$hasil[nama]<span class='waktu'>$hasil[waktu]</span></div>
																	<div id='pesan'>$hasil[komen]</div>";
																}
																?>
															</tbody>
														</table>  
													</div><br>

													<div class="form">
														<form method="POST" name="chat" action="#" enctype="application/x-www-form-urlencoded"><h4>Post your chat:</h4><br>
					
															<p>Name</p><input type="text" placeholder=" Nama Anda" name="nama" maxlength="9" style="width: 95%;"></input><br><br>
															<p>Email</p><input type="text" placeholder=" Alamat email Anda" name="email" maxlength="30" style="width: 95%;"></input><br><br>
															<p>Chat</p><textarea placeholder=" Obrolan Anda" name="komen" rows="2" cols="40" maxlength="120" style="width: 95%;"></textarea><br><br>
					
															<input type="checkbox" name="cek" value="cek" class="art-button"> Confirm you are NOT a spammer</input><br><br>
															<input type="submit" name="submit" value="Send" class="art-button"></input>&nbsp;
															<input type="reset" name="reset" value="Clear" class="art-button"></input>
					
															<?php
																if (isset($_POST['submit'])) {
																	$nama	= $_POST['nama'];
																	$email	= $_POST['email'];
																	$komen	= $_POST['komen'];
																	$waktu	= date ("Y-m-d, H:i a");
																	$cek	= $_POST['cek'];
						
																if ($_POST['nama']=='Admin') { //validasi kata admin
															?>

																	<script language="JavaScript">
																		alert('Anda bukan Admin !');
																		document.location='livechat.php.php';
																	</script>
																	<?php
																		mysql_close($Open);
																}
					
																if (empty($_POST['nama'])|| empty($_POST['email']) || empty($_POST['komen'])) { //validasi data
															?>
		
																	<script language="JavaScript">
																		alert('Data yang Anda masukan tidak lengkap !');
																		document.location='index.php';
																	</script>
																	<?php
																}
					
																if (empty($_POST['cek'])) { //validasi data
															?>
																	<script language="JavaScript">
																		alert('Please Checklist - Confirm you are NOT a spammer !');
																		document.location='index.php';
																	</script>
																	<?php
																}
																	else {
																	$input_chat = "INSERT INTO chat (nama, email, komen, waktu, cek) VALUES ('$nama', '$email', '$komen', '$waktu', '$cek')";
																	$query_input =mysql_query($input_chat);
																if ($query_input) {
															?>
																	<script language="JavaScript">
																		document.location='livechat.php';
																	</script>
																	<?php
																}
																	else{
																		echo'Dbase E';
																	}
																}
																}
																	mysql_close($Open);
															?>
														</form>
													</div>
												
												</div>
											</div>
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