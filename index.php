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
						<li class="mr-lg-4 mr-3"><a href="artikel.php">Artikel</a></li>
                        <li class="mr-lg-4 mr-3 active"><a href="index.php">Galeri</a></li>
						<li><a href="contact.html">Contact</a></li>
                    </ul>
    </nav>
</header>
<!-- //header -->
        
    </div>
	 <!-- //banner-text -->
	<!--  <div class="agileits-services py-lg-5">
		<div class="container py-5">
            <div class="title-section pb-sm-5 pb-3">
               <h2 class="heading-agileinfo text-center pb-4">Our <span> Services</span></h2>
            </div>
            <div class="agileits-services-row row text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="agileits-services-grids">
                       <span class="fa fa-globe"></span>
                        <h4>Online Courses
                        </h4>
                        <label></label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur. </p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="agileits-services-grids mt-lg-0 mt-md-0 mt-5">
                       <span class="fa fa-book"></span>
                        <h4>Digital Library
                        </h4>
                        <label></label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur. </p>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="agileits-services-grids mt-lg-0 mt-5">
                        <span class="fa fa-cog"></span>
                        <h4>Mission
                        </h4>
                        <label></label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur.</p>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  mt-lg-0 mt-5">
                    <div class="agileits-services-grids">
                       <span class="fa fa-bus"></span>
                        <h4>Vission
                        </h4>
                        <label></label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur.</p>
                        
                    </div>
                </div>
            </div>
        </div> -->
    </div>
  	<!-- promotions -->
	<section class="wthree-row w3-about py-lg-5">
		<div class="container py-5">
            <div class="title-section pb-sm-5 pb-3">
               <h3 class="heading-agileinfo text-center pb-4">Galery<span> Overview</span></h3>
            </div>
			<div class="card-deck">
				<?php
				include "koneksi.php";
				$sql = mysqli_query($con, "SELECT * FROM tb_galeri");
				while($row = mysqli_fetch_array($sql)){
					?>
		 <div class="card">
					<img src="../admin/images/<?php echo $row['gambar']?>" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h3 class="card-title"><?php echo $row['judul']?></h3>
					  <p class="card-text mb-3"><?php echo $row['deskripsi']?></p>
					</div>
				  </div>
				  <?php }?>
			</div>
            </div>
        </section>
<!-- //promotions -->
<!--footer-->
	<footer>
		<div class="container py-md-4 mt-md-3">
			<div class="row footer-top-w3layouts-agile py-5">
				<div class="col-md-4 footer-grid">
					<div class="footer-title">
						<h3>About Us</h3>
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