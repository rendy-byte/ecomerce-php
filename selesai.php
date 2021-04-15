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
				<h4><span>Selesai Belanja</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Confirm Order</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
										<div class="control-group">
												<div class="controls">
												<?php
												  
												  $nama = $_POST['nama'];
												  $alamat = $_POST['alamat'];
												  $email = $_POST['email'];
												  $telp = $_POST['telepon'];
												  $total = $_POST['total'];
												  
													echo '<a href="index.php">Kembali</a><br>';
												  
													echo '<p style="font-size:14px"> Terima kasih Anda sudah berbelanja di Toko Online kami. Dan berikut ini adalah data yang anda masukkan.</p>';
													echo '<p style="font-size:14px">Total biaya untuk pembelian Produk adalah <strong> Rp '.@number_format($total,0,',','.').'. </strong></p>';
													echo '<p style="font-size:14px"> Cek kembali data Pemesanan Anda sebelum <strong> KLIK KONFIRMASI BELANJA untuk meneruskan ke penjual. </strong>.</p>'; 
					
												  echo '<p style="font-size:14px"> Dan barang akan kami kirim ke alamat di bawah ini: </p>';
												  echo '<p><h4 style="font-size:14px"> Nama : '.$nama.' </h4></p>';
												  echo '<p><h4 style="font-size:14px"> Alamat Lengkap : '.$alamat.'</h4></p>';
												  echo '<p><h4 style="font-size:14px;">Total Belanja Anda : Rp '.@number_format($total,0,',','.').'</h4></p>';
					
					
												  echo '<h6>Dengan Rincian : </h6>';
												  
												  $p = mysql_query('SELECT * FROM pembeli');
												  $cek = mysql_fetch_array($p);
												  $c1 = $cek['nama'];
												  $c2 = $cek['alamat'];
												  $c3 = $cek['email'];
												  $c4 = $cek['telp'];
												  
												  if($c1 == $nama && $c2 == $alamat && $c3 == $email && $c4 == $telp)
												  {
														$i=1;
														foreach($_SESSION as $name => $value)
														{
															if($value > 0)
															{
																if(substr($name, 0, 5) == 'cart_')
																{
																	$id = substr($name, 5, (strlen($name)-5));
																	$get = mysql_query("SELECT * FROM barang WHERE id_brg='$id'");
																	while($get_row = mysql_fetch_assoc($get)){
																		$sub = $get_row['harga_brg'] * $value;
																		
																		echo '<p>'.$i.' '.$get_row['id_brg'].' '.$get_row['nama_brg'].' '.$value.' SubTotal : Rp '.$sub.'</p>';
																													  
																		
																		$getPembeli = mysql_query("SELECT pembeli.id_pembeli, pembeli.nama, pembeli.alamat, barang.id_brg, barang.nama_brg, barang.wa FROM pembeli, barang WHERE nama='$nama' AND alamat='$alamat'" ) or die(mysql_error());
																		
																		$data = mysql_fetch_array($getPembeli);
														  
																		$pemb = $data['id_pembeli'];
																		$na = $data['nama'];
																		$al = $data['alamat'];
																		$ib = $get_row['id_brg'];
																		$nb = $get_row['nama_brg'];
																		$wa = $get_row['wa'];
																		
																		
																		//echo $total;
																		$i++;	  			
																	}		
																}
																//@$total += $sub;
																mysql_query("INSERT INTO pesan VALUES('', '$pemb', '$na', '$al', '$ib', '$nb', '$value', '$sub', now(),'$tgl','Open') ") or die(mysql_error());
															}
														}							  		  
												  }
												  else
												  {
														   //Insert Data Pembeli ke Database 
														$query = mysql_query("INSERT INTO pembeli VALUES('', '$nama', '$alamat', '$email', '$telp')") or die(mysql_error());  
														  
														$i=1;
														foreach($_SESSION as $name => $value)
														{
															if($value > 0)
															{
																if(substr($name, 0, 5) == 'cart_')
																{
																	$id = substr($name, 5, (strlen($name)-5));
																	$get = mysql_query("SELECT * FROM barang WHERE id_brg='$id'");
																	while($get_row = mysql_fetch_assoc($get)){
																		$sub = $get_row['harga_brg'] * $value;
																		
																		echo '<p>'.$i.' '.$get_row['id_brg'].' '.$get_row['nama_brg'].' '.$value.' SubTotal : Rp '.$sub.'</p>';
																		echo '
																			<a href="https://api.whatsapp.com/send?phone='.$get_row['wa'].'&text=Halo%2C%0ASaya%20'.$nama.'%0AAlamat%3A%20'.$alamat.'%0A%3C%3C%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3E%3E%0A%0ADengan Rincian%3A%0A'.$get_row['nama_brg'].'%20'.$value.'pcs%20Sub Total%3A%20Rp%20Rp '.@number_format($sub,0,',','.').'%0A%0A%3C%3C%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3E%3E%0AMohon segera dikirimkan item tersebut " target=new>
																				<button class="btn btn-inverse">Konfirmasi Belanja !</button>
																			</a>';
																													  
																		
																		$getPembeli = mysql_query("SELECT pembeli.id_pembeli, pembeli.nama, pembeli.alamat, barang.id_brg, barang.nama_brg, barang.wa FROM pembeli, barang WHERE nama='$nama' AND alamat='$alamat'" ) or die(mysql_error());
																		
																		$data = mysql_fetch_array($getPembeli);
														  
																		$pemb = $data['id_pembeli'];
																		$na = $data['nama'];
																		$al = $data['alamat'];
																		$ib = $get_row['id_brg'];
																		$nb = $get_row['nama_brg'];
																		$wa = $get_row['wa'];
																		
																		//echo $total;
																		$i++;
					
																		
																		
																		
																	}		
																}
																//@$total += $sub;
																mysql_query("INSERT INTO pesan VALUES('', '$pemb', '$na', '$al', '$ib', '$nb', '$value', '$sub', now(),'$tgl','Open') ") or die(mysql_error());
					
																 
															}
														}
														
												  }
												  
												  /*if ($query) 
												  {
													  header('location:index.php');
												  }*/
												  
												  session_destroy();
											  ?>
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