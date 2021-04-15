<?php
include('../inc/config.php');
include('cek-login.php');
$tgl=date("Y-m-d");

?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Dashboard Admin</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="js/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><? echo $_SESSION['username'] ?><i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                         <ul class="nav">
                            <li class="active">
                                <a href="index.php">Dashboard</a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Manage <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="barang.php">Barang</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="pesan.php">Pesan</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="pembeli.php">Pembeli</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="about-us.php">Tentang Kami</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="kontak.php">Kontak</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="slide.php">Slide</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="user.php">Daftar User</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="index.php"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="tenant.php"><i class="icon-chevron-right"></i> Tenant Shop</a>
                        </li>
                        <li>
                            <a href="user.php"><i class="icon-chevron-right"></i> User</a>
                        </li>
                        <li>
                            <a href="barang.php"><i class="icon-chevron-right"></i> Barang</a>
                        </li>
                        <li>
                            <a href="pesan.php"><i class="icon-chevron-right"></i> Pesan</a>
                        </li>
                        <li>
                            <a href="pembeli.php"><i class="icon-chevron-right"></i> Pembeli</a>
                        </li>
                        <li>
                            <a href="about-us.php"><i class="icon-chevron-right"></i> Tentang Kami</a>
                        </li>
                        <li>
                            <a href="kontak.php"><i class="icon-chevron-right"></i> Kontak</a>
                        </li>
                        <li>
                            <a href="slide.php"><i class="icon-chevron-right"></i> Slide</a>
                        </li>
                        <li>
                            <a href="live-chat.php"><i class="icon-chevron-right"></i> Live Chat</a>
                        </li>
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        	<div class="navbar">
                            	<div class="navbar-inner">
	                                <ul class="breadcrumb">
	                                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <li>
	                                        <a href="index.php">Dashboard</a>	
	                                    </li>
	                                </ul>
                            	</div>
                        	</div>
                    	</div>
                   
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Users</div>
                                    <div class="pull-right"><span class="badge badge-info">
                                        <?php
                                            $sql="SELECT COUNT(*) AS firstname FROM pengelola";
                                            $query = mysql_query($sql);
                                            $result = mysql_fetch_array($query);

                                            echo "Jumlah : {$result['firstname']}";
                                        ?>
                                    </span></div>

                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Username</th>
                                                <th>Hak Ases</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$query = mysql_query("select * from pengelola");
										 
											$no = 1;
											while ($data = mysql_fetch_array($query)) {
											?>
												<tr>
													<td><?php echo $no; ?></td>
                                                    <td><?php echo $data['firstname']; ?></td>
													<td><?php echo $data['username']; ?></td>
                                                    <td><?php echo $data['hakases']; ?></td>
												</tr>
											<?php
												$no++;
											}
											?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Orders</div>
                                    <div class="pull-right"><span class="badge badge-info">
                                        <?php
                                            $sql="SELECT COUNT(*) AS nama_brg FROM pesan WHERE tanggal='$tgl'";
                                            $query = mysql_query($sql);
                                            $result = mysql_fetch_array($query);

                                            echo "Jumlah Order : {$result['nama_brg']}";
                                            
                                        ?>
                                    </span></div>

                                    <div class="pull-right"><span class="badge badge-info" style="background: Lime; margin-right: 10px; color:Black;">
                                        <?php
                                            $status="Order Complete";
                                            $sql="SELECT COUNT(*) AS status FROM pesan WHERE tanggal='$tgl' and status='$status'";
                                            $query = mysql_query($sql);
                                            $result = mysql_fetch_array($query);

                                            echo "Order Complete : {$result['status']}";
                                            
                                        ?>
                                    </span></div>
                                    
                                    <div class="pull-right"><span class="badge badge-info" style="background: Yellow; margin-right: 10px; color:Black;">
                                        <?php
                                            $status="On Delivery";
                                            $sql="SELECT COUNT(*) AS status FROM pesan WHERE tanggal='$tgl' and status='$status'";
                                            $query = mysql_query($sql);
                                            $result = mysql_fetch_array($query);

                                            echo "On Delivery : {$result['status']}";
                                            
                                        ?>
                                    </span></div>

                                    <div class="pull-right"><span class="badge badge-info" style="background: red; margin-right: 10px;">
                                        <?php
                                            $status="Open";
                                            $sql="SELECT COUNT(*) AS status FROM pesan WHERE tanggal='$tgl' and status='$status'";
                                            $query = mysql_query($sql);
                                            $result = mysql_fetch_array($query);

                                            echo "Open : {$result['status']}";
                                            
                                        ?>
                                    </span></div>
                                </div>

                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php

                                            $per_page = 10;


											$pages = ceil(mysql_result($page_query, 0) / $per_page);
 
											$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
											$start = ($page - 1) * $per_page;
                                            
											$query = mysql_query("SELECT * FROM pesan WHERE tanggal='$tgl' LIMIT $start, $per_page");
										 
											while ($data = mysql_fetch_array($query)) {
											?>
												<tr>
													<td><?php echo $data['id_pesan']; ?></td>
                                                    <td><?php echo $data['nama_brg']; ?></td>
                                                    <td><?php echo $data['tanggal_pesan']; ?></td>
                                                    <td><?php echo $data['total']; ?></td>
                                                    <td><?php echo $data['status']; ?></td>
												</tr>
											<?php	
											}
											?>
                                        </tbody>
                                    </table>
                                    <div align="center">
									<?php
									if($pages >= 1 && $page <= $pages)
									{
									  for($x=1; $x<=$pages; $x++)
									  {
										  //echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
									  	if($x == $page)
											echo ' <b><a href="?page='.$x.'">'.$x.'</a></b> | ';
										else
											echo ' <a href="?page='.$x.'">'.$x.'</a> |';
									  }
									}
									?>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Clients</div>
                                    <div class="pull-right"><span class="badge badge-info">17</span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Vincent</td>
                                                <td>Gabriel</td>
                                                <td>@gabrielva</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Invoices</div>
                                    <div class="pull-right"><span class="badge badge-info">812</span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tbody>

                                        <?php

                                            $per_page = 10;


											$pages = ceil(mysql_result($page_query, 0) / $per_page);
 
											$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
											$start = ($page - 1) * $per_page;
                                            
											$query = mysql_query("SELECT * FROM pesan WHERE tanggal='$tgl' LIMIT $start, $per_page");
										 
											while ($data = mysql_fetch_array($query)) {
											?>
												<tr>
                                                    <td><?php echo $data['id_pesan']; ?></td>
                                                    <td><?php echo $data['tanggal_pesan']; ?></td>
                                                    <td><?php echo $data['total']; ?></td>
												</tr>
											<?php	
											}
											?>
                                        </tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
            
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Shop 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>