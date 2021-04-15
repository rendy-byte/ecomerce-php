<?php
include('inc/config.php');
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
				<h4><span>Check Out</span></h4>
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
												<h4>Data Pribadi &amp; Pengiriman</h4>
												
												<form name="selesai" action="selesai.php" method="post">
													<fieldset>
                                    					<div class="control-group">
                                        					<label class="control-label">Nama</label>
                                        					<div class="controls">
                                            					<input type="text" required placeholder="Nama" name="nama" class="input-xlarge">
                                        					</div>
                                    					</div>
                                    					<div class="control-group">
                                        					<label class="control-label">Alamat Pengiriman</label>
                                        					<div class="controls">
                                            					<input type="text" required placeholder="Alamat Pengiriman" name="alamat" class="input-xlarge">
                                        					</div>
                                    					</div>					  
                                    					<div class="control-group">
                                        					<label class="control-label">Email</label>
                                        					<div class="controls">
                                            					<input type="text" required placeholder="Email" name="email" class="input-xlarge">
                                        					</div>
                                    					</div>
                                    					<div class="control-group">
                                        					<label class="control-label">Telpon / HP</label>
                                        					<div class="controls">
                                            					<input type="text" required placeholder="Telepon" name="telepon" class="input-xlarge">
                                        					</div>
                                    					</div>
														<button type="submit" name="selesai" class="btn btn-primary">Selesai Belanja !</button>
													</fieldset>
												</form>
											 </div>
											 <div class="span6">
												<h4>Keranjang Belanja</h4>
												
												<div class="block">																
                                        			<ul class="small-product">
                                            			<?php 
                                                			$i=1;
                                                			foreach($_SESSION as $name => $value){
                                                    			if($value > 0)
                                                    			{
                                                        			if(substr($name, 0, 5) == 'cart_')
                                                        		{
                                                            		$id = substr($name, 5, (strlen($name)-5));
                                                            		$get = mysql_query("SELECT * FROM barang WHERE id_brg='$id'");
                                                            		while($get_row = mysql_fetch_assoc($get)){
                                                                	$sub = $get_row['harga_brg'] * $value;
                                                                
																		echo '
                                                                		<li>
                                                                    		<h5>'.$i.' . &nbsp; &nbsp; &nbsp; '.$get_row['nama_brg'].'&nbsp; &nbsp; &nbsp; '.$value.' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SubTotal : Rp '.@number_format($sub,0,',','.').'</h5>
																	
																		</li>';
																		$i++;
                                                            		}		
                                                        		}
                                                        		@$total += $sub;
                                                    			}
                                                			}
                                              			?>
                                              			<?php echo '<h5 style="color:#F00">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Total Belanja : Rp '.@number_format($total,0,',','.').' </h5>'; ?>
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