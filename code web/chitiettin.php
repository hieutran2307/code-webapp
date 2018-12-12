<?php 
require "./Db/Conn.php";
require "./Db/truyvan.php";
if( isset($_GET["Id"])){
	$Id= $_GET["Id"];
	settype($Id,"int");
}else{
	$Id =1;
}
$tin =chi_tiet_tin($Id);
$row_tin = mysql_fetch_array($tin);
?>

<html class="no-js" lang="en">
<head>
       
	   <meta charset="utf-8">
	   <meta http-equiv="x-ua-compatible" content="ie=edge">
	   <meta name="description" content="welcome to codeglim">
	   <meta name='copyright' content='codeglim'>
	   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	   <meta name="viewport" content="width=device-width, initial-scale=1">		
	   <title> HỆ THỐNG MAP GIAO THÔNG  &minus;</title>
	   <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet"> 
	   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>	
	   <link rel="stylesheet" href="css/font-awesome.min.css">
	   <link rel="stylesheet" href="css/animate.min.css">
	   <link rel="stylesheet" href="css/slicknav.min.css">		
	   <link rel="stylesheet" href="css/owl.theme.default.css">
	   <link rel="stylesheet" href="css/owl.carousel.min.css">	
	   <link rel="stylesheet" href="css/magnific-popup.css">	
	   <link rel="stylesheet" href="css/bootstrap.min.css">		
	 <link rel="stylesheet" href="style.css">
	   <link rel="stylesheet" href="css/default.css">	
	   <link rel="stylesheet" href="css/responsive.css">	
	   <link rel="stylesheet" href="css/skin/green.css">
	   <link rel="stylesheet" href="#" id="colors">
   </head>
    <body>
	
		<!-- Preloader -->
		<div class="loader">
			<div class="l-inner">
				<div class="k-spinner">
					<div class="k-bubble-1"></div>
					<div class="k-bubble-2"></div>
				</div>
			</div>
        </div>
		<!--/ End Preloader -->
		
		<!-- Mp Color -->
	<?php require "/block/giaodien.php" ?>
		<!--/ ENd Mp Color -->
		
		<!-- Start Header -->
	<?php require "./block/Header.php" ?>
		<!--/ End Header -->
		
		<!-- Start Breadcrumbs -->
		<section id="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Blog Single</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li class="active"><a href="blog-single.html">Blog Single</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Start blog -->
		<section id="blog" class="single section page">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<!-- Single blog -->
						<div class="single-blog">
							<div class="blog-head">
								<img src="HinhAnh/TinTuc/<?php echo $row_tin['HinhAnh'] ?>" alt="#">
							</div>
							<div class="blog-content">
								<h3><a href="#"><?php echo $row_tin['TieuDe'] ?></a></h3>
								<div class="meta">
									<span><i class="fa fa-user"></i>admin</span>
									<span><i class="fa fa-time"></i><?php echo $row_tin['ThoiGian'] ?></span>
								</div>
								<p><?php echo $row_tin['NoiDungChiTiet'] ?></p>
							</div>
						</div>
						<!--/ End Single blog -->
						<!-- Comments -->
						
						<!--/ End Comments -->
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<!-- Blog Sidebar -->
						<div class="blog-sidebar">
							<!-- Start Search Form -->
							<div class="single-sidebar form">
								<form class="search" action="#">
									<input type="text" placeholder="Type To Search">
									<div class="s-button">
										<input type="submit" value="search">
									</div>
								</form>
							</div>
						
						</div>
						<!--/ End Blog Sidebar -->
					</div>
				</div>
			</div>
			<div class="gmap">
				<div class="map"></div>
			</div>
		</section>
		
	
		
		<!-- Start Footer -->
		<?php require "Block/footer.php" ?>

		<!--/ End Footer -->

		<!-- Jquery JS -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		
		<!-- Colors JS -->
		<script type="text/javascript" src="js/colors.js"></script>
		
		<!-- Google Map JS -->
		<script  type="text/javascript" src="js/gmap.js"></script>
		
		<!-- Modernizr JS -->
		<script type="text/javascript"  src="js/modernizr.min.js"></script>
	
		<!-- Appear JS-->
		<script  type="text/javascript" src="js/jquery.appear.js"></script>

		<!-- Animate JS -->
    	<script  type="text/javascript" src="js/wow.min.js"></script>
		
		<!-- Onepage Nav JS -->
    	<script  type="text/javascript" src="js/jquery.nav.js"></script>
		
		<!-- Yt Player -->
		<script  type="text/javascript" src="js/ytplayer.min.js"></script>
	
		<!-- Popup JS -->
		<script type="text/javascript"  src="js/jquery.magnific-popup.min.js"></script>

		<!-- Typed JS -->
		<script  type="text/javascript" src="js/typed.min.js"></script>
		
		<!-- Scroll Up JS -->
		<script  type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
		
		<!-- Slick Nav JS -->
		<script  type="text/javascript" src="js/jquery.slicknav.min.js"></script>
		
		<!-- Counterup JS -->
		<script  type="text/javascript" src="js/waypoints.min.js"></script>
		<script  type="text/javascript" src="js/jquery.counterup.min.js"></script>
		
		<!-- Owl Carousel JS -->
		<script  type="text/javascript" src="js/owl.carousel.min.js"></script>
		
		<!-- Bootstrap JS -->
		<script  type="text/javascript" src="js/bootstrap.min.js"></script>
		
		<!-- Main JS -->
		<script type="text/javascript"  src="js/main.js"></script>
    </body>
</html>