<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Benings</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="indexlogin.php"><span class="flaticon-lotus"></span>Bening's</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="indexlogin.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="#treatment" class="nav-link">Treatments</a></li>
	          <li class="nav-item"><a href="#team" class="nav-link">Specialists</a></li>
	          <li class="nav-item"><a href="#testi" class="nav-link">Testimony</a></li>
	          <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="reschedule.php" class="nav-link">Reschedule</a></li>
              <li class="nav-item"><a href="php/logout.php" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-10 ftco-animate text-center">
          	<div class="icon">
	          	<span class="flaticon-lotus"></span>
          	</div>
            <h1>Bening's Clinic Beauty Center</h1>
            <h3>Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : "Guest"; ?>!</h3>
            <div class="row justify-content-center">
	            <div class="col-md-7 mb-3">
	            	<p>Siap wujudkan kulit impian benings mu.</p>
	            </div>
	          </div>
          </div>
        </div>
      </div>
    </section>

		<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5" id="about">
			<div class="overlay"></div>
			<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-3 bread">About</h1>
				<p class="breadcrumbs"><span class="mr-2"><a>Bening's</a></span> <span>About</span></p>
				</div>
			</div>
			</div>
		</section>
		
		<section class="ftco-section ftco-intro" style="background-image: url(images/intro.jpg);">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6">
						<div class="heading-section ftco-animate">
	            <h2 class="mb-4">Benefits of Doing Treatment in Benings Clinic</h2>
	          </div>
	          <p class="ftco-animate">Bersama Bening's Clinic, anda bisa mendapatkan pelayanan kecantikan terbaik dengan tenaga kesehatan profesional dan alat terlengkap di seluruh Indonesia.
				Kami memiliki perangkat laser dengan gelombang pico tercanggih dan termahal di dunia yang sudah bersertifikasi resmi.
			  </p>
					</div>
				</div>
			</div>
		</section>

		<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5" id="treatment">
			<div class="overlay"></div>
			<div class="container">
			  <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
				  <h1 class="mb-3 bread">Treatments</h1>
				  <p class="breadcrumbs"><span class="mr-2"><a>Our</a></span> <span>Treatments</span></p>
				</div>
			  </div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-4 d-flex align-items-stretch">
						<div class="offer-deal text-center px-2 px-lg-5">
							<div class="img" style="background-image: url(images/TREATMENT1.png);"></div>
							<div class="text mt-4">
								<h3 class="mb-4">Treatment Laser Picosure</h3>
								<p class="mb-5">Salah satu laser terbaik, tercanggih dan termahal di dunia untuk menghilangkan kerutan halus, pigmentasi, memudarkan flek dan noda jerawat hingga mencerahkan kulit wajah.</p>
								<p><a href="booking.php" class="btn btn-white px-4 py-3"> Book A Treatment <span class="ion-ios-arrow-round-forward"></span></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex align-items-stretch">
						<div class="offer-deal active text-center px-2 px-lg-5">
							<div class="img" style="background-image: url(images/TREATMENT2.png);"></div>
							<div class="text mt-4">
								<h3 class="mb-4">Treatment Laser Proyellow</h3>
								<p class="mb-5">Laser peremajaan kulit terkini yang mampu merawat kulit hingga ke lapisan kulit terdalam. Laser ini dapat mengatasi
									pigmentasi, kulit sensitif, mengembalikan kilau kulit alami hingga mengatasi flek.
								</p>
								<p><a href="booking.php" class="btn btn-white px-4 py-3"> Book A Treatment <span class="ion-ios-arrow-round-forward"></span></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex align-items-stretch">
						<div class="offer-deal text-center px-2 px-lg-5">
							<div class="img" style="background-image: url(images/TREATMENT3.png);"></div>
							<div class="text mt-4">
								<h3 class="mb-4">Treatment Laser Diode</h3>
								<p class="mb-5">Laser canggih dan sempurna untuk mengatasi jerawat aktif, mengurangi produksi minyak berlebih dan mencerahkan kulit wajah.</p>
								<p><a href="booking.php" class="btn btn-white px-4 py-3"> Book A Treatment <span class="ion-ios-arrow-round-forward"></span></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5" id="team">
			<div class="overlay"></div>
			<div class="container">
			  <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
				  <h1 class="mb-3 bread">Our Team Specialists</h1>
				  <p class="breadcrumbs"><span class="mr-2"><a>Treatments</a></p>
				</div>
			  </div>
			</div>
		  </section>
			  
			  <section class="ftco-section">
			  <div class="container">
				  <div class="row justify-content-center mb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h3 class="subheading">Specialists</h3>
				  <h2 class="mb-1">Meet Our Specialists</h2>
				</div>
			  </div>
				  <div class="row">
					  <div class="col-lg-3 d-flex">
						  <div class="coach align-items-stretch">
							  <div class="img" style="background-image: url(images/trainer-1.jpeg);"></div>
							  <div class="text bg-white p-4 ftco-animate">
								  <span class="subheading">Specialists</span>
								  <h3><a href="#">dr.Juventia Adelia Putri</a></h3>
								  <p><a href="https://wa.me/6282358749847" class="btn btn-white px-4 py-3"> Consult <span class="ion-ios-arrow-round-forward"></span></a></p>
								  <ul class="ftco-social-media d-flex mt-4">
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
						</ul>
								  <p></p>
							  </div>
						  </div>
					  </div>
					  <div class="col-lg-3 d-flex">
						  <div class="coach align-items-stretch">
							  <div class="img" style="background-image: url(images/trainer-2.jpeg);"></div>
							  <div class="text bg-white p-4 ftco-animate">
								  <span class="subheading">Specialists</span>
								  <h3><a href="#">dr.Nazwa Talisya Inayah</a></h3>
								  <p><a href="https://wa.me/6282358749847" class="btn btn-white px-4 py-3"> Consult <span class="ion-ios-arrow-round-forward"></span></a></p>
								  <ul class="ftco-social-media d-flex mt-4">
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
						</ul>
								  <p></p>
							  </div>
						  </div>
					  </div>
					  <div class="col-lg-3 d-flex">
						  <div class="coach align-items-stretch">
							  <div class="img" style="background-image: url(images/trainer-3.jpeg);"></div>
							  <div class="text bg-white p-4 ftco-animate">
								  <span class="subheading">Specialists</span>
								  <h3><a href="#">dr.Allya Nur <br> Azizah</a></h3>
								  <p><a href="https://wa.me/6282358749847" class="btn btn-white px-4 py-3"> Consult <span class="ion-ios-arrow-round-forward"></span></a></p>
								  <ul class="ftco-social-media d-flex mt-4">
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
						</ul>
								  <p></p>
							  </div>
						  </div>
					  </div>
					  <div class="col-lg-3 d-flex">
						  <div class="coach align-items-stretch">
							  <div class="img" style="background-image: url(images/trainer-4.jpeg);"></div>
							  <div class="text bg-white p-4 ftco-animate">
								  <span class="subheading">Specialists</span>
								  <h3><a href="#">dr.Dinnuhoni Trahutomo</a></h3>
								  <p><a href="https://wa.me/6282358749847" class="btn btn-white px-4 py-3"> Consult <span class="ion-ios-arrow-round-forward"></span></a></p>
								  <ul class="ftco-social-media d-flex mt-4">
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
						  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
						</ul>
								  <p></p>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>
		  </section>
	  

    <section class="ftco-section testimony-section" id="testi">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-10 heading-section ftco-animate text-center">
            <h3 class="subheading">Testimony</h3>
            <h2 class="mb-1">Successful Stories</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                  	<div class="line pl-5">
	                    <p class="mb-4 pb-1">Klinik ini tempatnya sangat nyaman dan mewah, cs nya ramah begitupula dengan perawat dan dokternya. recommended untuk kalian yang ingin facial atau treatment lainnya.</p>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name">Gabby Smith</p>
		                    <span class="position">Customer</span>
		                  </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
	                    <p class="mb-4 pb-1">Mantappp, ga nyesel pokoknya perawatan di benings clinic</p>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>

                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name">Wendy Weather</p>
		                    <span class="position">Customer</span>
		                  </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
	                    <p class="mb-4 pb-1">sukak banget treatment di benings, nyaman berkonsultasi dengan dokternya dan mendapatkan perawatan yang sesuai dengan masalah kulit dialami.</p>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>

                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name">Angelina</p>
		                    <span class="position">Customer</span>
		                  </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
	                    <p class="mb-4 pb-1">I love thisss</p>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>

                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_4.jpg)">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name">Lance Roger</p>
		                    <span class="position">Customer</span>
		                  </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
	                    <p class="mb-4 pb-1">Specialistnya cakep cakep...</p>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>

                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name">Aprillia</p>
		                    <span class="position">Customer</span>
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

    <section class="ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="2560">0</strong>
		              	<span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="160">0</strong>
		              	<span>Treatments</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="10">0</strong>
		              	<span>Years of Experience</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="100">0</strong>
		              	<span>Lesson Conducted</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    
		<section class="ftco-gallery ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallery</h3>
            <h2 class="mb-1">See the latest photos</h2>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-1.jpeg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpeg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-21.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-21.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-3.jpeg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpeg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-4.jpeg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpeg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

		

    <footer class="ftco-footer ftco-section" id="contact">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Bening's</h2>
              <p>Apakah anda mengalami masalah kulit yang membutuhkan
				penanganan khusus? Kami dari Bening’s Clinic siap membantu anda
				untuk mendapatkan solusi terbaik. Silakan konsultasikan masalah
				kulit anda.</p>
              <ul class="ftco-footer-social list-unstyled float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">About</a></li>
                <li><a href="#">Treatments</a></li>
                <li><a href="#">Specialists</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">BIG Mall Jl. Untung Suropati no. 8 75126 Samarinda</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Benings@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p class="mb-0">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());

              </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>