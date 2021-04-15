<?php
include('../inc/config.php');
include('cek-login.php');
?>
<!DOCTYPE html>
<html>
<head>
        <title>Live Chat</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/livechat.css" rel="stylesheet"/>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
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
                                    <li>
                                        <a tabindex="-1" href="live-chat.php">Live Chat</a>
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
                <div class="span2" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="index.php"><i class="icon-chevron-right"></i> Dashboard</a>
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
                        <li class="active">
                            <a href="live-chat.php"><i class="icon-chevron-right"></i> Live Chat</a>
                        </li>
                    </ul>
                </div>
                <!--/span-->
                
                <div class="span10">
                	<div class="row-fluid">
		
		                <div class="span12" id="content">
		                    <div class="row-fluid">
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Live Chat</div>
		                            </div>
                                    <h2 align="center">Live Chat</h2>

                                    <br>

                                    <div style="overflow:auto; width:30%; height:320px; margin-left:35%;margin-right:35%;">
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
                                        </div>
                                    </div><br>  
 
                                    <div class="form">
                                        <form method="POST" name="chat" action="#" enctype="application/x-www-form-urlencoded"><h4>Post your chat:</h4><br>

                                            <p>Name</p><input type="text" placeholder=" Nama Anda" name="nama" value="Admin" maxlength="9" style="width: 95%;"  disabled></input><br><br>
					                        <p>Email</p><input type="text" placeholder=" Alamat email Anda" name="email" value="ecommerce.ssq@solosquare.com" maxlength="30" style="width: 95%;"  disabled></input><br><br>
					                        <p>Chat</p><textarea placeholder=" Obrolan Anda" name="komen" rows="2" cols="40" maxlength="120" style="width: 95%;"></textarea><br><br>
					
					                        <input type="checkbox" name="cek" value="done" class="art-button"> Confirm you are NOT a spammer</input><br><br>
					                        <input type="submit" name="submit" value="Send" class="art-button"></input>&nbsp;
					                        <input type="reset" name="reset" value="Clear" class="art-button"></input>
                                        </form>

                                        <?php
						                    if (isset($_POST['submit'])) {
						                        $nama	= $_POST['nama'];
						                        $email	= $_POST['email'];
						                        $komen	= $_POST['komen'];
						                        $waktu	= date ("Y-m-d, H:i a");
						                        $cek	= $_POST['cek'];
						
						                    if ($_POST['nama']=='') { //validasi kata admin
					                    ?>

						                    <script language="JavaScript">
							                    alert('Anda bukan Admin !');
							                    document.location='live-chat.php';
                                            </script>
                                            
                                        <?php
						                    mysql_close($Open);
					                        }
					
					                        if (empty($_POST['nama'])|| empty($_POST['email']) || empty($_POST['komen'])) { //validasi data
					                    ?>
		
						                    <script language="JavaScript">
							                    alert('Data yang Anda masukan tidak lengkap !');
							                    document.location='live-chat.php';
						                    </script>
					                    <?php
					                    }
					
					                        if (empty($_POST['cek'])) { //validasi data
					                    ?>
						                    <script language="JavaScript">
							                    alert('Please Checklist - Confirm you are NOT a spammer !');
							                    document.location='live-chat.php';
						                    </script>
					                    <?php
					                    }
						                    else {
							                    $input_chat = "INSERT INTO chat (nama, email, komen, waktu, cek) VALUES ('$nama', '$email', '$komen', '$waktu', '$cek')";
							                    $query_input =mysql_query($input_chat);
							                    if ($query_input) {
						                            ?>
						                                <script language="JavaScript">
							                                document.location='live-chat.php';
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

                                    </div>
                                     
		                        </div>
		                        <!-- /block -->
		                    </div>
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
        <script src="bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
        
		<script src="ckeditor/ckeditor.js"></script>
		<script src="ckeditor/adapters/jquery.js"></script>
        
		<script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Bootstrap
            $('#bootstrap-editor').wysihtml5();
    		
			// Ckeditor standard
            $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
				{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
				[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
				{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
			]});
            $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
        });
		
        
        </script>
    </body>

</html>