
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Portal Berita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Indoctrination Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	 <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="inner-banner">
        <!-- header -->
    <header>	
	<nav class="mnu navbar-light">
            <div class="logo" id="logo">
                <h1><a href="index.php">Portal Berita</a></h1>
            </div>
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop">
                    <ul class="menu">
                        <li class="mr-lg-4 mr-3"><a href="index.php">Home</a></li>
						<li class="mr-lg-4 mr-3 active"><a href="artikel.php">Artikel</a></li>
                        <li class="mr-lg-4 mr-3"><a href="index.php">Galeri</a></li>
						<li><a href="contact.html">Contact</a></li>
                    </ul>
    </nav>
</header>
<!-- //header -->
        
    </div>
	 <!-- //banner-text -->
	    <section class="banner_bottom py-lg-5">
		<div class="container py-5">
            <div class="title-section pb-sm-5 pb-3">
               <h2 class="heading-agileinfo text-center pb-4">Artikel <span> Us</span></h2>
            </div>
			<div class="inner_sec_info_wthree_agile">
				<?php
				include "koneksi.php";
				$sql = mysqli_query($con, "SELECT * FROM tb_galeri");
				while($row = mysqli_fetch_array($sql)){
					?>
				<div class="row help_full">
					
					<div class="col-lg-6 banner_bottom_grid help">
					<img src="../admin/images/<?php echo $row['gambar']?>"alt=""class="img-fluid">
			 		</div>
					<div class="col-lg-6 banner_bottom_left">
						<h4><?php echo $row['judul']?></h4>
						<p></p>
						</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</section>
	<!--//ab-->

 <!-- stats -->
    <section class="agile_stats py-sm-5">
        <div class="container">
            <div class="py-lg-5 w3-abbottom">
                <div class="row py-5">
                    <div class="counter col-lg-3 col-6">
                        <span class="fa fa-smile-o"></span>
                        <h4 class="timer mt-2">5,100</h4>
                        <p class="count-text text-capitalize text-white">HAPPY STUDENTS</p>
                    </div>

                    <div class="counter col-lg-3 col-6">
                        <span class="fa fa-fighter-jet"></span>
                         <h4 class="timer mt-2">971</h4>
                        <p class="count-text text-capitalize text-white">BRANCHES</p>
                    </div>
                    <div class="counter col-lg-3 col-6 mt-lg-0 mt-4">
                        <span class="fa fa-users"></span>
                        <h4 class="timer mt-2">21</h4>
                        <p class="count-text text-capitalize text-white">TEACHERS</p>
                    </div>
                    <div class="counter col-lg-3 col-6 mt-lg-0 mt-4">
                       <span class="fa fa-comments"></span>
                         <h4 class="timer mt-2">27</h4>
                        <p class="count-text text-capitalize text-white">QUESTIONS ANSWERED </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
<!-- team -->
	<div class="team py-lg-5">
		<div class="container py-5">
            <div class="title-section pb-sm-5 pb-3">
               <h3 class="heading-agileinfo text-center pb-4">Our <span> Teachers</span></h3>
            </div>
			<div class="row team-bottom">
				<div class="col-sm-4 team-grid">
					<img src="images/t1.jpg" class="img-fluid img-thumbnail" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Carol</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<span class="fa fa-facebook f1"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-twitter f2"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-google-plus f3"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 team-grid mt-sm-0 mt-3">
					<img src="images/t2.jpg" class="img-fluid img-thumbnail" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Ellas</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<span class="fa fa-facebook f1"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-twitter f2"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-google-plus f3"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 team-grid  mt-sm-0 mt-3">
					<img src="images/t3.jpg" class="img-fluid img-thumbnail" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Julia</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<span class="fa fa-facebook f1"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-twitter f2"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-google-plus f3"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //team -->
<!--footer-->
	<footer>
		<div class="container py-md-4 mt-md-3">
			<div class="row footer-top-w3layouts-agile py-5">
				<div class="col-md-4 footer-grid">
					<div class="footer-title">
						<h3>Artikel</h3>
					</div>
					<div class="footer-text">
						<p></p>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="contact-info">
					<h4>Location :</h4>
					<p>0926k 4th block building, king Avenue, New York City.</p>
					<div class="phone">
						<h4>Phone :</h4>
						<p>Phone : +121 098 8907 9987</p>
						<p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
					</div>
				</div>
				</div>
				<div class="col-md-4 footer-grid">
					<div class="footer-title">
						<h3>Recent Posts</h3>
					</div>
					<div class="footer-list">
						<div class="flickr-grid">
							<a href="services.html">
								<img src="images/g1.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="images/g2.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="images/g3.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="images/g4.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="images/g5.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="images/g6.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="images/g7.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="images/g9.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="images/g8.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>
		</div>
	</footer>
	<!---->
	<div class="copyright py-3">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-facebook"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-twitter"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-google-plus"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-pinterest"></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="copyrightbottom">
				<p>© 2019 Indoctrination. All Rights Reserved | Design by
					<a href="http://w3layouts.com/">W3layouts</a>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>