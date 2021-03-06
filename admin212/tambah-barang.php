<?php
include('../inc/config.php');
include('cek-login.php');
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Tambah Barang</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
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
                    <a class="brand" href="#">Admin Panel</a>
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
                        <li>
                            <a href="index.php"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="user.php"><i class="icon-chevron-right"></i> User</a>
                        </li>
                        <li class="active">
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
                    </ul>
                </div>
                <!--/span-->
                <div class="span9" id="content">
               
                   <!-- Tambah User -->
                    <div class="row-fluid section">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Tambah Barang</div>
                            </div>
                            
                            <div class="block-content collapse in">
                                <div class="span12">
                                	 <form class="form-horizontal" name="input_barang" enctype="multipart/form-data" method="post" action="insert-barang.php"> 
                                      <fieldset>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Kode Barang</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="kdbarang" type="text" placeholder="Tidak perlu di isi" value="<?php $a="SSQ"; $b=rand(1000,10000); $c=$a.$b; echo $c; ?>" autofocus="on" readonly="readonly" />
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Nama </label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="namabarang" type="text" placeholder="Nama Barang">
                                          </div>
                                        </div>
                               			<div class="control-group">
                                          <label class="control-label">Harga </label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="hargabarang" type="text" placeholder="Harga Barang">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Deskripsi </label>
                                          <div class="controls">
                                           <textarea class="input-xlarge textarea" name="descBrg" placeholder="Deskripsi ..." style="width: 400px; height: 200px"></textarea>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Jumlah </label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="jmlbarang" type="text" placeholder="Jumlah Barang">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Kategori </label>
                                            <div class="controls">
                                            <?php
                                                $result = mysql_query("select * from tbtenant");
                                                $jsArray = "var prdName = new Array();\n";

                                                    echo '<select id="select01" class="chzn-select" name="kategoribarang" onchange="document.getElementById(\'prd_name\').value = prdName[this.value]">';
                                                    echo '<option>-------</option>';
                                                        while ($row = mysql_fetch_array($result)) {
                                                            echo '<option value="' . $row['tenant'] . '">' . $row['tenant'] . '</tenant>';
                                                            $jsArray .= "prdName['" . $row['tenant'] . "'] = '" . addslashes($row['wa']) . "';\n";
                                                        }
                                                    echo '</select>';
                                            ?>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label">WhatShapp Toko </label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge focused" name="wa" id="prd_name" type="text" readonly="readonly">
                                            <script type="text/javascript">
                                                <?php echo $jsArray; ?>
                                            </script>
                                          </div>

                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">Gambar </label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" name="gbarang" type="file">
                                          </div>
                                        </div>
                                        
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                          <button type="reset" class="btn">Reset</button>
                                        </div>
                                      </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
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
        <script src="assets/scripts.js"></script>
    </body>

</html>